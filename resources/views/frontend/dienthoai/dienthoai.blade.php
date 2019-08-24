
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
						@foreach($cateDienthoai as $cate)
						<li class="btn btn-default"><a href="{{asset('category_dienthoai/'.$cate->cate_id.'/'.$cate->cate_slug.'.html')}}">{{$cate->cate_name}}</a></li>
						@endforeach
					</ul>
				</section>
			</div>
			<!--END DANH MỤC SẢN PHẨM -->



			<!-- ĐIỆN THOẠI NỔI BẬT NHẤT -->
			<div class="col-xs-12">
				<h4 class="title-item-sp">ĐIỆN THOẠI NỔI BẬT NHẤT</h4>				
				<section class="khoi-sp-noi-bat dtdd-noi-bat">		
					@foreach($featuredDienthoai as $dt)
					<section class="khoi-sp-noi-bat__item">
						<a href="{{asset('detail_dienthoai/'.$dt->prod_id.'/'.$dt->prod_slug.'.html')}}" class="">
							<div class="thumbnail">
								<figure>
									<img src="{{asset('../storage/app/images/'.$dt->prod_img)}}" class="img-responsive">
								</figure>
								<h3>{{$dt->prod_name}}</h3>
								<strong>{{number_format($dt->prod_price,0,',','.')}}</strong>
								<button class="btn btn-danger"><a href="{{asset('detail_dienthoai/'.$dt->prod_id.'/'.$dt->prod_slug.'.html')}}">Chi tiết</a></button>
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
					@foreach($newsDienthoai as $dt)
					<section class="khoi-sp-noi-bat__item">
						<a href="{{asset('detail_dienthoai/'.$dt->prod_id.'/'.$dt->prod_slug.'.html')}}" class="">
							<div class="thumbnail">
								<figure>
									<img src="{{asset('../storage/app/images/'.$dt->prod_img)}}" class="img-responsive">
								</figure>
								<h3>{{$dt->prod_name}}</h3>
								<strong>{{number_format($dt->prod_price,0,',','.')}}</strong>
								<button class="btn btn-danger"><a href="{{asset('detail_dienthoai/'.$dt->prod_id.'/'.$dt->prod_slug.'.html')}}">Chi tiết</a></button>
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





<div id="pagination" class="row text-center">
	<div class="pagination-wrap col-lg-12 col-md-12">
		{{$newsDienthoai->links()}}
	</div>
</div>


@endsection