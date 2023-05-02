<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $products = Product::all();
        return view('products.welcome',compact('products'));
    }

    public function AboutProduct($id)
    {
        //
        $product = DB::table('products')->where('id',$id)->first();
        return view('products.about_product',compact('product'));
    }

    public function trash()
    {
        //
        $products = Product::onlyTrashed()->get();
        return view('admin.trash',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $product = new Product();
        $product->p_name = $request->p_name;
        $product->p_categorie = $request->p_categorie;
        $product->p_price = $request->p_price;
        $product->p_components = $request->p_components;
        $product->p_description = $request->p_description;
        $product->p_usage = $request->p_usage;
        $product->p_avantage = $request->p_avantage;

        $img = $request->file('p_img')->getClientOriginalName();
        $path = $request->file('p_img')->storeAs('product/images_officiel',$img,'img');
        $product->p_img = $path;

        $img = $request->file('p_img_sec')->getClientOriginalName();
        $path = $request->file('p_img_sec')->storeAs('product/images_secendaire',$img,'img');
        $product->p_img_sec = $path;

        $img = $request->file('p_icon')->getClientOriginalName();
        $path = $request->file('p_icon')->storeAs('product/icons',$img,'img');
        $product->p_icon = $path;
            
        $product->save();
        return redirect()->route('inserer');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $product = DB::table('products')->where('id',$id)->first();
        return view('admin.edit_product',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $img = $request->file('p_img')->getClientOriginalName();
        $path_img = $request->file('p_img')->storeAs('product/images_officiel',$img,'img');

        $img = $request->file('p_img_sec')->getClientOriginalName();
        $path_img_sec = $request->file('p_img_sec')->storeAs('product/images_secendaire',$img,'img');

        $img = $request->file('p_icon')->getClientOriginalName();
        $path_icon = $request->file('p_icon')->storeAs('product/icons',$img,'img');

        DB::table('products')->where('id',$id)->update([
            'p_name' => $request->p_name,
            'p_categorie' => $request->p_categorie,
            'p_price' => $request->p_price,
            'p_components' => $request->p_components,
            'p_description' => $request->p_description,
            'p_usage' => $request->p_usage,
            'p_avantage' => $request->p_avantage,
            'p_img' => $path_img,
            'p_img_sec' => $path_img_sec,
            'p_icon' => $path_icon
        ]);
        return redirect()->route('product');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        Product::destroy($id);
        return redirect()->route('product');
    }

    public function restore($id)
    {
        //
        Product::onlyTrashed()->where('id',$id)->restore();
        notify()->success('successed');
        return redirect()->route('product_trash');
    }

    public function forcedelete($id)
    {
        //
        Product::onlyTrashed()->where('id',$id)->forceDelete();
        return redirect()->route('product_trash');
    }
}
