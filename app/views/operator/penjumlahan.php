<div class="jarak-navigasi"></div>
<form action="<?= BASEURL ?>/Operator/penjumlahan/<?= $data["difficulty"] ?>" method="POST">
    <div class="card text-dark bg-warning mb-5 ms-auto me-auto text-center" style="width: 300px;">
        <div class="card-header">Penjumlahan</div>
        <div class="card-body">
            <h1 class="mb-4"><?=$_SESSION['number1']?> + <?=$_SESSION['number2']?></h1>
            <input type="number" name="answer" class="form-control input-answer ms-auto me-auto mb-4">
            <input type="submit" value="Jawab" name="b_answer" id="jawab" class="btn btn-primary mb-3">
        </div>
    </div>
</form>
<div class="jarak-navigasi"></div>