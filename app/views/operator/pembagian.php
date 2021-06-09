<form action="<?= BASEURL ?>/Operator/pembagian/<?= $data["difficulty"] ?>" method="POST">
    <?=$_SESSION['number1']?> / <?=$_SESSION['number2']?>
    <input type="number" name="answer" step="0.01">
    <input type="submit" value="Jawab" name="b_answer" id="jawab">
</form>