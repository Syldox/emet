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
                <th>Post</th>
                <th>View</th>
                <th>Created</th>
                <th>Updated</th>
            </tr>
            </thead>
            <tbody>

            @if($posts)
                @foreach($posts as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td><img height="50px" src="{{$post->photo ? $post->photo->file : '../images/Postholder.png'}}" alt=""></td>
                        <td><a href="{{route('posts.edit', $post->id)}}">{{$post->user->name}}</a></td>
                        <td>{{$post->category ? $post->category->name : 'Uncategorized'}}</td>
                        <td>{{$post->title}}</td>
                        <td>{{str_limit($post->body,30)}}</td>
                        <td><a href="{{route('home.post', $post->id)}}"><span class=" label label-info">View Post</span></a></td>
                        <td><a href="{{route('comments.show',$post->id)}}"><span class=" label label-info">View Comment</span></a></td>
                        <td>{{$post->created_at->diffForHumans()}}</td>
                        <td>{{$post->updated_at->diffForHumans()}}</td>
                    </tr>
                @endforeach
            @endif

            </tbody>
        </table>

    </div>



@endsection