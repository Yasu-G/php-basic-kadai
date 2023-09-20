<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP_Kadai_005</title>
</head>

<body>
  <p>
    <?php
      // 配列の宣言
      $student_scores =[
        'score1'=> 80,
        'score2'=> 60,
        'score3'=> 55,
        'score4'=> 40,
        'score5'=> 100,
        'score6'=> 25,
        'score7'=> 80,
        'score8'=> 95,
        'score9'=> 30,
        'score10'=> 60,
      ];

      // 四則演算で合計を求める
      echo '<br>合計<br>';
      echo '四則演算で加算：';
      echo 80+60+55+40+100+25+80+95+30+60;
      echo '<br>';
      // array_sumで合計を求める
      $array_sum = array_sum($student_scores);
      echo "array_sumで合計： {$array_sum}<br>";

      // 四則演算で平均値を求める
      echo '<br>平均<br>';
      echo '四則演算で平均：';
      echo (80+60+55+40+100+25+80+95+30+60)/10;
      echo '<br>';
      // countで平均値を求める
      $average = $array_sum/count($student_scores);
      echo "countで平均: {$average}";

    ?>
  </p>
</body>
</html>