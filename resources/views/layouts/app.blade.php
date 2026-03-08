<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'AgriSmart')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        body {
            background: #f5f6fa;
        }
        .sidebar {
            background: #27ae60;
            min-height: 100vh;
            padding: 20px;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            padding: 12px 15px;
            display: block;
            border-radius: 5px;
            margin-bottom: 5px;
            transition: all 0.3s;
        }
        .sidebar a:hover, .sidebar a.active {
            background: rgba(255,255,255,0.2);
        }
        .stat-card {
            border-radius: 10px;
            padding: 20px;
            color: white;
        }
        .stat-active { background: #27ae60; }
        .stat-harvested { background: #f39c12; }
        .stat-plots { background: #3498db; }
        .stat-area { background: #9b59b6; }
    </style>
    @livewireStyles
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 sidebar">
                <h4 class="text-white mb-4">
                    <i class="fas fa-leaf"></i> AgriSmart
                </h4>
                <a href="#" class="active"><i class="fas fa-home"></i> Dashboard</a>
                <a href="#"><i class="fas fa-map"></i> Parcelas</a>
                <a href="#"><i class="fas fa-seedling"></i> Cultivos</a>
                <a href="#"><i class="fas fa-leaf"></i> Plantas</a>
                <a href="#"><i class="fas fa-tint"></i> Riego</a>
                <a href="#"><i class="fas fa-bug"></i> Plagas</a>
                <a href="#"><i class="fas fa-cloud"></i> Clima</a>
            </div>
            <div class="col-md-10 p-4">
                @yield('content')
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js"></script>
    @livewireScripts
</body>
</html>
