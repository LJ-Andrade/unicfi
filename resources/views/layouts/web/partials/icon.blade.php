{{-- Iconos SVG en línea (estilo Lucide, trazo 1.75). Uso: @include('layouts.web.partials.icon', ['name' => 'phone']) --}}
<svg class="icon {{ $class ?? '' }}" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
@switch($name)
	@case('whatsapp')
		<path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"/><path d="M9 10.5c.5 1.6 2 3.1 3.5 3.5l1.2-1.1 2 .8v1.6c-3.6.4-7.9-3.9-7.5-7.5h1.6l.8 2Z"/>
		@break
	@case('phone')
		<path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
		@break
	@case('mail')
		<rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/>
		@break
	@case('send')
		<path d="m22 2-7 20-4-9-9-4Z"/><path d="M22 2 11 13"/>
		@break
	@case('check')
		<path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><path d="m9 11 3 3L22 4"/>
		@break
	@case('alert')
		<circle cx="12" cy="12" r="10"/><path d="M12 8v4"/><path d="M12 16h.01"/>
		@break
	@case('facebook')
		<path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/>
		@break
	@case('instagram')
		<rect width="20" height="20" x="2" y="2" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><path d="M17.5 6.5h.01"/>
		@break
	@case('youtube')
		<path d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.55 49.55 0 0 1-16.2 0A2 2 0 0 1 2.5 17"/><path d="m10 15 5-3-5-3z"/>
		@break
	@case('linkedin')
		<path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect width="4" height="12" x="2" y="9"/><circle cx="4" cy="4" r="2"/>
		@break
	@case('arrow-right')
		<path d="M5 12h14"/><path d="m12 5 7 7-7 7"/>
		@break
	@case('chevron-up')
		<path d="m18 15-6-6-6 6"/>
		@break
	@case('clock')
		<circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/>
		@break
	@case('search')
		<circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/>
		@break
	@case('users')
		<path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/>
		@break
	@case('video')
		<path d="m16 13 5.2 3.5a.5.5 0 0 0 .8-.4V7.9a.5.5 0 0 0-.8-.4L16 11"/><rect x="2" y="6" width="14" height="12" rx="2"/>
		@break
	@case('briefcase')
		<path d="M16 20V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/><rect width="20" height="14" x="2" y="6" rx="2"/>
		@break
	@case('ball')
		<circle cx="12" cy="12" r="10"/><path d="m12 7 4.2 3-1.6 5H9.4l-1.6-5Z"/><path d="M12 2v5"/><path d="m16.2 10 5.3-1.6"/><path d="m14.6 15 3.3 4.4"/><path d="M9.4 15l-3.3 4.4"/><path d="M7.8 10 2.5 8.4"/>
		@break
@endswitch
</svg>
