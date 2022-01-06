<link rel="stylesheet" href="style.css">

<?php
//POST送信で送られてきた名前を受け取って変数を作成
$name = $_POST['name'];

//①画像を参考に問題文の選択肢の配列を作成してください。
$question1=[80,22,20,21];
$answer1 = $question1[0];
shuffle($question1); //配列の中身をシャッフル

$question2=['PHP','Python','JAVA','HTML'];
$answer2 = $question2[3];
shuffle($question2); //配列の中身をシャッフル

$question3=['join','select','insert','update'];
$answer3 = $question3[1];
shuffle($question3); //配列の中身をシャッフル
?>

<!--② ①で作成した、配列から正解の選択肢の変数を作成してください?-->
<p>お疲れ様です<?php echo $name;?>さん</p>

<!--フォームの作成 通信はPOST通信で-->
<form method="POST" action="answer.php">

   <h2>①ネットワークのポート番号は何番？</h2>
   <!--③ 問題のradioボタンを「foreach」を使って作成する-->
   <?php foreach($question1 as $value){ ?>
   <input type="radio" name="question1" value="<?php echo $value; ?>">
   <?php echo $value; ?>
   <?php } ?>
   <input type="hidden" name="answer1" value="<?php echo $answer1 ?>">

   <h2>②Webページを作成するための言語は？</h2>
   <!--③ 問題のradioボタンを「foreach」を使って作成する-->
   <?php foreach($question2 as $value){ ?>
   <input type="radio" name="question2" value="<?php echo $value; ?>" > 
   <?php echo $value; ?>
   <?php } ?>
   <input type="hidden" name="answer2" value="<?php echo $answer2 ?>">

   <h2>③MySQLで情報を取得するためのコマンドは？</h2>
   <!--③ 問題のradioボタンを「foreach」を使って作成する-->
   <?php foreach($question3 as $value){ ?>
   <input type="radio" name="question3" value="<?php echo $value; ?>"> 
   <?php echo $value; ?>
   <?php } ?>
   <input type="hidden" name="answer3" value="<?php echo $value; ?>">
   <br>
   <input type="hidden" name="name" value="<?php echo $name; ?>">
   <!--フォーム内に隠しで送る-->
   <input class="i" id="bottun" type="submit" value="回答する">
</form>
<!--問題の正解の変数と名前の変数を[answer.php]に送る-->