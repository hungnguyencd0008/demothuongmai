<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\ProductDienThoaiModel;
use App\Models\ProductTabletModel;
use App\Models\ProductLaptopModel;
use App\Models\ProductPhuKienModel;
use App\Models\ProductDongHoModel;
use App\Models\ProductDienMayModel;

use App\Models\CategoryDienThoaiModel;
use App\Models\CategoryTabletModel;
use App\Models\CategoryLaptopModel;
use App\Models\CategoryPhuKienModel;
use App\Models\CategoryDongHoModel;
use App\Models\CategoryDienMayModel;
use DB;

class ProductController extends Controller
{
    //
	public function getProductLink(){
		return view('backend.product_link');
	}


//DIEN THOAI
	public function getProduct(){
		//$data['productlist']=ProductDienThoaiModel::all();
		$data['productlist']=DB::table('vp_products_dienthoai')->join('vp_category_dienthoai','vp_products_dienthoai.prod_cate','=','vp_category_dienthoai.cate_id')->orderBy('prod_id','desc')->paginate(10);
		return view('backend.dienthoai.listproduct',$data);
	}

	public function getAddProduct(){
		$data['catelist']=CategoryDienThoaiModel::all();
		return view('backend.dienthoai.addproduct',$data);
	}

	public function postAddProduct(Request $request){
		$product=new ProductDienThoaiModel;
		$filename=$request->img->getClientOriginalName();

		$product->prod_name=$request->name;
		$product->prod_slug=str_slug($request->name);
		$product->prod_price=$request->price;
		$product->prod_img=$filename;
		$product->prod_accessories=$request->accessories;
		$product->prod_warranty=$request->warranty;
		$product->prod_promotion=$request->promotion;
		$product->prod_condition=$request->condition;
		$product->prod_status=$request->status;
		$product->prod_description=$request->description;
		$product->prod_cate=$request->cate;
		$product->prod_featured=$request->featured;

		$request->img->storeAs('images',$filename);
		$product->save();
		return redirect('admin/product/dienthoai');

	}

	public function getEditProduct($id){
		$data['catelist']=CategoryDienThoaiModel::all();
		$data['product']=ProductDienThoaiModel::find($id);
		return view('backend.dienthoai.editproduct',$data);
	}


	public function postEditProduct(Request $request,$id){
		$product=new ProductDienThoaiModel;
		
		$arr['prod_name']=$request->name;
		$arr['prod_slug']=str_slug($request->name);
		$arr['prod_price']=$request->price;

		if($request->hasFile('img')){
			$filename=$request->img->getClientOriginalName();
			$arr['prod_img']=$filename;
			$request->img->storeAs('images',$filename);
		}
		
		$arr['prod_accessories']=$request->accessories;
		$arr['prod_warranty']=$request->warranty;
		$arr['prod_promotion']=$request->promotion;
		$arr['prod_condition']=$request->condition;
		$arr['prod_status']=$request->status;
		$arr['prod_description']=$request->description;
		$arr['prod_cate']=$request->cate;
		$arr['prod_featured']=$request->featured;

		$product::where('prod_id',$id)->update($arr);
		return redirect('admin/product/dienthoai');

	}


//TABLET
	public function getProductTablet(){
		//$data['productlist']=ProductDienThoaiModel::all();
		$data['productlist']=DB::table('vp_products_tablet')->join('vp_category_tablet','vp_products_tablet.prod_cate','=','vp_category_tablet.cate_id')->orderBy('prod_id','desc')->paginate(10);
		return view('backend.tablet.listproduct',$data);
	}

	public function getAddProductTablet(){
		$data['catelist']=CategoryTabletModel::all();
		return view('backend.tablet.addproduct',$data);
	}

