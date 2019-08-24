@extends('backend.master')
@section('title','Trang Chu Quan Tri')
@section('main')


<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Danh mục Sản phẩm</h1>
		</div>
	</div><!--/.row-->
	
	<div class="row">
		<div class="col-xs-12 col-md-12 col-lg-12">
			
			<div class="panel panel-primary">
				
				<div class="panel-body">
					<div class="bootstrap-table">
						<div class="table-responsive " >
							<a href="{{asset('admin/category/dienthoai')}}" class="btn btn-primary">Điện thoại
							</a>						
							<a href="{{asset('admin/category/tablet')}}" class="btn btn-primary">Tablet
							</a>
							<a href="{{asset('admin/category/laptop')}}" class="btn btn-primary">Laptop
							</a>
							<a href="{{asset('admin/category/phukien')}}" class="btn btn-primary">phụ kiện</a>
							<a href="{{asset('admin/category/dongho')}}" class="btn btn-primary">đồng hồ</a>
							<a href="{{asset('admin/category/dienmay')}}" class="btn btn-primary">điện máy</a>

						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div><!--/.row-->
</div>	<!--/.main-->
@stop