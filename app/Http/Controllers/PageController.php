<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homepage() {
        $flights = [ 
        [
         'id' => 1,
         'destination' => 'Torino',
         'time' => [ 
            'departure' => '11:30',
            'arrival' => '15:00',
         ],
         'cover' => "https://st.depositphotos.com/1022597/3251/i/600/depositphotos_32515789-stock-photo-turin-view.jpg"
       ],
       [
         'id' => 2,
         'destination' => 'Roma',
         'time' => [ 
            'departure' => '09:30',
            'arrival' => '11:00',
         ],
         'cover' => "https://www.fieraroma.it/wp-content/uploads/2022/10/fontana-trevi-roma.jpg"
       ],
       [
         'id' => 3,
         'destination' => 'Napoli',
         'time' => [ 
            'departure' => '17:30',
            'arrival' => '19:00',
         ],
         'cover' => "https://www.mardeisargassi.it/wp-content/uploads/2018/12/napoli-citt%C3%A0.jpg"
       ], 
       [
         'id' => 4,
         'destination' => 'Milano',
         'time' => [ 
            'departure' => '19:30',
            'arrival' => '23:00',
         ],
         'cover' => "https://i0.wp.com/www.diariodalmondo.com/wp-content/uploads/2021/12/Duomo-di-Milano-diario-dal-mondo.jpg?fit=1250%2C938&ssl=1"
        ],
       ];
        return view('welcome', ['flights' => $flights]);
    }

    public function details($id) {
        $flights = [
            [
                'id' => 1,
                'destination' => 'Torino',
                'time' => [
                    'departure' => '11:30',
                    'arrival' => '15:00',
                ],
                'cover' => "https://st.depositphotos.com/1022597/3251/i/600/depositphotos_32515789-stock-photo-turin-view.jpg",
                'type'=> [
                    'economy'=> 78,
                    'economy_premium'=> 'Non disponibile',
                    'business_class'=> 537,
                    'prima_classe' => 'Non disponibile'
                ]
            ],
            [
                'id' => 2,
                'destination' => 'Roma',
                'time' => [
                    'departure' => '09:30',
                    'arrival' => '11:00',
                ],
                'cover' => "https://www.fieraroma.it/wp-content/uploads/2022/10/fontana-trevi-roma.jpg",
                'type'=> [
                    'economy'=> 40,
                    'economy_premium'=> 'Non disponibile',
                    'business_class'=> 465,
                    'prima_classe' => 'Non disponibile'
                ]
            ],
            [
                'id' => 3,
                'destination' => 'Napoli',
                'time' => [
                    'departure' => '17:30',
                    'arrival' => '19:00',
                ],
                'cover' => "https://www.mardeisargassi.it/wp-content/uploads/2018/12/napoli-citt%C3%A0.jpg",
                'type'=> [
                    'economy'=> 78,
                    'economy_premium'=> 378,
                    'business_class'=> 640,
                    'prima_classe' => 'Non disponibile'
                ]
            ],
            [
                'id' => 4,
                'destination' => 'Milano',
                'time' => [
                    'departure' => '19:30',
                    'arrival' => '23:00',
                ],
                'cover' => "https://i0.wp.com/www.diariodalmondo.com/wp-content/uploads/2021/12/Duomo-di-Milano-diario-dal-mondo.jpg?fit=1250%2C938&ssl=1",
                'type'=> [
                    'economy'=> 60,
                    'economy_premium'=> 160,
                    'business_class'=> 443,
                    'prima_classe' => 'Non disponibile'
                ] 
            ]
        ]; 

        foreach ($flights as $flight){
            if ($id == $flight['id']) {
                return view('details', ['flight' => $flight]);
            }
        }
        abort(404);
    }
}
