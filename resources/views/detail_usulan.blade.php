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

                    <form method="get" action="/usulan/store/{{$usulan->id}}">

                        {{ csrf_field() }}

                        <div class="form-group">
                            <label>No. Surat &emsp; :</label>
                            <label>{{$usulan->no_surat}}</label>

                        </div>

                        <div class="form-group">
                            <label>Tanggal &emsp;&emsp; :</label>
                            <label>{{$usulan->tanggal}}</label>

                        </div>

                        <div class="form-group">
                            <label>Perihal &emsp;&emsp; :</label>
                            <label>{{$usulan->perihal}}</label>

                        </div>

                        <div class="form-group">
                            <label>File Surat &emsp; :</label>
                            <label>{{$usulan->file_surat}}</label>
                            
                        </div>

                    </form>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>TMT</th>
                    <th>SK CPNS</th>
                    <th>SK PNS</th>
                    <th>Pangkat</th>
                    <th>SK KP Terakhir</th>
                    <th>Unit Kerja</th>
                    <th>Pendidikan Terakhir</th>
                    <th>Ijazah</th>
                    <th>Jabatan</th>
                    <th>Jenis Pelatihan</th>
                    <th>Jenis Usulan Formasi</th>
                    <th>Email</th>
                    <th>No. Telp</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach($peserta as $p)
                <tr>
                    <td>{{ $no }}</td>
                    <td>{{ $p->nip }}</td>
                    <td>{{ $p->nama }}</td>
                    <td>{{ $p->tmt }}</td>
                    <td>{{ $p->sk_cpns }}</td>
                    <td>{{ $p->sk_pns }}</td>
                    <td>{{ $p->pangkat }}</td>
                    <td>{{ $p->sk_kp }}</td>
                    <td>{{ $p->unit_kerja }}</td>
                    <td>{{ $p->pendidikan }}</td>
                    <td>{{ $p->ijazah }}</td>
                    <td>{{ $p->jabatan }}</td>
                    <td>{{ $p->jenis_pelatihan }}</td>
                    <td>{{ $p->jenis_usulan }}</td>
                    <td>{{ $p->email }}</td>
                    <td>{{ $p->no_telp }}</td>
                    <td>
                        <a href="/peserta/edit/{{$p->id}}" class="btn btn-warning">Edit</a>
                        <a href="/peserta/hapus/{{$p->id}}" class="btn btn-danger">Delete</a>
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
