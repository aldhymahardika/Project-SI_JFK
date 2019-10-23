<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Data Usulan SI-JFK</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    Data Usulan
                </div>
                <div class="card-body">
                    <a href="/usulan/tambah" class="btn btn-primary">Tambah Surat Usulan</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>No. Usulan</th>
                                <th>No. Surat</th>
                                <th>Tanggal Surat</th>
                                <th>Perihal</th>
                                <th>Jumlah Usulan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach($usulan as $u)
                            <tr>
                                <td>{{ $no }}</td>
                                <td>{{ $u->no_surat }}</td>
                                <td>{{ $u->tanggal }}</td>
                                <td>{{ $u->perihal }}</td>
                                <td>{{ $u->perihal }}</td>       
                                <td>
                                    <a href="/peserta/tambah" class="btn btn-warning">Tambah Usulan</a>
                                    <a href="/usulan/detail/{{ $u->id }}" class="btn btn-danger">Detail</a>
                                </td>
                            </tr>
                            @php
                                $no++;
                            @endphp
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>