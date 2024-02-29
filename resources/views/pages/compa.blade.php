<html>

<head>
    <title>Laravel PDF</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    
</head>

<body>
     <div class="container mt-5">
        <a href="{{ route('compa.pdf') }}" >
            <button class='btn btn-primary'>Generate PDF Daftar Buku</button>
            </a><br><br>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul Buku</th>
                    <th>Penulis</th>
                    <th>Penerbit</th>
                    <th>Tahun Terbit</th>
                    </tr>
                </thead>
            <tbody>
                @foreach ($companies as $company)
                <tr>
                    <td>{{ $company->id }}</td>
                    <td>{{ $company->judul }}</td>
                    <td>{{ $company->penulis }}</td>
                    <td>{{ $company->penerbit }}</td>
                    <td>{{ $company->tahun }}</td>
                        </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </body>

</html>
