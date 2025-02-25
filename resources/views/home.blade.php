
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">POS System</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                    @foreach($categories as $category)
                        <li class="nav-item"><a class="nav-link" href="{{ url('category/' . $category) }}">{{ ucfirst(str_replace('-', ' ', $category)) }}</a></li>
                    @endforeach
                    <li class="nav-item"><a class="nav-link" href="{{ url('/sales') }}">Sales</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/user/1/name/John') }}">User Profile</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container text-center mt-5">
        <h1 class="text-primary">Selamat Datang di Aplikasi POS</h1>
        <p class="lead">Kelola penjualan Anda dengan mudah dan efisien</p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
