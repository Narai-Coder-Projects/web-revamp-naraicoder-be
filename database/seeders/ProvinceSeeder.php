<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // province in Indonesia
        DB::table('provinces')->insert([
            ['province_id' => 11, 'province_name' => 'ACEH', 'capital' => 'Banda Aceh'],
            ['province_id' => 12, 'province_name' => 'SUMATERA UTARA', 'capital' => 'Medan'],
            ['province_id' => 13, 'province_name' => 'SUMATERA BARAT', 'capital' => 'Padang'],
            ['province_id' => 14, 'province_name' => 'RIAU', 'capital' => 'Pekanbaru'],
            ['province_id' => 15, 'province_name' => 'JAMBI', 'capital' => 'Jambi'],
            ['province_id' => 16, 'province_name' => 'SUMATERA SELATAN', 'capital' => 'Palembang'],
            ['province_id' => 17, 'province_name' => 'BENGKULU', 'capital' => 'Bengkulu'],
            ['province_id' => 18, 'province_name' => 'LAMPUNG', 'capital' => 'Bandar Lampung'],
            ['province_id' => 19, 'province_name' => 'KEPULAUAN BANGKA BELITUNG', 'capital' => 'Pangkal Pinang'],
            ['province_id' => 21, 'province_name' => 'KEPULAUAN RIAU', 'capital' => 'Tanjung Pinang'],
            ['province_id' => 31, 'province_name' => 'DKI JAKARTA', 'capital' => 'Jakarta'],
            ['province_id' => 32, 'province_name' => 'JAWA BARAT', 'capital' => 'Bandung'],
            ['province_id' => 33, 'province_name' => 'JAWA TENGAH', 'capital' => 'Semarang'],
            ['province_id' => 34, 'province_name' => 'DI YOGYAKARTA', 'capital' => 'Yogyakarta'],
            ['province_id' => 35, 'province_name' => 'JAWA TIMUR', 'capital' => 'Surabaya'],
            ['province_id' => 36, 'province_name' => 'BANTEN', 'capital' => 'Serang'],
            ['province_id' => 51, 'province_name' => 'BALI', 'capital' => 'Denpasar'],
            ['province_id' => 52, 'province_name' => 'NUSA TENGGARA BARAT', 'capital' => 'Mataram'],
            ['province_id' => 53, 'province_name' => 'NUSA TENGGARA TIMUR', 'capital' => 'Kupang'],
            ['province_id' => 61, 'province_name' => 'KALIMANTAN BARAT', 'capital' => 'Pontianak'],
            ['province_id' => 62, 'province_name' => 'KALIMANTAN TENGAH', 'capital' => 'Palangka Raya'],
            ['province_id' => 63, 'province_name' => 'KALIMANTAN SELATAN', 'capital' => 'Banjarmasin'],
            ['province_id' => 64, 'province_name' => 'KALIMANTAN TIMUR', 'capital' => 'Samarinda'],
            ['province_id' => 65, 'province_name' => 'KALIMANTAN UTARA', 'capital' => 'Tanjung Selor'],
            ['province_id' => 71, 'province_name' => 'SULAWESI UTARA', 'capital' => 'Manado'],
            ['province_id' => 72, 'province_name' => 'SULAWESI TENGAH', 'capital' => 'Palu'],
            ['province_id' => 73, 'province_name' => 'SULAWESI SELATAN', 'capital' => 'Makassar'],
            ['province_id' => 74, 'province_name' => 'SULAWESI TENGGARA', 'capital' => 'Kendari'],
            ['province_id' => 75, 'province_name' => 'GORONTALO', 'capital' => 'Gorontalo'],
            ['province_id' => 76, 'province_name' => 'SULAWESI BARAT', 'capital' => 'Mamuju'],
            ['province_id' => 81, 'province_name' => 'MALUKU', 'capital' => 'Ambon'],
            ['province_id' => 82, 'province_name' => 'MALUKU UTARA', 'capital' => 'Sofifi'],
            ['province_id' => 91, 'province_name' => 'PAPUA BARAT', 'capital' => 'Manokwari'],
            ['province_id' => 94, 'province_name' => 'PAPUA', 'capital' => 'Jayapura'],
            ['province_id' => 95, 'province_name' => 'PAPUA TENGAH', 'capital' => 'Kota Nabire'],
            ['province_id' => 96, 'province_name' => 'PAPUA PEGUNUNGAN', 'capital' => 'Wamena'],
            ['province_id' => 97, 'province_name' => 'PAPUA SELATAN', 'capital' => 'Merauke'],
            ['province_id' => 98, 'province_name' => 'PAPUA BARAT DAYA', 'capital' => 'Fakfak']
        ]);
    }
}
