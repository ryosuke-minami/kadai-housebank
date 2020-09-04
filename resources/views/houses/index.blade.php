@extends('layouts.app')
@section('content')
    {{--空き家一覧--}}
    @if(count($houses)>=0)
    <h1>空き家バンク</h1>
    <h2>物件一覧</h2>
        <table class="table table-striped">
            <thread>
                <tr>
                    <th>id</th>
                    <th>価格</th>
                    <th>登録日</th>
                </tr>
            </thread>
            <tbody>
                @foreach($houses as $house)
                <tr>
                    {{--空き家詳細ページへのリンク--}}
                    <td>{!! link_to_route('houses.show',$house->id,['house'=>$house->id]) !!}</td>
                    <td>{{$house->price}}</td>
                    <td>{{$house->created_at}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{-- ページネーションのリンク --}}
        {{ $houses->links() }}
    @endif
@endsection