@extends('layouts.main')
@section('title', '| Home')

@section('content')




    {{--<div class="jumbotron">--}}
    {{--<h1 class="displa">Welcome To My Bolg!</h1>--}}
    {{--<p class="lead">Thank you for visiting.</p>--}}
    {{--<hr class="my-4">--}}
    {{--<p>This is My blog site created with Laravel.</p>--}}
    {{--<p class="lead">--}}
    {{--<a class="btn btn-warning btn-lg btn-orange" href="#" role="button" onclick="valid()">Popular Post</a>--}}
    {{--</p>--}}
    {{--</div>--}}

    <div id="myCarousel" class="carousel slide" data-ride="carousel" style=" border: 2px solid #ff6601; width: 125%;margin-left: -143px;margin-top: -50px;">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class=""></li>
            <li data-target="#myCarousel" data-slide-to="1" class=""></li>
            <li data-target="#myCarousel" data-slide-to="2" class="active"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item"> <img src="images/promo/orangeb1.jpg" style="width:100%" alt="First slide">
                <div class="container">
                    <div class="carousel-caption">
                        {{--<h1>Reparer Vos Ordinateurs </h1>--}}
                        {{--<p>Nous Maintenons Vos Machines en vie </p>--}}
                        {{--<p><a class="btn btn-lg btn-warning" href="/blog" role="button">Actualités du jour</a></p>--}}
                    </div>
                </div>
            </div>
            <div class="item"> <img src="images/promo/orange-1.jpg" style="width:100%" data-src="" alt="Second    slide">
                <div class="container">
                    <div class="carousel-caption">
                        {{--<h1>Repareation Smarte Phones </h1>--}}
                        {{--<p>Vous avez un Probleme avec Votre Smart Phones ?--}}
                        {{--<br> Ne paniquez pas Nous Avons la Solution</p>--}}
                        {{--<p><a class="btn btn-lg btn-warning" href="/blog" role="button">Actualités du jour</a></p>--}}
                    </div>
                </div>
            </div>
            <div class="item active"> <img src="images/promo/orangeb1.jpg" style="width:100%" data-src="" alt="Third slide">
                <div class="container">
                    <div class="carousel-caption">
                        {{--<h1>Maintenance et Service</h1>--}}
                        {{--<p>Le bien Fonctionement de vos Machine Nous est Prioritaire </p>--}}
                        {{--<p><a class="btn btn-lg btn-warning" href="/blog" role="button">Actualités du jour</a></p>--}}
                    </div>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
    <!-- ...................................................featured Products................................................... -->
    {{--<div class="main-text hidden-xs">--}}
    {{--<div class="col-md-12 text-center">--}}
    {{--<h1>--}}
    {{--Static Headline And Content</h1>--}}
    {{--<h3>--}}
    {{--Lorem ipsum dolor sit amet, consectetur adipiscing elit.--}}
    {{--</h3>--}}
    {{--<div class="">--}}
    {{--<a class="btn btn-clear btn-sm btn-min-block" href="http://www.jquery2dotnet.com/">Login</a><a class="btn btn-clear btn-sm btn-min-block"--}}
    {{--href="http://www.jquery2dotnet.com/">Registration</a></div>--}}
    {{--</div>--}}
    {{--</div>--}}

    <div id="push"></div>{{--end slider --}}

    <div class="row">

        {{--<div class="col-md-8">--}}
            {{--@foreach($posts as $post)--}}
                {{--<div class="post">--}}
                    {{--<h3>{{$post->title}}</h3>--}}
                    {{--<p>{{substr(strip_tags($post->body), 0, 300)}}{{strlen(strip_tags($post->body)) >300 ? "..." : ""}}</p>--}}
                    {{--<a href="{{url('blog/'.$post->slug)}}" class="btn btn-warning btn-orange">Read More</a>--}}
                {{--</div>--}}
                {{--<hr>--}}
            {{--@endforeach--}}
        {{--</div>--}}
        {{--side bar--}}
        <div class="col-md-12 ">

            <p style="margin-left: 500px; margin-top: 50px"><a class="btn btn-lg btn-warning" href="/blog" role="button">Actualités du jour</a></p>

        </div>
        {{--end sidebar--}}




    </div>

    {{--test script for sweet Alert --}}

    <hr>


    {{--Thumbnails section --}}

    <div class="container-fluid" style="margin-bottom: 100px">

        <center><h1>Tous nos services</h1></center>
        <br>
        <div class="row">
            {{--<div class="col-md-3 col-sm-4">--}}
                {{--<div class="wrimagecard wrimagecard-topimage">--}}
                    {{--<a href="#">--}}
                        {{--<div class="wrimagecard-topimage_header" style="background-color:rgba(119, 178, 88, 0.9) ">--}}
                            {{--<center><a href="/data-matching-and-cleansing-features/data-merging-and-purging"><img alt="" src="http://res.cloudinary.com/match2lists/image/upload/c_scale,w_200/v1497199248/Data-Provider-Solutions_420_azudag.png"></a></center>--}}
                        {{--</div>--}}
                        {{--<div class="wrimagecard-topimage_title">--}}
                            {{--<h4>Charts--}}
                                {{--<div class="pull-right badge">18</div></h4>--}}
                        {{--</div>--}}
                    {{--</a>--}}
                {{--</div>--}}
            {{--</div>--}}

            <div class="col-md-3 col-sm-4">
                <div class="wrimagecard wrimagecard-topimage">
                    <a href="#">
                        <div class="wrimagecard-topimage_header" style="background-color: rgba(119, 178, 88, 0.1)">
                            {{--<center><i class = "fa fa-cubes" style="color:#16A085"></i></center>--}}
                            <img src="http://www.orangemali.com/2/sites/particuliers/28/250/a-weletones.jpg" alt="">
                        </div>
                        <div class="wrimagecard-topimage_title">
                            <h4>Wélétones
                                <div class="pull-right badge" id="WrControls"></div></h4>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-3 col-sm-4">
                <div class="wrimagecard wrimagecard-topimage">
                    <a href="#">
                        <div class="wrimagecard-topimage_header" style="background-color:  rgba(213, 15, 37, 0.1)">
                            {{--<center><i class="fa fa-pencil-square-o" style="color:#d50f25"> </i></center>--}}
                            <img src="http://www.orangemali.com/2/sites/particuliers/1018/1022/djiguiya_mosaique.jpg" alt="">
                        </div>
                        <div class="wrimagecard-topimage_title" >
                            <h4>Djiguiya
                                <div class="pull-right badge" id="WrForms"></div>
                            </h4>
                        </div>

                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-4">
                <div class="wrimagecard wrimagecard-topimage">
                    <a href="#">
                        <div class="wrimagecard-topimage_header" style="background-color:  rgba(51, 105, 232, 0.1)">
                            {{--<center><i class="fa fa-table" style="color:#3369e8"> </i></center>--}}
                            <img src="data:image/jpeg;base64,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" alt="">
                        </div>
                        <div class="wrimagecard-topimage_title">
                            <h4>Internet Mobile
                                <div class="pull-right badge" id="WrGridSystem"></div></h4>
                        </div>

                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-4">
                <div class="wrimagecard wrimagecard-topimage">
                    <a href="#">
                        <div class="wrimagecard-topimage_header" style="background-color:  rgba(250, 188, 9, 0.1)">
                            {{--<center><i class="fa fa-info-circle" style="color:#fabc09"> </i></center>--}}
                            <img src="http://www.orangemali.com/2/sites/particuliers/28/250/h-Orange-Money.jpg" alt="">
                        </div>
                        <div class="wrimagecard-topimage_title">
                            <h4>Orange Money
                                <div class="pull-right badge" id="WrInformation"></div></h4>
                        </div>

                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-4">
                <div class="wrimagecard wrimagecard-topimage">
                    <a href="#">
                        <div class="wrimagecard-topimage_header" style="background-color: rgba(121, 90, 71, 0.1)">
                            {{--<center><i class="fa fa-bars" style="color:#795a47"> </i></center>--}}
                            <img src="http://www.orangemali.com/2/sites/particuliers/28/250/d-A-Sara-Nye.jpg" alt="">
                        </div>
                        <div class="wrimagecard-topimage_title">
                            <h4>A Sara Nyé
                                <div class="pull-right badge" id="WrNavigation"></div></h4>
                        </div>

                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-4">
                <div class="wrimagecard wrimagecard-topimage">
                    <a href="#">
                        <div class="wrimagecard-topimage_header" style="background-color: rgba(130, 93, 9, 0.1)">
                            {{--<center><i class="fa fa-magic" style="color:#825d09"></i></center>--}}
                            <img src="http://www.orangemali.com/2/sites/particuliers/28/250/e-Roaming.jpg" alt="">
                        </div>
                        <div class="wrimagecard-topimage_title">
                            <h4>Roaming
                                <div class="pull-right badge" id="WrThemesIcons"></div></h4>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-3 col-sm-4">
                <div class="wrimagecard wrimagecard-topimage">
                    <a href="#">
                        <div class="wrimagecard-topimage_header" style="background-color: rgba(130, 93, 9, 0.1)">
                            {{--<center><i class="fa fa-magic" style="color:#825d09"></i></center>--}}
                            <img src="data:image/jpeg;base64,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" alt="">
                        </div>
                        <div class="wrimagecard-topimage_title">
                            <h4>Orange Fidélité
                                <div class="pull-right badge" id="WrThemesIcons"></div></h4>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-3 col-sm-4">
                <div class="wrimagecard wrimagecard-topimage">
                    <a href="#">
                        <div class="wrimagecard-topimage_header" style="background-color: rgba(130, 93, 9, 0.1)">
                            {{--<center><i class="fa fa-magic" style="color:#825d09"></i></center>--}}
                            <img src="http://www.orangemali.com/2/sites/particuliers/28/250/g-Orange-SCool.jpg" alt="">
                        </div>
                        <div class="wrimagecard-topimage_title">
                            <h4>Orange School
                                <div class="pull-right badge" id="WrThemesIcons"></div></h4>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>




    {{--<script type="text/javascript">--}}
        {{--function valid() {--}}
            {{--swal({--}}
                {{--title: "Sweet ;)",--}}
                {{--text: "Click below to create an account.",--}}
                {{--imageUrl: "../../images/user.png"--}}
            {{--});--}}
            {{--document.getElementById("momo").href = "http://blog.dev/login";--}}
        {{--}--}}
    {{--</script>--}}

@endsection
