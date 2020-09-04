@extends('layouts.app')

@section('content')
        <div class="text-center">
            <h1>空き家バンク</h1>
            {{-- ユーザ登録ページへのリンク --}}
            {!! link_to_route('signup.get','ユーザ登録',[],['class'=>'btn btn-primary btn-lg']) !!}
        </div>
@endsection