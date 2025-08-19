<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belajar</title>
</head>
<body>
    <h1>BELAJAR LARAVEL BARENG PPKD #ARITMATIKA</h1>
    <br>
    <a href="{{ route('tambah') }}">tambah</a>
    <a href="{{ route('kurang') }}">kurang</a>
    <a href="{{ route('bagi') }}">bagi</a>
    <a href="{{ route('kali') }}">kali</a>
    <br><br><br>

    <h1>DATA PENGGUNA</h1>
    <table width="100%" border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $index => $user)

            <tr>
                <td>{{ $index += 1 }}</td>
                <td>{{ $user->name ?? '' }}</td>
                <td>{{ $user->email ?? '' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
