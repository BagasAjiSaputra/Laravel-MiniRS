<!DOCTYPE html>
<html>
<head>
    <title>Tambah Role</title>
</head>
<body>

<h2>Tambah Role</h2>

<form action="{{ route('roles.store') }}" method="POST">
    @csrf

    <label>Nama Role</label>
    <br>
    <input type="text" name="name">
    <br><br>

    <button type="submit">Simpan</button>
</form>

<a href="{{ route('roles.index') }}">Kembali</a>

</body>
</html>
