<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class PagesController extends Controller
{
    public function index()
    {
      // работаем с кэшем
      $key = 'global_data';

      $data = Cache::get($key);

      if($data === null) {
          $data = json_decode(file_get_contents('https://tutor-math.com.ua/api/public/pr-data'), true);
          Cache::put($key, $data, 86400);
      }

      return view('promos.online', [
        'data' => $data,
        'slug' => 'online',
      ]);

    }

    public function promoPage($slug)
    {
      // работаем с кэшем
      $key = 'global_data';

      $data = Cache::get($key);

      if($data === null) {
          $data = json_decode(file_get_contents('https://tutor-math.com.ua/api/public/pr-data'), true);
          Cache::put($key, $data, 86400);
      }
      // очищаем слагчасть от параметров
      $clear_slug = Str::before($slug, '?');

      if (!$clear_slug) {
        $clear_slug = 'online';
      }

      try {
        return view('promos.' . $clear_slug, [
          'data' => $data,
          'slug' => $clear_slug,
        ]);
      } catch (\Exception $e) {
        abort(404);
      }

    }
}
