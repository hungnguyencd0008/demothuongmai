<?php

namespace App\Http\Controllers\Frontend;

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

use App\Models\CommentDienThoaiModel;
use App\Models\CommentTabletModel;
use App\Models\CommentLaptopModel;
use App\Models\CommentPhukienModel;
use App\Models\CommentDongHoModel;
use App\Models\CommentDienMayModel;


class FrontendController extends Controller
{
    //hiển thị dl ra trang chủ
	public function getHome(){
		////hien thi san pham noi bat o trang chu
		$data['dienthoailist']=ProductDienThoaiModel::where('prod_featured',1)->orderBy('prod_id','desc')->take(4)->get();
		$data['tabletlist']=ProductTabletModel::where('prod_featured',1)->orderBy('prod_id','desc')->take(4)->get();
		$data['phukienlist']=ProductPhuKienModel::where('prod_featured',1)->orderBy('prod_id','desc')->take(4)->get();
		$data['dongholist']=ProductDongHoModel::where('prod_featured',1)->orderBy('prod_id','desc')->take(4)->get();

		return view('frontend.index',$data);

	}



//------DIEN THOAI------
	public function getDetailDienThoai($id){
		$data['DetailDienthoai']=ProductDienThoaiModel::find($id);//hien thi san pham duoc click
		$data['comment']=CommentDienThoaiModel::where('com_product',$id)->paginate(10);//hien thi va su ly comment
		return view('frontend.dienthoai.details',$data);
	}

//hiển thị dt mới nhất và dt nổi bật nhất
	public function getDienThoai(){
		$data['cateDienthoai']=CategoryDienThoaiModel::all();//hien thi category cua menu
		$data['featuredDienthoai']=ProductDienThoaiModel::where('prod_featured',1)->orderBy('prod_id','desc')->take(4)->get();//hien thi san pham noi bat 
		$data['newsDienthoai']=ProductDienThoaiModel::orderBy('prod_id','desc')->paginate(4);
		
		return view('frontend.dienthoai.dienthoai',$data);//hien thi san pham moi
	}

//hiển thị dt cảu danh mục
	public function getCategoryDienThoai($id){
		$data['cateDienthoai']=CategoryDienThoaiModel::find($id);//lay ra menu
		$data['itemsDienthoai']=ProductDienThoaiModel::where('prod_cate',$id)->orderBy('prod_id','desc')->paginate(4);//hien thi san pham cua menu duoc click
		return view('frontend.dienthoai.cateProduct',$data);
	}

//su ly comment san pham
	public function postCommentDienThoai(Request $request,$id){
		$comment=new CommentDienThoaiModel;
		$comment->com_email=$request->email;
		$comment->com_name=$request->name;
		$comment->com_contend=$request->contend;
		$comment->com_product=$id;
		$comment->save();
		return back();
	}


//------TABLET------
	public function getDetailTablet($id){
		$data['DetailTablet']=ProductTabletModel::find($id);
		$data['comment']=CommentTabletModel::where('com_product',$id)->paginate(10);
		return view('frontend.tablet.details',$data);
	}

	public function getTablet(){
		$data['cateTablet']=CategoryTabletModel::all();
		$data['featuredTablet']=ProductTabletModel::where('prod_cate',1)->orderBy('prod_id','desc')->paginate(4);
		$data['newsdTablet']=ProductTabletModel::orderBy('prod_id','desc')->paginate(4);
		return view('frontend.tablet.tablet',$data);
	}

	public function getCategoryTablet($id){
		$data['cateTablet']=CategoryTabletModel::find($id);
		$data['itemsTablet']=ProductTabletModel::where('prod_cate',$id)->orderBy('prod_id','desc')->paginate(8);
		return view('frontend.tablet.cateProduct',$data);
	}

	public function postCommentTablet(Request $request,$id){
		$comment=new CommentTabletModel;
		$comment->com_email=$request->email;
		$comment->com_name=$request->name;
		$comment->com_contend=$request->contend;
		$comment->com_product=$id;
		$comment->save();
		return back();

	}


//------LAPTOP------
	public function getDetailLaptop($id){
		$data['DetailLaptop']=ProductLaptopModel::find($id);
		$data['comment']=CommentLaptopModel::where('com_product',$id)->paginate(10);
		return view('frontend.laptop.details',$data);
	}

	public function getLaptop(){
		$data['cateLaptop']=CategoryLaptopModel::all();
		$data['featuredLaptop']=ProductLaptopModel::where('prod_cate',1)->orderBy('prod_id','desc')->paginate(4);
		$data['newsdLaptop']=ProductLaptopModel::orderBy('prod_id','desc')->paginate(4);
		return view('frontend.laptop.laptop',$data);
	}

	public function getCategoryLaptop($id){
		$data['cateLaptop']=CategoryLaptopModel::find($id);
		$data['itemsLaptop']=ProductLaptopModel::where('prod_cate',$id)->orderBy('prod_id','desc')->paginate(8);
		return view('frontend.laptop.cateProduct',$data);
	}

