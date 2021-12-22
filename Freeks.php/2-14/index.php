<br>
<br>
<h1>(1)要素の数を数えよう</h1>
<p>
$members = ["tanaka", "sasaki", "kimura", "yoshida", "uchida"];<br>
echo count($members);
</p>
<?php
$members = ["tanaka", "sasaki", "kimura", "yoshida", "uchida"];
echo count($members);
?>
<br>
<br>
<h1>(2)要素を並べ替えよう</h1>
<p>
$members = ["tanaka", "sasaki", "kimura", "yoshida", "uchida"];<br>
sort($members);<br>
var_dump($members);
</p>
<?php
$members = ["tanaka", "sasaki", "kimura", "yoshida", "uchida"];
sort($members);
var_dump($members);
?>
<br>
<br>
<h1>(3)配列に中にある要素が存在しているか調べよう</h1>
<p>
$members = ["tanaka", "sasaki", "kimura", "yoshida", "uchida"];<br>
var_dump(in_array("tanaka", $members));
</p>
<?php
$members = ["tanaka", "sasaki", "kimura", "yoshida", "uchida"];
var_dump(in_array("tanaka", $members));
?>
<br>
<br>
<h1>(4)配列を結合して文字列に変換しよう</h1>
<p>
$members = ["tanaka", "sasaki", "kimura", "yoshida", "uchida"];<br>
$atstr = implode("@", $members);<br>
var_dump($atstr);
</p>
<?php
$members = ["tanaka", "sasaki", "kimura", "yoshida", "uchida"];
$atstr = implode("@", $members);
var_dump($atstr);
$atstr = implode($members);
?>
<br>
<br>
<h1>(5)文字列を指定の区切りで配列にするしよう</h1>
<p>
$members = ["tanaka", "sasaki", "kimura", "yoshida", "uchida"];　<br>
$atstr = implode("@", $members);<br>
var_dump($atstr);<br>
$re_members = explode("@", $atstr);<br>
var_dump($re_members);
</p>
<?php
$members = ["tanaka", "sasaki", "kimura", "yoshida", "uchida"];
$atstr = implode("@", $members);
var_dump($atstr);

$re_members = explode("@", $atstr);
var_dump($re_members);
?>