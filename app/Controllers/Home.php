<?php

namespace App\Controllers;

use CodeIgniter\HTTP\ResponseInterface;

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
            'page_slug' => 'home',
            'url_part'  => '',
            'locale'    => $locale,
            'language'  => $locale_data['language'],
            'country'   => $locale_data['country'],
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
        $packages    = [
//            'free'     => [
//                'available'    => false,
//                'popular'      => false,
//                'name'         => lang('Pricing.plans.free.title'),
//                'desc'         => lang('Pricing.plans.free.desc'),
//                'max_users'    => 1,
//                'max_services' => 1,
//                'max_products' => 0,
//                'features'     => [
//                    lang('Pricing.features.email-support'),
//                    lang('Pricing.features.basic-booking')
//                ],
//                'prices'       => [
//                    'th' => [0, 0]
//                ]
//            ],
            'basic'    => [
                'available'    => false,
                'popular'      => false,
                'name'         => lang('Pricing.plans.basic.title'),
                'desc'         => lang('Pricing.plans.basic.desc'),
                'max_users'    => 10,
                'max_services' => 10,
                'max_products' => 10,
                'features'     => [
                    lang('Pricing.features.email-support'),
                    lang('Pricing.features.basic-booking'),
                    lang('Pricing.features.sell-product'),
                ],
                'prices'       => [
                    'th' => [400, 4200]
                ],
                'discounted'   => [
                    'th' => [320, 3360]
                ]
            ],
            'standard' => [
                'available'    => false,
                'popular'      => true,
                'name'         => lang('Pricing.plans.standard.title'),
                'desc'         => lang('Pricing.plans.standard.desc'),
                'max_users'    => 20,
                'max_services' => 30,
                'max_products' => 30,
                'features'     => [
                    lang('Pricing.features.email-support'),
                    lang('Pricing.features.basic-and-advanced-booking'),
                    lang('Pricing.features.sell-product'),
                ],
                'prices'       => [
                    'th' => [750, 7800]
                ],
                'discounted'   => [
                    'th' => [600, 6240]
                ]
            ],
            'premium'  => [
                'available'    => false,
                'popular'      => false,
                'name'         => lang('Pricing.plans.premium.title'),
                'desc'         => lang('Pricing.plans.premium.desc'),
                'max_users'    => 50,
                'max_services' => 100,
                'max_products' => 100,
                'features'     => [
                    lang('Pricing.features.email-support'),
                    lang('Pricing.features.basic-and-advanced-booking'),
                    lang('Pricing.features.sell-product'),
                    lang('Pricing.features.store-webpage')
                ],
                'prices'       => [
                    'th' => [1200, 12000]
                ],
                'discounted'   => [
                    'th' => [960, 9600]
                ]
            ]
        ];
        $data = [
            'page_slug' => 'pricing',
            'url_part'  => 'pricing',
            'locale'    => $locale,
            'language'  => $locale_data['language'],
            'country'   => $locale_data['country'],
            'packages'  => $packages,
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
            'page_slug' => 'contact',
            'url_part'  => 'contact',
            'locale'    => $locale,
            'language'  => $locale_data['language'],
            'country'   => $locale_data['country'],
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
            'page_slug' => 'terms-and-conditions',
            'url_part'  => 'terms-and-conditions',
            'locale'    => $locale,
            'language'  => $locale_data['language'],
            'country'   => $locale_data['country'],
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
            'page_slug' => 'privacy-policy',
            'url_part'  => 'privacy-policy',
            'locale'    => $locale,
            'language'  => $locale_data['language'],
            'country'   => $locale_data['country'],
        ];
        return view('privacy-policy', $data);
    }

    /**
     * Handle sending email for contact form
     * @return ResponseInterface
     */
    public function contactForm(): ResponseInterface
    {
        $locale  = $this->request->getPost('locale');
        $this->request->setLocale($locale);
        $name    = $this->request->getPost('name');
        $email   = $this->request->getPost('email');
        $phone   = $this->request->getPost('phone');
        $subject = $this->request->getPost('subject');
        $subject = lang('Contact.form.fields.subject.' . $subject);
        $message = $this->request->getPost('message');
        $email_subject = "[OTTERNOVA FORM][$subject] From: $name";
        $email_content = "OtterNova Contact Form\n\nName: $name\nEmail: $email\nPhone: $phone\nMessage: $message\nLocale: $locale";
        return $this->response->setJSON([$email_subject, $email_content]);
    }
}
