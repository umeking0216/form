<html>

<head>
    <meta charset="utf-8">
    <title>課題1210</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<section id="contact" class="contact">
        <div class="form_wrapper">
            <h2 class="course__title text-center">入力フォーム</h2>
            <p class="text-center">お客さまの基本情報入力を入力ください</p>

        <form action="write.php" method="POST">
            <table class="form-table">
                <tbody>
                  <tr>
                    <th>名前</th>
                    <td><input type="text" name="name" size="60" value="" placeholder="北海太郎">
                    </td>
                  </tr>
                  <tr>
                    <th>年齢</th>
                    <td><input type="text" name="age" size="60" value="">
                    </td>
                  </tr>
                  <tr>
                    <th>性別</th>
                    <td><select name="sex">
                      <option value="">  </option>
                      <option value="男">男</option>
                      <option value="女">女</option>
                      <option value="その他">その他</option>
                    </select>
                    </td>
                  </tr>
                  <tr>
                    <th>メールアドレス</th>
                    <td><input type="text" name="email" id="email" size="60" value="" placeholder="sample@sample.jp">
                    </td>
                  </tr>
                  <tr>
                    <th>本サービスを<br>知ったきっかけ</dt></th>
                    <td> 
                      <select name="kike">
                      <option value="">  </option>
                      <option value="google選択">google選択</option>
                      <option value="SNS">SNS</option>
                      <option value="紹介">紹介</option>
                      <option value="たまたま通りかかった">たまたま通りかかった</option>
                      <option value="その他">その他</option>
                    </select>
                    </td>
                  </tr>
                  <!-- <tr>
                    <th>本サービス使用理由</th>
                    <td>
                      <div class="label-item">
                        <label for="kigyo"><input type="checkbox" name="kind" id="kigyo" value="">起業をしたい</label>
                      </div>
                      <br>
                      <div class="label-item">
                        <label for="tennsyoku"><input type="checkbox" name="kind" id="tennsyolku" value="チーズ系企業に就職・転職したい">チーズ系企業に就職・転職したい</label>
                      </div>
                      <br>
                      <div class="label-item">
                        <label for="sigoto"><input type="checkbox" name="kind" id="sigoto" value="チーズと関わる仕事をしており、仕事に生かしたい">チーズと関わる仕事をしており、仕事に生かしたい</label>
                      </div>
                      <br>
                      <div class="label-item">
                        <label for="kyoyo"><input type="checkbox" name="kind" id="kyoyo" value="チーズの教養を身につけたい">チーズの教養を身につけたい</label>
                      </div>
                    </td>
                  </tr>-->
                  <tr> 
                    <th>その他問い合わせ</th>
                    <td><textarea name="content" cols="30" rows="10" placeholder="お問い合わせ内容を入力してください。"></textarea>
                    </td>
                  </tr>
                </tbody>
              </table>
        
            
        <input type="submit" class="btn" value="送信">
      </form>  
      </div>  
        
    </section>


    <!-- <form action="write.php" method="post">
        お名前: <input type="text" name="name">
        住所: <input type="text" name="birthPlace">

        <input type="submit" value="送信">
    </form> -->
</body>

</html>
