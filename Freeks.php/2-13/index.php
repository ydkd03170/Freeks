<h1>(1)5.2を切り上げよう</h1>
<p>
    $x = 5.2;<br>
    echo ceil($x);<br>
</p>
<?php
    // index.php
    $x = 5.2;
    echo ceil($x);
?>
<br>
<br>
<h1>(2)5.2を切り捨てよう</h1>
<p>
    $x = 5.2;<br>
    echo floor($x);<br>
</p>
<?php
$x = 5.2;
echo floor($x);
?>
<br>
<br>
<h1>(3)5.2を四捨五入しよう</h1>
<p>
    $x = 5.2;<br>
    echo round($x);<br>
</p>
<?php
// index.php
$x = 5.2;
echo round($x);
?>
<br>
<br>
<h1>(4)半径２の円の面積を求めよう</h1>
<p>
    echo pi();<br>
    function circleArea($r) {<br>
        $circle_area = $r * $r * pi();<br>
        echo $circle_area; <br>
    } <br>
    // 半径が2の円の面積の計算
    circleArea(2); <br>
</p>
    <?php
    echo pi();
    function circleArea($r) {
        $circle_area = $r * $r * pi();
        echo $circle_area; 
    }
    // 半径が2の円の面積の計算
    circleArea(2);
    ?>
<br>
<br>
<h1>(5)1から100までの中でランダムに数字を出力しよう</h1>
<p>
echo mt_rand(1, 100);
</p>
<?php
echo mt_rand(1, 100);
?>
<br>
<br>
<h1>(6)文字列の数を数えよう</h1>
<p>
    $str = "hogehoge";<br>
    echo strlen($str);<br>
</p>
<?php
 $str = "hogehoge";
 echo strlen($str);
?>
<br>
<br>
<h1>(7)指定された文字が左から何番目か調べよう</h1>
<p>
    $str = "yoneyama";
    echo strpos($str, "a");
</p>
<?php
$str = "yoneyama";
echo strpos($str, "a");
?>
<br>
<br>
<h1>(8)maを抜き取ろう</h1>
<p>
    $str = "yoneyama";
    echo substr($str, -2, 2);
</p>
<?php
$str = "yoneyama";
echo substr($str, -2, 2);
?>
<br>
<br>
<h1>(9)neyaをNEYAに置き換えよう</h1>
<p>
    $str = "yoneyama";
    echo str_replace("neya", "NEYA", $str);
</p>
<?php
 $str = "yoneyama";
 echo str_replace("neya", "NEYA", $str);
?>
<br>
<br>
<h1>(10)文字列を数えよう</h1>
<p>
    $str = "あいうえお";
    echo strlen($str);
</p>
<?php
$str = "あいうえお";
echo mb_strlen($str);
?>
<br>
<br>
<h1>(11)フォーマット化した文字列を作成しよう</h1>
<p>
$limit_hour = 20;<br>
    $limit_minute = 10;<br>
    printf("残り%02d時間%02d分", $limit_hour, $limit_minute);<br>
    $limit_hour = 4;<br>
    $limit_minute = 4;<br>
    printf("残り%02d時間%02d分", $limit_hour, $limit_minute);<br>
</p>
<?php
$limit_hour = 20;
$limit_minute = 10;
printf("残り%02d時間%02d分", $limit_hour, $limit_minute);

$limit_hour = 4;
$limit_minute = 4;
printf("残り%02d時間%02d分", $limit_hour, $limit_minute);
?>
<br>
<br>
<h1>(12)フォーマット化した文字列を作成しよう</h1>
<p>
$limit_hour = 4;<br>
    $limit_minute = 4;<br>
    printf("残り%02d時間%02d分", $limit_hour, $limit_minute);<br>
    // sprintfだけでは出力までできない <br>
    $limit_time = sprintf("残り%02d時間%02d分", $limit_hour, $limit_minute);<br>
    echo $limit_time;<br>
</p>
<?php
$limit_hour = 4;
$limit_minute = 4;
printf("残り%02d時間%02d分", $limit_hour, $limit_minute);

// sprintfだけでは出力までできない
$limit_time = sprintf("残り%02d時間%02d分", $limit_hour, $limit_minute);
echo $limit_time;
?>