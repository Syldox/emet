@extends('layouts.admin')



@section('content')


    <h1>Media</h1>

   <div class="well">
       @if($photos)
           <table class="table">
               <thead>
               <tr>
                   <th>Id</th>
                   <th>Media</th>
                   {{--<th>Name</th>--}}
                   <th>Created date</th>
               </tr>
               </thead>
               <tbody>
               @foreach($photos as $photo)
                   <tr>
                       <td>{{$photo->id}}</td>
                       <td><img height="50" src="{{$photo->file}}" alt=""></td>
                       {{--<td>{{$photo->name}}</td>--}}
                       <td>{{$photo->created_at ? $photo->created_at : 'No date'}}</td>
                       <td>

                           {!! Form::open(['method'=>'DELETE','action'=>['AdminMediasController@destroy',$photo->id]]) !!}

                                   <div class="form-group">

                                       {!! Form::submit('Delete Post', ['class'=>'btn btn-danger']) !!}

                                   </div>


                           {!! Form::close() !!}

                       </td>
                   </tr>
               </tbody>
               @endforeach
           </table>

       @endif
   </div>


@endsection