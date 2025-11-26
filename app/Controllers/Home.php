<?php

namespace App\Controllers;

class Home extends BaseController
{

    /**
     * Split the locale
     * Available locales are (and will be)
     * - th-th, en-th  for Thailand
     * - en-sg         for Singapore       (future)
     * - ja-jp, en-jp  for Japan           (future)
     * - zh-tw, en-tw  for Taiwan          (future)
     * - ms-my, en-my  for Malaysia        (future)
     * - id-id, en-id  for Indonesia       (future)
     * - en-ph         for the Philippines (future)
     * - vt-vn, en-vn  for Vietnam         (future)
     * @param string $locale IETF BCP 47 language tag
     * @return array
     */
    private function splitLocale(string $locale): array
    {
        $split = explode('-', $locale);
        return [
            'language' => $split[0],
            'country'  => $split[1],
        ];
    }

    /**
     * Home page
     * @return string
     */
    public function index(): string
    {
        $locale      = $this->request->getLocale();
        $locale_data = $this->splitLocale($locale);
        $data        = [
            'page_slug'  => 'home',
            'url_part'   => '',
            'locale'     => $locale,
            'language'   => $locale_data['language'],
            'country'    => $locale_data['country'],
        ];
        return view('home', $data);
    }
}
