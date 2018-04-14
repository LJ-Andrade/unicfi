<?php

namespace App\Http\Controllers\Catalogimg;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\CatalogimgCategory;

class CategoriesController extends Controller
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
            $categories = CatalogimgCategory::searchname($name)->orderBy('id', 'ASC')->paginate(15); 
        } else {
            $categories = CatalogimgCategory::orderBy('id','ASC')->paginate(15);
        }

        return view('vadmin.catalogimg.categories.index')->with('categories', $categories);
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
        return view('vadmin.catalogimg.categories.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name'          => 'required|min:4|max:250|unique:catalog_categories',
        ],[
            'name.required' => 'Debe ingresar un nombre a la categoría',
            'name.unique'   => 'La categoría ya existe',
        ]);

        $category = new CatalogimgCategory($request->all());
        $category->save();
        
        return redirect()->route('catimg_categorias.index')->with('message','Categoría creada');
    }

    /*
    |--------------------------------------------------------------------------
    | UPDATE
    |--------------------------------------------------------------------------
    */

    public function edit($id)
    {
        $category = CatalogimgCategory::find($id);
        return view('vadmin.catalogimg.categories.edit')->with('category', $category);
    }

    public function update(Request $request, $id)
    {
        $category = CatalogimgCategory::find($id);

        $this->validate($request,[
            'name'          => 'required|min:4|max:250|unique:catalog_categories,name,'.$category->id,
        ],[
            'name.required' => 'Debe ingresar un nombre a la categoría',
            'name.unique'   => 'La categoría ya existe'
        ]);
        
        $category->fill($request->all());
        $category->save();

        return redirect()->route('catimg_categorias.index')->with('message','Categoría editada');
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
                    $record = CatalogimgCategory::find($id);
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
                $record = CatalogCategory::find($id);
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
