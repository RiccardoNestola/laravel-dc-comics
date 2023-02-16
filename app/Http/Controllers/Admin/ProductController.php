<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
      /*  dd($products); */

        return view('admin.product.index',  compact("products"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.product.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formData = $request->all();
        

        $request->validate([
            
            'title' =>'required | min: 5 | max: 100',
            'description' =>'required',
            'thumb' =>'string|nullable|max: 255',
            'price' =>'required|numeric',
            'series' =>'string|required | min: 3 | max: 100',
            'sale_date' =>'date|nullable',
            'type' =>'string|required | min: 3 | max: 100',

        ],
        [
            'title.required' => 'Il campo titolo è obbligatorio',
            'title.min' => 'Il campo titolo deve avere almeno 5 caratteri',
            'title.max' => 'Il campo titolo deve avere massimo 100 caratteri',
            'description.required' => 'Il descrizione è obbligatoria',
            'thumb.required' => 'Il titolo è obbligatorio',
            'price.numeric' => 'Il campo prezzo deve essere un numero',
            'price.required' => 'Il campo prezzo è obbligatorio',
            'series.required' => 'Il titolo è obbligatorio',
            'series.min' => 'Il campo tipo deve avere almeno 3 caratteri',
            'series.max' => 'Il campo tipo deve avere massimo 100 caratteri',
            'sale_date.required' => 'La data è obbligatoria',
            'type.required' => 'Il tipo è obbligatorio',
            'type' => 'Il campo tipo deve avere almeno 3 caratteri',
        ],
    );

        /* $newComic = new Product();
        $newComic->title = $formData["title"];
        $newComic->description = $formData["description"];
        $newComic->thumb = $formData["thumb"];
        $newComic->price = $formData["price"];
        $newComic->series = $formData["series"];
        $newComic->sale_date = $formData["sale_date"];
        $newComic->type = $formData["type"]; */
        

        

        $newComic = new Product();
        $newComic->fill($formData);


        $newComic->save();

        return redirect() -> route("product.show", $newComic->id);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);

        return view('admin.product.show',  compact("product"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);

        
        return view("admin.product.edit", compact("product"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $formData = $request->all();
        $product = Product::findOrFail($id);

        $request->validate([
            
            'title' =>'required | min: 5 | max: 100',
            'description' =>'required',
            'thumb' =>'string|nullable|max: 255',
            'price' =>'required|numeric',
            'series' =>'string|required | min: 3 | max: 100',
            'sale_date' =>'date|nullable',
            'type' =>'string|required | min: 3 | max: 100',

        ],
        [
            'title.required' => 'Il campo titolo è obbligatorio',
            'title.min' => 'Il campo titolo deve avere almeno 5 caratteri',
            'title.max' => 'Il campo titolo deve avere massimo 100 caratteri',
            'description.required' => 'Il descrizione è obbligatoria',
            'thumb.required' => 'Il titolo è obbligatorio',
            'price.numeric' => 'Il campo prezzo deve essere un numero',
            'price.required' => 'Il campo prezzo è obbligatorio',
            'series.required' => 'Il titolo è obbligatorio',
            'series.min' => 'Il campo tipo deve avere almeno 3 caratteri',
            'series.max' => 'Il campo tipo deve avere massimo 100 caratteri',
            'sale_date.required' => 'La data è obbligatoria',
            'type.required' => 'Il tipo è obbligatorio',
            'type' => 'Il campo tipo deve avere almeno 3 caratteri',
        ],
    );

        $product->update($formData);
        
        return redirect() -> route("product.show", $product->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();


        return redirect('admin/product');
    }
}
