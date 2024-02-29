<html>

<head>
    <title>Laravel PDF</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    
</head>

<body>
    <div class="container mt-5">
        <a href="{{ route('pinjam.pdf') }}">
            <button class='btn btn-primary'>Generate PDF Daftar Buku</button>
            </a><br><br>
        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>User</th>
                    <th>Buku</th>
                    <th>Tanggal Peminjaman</th>
                    <th>Tanggal Pengembalian</th>
                    
    
                    </tr>
                </thead>
            <tbody>
                @foreach ($rent_logs as $item)
            <tr>
                <td>{{ $loop->iteration}}</td>
                <td>{{ $item->user->name}}</td>
                <td>{{ $item->company->judul}}</td>
                <td>{{ $item->rent_date}}</td>
                <td>{{ $item->return_date}}</td>
                
            </tr>
            @endforeach 
                </tbody>
            </table>
        </div>
    </body>

</html>
