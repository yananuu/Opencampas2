<!DOCTYPE html>
<html>
    <head>
        <title>"テンプレート"</title>
        <link rel="stylesheet" href="{{ asset('css/form1.css') }}">
    </head>
    <body>
        <header>
            <div class="header">
                <img src="{{ asset('img/oic.jpg') }}" id="schoollogo" alt="ロゴ">
                <a href="" id="backbutton">メニューに戻る</a>
            </div>
        </header>
        <hr id="bar">
        <p id=hyodai><strong>オープンキャンパス　参加受付</strong></p>

        <table align="center">
            <tr>
              <td>
                <strong>氏　　名 *</strong>
              </td>
              <td>
              <input type="text" name="苗字" maxlength="10" placeholder="姓">
              <input type="text" name="名前" maxlength="10" placeholder="名">
              </td>
                <td>
                    <strong>参加回数：</strong>
                    <select name="pull-down">
                        <option value="one">１回目</option>
                        <option value="two">２回目</option>
                        <option value="three">３回目</option>
                        <option value="four">４回目</option>
                        <option value="five">５回目</option>
                        <option value="six">６回目</option>
                        <option value="seven">７回目</option>
                        <option value="eight">８回目</option>
                        <option value="nine">９回目</option>
                        <option value="ten">１０回以上</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <strong>フリガナ *</strong>
                </td>
                <td>
                    <input type="text" name="ミョウジ" maxlength="10" placeholder="セイ">
                    <input type="text" name="ナマエ" maxlength="10" placeholder="メイ">
                </td>
                <td >
                    <strong>希望学科 *</strong>
                    <select name="pull-down">
                        <option value="iryo">医療福祉事務学科</option>
                        <option value="sinryo">診療情報管理士学科</option>
                        <option value="hoteru">ホテル・ブライダル学科</option>
                        <option value="keiei">経営アシスト学科</option>
                        <option value="komuin">公務員学科・公務員速修学科</option>
                        <option value="hoiku">保育学科</option>
                        <option value="jo-supe">情報スペシャリスト学科</option>
                        <option value="jo-sisu">情報システム学科</option>
                        <option value="game">ゲームクリエイター学科・ゲームプログラマー学科</option>
                        <option value="de-tama">データマーケター学科</option>
                        <option value="netto">ネット・動画クリエイター学科</option>
                        <option value="cg">CGデザイン学科</option>
                    </select>
                </td>
            </tr>

            <tr>
              <td >
                <strong>生年月日 *</strong>
              </td>
              <td>
                <input type="date" name="birthday" value="">
              </td>
              <td>
                <strong>希望コース *</strong>
                <label><input type="radio" name="course" value="ロングコース" checked>ロングコース</label>
                <label><input type="radio" name="course" value="ショートコース">ショートコース</label>
              </td>
            </tr>
            <tr>
              <td >
                <strong>出 身 校   *</strong>
              </td>
              <td>
                <input type="text" name="高校名" maxlength="20" placeholder="○○高等学校">
              </td>
            </tr>
            <tr>
                <td >
                    <strong>学科/学部 *</strong>
                  </td>
                  <td>
                    <input type="text" name="学科" maxlength="20" placeholder="○○学科">
                  </td>
            </tr>
            <tr>
                <td >
                    <strong>学年/職業 *</strong>
                  </td>
                  <td>
                    <select name="pull-down">
                        <option value="three">３年生</option>
                        <option value="two">２年生</option>
                        <option value="one">１年生</option>
                        <option value="job"></option>
                    </select>
                </td>
            </tr>
          </table>

          <a class="btn btn-custom01">
            <span class="btn-custom01-front">PUSH</span>
            <i class="fas fa-angle-right fa-position-right"></i>
          </a>
    </body>
</html>