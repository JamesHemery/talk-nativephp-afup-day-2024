<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Task::create(['title' => 'Préparer mon talk 🫨']);
        Task::create(['title' => '🚆 Me rendre à Poitiers']);
        Task::create(['title' => '🫡 Prendre en compte les retours OpenFeedback']);
        Task::create(['title' => '🚀 To the moon']);
    }
}
