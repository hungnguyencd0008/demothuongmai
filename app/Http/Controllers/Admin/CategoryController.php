<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CategoryDienThoaiModel;
use App\Models\CategoryTabletModel;
use App\Models\CategoryLaptopModel;
use App\Models\CategoryPhukienModel;
use App\Models\CategoryDongHoModel;
use App\Models\CategoryDienMayModel;



use App\Http\Requests\AddCategoryRequest;
use App\Http\Requests\EditCategoryRequest;





class CategoryController extends Controller
{

	public function getCateLink(){
		return view('backend.category_link');
	}

    //
	public function getCate(){
		$data['categorylist']=CategoryDienThoaiModel::all();
		return view('backend.dienthoai.AddListcategory',$data);
	}

//them category dien thoai
	public function postCate(AddCategoryRequest $request){
		$category=new CategoryDienThoaiModel;
		$category->cate_name=$request->name;
		$category->cate_slug=str_slug($request->name);
		$category->save();
		return back();
	}

	public function getEditCate($id){
		$data['category']=CategoryDienThoaiModel::find($id);
		return view('backend.dienthoai.editcategory',$data);
	}

	public function postEditCate(Request $request,$id){
		// $category= CategoryDienThoaiModel::find($id);
		// $category->cate_name=$request->name;
		// $category->cate_slug=str_slug($request->name);
		// $category->save();
		
		$category=new CategoryDienThoaiModel();
		$arr['cate_name']=$request->name;
		$arr['cate_slug']=str_slug($request->name);
		$category::where('cate_id',$id)->update($arr);
		return redirect()->intended('admin/category/dienthoai');
	}

	public function getDeleteCate($id){
		$delete=CategoryDienThoaiModel::find($id);
		$delete->delete();
		return back();
	}


//TABLER
	public function getCateTablet(){
		$data['catelist']=CategoryTabletModel::all();
		return view('backend.tablet.AddListcategory',$data);
	}

	public function postCateTablet(Request $request){
		$category=new CategoryTabletModel;
		$category->cate_name=$request->name;
		$category->cate_slug=str_slug($request->name);
		$category->save();
		return back();
	}

	public function getEditCateTablet($id){
		$data['cate']=CategoryTabletModel::find($id);
		return view('backend.tablet.editcategory',$data);
	}

	public function postEditCateTablet(Request $request,$id){
		$category=new CategoryTabletModel;
		$arr['cate_name']=$request->name;
		$arr['cate_slug']=str_slug($request->name);
		$category::where('cate_id',$id)->update($arr);
		return redirect()->intended('admin/category/tablet');
	}

	public function getDeleteCateTablet($id){
		CategoryTabletModel::destroy($id);
		return back();
	}


//LAPTOP
	public function getCateLaptop(){
		$data['catelist']=CategoryLaptopModel::all();
		return view('backend.laptop.AddListcategory',$data);
	}

	public function postCateLaptop(Request $request){
		$category=new CategoryLaptopModel;
		$category->cate_name=$request->name;
		$category->cate_slug=str_slug($request->name);
		$category->save();
		return back();
	}

	public function getEditCateLaptop($id){
		$data['cate']=CategoryLaptopModel::find($id);
		return view('backend.laptop.editcategory',$data);
	}

	public function postEditCateLaptop(Request $request,$id){
		$category=new CategoryLaptopModel;
		$arr['cate_name']=$request->name;
		$arr['cate_slug']=str_slug($request->name);
		$category::where('cate_id',$id)->update($arr);
		return redirect()->intended('admin/category/laptop');
	}

	public function getDeleteCateLaptop($id){
		CategoryLaptopModel::destroy($id);
		return back();
	}


//PHUKIEN
	public function getCatePhukien(){
		$data['catelist']=CategoryPhukienModel::all();
		return view('backend.phukien.AddListcategory',$data);
	}

	public function postCatePhukien(Request $request){
		$category=new CategoryPhukienModel;
		$category->cate_name=$request->name;
		$category->cate_slug=str_slug($request->name);
		$category->save();
		return back();
	}

	public function getEditCatePhukien($id){
		$data['cate']=CategoryPhukienModel::find($id);
		return view('backend.phukien.editcategory',$data);
	}

	public function postEditCatePhukien(Request $request,$id){
		$category=new CategoryPhukienModel;
		$arr['cate_name']=$request->name;
		$arr['cate_slug']=str_slug($request->name);
		$category::where('cate_id',$id)->update($arr);
		return redirect()->intended('admin/category/phukien');
	}

	public function getDeleteCatePhukien($id){
		CategoryPhukienModel::destroy($id);
		return back();
	}



//DONGHO
	public function getCateDongHo(){
		$data['catelist']=CategoryDongHoModel::all();
		return view('backend.dongho.AddListcategory',$data);
	}

	public function postCateDongHo(Request $request){
		$category=new CategoryDongHoModel;
		$category->cate_name=$request->name;
		$category->cate_slug=str_slug($request->name);
		$category->save();
		return back();
	}

	public function getEditCateDongHo($id){
		$data['cate']=CategoryDongHoModel::find($id);
		return view('backend.dongho.editcategory',$data);
	}

	public function postEditCateDongHo(Request $request,$id){
		$category=new CategoryDongHoModel;
		$arr['cate_name']=$request->name;
		$arr['cate_slug']=str_slug($request->name);
		$category::where('cate_id',$id)->update($arr);
		return redirect()->intended('admin/category/dongho');
	}

	public function getDeleteCateDongHo($id){
		CategoryDongHoModel::destroy($id);
		return back();
	}


//MIENMAY
	public function getCateDienMay(){
		$data['catelist']=CategoryDienMayModel::all();
		return view('backend.dienmay.AddListcategory',$data);
	}

	public function postCateDienMay(Request $request){
		$category=new CategoryDienMayModel;
		$category->cate_name=$request->name;
		$category->cate_slug=str_slug($request->name);
		$category->save();
		return back();
	}

	public function getEditCateDienMay($id){
		$data['cate']=CategoryDienMayModel::find($id);
		return view('backend.dienmay.editcategory',$data);
	}

	public function postEditCateDienMay(Request $request,$id){
		$category=new CategoryDienMayModel;
		$arr['cate_name']=$request->name;
		$arr['cate_slug']=str_slug($request->name);
		$category::where('cate_id',$id)->update($arr);
		return redirect()->intended('admin/category/dienmay');
	}

	public function getDeleteCateDienMay($id){
		CategoryDienMayModel::destroy($id);
		return back();
	}




}