	public function postAddProductTablet(Request $request){
		$product=new ProductTabletModel;
		$filename=$request->img->getClientOriginalName();

		$product->prod_name=$request->name;
		$product->prod_slug=str_slug($request->name);
		$product->prod_price=$request->price;
		$product->prod_img=$filename;
		$product->prod_accessories=$request->accessories;
		$product->prod_warranty=$request->warranty;
		$product->prod_promotion=$request->promotion;
		$product->prod_condition=$request->condition;
		$product->prod_status=$request->status;
		$product->prod_description=$request->description;
		$product->prod_cate=$request->cate;
		$product->prod_featured=$request->featured;

		$request->img->storeAs('tablet',$filename);
		$product->save();
		return redirect('admin/product/tablet');

	}

	public function getEditProductTablet($id){
		$data['catelist']=CategoryTabletModel::all();
		$data['product']=ProductTabletModel::find($id);
		return view('backend.tablet.editproduct',$data);
	}

	public function postEditProductTablet(Request $request,$id){
		$product=new ProductTabletModel;
		
		$arr['prod_name']=$request->name;
		$arr['prod_slug']=str_slug($request->name);
		$arr['prod_price']=$request->price;

		if($request->hasFile('img')){
			$filename=$request->img->getClientOriginalName();
			$arr['prod_img']=$filename;
			$request->img->storeAs('tablet',$filename);
		}
		
		$arr['prod_accessories']=$request->accessories;
		$arr['prod_warranty']=$request->warranty;
		$arr['prod_promotion']=$request->promotion;
		$arr['prod_condition']=$request->condition;
		$arr['prod_status']=$request->status;
		$arr['prod_description']=$request->description;
		$arr['prod_cate']=$request->cate;
		$arr['prod_featured']=$request->featured;

		$product::where('prod_id',$id)->update($arr);
		return redirect('admin/product/tablet');

	}

	public function getDeleteProductTablet($id){
		ProductTabletModel::destroy($id);
		return back();
	}


//LAPTOP
	public function getProductLaptop(){
		//$data['productlist']=ProductDienThoaiModel::all();
		$data['productlist']=DB::table('vp_products_laptop')->join('vp_category_laptop','vp_products_laptop.prod_cate','=','vp_category_laptop.cate_id')->orderBy('prod_id','desc')->paginate(10);
		return view('backend.laptop.listproduct',$data);
	}

	public function getAddProductLaptop(){
		$data['catelist']=CategoryLaptopModel::all();
		return view('backend.laptop.addproduct',$data);
	}

	public function postAddProductLaptop(Request $request){
		$product=new ProductLaptopModel;
		$filename=$request->img->getClientOriginalName();

		$product->prod_name=$request->name;
		$product->prod_slug=str_slug($request->name);
		$product->prod_price=$request->price;
		$product->prod_img=$filename;
		$product->prod_accessories=$request->accessories;
		$product->prod_warranty=$request->warranty;
		$product->prod_promotion=$request->promotion;
		$product->prod_condition=$request->condition;
		$product->prod_status=$request->status;
		$product->prod_description=$request->description;
		$product->prod_cate=$request->cate;
		$product->prod_featured=$request->featured;

		$request->img->storeAs('laptop',$filename);
		$product->save();
		return redirect('admin/product/laptop');

	}

	public function getEditProductLaptop($id){
		$data['catelist']=CategoryLaptopModel::all();
		$data['product']=ProductLaptopModel::find($id);
		return view('backend.laptop.editproduct',$data);
	}

	public function postEditProductLaptop(Request $request,$id){
		$product=new ProductLaptopModel;
		
		$arr['prod_name']=$request->name;
		$arr['prod_slug']=str_slug($request->name);
		$arr['prod_price']=$request->price;

		if($request->hasFile('img')){
			$filename=$request->img->getClientOriginalName();
			$arr['prod_img']=$filename;
			$request->img->storeAs('laptop',$filename);
		}
		
		$arr['prod_accessories']=$request->accessories;
		$arr['prod_warranty']=$request->warranty;
		$arr['prod_promotion']=$request->promotion;
		$arr['prod_condition']=$request->condition;
		$arr['prod_status']=$request->status;
		$arr['prod_description']=$request->description;
		$arr['prod_cate']=$request->cate;
		$arr['prod_featured']=$request->featured;

		$product::where('prod_id',$id)->update($arr);
		return redirect('admin/product/laptop');

	}

