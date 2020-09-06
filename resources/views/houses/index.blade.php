@extends('layouts.app')
@section('content')
    {{--空き家一覧--}}
    @if(count($houses)>=0)
    <h1 align="center">空き家バンク</h1>
    <h2 align="center">物件一覧</h2>
        <table class="table table-striped table-sm">
            <thread>
                <tr>
                    <th class="text-center">物件番号</th>
                    <th class="text-center">価格</th>
                    <th class="text-center">最終登録日</th>
                </tr>
            </thread>
            <tbody>
                @foreach($houses as $house)
                <tr>
                    {{--空き家詳細ページへのリンク--}}
                    <td class="text-center">{!! link_to_route('houses.show',$house->id,['house'=>$house->id]) !!}</td>
                    <td class="text-center">￥{{number_format($house->price)}}円</td>
                    <td class="text-center">{{$house->updated_at}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{-- ページネーションのリンク --}}
        <span align="center">{{ $houses->links() }}</span>
    @endif
@endsection