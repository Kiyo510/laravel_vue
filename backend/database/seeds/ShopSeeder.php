<?php

use Illuminate\Database\Seeder;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shops')->insert(
            [
                [
                    'id' => 1,
                    'shop_name' => '５１３ベーカリー',
                    'area_id' => 1,
                ],
                [
                    'id' => 2,
                    'shop_name' => 'のざき',
                    'area_id' => 2,
                ],
                [
                    'id' => 3,
                    'shop_name' => 'メロンパン専門店',
                    'area_id' => 4,
                ],
                [
                    'id' => 4,
                    'shop_name' => 'チョココロネ専門店',
                    'area_id' => 2,
                ],
            ]
        );
    }
}
