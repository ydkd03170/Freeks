<form action="result.php" method="post">
    
        <!-- この中にinputタグを記述していきます。 --> 
        お名前：<input type="text" name="my_name" />
        <br>
        ご希望商品：<input type="radio" name="gift" value="A"/> A賞
                   <input type="radio" name="gift" value="B"/>B賞
                   <input type="radio" name="gift" value="C"/>C賞
        <br>
        個数：
        <select name="number">
        <?php for ($i=1;$i<=10;$i++){ 
        echo '<option value="', $i ,'">' , $i, '</option>'; 
              } ?>
        </select>
        <br>
        <input type="submit" value="申込" />
</form>