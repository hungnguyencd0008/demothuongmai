@extends('frontend.master')
@section('title','Trang Chu')
@section('main')


<section class="contend"> <!-- contend -->

	<div class="container width-fix"> 
		<div class="row">


			<!-- <div class="content-tc"> -->
				<div class="wrap-inner">
					<div class="col-xs-3">
						<figure><img src="images/banner/banner-d.png" class="img-responsive" title=""></figure>
					</div>

					<div class="col-xs-9">

						<div class="product-info">
							<div class="row">
								<h3>{{$DetailDienthoai->prod_name}}</h3>
								<div class="row">
									<div id="product-img" class="col-xs-5">
										<img src="{{asset('../storage/app/images/'.$DetailDienthoai->prod_img)}}" class="img-responsive">
									</div>
									<div id="product-details" class="col-xs-7">
										<p>Giá: <span class="price">{{number_format($DetailDienthoai->prod_price,0,',','.')}} đ</span></p>
										<p>Bảo hành:{{$DetailDienthoai->prod_warranty}}</p> 
										<p>Phụ kiện:{{$DetailDienthoai->prod_accessories}}</p>
										<p>Tình trạng:{{$DetailDienthoai->prod_condition}}</p>
										<p>Khuyến mại:{{$DetailDienthoai->prod_promotion}}</p>
										<p>Còn hàng: @if($DetailDienthoai->prod_status==1)Còn hàng @else Hết hàng @endif </p>
										<button class="btn btn-danger "><a href="{{asset('cart/add_dienthoai/'.$DetailDienthoai->prod_id)}}">Đặt hàng online</a></button>
									</div>
									
								</div>    
							</div>
						</div>





						<div class="product-detail">
							<div class="row">
								<div class="col-xs-12">
									<h3>Chi tiết sản phẩm</h3>
									<p class="text-justify">{!!$DetailDienthoai->prod_description!!}</p>

								</div>


								<!-- FORM COMMENT -->
								<div class="col-xs-12">
									<div class="comment">
										<h3>Bình luận</h3>

										<form method="post">
											<div class="form-group">
												<label for="email">Email:</label>
												<input required="" type="email" class="form-control" id="email" name="email">
											</div>
											<div class="form-group">
												<label for="name">Tên:</label>
												<input required="" type="text" class="form-control" id="name" name="name">
											</div>
											<div class="form-group">
												<label for="cm">Bình luận:</label>
												<textarea required="" rows="10" id="cm" class="form-control" name="contend"></textarea>
											</div>
											<div class="form-group text-right">
												<button type="submit" class="btn btn-warning">Gửi</button>
											</div>
											{{csrf_field()}}
										</form>

									</div>
								</div>


								<!-- COMMENT -->
								<div class="col-xs-12">
									<div class="comment-list">
										@foreach($comment as $cm)
										<ul>
											<li class="com-title">
												{{$cm->com_name}}
												<br>
												<span>{{date('d/m/y H:i',strtotime($cm->created_at))}}</span>	
												
											</li>
											<li class="com-details">
												{{$cm->com_contend}}
											</li>
										</ul>
										@endforeach
									</div>
								</div>



							</div>

						</div>
					</div>

				</div>


			</div> <!-- end row -->
		</div><!-- end container -->
	</section><!--end contend -->

	@endsection


