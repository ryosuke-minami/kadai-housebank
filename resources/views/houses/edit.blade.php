@extends('layouts.app')
@section('content')
    <h1>id:{{$house->id}}の空き家の編集ページ</h1>
    <div class="row">
        <div class="col-6">
            {!! Form::model($house,['route'=>['houses.update',$house->id],'method'=>'put']) !!}
            @include('commons.form')
            {!! Form::close() !!}
        </div>
    </div>
@endsection