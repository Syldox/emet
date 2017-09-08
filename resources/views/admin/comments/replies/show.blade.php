@extends('layouts.admin')
@section('content')

    <div class="well">
        @if(count($replies)>0)

            <h1>replies</h1>

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
                @foreach($replies as $reply)
                    <tr>
                        <td>{{$reply->id}}</td>
                        <td>{{$reply->author}}</td>
                        <td>{{$reply->email}}</td>
                        <td>{{$reply->body}}</td>
                        <td><a href="{{route('home.post',$reply->comment->post->id)}}"><span class="label label-info">View Post</span></a></td>

                        <td>

                            @if($reply->is_active == 1)

                                {!! Form::open(['method'=>'PATCH','action'=>['CommentrepliesController@update',$reply->id]]) !!}

                                <input type="hidden" name="is_active" value="0">

                                <div class="form-group">

                                    {!! Form::submit('Un-approve', ['class'=>'btn btn-info']) !!}

                                </div>

                                {!! Form::close() !!}

                            @else

                                {!! Form::open(['method'=>'PATCH','action'=>['CommentRepliesController@update',$reply->id]]) !!}
                                <input type="hidden" name="is_active" value="1">

                                <div class="form-group">

                                    {!! Form::submit('Aprove', ['class'=>'btn btn-success']) !!}

                                </div>

                                {!! Form::close() !!}

                            @endif

                        </td>



                        <td>
                            {!! Form::open(['method'=>'DELETE','action'=>['PostCommentsController@destroy',$reply->id]]) !!}

                            <div class="form-group">

                                {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}

                            </div>

                            {!! Form::close() !!}

                        </td>



                    </tr>
                </tbody>
                @endforeach
            </table>

        @else

            <h1 class="text-center"><span class="label label-warning" >No replies</span></h1>


        @endif

    </div>
@stop