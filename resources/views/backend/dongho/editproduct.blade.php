@extends('backend.master')
@section('title','Edit sản phẩm')
@section('main')

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Sản phẩm</h1>
		</div>
	</div><!--/.row-->

	<div class="row">
		<div class="col-xs-12 col-md-12 col-lg-12">

			<div class="panel panel-primary">
				<div class="panel-heading">Sửa sản phẩm</div>
				<div class="panel-body">
					<form method="post" enctype="multipart/form-data">
						<div class="row" style="margin-bottom:40px">
							<div class="col-xs-8">
								<div class="form-group" >
									<label>Tên sản phẩm</label>
									<input required type="text" name="name" value="{{$product->prod_name}}" class="form-control">
								</div>
								<div class="form-group" >
									<label>Giá sản phẩm</label>
									<input required type="number" name="price" value="{{$product->prod_price}}"  class="form-control">
								</div>
								<div class="form-group" >
									<label>Ảnh sản phẩm</label>
									<input id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)">
									<img id="avatar" class="thumbnail" width="300px" src="{{asset('../storage/app/dongho/'.$product->prod_img)}}">
								</div>
								<div class="form-group" >
									<label>Phụ kiện</label>
									<input required type="text" name="accessories" value="{{$product->prod_accessories}}"  class="form-control">
								</div>
								<div class="form-group" >
									<label>Bảo hành</label>
									<input required type="text" name="warranty" value="{{$product->prod_warranty}}" class="form-control">
								</div>
								<div class="form-group" >
									<label>Khuyến mãi</label>
									<input required type="text" name="promotion" value="{{$product->prod_promotion}}" class="form-control">
								</div>
								<div class="form-group" >
									<label>Tình trạng</label>
									<input required type="text" name="condition" value="{{$product->prod_condition}}" class="form-control">
								</div>
								<div class="form-group" >
									<label>Trạng thái</label>
									<select required name="status" class="form-control">
										<option value="1" @if($product->prod_status==1)selected @endif >Còn hàng</option>
										<option value="0" @if($product->prod_status==0)selected @endif >Hết hàng</option>
									</select>
								</div>
								<div class="form-group" >
									<label>Miêu tả</label>
									<textarea required class="ckeditor" name="description">{{$product->prod_description}}</textarea>
									<script type="text/javascript">
										var editor = CKEDITOR.replace('description',{
											language:'vi',
											filebrowserImageBrowseUrl: "{{asset('editor/ckfinder/ckfinder.html?Type=Images')}}",
											filebrowserFlashBrowseUrl: "{{asset('editor/ckfinder/ckfinder.html?Type=Flash')}}",
											filebrowserImageUploadUrl:"{{asset('editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images')}}",
											filebrowserFlashUploadUrl:"{{asset('editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash')}}",
										});
									</script>
								</div>
								<div class="form-group" >
									<label>Danh mục</label>
									<select required name="cate" class="form-control">
										@foreach($catelist as $cate)
										<option value="{{$cate->cate_id}}" @if($product->prod_cate==$cate->cate_id) selected @endif>{{$cate->cate_name}}</option>
										@endforeach
									</select>
								</div>
								<div class="form-group" >
									<label>Sản phẩm nổi bật</label><br>

									Có: <input type="radio" name="featured" value="1" @if($product->prod_featured==1)checked @endif >
									Không: <input type="radio" name="featured" value="0" @if($product->prod_featured==0)checked @endif >

									
								</div>
								<input type="submit" name="submit" value="Thêm" class="btn btn-primary">
								<a href="{{asset('admin/product/dongho')}}" class="btn btn-danger">Hủy bỏ</a>
							</div>
						</div>
						{{csrf_field()}}
					</form>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div><!--/.row-->
</div>	<!--/.main-->


@stop