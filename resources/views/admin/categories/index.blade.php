@extends('layouts.admin')



@section('content')


    <h1> All Categories</h1>

<div class="col-sm-6">

   <div class="well">
       {!! Form::open(['method'=>'POST','action'=>'AdminCategoriesController@store']) !!}

       <div class="form-group">

           {!! Form::label('Name','Name:') !!}
           {!! Form::text('name', null, ['class'=>'form-control']) !!}

       </div>


       <div class="form-group">

           {!! Form::submit('Create Category', ['class'=>'btn btn-primary']) !!}

       </div>


       {!! Form::close() !!}
   </div>

</div>


    <div class="col-sm-6">
       <div class="well">
           @if($categories)

               <table class="table">
                   <thead>
                   <tr>
                       <th>id</th>
                       <th>Name</th>
                       <th>Created date</th>
                   </tr>
                   </thead>
                   <tbody>

                   @foreach($categories as $category)
                       <tr>
                           <td>{{$category->id}}</td>
                           <td><a href="{{route('categories.edit', $category->id)}}">{{$category->name}}</a></td>
                           <td>{{$category->created_at ? $category->created_at  ->diffForHumans() : 'No date'}}</td>
                       </tr>
                   @endforeach
                   </tbody>
               </table>

           @endif
       </div>

    </div>

@endsection