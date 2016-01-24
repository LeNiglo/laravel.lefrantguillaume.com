<!DOCTYPE html>
<html>
<head>
    <title>Lefrant Guillaume</title>
    <meta charset="utf-8"/>

    <link rel="stylesheet" href="{{ asset('assets/stylesheets/frontend.css') }}"/>
    <link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'/>

    <style type="text/css">

        html,
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
        }

        body {
            background-color: #eee;
            background-image: url('{{asset('assets/images/background.jpg')}}');
            background-position: center;
            background-size: cover;
            background-attachment: fixed;
            background-repeat: no-repeat;
            color: #fafafa;
            display: table;
            font-weight: 100;
            font-family: 'Lato', 'Helvetica Neue', Verdana, Arial, sans-serif;
        }

        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }

        .content {
            text-align: center;
            display: inline-block;
        }

        .title {
            font-size: 96px;
            margin-bottom: 10px;
            font-family: Helvetica;
        }

        .subtitle {
            font-size: 75px;
            font-family: Helvetica;
        }

        .spacer {
            margin: 120px;
        }

        .links ul {
            margin: 0;
            padding: 0;
            list-style-type: none;
        }

        .links ul > li {
            font-size: 22px;
            padding: 5px 15px;
            display: inline;
        }

        a,
        a:visited {
            color: white;
            text-decoration: none;
        }

        a:hover,
        a:active {
            color: #ddd;
            text-decoration: none;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="content">
        <div class="title">
            Guillaume Lefrant
        </div>
        <div class="subtitle">
            <small>Web Designer &amp; Developer</small>
        </div>
        <div class="spacer"></div>
        <div class="links">
            <ul>
                <li><a class="hvr-outline-in" href="{{ route('cv') }}">Curriculum</a></li>
                <li><a class="hvr-outline-in" href="{{ route('cv') }}">Contact</a></li>
            </ul>
        </div>
        <div style="margin: 20px auto; width: 400px;">
            @include('partials.social-bar')
        </div>
    </div>
</div>
<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
        a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-67560863-1', 'auto');
    ga('send', 'pageview');
</script>
</body>
</html>
