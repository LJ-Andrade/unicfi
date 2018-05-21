<?php

namespace App\Http\Controllers\Catalogimg;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CatalogimgTag;

class TagsController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | VIEW
    |--------------------------------------------------------------------------
    */
    
    public function index(Request $request)
    {   
        $name = $request->get('name');

        if(isset($name)){
            $tags = CatalogimgTag::searchname($name)->orderBy('name', 'ASC')->paginate(15); 
        } else {
            $tags = CatalogimgTag::orderBy('name','ASC')->paginate(15);
        }

        return view('vadmin.catalogimg.tags.index')->with('tags', $tags);
    }

    public function show($id)
    {
        //
    }

    /*
    |--------------------------------------------------------------------------
    | CREATE
    |--------------------------------------------------------------------------
    */

    public function create()
    {
        return view('vadmin.catalogimg.tags.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|min:4|max:250|unique:catalog_tags',
        ],[
            'name.required' => 'Debe ingresar un nombre a la etiqueta',
            'name.unique'   => 'La etiqueta ya existe',
        ]);

        $Tag = new CatalogimgTag($request->all());
        $Tag->save();

        return redirect()->route('catimg_tags.index')->with('message','Etiqueta creada');
    }

    /*
    |--------------------------------------------------------------------------
    | UPDATE
    |--------------------------------------------------------------------------
    */

    public function edit($id)
    {
        $tag = CatalogimgTag::find($id);
        return view('vadmin.catalogimg.tags.edit')->with('tag', $tag);
    }

    public function update(Request $request, $id)
    {
        $tag = CatalogimgTag::find($id);

        $this->validate($request,[
            'name' => 'required|min:4|max:250|unique:catalogimg_tags,name,'.$tag->id,
        ],[
            'name.required' => 'Debe ingresar un nombre a la etiqueta',
            'name.unique'   => 'La etiqueta ya existe'
        ]);
        
        $tag->fill($request->all());
        $tag->save();

        return redirect()->route('catimg_tags.index')->with('message','Etiqueta editada');
    } 

    /*
    |--------------------------------------------------------------------------
    | DESTROY
    |--------------------------------------------------------------------------
    */

    public function destroy(Request $request)
    {   
        $ids = json_decode('['.str_replace("'",'"',$request->id).']', true);
        
        if(is_array($ids)) {
            try {
                foreach ($ids as $id) {
                    $record = CatalogimgTag::find($id);
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
                $record = CatalogimgTag::find($id);
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
} // End

