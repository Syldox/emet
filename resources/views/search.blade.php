@extends('layouts.main')
@section('title', '| Search')
@section('content')


    <h1 class="text-center">Your Search Query was


        <br>

        <small>
            {{$query}}
        </small>

    </h1>

<div class="row">
    <div class="col-md-4 col-md-offset-4">

        @if($details->count())

            @foreach($details as $post )

                <div class=".panel panel-default">

                    <div class="panel-body">

                        <img src="{{$post->photo->file}}" alt="" class="img-responsive pull-left">
                        <h4 class="pull-left" style="margin-left: 20px">{{$post->title}}</h4>


                    </div>


                </div>

            @endforeach

        @else

            <h2 class="text-center">

                No Search Results!

            </h2>

        @endif

    </div>

</div>








@endsection