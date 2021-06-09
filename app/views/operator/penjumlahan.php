<form action="<?= BASEURL ?>/Operator/penjumlahan/<?= $data["difficulty"] ?>" method="POST">
    <?=$_SESSION['number1']?> + <?=$_SESSION['number2']?>
    <input type="number" name="answer">
    <input type="submit" value="Jawab" name="b_answer" id="jawab">
</form>