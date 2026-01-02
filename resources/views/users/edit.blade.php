<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>

<h2>Edit User</h2>

<form method="POST" action="/users/update/{{ $user->id }}">
    @csrf
    <input type="text" name="name" value="{{ $user->name }}" required>
    <br><br>
    <button type="submit">Update</button>
</form>

<a href="/users">Kembali</a>

</body>
</html>
