<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [];
        $detailId = 1;

        for ($i = 1; $i <= 10; $i++) { // untuk 10 transaksi penjualan
            $barangIds = array_rand(range(1, 10), 3); // 3 barang acak
            foreach ($barangIds as $barangIndex) {
                $data[] = [
                    'detail_id' => $detailId++,
                    'penjualan_id' => $i,
                    'barang_id' => $barangIndex + 1,
                    'harga' => rand(2000, 20000),
                    'jumlah' => rand(1, 5),
                ];
            }
        }

        DB::table('t_penjualan_detail')->insert($data);
    }
}
