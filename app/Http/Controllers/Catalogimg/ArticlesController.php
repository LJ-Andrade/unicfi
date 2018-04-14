<?php

namespace App\Http\Controllers\Catalogimg;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CatalogimgCategory;
use App\CatalogimgTag;
use App\CatalogimgArticle;
use App\CatalogimgImage;
use File;
use PDF;
use Excel;

class ArticlesController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | VIEW
    |--------------------------------------------------------------------------
    */

    public function index(Request $request)
    {
        $code     = $request->get('code');
        $name     = $request->get('name');
        $category = $request->get('category');
        
        if(isset($code) || isset($name) || isset($category))
        {
            $articles = CatalogimgArticle::search($code, $name, $category)->orderBy('id', 'ASC')->paginate(10); 
        } else {
            $articles = CatalogimgArticle::orderBy('id', 'DESCC')->paginate(10);    
        }

        //$cats = CatalogCategory::orderBy('id','ASC')->get();
        $categories = CatalogimgCategory::orderBy('id','ASC')->pluck('name','id');

        return view('vadmin.catalogimg.index')
            ->with('articles', $articles)
            ->with('categories', $categories);
    }

    public function show($id)
    {
        $article = CatalogimgArticle::find($id);
        if($article == null){
            return back();
        } else {
            return view('vadmin.catalogimg.show')->with('article', $article);
        }
    }

    /*
    |--------------------------------------------------------------------------
    | EXPORT
    |--------------------------------------------------------------------------
    */

    public function exportPdf($params)
    {   
        $items = $this->getData($params);

        $pdf = PDF::loadView('vadmin.catalogimg.invoice', array('items' => $items));
        $pdf->setPaper('A4', 'landscape');
        return $pdf->download('listado-catalogo.pdf');
    }

    public function exportExcel($params)
    {
        $items = $this->getData($params);
        
		Excel::create('Excel', function($excel) use($items){
            $excel->sheet('Listado', function($sheet) use($items) {   
                $sheet->loadView('vadmin.catalogimg.invoice-excel', 
                compact('items'));
            });
        })->export('xls');       
    }

    public function getData($params)
    {
        if($params == 'all'){
            $items = CatalogimgArticle::orderBy('id', 'DESCC')->paginate(15);    
            return $items;
        }

        parse_str($params , $query);

        $code     = $query['code'];
        $name     = $query['name'];
        $category = $query['category'];

        if(isset($code) || isset($name) || isset($category))
        {
            $items = CatalogimgArticle::search($code, $name, $category)->orderBy('id', 'ASC')->paginate(15); 
        } else {
            $items = CatalogimgArticle::orderBy('id', 'DESCC')->paginate(15);    
        }

        return $items;
    }


    /*
    |--------------------------------------------------------------------------
    | CREATE
    |--------------------------------------------------------------------------
    */

    public function create(Request $request)
    {
        $categories = CatalogimgCategory::orderBy('name', 'ASC')->pluck('name', 'id');
        $tags       = CatalogimgTag::orderBy('name', 'ASC')->pluck('name', 'id');
        return view('vadmin.catalogimg.create')
            ->with('categories', $categories)
            ->with('tags', $tags);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request,[
            'name'                 => 'required|min:4|max:250|unique:catalogimg_articles',
            'code'                 => 'unique:catalogimg_articles,code',
            'category_id'          => 'required',
            'slug'                 => 'required|alpha_dash|min:4|max:255|unique:catalogimg_articles,slug',
            'image'                => 'image',

        ],[
            'name.required'        => 'Debe ingresar un nombre',
            'name.min'             => 'El título debe tener al menos 4 caracteress',
            'name.max'             => 'El título debe tener como máximo 250 caracteress',
            'name.unique'          => 'El título ya existe en otro artículo',
            'code.unique'          => 'El código está utilizado por otro producto',
            'category_id.required' => 'Debe ingresar una categoría',
            'slug.required'        => 'Se requiere un slug',
            'slug.min'             => 'El slug debe tener 4 caracteres como mínimo',
            'slug.max'             => 'El slug debe tener 255 caracteres como máximo',
            'slug.max'             => 'El slug debe tener guiones bajos en vez de espacios',
            'slug.unique'          => 'El slug debe ser único, algún otro artículo lo está usando',
            'image'                => 'El archivo adjuntado no es soportado',
        ]);
        
        if($request->discount == null){
            $request->discount = '0';
        }
        
        $article           = new CatalogimgArticle($request->all());
        $article->user_id  = \Auth::guard('user')->user()->id;
        
        $images            = $request->file('images');
        $thumbnail         = $request->file('thumbnail');

        $imgPath           = public_path("webimages/catalogoimg/"); 
        // If directory dosn't existe, create it and give write persmissions.
        if (!file_exists($imgPath)) {
            $oldmask = umask(0);
            mkdir($imgPath, 0777);
            umask($oldmask);
        }

        $extension         = '.jpg';
        
        $number = '2';

        $article->save();
        $article->tags()->sync($request->tags);
 
        try {
            if($thumbnail){
                $thumb = \Image::make($thumbnail);
                $thumb->encode('jpg', 80)->fit(250, 250)->save($imgPath.$article->id.'-0'.$extension);
                $article->thumb    = $article->id.'-0'.$extension;
                $article->save();

                $thumbToImg = \Image::make($thumbnail);
                $image       = new CatalogimgImage();
                $image->name = $article->id.'-1'.$extension;
                $thumbToImg->encode('jpg', 80)->fit(800, 800)->save($imgPath.$image->name);
                $image->article()->associate($article);
                $image->save();
            }

            if($images){
            
                foreach($images as $phisic_image)
                {
                    $filename = $article->id.'-'.$number++;
                    $img      = \Image::make($phisic_image);
                    $img->encode('jpg', 80)->fit(800, 800)->save($imgPath.$filename.$extension);
                    
                    $image            = new CatalogimgImage();
                    $image->name      = $filename.$extension;
                    $image->article()->associate($article);
                    $image->save();
                }
            }

        } catch(\Exception $e) {
            $article->delete();
            return redirect()->route('catalogoimg.index')->with('message','Error al crear el artículo: '. $e);
        }
    
        return redirect()->route('catalogoimg.index')->with('message','Item creado');
    }

    /*
    |--------------------------------------------------------------------------
    | UPDATE
    |--------------------------------------------------------------------------
    */

    public function edit($id)
    {   
        $tags       = CatalogimgTag::orderBy('name', 'DESC')->pluck('name', 'id');
        $article    = CatalogimgArticle::find($id);
        $categories = CatalogimgCategory::orderBy('name', 'DESC')->pluck('name', 'id');
        $article->each(function($article){
                $article->images;
        });

        return view('vadmin.catalogimg.edit')
            ->with('categories', $categories)
            ->with('article', $article)
            ->with('tags', $tags);
    }

    public function update(Request $request, $id)
    {
        $article   = CatalogimgArticle::find($id);

        $this->validate($request,[
            'name'                 => 'required|min:4|max:250|unique:catalog_articles,name,'.$article->id,
            'category_id'          => 'required',
            'slug'                 => 'required|alpha_dash|min:4|max:255|unique:catalog_articles,slug,'.$article->id,
            'image'                => 'image',

        ],[
            'name.required'        => 'Debe ingresar un nombre',
            'name.min'             => 'El título debe tener al menos 4 caracteress',
            'name.max'             => 'El título debe tener como máximo 250 caracteress',
            'name.unique'          => 'El título ya existe en otro artículo',
            'category_id.required' => 'Debe ingresar una categoría',
            'slug.required'        => 'Se requiere un slug',
            'slug.min'             => 'El slug debe tener 4 caracteres como mínimo',
            'slug.max'             => 'El slug debe tener 255 caracteres como máximo',
            'slug.max'             => 'El slug debe tener guiones bajos en vez de espacios',
            'slug.unique'          => 'El slug debe ser único, algún otro artículo lo está usando',
            'image'                => 'El archivo adjunto no es soportado',
        ]);

        $article->fill($request->all());
        
        $images    = $request->file('images');
        $thumbnail = $request->file('thumbnail');
        $imgPath   = public_path("webimages/catalogoimg/"); 
        $extension = '.jpg';
               
        $article->thumb = $article->id.'-0'.$extension;
        $article->save();
        if($article->tags() != null){
            $article->tags()->sync($request->tags);
        }
        
        if(!$article->images->isEmpty()){
            $number = $article->images->last()->name;
            $number = explode('-',$number);
            $number = explode('.',$number[1]);
            $number = ($number[0]+'1');
        } else {
            $number = '1';
        }
   
        try {
            if($thumbnail){
                $thumb = \Image::make($thumbnail);
                $thumb->encode('jpg', 80)->fit(250, 250)->save($imgPath.$article->id.'-0'.$extension);
                $article->thumb    = $article->id.'-0'.$extension;
                $article->save();

                $thumbToImg = \Image::make($thumbnail);
                $image       = new CatalogimgImage();
                $image->name = $article->id.'-1'.$extension;
                $thumbToImg->encode('jpg', 80)->fit(800, 800)->save($imgPath.$image->name);
                $image->article()->associate($article);
                $image->save();
            }

            if($images){
            
                foreach($images as $phisic_image)
                {
                    $filename = $article->id.'-'.$number++;
                    $img      = \Image::make($phisic_image);
                    $img->encode('jpg', 80)->fit(800, 800)->save($imgPath.$filename.$extension);
                    
                    $image            = new CatalogimgImage();
                    $image->name      = $filename.$extension;
                    $image->article()->associate($article);
                    $image->save();
                }
            }

        } catch(\Exception $e) {
            $article->delete();
            return redirect()->route('catalogoimg.index')->with('message','Error al crear el item: '. $e);
        }

        return redirect()->route('catalogoimg.index')->with('message', 'Se ha editado el item con éxito');
    }

    public function updateStatus(Request $request, $id)
    {
            $article = CatalogimgArticle::find($id);
            $article->status = $request->status;
            $article->save();

            return response()->json([
                "lastStatus" => $article->status,
            ]);
    }

    /*
    |--------------------------------------------------------------------------
    | DESTROY
    |--------------------------------------------------------------------------
    */

    public function destroy(Request $request)
    {   
        $ids      = json_decode('['.str_replace("'",'"',$request->id).']', true);
        $path     = 'webimages/catalogoimg/';

        if(is_array($ids)) {
            try {
                foreach ($ids as $id) {
                    $record = CatalogimgArticle::find($id);
                    
                    if($record->tags() != null){
                        $record->tags()->detach();
                    }
                    
                    $record->images()->delete();
                    
                    File::Delete(public_path( $path . $record->thumb));
                    foreach ($record->images as $image) {
                        File::Delete(public_path( $path . $image->name));
                    }

                    $record->delete();
                }
                return response()->json([
                    'success'   => true,
                ]); 
            }  catch (\Exception $e) {
                return response()->json([
                    'success'   => false,
                    'error'    => 'Error: '.$e
                ]);    
            }
        } else {
            try {
                $record = CatalogimgArticle::find($id);
                if($record->tags() != null){
                    $record->tags()->detach();
                }

                $record->images()->delete();

                File::Delete(public_path( $path . $record->thumb));
                foreach ($record->images as $image) {
                    File::Delete(public_path( $path . $image->name));
                }

                $record->delete();
                    return response()->json([
                        'success'   => true,
                    ]);  
                    
                } catch (\Exception $e) {
                    return response()->json([
                        'success'   => false,
                        'error'    => 'Error: '.$e
                    ]);    
                }
        }
    }

}
