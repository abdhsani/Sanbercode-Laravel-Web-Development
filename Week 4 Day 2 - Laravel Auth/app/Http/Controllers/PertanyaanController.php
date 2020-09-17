<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Pertanyaan;
use Illuminate\Support\Facades\Auth;

class PertanyaanController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {
        // $items = DB::table('pertanyaan')->get();
        $items = Pertanyaan::all();

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

        $time = Carbon::now()->toDateTimeString();

        /* PAKE METODE QUERY
            $query = DB::table('pertanyaan')->insert([
             'judul' => $request['judul'],
             'isi' => $request['isi'],
             'tanggal_dibuat' => $time,
             'tanggal_diperbaharui' => $time
         ]); */

        /* PAKE METODE ELOQUENT ORM
        $pertanyaan = new Pertanyaan;
        $pertanyaan->judul = $request['judul'];
        $pertanyaan->isi = $request['isi'];
        $pertanyaan->tanggal_dibuat = $time;
        $pertanyaan->tanggal_diperbaharui = $time;
        $pertanyaan->save();  */

        // DENGAN MASS ASSIGNMENT

        $pertanyaan = Pertanyaan::create([
            'judul' => $request['judul'],
            'isi' => $request['isi'],
            'tanggal_dibuat' => $time,
            'tanggal_diperbaharui' => $time,
            // 'profil_id' => Auth::user()->id
        ]);

        return redirect('/pertanyaan')->with('success', 'Pertanyaan berhasil ditambahkan');
    }

    public function show($id)
    {
        // $item = DB::table('pertanyaan')->where('id', $id)->first();
        $item = Pertanyaan::find($id);

        return view('pertanyaan.detail', compact('item'));
    }

    public function edit($id)
    {
        // $item = DB::table('pertanyaan')->where('id', $id)->first();
        $item = Pertanyaan::find($id);

        return view('pertanyaan.edit', compact('item'));
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'judul' => 'required|max:255',
            'isi' => 'required'
        ]);

        $time = Carbon::now()->toDateTimeString();

        // $query = DB::table('pertanyaan')
        //     ->where('id', $id)
        //     ->update([
        //         'judul' => $request['judul'],
        //         'isi' => $request['isi'],
        //         'tanggal_diperbaharui' => $time
        //     ]);

        Pertanyaan::where('id', $id)->update([
            'judul' => $request['judul'],
            'isi' => $request['isi'],
            'tanggal_diperbaharui' => $time
        ]);

        return redirect('/pertanyaan')->with('success', 'Pertanyaan berhasil diperbaharui');
    }

    public function destroy($id)
    {
        // $query = DB::table('pertanyaan')->where('id', $id)->delete();

        Pertanyaan::destroy($id);

        return redirect('/pertanyaan')->with('success', 'Pertanyaan berhasil dihapus');
    }
}
