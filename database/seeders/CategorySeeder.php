<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(
            [
                'name' => 'Mediation',
                'meta_title' => 'Mediation',
                'meta_description' => 'Mediation',
                'meta_keywords' => 'Mediation',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Accounting',
                'meta_title' => 'Accounting',
                'meta_description' => 'Accounting',
                'meta_keywords' => 'Accounting',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        );
    }
}
