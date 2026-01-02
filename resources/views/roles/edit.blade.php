<!DOCTYPE html>
<html>
<head>
    <title>Edit Role</title>
</head>
<body>

<h2>Edit Role</h2>

<form action="{{ route('roles.update', $role->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Nama Role</label>
    <br>
    <input type="text" name="name" value="{{ $role->name }}">
    <br><br>

    <button type="submit">Update</button>
</form>

<a href="{{ route('roles.index') }}">Kembali</a>

</body>
</html>
