<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class Authcontroller extends Controller
{
    function index()
    {
        return view('login');
    }

    function index_register()
    {
        return view('register');
    }

    function post_register(Request $request)
    {
        // dd($request->all());
        $rules = [
            'nama' => 'required|min:3|max:35',
            'email' => 'required|email',
            'password' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
            'tgl_lahir' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->route('index.register')->with(['status' => 'Masukan data dengan benar', 'mssg' => 'Masukan data dengan benar']);
        }

        $checke = User::select('*')->whereemail($request->email)->first();
        if ($checke) {
            return redirect()->route('index.register')->with(['status' => 'Email anda sudah terdaftar', 'mssg' => 'Registrasi gagal! Email telah digunakan']);
        }

        // $user = new User();
        $pass = Hash::make($request->password);
        $simpan = User::insert([
            'nama' => $request->nama,
            'email' => strtolower($request->email),
            'password' => $pass,
            'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tgl_lahir' => $request->tgl_lahir
        ]);

        if ($simpan) {
            return redirect()->route('index.register')->with(['status' => true, 'mssg' => 'Registrasi berhasil!', 'jdl' => 'Berhasil!', 'icon' => 'success']);
        } else {
            return redirect()->route('index.register')->with(['status' => true, 'mssg' => 'Registrasi gagal!', 'jdl' => 'Gagal!', 'icon' => 'error']);
        }
    }

    function post_login(Request $request)
    {
        // dd($request->all());
        $rules = [
            'email' => 'required',
            'password' => 'required'
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->route('index.login')->with(['status' => true, 'mssg' => 'Masukan data dengan benar']);
        }

        $data = [
            'email'     => $request->email,
            'password'  => $request->password,
        ];

        Auth::guard('web')->attempt($data);

        // dd($a);

        if (Auth::guard('web')->check()) { // true sekalian session field di users nanti bisa dipanggil via Auth
            //Login Success
            return redirect()->route('index');
        } else { // true

            //Login Fail
            // Session::flash();
            return redirect()->route('index.login')->with(['status' => true, 'mssg' => 'Masukan data dengan benar']);
        }
    }
}
