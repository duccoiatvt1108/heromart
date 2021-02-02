<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
    <base href="{{asset(' ')}}"/> 
    <link rel="stylesheet" type="text/css" href="source/style_frontend/style/css/style.css">
    <link rel="stylesheet" href="source/style_frontend/bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="source/style_frontend/style/fontawesome-free-5.15.1-web/css/all.css">
    <script src="source/style_frontend/bootstrap/js/jquery.js"></script>
    <script src="source/style_frontend/bootstrap/js/popper.min.js"></script>
    <script src="source/style_frontend/bootstrap/js/bootstrap.js"></script>
</head>
<body>
    <nav class="navbar justify-content-between bg-success sticky-top">
        <div class="container">
            <a class="navbar-brand" href="{{route('trang-chu')}}" style="max-width: 20%">
                <img src="source/style_frontend/style/src/logo.png" class="img-logo" style="height: 100%; width: 100%;object-fit: contain;" />
            </a>
            <form class="form-inline my_pd" style="border-radius: 50px;">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" style="border-radius: 20px; width: 20rem">
                <button class="btn btn-outline-warning my-2 my-sm-0" type="submit" style="border-radius: 20px">Search</button>
                <div class="d-flex">
                    <button class="btn rounded-circle p-2 mx-2 bg-white btn-icon"><img src="source/style_frontend/style/src/account.png"
                            class="img-icon"/></button>
                    <button class="btn rounded-circle p-2 mx-2 bg-white btn-icon"><img src="source/style_frontend/style/src/cart.png"
                            class="img-icon" /></button>
                </div>
            </form>
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent2" >
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('trang-chu')}}">TRANG CHỦ <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" data-toggle="dropdown" role="button">
                    THỰC PHẨM TƯƠI
                    </a>
                    <div class="dropdown-content bder2">
                        @foreach($loai_sp as $loai)
                            @if($loai->id == 1 || $loai->id == 2 || $loai->id == 3)
                                <a class="dropdown-item " href="{{route('loai-san-pham', $loai->id)}}">{{$loai->type_name}}</a>
                            @endif
                        @endforeach
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" data-toggle="dropdown">
                    THỰC PHẨM CHẾ BIẾN SẴN
                    </a>
                    <div class="dropdown-content bder2">
                        @foreach($loai_sp as $loai)
                            @if($loai->id == 4 || $loai->id == 5)
                                <a class="dropdown-item " href="{{route('loai-san-pham', $loai->id)}}">{{$loai->type_name}}</a>
                            @endif
                        @endforeach
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" data-toggle="dropdown">
                    ĐỒ UỐNG
                    </a>
                    <div class="dropdown-content bder2">
                        @foreach($loai_sp as $loai)
                            @if($loai->id == 6 || $loai->id == 7)
                                <a class="dropdown-item" href="{{route('loai-san-pham', $loai->id)}}">{{$loai->type_name}}</a>
                            @endif
                        @endforeach
                    </div>
                </li>
            </ul>
        </div>
    </nav>