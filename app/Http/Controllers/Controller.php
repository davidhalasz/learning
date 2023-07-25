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
                'title' => 'Your space to learn, connect, and be inspired.',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'images' => [
                    'index1.jpg',
                    'index2.jpeg',
                    'index3.jpeg',
                    'index4.jpeg',
                    'index7.jpeg'
                ],
            ],
            [
                'title' => 'Explore the Learning Center.',
                'content' => 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'images' => [
                    'index8.jpeg',
                    'index9.jpeg',
                    'index6.jpeg',
                    'index5.jpeg',
                    'index7.jpeg'
                ],
            ],
            [
                'title' => 'Connect in the Forum.',
                'content' => 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.',
                'images' => [
                    'index11.jpeg',
                    'index12.jpeg',
                    'index10.jpeg',
                    'index4.jpeg',
                    'index7.jpeg'
                ],
            ],
        ];

        return view('welcome', compact(['slides']));
    }

    public function rolunk() {
        return view('rolunk');
    }

    public function kepzesek() {

        $kepzesek = [
            [
                'cim' =>'Menedysment valami',
                'leiras' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed facilisis, est at interdum posuere, magna erat dictum sem, non laoreet eros magna nec nisl. Aenean tristique, purus nec luctus dignissim, ante libero imperdiet turpis, vitae pulvinar nibh odio eu neque. Nam feugiat felis arcu, in suscipit erat placerat mattis. Sed quis fermentum metus.',
                'kategoria' => 'menedzsment'
            ],
            [
                'cim' =>'Fejlesztes valami',
                'leiras' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed facilisis, est at interdum posuere, magna erat dictum sem, non laoreet eros magna nec nisl. Aenean tristique, purus nec luctus dignissim, ante libero imperdiet turpis, vitae pulvinar nibh odio eu neque. Nam feugiat felis arcu, in suscipit erat placerat mattis. Sed quis fermentum metus.',
                'kategoria' => 'fejlesztes'
            ],
            [
                'cim' =>'Fejleszteskeee valami',
                'leiras' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed facilisis, est at interdum posuere, magna erat dictum sem, non laoreet eros magna nec nisl. Aenean tristique, purus nec luctus dignissim, ante libero imperdiet turpis, vitae pulvinar nibh odio eu neque. Nam feugiat felis arcu, in suscipit erat placerat mattis. Sed quis fermentum metus.',
                'kategoria' => 'fejlesztes'
            ],
        ];

        $kategoriak = array_unique(array_column($kepzesek, 'kategoria'));
        return view('kepzesek', compact(['kepzesek', 'kategoriak']));
    }

    public function uzletviteli() {
        return view('uzletviteli_tanacsadas');
    }

    public function coaching() {
        return view('business_coaching');
    }

    public function kapcsolat() {
        return view('kapcsolat');
    }
}
