<?php

namespace App\Support;

use Illuminate\Support\Collection;

/**
 * Small compatibility builder for the form helpers used by the legacy views.
 */
class Form
{
    private static $model;

    public static function open(array $options = []): string
    {
        $method = strtoupper($options['method'] ?? 'POST');
        $action = $options['url'] ?? null;

        if (isset($options['route'])) {
            $action = is_array($options['route'])
                ? route($options['route'][0], array_slice($options['route'], 1))
                : route($options['route']);
        }

        if ($action === null) {
            $action = url()->current();
        } elseif (is_array($action)) {
            $action = url($action[0], array_slice($action, 1));
        } else {
            $action = url($action);
        }
        $htmlMethod = in_array($method, ['GET', 'POST'], true) ? $method : 'POST';
        $attributes = [
            'action' => $action,
            'method' => $htmlMethod,
        ];

        foreach ($options as $key => $value) {
            if (in_array($key, ['url', 'route', 'method', 'files'], true)) {
                continue;
            }

            $attributes[$key] = $value;
        }

        if (!empty($options['files'])) {
            $attributes['enctype'] = 'multipart/form-data';
        }

        $html = '<form'.self::attributes($attributes).'>';

        if ($method !== $htmlMethod) {
            $html .= '<input type="hidden" name="_method" value="'.self::escape($method).'">';
        }

        if (!in_array($method, ['GET', 'HEAD'], true)) {
            $html .= csrf_field();
        }

        return $html;
    }

    public static function model($model, array $options = []): string
    {
        self::$model = $model;

        return self::open($options);
    }

    public static function close(): string
    {
        self::$model = null;

        return '</form>';
    }

    public static function label(string $name, ?string $value = null, array $options = []): string
    {
        $value = $value ?? ucfirst(str_replace(['_', '-'], ' ', $name));

        return '<label'.self::attributes(array_merge(['for' => $name], $options)).'>'
            .self::escape($value).'</label>';
    }

    public static function text(string $name, $value = null, array $options = []): string
    {
        return self::input('text', $name, $value, $options);
    }

    public static function email(string $name, $value = null, array $options = []): string
    {
        return self::input('email', $name, $value, $options);
    }

    public static function password(string $name, array $options = []): string
    {
        return self::input('password', $name, null, $options, false);
    }

    public static function file(string $name, array $options = []): string
    {
        return self::input('file', $name, null, $options, false);
    }

    public static function input(string $type, string $name, $value = null, array $options = [], bool $useOld = true): string
    {
        if ($useOld) {
            $value = self::value($name, $value);
        }

        $attributes = array_merge([
            'type' => $type,
            'name' => $name,
            'value' => $value,
        ], $options);

        return '<input'.self::attributes($attributes).'>';
    }

    public static function textarea(string $name, $value = null, array $options = []): string
    {
        $value = self::value($name, $value);
        $content = self::escape($value ?? '');

        if (isset($options['size'])) {
            [$cols, $rows] = array_pad(explode('x', $options['size'], 2), 2, null);
            $options['cols'] = $cols;
            $options['rows'] = $rows;
            unset($options['size']);
        }

        return '<textarea'.self::attributes(array_merge(['name' => $name], $options)).'>'
            .$content.'</textarea>';
    }

    public static function select(string $name, $list = [], $selected = null, array $options = []): string
    {
        $selected = self::value($name, $selected);
        $selectedValues = is_array($selected) ? $selected : [$selected];
        $selectedValues = array_map('strval', $selectedValues);
        $placeholder = $options['placeholder'] ?? null;
        unset($options['placeholder']);

        $html = '<select'.self::attributes(array_merge(['name' => $name], $options)).'>';

        if ($placeholder !== null) {
            $isSelected = in_array('', $selectedValues, true) || $selected === null;
            $html .= '<option value=""'.($isSelected ? ' selected' : '').'>'
                .self::escape($placeholder).'</option>';
        }

        if ($list instanceof Collection) {
            $list = $list->all();
        }

        foreach ($list as $key => $label) {
            $isSelected = in_array((string) $key, $selectedValues, true);
            $html .= '<option value="'.self::escape($key).'"'.($isSelected ? ' selected' : '').'>'
                .self::escape($label).'</option>';
        }

        return $html.'</select>';
    }

    public static function submit(string $value, array $options = []): string
    {
        return '<button type="submit"'.self::attributes($options).'>'.self::escape($value).'</button>';
    }

    public static function button(string $value, array $options = []): string
    {
        return '<button'.self::attributes(array_merge(['type' => 'button'], $options)).'>'.$value.'</button>';
    }

    private static function value(string $name, $fallback = null)
    {
        $name = rtrim($name, '[]');
        $modelValue = null;

        if (self::$model !== null) {
            if (is_array(self::$model)) {
                $modelValue = self::$model[$name] ?? null;
            } else {
                $modelValue = data_get(self::$model, $name);
            }
        }

        return old($name, $modelValue ?? $fallback);
    }

    private static function attributes(array $attributes): string
    {
        $html = '';

        foreach ($attributes as $key => $value) {
            if ($value === null || $value === false) {
                continue;
            }

            if ($value === true) {
                $html .= ' '.self::escape($key);
                continue;
            }

            $html .= ' '.self::escape($key).'="'.self::escape($value).'"';
        }

        return $html;
    }

    private static function escape($value): string
    {
        return e((string) $value);
    }
}
