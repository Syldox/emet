@extends('layouts.main')
@section('title', '| Search')
@section('content')
<div class="row">
    <div class="col-md-4 col-md-offset-4">

        @if($details->count())

            <div class="well">

                <h1 class="text-center"><i class="fa fa-search" aria-hidden="true"> Search Results!</i>


                    <br>

                    <small>
                        <b>For :</b> {{$query}}
                    </small>

                </h1>

            </div>

            @foreach($details as $post )

                <div class="panel panel-default">

                    <div class="panel-body">

                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <!-- Preview Image -->
                                <img class="form-spacing-top img-responsive"  height="200" width="650" alt=""  src="{{$post->photo ? $post->photo->file : $post->photoPlaceHolder() }}" alt="" >
                                {{--<img src="{{asset('images/' . $post->image)}}" height="200" width="500" alt="" class="form-spacing-top">--}}
                                <h2>{{$post->title}}</h2>
                                <h5>Published: {{date('M j, Y', strtotime($post->created_at))}}</h5>
                                <p>{{ substr(strip_tags($post->body),0,250)}}{{strlen(strip_tags($post->body)) > 250 ? '...' : ""}}</p>
                                <a href="{{url('blog/'.$post->slug)}}" class="btn btn-warning btn-orange">Read More</a>

                            </div>
                        </div>

                    </div>

                </div>

                <hr>

            @endforeach

        @else

            <div class="well">

                <h1 class="text-center"><i class="fa fa-search" aria-hidden="true"> No Results!</i>


                    <br>

                    <small>
                        <b>For :</b> {{$query}}
                    </small>

                </h1>

            </div>

        @endif

    </div>

</div>

@endsection