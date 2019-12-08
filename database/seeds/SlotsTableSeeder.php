<?php

use App\Models\Slot;
use Illuminate\Database\Seeder;

class SlotsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Slot::class, 10)->create();
    }
}
