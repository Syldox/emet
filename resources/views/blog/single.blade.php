@extends('layouts.main')
{{--@extends('layouts.blog_post')--}}

<?php $titleTag = Htmlspecialchars($post->title);?>
@section('title', "| $titleTag")

@section('content')

<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Blog Post Content Column -->
        <div class="col-lg-8">

            <!-- Blog Post -->

            <!-- Title -->
            <h1>{{$post->title}}</h1>

            <!-- Author -->
            <p class="lead">
                by <a href="#">{{$post->user->name}}</a>
            </p>

            <hr>

            <!-- Date/Time -->
            <p><span class="glyphicon glyphicon-time"></span> Posted on {{$post->created_at->diffForHumans()}}</p>

            <hr>

            <!-- Preview Image -->
            <img class="img-responsive" src="{{$post->photo ? $post->photo->file : $post->photoPlaceHolder() }}" alt="">

            <hr>

            <!-- Post Content -->
            <p>{!! $post->body !!}</p>
            <hr>



            <div id="disqus_thread"></div>
            <script>

                /**
                 *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                 *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                /*
                 var disqus_config = function () {
                 this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                 this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                 };
                 */
                (function() { // DON'T EDIT BELOW THIS LINE
                    var d = document, s = d.createElement('script');
                    s.src = 'https://emet-1.disqus.com/embed.js';
                    s.setAttribute('data-timestamp', +new Date());
                    (d.head || d.body).appendChild(s);
                })();
            </script>
            <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
            <script id="dsq-count-scr" src="//emet-1.disqus.com/count.js" async></script>




        </div>

        <!-- Blog Sidebar Widgets Column -->
        <div class="col-md-4">

            <!-- Blog Search Well -->
            <div class="well">
                <h4>Blog Search</h4>
                <div class="input-group">
                    <input type="text" class="form-control">
                    <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                </div>
                <!-- /.input-group -->
            </div>

            <!-- Blog Categories Well -->
            <div class="well">
                <h4>Blog Categories</h4>
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="list-unstyled">
                            <li><a href="#">Category Name</a>
                            </li>
                            <li><a href="#">Category Name</a>
                            </li>
                            <li><a href="#">Category Name</a>
                            </li>
                            <li><a href="#">Category Name</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul class="list-unstyled">
                            <li><a href="#">Category Name</a>
                            </li>
                            <li><a href="#">Category Name</a>
                            </li>
                            <li><a href="#">Category Name</a>
                            </li>
                            <li><a href="#">Category Name</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /.row -->
            </div>

            <!-- Side Widget Well -->
            <div class="well">
                <h4>Side Widget Well</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
            </div>

        </div>

    </div>
    <!-- /.row -->

    <hr>

    {{--<!-- Footer -->--}}
    {{--<footer>--}}
        {{--<div class="row">--}}
            {{--<div class="col-lg-12">--}}
                {{--<p>Copyright &copy; Your Website 2014</p>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<!-- /.row -->--}}
    {{--</footer>--}}

</div>









    {{--<div class="row">--}}
        {{--<div class="col-md-8 col-md-offset-2">--}}

            {{--<img src="{{asset('images/' . $post->image)}}" height="400" width="800" alt="">--}}
            {{--<h1>{{$post->title}}</h1>--}}
            {{--<p>{!! $post->body !!}</p>--}}
            {{--<b>Posted in: <small class="badge">{{$post->category->name}}</small></b>--}}
        {{--</div>--}}
    {{--</div>--}}

    {{--<div class="row form-spacing-top">--}}
        {{--<div class="col-md-8 col-md-offset-2">--}}
            {{--<hr>--}}
            {{--<h2 class="badge badge-warning btn-orange comment-title"><i class="fa fa-comment" aria-hidden="true"></i> {{$post->comments()->count()}} Comments</h2>--}}
            {{--@foreach($post->comments as $comment)--}}

                {{--<div class="comment well well-lg">--}}
                    {{--<div class="author-info">--}}
                        {{--<img src="{{"https://www.gravatar.com/avatar/" . md5(strtolower(trim($comment->email))) . "?s=50&d=mm"}}" alt="" class="author-image">--}}

                        {{--<div class="author-name">--}}
                            {{--<h4>{{$comment->name}}</h4>--}}
                            {{--<p class="author-time">{{date('F nS, Y - G:i' ,strtotime($comment->created_at))}}</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="comment-content">--}}
                        {{--{{$comment->comment}}--}}
                    {{--</div>--}}

                {{--</div>--}}

            {{--@endforeach--}}

        {{--</div>--}}
    {{--</div>--}}






    {{--<div class="row">--}}
        {{--<div id="comment-form" class="col-md-8 col-md-offset-2 form-spacing-top">--}}

            {{--{{Form::open(['route'=>['comments.store',$post->id], 'method'=>'POST'])}}--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-6">--}}
                    {{--{{Form::label('name','Name:')}}--}}
                    {{--{{Form::text('name',null,['class'=>'form-control'])}}--}}
                {{--</div>--}}

                {{--<div class="col-md-6">--}}
                    {{--{{Form::label('email','Email:')}}--}}
                    {{--{{Form::text('email',null,['class'=>'form-control'])}}--}}
                {{--</div>--}}

                {{--<div class="col-md-12">--}}
                    {{--{{Form::label('comment','Comment:')}}--}}
                    {{--{{Form::textarea('comment',null,['class'=>'form-control','rows'=>'5'])}}--}}

                    {{--{{Form::submit('Add Comment',['class'=>'btn btn-warning btn-block btn-orange form-spacing-top'])}}--}}

                {{--</div>--}}

            {{--</div>--}}
            {{--{{Form::close()}}--}}

        {{--</div>--}}
    {{--</div>--}}

@endsection