@extends('backend.master')
@section('title', 'Danh sách sản phẩm')
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
										<input required type="text" name="name" class="form-control" value="{{$product->name}}">
									</div>
									<div class="form-group" >
										<label>Giá sản phẩm</label>
										<input required type="number" name="unit_price" class="form-control" value="{{$product->unit_price}}">
									</div>
									<div class="form-group" >
										<label>Giá khuyến mãi</label>
										<input required type="number" name="promotion_price" class="form-control" value="{{$product->promotion_price}}">
									</div>
									<div class="form-group" >
										<label>Đơn vị</label>
										<input required type="text" name="unit" class="form-control" value="{{$product->unit}}">
									</div>
									<div class="form-group" >
										<label>Ảnh sản phẩm</label>
										<input id="img" type="file" name="image" class="form-control hidden" onchange="changeImg(this)">
					                    <img id="avatar" class="thumbnail" width="300px" src="{{asset('../storage/app/product/'.$product->image)}}">
									</div>
									<div class="form-group" >
										<label>Miêu tả</label>
										<textarea class="ckeditor" required name="description">{{$product->description}}</textarea>
										<script type="text/javascript">
											var editor = CKEDITOR.replace('description',{
												language:'vi',
												filebrowserImageBrowseUrl: 'source/style_backend/ckfinder/ckfinder.html?Type=Images',
												filebrowserFlashBrowseUrl: 'source/style_backend/ckfinder/ckfinder.html?Type=Flash',
												filebrowserImageUploadUrl: 'source/style_backend/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
												filebrowserFlashUploadUrl: 'source/style_backend/public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
											});
										</script>
									</div>
									<div class="form-group" >
										<label>Danh mục</label>
										<select required name="id_type" class="form-control">
											@foreach($catelist as $cate)
											<option value="{{$cate->id}}" @if($product->id_type == $cate->id) selected @endif>{{$cate->type_name}}</option>
											@endforeach
					                    </select>
									</div>
									<div class="form-group" >
										<label>Sản phẩm mới</label><br>
										Có: <input type="radio" name="new" value="1" @if($product->new == 1) checked @endif>
										Không: <input type="radio" name="new" value="0" @if($product->new == 0) checked @endif>
									</div>
									<input type="submit" name="submit" value="Cập nhật" class="btn btn-primary">
									<a href="#" class="btn btn-danger">Hủy bỏ</a>
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