<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>
<body>
  <p>
    <?php
    // 関数 配列をソートし1行ずつ表示
    function sort_2way($array, $order) {
      if ($order === '昇順'){
        // 昇順にソート
        echo '昇順にソートします。<br>';
        sort($array);
      } else {
        // 降順にソート
        echo '降順にソートします。<br>';
        rsort($array);
      }

      // 1行ずつ表示
      foreach ($array as $element) {
        echo $element . '<br>';
      }
    }

    // ソートする配列を宣言
    $num = [15, 4, 18, 23, 10];

    // ソート関数の呼び出し
    // 昇順
    sort_2way($num, '昇順');
    echo '<br>';

    // 降順
    sort_2way($num, '降順');
    ?>
  </p>
<body>
</html>