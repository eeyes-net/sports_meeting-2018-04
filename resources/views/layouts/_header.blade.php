<header class="navbar" style="background:#0066cc;height:96px;margin-top:12px;position:relative;">
    <p  style="text-align:center;color:#fff;line-height:96px;font-size:6rem;;"> <a href="{{ route('/') }}" style="color:#fff;text-decoration:none;">校运会 </a>  </p>
    @if(Auth::check())
        <form action="{{ route('logout') }}" method="post" style="position: absolute;top: 24px;right: 10%;">
            {{ csrf_field() }}
            <button type="submit" class="btn btn-primary">退出</button>
        </form>
    @else
        <a href="{{ route('login') }}" style="font-size:3rem;color:#fff;position: absolute;top: 24px;right: 10%;">登陆</a>
    @endif
    @can('admin')
        <a href="{{ route('admin') }}" style="font-size:3rem;color:#fff;position: absolute;top: 24px;left: 10%;">后台管理</a>
    @endcan
</header>