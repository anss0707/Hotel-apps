<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belajar Laravel</title>
</head>
<body>
    <h1>Tambah Data</h1>
    <form action="{{ route('storeTambah') }}" method="post">
        @csrf
        <label for="">satu</label>
        <input type="number" name="angka1" placeholder="Masukkan Operand">
        <br><br>
        <label for="">dua</label>
        <input type="number" name="angka2" placeholder="Masukkan Operand">
        <br><br>
        <button type="submit">Tambah</button>
        <a href="{{ url()->previous() }}">Kembali</a>
    </form>
    <h2>Jumlahnya : {{ $jumlah ?? 0 }}</h2>
</body>
</html>
