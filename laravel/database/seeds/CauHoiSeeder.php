<?php

use Illuminate\Database\Seeder;
class CauHoiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('CauHoi')->insert([
            ['noi_dung'=> 'Đây là nội dung','linh_vuc_id'=>1,'phuong_an_a'=>'ABC','phuong_an_b'=>'ABCD','phuong_an_c'=>'ABCDE','phuong_an_d'=>'ABCER','dap_an'=>'A'],
            ['noi_dung'=> 'Đây là nội dung 1','linh_vuc_id'=>1,'phuong_an_a'=>'ABC','phuong_an_b'=>'ABCD','phuong_an_c'=>'ABCDE','phuong_an_d'=>'ABCER','dap_an'=>'B'],     
            ['noi_dung'=> 'Đây là nội dung 2','linh_vuc_id'=>1,'phuong_an_a'=>'ABC','phuong_an_b'=>'ABCD','phuong_an_c'=>'ABCDE','phuong_an_d'=>'ABCER','dap_an'=>'C']    
        ]);
    }
}
