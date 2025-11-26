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

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    // PAGES
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

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

    /**
     * Pricing page
     * @return string
     */
    public function pricing(): string
    {
        $locale      = $this->request->getLocale();
        $locale_data = $this->splitLocale($locale);
        $data        = [
            'page_slug'  => 'pricing',
            'url_part'   => 'pricing',
            'locale'     => $locale,
            'language'   => $locale_data['language'],
            'country'    => $locale_data['country'],
        ];
        return view('pricing', $data);
    }

    /**
     * Contact page
     * @return string
     */
    public function contact(): string
    {
        $locale      = $this->request->getLocale();
        $locale_data = $this->splitLocale($locale);
        $data        = [
            'page_slug'  => 'contact',
            'url_part'   => 'contact',
            'locale'     => $locale,
            'language'   => $locale_data['language'],
            'country'    => $locale_data['country'],
        ];
        return view('contact', $data);
    }

    /**
     * Terms and Conditions page
     * @return string
     */
    public function termsAndConditions(): string
    {
        $locale      = $this->request->getLocale();
        $locale_data = $this->splitLocale($locale);
        $data        = [
            'page_slug'  => 'terms-and-conditions',
            'url_part'   => 'terms-and-conditions',
            'locale'     => $locale,
            'language'   => $locale_data['language'],
            'country'    => $locale_data['country'],
        ];
        return view('terms-and-conditions', $data);
    }

    /**
     * Privacy Policy page
     * @return string
     */
    public function privacyPolicy(): string
    {
        $locale      = $this->request->getLocale();
        $locale_data = $this->splitLocale($locale);
        $data        = [
            'page_slug'  => 'privacy-policy',
            'url_part'   => 'privacy-policy',
            'locale'     => $locale,
            'language'   => $locale_data['language'],
            'country'    => $locale_data['country'],
        ];
        return view('privacy-policy', $data);
    }

}
