
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>掲示板</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
    
<header>
<img src="4eachblog_logo.jpg">
    
    <div class ="headbox">
      <ul>
         <li>トップ</li>
         <li>プロフィール</li>
         <li>4eachについて</li>
         <li>登録フォーム</li>
         <li>問い合わせ</li>
         <li>その他</li>
         </ul>
    </div>
</header>
    
<body>

<div class="box1">
    <h1>プログラミングに役立つ掲示板</h1>
         <h2>人気のフォーム</h2>
        <form method="post" action="insert.php">
    <div>
        <label>ハンドルネーム</label>
        <br>
        <input type="text" class="text" size="35" name="handlename">
    </div>
        
    <div>
        <label>タイトル</label>
        <br>
        <input type="text" class="text" size="35" name="title">
    </div>
            
    <div>
        <label>コメント</label>
        <br>
        <textarea cols="35" rows="7" name="コメント"></textarea>
    </div>
            
    <div>
        <input type="submit" class="submit" value="送信する">
    </div> 
        </form>
</div>
        
        
<div class="box2">
    <h2>人気の記事</h2>
    <ul>
    <li>PHPオススメ本</li>
    <li>PHP MyAdminの使い方</li>
    <li>今人気のエディタ　Top5</li>
    <li>HTMLの基礎</li>
    </ul>
    <h2>オススメリンク</h2>
    <ul>
    <li>インターノウス株式会社</li>
    <li>XAMPPのダウンロード</li>
    <li>Eclioseのダウンロード</li>
    <li>Bracketsのダウンロード</li>
    </ul>
    <h2>カテゴリ</h2>
    <ul>
    <li>HTML</li>
    <li>PHP</li>
    <li>MySQL</li>
    <li>JavaScript</li>
    </ul>
</div>

<footer>
    <div class="footertext">
    copyright ©︎ internous|4earch blog the which provides A to Z about programming.
    </div>
</footer>
    
</body>
</html>