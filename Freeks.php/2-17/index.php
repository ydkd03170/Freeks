<?php
define("GOAL", 40);
$total = 0;
for ($i = 1; $i <= GOAL; $i++) {
    $n = rand(1, 6);
    $total += $n;
    echo "{$i}回目={$n}\n";
    if ($total >= GOAL) {
        echo "合計{$i}回でゴールしました\n";
        break;
    }
}
?>
<br>
<?php
$time = intval(date('H'));
if (4 <= $time && $time <= 9) { // 4時～12時の時間帯のとき ?>
<p>おはようございます。</p>
<?php } elseif (10 <= $time && $time <= 15) { // 12時〜20時の時間帯のとき ?>
<p>こんにちわ。</p>
<?php } else { // それ以外の時間帯のとき ?>
<p>こんばんわ。</p>
<?php } ?>