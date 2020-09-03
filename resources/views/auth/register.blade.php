@extends('layouts.app')
@section('content')
    <div class="text-center">
        <h1>ユーザ登録</h1>
    </div>
    
    <div class="row">
        <div class="col-sm-6 offset-sm-3">
            {!! Form::open(['route'=>'signup.post']) !!}
                <div class="form-group">
                    {!! Form::label('name','ユーザ名') !!}
                    {!! Form::text('name',old('name'),['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('email','メールアドレス') !!}
                    {!! Form::text('email',old('email'),['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('password','パスワード') !!}
                    {!! Form::text('password',['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('password_confirmation','パスワード（再入力）') !!}
                    {!! Form::text('password_confirmation',['class'=>'form-control']) !!}
                </div>
                
                {!! Form::submit('登録',['class'=>'btn btn-primary btn-brock']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection