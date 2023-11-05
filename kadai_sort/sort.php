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
          $nums = [15, 4, 18, 23, 10 ];
          $array = $nums;
              // $array：ソート対象の配列
              // $order：ソート方向（TRUE：昇順／FALSE：降順）
          function sort_2way(&$array, $order){
            if($order === true){
              echo "昇順にソートします。<br>";
              sort($array);
              foreach ($array as $num) {
                echo $num.'<br>';
              }
            }
            else{
              echo "降順にソートします。<br>";
              rsort($array);
              foreach ($array as $num) {
                echo $num.'<br>';
              }
            }
          }
          sort_2way($array, true);
          sort_2way($array, false);
        ?>
    </p>
</body>

</html>