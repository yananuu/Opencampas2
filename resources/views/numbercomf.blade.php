<!DOCTYPE html>
<html>
    <head>
        <title>参加者受付</title>
        <link rel="stylesheet" href="{{ asset('css/numbercomf.css') }}">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
    </head>
    <body>
        <header>
            <div class="header">
            <img src="{{ asset('img/oic.jpg') }}" id="schoollogo" alt="ロゴ">
                <a id="back">戻る</a>
            </div>
        </header>
        <hr id="bar">
        <div class="text">
            <label id="text">オープンキャンパスへようこそ</label><br>
            <label id="notext">参加者Noをお持ちですか？</label>
        </div>
        <br><br>
        <form method="get" action="cov">
        <div id="button">
            <input type="submit" class="button" id="yes" value="持っている" name="num">
            <input type="submit" class="button" id="no" value ="持っていない" name="num">
        </div>
        </form>
    </body>
</html>