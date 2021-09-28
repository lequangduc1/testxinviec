<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Truyen Cuoi</title>
    <link href="{{asset('public/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('public/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('public/css/animate.css')}}" rel="stylesheet">
	<link href="{{asset('public/css/maincss.css')}}" rel="stylesheet">
	<link href="{{asset('public/css/responsive.css')}}" rel="stylesheet">
    <script>
        function nextjoke(ID_Product){
            $.ajax({
                url: 'nextjoke/' + ID_Product,
                type: 'GET',

            }).done(function(response){
                location.reload(true);
            });  
		}
        function like(ID_Product){
            $.ajax({
                url: 'like/' + ID_Product,
                type: 'GET',

            }).done(function(response){
                alertify.success('thích sản phẩm thành công');
            });  
		}
        function notLike(ID_Product){
            $.ajax({
                url: 'notlike/' + ID_Product,
                type: 'GET',

            }).done(function(response){
                alertify.success('không thích sản phẩm thành công');
            });  
		}
    </script>
<body >
    <header id="header" >
		<div class="header-middle" id="home">
			<div class="container" style="background-color:#000">
                <div class="companyinfo col-sm-12" style="min-height:34px;margin:0px;border:1px solid #ff0000">
                    <h2 style="padding:0px;margin:0px"><span>Webshite đọc truyện online</span>-truyện cười</h2>
                </div>
                <div class="companyinfo col-sm-12" style="min-height:400px;margin:10px 0;border:1px solid #ff0000">
                    @foreach($truyen as $tr)
                        <?php $data = 0 ?>
                        <?php $error = 0 ?>
                        @foreach($watched as $l)
                            @if($tr->ID_Product == $l)
                                <?php $data = 1 ?>
                            @endif
                        @endforeach
                        <?php
                            if($data == 0 ){
                                $error = 1;
                                ?>
                                <h1 style="color:#fff">{{$tr->Name}}</h1>
                                <p style="font-size:20px">{{$tr->Content}}</p>
                                <button type="button" onclick="like({{$tr->ID_Product}})">Thích</button>
                                <button type="button" onclick="notLike({{$tr->ID_Product}})">Không Thích</button>
                                <button type="button" onclick="nextjoke({{$tr->ID_Product}})">truyện kế tiếp</button>
                                @break
                                <?php
                            }
                        ?>
                    @endforeach
                    <?php
                        if($error == 0){?>
                            <h3 style="color:#fff">That's all the jokes for today! Come back another day!</h3>
                        <?php
                        }
                    ?>        
                </div>
                
			</div> 
		</div>
	</header>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script> 
    <!-- thư viện thông báo -->
		<!-- JavaScript -->
		<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
        <!-- CSS -->
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
        <!-- Default theme -->
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
        <!-- Semantic UI theme -->
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
        <!-- Bootstrap theme -->
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
    <!-- thư viện thông báo -->
</body>
</html>