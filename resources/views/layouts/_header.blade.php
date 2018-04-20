<header class="navbar" style="position:relative;">
    <img src="/static/index/banner.png" alt="banner">
    @if(Auth::check())
        <form action="{{ route('logout') }}" method="post" style="position: absolute;top: 24px;right: 10%;">
            {{ csrf_field() }}
            <button type="submit" style="width:8rem;font-size:3rem;color:#fff;position: absolute;top: 24px;right: 10%;border-bottom:3px solid #fff;background: rgba(255, 0, 0, 0);border: 0;border-bottom:3px solid #fff;">退出</button>
        </form>
    @else
        <a href="{{ route('login') }}" style="font-size:3rem;color:#fff;position: absolute;top: 24px;right: 10%;border-bottom:3px solid #fff;">登陆</a>
    @endif
    @can('admin')
        <a href="{{ route('admin') }}" style="font-size:3rem;color:#fff;position: absolute;top: 48px;left: 10%;border-bottom:3px solid #fff;">后台管理</a>
    @endcan
</header>