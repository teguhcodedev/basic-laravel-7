<?php

use Illuminate\Database\Seeder;

class EdulevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('edulevelS')->insert([
            [
                'name'=>'SD Sederajat',
                'desc'=>'SD /MI',
            ],
            [
                'name'=>'SDN Pulogebang 01',
                'desc'=>'SD Negeri',
            ],
        ]);
    }
}
