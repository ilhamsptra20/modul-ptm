<?php

namespace Database\Seeders;

use App\Models\Rayon;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class RayonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= 7; $i++) { 
            Rayon::create([
                'rayon' => 'Cicurug ' . $i,
                'slug' => Str::slug('Cicurug ' . $i),
            ]);
        }

        for ($i=1; $i <= 6; $i++) { 
            Rayon::create([
                'rayon' => 'Cisarua ' . $i,
                'slug' => Str::slug('Cisarua ' . $i),
            ]);
        }

        for ($i=1; $i <= 5; $i++) { 
            Rayon::create([
                'rayon' => 'Ciawi ' . $i,
                'slug' => Str::slug('Ciawi ' . $i),
            ]);
        }

        for ($i=1; $i <= 3; $i++) { 
            Rayon::create([
                'rayon' => 'Cibedug ' . $i,
                'slug' => Str::slug('Cibedug ' . $i),
            ]);
        }

        for ($i=1; $i <= 5; $i++) { 
            Rayon::create([
                'rayon' => 'Tajur ' . $i,
                'slug' => Str::slug('Tajur ' . $i),
            ]);
        }

        for ($i=1; $i <= 2; $i++) { 
            Rayon::create([
                'rayon' => 'Sukasari ' . $i,
                'slug' => Str::slug('Sukasari ' . $i),
            ]);
        }

        for ($i=1; $i <= 4; $i++) { 
            Rayon::create([
                'rayon' => 'Wikrama ' . $i,
                'slug' => Str::slug('Wikrama ' . $i),
            ]);
        }

        
        

    }
}
