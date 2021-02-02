@extends('master')
@section('content')
    <div class="container-fluid">
		<div class="row">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="width: 100%; ">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../storage/app/slide/banner.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../storage/app/slide/banner2.png" class="d-block w-100" alt="...">
            </div>
            </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
	</div>
<!-- PRODUCT -->
	<div class="container main">
		<div class="container box-titile mb-5" style="border-color: #dc3545;">
			<div class="bder" style="background-color: #dc3545;">
				<h4 class="list-product-title">SALE PRODUCTS</h4>
			</div>
		</div>
		<div class="row">
            @foreach ($sale_product as $new)
                <div class="border-0 rounded-0 mb-5 mx-auto" style="width: 13rem; background: white;">
                    <img class="card-img-top" height="150px" src="../storage/app/product/{{$new->image}}" alt="Card image cap">
                    <div class="card-body position-relative p-0">
                        <div class="px-4 py-3">
                            <span style="color: #555; font-size: 14px"><b>{{$new->name}}</b></span><br />
                            @if($new->promotion_price==0)
                                <span style="color:#FF3924;"><b>{{$new->unit_price}}đ/{{$new->unit}}</b></span>
                            @else
                                <small class="mr-2" style="color:#808080;"><del>{{$new->unit_price}}đ</del></small>
                                <span style="color:#FF3924;"><b>{{$new->promotion_price}}đ/{{$new->unit}}</b></span>
                            @endif
                        </div>
                        <div class="hovered p-0" style="width: 100%; height: 100%; background:white;">
                            <div class="d-flex align-content-center btn-hover float-left"><a href="{{route('chi-tiet-san-pham', $new->id)}}" style="width: 100%"><img class="img-icon2" style="height: 100%"
                                    src="source/style_frontend/style/src/Asset 14@3x.png" /></a></div>
                            <div class="d-flex align-content-center btn-hover float-right"><img
                                    class="img-icon2" src="source/style_frontend/style/src/Asset 13@3x.png" /></div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="container box-titile mb-5" style="border-color: #0CA900;">
            <div class="bder" style="background-color: #0CA900;">
                <h4 class="list-product-title">NEW PRODUCTS</h4>
            </div>
        </div>
        <div class="row">
            @foreach ($new_product as $new)
                <div class="border-0 rounded-0 mb-5 mx-auto" style="width: 13rem; background: white;">
                    <img class="card-img-top" height="150px" src="../storage/app/product/{{$new->image}}" alt="Card image cap">
                    <div class="card-body position-relative p-0">
                        <div class="px-4 py-3">
                            <span style="color: #555; font-size: 14px"><b>{{$new->name}}</b></span><br />
                            @if($new->promotion_price==0)
                                <span style="color:#FF3924;"><b>{{$new->unit_price}}đ/{{$new->unit}}</b></span>
                            @else
                                <small class="mr-2" style="color:#808080;"><del>{{$new->unit_price}}đ</del></small>
                                <span style="color:#FF3924;"><b>{{$new->promotion_price}}đ/{{$new->unit}}</b></span>
                            @endif
                        </div>
                        <div class="hovered p-0" style="width: 100%; height: 100%; background:white;">
                            <div class="d-flex align-content-center btn-hover float-left"><a href="{{route('chi-tiet-san-pham', $new->id)}}" style="width: 100%"><img class="img-icon2" style="height: 100%"
                                    src="source/style_frontend/style/src/Asset 14@3x.png" /></a></div>
                            <div class="d-flex align-content-center btn-hover float-right"><img
                                    class="img-icon2" src="source/style_frontend/style/src/Asset 13@3x.png" /></div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection()