<html>

<head>
    <title>Laravel PDF</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    
</head>

<body>
    <div class="container mt-5">
        <a href="{{ route('category.pdf') }}">
            <button class='btn btn-primary'>Generate PDF Daftar Buku</button>
            </a><br><br>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Kategori</th>
                    </tr>
                </thead>
            <tbody>
                @foreach ($kategories as $kategori)
            <tr>
                <td>{{ $kategori->id }}</td>
                <td>{{ $kategori->nama_kategori }}</td>
                        </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </body>

</html>
