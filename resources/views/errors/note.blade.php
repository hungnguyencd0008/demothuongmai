@if(Session::has('error'))
<p class="alert alert-danger">{{Session::get('error')}}</p>
@endif
@foreach($errors->all() as $error)
<p class="alert alert-danger">{{$error}}</p>
@endforeach

{{-- 
	$errors->all():lấy hết lỗi
	Session::has():Kiểm tra 1 session có tồn tại hay không
	Session::get():Để lấy ra phần tử được lưu trữ vào session 
	--}}
