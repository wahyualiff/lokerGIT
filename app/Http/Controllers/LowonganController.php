<?php

namespace App\Http\Controllers;

use App\Models\Lowongan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LowonganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Halaman utama lowongan
        $user = Auth::user();
        if ($user->hasRole('perusahaan') or $user->hasRole('admin')) {
            // dapat mengakses data lowongan
            $datalowongan = lowongan::all();
            return view('lowongan_index', ['lowongan' => $datalowongan]);
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
        // Tambah data lowongan
        return view('lowongan_tambah');
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
        Lowongan::create([
            'gambar' => $request->gambar,
            'perusahaan' => $request->perusahaan,
            'email' => $request->email,
            'judul' => $request->judul,
            'alamat' => $request->alamat,
            'deskripsi' => $request->deskripsi,
            'tgl_buka' => $request->tgl_buka,
            'tgl_tutup' => $request->tgl_tutup,
        ]);
        return redirect()->route('lowongan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Lihat lowongan
        $lowongan = Lowongan::where('id', $id)->first();
        return view('lowongan_detail', ['lowongan' => $lowongan]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Edit data lowongan
        $datalowongan = Lowongan::find($id);
        return view('lowongan_edit', ['lowongan' => $datalowongan]);
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
        // Proses edit data lowongan
        $lowongan = Lowongan::find($id);
        $lowongan->gambar = $request->gambar;
        $lowongan->perusahaan = $request->perusahaan;
        $lowongan->email = $request->email;
        $lowongan->judul = $request->judul;
        $lowongan->alamat = $request->alamat;
        $lowongan->deskripsi = $request->deskripsi;
        $lowongan->tgl_buka = $request->tgl_buka;
        $lowongan->tgl_tutup = $request->tgl_tutup;
        $lowongan->save();

        return redirect()->route('lowongan.index');
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
        $lowongan = Lowongan::find($id);
        $lowongan->delete();

        return redirect()->route('lowongan.index');
    }
}
