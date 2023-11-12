<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class PagesController extends Controller
{
    public function promoPage(Request $request)
    {
        $slug       = $request->segment(1, 'online');
        $language   = $this->setLanguage($slug);

        $data = cache()->remember('global_data_' . $language, 86400, function () use ($language) {
            return json_decode(file_get_contents('https://tutor-math.com.ua/api/public/pr-data?language=' . $language), true);
        });

        try {
            return view('promos.' . $slug, [
                'data' => $data,
                'slug' => $slug,
                'language' => $language,
            ]);
        } catch (\Exception $e) {
            abort(404);
        }
    }

    /**
     * @param string $slug
     * @return string
     */
    private function setLanguage(string $slug): string
    {
        $lang = Str::before($slug, '-');
        $language = in_array($lang, self::languages()) ? $lang : 'ru';
        App::setLocale($language);
        return $language;
    }

    /**
     * @return array
     */
    private static function languages(): array
    {
        return [
            'uk',
            'ru'
        ];
    }
}
