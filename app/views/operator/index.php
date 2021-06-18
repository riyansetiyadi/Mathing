<div class="bg-operator">
    <div class="jarak-navigasi"></div>
    <form action="<?= BASEURL ?>/operator/choiceOpDiff" method="post">
        <div class="card text-dark bg-warning mb-5 ms-auto me-auto text-center" style="width: fit-content;">
            <div class="card-header">Pilih Nilai Tempat</div>
            <div class="card-body">
                <select class="form-select" name="difficulty" id="difficulty">
                    <option value="Satuan">Satuan</option>
                    <option value="Puluhan">Puluhan</option>
                    <option value="Ratusan">Ratusan</option>
                    <option value="Ribuan">Ribuan</option>
                    <option value="Acak">Acak</option>
                </select>
            </div>
        </div>

        <div class="card text-dark bg-warning mb-5 ms-auto me-auto text-center" style="width: fit-content;">
            <div class="card-header">Pilih Operator</div>
            <div class="card-body">
                <input type="radio" class="btn-check" name="operator" value="penjumlahan" id="penjumlahan" autocomplete="off">
                <label class="btn btn-outline-primary" for="penjumlahan">Penjumlahan</label>
                <input type="radio" class="btn-check" name="operator" value="pengurangan" id="pengurangan" autocomplete="off">
                <label class="btn btn-outline-primary" for="pengurangan">Pengurangan</label>
                <input type="radio" class="btn-check" name="operator" value="perkalian" id="perkalian" autocomplete="off">
                <label class="btn btn-outline-primary" for="perkalian">Perkalian</label>
                <input type="radio" class="btn-check" name="operator" value="pembagian" id="pembagian" autocomplete="off">
                <label class="btn btn-outline-primary" for="pembagian">Pembagian</label>
            </div>
        </div>
        <div class="text-center pb-5">
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    <div style="height: 50px;"></div>
</div>