<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peserta;
use App\Usulan;

class UsulanController extends Controller
{
    public function index()
    {
    	$usulan = Usulan::all();
    	return view('usulan', ['usulan' => $usulan]);
    }

    public function usulan()
    {
        return view('usulan_tambah');
    }

    public function detail($id)
    {
        $usulan = Usulan::find($id);
        $peserta = Peserta::find($id);
        return view('detail_usulan', ['usulan', 'peserta' => $usulan, $peserta]);
    }

    public function simpan(Request $request)
    {
        $this->validate($request, [
            'no_surat' => 'required',
            'tanggal' => 'required',
            'perihal' => 'required',
            'file_surat' => 'required'
        ]);

        Usulan::create([
            'no_surat' => $request->no_surat,
            'tanggal' => $request->tanggal,
            'perihal' => $request->perihal,
            'file_surat' => $request->file_surat
        ]);
        return redirect('/usulan');
    }

    public function tambah()
    {
    	$peserta = Peserta::all();
    	return view('peserta', ['peserta' => $peserta]);
    }

    public function store(Request $request)
    {
    	$this->validate($request,[
    		'nip' => 'required',
    		'nama' => 'required',
    		'tmt' => 'required',
    		'sk_cpns' => 'required',
    		'sk_pns' => 'required',
    		'pangkat' => 'required',
    		'sk_kp' => 'required',
    		'unit_kerja' => 'required',
    		'pendidikan' => 'required',
    		'ijazah' => 'required',
    		'jabatan' => 'required',
    		'jenis_pelatihan' => 'required',
    		'jenis_usulan' => 'required',
    		'email' => 'required',
    		'no_telp' => 'required'
    	]);

    	Peserta::create([
    		'nip' => $request->nip,
    		'nama' => $request->nama,
    		'tmt' => $request->tmt,
    		'sk_cpns' => $request->sk_cpns,
    		'sk_pns' => $request->sk_pns,
    		'pangkat' => $request->pangkat,
    		'sk_kp' => $request->sk_kp,
    		'unit_kerja' => $request->unit_kerja,
    		'pendidikan' => $request->pendidikan,
    		'ijazah' => $request->ijazah,
    		'jabatan' => $request->jabatan,
    		'jenis_pelatihan' => $request->jenis_pelatihan,
    		'jenis_usulan' => $request->jenis_usulan,
    		'email' => $request->email,
    		'no_telp' => $request->no_telp
    	]);
    	return redirect('/peserta/tambah');
    }

    public function edit($id)
    {
    	$peserta = Peserta::find($id);
    	return view('edit', ['peserta' => $peserta]);
    }

    public function update($id, Request $request)
    {
        $this->validate($request,[
            'nip' => 'required',
            'nama' => 'required',
            'tmt' => 'required',
            'sk_cpns' => 'required',
            'sk_pns' => 'required',
            'pangkat' => 'required',
            'sk_kp' => 'required',
            'unit_kerja' => 'required',
            'pendidikan' => 'required',
            'ijazah' => 'required',
            'jabatan' => 'required',
            'jenis_pelatihan' => 'required',
            'jenis_usulan' => 'required',
            'email' => 'required',
            'no_telp' => 'required'
        ]);

        $peserta = Peserta::find($id);
        $peserta->nip = $request->nip;
        $peserta->nama = $request->nama;
        $peserta->tmt = $request->tmt;
        $peserta->sk_cpns = $request->sk_cpns;
        $peserta->sk_pns = $request->sk_pns;
        $peserta->pangkat = $request->pangkat;
        $peserta->sk_kp = $request->sk_kp;
        $peserta->unit_kerja = $request->unit_kerja;
        $peserta->pendidikan = $request->pendidikan;
        $peserta->ijazah = $request->ijazah;
        $peserta->jabatan = $request->jabatan;
        $peserta->jenis_pelatihan = $request->jenis_pelatihan;
        $peserta->jenis_usulan = $request->jenis_usulan;
        $peserta->email = $request->email;
        $peserta->no_telp = $request->no_telp;
        $peserta->save();
        return redirect('/peserta/tambah');
    }

    public function hapus($id)
    {
        $peserta = Peserta::find($id);
        $peserta->delete();
        return redirect('/peserta/tambah');
    }
}
