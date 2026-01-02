<!DOCTYPE html>
<html>
<head>
    <title>User List</title>
</head>
<body>

<h2>Data User</h2>
<a href="/users/create">Tambah User</a>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Aksi</th>
    </tr>

    @foreach ($users as $user)
    <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->name }}</td>
        <td>
            <a href="/users/edit/{{ $user->id }}">Edit</a> |
            <a href="/users/delete/{{ $user->id }}">Hapus</a>
        </td>
    </tr>
    @endforeach
</table>

</body>
</html>
