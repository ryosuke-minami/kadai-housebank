@extends('layouts.app')
@section('content')
    <h1 align="center">物件番号「{{$house->id}}」番の空き家の編集ページ</h1>
        <div class='offset-sm-3 col-sm-6'>
            {!! Form::model($house,['route'=>['houses.update',$house->id],'method'=>'put']) !!}
            @include('commons.form')
            {!! Form::close() !!}
        </div>
@endsection