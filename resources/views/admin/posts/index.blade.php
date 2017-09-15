@extends('layouts.admin')



@section('content')


    <h1>Users Posts</h1>

    <div class="well">

        <table class="table">
            <thead>
            <tr>
                <th>Id</th>
                <th>Photo</th>
                <th>User</th>
                <th>Category</th>
                <th>title</th>
                <th>body</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Post</th>
                <th>View</th>
            </tr>
            </thead>
            <tbody>

            @if($posts)
                @foreach($posts as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td><img height="50px" src="{{$post->photo ? $post->photo->file : '../images/Postholder.png'}}" alt=""></td>
                        <td><a  class="btn btn-default btn-sm btn-border">{{$post->user->name}}</a></td>
                        {{--<td><a href="{{route('posts.edit', $post->id)}}" class="btn btn-default btn-sm btn-border">{{$post->user->name}}</a></td>--}}
                        <td>{{$post->category ? $post->category->name : 'Uncategorized'}}</td>
                        <td>{{$post->title}}</td>
                        <td>{{ substr(strip_tags($post->body),0,30)}}{{strlen(strip_tags($post->body)) > 250 ? '...' : ""}}</td>
                        <td>{{$post->created_at->diffForHumans()}}</td>
                        <td>{{$post->updated_at->diffForHumans()}}</td>
                        <td><a href="{{route('home.post', $post->slug)}}"><span class="btn btn-default btn-sm btn-border">View Post</span></a></td>
                        <td><a href="{{route('posts.edit',$post->id)}}"><span class="btn btn-default btn-sm btn-border">Edit Post</span></a></td>
                        {{--<td><a href="{{route('comments.show',$post->id)}}"><span class="btn btn-default btn-sm btn-border">View Comment</span></a></td>--}}
                    </tr>
                @endforeach
            @endif

            </tbody>
        </table>


        <div class="row">
            <div class="col-sm-6 col-sm-offset-5">
                {{$posts->render()}}
            </div>
        </div>

    </div>



@endsection