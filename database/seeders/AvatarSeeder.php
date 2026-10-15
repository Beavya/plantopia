<?php

namespace Database\Seeders;

use App\Models\Avatar;
use Illuminate\Database\Seeder;

class AvatarSeeder extends Seeder
{
    public function run(): void
    {
        $avatars = [
            'black-girl.png',
            'brown-boy.png',
            'cactus.png',
            'clay-pot.png',
            'girl_green.png',
            'moon-cheese.png',
            'owl.png',
        ];

        foreach ($avatars as $file) {
            Avatar::create([
                'file' => $file,
            ]);
        }
    }
}
