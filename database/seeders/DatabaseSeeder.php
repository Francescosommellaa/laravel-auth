<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Esegue i seeder di default e personalizzati.
     *
     * @return void
     */
    public function run()
    {
        // Aggiungi qui il seeder per i progetti
        $this->call(ProjectSeeder::class);
    }
}
