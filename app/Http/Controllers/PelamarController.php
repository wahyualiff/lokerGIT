<?php

namespace App\Http\Controllers;

use App\Models\Pelamar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PelamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Halaman utama pelamar
        $user = Auth::user();
        if ($user->hasRole('perusahaan') or $user->hasRole('admin')) {
            // dapat mengakses data pelamar
            $datapelamar = Pelamar::all();
            return view('pelamar_index', ['pelamar' => $datapelamar]);
        } else {
            // dialihkan ke halaman beranda
            return redirect()->route('beranda');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Tambah data pelamar
        return view('pelamar_tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Proses input data
        Pelamar::create([
            'name' => $request->name,
            'alamat' => $request->alamat,
            'kota' => $request->kota,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'status' => $request->status,
            'email' => $request->email,
            'telepon' => $request->telepon,
            'pendidikan' => $request->pendidikan,
            'tempat_pendidikan' => $request->tempat_pendidikan,
            'tempat_kerja_terakhir' => $request->tempat_kerja_terakhir,
            'pekerjaan_bekerja_terakhir' => $request->pekerjaan_bekerja_terakhir,
        ]);
        return redirect()->route('pelamar.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Lihat pelamar
        $pelamar = Pelamar::where('id', $id)->first();
        return view('pelamar_detail', ['pelamar' => $pelamar]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Edit data pelamar
        $datapelamar = Pelamar::find($id);
        return view('pelamar_edit', ['pelamar' => $datapelamar]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Proses edit data pelamar
        $pelamar = Pelamar::find($id);
        $pelamar->name = $request->name;
        $pelamar->alamat = $request->alamat;
        $pelamar->kota = $request->kota;
        $pelamar->jenis_kelamin = $request->jenis_kelamin;
        $pelamar->tempat_lahir = $request->tempat_lahir;
        $pelamar->tgl_lahir = $request->tgl_lahir;
        $pelamar->status = $request->status;
        $pelamar->email = $request->email;
        $pelamar->telepon = $request->telepon;
        $pelamar->pendidikan = $request->pendidikan;
        $pelamar->tempat_pendidikan = $request->tempat_pendidikan;
        $pelamar->tempat_kerja_terakhir = $request->tempat_kerja_terakhir;
        $pelamar->pekerjaan_bekerja_terakhir = $request->pekerjaan_bekerja_terakhir;
        $pelamar->save();

        return redirect()->route('pelamar.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // proses hapus data USER
        $pelamar = Pelamar::find($id);
        $pelamar->delete();

        return redirect()->route('pelamar.index');
    }
}
