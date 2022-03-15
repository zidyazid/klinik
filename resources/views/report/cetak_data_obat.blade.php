<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Data Obat</title>
</head>
<body>
    <center>
        <h2>Data Obat</h2>
        <hr>
        <table border="1">
            <thead>
                    <th>Nama Obat</th>
                    <th>Kategori</th>
                    <th>Indikasi</th>
                    <th>jenis</th>
                    <th>harga</th>
            </thead>
            <tbody>
                @foreach ($data_obat as $v)
                <tr>
                    <td>{{ $v->nama_obat }}</td>
                    <td>{{ $v->kategori }}</td>
                    <td>{{ $v->indikasi }}</td>
                    <td>{{ $v->jenis }}</td>
                    <td>{{ $v->harga }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </center>
</body>
</html>