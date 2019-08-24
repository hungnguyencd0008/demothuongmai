@extends('frontend.master')
@section('title','Trang Chu')
@section('main')



<section class="contend"> <!-- contend -->

	<div class="container width-fix"> 
		<div class="row">




			<!-- Tìm kiếm với từ khóa: Samsung -->
			<div class="col-xs-12">

				<h4 class="title-item-sp">Tìm kiếm với từ khóa: {{$keyword}}</h4>
				<section class="khoi-sp-noi-bat dtdd-noi-bat">

					@foreach($items as $item)
					<section class="khoi-sp-noi-bat__item">
						<a href="" class="">
							<div class="thumbnail">
								<figure>
									<img src="{{asset('../storage/app/images/'.$item->prod_img)}}" class="img-responsive">
								</figure>
								<h3>{{$item->prod_name}}</h3>
								<strong>{{number_format($item->prod_price,0,',','.')}}₫</strong>
								<button class="btn btn-danger"><a href="">Chi tiết</a></button>
							</div>
						</a>
					</section>
					@endforeach					

					@foreach($items1 as $item)
					<section class="khoi-sp-noi-bat__item">
						<a href="" class="">
							<div class="thumbnail">
								<figure>
									<img src="{{asset('../storage/app/tablet/'.$item->prod_img)}}" class="img-responsive">
								</figure>
								<h3>{{$item->prod_name}}</h3>
								<strong>{{number_format($item->prod_price,0,',','.')}}₫</strong>
								<button class="btn btn-danger"><a href="">Chi tiết</a></button>
							</div>
						</a>
					</section>
					@endforeach					

					@foreach($items2 as $item)
					<section class="khoi-sp-noi-bat__item">
						<a href="" class="">
							<div class="thumbnail">
								<figure>
									<img src="{{asset('../storage/app/laptop/'.$item->prod_img)}}" class="img-responsive">
								</figure>
								<h3>{{$item->prod_name}}</h3>
								<strong>{{number_format($item->prod_price,0,',','.')}}₫</strong>
								<button class="btn btn-danger"><a href="">Chi tiết</a></button>
							</div>
						</a>
					</section>
					@endforeach					


					@foreach($items3 as $item)
					<section class="khoi-sp-noi-bat__item">
						<a href="" class="">
							<div class="thumbnail">
								<figure>
									<img src="{{asset('../storage/app/phukien/'.$item->prod_img)}}" class="img-responsive">
								</figure>
								<h3>{{$item->prod_name}}</h3>
								<strong>{{number_format($item->prod_price,0,',','.')}}₫</strong>
								<button class="btn btn-danger"><a href="">Chi tiết</a></button>
							</div>
						</a>
					</section>
					@endforeach					


					@foreach($items4 as $item)
					<section class="khoi-sp-noi-bat__item">
						<a href="" class="">
							<div class="thumbnail">
								<figure>
									<img src="{{asset('../storage/app/dongho/'.$item->prod_img)}}" class="img-responsive">
								</figure>
								<h3>{{$item->prod_name}}</h3>
								<strong>{{number_format($item->prod_price,0,',','.')}}₫</strong>
								<button class="btn btn-danger"><a href="">Chi tiết</a></button>
							</div>
						</a>
					</section>
					@endforeach					


					@foreach($items5 as $item)
					<section class="khoi-sp-noi-bat__item">
						<a href="" class="">
							<div class="thumbnail">
								<figure>
									<img src="{{asset('../storage/app/dienmay/'.$item->prod_img)}}" class="img-responsive">
								</figure>
								<h3>{{$item->prod_name}}</h3>
								<strong>{{number_format($item->prod_price,0,',','.')}}₫</strong>
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
