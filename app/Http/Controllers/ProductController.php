<?php

namespace App\Http\Controllers;

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
        //
        $fields = Product::all();
        return view('products.index')->with([
            'fields' => $fields,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('products.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'product_name' => 'required',
            'brand' => 'required',
        ]);
        $recordExist = Product::where('name', $request->post('product_name'))->get();
        if(count($recordExist) > 0 || $recordExist == ''){
            return redirect("add-product")->withErrors('Product names already exist. Please try aagain with different namae');
        }

        $image = $request->file('image');
        $image_name = '';
        if(!empty($image)){
            $image_name = time()."_".$image->getClientOriginalName();
            $image->move('images/products',$image_name);
        }

        $form_data['name'] = trim( $request->post('product_name') );
        $form_data['brand'] = trim( $request->post('brand') );
        $form_data['image'] = $image_name;
        Product::create($form_data);
        return redirect('/add-product')->withSuccess('Product has been added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product, $id)
    {
        //
//        dd($id);
        $data   = json_decode($id);
        $fields = Product::where('id', $data)->get();

        return view('products.edit')->with([
            'fields' => $fields,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
        $request->validate([
            'product_name' => 'required',
            'brand' => 'required',
        ]);
        $recordExist = Product::where('name', $request->post('product_name'))->get();
//        if(count($recordExist) > 0 || $recordExist == ''){
//            return redirect()->route('products.edit', $request->input('id'))->withErrors('Product names already exist. Please try aagain with different namae');
//        }
        $image_name = '';
        if($request->file('image' ) != ''){
            $image = $request->file('image');
            $image_name = time()."_".$image->getClientOriginalName();
            $image->move('images/products',$image_name);
        }
        $result = Product::find($request->input('id'));
        $result->name = $request->input('product_name');
        $result->brand = $request->input('brand');
        if(!empty($image_name)){
            $result->image = $image_name;
        }
        $result->update();
        return redirect()->route('products.edit', $request->input('id'))->withSuccess('Product has been updated successfully');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product, $id)
    {
        //
        $user = Product::findOrFail($id);
        $user->delete();
        return redirect()->route('products')->withSuccess('Company  has been deleted successfully');
    }
}
