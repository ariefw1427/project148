<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>CRUD Data Ujian</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    CRUD Data Ujian </a>
                </div>
                <div class="card-body">
                    <a href="/ujian/tambah" class="btn btn-primary">Input Data Baru</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Nama Mata Kuliah</th>
                                <th>Dosen</th>
                                <th>Jumlah Soal</th>
                                <th>Keterangan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($ujian as $p)
                            <tr>
                                <td>{{ $p->nama_mk }}</td>
                                <td>{{ $p->dosen }}</td>
                                <td>{{ $p->jumlah_soal }}</td>
                                <td>{{ $p->keterangan }}</td>
                                <td>
                                    <a href="/ujian/edit/{{ $p->id }}" class="btn btn-warning">Edit</a>
                                    <a href="/ujian/hapus/{{ $p->id }}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>