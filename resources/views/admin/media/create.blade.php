@extends('layouts.admin')

@section('styles')
    <link rel="stylesheet" href="../../css/dropzone.min.css">
@stop


@section('content')

    <h1>Upload Media</h1>


    {!! Form::open(['method'=>'POST','action'=>'AdminMediasController@store' ,'class'=>'dropzone',  'id'=>'my-awesome-dropzone']) !!}


    {!! Form::close() !!}


@endsection



@section('scripts')

    <script src="../../js/dropzone.min.js"></script>

@stop