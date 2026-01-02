<!DOCTYPE html>
<html>
<head>
    <title>Tambah User</title>
</head>
<body>

<h2>Tambah User</h2>

<form method="POST" action="/users/store">
    @csrf
    <input type="text" name="name" placeholder="Nama" required>
    <br><br>
    <button type="submit">Simpan</button>
</form>

<a href="/users">Kembali</a>

</body>
</html>
