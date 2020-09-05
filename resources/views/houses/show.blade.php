@extends('layouts.app')
@section('content')

    <h1 align="center">物件番号「{{$house->id}}」番の空き家の詳細ページ</h1>
    <h2 align="center">価格：￥{{$house->price}}円</h2>
    <br>
    <table class="table table-bordered table-striped table-sm">
        <tr>
            <th class="text-center">物件番号</th>
            <td class="text-center">{{$house->id}}</td>
        </tr>
        <tr>
            <th class="text-center">住所</th>
            <td class="text-center">{{$house->address}}</td>
        </tr>
        <tr>
            <th class="text-center">郵便番号</th>
            <td class="text-center">{{$house->postal_code}}</td>
        </tr>
        <tr>
            <th class="text-center">築年数</th>
            <td class="text-center">{{$house->age}}年</td>
        </tr>
        <tr>
            <th class="text-center">価格</th>
            <td class="text-center">￥{{$house->price}}円</td>
        </tr>
        <tr>
            <th class="text-center">写真URL</th>
            <td class="text-center">{{$house->picture}}</td>
        </tr>
        <tr>
            <th class="text-center">概要</th>
            <td class="text-center">{!! nl2br(e($house->overview)) !!}</td>
        </tr>
        <tr>
            <th class="text-center">売却者名</th>
            <td class="text-center">{{$house->contact_name}}</td>
        </tr>
        <tr>
            <th class="text-center"><i class="fas fa-phone"></i> 連絡先</th>
            <td class="text-center">{{$house->contact_tel}}</td>
        </tr>
    </table>
    
    @if(Auth::id()==$house->user_id)
        <div class="text-center">
            {{--空き家情報編集ページへのリンク--}}
            {!! link_to_route('houses.edit','この空き家情報を編集',['house'=>$house->id],['class'=>'btn btn-success col-2.5']) !!}
            {{--空き家削除フォーム--}}
            {!! Form::model($house,['route'=>['houses.destroy',$house->id],'method'=>'delete']) !!}
                {!! Form::submit('削除',['class'=>'btn btn-danger col-2']) !!}
            {!! Form::close() !!}
        </div>
    @endif
@endsection