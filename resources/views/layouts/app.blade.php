<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'App')</title>
    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #f8f9fa;
        }

        .sidebar {
            min-height: 100vh;
            background: #fff;
            border-right: 1px solid #dee2e6;
        }

        .sidebar .list-group-item.active {
            background: #0d6efd;
            border-color: #0d6efd;
            color: #fff;
        }

        .main-content {
            padding: 2rem 1.5rem;
        }

        .navbar-brand {
            font-weight: bold;
            letter-spacing: 1px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm mb-4">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Aplikasi Produk</a>
        </div>
    </nav>
    <main>
        @yield('content')
    </main>
    <footer class="bg-light text-center text-lg-start mt-5 border-top">
        <div class="text-center p-3 text-muted">
            &copy; {{ date('Y') }} MyApp. All rights reserved.
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>