<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormulirController extends Controller
{
    public function index()
    {
        return view('formulir');
    }
    public function submit(Request $request)
    {
        // return "masuk gan";
        $messagesError = [
            'required' => 'Wajib diisi!',
            'min' => 'Minimal :min karakter!',
            'numeric' => 'Masukkan nilai angka!',
            'between' => 'Nilai antara 35.0 - 45.5!',
            'ResepInput.max' => 'Maksimal ukuran 2MB!',
            'mimes' => 'Masukkan file dengan ekstensi yang sesuai!'
        ];

        $this->validate($request, [
            'KondisiInput' => 'required|min:10',
            'SuhuInput' => 'required|numeric|between:35.0,45.5',
            'ResepInput' => 'required|mimes:pdf,png,jpeg,jpg|max:2048'
        ], $messagesError);
        // return "masuk gan";
        // $request->Photo = $request->PhotoInput->store('images', 'public');
        session()->flash('success', '<div class="border border-t-0 border-green-400 rounded-b bg-green-100 p-2 text-green-700">Data Berhasil Di Input</div>');

        return redirect('/formulir');
    }
}
