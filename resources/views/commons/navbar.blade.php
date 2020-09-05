<header class="mb-4">
    <nav class="navbar navbar-expand-sm navbar-dark bg-success">
        {{-- トップページへのリンク --}}
        <a class="navbar-brand" href="/">物件一覧へ</a>
        
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav">
                @if(Auth::check())
                    <li class="nav-item" style="color:white">ユーザ名：{{Auth::user()->name}}　</li>
                    <li class="nav-item">{!! link_to_route('houses.create','空き家登録',[],['text-decoration'=>'none','style'=>'color:white']) !!}　</li>
                    <li class="nav-item">{!! link_to_route('logout.get','ログアウト',[],['text-decoration'=>'none','style'=>'color:white']) !!}</li>
                @else
                    {{-- ユーザ登録ページへのリンク --}}
                    <li class="nav-item">{!! link_to_route('signup.get','ユーザ登録',[],['class'=>'nav-link']) !!}</li>
                    {{-- ログインページへのリンク --}}
                    <li class="nav-item">{!! link_to_route('login','ログイン',[],['class'=>'nav-link']) !!}</li>
                @endif
            </ul>
        </div>
    </nav>
</header>