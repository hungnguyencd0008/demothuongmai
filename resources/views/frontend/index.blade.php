@extends('frontend.master')
@section('title','Trang Chu')
@section('main')

<section class="contend"> <!-- contend -->

	<div class="container width-fix"> 
		<div class="row">

			<!-- ĐIỆN THOẠI NỔI BẬT NHẤT -->
			<div class="col-xs-12">

				<h4 class="title-item-sp">ĐIỆN THOẠI NỔI BẬT NHẤT</h4>
				<section class="khoi-sp-noi-bat dtdd-noi-bat">

					@foreach($dienthoailist as $dt)
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

				{{--
					<div id="pagination" class="row text-center">
						<div class="pagination-wrap col-lg-12 col-md-12">
							{{$dienthoailist->links()}}
						</div>
					</div>
					--}}
				</div>
				<!-- </div> -->


				<!-- TABLET - NỔI BẬT NHẤT -->
				<div class="col-xs-12">

					<h4 class="title-item-sp">TABLET - NỔI BẬT NHẤT</h4>
					<section class="khoi-sp-noi-bat dtdd-noi-bat">

						@foreach($tabletlist as $tablet)
						<section class="khoi-sp-noi-bat__item">
							<a href="{{asset('detail_tablet/'.$tablet->prod_id.'/'.$tablet->prod_slug.'.html')}}" class="">
								<div class="thumbnail">
									<figure>
										<img src="{{asset('../storage/app/tablet/'.$tablet->prod_img)}}" class="img-responsive">
									</figure>
									<h3>{{$tablet->prod_name}}</h3>
									<strong>{{number_format($tablet->prod_price,0,',','.')}}</strong>
									<button class="btn btn-danger"><a href="{{asset('detail_tablet/'.$tablet->prod_id.'/'.$tablet->prod_slug.'.html')}}">Chi tiết</a></button>
								</div>
							</a>
						</section>
						@endforeach

					</section>

					{{--
						<div id="pagination" class="row text-center">
							<div class="pagination-wrap col-lg-12 col-md-12">
								{{$tabletlist->links()}}
							</div>
						</div>
						--}}
					</div>
					<!-- </div> -->



					<!-- PHỤ KIỆN GIÁ RẺ -->
					<div class="col-xs-12">

						<h4 class="title-item-sp">PHỤ KIỆN GIÁ RẺ</h4>
						<section class="khoi-sp-noi-bat dtdd-noi-bat">


							@foreach($phukienlist as $pk)
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

						{{--
							<div id="pagination" class="row text-center">
								<div class="pagination-wrap col-lg-12 col-md-12">
									{{$phukienlist->links()}}
								</div>
							</div>
							--}}

						</div>
						<!-- </div> -->




						<!-- ĐỒNG HỒ NỔI BẬT -->
						<div class="col-xs-12">

							<h4 class="title-item-sp">ĐỒNG HỒ NỔI BẬT</h4>
							<section class="khoi-sp-noi-bat dtdd-noi-bat">


								@foreach($dongholist as $dh)
								<section class="khoi-sp-noi-bat__item">
									<a href="{{asset('detail_dongho/'.$dh->prod_id.'/'.$dh->prod_slug.'.html')}}" class="">
										<div class="thumbnail">
											<figure>
												<img src="{{asset('../storage/app/dongho/'.$dh->prod_img)}}" class="img-responsive">
											</figure>
											<h3>{{$dh->prod_name}}</h3>
											<strong>{{number_format($dh->prod_price,0,',','.')}}</strong>
											<button class="btn btn-danger"><a href="{{asset('detail_dongho/'.$dh->prod_id.'/'.$dh->prod_slug.'.html')}}">Chi tiết</a></button>
										</div>
									</a>
								</section>
								@endforeach



							</section>

							{{--
								<div id="pagination" class="row text-center">
									<div class="pagination-wrap col-lg-12 col-md-12">
										{{$dongholist->links()}}
									</div>
								</div>
								--}}
							</div>
							<!-- </div> -->


						</div> <!-- end row -->
					</div><!-- end container -->
				</section><!--end contend -->

				@endsection
