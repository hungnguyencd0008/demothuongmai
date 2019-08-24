@extends('frontend.master')
@section('title','Trang Chu')
@section('main')



<section class="contend"> <!-- contend -->

	<div class="container width-fix"> 
		<div class="row">



			<!-- Tìm kiếm với từ khóa: Samsung -->
			<div class="col-xs-12">

				<h4 class="title-item-sp">{{$cateDienMay->cate_name}}</h4>
				<section class="khoi-sp-noi-bat dtdd-noi-bat">

					@foreach($itemsDienMay as $dm)
					<section class="khoi-sp-noi-bat__item">
						<a href="{{asset('detail_dienmay/'.$dm->prod_id.'/'.$dm->prod_slug.'.html')}}" class="">
							<div class="thumbnail">
								<figure>
									<img src="{{asset('../storage/app/dienmay/'.$dm->prod_img)}}" class="img-responsive">
								</figure>
								<h3>{{$dm->prod_name}}</h3>
								<strong>{{number_format($dm->prod_price,0,',','.')}}</strong>
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
