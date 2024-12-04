<h1>Tambah Transaksi</h1>
<form action="/transactions" method="POST">
    @csrf
    <label for="type">Jenis Transaksi:</label>
    <select name="type" id="type">
        <option value="income">Pemasukan</option>
        <option value="expense">Pengeluaran</option>
    </select><br>

    <label for="amount">Jumlah:</label>
    <input type="number" name="amount" id="amount" step="0.01"><br>

    <label for="description">Deskripsi:</label>
    <input type="text" name="description" id="description"><br>

    <button type="submit">Simpan</button>
</form>