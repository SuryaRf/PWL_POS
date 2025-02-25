<!DOCTYPE html>
<html>
<head>
    <title>User Profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow-lg p-4">
            <h2 class="text-center text-primary">Profil Pengguna</h2>
            <div class="text-center">
                <img src="https://via.placeholder.com/150" class="rounded-circle mb-3" alt="User Profile Picture">
            </div>
            <table class="table table-bordered">
                <tr>
                    <th class="bg-primary text-white">ID</th>
                    <td>{{ $id }}</td>
                </tr>
                <tr>
                    <th class="bg-primary text-white">Nama</th>
                    <td>{{ $name }}</td>
                </tr>
            </table>
            <div class="text-center">
                <a href="{{ url('/') }}" class="btn btn-primary">Kembali ke Home</a>
            </div>
        </div>
    </div>
</body>
</html>