	public function getDeleteProductLaptop($id){
		ProductLaptopModel::destroy($id);
		return back();
	}


//PHUKIEN
	public function getProductPhuKien(){
		//$data['productlist']=ProductDienThoaiModel::all();
		$data['productlist']=DB::table('vp_products_phukien')->join('vp_category_phukien','vp_products_phukien.prod_cate','=','vp_category_phukien.cate_id')->orderBy('prod_id','desc')->paginate(10);
		return view('backend.phukien.listproduct',$data);
	}

	public function getAddProductPhuKien(){
		$data['catelist']=CategoryPhuKienModel::all();
		return view('backend.phukien.addproduct',$data);
	}

	public function postAddProductPhuKien(Request $request){
		$product=new ProductPhuKienModel;
		$filename=$request->img->getClientOriginalName();

		$product->prod_name=$request->name;
		$product->prod_slug=str_slug($request->name);
		$product->prod_price=$request->price;
		$product->prod_img=$filename;
		$product->prod_accessories=$request->accessories;
		$product->prod_warranty=$request->warranty;
		$product->prod_promotion=$request->promotion;
		$product->prod_condition=$request->condition;
		$product->prod_status=$request->status;
		$product->prod_description=$request->description;
		$product->prod_cate=$request->cate;
		$product->prod_featured=$request->featured;

		$request->img->storeAs('phukien',$filename);
		$product->save();
		return redirect('admin/product/phukien');

	}

	public function getEditProductPhuKien($id){
		$data['catelist']=CategoryPhuKienModel::all();
		$data['product']=ProductPhuKienModel::find($id);
		return view('backend.phukien.editproduct',$data);
	}

	public function postEditProductPhuKien(Request $request,$id){
		$product=new ProductPhuKienModel;
		
		$arr['prod_name']=$request->name;
		$arr['prod_slug']=str_slug($request->name);
		$arr['prod_price']=$request->price;

		if($request->hasFile('img')){
			$filename=$request->img->getClientOriginalName();
			$arr['prod_img']=$filename;
			$request->img->storeAs('phukien',$filename);
		}
		
		$arr['prod_accessories']=$request->accessories;
		$arr['prod_warranty']=$request->warranty;
		$arr['prod_promotion']=$request->promotion;
		$arr['prod_condition']=$request->condition;
		$arr['prod_status']=$request->status;
		$arr['prod_description']=$request->description;
		$arr['prod_cate']=$request->cate;
		$arr['prod_featured']=$request->featured;

		$product::where('prod_id',$id)->update($arr);
		return redirect('admin/product/phukien');

	}

	public function getDeleteProductPhuKien($id){
		ProductPhuKienModel::destroy($id);
		return back();
	}


//DONGHO
	public function getProductDongHo(){
		//$data['productlist']=ProductDienThoaiModel::all();
		$data['productlist']=DB::table('vp_products_dongho')->join('vp_category_dongho','vp_products_dongho.prod_cate','=','vp_category_dongho.cate_id')->orderBy('prod_id','desc')->paginate(10);
		return view('backend.dongho.listproduct',$data);
	}

	public function getAddProductDongHo(){
		$data['catelist']=CategoryDongHoModel::all();
		return view('backend.dongho.addproduct',$data);
	}

	public function postAddProductDongHo(Request $request){
		$product=new ProductDongHoModel;
		$filename=$request->img->getClientOriginalName();

		$product->prod_name=$request->name;
		$product->prod_slug=str_slug($request->name);
		$product->prod_price=$request->price;
		$product->prod_img=$filename;
		$product->prod_accessories=$request->accessories;
		$product->prod_warranty=$request->warranty;
		$product->prod_promotion=$request->promotion;
		$product->prod_condition=$request->condition;
		$product->prod_status=$request->status;
		$product->prod_description=$request->description;
		$product->prod_cate=$request->cate;
		$product->prod_featured=$request->featured;

		$request->img->storeAs('dongho',$filename);
		$product->save();
		return redirect('admin/product/dongho');

	}

