<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductType;
use App\Http\Requests\AddCateRequest;

class CategoryController extends Controller
{
    public function getCate(){
    	$data['catelist'] = ProductType::all();
    	return view('backend.category', $data);
    }
    public function postCate(AddCateRequest $request){
    	$type = new ProductType;
    	$type->name = $request->name;
    	$type->save();
    	return back();
    }
    public function getEditCate(){
    	return view('backend.editcategory');
    }
    public function getDeleteCate(){
    }
}
