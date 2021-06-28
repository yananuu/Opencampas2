<!DOCTYPE html>
<html>
    <head>
        <title>"教師メニュー"</title>
        <link rel="stylesheet" href="{{ asset('css/teachermenu.css') }}">
    </head>
    <body>
        <header>
            <div class="header">
                <img src="{{ asset('img/oic.jpg') }}" id="schoollogo" alt="ロゴ">
                <p>たかゆき</p>
                <a>ログアウト</a>
            </div>
        </header>
        <hr id="bar">

        <form method="get" action="cov">
            <div id="button">
                <input type="submit" class="button" id="yes" value="参加者情報" name="num">
                <input type="submit" class="button" id="no" value ="学科集約表" name="num">
            </div>
            </form>
   
    </body>
</html>