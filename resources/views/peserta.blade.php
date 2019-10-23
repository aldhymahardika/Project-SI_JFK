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
                    Input Data Calon Peserta JFK
                </div>
                <div class="card-body">
                    <a href="/usulan" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>

                    <form method="post" action="/peserta/store">

                        {{ csrf_field() }}

                        <div class="form-group">
                            <label>NIP</label>
                            <input type="text" name="nip" class="form-control" placeholder="NIP ..">

                            @if($errors->has('nip'))
                                <div class="text-danger">
                                    {{ $errors->first('nip')}}
                                </div>
                            @endif
                            <a href="/usulan" class="btn btn-primary">Cari</a>

                        </div>

                        <div class="form-group">
                            <label>Nama</label>
                            <textarea name="nama" class="form-control" placeholder="Nama  .."></textarea>

                             @if($errors->has('nama'))
                                <div class="text-danger">
                                    {{ $errors->first('nama')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>TMT</label>
                            <textarea name="tmt" class="form-control" placeholder="tmt .."></textarea>

                             @if($errors->has('tmt'))
                                <div class="text-danger">
                                    {{ $errors->first('tmt')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Sk CPNS</label>
                            <textarea name="sk_cpns" class="form-control" placeholder="SK CPNS .."></textarea>

                             @if($errors->has('sk_cpns'))
                                <div class="text-danger">
                                    {{ $errors->first('sk_cpns')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>SK PNS</label>
                            <textarea name="sk_pns" class="form-control" placeholder="SK PNS .."></textarea>

                             @if($errors->has('sk_pns'))
                                <div class="text-danger">
                                    {{ $errors->first('sk_pns')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Pangkat</label>
                            <textarea name="pangkat" class="form-control" placeholder="Pangkat  .."></textarea>

                             @if($errors->has('pangkat'))
                                <div class="text-danger">
                                    {{ $errors->first('pangkat')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>SK KP Terakhir</label>
                            <textarea name="sk_kp" class="form-control" placeholder="SK KP Terakhir .."></textarea>

                             @if($errors->has('sk_kp'))
                                <div class="text-danger">
                                    {{ $errors->first('sk_kp')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Unit Kerja</label>
                            <textarea name="unit_kerja" class="form-control" placeholder="Unit Kerja .."></textarea>

                             @if($errors->has('unit_kerja'))
                                <div class="text-danger">
                                    {{ $errors->first('unit_kerja')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Pendidikan Terakhir</label>
                            <textarea name="pendidikan" class="form-control" placeholder="Pendidikan Terakhir .."></textarea>

                             @if($errors->has('pendidikan'))
                                <div class="text-danger">
                                    {{ $errors->first('pendidikan')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Ijazah</label>
                            <textarea name="ijazah" class="form-control" placeholder="Ijazah .."></textarea>

                             @if($errors->has('ijazah'))
                                <div class="text-danger">
                                    {{ $errors->first('ijazah')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Jabatan</label>
                            <textarea name="jabatan" class="form-control" placeholder="Jabatan .."></textarea>

                             @if($errors->has('jabatan'))
                                <div class="text-danger">
                                    {{ $errors->first('jabatan')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Jenis Pelatihan</label>
                            <textarea name="jenis_pelatihan" class="form-control" placeholder="Jenis Pelatihan .."></textarea>

                             @if($errors->has('jenis_pelathihan'))
                                <div class="text-danger">
                                    {{ $errors->first('jenis_pelatihan')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Jenis Usulan</label>
                            <textarea name="jenis_usulan" class="form-control" placeholder="Jenis Usulan .."></textarea>

                             @if($errors->has('jenis_usulan'))
                                <div class="text-danger">
                                    {{ $errors->first('jenis_usulan')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <textarea name="email" class="form-control" placeholder="Email .."></textarea>

                             @if($errors->has('email'))
                                <div class="text-danger">
                                    {{ $errors->first('email')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>No. Telp</label>
                            <textarea name="no_telp" class="form-control" placeholder="No. Telepon .."></textarea>

                             @if($errors->has('no_telp'))
                                <div class="text-danger">
                                    {{ $errors->first('no_telp')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>

                    </form>
                    <br/>
                    <br/>

                </div>
            </div>
        </div>
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
    </body>
</html>
