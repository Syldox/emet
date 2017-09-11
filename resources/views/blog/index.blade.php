@extends('layouts.main')
@section('title','| Blog')

  @section('content')




     {{--<div style="  margin-top: -60px;">--}}

         {{--<div id="myCarousel" class="carousel slide sliding " data-ride="carousel">--}}
             {{--<!-- Indicators -->--}}
             {{--<ol class="carousel-indicators">--}}
                 {{--<li data-target="#myCarousel" data-slide-to="0" class=""></li>--}}
                 {{--<li data-target="#myCarousel" data-slide-to="1" class=""></li>--}}
                 {{--<li data-target="#myCarousel" data-slide-to="2" class="active"></li>--}}
             {{--</ol>--}}
             {{--<div class="carousel-inner">--}}
                 {{--<div class="item"> <img src="images/promo/orangeb3.jpg" style="width:100%" alt="First slide">--}}
                     {{--<div class="container">--}}
                         {{--<div class="carousel-caption">--}}
                             {{--<h1>Reparer Vos Ordinateurs </h1>--}}
                             {{--<p>Nous Maintenons Vos Machines en vie </p>--}}
                             {{--<p><a class="btn btn-lg btn-warning" href="/blog" role="button">Actualités du jour</a></p>--}}
                         {{--</div>--}}
                     {{--</div>--}}
                 {{--</div>--}}
                 {{--<div class="item"> <img src="images/promo/promo-2.jpg" style="width:100%" data-src="" alt="Second    slide">--}}
                     {{--<div class="container">--}}
                         {{--<div class="carousel-caption">--}}
                             {{--<h1>Repareation Smarte Phones </h1>--}}
                             {{--<p>Vous avez un Probleme avec Votre Smart Phones ?--}}
                             {{--<br> Ne paniquez pas Nous Avons la Solution</p>--}}
                             {{--<p><a class="btn btn-lg btn-warning" href="/blog" role="button">Actualités du jour</a></p>--}}
                         {{--</div>--}}
                     {{--</div>--}}
                 {{--</div>--}}
                 {{--<div class="item active"> <img src="images/promo/b1.jpg" style="width:100%" data-src="" alt="Third slide">--}}
                     {{--<div class="container">--}}
                         {{--<div class="carousel-caption">--}}
                             {{--<h1>Maintenance et Service</h1>--}}
                             {{--<p>Le bien Fonctionement de vos Machine Nous est Prioritaire </p>--}}
                             {{--<p><a class="btn btn-lg btn-warning" href="/blog" role="button">Actualités du jour</a></p>--}}
                         {{--</div>--}}
                     {{--</div>--}}
                 {{--</div>--}}
             {{--</div>--}}
             {{--<a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>--}}
         {{--</div>--}}

     {{--</div>--}}
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
          {{--<div class="col-md-3 col-md-offset-1">--}}
              {{--<h2>Side Bar</h2>--}}
          {{--</div>--}}
          {{--end sidebar--}}





      </div>


      {{--test script for sweet Alert --}}

      <script type="text/javascript">
          function valid() {
              swal({
                  title: "Sweet ;)",
                  text: "Click below to create an account.",
                  imageUrl: "../../images/user.png"
              });
              document.getElementById("momo").href = "http://blog.dev/login";
          }
      </script>



      <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <h1 class="text-center">Actualité Du Jour</h1>
              <hr style="padding-top: 10px; margin-left: -90px">
          </div>
      </div>
    @foreach($posts as $post)
          <div class="row">
              <div class="col-md-8 col-md-offset-2">
                  <!-- Preview Image -->
                  <img class="form-spacing-top"  height="200" width="650" alt=""  src="{{$post->photo ? $post->photo->file : $post->photoPlaceHolder() }}" alt="">
                  {{--<img src="{{asset('images/' . $post->image)}}" height="200" width="500" alt="" class="form-spacing-top">--}}
                  <h2>{{$post->title}}</h2>
                  <h5>Published: {{date('M j, Y', strtotime($post->created_at))}}</h5>
                  <p>{{ substr(strip_tags($post->body),0,250)}}{{strlen(strip_tags($post->body)) > 250 ? '...' : ""}}</p>
                  <a href="{{url('blog/'.$post->slug)}}" class="btn btn-warning btn-orange">Read More</a>

              </div>
          </div>
          <hr style="padding-top: 10px; margin-left: -90px">

    @endforeach

      <div class="row">
          <div class="col-md-12">
              <div class="text-center">
                  {{$posts->links()}}
              </div>
          </div>
      </div>

  @endsection