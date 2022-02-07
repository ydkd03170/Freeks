<link rel="stylesheet" href="style.css">

<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$name = $_POST['name'];

$question1 = $_POST['question1'];
$answer1 = $_POST['answer1'];

$question2 = $_POST['question2'];
$answer2 = $_POST['answer2'];

$question3 = $_POST['question3'];
$answer3 = $_POST['answer3'];

//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
function check($question,$answer){
	if($question == $answer){
		echo $result = "正解！";
	}else{
		echo $result = "残念･･･";
	}
}
?>

<p><?php echo $name;?>さんの結果は・・・？</p>

<p>①の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php check($question1,$answer1); ?>

<p>②の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php check($question2,$answer2); ?>

<p>③の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php check($question3,$answer3); ?>