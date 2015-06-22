<?php
  if(isset($_POST["b1"])) {
    for($i = 1; $i < 25; $i++) {
      $b[$i] = $_POST["b". $i];
      shuffle($b);
    }
  }
?>
<html>
  <head>
  	<meta charset="utf-8">
  	<link rel="stylesheet" type="text/css" href="css/cssrefresh.css">
    <link rel="stylesheet" type="text/css" href="css/styleb.css">
  </head>
  <body>
  <contents>
  <main>
  <?php if(empty($b)): ?>
  	<form action="index.php" method="POST">
  	  項目０１：<input type="text" name="b1"><br>
  	  項目０２：<input type="text" name="b2"><br>
  	  項目０３：<input type="text" name="b3"><br>
  	  項目０４：<input type="text" name="b4"><br>
  	  項目０５：<input type="text" name="b5"><br>
  	  項目０６：<input type="text" name="b6"><br>
  	  項目０７：<input type="text" name="b7"><br>
  	  項目０８：<input type="text" name="b8"><br>
  	  項目０９：<input type="text" name="b9"><br>
  	  項目１０：<input type="text" name="b10"><br>
  	  項目１１：<input type="text" name="b11"><br>
  	  項目１２：<input type="text" name="b12"><br>
  	  項目１３：<input type="text" name="b13"><br>
  	  項目１４：<input type="text" name="b14"><br>
      項目１５：<input type="text" name="b15"><br>
  	  項目１６：<input type="text" name="b16"><br>
  	  項目１７：<input type="text" name="b17"><br>
  	  項目１８：<input type="text" name="b18"><br>
  	  項目１９：<input type="text" name="b19"><br>
  	  項目２０：<input type="text" name="b20"><br>
  	  項目２１：<input type="text" name="b21"><br>
  	  項目２２：<input type="text" name="b22"><br>
  	  項目２３：<input type="text" name="b23"><br>
  	  項目２４：<input type="text" name="b24"><br>
  	  <input type="submit" value="送信">
  	</form>
  <?php else: ?>
    <table>
    <?php $k = 0; ?>
  	<?php for($i = 0; $i < 5; $i++): ?>
  	  <tr>
  	    <?php for($j = 0; $j < 5; $j++): ?>
  	    <?php if($i === 2 && $j === 2): ?>
  	    <td>free</td>
  	    <?php else: ?>
  	    <?php $l = $k + $j; ?>
  	    <td><?php echo htmlspecialchars($b[$l],ENT_QUOTES); ?></td>
  	    <?php endif; ?>
  	    <?php endfor; ?>
  	    <?php $k += 5; ?>
  	  </tr>
    <?php endfor; ?>
  	</table>
  	<a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
    <br>
    <a href="index.php">戻る</a>
  <?php endif; ?>
  </main>
  </contents>
  </body>
</html>