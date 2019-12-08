<?php

use App\Models\Application;
use Illuminate\Database\Seeder;

class ApplicationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Application::class, 9)->create();
    }
}
