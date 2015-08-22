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
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="./admin">管理登入</a></li>
                </ul>
            </div>
        </nav>

        @yield('contain')

    </div>
    <nav class="navbar navbar-default  navbar-fixed-bottom">
        <div class="container">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="http://dacsc.club" class="navbar-text">Auto-Distribute System All rights reserved Daan Computer Research Club</a></li>
            </ul>
        </div>
    </nav>
</body>

</html>
