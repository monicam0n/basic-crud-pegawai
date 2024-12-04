<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index(){
        $pegawai = Pegawai::all();
        return view('pegawai.index', ['pegawai' => $pegawai]);
    }

    public function create(){

        return view('pegawai.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'posisi' => 'required',
            'gaji' => 'required|numeric'
        ]);

        $newPegawai = Pegawai::create($data);

        return redirect(route('pegawai.index'))->with('success', 'Data berhasil ditambahkan');
    }

    public function edit(Pegawai $pegawai, Request $request){
        return view('pegawai.edit', ['pegawai' => $pegawai]);
    }

    public function update(Pegawai $pegawai, Request $request){
        $data = $request->validate([
            'name' => 'required',
            'posisi' => 'required',
            'gaji' => 'required|numeric'
        ]);

        $pegawai->update($data);

        return redirect(route('pegawai.index'))->with('success', 'Data Pegawai berhasil diperbarui');

    }

    public function delete(Pegawai $pegawai){
        $pegawai->delete();
        return redirect(route('pegawai.index'))->with('success', 'Data Pegawai Berhasil dihapus');
    }
}
