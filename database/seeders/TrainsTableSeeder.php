<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $trains = [
            [
                'company'=>'Italo',
                'departure'=>'Verona Porta Nuova',
                'arrival'=>'Milano Centrale',
                'departure_time'=>'2024-05-14 14:40:00',
                'arrival_time'=>'2024-05-14 18:10:00',
                'code_train'=>'Abfsd',
                'wagon'=>6,
                'on_schedule'=>1,
                'cancelled'=>0,
            ],
            [
                'company'=>'Trenitalia',
                'departure'=>'Roma Termini',
                'arrival'=>'Firenze Santa Maria Novella',
                'departure_time'=>'2024-05-15 08:20:00',
                'arrival_time'=>'2024-05-15 10:45:00',
                'code_train'=>'Bcde',
                'wagon'=>8,
                'on_schedule'=>1,
                'cancelled'=>0,
            ],
            [
                'company'=>'Eurostar',
                'departure'=>'Paris Gare du Nord',
                'arrival'=>'London St Pancras International',
                'departure_time'=>'2024-05-16 09:00:00',
                'arrival_time'=>'2024-05-16 11:30:00',
                'code_train'=>'Cdefg',
                'wagon'=>10,
                'on_schedule'=>1,
                'cancelled'=>0,
            ],
            // Aggiungi qui gli altri 7 array
            [
                'company'=>'DB',
                'departure'=>'Berlin Hauptbahnhof',
                'arrival'=>'Munich Hauptbahnhof',
                'departure_time'=>'2024-05-17 13:45:00',
                'arrival_time'=>'2024-05-17 18:20:00',
                'code_train'=>'Defgh',
                'wagon'=>5,
                'on_schedule'=>1,
                'cancelled'=>0,
            ],
            [
                'company'=>'Renfe',
                'departure'=>'Barcelona Sants',
                'arrival'=>'Madrid Puerta de Atocha',
                'departure_time'=>'2024-05-18 11:30:00',
                'arrival_time'=>'2024-05-18 15:15:00',
                'code_train'=>'Efghi',
                'wagon'=>7,
                'on_schedule'=>1,
                'cancelled'=>0,
            ],
            [
                'company'=>'Thalys',
                'departure'=>'Brussels Midi',
                'arrival'=>'Amsterdam Centraal',
                'departure_time'=>'2024-05-19 16:10:00',
                'arrival_time'=>'2024-05-19 18:40:00',
                'code_train'=>'Fghij',
                'wagon'=>9,
                'on_schedule'=>1,
                'cancelled'=>0,
            ],
            [
                'company'=>'NS',
                'departure'=>'Amsterdam Centraal',
                'arrival'=>'Rotterdam Centraal',
                'departure_time'=>'2024-05-20 14:20:00',
                'arrival_time'=>'2024-05-20 15:00:00',
                'code_train'=>'Ghijk',
                'wagon'=>6,
                'on_schedule'=>1,
                'cancelled'=>0,
            ],
            [
                'company'=>'SJ',
                'departure'=>'Stockholm Central',
                'arrival'=>'Gothenburg Central',
                'departure_time'=>'2024-05-21 09:40:00',
                'arrival_time'=>'2024-05-21 12:15:00',
                'code_train'=>'Hijkl',
                'wagon'=>8,
                'on_schedule'=>1,
                'cancelled'=>0,
            ],
            [
                'company'=>'NSB',
                'departure'=>'Oslo Central',
                'arrival'=>'Bergen Station',
                'departure_time'=>'2024-05-22 08:15:00',
                'arrival_time'=>'2024-05-22 13:00:00',
                'code_train'=>'Ijklm',
                'wagon'=>7,
                'on_schedule'=>1,
                'cancelled'=>0,
            ],
            [
                'company'=>'VR',
                'departure'=>'Helsinki Central',
                'arrival'=>'Tampere Station',
                'departure_time'=>'2024-05-23 12:30:00',
                'arrival_time'=>'2024-05-23 15:45:00',
                'code_train'=>'Jklmn',
                'wagon'=>9,
                'on_schedule'=>1,
                'cancelled'=>0,
            ]
        ];
        for ($i=0; $i<10; $i++){

        };
    }
}
