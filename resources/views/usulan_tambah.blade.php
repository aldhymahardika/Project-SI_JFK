<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Data Calon Peserta JFK</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    Input Surat Usulan Calon Peserta Pelatihan JFK
                </div>
                <div class="card-body">
                    <a href="/usulan" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>

                    <form method="post" action="/usulan/store">

                        {{ csrf_field() }}

                        <div class="form-group">
                            <label>No. Surat</label>
                            <input type="text" name="no_surat" class="form-control" placeholder="No. Surat .."></input>

                            @if($errors->has('no_surat'))
                                <div class="text-danger">
                                    {{ $errors->first('no_surat')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Tanggal</label>
                            <input  type="text" name="tanggal" class="form-control" placeholder="Tanggal  .."></input>

                             @if($errors->has('tanggal'))
                                <div class="text-danger">
                                    {{ $errors->first('tanggal')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Perihal</label>
                            <input type="text" name="perihal" class="form-control" placeholder="Perihal .."></input>

                             @if($errors->has('perihal'))
                                <div class="text-danger">
                                    {{ $errors->first('perihal')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>File Surat</label>
                            <input type="text" name="file_surat" class="form-control" placeholder="File Surat .."></input>

                             @if($errors->has('file_surat'))
                                <div class="text-danger">
                                    {{ $errors->first('file_surat')}}
                                </div>
                            @endif
                            <a href="/usulan" class="btn btn-primary">Cari</a>
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
