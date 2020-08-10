<!Doctype html>
<html lang="ru" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>
<body>
<nav class="nav-desktop">
    <div class="nav-content">
        <a href="{{route('post.index')}}" class="logo">
            <img src="{{asset('/img/vaity.png')}}">VaITy
        </a>


        <div class="nav-icon">
            <div class="bar one"></div>
            <div class="bar two"></div>
        </div>

        <div id="nav-links" class="nav-links">
            <a href="{{route('post.index')}}">Главная</a>
            <a href="{{route('post.create')}}">Создать пост</a>
            <a href="#">FAQ</a>
            <a href="#">Login</a>
        </div>

        <svg class="search-icon" viewBox="0 0 3.7041668 11.641667" height="46" width="14">
            <g transform="matrix(0.97865947,0,0,0.97865947,-18.209185,-74.390797)">
                <path d="m 19.070369,80.532362 c -0.618144,0.618143 -0.619255,1.62581 -7.32e-4,2.244333 0.570867,0.570865 1.473777,0.613735 2.095614,0.131181 l 0.945308,0.945309 0.280633,-0.280633 -0.945308,-0.945309 c 0.482552,-0.621838 0.439684,-1.524746 -0.131182,-2.095613 -0.618523,-0.618523 -1.62619,-0.617413 -2.244333,7.32e-4 z m 0.280632,0.280632 c 0.466517,-0.466515 1.216631,-0.467898 1.683433,-0.0011 0.466802,0.466801 0.466882,1.218378 3.64e-4,1.684894 -0.466512,0.466513 -1.21809,0.466436 -1.684892,-3.67e-4 -0.466803,-0.466801 -0.465418,-1.216918 0.0011,-1.683432 z" fill="white" />
            </g>
        </svg>
    </div>
</nav>

<script>
    const navIcon = document.querySelector(".nav-icon");
    const nav = document.querySelector("nav");
    const navLink = document.querySelector("#nav-links");
    navIcon.onclick = function () {
        nav.classList.toggle('show');
        nav.classList.toggle('black-bg');
        nav.classList.remove('nav-desktop');
        navLink.classList.toggle('black-bg');
    }
</script>
<main>
    @if($errors->any())
        @foreach($errors->all() as $error)
            <div class="errors-post" onclick = "this.remove()">
                {{ $error }}
                <button> X Закрыть</button>
            </div>

        @endforeach
    @endif
    @yield('content')

</main>
</body>
</html>
