@extends('layouts.app')
@section('content')
    <h1 align="center">登録フォーム</h1>
        <div class='offset-sm-3 col-sm-6'>
            {!! Form::model($house,['route'=>'houses.store']) !!}
            @include('commons.form')
            {!! Form::close() !!}
        </div>
@endsection