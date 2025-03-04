<!DOCTYPE html>
<html>

<head>
    <title>Data User</title>
</head>
<title>Total Pengguna</title>

<body>

    <h1>Data User</h1>
    <table border="1" cellpadding="2" cellspacing="0">
        <tr>

            <td>ID</td>
            <td>Username</td>
            <td>Nama</td>
            <td>ID Level Pengguna</td>
        </tr>
        <tr>
            <td>{{ $data->user_id }}</td>
            <td>{{ $data->username }}</td>
            <td>{{ $data->name }}</td>
            <td>{{ $data->level_id }}</td>
        </tr>

    </table>
    {{-- <h1>Data User</h1>
    <table border="1" cellpadding="2" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Nama</th>
            <th>ID Level Pengguna</th>
        </tr>
        <tr>
            <td>{{ $data->user_id }}</td>
            <td>{{ $data->username }}</td>
            <td>{{ $data->name }}</td>
            <td>{{ $data->level_id }}</td>
        </tr>
    </table> --}}
</body>

</html>