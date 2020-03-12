<?php

use App\Crud;
use Illuminate\Database\Seeder;

class CrudSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $crud1 = new Crud();
        $crud1->ho = "Le";
        $crud1->ten = "Van Sang";
        $crud1->save();
    }
}
