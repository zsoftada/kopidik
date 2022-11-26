<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Download Daftar Nama</title>
    {{-- <script type="text/javascript">
        window.print();
    </script> --}}
    <style>
        body{
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div>
        <center><h4>Download Daftar Nama</h4></center>
        <table class="table table-striped table-condensed table-bordered table-sm">
            <thead>
                <tr class="bg-dark text-white">
                    <th class="text-center">No</th>
                    <th class="text-center">Nama</th>
                    <th class="text-center">L/P</th>
                    <th class="text-center">Keterangan</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($listNama as $key => $siswa)
                    <tr>
                        <td class="text-center">{{ $key + 1 }}</td>
                        <td>{{ strtoupper($siswa->nama) }}</td>
                        <td class="text-center">{{ $siswa->jenis_kelamin }}</td>
                        <td></td>
                    </tr>
                    @endforeach
                </tbody>
        </table>
    </div>
</body>
</html>
