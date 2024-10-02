<?php

namespace App\Http\Controllers;
use Session;

use Illuminate\Http\Request;
// afficher les donees 1ere methode 
// use Illuminate\Support\Facades\DB;
// afficher les donnees 2eme methode
use App\Models\Product;

class PagesController extends Controller
{
    function home(){
        return view('pages.home');
    }
    function apropos(){
        return view('pages.apropos');
    }
    // function services($id,$name){
    //     // return view('pages.services');
    //     return 'votre nom est :'.$name.'<br> est votre id est :'.$id;

    // }
    function services(){
        // 1ere methode
        // $products = DB::table('products')->orderBy('product_name','desc')->get() ;
        // $products = DB::table('products')->paginate(1);

        //2eme methode
        $products = Product::get();
        // $products = Product::paginate();
        // $products = Product::all();
        return view('pages.services')->with('products',$products);

    }
    function show($id){
        // $products = Product::find($id);
        $products = Product::where('id',$id)->first();
        return view('pages.show')->with('products',$products);
    }
    function newProduct(){
        return view('pages.create');
    }
    function saveProduct(Request $request){
        $product = New Product();
        $product->product_name = $request->product_name ;
        $product->product_price = $request->product_price ;
        $product->description = $request->product_description ;
        $product->save();
        Session::put('message','Le produit a ete insere avec succes');
        return redirect('/newproduct');
    }
    function edit($id){
        $product = Product::find($id);
        return view('pages.edit-product')->with('product',$product);
    }
    function savechanges(Request $request){
        $product = Product::find($request->id );
        $product->product_name = $request->product_name ;
        $product->product_price = $request->product_price ;
        $product->description = $request->product_description ;
        $product->update();
        return redirect('/services');
    }
    function delete($id){
        $product = Product::find($id );
        $product->delete();
        return redirect('/services');
    }
    
}
