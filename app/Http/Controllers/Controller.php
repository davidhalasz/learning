<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index() {
        $slides = [
            [
                'title' => 'Üzletviteli tanácsadás',
                'content' => 'Projektelőkészítés. Megvalósítás. Monitorozás',
                'images' => [
                    'index1.jpeg',
                    'index2.jpeg',
                    'index3.jpg',
                    'index4.jpg',
                    'index7.jpg'
                ],
            ],
            [
                'title' => 'Business coaching',
                'content' => 'Hatékonyság növelés. Kompetencia fejlesztés. Szervezet fejlesztés',
                'images' => [
                    'index13.jpg',
                    'index11.jpeg',
                    'index10.jpeg',
                    'index5.jpeg',
                    'index12.jpeg'
                ],
            ],
            [
                'title' => 'Felnőttképzés',
                'content' => 'Toborzás. Képzésszervezés. Tananyagfejlesztés',
                'images' => [
                    'index20.jpg',
                    'index15.jpg',
                    'index19.jpg',
                    'kepzes6.jpg',
                    'index18.jpg'
                ],
            ],

        ];

        return view('welcome', compact(['slides']));
    }

    public function verzio2() {
        $slides = [
            [
                'title' => 'Üzletviteli tanácsadás',
                'content' => 'Projektelőkészítés. Megvalósítás. Monitorozás',
                'images' => [
                    'index1.jpeg',
                    'index2.jpeg',
                    'index3.jpg',
                    'index4.jpg',
                    'index7.jpg'
                ],
            ],
            [
                'title' => 'Business coaching',
                'content' => 'Hatékonyság növelés. Kompetencia fejlesztés. Szervezet fejlesztés',
                'images' => [
                    'index13.jpg',
                    'index11.jpeg',
                    'index10.jpeg',
                    'index5.jpeg',
                    'index12.jpeg'
                ],
            ],
            [
                'title' => 'Felnőttképzés',
                'content' => 'Toborzás. Képzésszervezés. Tananyagfejlesztés',
                'images' => [
                    'index20.jpg',
                    'index15.jpg',
                    'index19.jpg',
                    'kepzes6.jpg',
                    'index18.jpg'
                ],
            ],

        ];

        return view('welcome2', compact(['slides']));
    }
    public function verzio3() {
        $slides = [
            [
                'title' => 'Üzletviteli tanácsadás',
                'content' => 'Projektelőkészítés. Megvalósítás. Monitorozás',
                'images' => [
                    'index1.jpeg',
                    'index2.jpeg',
                    'index3.jpg',
                    'index4.jpg',
                    'index7.jpg'
                ],
            ],
            [
                'title' => 'Business coaching',
                'content' => 'Hatékonyság növelés. Kompetencia fejlesztés. Szervezet fejlesztés',
                'images' => [
                    'index13.jpg',
                    'index11.jpeg',
                    'index10.jpeg',
                    'index5.jpeg',
                    'index12.jpeg'
                ],
            ],
            [
                'title' => 'Felnőttképzés',
                'content' => 'Toborzás. Képzésszervezés. Tananyagfejlesztés',
                'images' => [
                    'index20.jpg',
                    'index15.jpg',
                    'index19.jpg',
                    'kepzes6.jpg',
                    'index18.jpg'
                ],
            ],

        ];

        return view('welcome3', compact(['slides']));
    }

    public function verzio4() {
        $slides = [
            [
                'title' => 'Üzletviteli tanácsadás',
                'content' => 'Projektelőkészítés. Megvalósítás. Monitorozás',
                'images' => [
                    'index1.jpeg',
                    'index2.jpeg',
                    'index3.jpg',
                    'index4.jpg',
                    'index7.jpg'
                ],
            ],
            [
                'title' => 'Business coaching',
                'content' => 'Hatékonyság növelés. Kompetencia fejlesztés. Szervezet fejlesztés',
                'images' => [
                    'index13.jpg',
                    'index11.jpeg',
                    'index10.jpeg',
                    'index5.jpeg',
                    'index12.jpeg'
                ],
            ],
            [
                'title' => 'Felnőttképzés',
                'content' => 'Toborzás. Képzésszervezés. Tananyagfejlesztés',
                'images' => [
                    'index20.jpg',
                    'index15.jpg',
                    'index19.jpg',
                    'kepzes6.jpg',
                    'index18.jpg'
                ],
            ],

        ];

        return view('welcome4', compact(['slides']));
    }
}
