<html>

<head>
    <title>大安電研github管理伺服器系統</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
    <!--<link rel="stylesheet" href="/coldcamp/css/bootstrap-theme.min.css" />-->
    <script src="./js/jquery-2.1.3.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container" id="contain">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">大安電研github管理伺服器系統</a>
                </div>
                @if(!Auth::check())
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="./admin">管理登入</a></li>
                    </ul>
                @else
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="./logout">登出</a></li>
                    </ul>
                @endif
            </div>
        </nav>
        <br />
        <br />
        <br />
        @yield('contain')
        <br />
        <br />
        <br />
    </div>
    <nav class="navbar navbar-default  navbar-fixed-bottom">
        <div class="container">
            <ul class="nav navbar-nav navbar-right">
                <a href="http://dacsc.club" class="navbar-text">By 大安高工電腦研究社 16th網管陳典佑</a>
            </ul>
        </div>
    </nav>
</body>

</html>
