@extends('master')
@section('content')
<!-- breadcrum -->
	<ol class="breadcrumb" style="margin-bottom: 5px;">
	 	<li class="breadcrumb-item"><a href="{{route('trang-chu')}}">TRANG CHỦ</a></li>
	 	<li class="breadcrumb-item active">{{$sanpham->name}}</li>
	</ol>
<!-- end -->
	<div class="container main">
		<div class="row">
			<div class="col-md-3">
				<div class="list-group mr-3 mb-3">
					<div class="list-group-item" style="background-color: #ffc107; font-weight: bold">
					    DANH MỤC
					</div>
					@foreach($loai as $l)
						<a href="{{route('loai-san-pham', $l->id)}}" class="list-group-item list-group-item-action">{{$l->type_name}}</a>
					@endforeach
				</div>
			</div>
			<div class="col-md-9">
				<div class="container-fluid">
					<div class="row bg-light main">
						<div class="col-md-7">
							<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
							    <div class="carousel-inner">
							        <div class="carousel-item active">
							            <img class="d-block w-100" src="../storage/app/product/{{$sanpham->image}}" alt="First slide">
							        </div>
							    </div>
							</div>
						</div>
						<div class="col-md-5">
							<h2 class="nameproduct">{{$sanpham->name}}</h2>
                            @if($sanpham->promotion_price==0)
                                <span class="price" style="color:#FF3924; font-size: 200%;"><b>{{$sanpham->unit_price}}đ/{{$sanpham->unit}}</b></span>
                            @else
                            	<span class="price" style="color:#FF3924; font-size: 200%;"><b>{{$sanpham->promotion_price}}đ/{{$sanpham->unit}}</b></span>
                                <small class="ml-3" style="color:#808080; font-size: 150%"><del>{{$sanpham->unit_price}}đ</del></small>
                            @endif
		                    <br><label>Số lượng:</label>
		                    <div class="btn-group" role="group" aria-label="Basic example">
							  	<button type="button" class="btn btnproduct">-</button>
							  	<input class="soluong" type="text" value="1" name="">
							  	<button type="button" class="btn btnproduct">+</button>
							</div><br>
							<button type="button" class="btn btnproduct mt-3"><i class="fas fa-cart-plus mr-3"></i>Thêm vào giỏ hàng</button>
							<div class="alert alert-danger mt-3" role="alert">
								<i class="fas fa-clock mr-2"></i>Đặt online giao tận nhà ĐÚNG GIỜ (nếu trễ đền 50.000₫)
							</div>
						</div>
					</div>
				</div>
				<div class="container-fluid bg-light">
					<nav class="nav nav-tabs">
							<a class="nav-link" id="description-tab" data-toggle="tab" href="#description" style="border-radius: 0px">MÔ TẢ SẢN PHẨM</a>
							<a class="nav-link" id="comment-tab" data-toggle="tab" href="#comment" style="border-radius: 0px">BÌNH LUẬN</a>
							<a class="nav-link" id="otherproduct-tab " data-toggle="tab" href="#otherproduct" style="border-radius: 0px">SẢN PHẨM KHÁC</a>
					</nav>
					<div class="tab-content pt-3">
						<div class="tab-pane fade show active pb-3" id="description">
							<p>{{$sanpham->description}}</p>
						</div>
						<div class="tab-pane fade" id="comment">
							<form class="m-3" action="#" method="post" id="form-comment">
								<div class="row">
									<div class="form-group col">
										<label for="comment">Đánh giá</label>
										<textarea class="form-control form-control-sm" placeholder="Mời bạn đánh giá về sản phẩm" name="comment" id="comment" required></textarea>
									</div>
								</div>
								<div class="row">
									<div class="form-group col">
										<label class="btn">
											Anh
											<input type="radio" name="gioi-tinh" value="nam">
										</label>
										<label class="btn">
											Chị
											<input type="radio" name="gioi-tinh" value="nu">
										</label>
									</div>
								</div>
								<div class="row">
									<div class="form-group col">
										<label for="name">Họ tên</label>
										<input type="" name="name" id="name" class="form-control" placeholder="Họ tên (bắt buộc)" required> 
									</div>
									<div class="form-group col">
										<label for="email">Email</label>
										<input type="" name="email" id="email" class="form-control" placeholder="Email (bắt buộc)" required> 
									</div>
								</div>
								<div class="row">
									<div class="form-group col">
										<button class="btn btn-primary" type="submit">Gửi đánh giá</button>
									</div>
								</div>
							</form>
						</div>
						<div class="tab-pane fade pt-3" id="otherproduct">
							<div class="row">
								@foreach ($sp_tuongtu as $sptt)
					                <div class="border-0 rounded-0 mb-5 mx-auto" style="width: 13rem; background: white;">
					                    <img class="card-img-top" height="150px" src="../storage/app/product/{{$sptt->image}}" alt="Card image cap">
					                    <div class="card-body position-relative p-0">
					                        <div class="px-4 py-3">
					                            <span style="color: #555; font-size: 14px"><b>{{$sptt->name}}</b></span><br />
					                            @if($sptt->promotion_price==0)
					                                <span style="color:#FF3924;"><b>{{$sptt->unit_price}}đ/{{$sptt->unit}}</b></span>
					                            @else
					                                <small class="mr-2" style="color:#808080;"><del>{{$sptt->unit_price}}đ</del></small>
					                                <span style="color:#FF3924;"><b>{{$sptt->promotion_price}}đ/{{$sptt->unit}}</b></span>
					                            @endif
					                        </div>
					                        <div class="hovered p-0" style="width: 100%; height: 100%; background:white;">
					                            <div class="d-flex align-content-center btn-hover float-left"><a href="{{route('chi-tiet-san-pham', $sptt->id)}}" style="width: 100%"><img class="img-icon2" style="height: 100%"
					                                    src="source/style_frontend/style/src/Asset 14@3x.png" /></a></div>
					                            <div class="d-flex align-content-center btn-hover float-right"><img
					                                    class="img-icon2" src="source/style_frontend/style/src/Asset 13@3x.png" /></div>
					                        </div>
					                    </div>
					                </div>
					            @endforeach
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection()