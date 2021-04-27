<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>CRUD DATA UJIAN</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    CRUD Data Ujian
                </div>
                <div class="card-body">
                    <a href="/ujian" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    

                    <form method="post" action="/ujian/update/{{ $ujian->id }}">

                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                        <div class="form-group">
                            <label>Nama Mata Kuliah</label>
                            <input type="text" name="nama" class="form-control" value=" {{ $ujian->nama_mk }}"
                            @if($errors->has('nama'))
                                <div class="text-danger">
                                    {{ $errors->first('nama')}}
                                </div>
                            @endif

                        </div>
                        <div class="form-group">
                            <label>Dosen</label>
                            <input type="text" name="dosen" class="form-control"value=" {{ $ujian->dosen }}"
                            @if($errors->has('dosen'))
                                <div class="text-danger">
                                    {{ $errors->first('dosen')}}
                                </div>
                            @endif

                        </div>
                        
                        <div class="form-group">
                            <label>Jumlah Soal</label>
                            <input type="text" name="jumlah" class="form-control"value=" {{ $ujian->jumlah_soal }}"
                            @if($errors->has('jumlah'))
                                <div class="text-danger">
                                    {{ $errors->first('jumlah')}}
                                </div>
                            @endif

                        </div>
                        <div class="form-group">
                            <label>Keterangan</label>
                            <textarea name="keterangan" class="form-control" > {{ $ujian->keterangan }}</textarea>

                             @if($errors->has('keterangan'))
                                <div class="text-danger">
                                    {{ $errors->first('keterangan')}}
                                </div>
                            @endif

                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </body>
</html>