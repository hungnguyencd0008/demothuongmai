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
use Cart;
use Mail;

class CartController extends Controller
{
    //thêm sp vào giỏ hàng
	public function getAddCartDienThoai($id){
		$product=ProductDienThoaiModel::find($id);
		Cart::add(['id' => $id, 'name' => $product->prod_name, 'qty' => 1, 'price' => $product->prod_price, 'options' => ['img' => $product->prod_img]]);
		// $a=Cart::content();
		// dd($a);
		return redirect('cart/show_dienthoai');
	}

	public function getAddCartTablet($id){
		$product1=ProductTabletModel::find($id);
		Cart::add(['id' => $id, 'name' => $product1->prod_name, 'qty' => 1., 'price' => $product1->prod_price, 'options' => ['img' => $product1->prod_img]]);
		return redirect('cart/show_tablet');
	}

	public function getAddCartLaptop($id){
		$product2=ProductLaptopModel::find($id);
		Cart::add(['id' => $id, 'name' => $product2->prod_name, 'qty' => 3,'price' => $product2->prod_price, 'options' => ['img' => $product2->prod_img]]);
		return redirect('cart/show_laptop');
	}

	public function getAddCartPhuKien($id){
		$product=ProductPhuKienModel::find($id);
		Cart::add(['id' => $id, 'name' => $product->prod_name, 'qty' => 1, 'price' => $product->prod_price, 'options' => ['img' => $product->prod_img]]);
		// $a=Cart::content();
		// dd($a);
		return redirect('cart/show_phukien');
	}

	public function getAddCartDongHo($id){
		$product1=ProductDongHoModel::find($id);
		Cart::add(['id' => $id, 'name' => $product1->prod_name, 'qty' => 1., 'price' => $product1->prod_price, 'options' => ['img' => $product1->prod_img]]);
		return redirect('cart/show_dongho');
	}

	public function getAddCartDienMay($id){
		$product2=ProductDienMayModel::find($id);
		Cart::add(['id' => $id, 'name' => $product2->prod_name, 'qty' => 3,'price' => $product2->prod_price, 'options' => ['img' => $product2->prod_img]]);
		return redirect('cart/show_dienmay');
	}

//hiển thị sp và tính tổng
	public function getShowCartDienThoai(){	
		//$data['data']=ProductDienThoaiModel::find($id);
		$data['total']=Cart::total();
		$data['items']=Cart::content();
		return view('frontend.cart',$data);
	}

	public function getShowCartTablet(){
		//$data[0]=1;
		$data['total']=Cart::total();
		$data['items']=Cart::content();
		return view('frontend.cart',$data);
	}

	public function getShowCartLaptop(){	
		$data['total']=Cart::total();
		$data['items']=Cart::content();
		return view('frontend.cart',$data);
	}

	public function getShowCartPhuKien(){	
		//$data['data']=ProductDienThoaiModel::find($id);
		$data['total']=Cart::total();
		$data['items']=Cart::content();
		return view('frontend.cart',$data);
	}

	public function getShowCartDongHo(){
		//$data[0]=1;
		$data['total']=Cart::total();
		$data['items']=Cart::content();
		return view('frontend.cart',$data);
	}

	public function getShowCartDienMay(){	
		$data['total']=Cart::total();
		$data['items']=Cart::content();
		return view('frontend.cart',$data);
	}

//xóa sản phẩm
	public function getDeleteCart($id){
		if ($id=='all') {
			Cart::destroy();
		}else{
			Cart::remove($id);
		}
		return back();
	}
//cập nhập sản phẩm
	public function getUpdateCart(Request $request){
		Cart::update($request->rowId,$request->qty);
	}


//mua hàn thành  công
	public function getComplete(){
		return view('frontend.comlete');
	}

//hiển thị giỏ hàng
	public function getShowCart(){
		$data['total']=Cart::total();
		$data['items']=Cart::content();
		return view('frontend.cart',$data);
	}




}
