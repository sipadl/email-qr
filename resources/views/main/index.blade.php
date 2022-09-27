<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NAMA PERUSAHAAN</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark rounded shadow p-3 justify-content-between">
            <a class="navbar-brand mx-3" href="#">NAMA PERUSAHAAN</a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="d-flex">
            <div class="justify-content-end">
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <div class="d-flex justify-content-end">
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ url('/') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('setting') }}">Pengaturan</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <div class="row mt-4">
            <div class="sidebar col-md-3 col-sm-12">
                <div class="list-group">
                    <a href="{{ route('main') }}" class="list-group-item list-group-item-action"><i class='bx bx-home-alt' ></i> Dashboard</a>
                    <a href="{{ route('dokumen') }}" class="list-group-item list-group-item-action"><i class='bx bxs-file-doc' ></i> Dokumen</a>
                    <a href="{{ route('laporan') }} " class="list-group-item list-group-item-action"><i class='bx bxs-report' ></i> Laporan</a>
                    <a href="{{ route('logout') }}" class="list-group-item list-group-item-action"><i class='bx bx-log-out'></i> Keluar</a>
                </div>
            </div>
            <div class="col-md-9 col-sm-12">
                <div class="card">
                    <div class="p-4">
                        <h4>@yield('title')</h4>
                        <hr>
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
        {{-- End of Container --}}
    </div>
</body>
<script src="https://unpkg.com/boxicons@2.0.9/dist/boxicons.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js">  </script>
<script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
@yield('js')
</html>
