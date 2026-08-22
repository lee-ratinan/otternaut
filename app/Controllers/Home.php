<?php

namespace App\Controllers;

use CodeIgniter\HTTP\ResponseInterface;
use Config\Services;

class Home extends BaseController
{

    /**
     * Split the locale
     * Available locales are (and will be)
     * - th-TH, en-TH  for Thailand
     * - en-SG         for Singapore       (future)
     * - ja-JP, en-JP  for Japan           (future)
     * - zh-TW, en-TW  for Taiwan          (future)
     * - ms-MY, en-MY  for Malaysia        (future)
     * - id-ID, en-ID  for Indonesia       (future)
     * - en-PH         for the Philippines (future)
     * - vt-VN, en-VN  for Vietnam         (future)
     * @param string $locale IETF BCP 47 language tag
     * @return array
     */
    private function splitLocale(string $locale): array
    {
        $split = explode('-', $locale);
        return [
            'language' => $split[0],
            'country'  => strtolower($split[1])
        ];
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    // PAGES
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    /**
     * Home page
     * @return string|ResponseInterface
     */
    public function index(): string|ResponseInterface
    {
        $locale      = $this->request->getLocale();
        $bypass      = $this->request->getGet('dv');
        if (in_array($locale, ['en-TH', 'th-TH']) && '1' !== $bypass) {
            return redirect()->to($locale . '/coming-soon');
        }
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
     * Home page
     * @return string
     */
    public function comingSoon(): string
    {
        $locale      = $this->request->getLocale();
        $businessName = lang('System.site-name');
        $data         = [
            'slug'         => 'coming-soon',
            'lang'         => $locale,
            'businessName' => $businessName
        ];
        return view('coming-soon', $data);
    }

    /**
     * Solutions / Mart page
     * @return string
     */
    public function solutionsMart(): string
    {
        $locale      = $this->request->getLocale();
        $locale_data = $this->splitLocale($locale);
        $data = [
            'page_slug' => 'solutions-mart',
            'url_part'  => 'solutions/mart',
            'locale'    => $locale,
            'language'  => $locale_data['language'],
            'country'   => $locale_data['country'],
        ];
        return view('solutions-mart', $data);
    }

    /**
     * Solutions / Page page
     * @return string
     */
    public function solutionsPage(): string
    {
        $locale      = $this->request->getLocale();
        $locale_data = $this->splitLocale($locale);
        $data = [
            'page_slug' => 'solutions-page',
            'url_part'  => 'solutions/page',
            'locale'    => $locale,
            'language'  => $locale_data['language'],
            'country'   => $locale_data['country'],
        ];
        return view('solutions-page', $data);
    }

    /**
     * Pricing / Mart page
     * @return string
     */
    public function pricingMart(): string
    {
        $locale      = $this->request->getLocale();
        $locale_data = $this->splitLocale($locale);
        $packages    = [
            'basic'    => [
                'available'    => false,
                'popular'      => false,
                'name'         => lang('Pricing.mart.plans.basic.title'),
                'desc'         => lang('Pricing.mart.plans.basic.desc'),
                'max_users'    => 3,
                'max_services' => 5,
                'max_products' => 5,
                'features'     => [
                    lang('Pricing.features.email-support'),
                    lang('Pricing.features.basic-booking'),
                    lang('Pricing.features.sell-product'),
                ],
                'prices'       => [
                    'th' => [400, 4000],
                    'sg' => [400, 4000],
                    'my' => [400, 4000],
                    'jp' => [400, 4000],
                    'tw' => [400, 4000],
                ],
                'discounted'   => [
                    'th' => [299, 2990],
                    'sg' => [299, 2990],
                    'my' => [299, 2990],
                    'jp' => [299, 2990],
                    'tw' => [299, 2990],
                ]
            ],
            'standard' => [
                'available'    => false,
                'popular'      => true,
                'name'         => lang('Pricing.mart.plans.standard.title'),
                'desc'         => lang('Pricing.mart.plans.standard.desc'),
                'max_users'    => 10,
                'max_services' => 20,
                'max_products' => 20,
                'features'     => [
                    lang('Pricing.features.email-support'),
                    lang('Pricing.features.basic-and-advanced-booking'),
                    lang('Pricing.features.sell-product'),
                ],
                'prices'       => [
                    'th' => [800, 8000],
                    'sg' => [800, 8000],
                    'my' => [800, 8000],
                    'jp' => [800, 8000],
                    'tw' => [800, 8000],
                ],
                'discounted'   => [
                    'th' => [599, 5990],
                    'sg' => [599, 5990],
                    'my' => [599, 5990],
                    'jp' => [599, 5990],
                    'tw' => [599, 5990],
                ]
            ],
            'premium'  => [
                'available'    => false,
                'popular'      => false,
                'name'         => lang('Pricing.mart.plans.premium.title'),
                'desc'         => lang('Pricing.mart.plans.premium.desc'),
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
                    'th' => [1800, 18000],
                    'sg' => [1800, 18000],
                    'my' => [1800, 18000],
                    'jp' => [1800, 18000],
                    'tw' => [1800, 18000],
                ],
                'discounted'   => [
                    'th' => [1290, 12900],
                    'sg' => [1290, 12900],
                    'my' => [1290, 12900],
                    'jp' => [1290, 12900],
                    'tw' => [1290, 12900],
                ]
            ]
        ];
        $data = [
            'page_slug' => 'pricing-mart',
            'url_part'  => 'pricing/mart',
            'locale'    => $locale,
            'language'  => $locale_data['language'],
            'country'   => $locale_data['country'],
            'packages'  => $packages,
        ];
        return view('pricing-mart', $data);
    }

    /**
     * Pricing / Page page
     * @return string
     */
    public function pricingPage(): string
    {
        $locale      = $this->request->getLocale();
        $locale_data = $this->splitLocale($locale);
        $packages    = [
            'boost'    => [
                'available'    => false,
                'popular'      => false,
                'name'         => lang('Pricing.page.plans.boost.title'),
                'desc'         => lang('Pricing.page.plans.boost.desc'),
                'max_images'   => '10MB',
                'max_pages'    => '2',
                'with_domain'  => false,
                'features'     => [
                    lang('Pricing.features.email-support'),
                    lang('Pricing.features.basic-page-builder'),
                ],
                'prices'       => [
                    'th' => [400, 4000],
                ],
                'discounted'   => [
                    'th' => [299, 2990],
                ]
            ],
            'velocity' => [
                'available'    => false,
                'popular'      => true,
                'name'         => lang('Pricing.page.plans.velocity.title'),
                'desc'         => lang('Pricing.page.plans.velocity.desc'),
                'max_images'   => '20MB',
                'max_pages'    => '4',
                'with_domain'  => false,
                'features'     => [
                    lang('Pricing.features.email-support'),
                    lang('Pricing.features.basic-page-builder'),
                ],
                'prices'       => [
                    'th' => [800, 8000],
                ],
                'discounted'   => [
                    'th' => [599, 5990],
                ]
            ],
            'quantum'  => [
                'available'    => false,
                'popular'      => false,
                'name'         => lang('Pricing.page.plans.quantum.title'),
                'desc'         => lang('Pricing.page.plans.quantum.desc'),
                'max_images'   => '20MB',
                'max_pages'    => '4',
                'with_domain'  => true,
                'features'     => [
                    lang('Pricing.features.email-support'),
                    lang('Pricing.features.basic-page-builder'),
                    lang('Pricing.features.add-your-domain'),
                ],
                'prices'       => [
                    'th' => [1800, 18000],
                ],
                'discounted'   => [
                    'th' => [1290, 12900],
                ]
            ]
        ];
        $data = [
            'page_slug' => 'pricing-page',
            'url_part'  => 'pricing/page',
            'locale'    => $locale,
            'language'  => $locale_data['language'],
            'country'   => $locale_data['country'],
            'packages'  => $packages,
        ];
        return view('pricing-page', $data);
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
     * About Us page
     * @return string
     */
    public function aboutUs(): string
    {
        $locale      = $this->request->getLocale();
        $locale_data = $this->splitLocale($locale);
        $data        = [
            'page_slug' => 'about-us',
            'url_part'  => 'about-us',
            'locale'    => $locale,
            'language'  => $locale_data['language'],
            'country'   => $locale_data['country'],
        ];
        return view('about-us', $data);
    }

    /**
     * Choose region page
     * @return string
     */
    public function chooseRegion(): string
    {
        $locale      = $this->request->getLocale();
        $locale_data = $this->splitLocale($locale);
        $data = [
            'page_slug' => 'choose-region',
            'url_part'  => 'choose-region',
            'locale'    => $locale,
            'language'  => $locale_data['language'],
            'country'   => $locale_data['country'],
            'structure' => [
                'southeast-asia' => [
//                    'id' => [
//                        'label' => 'OtterNova Indonesia',
//                        'lang'  => []
//                    ],
                    'my' => [
                        'label' => 'OtterNova Malaysia',
                        'lang'  => []
                    ],
                    'sg' => [
                        'label' => 'OtterNova Singapore',
                        'lang'  => []
                    ],
                    'th' => [
                        'label' => 'OtterNova Thailand &middot; ออทเทอร์โนวา ประเทศไทย',
                        'lang'  => [
                            'en' => 'English',
                            'th' => 'ไทย'
                        ]
                    ]
                ],
                'east-asia'      => [
                    'jp' => [
                        'label' => 'OtterNova Japan &middot; オッターノヴァ 日本',
                        'lang'  => []
                    ],
//                    'kr' => [
//                        'label' => 'OtterNova South Korea &middot; 오터노바 한국',
//                        'lang'  => []
//                    ],
                    'tw' => [
                        'label' => 'OtterNova Taiwan &middot; 奧特諾瓦 台灣',
                        'lang'  => []
                    ]
                ]
            ]
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
     * Handle sending email for a contact form
     * @return ResponseInterface
     */
    public function contactForm(): ResponseInterface
    {
        try {
            $locale   = $this->request->getPost('locale');
            $this->request->setLocale($locale);
            $company  = $this->request->getPost('company-name');
            if (!empty($company)) {
                return $this->response->setBody('Fine');
            }
            $to       = getenv('CONTACT_FORM_EMAIL');
            $no_reply = getenv('NO_REPLY_EMAIL');
            $name     = $this->request->getPost('name');
            $from     = $this->request->getPost('email');
            $phone    = $this->request->getPost('phone');
            $subject  = $this->request->getPost('subject');
            $subject  = lang('Contact.form.fields.subject.' . $subject);
            $message  = $this->request->getPost('message');
            $date     = date('d M Y');
            // Check spam potential
            $is_spam  = isSpamSubmission($name, $message);
            if ($is_spam) {
                $subject = '[SPAM?] ' . $subject;
            }
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

    /**
     * Sitemap XML
     * @return ResponseInterface
     */
    public function sitemap(): ResponseInterface
    {
        $languages  = [
            '',
            // Thailand
            '/th-TH',
            '/en-TH',
        ];
        $main_pages = [
            ['/', '2025-12-01', 'monthly', '1.0'],
            ['/solutions/mart', '2025-12-01', 'monthly', '0.9'],
            ['/solutions/page', '2025-12-01', 'monthly', '0.9'],
            ['/pricing/mart', '2025-12-01', 'monthly', '0.9'],
            ['/pricing/page', '2025-12-01', 'monthly', '0.9'],
            ['/contact', '2025-12-08', 'monthly', '0.8'],
            ['/docs', '2025-12-08', 'monthly', '0.8'],
            ['/about-us', '2025-12-08', 'monthly', '0.5'],
            ['/leadership', '2025-12-08', 'monthly', '0.5'],
            ['/choose-region', '2025-12-01', 'monthly', '0.5'],
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

    /**
     * Page Not Found Handler
     * @return string|ResponseInterface
     */
    public function show404(): string|ResponseInterface
    {
        $method       = $this->request->getMethod();
        $lang         = $this->request->getLocale();
        if ('post' == $method) {
            return $this->response->setStatusCode(404)->setJSON(json_encode(['status' => 404, 'message' => 'Page not found.']));
        }
        $businessName = lang('System.site-name');
        $data         = [
            'slug'         => 'not-found',
            'lang'         => $lang,
            'businessName' => $businessName
        ];
        return view('_404', $data);
    }
}
