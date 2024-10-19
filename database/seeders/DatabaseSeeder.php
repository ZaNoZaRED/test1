<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Appeal;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Appeal::factory()->create([
            'name' => 'Test User',
            'txt' => 'sajsdajklsdajksadladjalsdjldjakdjaksjd',
            
        ]);
    }
}
