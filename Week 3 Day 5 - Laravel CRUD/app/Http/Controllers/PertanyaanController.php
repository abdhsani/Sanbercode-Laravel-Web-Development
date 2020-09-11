<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PertanyaanController extends Controller
{
    public function index()
    {
        $items = DB::table('pertanyaan')->get();

        return view('pertanyaan.index', compact('items'));
    }

    public function create()
    {
        return view('pertanyaan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|max:255',
            'isi' => 'required'
        ]);

        $currentTime = Carbon::now()->toDateTimeString();

        $query = DB::table('pertanyaan')->insert([
            'judul' => $request['judul'],
            'isi' => $request['isi'],
            'tanggal_dibuat' => $currentTime,
            'tanggal_diperbaharui' => $currentTime
        ]);

        return redirect('/pertanyaan')->with('success', 'Pertanyaan berhasil ditambahkan');
    }

    public function show($id)
    {
        $item = DB::table('pertanyaan')->where('id', $id)->first();

        return view('pertanyaan.detail', compact('item'));
    }

    public function edit($id)
    {
        $item = DB::table('pertanyaan')->where('id', $id)->first();

        return view('pertanyaan.edit', compact('item'));
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'judul' => 'required|max:255',
            'isi' => 'required'
        ]);

        $currentTime = Carbon::now()->toDateTimeString();

        $query = DB::table('pertanyaan')
            ->where('id', $id)
            ->update([
                'judul' => $request['judul'],
                'isi' => $request['isi'],
                'tanggal_diperbaharui' => $currentTime
            ]);

        return redirect('/pertanyaan')->with('success', 'Pertanyaan berhasil diperbaharui');
    }

    public function destroy($id)
    {
        $query = DB::table('pertanyaan')->where('id', $id)->delete();

        return redirect('/pertanyaan')->with('success', 'Pertanyaan berhasil dihapus');
    }
}
