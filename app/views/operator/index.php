<form action="<?= BASEURL ?>/operator/choiceOpDiff" method="post">
    <select name="difficulty" id="difficulty">
        <option value="Satuan">Satuan</option>
        <option value="Puluhan">Puluhan</option>
        <option value="Ratusan">Ratusan</option>
        <option value="Ribuan">Ribuan</option>
        <option value="Acak">Acak</option>
    </select>
    <input type="radio" id="penjumlahan" name="operator" value="penjumlahan">
    <label for="male">Penjumlahan</label><br>
    <input type="radio" id="pengurangan" name="operator" value="pengurangan">
    <label for="female">Pengurangan</label><br>
    <input type="radio" id="perkalian" name="operator" value="perkalian">
    <label for="other">Perkalian</label>
    <input type="radio" id="pembagian" name="operator" value="pembagian">
    <label for="other">Pembagian</label>
    <button type="submit" name="submit">Submit</button>
</form>