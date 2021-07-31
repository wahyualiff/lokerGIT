<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Halaman utama users
        $user = Auth::user();
        if ($user->hasRole('admin')) {
            // dapat mengakses data users
            $datausers = User::all();
            return view('user_index', ['users' => $datausers]);
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
        // Tambah data users
        return view('user_tambah');
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
            'name' => $request->name,
            'role' => $request->role,
            'alamat' => $request->alamat,
            'kota' => $request->kota,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'status' => $request->status,
            'email' => $request->email,
            'password' => $request->password,
            'telepon' => $request->telepon,
            'pendidikan' => $request->pendidikan,
            'tempat_pendidikan' => $request->tempat_pendidikan,
            'tempat_kerja' => $request->tempat_kerja,
            'pekerjaan_terakhir' => $request->pekerjaan_terakhir,
        ]);
        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Lihat users
        $users = User::where('id', $id)->first();
        return view('user_detail', ['users' => $users]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Edit data users
        $datausers = User::find($id);
        return view('user_edit', ['users' => $datausers]);
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
        // Proses edit data users
        $users = User::find($id);
        $users->name = $request->name;
        $users->role = $request->role;
        $users->alamat = $request->alamat;
        $users->kota = $request->kota;
        $users->jenis_kelamin = $request->jenis_kelamin;
        $users->tempat_lahir = $request->tempat_lahir;
        $users->tgl_lahir = $request->tgl_lahir;
        $users->status = $request->status;
        $users->email = $request->email;
        $users->password = $request->password;
        $users->telepon = $request->telepon;
        $users->pendidikan = $request->pendidikan;
        $users->tempat_pendidikan = $request->tempat_pendidikan;
        $users->tempat_kerja = $request->tempat_kerja;
        $users->pekerjaan_terakhir = $request->pekerjaan_terakhir;
        $users->save();

        return redirect()->route('user.index');
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
        $users = User::find($id);
        $users->delete();

        return redirect()->route('user.index');
    }
}
