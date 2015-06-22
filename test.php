<?php
// 画像ファイルのpath
$filePath = "img/koma.png";

// 画像の読み込み
$templateImg = new Imagick( $filePath );

// 文字列を書き込んでくれるクラス
$draw = new ImagickDraw();

// フォントファイルのpath
$fontPath = "./font/APJapanesefont.ttf";

// フォントの指定
$draw->setFont( $fontPath );

// 表示する文字列
$string = "あいうえお";

// フォントサイズの指定
$draw->setFontSize( 24 );

// 文字列の幅を取得
$metrics = $templateImg->queryFontMetrics( $draw, $string );

//座標を指定して描画
$draw->annotation( 0, $metrics['ascender'], $string );

// 画像へ文字列を合成！
$templateImg->drawImage( $draw );
// ファイルとして出力
$templateImg->writeImage("./test.png");
// お掃除
$templateImg->destroy();
?>
<html>
<body>
a
<img src="img/koma.png">
</body>
</html>