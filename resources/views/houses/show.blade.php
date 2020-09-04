@extends('layouts.app')
@section('content')

    <h1>id={{$house->id}}の空き家の詳細ページ</h1>
    <h2>価格：￥{{$house->price}}円</h2>
    
    <table class="table table-bordered table-striped">
        <tr>
            <th>id</th>
            <td>{{$house->id}}</td>
        </tr>
        <tr>
            <th>住所</th>
            <td>{{$house->address}}</td>
        </tr>
        <tr>
            <th>郵便番号</th>
            <td>{{$house->postal_code}}</td>
        </tr>
        <tr>
            <th>築年数</th>
            <td>{{$house->age}}年</td>
        </tr>
        <tr>
            <th>価格</th>
            <td>￥{{$house->price}}円</td>
        </tr>
        <tr>
            <th>写真URL</th>
            <td>{{$house->picture}}</td>
        </tr>
        <tr>
            <th>概要</th>
            <td>{!! nl2br(e($house->overview)) !!}</td>
        </tr>
        <tr>
            <th>売却者名</th>
            <td>{{$house->contact_name}}</td>
        </tr>
        <tr>
            <th><i class="fas fa-phone"></i> 連絡先</th>
            <td>{{$house->contact_tel}}</td>
        </tr>
    </table>
    
    
    @if(Auth::id()==$house->user_id)
        {{--空き家情報編集ページへのリンク--}}
        {!! link_to_route('houses.edit','この空き家情報を編集',['house'=>$house->id],['class'=>'btn btn-light']) !!}
        {{--空き家削除フォーム--}}
        {!! Form::model($house,['route'=>['houses.destroy',$house->id],'method'=>'delete']) !!}
            {!! Form::submit('削除',['class'=>'btn btn-danger']) !!}
        {!! Form::close() !!}
    @endif
@endsection