<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Products')->insert(
            [
                'title' => 'Nha Mat Tien',
                'LoaiTin'=>'1',
                'TrangThai' => 'Dang Ban',
                'Description' => 'Nha thoang mat 2 mat tienv...v....',
                'TinhThanh'=>'Ho Chi Minh',
                'QuanHuyen'=>'Quan 1',
                'PhuongXa'=>'Phuong 21',
                'TenDuong'=>'Nguyen Cong Tru',
                'Address'=>'105',
                'Price'=>100000000,
                'users_id'=> 6

            ],
            [
                'title' => 'Nha Chung Cu',
                'LoaiTin'=>'1',
                'TrangThai' => 'Dang Ban',
                'Description' => 'Nha thoang mat 2 mat tienv...v....',
                'TinhThanh'=>'Ho Chi Minh',
                'QuanHuyen'=>'Quan 10',
                'PhuongXa'=>'Phuong 44',
                'TenDuong'=>'Nguyen Cong Tru',
                'Address'=>'88',
                'Price'=>98730000,
                'users_id'=> 7
            ],
        );

    }
}
