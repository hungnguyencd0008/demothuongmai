
@extends('frontend.master')
@section('title','Trang Chu')
@section('main')



<section class="contend"> <!-- contend -->

	<div class="container width-fix"> 
		<div class="row">


			<!-- DANH MỤC SẢN PHẨM -->
			<div class="col-xs-12">
				<section class="category-link">
					<ul>
						@foreach($catePhuKien as $cate)
						<li class="btn btn-default"><a href="{{asset('category_phukien/'.$cate->cate_id.'/'.$cate->cate_slug.'.html')}}">{{$cate->cate_name}}</a></li>
						@endforeach
					</ul>
				</section>
			</div>
			<!--END DANH MỤC SẢN PHẨM -->



			<!-- ĐIỆN THOẠI NỔI BẬT NHẤT -->
			<div class="col-xs-12">
				<h4 class="title-item-sp">ĐIỆN THOẠI NỔI BẬT NHẤT</h4>				
				<section class="khoi-sp-noi-bat dtdd-noi-bat">		
					@foreach($featuredPhuKien as $pk)
					<section class="khoi-sp-noi-bat__item">
						<a href="{{asset('detail_phukien/'.$pk->prod_id.'/'.$pk->prod_slug.'.html')}}" class="">
							<div class="thumbnail">
								<figure>
									<img src="{{asset('../storage/app/phukien/'.$pk->prod_img)}}" class="img-responsive">
								</figure>
								<h3>{{$pk->prod_name}}</h3>
								<strong>{{number_format($pk->prod_price,0,',','.')}}</strong>
								<button class="btn btn-danger"><a href="{{asset('detail_phukien/'.$pk->prod_id.'/'.$pk->prod_slug.'.html')}}">Chi tiết</a></button>
							</div>
						</a>
					</section>
					@endforeach
				</section>
			</div>
			<!-- </div> -->

			<!-- ĐIỆN THOẠI MỚI NHẤT -->
			<div class="col-xs-12">
				<h4 class="title-item-sp">ĐIỆN THOẠI MỚI NHẤT</h4>				
				<section class="khoi-sp-noi-bat dtdd-noi-bat">		
					@foreach($newsPhuKien as $pk)
					<section class="khoi-sp-noi-bat__item">
						<a href="{{asset('detail_tablet/'.$pk->prod_id.'/'.$pk->prod_slug.'.html')}}" class="">
							<div class="thumbnail">
								<figure>
									<img src="{{asset('../storage/app/phukien/'.$pk->prod_img)}}" class="img-responsive">
								</figure>
								<h3>{{$pk->prod_name}}</h3>
								<strong>{{number_format($pk->prod_price,0,',','.')}}</strong>
								<button class="btn btn-danger"><a href="{{asset('detail_tablet/'.$pk->prod_id.'/'.$pk->prod_slug.'.html')}}">Chi tiết</a></button>
							</div>
						</a>
					</section>
					@endforeach
				</section>
			</div>
			<!-- </div> -->









		</div> <!-- end row -->
	</div><!-- end container -->
</section><!--end contend -->





<div class="container">
	<div class="row">
		<div class="col-xs-12 text-center">
			<ul class="pagination">
				<li><a href="#">&laquo;</a></li>
				<li><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">5</a></li>
				<li><a href="#">&raquo;</a></li>
			</ul>
		</div>

	</div>
</div>



@endsection