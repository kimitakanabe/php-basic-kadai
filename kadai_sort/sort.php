<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>
<body>
  <p>
    <?php 
    // ソートする配列を宣言
    $array = [15, 4, 18, 23, 10 ];

    // 独自のソート関数を定義する
    function sort_2way($array, $order){
      if ($order) {
        sort($array);
        echo '昇順にソートします。<br>';
        foreach ($array as $value) {
          echo $value . '<br>';
      }
      }else {
        rsort($array);
        echo '降順にソートします。 <br>';
        foreach ($array as $value) {
          echo $value . '<br>';
        }
      }
    }

    sort_2way($array, true);
    sort_2way($array, false);
      
    // 昇順にするソート関数　sort()
    // 降順にするソート関数　rsort()

    ?>
  </p>
</body>
</html>