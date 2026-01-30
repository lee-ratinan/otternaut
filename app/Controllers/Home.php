<?php

namespace App\Controllers;

use CodeIgniter\HTTP\ResponseInterface;
use Config\Services;

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
                'max_users'    => 3,
                'max_services' => 5,
                'max_products' => 5,
                'features'     => [
                    lang('Pricing.features.email-support'),
                    lang('Pricing.features.basic-booking'),
                    lang('Pricing.features.sell-product'),
                ],
                'prices'       => [
                    'th' => [400, 4000]
                ],
                'discounted'   => [
                    'th' => [299, 2990]
                ]
            ],
            'standard' => [
                'available'    => false,
                'popular'      => true,
                'name'         => lang('Pricing.plans.standard.title'),
                'desc'         => lang('Pricing.plans.standard.desc'),
                'max_users'    => 10,
                'max_services' => 20,
                'max_products' => 20,
                'features'     => [
                    lang('Pricing.features.email-support'),
                    lang('Pricing.features.basic-and-advanced-booking'),
                    lang('Pricing.features.sell-product'),
                ],
                'prices'       => [
                    'th' => [800, 8000]
                ],
                'discounted'   => [
                    'th' => [599, 5990]
                ]
            ],
            'premium'  => [
                'available'    => false,
                'popular'      => false,
                'name'         => lang('Pricing.plans.premium.title'),
                'desc'         => lang('Pricing.plans.premium.desc'),
                'max_users'    => 30,
                'max_services' => 50,
                'max_products' => 50,
                'features'     => [
                    lang('Pricing.features.email-support'),
                    lang('Pricing.features.basic-and-advanced-booking'),
                    lang('Pricing.features.sell-product'),
                    lang('Pricing.features.store-webpage')
                ],
                'prices'       => [
                    'th' => [1800, 18000]
                ],
                'discounted'   => [
                    'th' => [1290, 12900]
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
     * Leadership page
     * @return string
     */
    public function leadership(): string
    {
        $locale      = $this->request->getLocale();
        $locale_data = $this->splitLocale($locale);
        $data        = [
            'page_slug' => 'leadership',
            'url_part'  => 'leadership',
            'locale'    => $locale,
            'language'  => $locale_data['language'],
            'country'   => $locale_data['country'],
        ];
        return view('leadership', $data);
    }

    /**
     * Choose region page
     * @return string
     */
    public function chooseRegion(): string
    {
        $locale      = $this->request->getLocale();
        $locale_data = $this->splitLocale($locale);
        $data        = [
            'page_slug' => 'choose-region',
            'url_part'  => 'choose-region',
            'locale'    => $locale,
            'language'  => $locale_data['language'],
            'country'   => $locale_data['country'],
        ];
        return view('choose-region', $data);
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
        try {
            $locale   = $this->request->getPost('locale');
            $this->request->setLocale($locale);
            $to       = getenv('CONTACT_EMAIL');
            $no_reply = getenv('NO_REPLY_EMAIL');
            $name     = $this->request->getPost('name');
            $from     = $this->request->getPost('email');
            $phone    = $this->request->getPost('phone');
            $subject  = $this->request->getPost('subject');
            $subject  = lang('Contact.form.fields.subject.' . $subject);
            $message  = $this->request->getPost('message');
            $date     = date('d M Y');
            // Send the email
            $email    = Services::email();
            $email->setTo($to);
            $email->setFrom($no_reply);
            $email->setReplyTo($from);
            $email->setSubject("[OtterNova Contact Form][$subject] From: $name - $date");
            $email->setMessage("Contact Form Submission\n\nName: $name\nEmail: $from\nPhone: $phone\nMessage: $message\nLanguage: $locale\n\nThis email is system generated.\nOtterNova");
            if ($email->send()) {
                return $this->response->setBody('OK');
            } else {
                return $this->response->setBody(lang('Contact.form.error'));
            }
        } catch (\Exception $e) {
            return $this->response->setBody(lang('Contact.form.error'));
        }
    }

    public function sitemap()
    {
        $languages  = [
            '',
            // Thailand
            '/th-th',
            '/en-th',
        ];
        $main_pages = [
            ['/', '2025-12-01', 'monthly', '1.0'],
            ['/pricing', '2025-12-01', 'monthly', '0.9'],
            ['/contact', '2025-12-08', 'monthly', '0.8'],
//            ['/leadership', '2025-12-08', 'monthly', '0.5'],
//            ['/choose-region', '2025-12-01', 'monthly', '0.5'],
            ['/terms-and-conditions', '2025-12-01', 'monthly', '0.5'],
            ['/privacy-policy', '2025-12-01', 'monthly', '0.5'],
        ];
        $xml        = [];
        foreach ($languages as $lang) {
            foreach ($main_pages as $page) {
                $xml[] = [
                    'loc'        => base_url($lang . $page[0]),
                    'lastmod'    => $page[1],
                    'changefreq' => $page[2],
                    'priority'   => $page[3],
                ];
            }
        }
        $final_xml = '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xhtml="http://www.w3.org/1999/xhtml">';
        foreach ($xml as $item) {
            $final_xml .= '<url>';
            foreach ($item as $key => $value) {
                $final_xml .= '<' . $key . '>' . $value . '</' . $key . '>';
            }
            $final_xml .= '</url>';
        }
        $final_xml .= '</urlset>';
        return $this->response->setXML($final_xml);
    }

    public function show404(): string|ResponseInterface
    {
        $method = $this->request->getMethod();
        $lang         = $this->request->getLocale();
        $businessName = '';
        $data    = [
            'slug'         => 'not-found',
            'lang'         => $lang,
            'businessName' => $businessName
        ];
        return view('_404', $data);
    }
}
