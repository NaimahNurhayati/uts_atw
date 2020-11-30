<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\artikel;

class ArtikelController extends Controller
{
  function index()
  {
    $user = request()->user();
    $data['list_artikel'] = $user->artikel;
    return view('artikel.index', $data);
  }

  function create()
  {
    return view('artikel.create');
  }

  function store()
  {
    $artikel = new artikel;
    $artikel->id_user = request()->user()->id;
    $artikel->judul = request('judul');
    $artikel->konten = request('konten');
    $artikel->tag = request('tag');
    $artikel->save();

    return redirect('artikel')->with('success', 'Data Berhasil Ditambahkan');
  }

  function show(artikel $artikel)
  {
    $data['artikel'] = $artikel;
    return view('artikel.show', $data);
  }

  function edit(artikel $artikel)
  {
    $data['artikel'] = $artikel;
    return view('artikel.edit', $data);
  }

  function update(artikel $artikel)
  {
    $artikel->judul = request('judul');
    $artikel->konten = request('konten');
    $artikel->tag = request('tag');
    $artikel->save();

    return redirect('artikel')->with('warning', 'Data Berhasil Diedit');
  }

  function destroy(artikel $artikel)
  {
    $artikel->delete();

    return redirect('artikel')->with('danger', 'Data Berhasil Dihapus');
  }
}
