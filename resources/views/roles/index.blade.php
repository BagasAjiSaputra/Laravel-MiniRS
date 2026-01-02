<!DOCTYPE html>
<html>
<head>
    <title>Role List</title>
</head>
<body>

<h2>Role List</h2>

<a href="{{ route('roles.create') }}">Tambah Role</a>

@if(session('success'))
    <p style="color:green">{{ session('success') }}</p>
@endif

<table border="1" cellpadding="10">
    <tr>
        <th>No</th>
        <th>Role Name</th>
        <th>Aksi</th>
    </tr>
    @foreach($roles as $role)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $role->name }}</td>
        <td>
            <a href="{{ route('roles.edit', $role->id) }}">Edit</a>
            <form action="{{ route('roles.destroy', $role->id) }}" method="POST" style="display:inline">
                @csrf
                @method('DELETE')
                <button type="submit">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

</body>
</html>
