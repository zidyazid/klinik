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
                    <th>Nama Pasien</th>
                    <th>Alamat</th>
                    <th>Umur</th>
                    <th>Riwayat Penyakit</th>
                    <th>Gejala</th>
            </thead>
            <tbody>
                @foreach ($data_pasien as $v)
                <tr>
                    <td>{{ $v->nama }}</td>
                    <td>{{ $v->alamat }}</td>
                    <td>{{ $v->umur }}</td>
                    <td>{{ $v->riwayat_penyakit }}</td>
                    <td>{{ $v->gejala }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </center>
</body>
</html>