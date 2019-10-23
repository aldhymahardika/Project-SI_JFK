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

                    <form method="post" action="/peserta/update/{{$peserta->id}}">

                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                        <div class="form-group">
                            <label>NIP</label>
                            <input type="text" name="nip" class="form-control" placeholder="NIP .." value="{{ $peserta->nip }}">

                            <!-- @if($errors->has('nip'))
                                <div class="text-danger">
                                    {{ $errors->first('nip')}}
                                </div>
                            @endif
                            <a href="/usulan" class="btn btn-primary">Cari</a> -->

                        </div>

                        <div class="form-group">
                            <label>Nama</label>
                            <input name="nama" class="form-control" placeholder="Nama  .." value="{{ $peserta->nama }}"></input>

                             @if($errors->has('nama'))
                                <div class="text-danger">
                                    {{ $errors->first('nama')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>TMT</label>
                            <input name="tmt" class="form-control" placeholder="tmt .." value="{{ $peserta->tmt }}"></input>

                             @if($errors->has('tmt'))
                                <div class="text-danger">
                                    {{ $errors->first('tmt')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Sk CPNS</label>
                            <input name="sk_cpns" class="form-control" placeholder="SK CPNS .." value="{{ $peserta->sk_cpns }}"></input>

                             @if($errors->has('sk_cpns'))
                                <div class="text-danger">
                                    {{ $errors->first('sk_cpns')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>SK PNS</label>
                            <input name="sk_pns" class="form-control" placeholder="SK PNS .." value="{{ $peserta->sk_pns }}"></input>

                             @if($errors->has('sk_pns'))
                                <div class="text-danger">
                                    {{ $errors->first('sk_pns')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Pangkat</label>
                            <input name="pangkat" class="form-control" placeholder="Pangkat  .." value="{{ $peserta->pangkat }}"></input>

                             @if($errors->has('pangkat'))
                                <div class="text-danger">
                                    {{ $errors->first('pangkat')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>SK KP Terakhir</label>
                            <input name="sk_kp" class="form-control" placeholder="SK KP Terakhir .." value="{{ $peserta->sk_kp }}"></input>

                             @if($errors->has('sk_kp'))
                                <div class="text-danger">
                                    {{ $errors->first('sk_kp')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Unit Kerja</label>
                            <input name="unit_kerja" class="form-control" placeholder="Unit Kerja .." value="{{ $peserta->unit_kerja }}"></input>

                             @if($errors->has('unit_kerja'))
                                <div class="text-danger">
                                    {{ $errors->first('unit_kerja')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Pendidikan Terakhir</label>
                            <input name="pendidikan" class="form-control" placeholder="Pendidikan Terakhir .." value="{{ $peserta->pendidikan }}" ></input>

                             @if($errors->has('pendidikan'))
                                <div class="text-danger">
                                    {{ $errors->first('pendidikan')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Ijazah</label>
                            <input name="ijazah" class="form-control" placeholder="Ijazah .." value="{{ $peserta->ijazah }}"></input>

                             @if($errors->has('ijazah'))
                                <div class="text-danger">
                                    {{ $errors->first('ijazah')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Jabatan</label>
                            <input name="jabatan" class="form-control" placeholder="Jabatan .." value="{{ $peserta->jabatan }}"></input>

                             @if($errors->has('jabatan'))
                                <div class="text-danger">
                                    {{ $errors->first('jabatan')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Jenis Pelatihan</label>
                            <input name="jenis_pelatihan" class="form-control" placeholder="Jenis Pelatihan .." value="{{ $peserta->jenis_pelatihan }}"></input>

                             @if($errors->has('jenis_pelathihan'))
                                <div class="text-danger">
                                    {{ $errors->first('jenis_pelatihan')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Jenis Usulan</label>
                            <input name="jenis_usulan" class="form-control" placeholder="Jenis Usulan .." value="{{ $peserta->jenis_usulan }}"></input>

                             @if($errors->has('jenis_usulan'))
                                <div class="text-danger">
                                    {{ $errors->first('jenis_usulan')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input name="email" class="form-control" placeholder="Email .." value="{{ $peserta->email }}"></input>

                             @if($errors->has('email'))
                                <div class="text-danger">
                                    {{ $errors->first('email')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>No. Telp</label>
                            <input name="no_telp" class="form-control" placeholder="No. Telepon .." value="{{ $peserta->no_telp }}"></input>

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
                </div>
            </div>
        </div>
    </body>
</html>
