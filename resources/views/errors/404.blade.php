<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>Ooooooooooops</title>
    <style>
        @font-face {
            font-family: 'exo_bold';
            src: url('fonts/exo_bold.ttf');
        }
        @font-face {
            font-family: 'exo_light';
            src: url('fonts/exo_light.otf');
        }
        body ,html {
            background: #000000;
        }
        .info {
            position: absolute;
            left: 100px;
            top: 700px;
        }
        .title {
            color: #ffffff;
            font-family: exo_bold;
            font-size: 40px;
        }
        .content {
            margin-top: 1px;
            color: #ffffff;
            font-family: exo_light;
            font-size: 25px;
        }
        .link {
            font-size: 35px;
            position: absolute;
            top: 800px;
            left: 1500px;
            color: #ffffff;
            border: 2px solid;
            border-radius: 5px;
            font-family: exo_bold;
        }
        .img {
            position: absolute;
            top: 200px;
            right: 400px;
        }
    </style>
</head>
<body>
<div class="img">
    <img src="banner.jpg">
</div>
<div class="info">
    <p class="title">404 Error</p>
    <p class="content">Don't panic, and make sure</p>
    <p class="content">to watch your oxygen levels.</p>
</div>
<a href="{{ route('/') }}">
    <div class="link">
        Return to safety
    </div>
</a>
</body>
</html>