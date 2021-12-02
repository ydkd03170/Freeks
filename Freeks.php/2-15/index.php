<?php
echo time();
// index.php
var_dump(time());
// 現在時刻を取得
echo date("Y-m-d H:i:s", time());
// 例：2017/4/12 16:00:00のタイムスタンプを変換
echo date("Y-m-d H:i:s", 1491980400);
echo date("Y年m月d日 H時i分s秒", time());
// 先週の日曜日
echo strtotime("last Sunday");
// 2日後
echo strtotime("+2 day");
?>