<?php

namespace Database\Seeders;

use App\Models\Wilaya;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WilayaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $wilayas = [
            ['name' => 'Adrar', 'delivery_price' => 1200],
            ['name' => 'Chlef', 'delivery_price' => 800],
            ['name' => 'Laghouat', 'delivery_price' => 1000],
            ['name' => 'Oum El Bouaghi', 'delivery_price' => 900],
            ['name' => 'Batna', 'delivery_price' => 950],
            ['name' => 'Béjaïa', 'delivery_price' => 850],
            ['name' => 'Biskra', 'delivery_price' => 900],
            ['name' => 'Béchar', 'delivery_price' => 1100],
            ['name' => 'Blida', 'delivery_price' => 550],
            ['name' => 'Bouira', 'delivery_price' => 700],
            ['name' => 'Tamanrasset', 'delivery_price' => 1500],
            ['name' => 'Tébessa', 'delivery_price' => 950],
            ['name' => 'Tlemcen', 'delivery_price' => 800],
            ['name' => 'Tiaret', 'delivery_price' => 900],
            ['name' => 'Tizi Ouzou', 'delivery_price' => 750],
            ['name' => 'Algiers', 'delivery_price' => 500],
            ['name' => 'Djelfa', 'delivery_price' => 1000],
            ['name' => 'Jijel', 'delivery_price' => 800],
            ['name' => 'Sétif', 'delivery_price' => 850],
            ['name' => 'Saïda', 'delivery_price' => 950],
            ['name' => 'Skikda', 'delivery_price' => 850],
            ['name' => 'Sidi Bel Abbès', 'delivery_price' => 900],
            ['name' => 'Annaba', 'delivery_price' => 650],
            ['name' => 'Guelma', 'delivery_price' => 800],
            ['name' => 'Constantine', 'delivery_price' => 600],
            ['name' => 'Médéa', 'delivery_price' => 750],
            ['name' => 'Mostaganem', 'delivery_price' => 800],
            ['name' => 'Msila', 'delivery_price' => 950],
            ['name' => 'Mascara', 'delivery_price' => 900],
            ['name' => 'Ouargla', 'delivery_price' => 1200],
            ['name' => 'Oran', 'delivery_price' => 700],
            ['name' => 'El Bayadh', 'delivery_price' => 1100],
            ['name' => 'Illizi', 'delivery_price' => 1500],
            ['name' => 'Bordj Bou Arréridj', 'delivery_price' => 850],
            ['name' => 'Boumerdès', 'delivery_price' => 600],
            ['name' => 'El Tarf', 'delivery_price' => 750],
            ['name' => 'Tindouf', 'delivery_price' => 1600],
            ['name' => 'Tissemsilt', 'delivery_price' => 900],
            ['name' => 'El Oued', 'delivery_price' => 1100],
            ['name' => 'Khenchela', 'delivery_price' => 950],
            ['name' => 'Souk Ahras', 'delivery_price' => 850],
            ['name' => 'Tipaza', 'delivery_price' => 600],
            ['name' => 'Mila', 'delivery_price' => 850],
            ['name' => 'Aïn Defla', 'delivery_price' => 750],
            ['name' => 'Naâma', 'delivery_price' => 1100],
            ['name' => 'Aïn Témouchent', 'delivery_price' => 800],
            ['name' => 'Ghardaïa', 'delivery_price' => 1200],
            ['name' => 'Relizane', 'delivery_price' => 850],
            ['name' => 'Timimoun', 'delivery_price' => 1300],
            ['name' => 'Bordj Badji Mokhtar', 'delivery_price' => 1500],
            ['name' => 'Ouled Djellal', 'delivery_price' => 1000],
            ['name' => 'Béni Abbès', 'delivery_price' => 1200],
            ['name' => 'In Salah', 'delivery_price' => 1400],
            ['name' => 'In Guezzam', 'delivery_price' => 1600],
            ['name' => 'Touggourt', 'delivery_price' => 1100],
            ['name' => 'Djanet', 'delivery_price' => 1500],
            ['name' => 'El M\'Ghair', 'delivery_price' => 1050],
            ['name' => 'El Menia', 'delivery_price' => 1150],
        ];

        foreach ($wilayas as $wilaya) {
            Wilaya::create($wilaya);
        }
    }
}
