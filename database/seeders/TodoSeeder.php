<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Todo;

Class TodoSeeder extends Seeder
{
    public function run()
    {
        Todo::create([
            'title' => 'Sample Todo',
            'description' => 'Test',
            'is_done' => false,
        ]);
    }
}