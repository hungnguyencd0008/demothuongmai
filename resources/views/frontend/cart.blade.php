
@extends('frontend.master')
@section('title','Giỏ hàng')
@section('main')

<script type="text/javascript">
	function updateCart(qty,rowId){
		$.get(
			'{{asset('cart/update')}}',
			{qty:qty,rowId:rowId},
			function(){
				location.reload();
			}
			);
	}
</script>
<!-- <base href='layout/frontend/'> -->
<section class="contend"> <!-- contend -->

	<div class="container wclassth-fix"> 
		<div class="row">


			<div id="wrap-inner">
				<div class="col-xs-3">
					<figure><img src="images/banner/banner-d.png" class="img-responsive" title=""></figure>
				</div>

				<div class="col-xs-9">

					<div class="row">

						<div class="col-xs-12">
							<div class="list-cart">
								<h3>Giỏ hàng</h3>
								<form>
									<table class="table table-bordered  text-center">
										<tbody><tr class="active">
											{{-- <td wclassth="11.111%">Ảnh mô tả</td>--}}

											
											<td wclassth="22.222%">Tên sản phẩm</td>
											<td wclassth="22.222%">Số lượng</td>
											<td wclassth="16.6665%">Đơn giá</td>
											<td wclassth="16.6665%">Thành tiền</td>
											<td wclassth="11.112%">Xóa</td>
										</tr>

										@foreach($items as $item)
										<tr>
											
											
											{{--
												@if($item->qty==1)
												<td><img style="height: 150px" class="img-responsive" src="{{asset('../storage/app/images/'.$item->options->img)}}"></td>@endif	
												@if($item->qty==2)
												<td><img style="height: 150px" class="img-responsive" src="{{asset('../storage/app/tablet/'.$item->options->img)}}"></td>@endif	

												@if($item->qty==3)
												<td><img style="height: 150px" class="img-responsive" src="{{asset('../storage/app/laptop/'.$item->options->img)}}"></td>@endif	
												--}}



												<td>{{$item->name}}</td>
												<td>
													<div class="form-group">
														<input class="form-control" type="number" value="{{$item->qty}}" onchange="updateCart(this.value,'{{$item->rowId}}')">
													</div>
												</td>
												<td><span class="price">{{number_format($item->price,0,',','.')}} đ</span></td>
												<td><span class="price">{{number_format($item->price*$item->qty,0,',','.')}} đ</span></td>
												<td><a href="{{asset('cart/delete/'.$item->rowId)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?')">Xóa</a></td>
											</tr>
											@endforeach




										</tbody></table>

										<div class="row total-price" >
											<div class="col-xs-5">
												<p>Tổng thanh toán: <span class="total-price">{{$total}} đ</span></p>
											</div>
											<div class="col-xs-7">

												<a href="#" class="btn btn-info">Mua tiếp</a>
												<a href="#" class="btn btn-info">Cập nhật</a>
												<a href="{{asset('cart/delete/all')}}" class="btn btn-info">Xóa giỏ hàng</a>


											</div>
										</div>
										{{csrf_field()}}

									</form>                                     
								</div>
							</div>


							<div class="col-xs-12">
								<div class="xac-nhan">
									<h3>Xác nhận mua hàng</h3>
									<form method="post" action="{{asset('show')}}">
										<div class="form-group">
											<label for="email">Email address:</label>
											<input required="" type="email" class="form-control" class="email" name="email">
										</div>
										<div class="form-group">
											<label for="name">Họ và tên:</label>
											<input required="" type="text" class="form-control" class="name" name="name">
										</div>
										<div class="form-group">
											<label for="phone">Số điện thoại:</label>
											<input required="" type="number" class="form-control" class="phone" name="phone">
										</div>
										<div class="form-group">
											<label for="add">Địa chỉ:</label>
											<input required="" type="text" class="form-control" class="add" name="add">
										</div>
										<div class="form-group text-right">
											<button type="submit" class="btn btn-warning">Thực hiện đơn hàng</button>
										</div>
										{{csrf_field()}}
									</form>
								</div>
							</div>


						</div>

					</div>
				</div>





			</div> <!-- end row -->
		</div><!-- end container -->
	</section><!--end contend -->


	@endsection


