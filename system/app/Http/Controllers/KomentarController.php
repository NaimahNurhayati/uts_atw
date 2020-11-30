<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\komentar;

class KomentarController extends Controller
{
  function index()
  {
    $data['list_komentar'] = komentar::all();
    return view('komentar.index', $data);
  }

  function create()
  {
    return view('komentar.create');
  }

  function store()
  {
    $komentar = new komentar;
    $komentar->nama = request('judul');
    $komentar->komentar = request('konten');
    $komentar->save();

    return redirect('komentar')->with('success', 'Data Berhasil Ditambahkan');
  }

  function show(komentar $komentar)
  {
    $data['komentar'] = $komentar;
    return view('komentar.show', $data);
  }

  function edit(komentar $komentar)
  {
    $data['komentar'] = $komentar;
    return view('komentar.edit', $data);
  }

  function update(komentar $komentar)
  {
    $komentar->nama = request('judul');
    $komentar->komentar = request('konten');
    $komentar->save();

    return redirect('komentar')->with('warning', 'Data Berhasil Diedit');
  }

  function destroy(komentar $komentar)
  {
    $komentar->delete();

    return redirect('komentar')->with('danger', 'Data Berhasil Dihapus');
  }
}