	public function getEditProductDongHo($id){
		$data['catelist']=CategoryDongHoModel::all();
		$data['product']=ProductDongHoModel::find($id);
		return view('backend.dongho.editproduct',$data);
	}

	public function postEditProductDongHo(Request $request,$id){
		$product=new ProductDongHoModel;
		
		$arr['prod_name']=$request->name;
		$arr['prod_slug']=str_slug($request->name);
		$arr['prod_price']=$request->price;

		if($request->hasFile('img')){
			$filename=$request->img->getClientOriginalName();
			$arr['prod_img']=$filename;
			$request->img->storeAs('dongho',$filename);
		}
		
		$arr['prod_accessories']=$request->accessories;
		$arr['prod_warranty']=$request->warranty;
		$arr['prod_promotion']=$request->promotion;
		$arr['prod_condition']=$request->condition;
		$arr['prod_status']=$request->status;
		$arr['prod_description']=$request->description;
		$arr['prod_cate']=$request->cate;
		$arr['prod_featured']=$request->featured;

		$product::where('prod_id',$id)->update($arr);
		return redirect('admin/product/dongho');

	}

	public function getDeleteProductDongHo($id){
		ProductDongHoModel::destroy($id);
		return back();
	}


//DIENMAY
	public function getProductDienMay(){
		//$data['productlist']=ProductDienThoaiModel::all();
		$data['productlist']=DB::table('vp_products_dienmay')->join('vp_category_dienmay','vp_products_dienmay.prod_cate','=','vp_category_dienmay.cate_id')->orderBy('prod_id','desc')->paginate(10);
		return view('backend.dienmay.listproduct',$data);
	}

	public function getAddProductDienMay(){
		$data['catelist']=CategoryDienMayModel::all();
		return view('backend.dienmay.addproduct',$data);
	}

	public function postAddProductDienMay(Request $request){
		$product=new ProductDienMayModel;
		$filename=$request->img->getClientOriginalName();

		$product->prod_name=$request->name;
		$product->prod_slug=str_slug($request->name);
		$product->prod_price=$request->price;
		$product->prod_img=$filename;
		$product->prod_accessories=$request->accessories;
		$product->prod_warranty=$request->warranty;
		$product->prod_promotion=$request->promotion;
		$product->prod_condition=$request->condition;
		$product->prod_status=$request->status;
		$product->prod_description=$request->description;
		$product->prod_cate=$request->cate;
		$product->prod_featured=$request->featured;

		$request->img->storeAs('dienmay',$filename);
		$product->save();
		return redirect('admin/product/dienmay');

	}

	public function getEditProductDienMay($id){
		$data['catelist']=CategoryDienMayModel::all();
		$data['product']=ProductDienMayModel::find($id);
		return view('backend.dienmay.editproduct',$data);
	}

	public function postEditProductDienMay(Request $request,$id){
		$product=new ProductDienMayModel;
		
		$arr['prod_name']=$request->name;
		$arr['prod_slug']=str_slug($request->name);
		$arr['prod_price']=$request->price;

		if($request->hasFile('img')){
			$filename=$request->img->getClientOriginalName();
			$arr['prod_img']=$filename;
			$request->img->storeAs('dienmay',$filename);
		}
		
		$arr['prod_accessories']=$request->accessories;
		$arr['prod_warranty']=$request->warranty;
		$arr['prod_promotion']=$request->promotion;
		$arr['prod_condition']=$request->condition;
		$arr['prod_status']=$request->status;
		$arr['prod_description']=$request->description;
		$arr['prod_cate']=$request->cate;
		$arr['prod_featured']=$request->featured;

		$product::where('prod_id',$id)->update($arr);
		return redirect('admin/product/dienmay');

	}

	public function getDeleteProductDienMay($id){
		ProductDienMayModel::destroy($id);
		return back();
	}




}
