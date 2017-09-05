@extends('layouts.admin')
@section('content')

    <div class="well">
        @if(count($comments)>0)

            <h1>Comments</h1>

            <table class="table">
                <thead>
                <tr>
                    <th>id</th>
                    <th>Author</th>
                    <th>Email</th>
                    <th>Body</th>
                    <th>Posts</th>
                </tr>
                </thead>
                <tbody>

                @foreach($comments as $comment)
                    <tr>
                        <td>{{$comment->id}}</td>
                        <td>{{$comment->author}}</td>
                        <td>{{$comment->email}}</td>
                        <td>{{$comment->body}}</td>
                        <td><a href="{{route('home.post',$comment->post->id)}}"><span class="label label-info">View Post</span></a></td>

                        <td>

                            @if($comment->is_active == 1)

                                {!! Form::open(['method'=>'PATCH','action'=>['PostCommentsController@update',$comment->id]]) !!}

                                <input type="hidden" name="is_active" value="0">

                                <div class="form-group">

                                    {!! Form::submit('Un-approve', ['class'=>'btn btn-info']) !!}

                                </div>

                                {!! Form::close() !!}

                            @else

                                {!! Form::open(['method'=>'PATCH','action'=>['PostCommentsController@update',$comment->id]]) !!}
                                <input type="hidden" name="is_active" value="1">

                                <div class="form-group">

                                    {!! Form::submit('Aprove', ['class'=>'btn btn-success']) !!}

                                </div>

                                {!! Form::close() !!}

                            @endif

                        </td>



                        <td>
                            {!! Form::open(['method'=>'DELETE','action'=>['PostCommentsController@destroy',$comment->id]]) !!}

                            <div class="form-group">

                                {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}

                            </div>

                            {!! Form::close() !!}

                        </td>



                    </tr>
                @endforeach
                </tbody>
            </table>

        @else

            <h1 class="text-center"><span class="label label-warning" >No Comments</span></h1>


        @endif

    </div>
@stop