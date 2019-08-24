@extends('frontend.master')
@section('title','Trang Chu')
@section('main')



<section class="contend"> <!-- contend -->

	<div class="container width-fix"> 
		<div class="row">



			<!-- Tìm kiếm với từ khóa: Samsung -->
			<div class="col-xs-12">

				<h4 class="title-item-sp">{{$cateDienthoai->cate_name}}</h4>
				<section class="khoi-sp-noi-bat dtdd-noi-bat">

					@foreach($itemsDienthoai as $dt)
					<section class="khoi-sp-noi-bat__item">
						<a href="{{asset('detail_dienthoai/'.$dt->prod_id.'/'.$dt->prod_slug.'.html')}}" class="">
							<div class="thumbnail">
								<figure>
									<img src="{{asset('../storage/app/images/'.$dt->prod_img)}}" class="img-responsive">
								</figure>
								<h3>{{$dt->prod_name}}</h3>
								<strong>{{number_format($dt->prod_price,0,',','.')}}</strong>
								<button class="btn btn-danger"><a href="">Chi tiết</a></button>
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
		{{$itemsDienthoai->links()}}
	</div>
</div>
@endsection
