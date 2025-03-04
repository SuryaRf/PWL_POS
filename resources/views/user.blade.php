<!DOCTYPE html>
<html>

<head>
    <title>Data User</title>
</head>
<title>Total Pengguna</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
    </style>

<body>

    <table>
        <tr>
            <th>Total Pengguna</th>
            <td>{{ $userCount }}</td>
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