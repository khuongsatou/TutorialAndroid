<?php

use Illuminate\Database\Seeder;

class LinhVucSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('LinhVuc')->insert([
            ['ten_linh_vuc'=>'Toán'],
            ['ten_linh_vuc'=>'Lý'],
            ['ten_linh_vuc'=>'Hóa'],
            ['ten_linh_vuc'=>'Sinh']
        ]);
    }
}
