<?php

use Illuminate\Database\Seeder;

class StockTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(App\Models\Stock::class, 20)->create()->each(function ($u) {
            $u->balance()->saveMany(factory(App\Models\StockBalance::class, 20)->make());
            $u->income()->saveMany(factory(App\Models\StockIncome::class, 4)->make());
            $u->disclosure()->saveMany(factory(App\Models\StockDisclosure::class, 50)->make());
        });

    }
}
