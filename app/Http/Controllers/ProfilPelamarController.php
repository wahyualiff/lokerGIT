<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProfilPelamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Halaman utama pelamar_profil
        $user = Auth::user();
        if ($user->hasRole('pelamar') or $user->hasRole('perusahaan')) {
            // dapat mengakses data siswa
            $datausers = User::all();
            return view('pelamar_profil', ['pelamar_profil' => $datausers]);
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
        // // Tambah data pelamar_profil
        // return view(pelamar_profil');
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
        User::create([
            'email' => $request->email,
            'nama' => $request->nama,
            'tgl_lahir' => $request->tgl_lahir,
            'alamat' => $request->alamat,
        ]);
        return redirect()->route('pelamar_profil.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Detail pelamar_profil
        $pelamar_profil = User::where('id', $id)->first();
        return view('detail_pelamar_profil', ['pelamar_profil' => $pelamar_profil]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Edit data pelamar_profil
        $datausers = User::find($id);
        return view('pelamar_profil', ['pelamar_profil' => $datausers]);
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
        // Proses edit data pelamar_profil
        $pelamar_profil = User::find($id);
        $pelamar_profil->name = $request->name;
        $pelamar_profil->email = $request->email;

        $pelamar_profil->tgl_lahir = $request->tgl_lahir;
        $pelamar_profil->alamat = $request->alamat;
        $pelamar_profil->save();

        return redirect()->route('pelamar_profil.index');
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
        $pelamar_profil = User::find($id);
        $pelamar_profil->delete();

        return redirect()->route('pelamar_profil.index');
    }
}
