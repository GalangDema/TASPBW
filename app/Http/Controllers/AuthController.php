<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function user(){
        $user = User::paginate(10);
    return view('user', ['user' => $user]);

    }

    public function formuliruser(){
        return view('formulirtambahuser');
    }

    public function saveuser(Request $request){
        User::create([
            'nik_user' => $request->nik_user,
            'nama_user' => $request->nama_user,
            'no_hp' => $request->no_hp,
            'password' => bcrypt($request->password)
        ]);

        return redirect('/user');
    }

    public function login(){
        return view('/login');
    }

    public function cekLogin(Request $request){
        if(!Auth::attempt(['no_hp' => $request->no_hp, 'password' => $request->password]))
        {
            return redirect('/login');
        }else{
            return redirect('/mahasiswa');
        }
    }

    public function pencarian_user(Request $request)
    {   $cari = $request->cari;
        $user = User::where('nik_user', 'like', '%'.$cari.'%')->orWhere('nama_user', 'like', '%'.$cari.'%')->paginate(10);
        return view('user', ['user' => $user], ['cek'=>'user']);
    }

    public function edituser($id)
    {
        $user = User::find($id);
        return view('formedituser', ['user' => $user]);
    }

    public function updateuser($id, Request $request)
    {
        $user= User::find($id);
        $user->nik_user = $request-> nik_user;
        $user->nama_user = $request-> nama_user;
        $user->no_hp = $request-> no_hp;
        $user->save();
        return redirect('/user')->with('alert', 'Data User Berhasil diupdate');
    }

    public function hapususer($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/user')->with('alert', 'Data User Berhasil dihapus');
    }

    public function logout(){
        Auth::logout();
        return redirect('/login')->with('alert-logout','Anda Berhasil Logout');
    }

}
