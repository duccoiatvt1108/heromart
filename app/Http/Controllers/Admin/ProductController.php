<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductType;
use App\Http\Requests\AddProductRequest;
use DB;

class ProductController extends Controller
{
    public function getProduct(){
    	$data['productlist'] = DB::table('type_products')->join('products', 'type_products.id', '=', 'products.id_type')->orderBy('products.id', 'desc')->get();
    	return view('backend.product', $data);
    }
    public function getAddProduct(){
    	$data['catelist'] = ProductType::all();
    	return view('backend.addproduct', $data);
    }
    public function postAddProduct(AddProductRequest $request){
    	$filename = $request->image->getClientOriginalName();
    	$product = new Product;
    	$product->name = $request->name;
    	$product->image = $filename;
    	$product->unit_price = $request->unit_price;
    	$product->unit = $request->unit;
    	$product->promotion_price = $request->promotion_price;
    	$product->description = $request->description;
    	$product->id_type = $request->id_type;
    	$product->new = $request->new;
    	$product->save();
    	$request->image->storeAs('product', $filename);
    	return back();
    }
    public function getEditProduct($id){
    	$data['product'] = Product::find($id);
    	$data['catelist'] = ProductType::all();
    	return view('backend.editproduct', $data);
    }
    public function postEditProduct(Request $request, $id){
    	$product = new Product;
    	$arr['name'] = $request->name;
    	$arr['id_type'] = $request->id_type;
    	$arr['description'] = $request->description;
    	$arr['unit_price'] = $request->unit_price;
    	$arr['promotion_price'] = $request->promotion_price;
    	if($request->hasFile('image')){
    		$image = $request->image->getClientOriginalName();
    		$arr['image'] = $image;
    		$request->image->storeAs('product', $image);
    	}
    	$arr['unit'] = $request->unit;
    	$arr['new'] = $request->new;
    	$product::where('id', $id)->update($arr);
    	return redirect('product');
    }
    public function getDeleteProduct($id){
    	Product::destroy($id);
    	return back();
    }
}