	public function postCommentLaptop(Request $request,$id){
		$comment=new CommentLaptopModel;
		$comment->com_email=$request->email;
		$comment->com_name=$request->name;
		$comment->com_contend=$request->contend;
		$comment->com_product=$id;
		$comment->save();
		return back();
	}

	//------DIEN THOAI------






	//------PHU KIEN------

	public function getDetailPhuKien($id){
		$data['DetailPhuKien']=ProductPhuKienModel::find($id);
		$data['comment']=CommentPhukienModel::where('com_product',$id)->paginate(10);
		return view('frontend.phukien.details',$data);
	}

	public function getPhuKien(){
		$data['catePhuKien']=CategoryPhuKienModel::all();
		$data['featuredPhuKien']=ProductPhuKienModel::where('prod_cate',1)->orderBy('prod_id','desc')->paginate(4);
		$data['newsPhuKien']=ProductPhuKienModel::orderBy('prod_id','desc')->paginate(4);
		return view('frontend.phukien.phukien',$data);
	}

	public function getCategoryPhuKien($id){
		$data['catePhuKien']=CategoryPhuKienModel::find($id);
		$data['itemsPhuKien']=ProductPhuKienModel::where('prod_cate',$id)->orderBy('prod_id','desc')->paginate(8);
		return view('frontend.phukien.cateProduct',$data);
	}

	public function postCommentPhuKien(Request $request,$id){
		$comment=new CommentPhukienModel;
		$comment->com_email=$request->email;
		$comment->com_name=$request->name;
		$comment->com_contend=$request->contend;
		$comment->com_product=$id;
		$comment->save();
		return back();
	}


	//------DONG HO------
	public function getDetailDongHo($id){
		$data['DetailDongho']=ProductDongHoModel::find($id);
		$data['comment']=CommentDongHoModel::where('com_product',$id)->paginate(10);
		return view('frontend.dongho.details',$data);
	}

	public function getDongHo(){
		$data['cateDongho']=CategoryDongHoModel::all();
		$data['featuredDongho']=ProductDongHoModel::where('prod_cate',1)->orderBy('prod_id','desc')->paginate(4);
		$data['newsDongho']=ProductDongHoModel::orderBy('prod_id','desc')->paginate(4);
		return view('frontend.dongho.dongho',$data);
	}

	public function getCategoryDongHo($id){
		$data['cateDongho']=CategoryDongHoModel::find($id);
		$data['itemsDongho']=ProductDongHoModel::where('prod_cate',$id)->orderBy('prod_id','desc')->paginate(8);
		return view('frontend.dongho.cateProduct',$data);
	}

	public function postCommentDongHo(Request $request,$id){
		$comment=new CommentDongHoModel;
		$comment->com_email=$request->email;
		$comment->com_name=$request->name;
		$comment->com_contend=$request->contend;
		$comment->com_product=$id;
		$comment->save();
		return back();
	}


	//------DIEN MAY------
	public function getDetailDienMay($id){
		$data['DetailDienMay']=ProductDienMayModel::find($id);
		$data['comment']=CommentDienMayModel::where('com_product',$id)->paginate(10);
		return view('frontend.dienmay.details',$data);
	}

	public function getDienMay(){
		$data['cateDienMay']=CategoryDienMayModel::all();
		$data['featuredDienMay']=ProductDienMayModel::where('prod_cate',1)->orderBy('prod_id','desc')->paginate(4);
		$data['newsDienMay']=ProductDienMayModel::orderBy('prod_id','desc')->paginate(4);
		return view('frontend.dienmay.dienmay',$data);
	}

	public function getCategoryDienMay($id){
		$data['cateDienMay']=CategoryDienMayModel::find($id);
		$data['itemsDienMay']=ProductDienMayModel::where('prod_cate',$id)->orderBy('prod_id','desc')->paginate(8);
		return view('frontend.dienmay.cateProduct',$data);
	}

	public function postCommentDienMay(Request $request,$id){
		$comment=new CommentDienMayModel;
		$comment->com_email=$request->email;
		$comment->com_name=$request->name;
		$comment->com_contend=$request->contend;
		$comment->com_product=$id;
		$comment->save();
		return back();
	}

/////////////////////////


	public function getSearch(Request $request){
		$result=$request->result;
		//dd($result);
		$data['keyword']=$result;
		$result=str_replace(' ','%',$result);
		$data['items']=ProductDienThoaiModel::where('prod_name','like','%'.$result.'%')->take(8)->get();
		$data['items1']=ProductTabletModel::where('prod_name','like','%'.$result.'%')->take(8)->get();
		$data['items2']=ProductLaptopModel::where('prod_name','like','%'.$result.'%')->take(8)->get();
		$data['items3']=ProductPhuKienModel::where('prod_name','like','%'.$result.'%')->take(8)->get();
		$data['items4']=ProductDongHoModel::where('prod_name','like','%'.$result.'%')->take(8)->get();
		$data['items5']=ProductDienMayModel::where('prod_name','like','%'.$result.'%')->take(8)->get();
		
		
		// if($request->ajax()){
		// 	return view('paginate.product',$data)->render();
		// }
		return view('frontend.search',$data);
	}










}
