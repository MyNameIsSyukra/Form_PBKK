<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class FormController extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|min:3|max:30',
            'email' => 'required|email:rfc',
            'tanggalLahir' => 'required|date|before:today',
            'skor' => 'required|numeric|between:2.00,99.99',
            'foto' => 'required|max:2048|mimes:jpg,jpeg,png'
        ]);

        $request->foto->storeAs('public/images', $request->foto->getClientOriginalName());

        $results = [
            'nama' => $request->nama,
            'email' => $request->email,
            'tanggalLahir' => $request->tanggalLahir,
            'skor' => $request->skor,
            'foto' => $request->foto->getClientOriginalName(),
        ];

        return redirect('/result')->with(['result' => $results, 'status' => 'success']);
    }

    public function result() {
        $results = session()->get('result');
        return view('result')->with(['results' => $results, 'success' => 'Submission Successful']);
    }
}