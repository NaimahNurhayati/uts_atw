<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use \App\Models\Artikel;
use \App\Models\komentar;

class BerandaController extends Controller
{
  function showBeranda()
  {
    return view('admin.beranda');
  }

  function showTemplate(artikel $artikel)
  {
    $data['list_artikel'] = artikel::all();
    return view('templateuser.home', $data);
  }

  function filter()
  {
    $judul = request('judul');
    $tag = request('tag');
    $data['tanggal_min'] = $tanggal_min = request('tanggal_min');
    $data['tanggal_max'] = $tanggal_max = request('tanggal_max');
    // where untuk menampilkan nama
    $data['list_artikel'] = artikel::where('judul', 'like', "%$judul%")->where('tag', [$tag])->whereBetween('tanggal', [$tanggal_min, $tanggal_max])->get();

    return view('templateuser.home', $data);
  }

  // function showArtikel()
  // {
  //   return view('templateuser.artikeluser.artikel');
  // }

  function showkontak()
  {
    return view('templateuser.kontak');
  }

  // function showDetail()
  // {
  //   return view('templateuser.artikeluser.show');
  // }
}
