<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Functions\Helper;

class ProjectSeeder extends Seeder
{
    /**
     * Esegue il seeder per popolare il database con progetti fittizi.
     *
     * @return void
     */
    public function run()
    {
        // Chiama la funzione di Helper per creare 100 progetti fittizi
        Helper::seedFakeProjects(10);
    }
}
