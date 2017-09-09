@extends('layouts.admin')



@section('content')


    <h1>Media</h1>

    <form action="/delete/media" method="post" class="form-inline">

        {{csrf_field()}}
        {{csrf_field('delete')}}

       <div class="form-group">
           <select name="checkBoxArray" id="" class="form-control">

               <option value="delete"  class="form-control">Delete</option>

           </select>
       </div>
       <div class="form-group">
            <input type="submit" class="btn-primary form-control">
       </div>



   <div class="well" style="margin-top: 10px">
       @if($photos)
           <table class="table">
               <thead>
               <tr>
                   <th><input type="checkbox" id="options"></th>
                   <th>Id</th>
                   <th>Media</th>
                   {{--<th>Name</th>--}}
                   <th>Created date</th>
               </tr>
               </thead>
               <tbody>
               @foreach($photos as $photo)
                   <tr>
                       <td><input class="checkBoxes" type="checkbox"  name="checkBoxArray[]" value="{{$photo->id}}"></td>
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

    </form>
@endsection

@section('scripts')
    <script>
        $(document).ready(function(){

           $('#options').click(function () {
                if(this.checked){

                    $('.checkBoxes').each(function () {

                        this.checked = true;

                    })
                }else{

                    $('.checkBoxes').each(function () {

                        this.checked = false;

                    })

                }

           });

        });
    </script>


@stop