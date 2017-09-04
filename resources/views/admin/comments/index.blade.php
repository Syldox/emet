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
                <th>Post</th>
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
                </tr>
            @endforeach
            </tbody>
        </table>

    @else

        <h1 class="text-center"><span class="label label-warning" >No Comments</span></h1>


    @endif

</div>
    @stop