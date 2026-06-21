<!DOCTYPE html>
<html>
    <head>
        <title>Inventaris Elektronik Livie</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
        <style>
        body{
            background:#f4f7fb;
        }
        .sidebar{
            width:250px;
            height:100vh;
            position:fixed;
            background:#111827;
            color:white;
        }
        .sidebar a{
            display:block;
            padding:14px 25px;
            color:#cbd5e1;
            text-decoration:none;
        }
        .sidebar a:hover{
            background:#2563eb;
            color:white;
        }
        .content{
            margin-left:250px;
            padding:25px;
        }
        .logo{
            font-size:22px;
            font-weight:bold;
            padding:25px;
        }
        .card-box{
            border-radius:15px;
            padding:25px;
            color:white;
        }
        </style>
    </head>
    <body>
        <div class="sidebar">
            <div class="logo">
                <i class="fa fa-box"></i>
                Inventaris Livie
            </div>
            <a href="/dashboard">
                <i class="fa fa-home"></i>
                Dashboard
            </a>
            <a href="/categories">
                <i class="fa fa-tags"></i>
                Kategori
            </a>
            <a href="/suppliers">
                <i class="fa fa-truck"></i>
                Supplier
            </a>
            <a href="/products">
                <i class="fa fa-boxes-stacked"></i>
                Barang
            </a>
            <a href="/incoming">
                <i class="fa fa-arrow-down"></i>
                Barang Masuk
            </a>
            <a href="/outgoing">
                <i class="fa fa-arrow-up"></i>
                Barang Keluar
            </a>
            <a href="/reports">
                <i class="fa fa-file"></i>
                Laporan
            </a>
            <form action="/logout" method="POST" class="mt-4 px-3">
                @csrf
                <button class="btn btn-danger w-100">
                    <i class="fa fa-right-from-bracket"></i>
                    Logout
                </button>
            </form>
        </div>
        <div class="content">
            <nav class="navbar bg-white rounded shadow-sm mb-4">
                <div class="container-fluid">
                    <h4>
                        Dashboard Inventaris Elektronik Livie
                    </h4>
                    <span>
                        {{auth()->user()->name}}
                    </span>
                </div>
            </nav>
            @yield('content')
        </div>
    </body>
</html>