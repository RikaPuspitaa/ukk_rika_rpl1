
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coba Buku | @yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <style>
        .main{
            height: 100vh;
        }
        .sidebar{
            background: rgb(53, 63, 53);
            color: white;
        }
        .sidebar a{
            color: white;
            text-decoration: none;
            display: block;
            padding: 20px 30px;
        }
        .sidebar a:hover{
            background: rgb(73, 73, 73)
        }
    </style>
    </head>
<body>

    <div class ="main d-flex flex-column justify-content-between">
         <nav class="navbar navbar-dark navbar-expand-lg bg-success">
            <div class="container-fluid">
                <a class="navbar-brand " href="#">Perpustakaan Buku</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            </div>
          </nav> 
          
          
          <div class="body-content h-100">
            <div class="row g-0 h-100">
                 <div class="sidebar col-lg-2 collapse d-lg-block" id="navbarTogglerDemo03">
                    @if (Auth::user()->role == 'Administrator')
        
                    <a href="dashboard" >Dashboard</a>
                    <a href="companies" >Daftar Buku</a>
                    <a href="kategories" >kategori</a>
                    <a href="/book-rent">Peminjaman Buku</a>
                    
                    <a href="/rent-logs">Data Peminjam</a>
                    <a href="actionlogout" >Logout</a>
                 
                    @elseif (Auth::user()->role == 'Petugas')
                    <a href="dashboard" >Dashboard</a>
                    <a href="companies" >Daftar Buku</a>
                    <a href="/rent-logs">Data Peminjam</a>
                    <a href="actionlogout" >Logout</a>

                    @else 
                
                    <a href="dashboard" >Dashboard</a>
                    <a href="/book-rent">Peminjaman Buku</a>
                    <a href="/rent-logs">Data Peminjam</a>
            
                    <a href="actionlogout" >Logout</a>

                    @endif

                </div>  
                <div class="content p-5 col-lg-10">
                    @yield('content')
                </div>

            </div>
          </div>
    </div>

   

    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#tabel-data').DataTable();
        });
    </script> 
 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>



