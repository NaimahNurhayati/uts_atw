<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\KomentarController;
use App\Models\artikel;
use App\Models\komentar;


class ArtikeluserController extends Controller
{
  function showArtikel()
  {
    $data['list_artikel'] = artikel::all();
    return view('templateuser.artikeluser.artikel', $data);
  }

  function show(artikel $artikel)
  {
    $data['artikel'] = $artikel;
    $dataa['komentar'] = komentar::all();
    return view('templateuser.artikeluser.show', $data, $dataa);
  }
  function komentar(komentar $komentar)
  {
    $dataa['komentar'] = $komentar;
    return view('templateuser.artikeluser.show', $dataa);
  }
}
