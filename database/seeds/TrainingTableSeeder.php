<?php

use Illuminate\Database\Seeder;
use App\Training;

class TrainingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(App\Training::class, 3)->create();
        Training::create([
            'title' => 'Membros Inferiores',
            'banner' => base64_encode(file_get_contents(public_path('images/Banner-1.png')))
        ]);
        Training::create([
            'title' => 'Membros Superiores',
            'banner' => base64_encode(file_get_contents(public_path('images/Banner-2.png')))
        ]);
        Training::create([
            'title' => 'Peitorais',
            'banner' => base64_encode(file_get_contents(public_path('images/Banner-3.png')))
        ]);
    }
}
