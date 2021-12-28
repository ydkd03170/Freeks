<?php
$x = 0;
$i = 0;
while ($x <= 40){
  $i++;
  $s = rand(1,6);
  echo $i ."回目=". $s."\n";
  $x += $s;
}
echo "合計".$i."回でゴールしました";
?>
<br>
<?php
date_default_timezone_set('Asia/Tokyo');
$time = intval(date('H'));
if (4 <= $time && $time <= 12) { // 4時～12時の時間帯のとき?>
<p>おはようございます。</p>
<?php } elseif (12 <= $time && $time <= 20){ // 12時〜20時の時間帯のとき ?>
<p>こんにちわ。</p>
<?php } else { // それ以外の時間帯のとき ?>
<p>こんばんわ。</p>
<?php } ?>