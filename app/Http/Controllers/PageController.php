<?php

namespace App\Http\Controllers;
use App\Models\Slide;
use App\Models\Product;
use App\Models\ProductType;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex(){
    	$sale_product = Product::where('promotion_price', '<>', 0)->paginate(10);
        $new_product = Product::where('new', 1)->paginate(10);
    	//return view('page.trangchu',['slide'=>$slide]);
    	return view('page.trangchu',compact('sale_product', 'new_product'));
    }

    public function getLoaiSp($type){
        $sp_theoloai = Product::where('id_type', $type)->get();
        $loai = ProductType::all();
        $loai_sp = ProductType::where('id', $type)->first();
    	return view('page.loai_sanpham',compact('sp_theoloai', 'loai', 'loai_sp'));
    }

    public function getChiTiet(Request $req){
        $loai = ProductType::all();
        $sanpham = Product::where('id', $req->id)->first();
        $sp_tuongtu = Product::where('id_type', $sanpham->id_type)->paginate(3);
    	return view('page.chitiet_sanpham',compact('loai', 'sanpham', 'sp_tuongtu'));
    }
}