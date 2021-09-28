<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function promoOnline()
    {
      return view('promos.online', [
        // 'blocks' => false,
      ]);
    }
}
