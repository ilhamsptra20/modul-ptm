<?php

namespace Database\Seeders;

use App\Models\Rombel;
use Illuminate\Support\Str;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Seeder;
use League\CommonMark\Normalizer\SlugNormalizer;

class RombelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= 2; $i++) { 
            Rombel::create([
                'rombel' => 'BDP X-' . $i,
                'slug' => Str::slug('BDP X-' . $i),
            ]);
            Rombel::create([
                'rombel' => 'BDP XI-' . $i,
                'slug' => Str::slug('BDP X-' . $i),
            ]);
            Rombel::create([
                'rombel' => 'BDP XII-' . $i,
                'slug' => Str::slug('BDP X-' . $i),
            ]);

            Rombel::create([
                'rombel' => 'MMD X-' . $i,
                'slug' => Str::slug('MMD X-' . $i),
            ]);
            Rombel::create([
                'rombel' => 'MMD XI-' . $i,
                'slug' => Str::slug('MMD X-' . $i),
            ]);
            Rombel::create([
                'rombel' => 'MMD XII-' . $i,
                'slug' => Str::slug('MMD X-' . $i),
            ]);

            Rombel::create([
                'rombel' => 'TBG X-' . $i,
                'slug' => Str::slug('TBG X-' . $i),
            ]);
            Rombel::create([
                'rombel' => 'TBG XI-' . $i,
                'slug' => Str::slug('TBG X-' . $i),
            ]);
            Rombel::create([
                'rombel' => 'TBG XII-' . $i,
                'slug' => Str::slug('TBG X-' . $i),
            ]);

            Rombel::create([
                'rombel' => 'HTL X-' . $i,
                'slug' => Str::slug('HTL X-' . $i),
            ]);
            Rombel::create([
                'rombel' => 'HTL XI-' . $i,
                'slug' => Str::slug('HTL X-' . $i),
            ]);
            Rombel::create([
                'rombel' => 'HTL XII-' . $i,
                'slug' => Str::slug('HTL X-' . $i),
            ]);
        }
        
        for ($i=1; $i <= 5; $i++) { 
            Rombel::create([
                'rombel' => 'RPL X-' . $i,
                'slug' => Str::slug('RPL X-' . $i),
            ]);
        }

        for ($i=1; $i <= 4; $i++) { 
            Rombel::create([
                'rombel' => 'RPL XI-' . $i,
                'slug' => Str::slug('RPL X-' . $i),
            ]);
            Rombel::create([
                'rombel' => 'RPL XII-' . $i,
                'slug' => Str::slug('RPL X-' . $i),
            ]);

            Rombel::create([
                'rombel' => 'TKJ X-' . $i,
                'slug' => Str::slug('TKJ X-' . $i),
            ]);
            Rombel::create([
                'rombel' => 'TKJ XI-' . $i,
                'slug' => Str::slug('TKJ X-' . $i),
            ]);
            Rombel::create([
                'rombel' => 'TKJ XII-' . $i,
                'slug' => Str::slug('TKJ X-' . $i),
            ]);
        }

    }
}
