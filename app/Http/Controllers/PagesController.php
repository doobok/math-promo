<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class PagesController extends Controller
{
    public function promoPage($slug)
    {
      $key = 'global_data';

      $data = Cache::get($key);

      if($data === null) {
          $data = json_decode(file_get_contents('https://tutor-math.com.ua/api/public/pr-data'), true);
          Cache::put($key, $data, 86400);
      }

      try {
        return view('promos.' . $slug, [
          'data' => $data,
          'slug' => $slug,
        ]);
      } catch (\Exception $e) {
        abort(404);
      }

    }
}
