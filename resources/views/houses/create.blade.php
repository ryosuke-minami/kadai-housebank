@extends('layouts.app')
@section('content')
    <h1>登録フォーム</h1>
    <div class="row">
        <div class="col-6">
            {!! Form::model($house,['route'=>'houses.store']) !!}
            @include('commons.form')
            {!! Form::close() !!}
        </div>
    </div>
@endsection