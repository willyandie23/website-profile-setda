<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class JenisDokumenSeeder extends Seeder
{
    public function run()
    {
        DB::table('jenis_dokumens')->insert([
            [
                'id' => 1,
                'nama' => 'LKPJ (Laporan Penyelenggaraan Pemerintah Daerah)',
                'slug' => 'lkpj-laporan-penyelenggaraan-pemerintah-daerah',
                'kategori_informasi_id' => 1,
                'urutan' => 1,
                'is_active' => 1,
                'created_at' => Carbon::parse('2025-11-28 23:37:14'),
                'updated_at' => Carbon::parse('2025-11-28 23:37:14'),
            ],
            [
                'id' => 2,
                'nama' => 'SPM (Standar Pelayanan Minimal)',
                'slug' => 'spm-standar-pelayanan-minimal',
                'kategori_informasi_id' => 1,
                'urutan' => 2,
                'is_active' => 1,
                'created_at' => Carbon::parse('2025-11-28 23:37:14'),
                'updated_at' => Carbon::parse('2025-11-28 23:37:14'),
            ],
            [
                'id' => 3,
                'nama' => 'Keputusan Bupati',
                'slug' => 'keputusan-bupati',
                'kategori_informasi_id' => 1,
                'urutan' => 3,
                'is_active' => 1,
                'created_at' => Carbon::parse('2025-11-28 23:37:14'),
                'updated_at' => Carbon::parse('2025-11-28 23:37:14'),
            ],
            [
                'id' => 4,
                'nama' => 'Peraturan Bupati',
                'slug' => 'peraturan-bupati',
                'kategori_informasi_id' => 1,
                'urutan' => 4,
                'is_active' => 1,
                'created_at' => Carbon::parse('2025-11-28 23:37:14'),
                'updated_at' => Carbon::parse('2025-11-28 23:37:14'),
            ],
            [
                'id' => 5,
                'nama' => 'Peraturan Daerah',
                'slug' => 'peraturan-daerah',
                'kategori_informasi_id' => 1,
                'urutan' => 5,
                'is_active' => 1,
                'created_at' => Carbon::parse('2025-11-28 23:37:14'),
                'updated_at' => Carbon::parse('2025-11-28 23:37:14'),
            ],
            [
                'id' => 6,
                'nama' => 'Laporan Kinerja',
                'slug' => 'laporan-kinerja',
                'kategori_informasi_id' => 1,
                'urutan' => 6,
                'is_active' => 1,
                'created_at' => Carbon::parse('2025-11-28 23:37:14'),
                'updated_at' => Carbon::parse('2025-11-28 23:37:14'),
            ],
            [
                'id' => 7,
                'nama' => 'Perbup Batas Desa',
                'slug' => 'perbup-batas-desa',
                'kategori_informasi_id' => 2,
                'urutan' => 1,
                'is_active' => 1,
                'created_at' => Carbon::parse('2025-11-28 23:37:14'),
                'updated_at' => Carbon::parse('2025-11-28 23:37:14'),
            ],
            [
                'id' => 8,
                'nama' => 'Perbup Batas Kecamatan',
                'slug' => 'perbup-batas-kecamatan',
                'kategori_informasi_id' => 2,
                'urutan' => 2,
                'is_active' => 1,
                'created_at' => Carbon::parse('2025-11-28 23:37:14'),
                'updated_at' => Carbon::parse('2025-11-28 23:37:14'),
            ],
            [
                'id' => 9,
                'nama' => 'Perbup Batas Kabupaten',
                'slug' => 'perbup-batas-kabupaten',
                'kategori_informasi_id' => 2,
                'urutan' => 3,
                'is_active' => 1,
                'created_at' => Carbon::parse('2025-11-28 23:37:14'),
                'updated_at' => Carbon::parse('2025-11-28 23:37:14'),
            ],
            [
                'id' => 10,
                'nama' => 'Peta Wilayah',
                'slug' => 'peta-wilayah',
                'kategori_informasi_id' => 2,
                'urutan' => 4,
                'is_active' => 1,
                'created_at' => Carbon::parse('2025-11-28 23:37:14'),
                'updated_at' => Carbon::parse('2025-11-28 23:37:14'),
            ],
            [
                'id' => 11,
                'nama' => 'Nota Kesepakatan (MoU)',
                'slug' => 'nota-kesepakatan-mou',
                'kategori_informasi_id' => 3,
                'urutan' => 1,
                'is_active' => 1,
                'created_at' => Carbon::parse('2025-11-28 23:37:14'),
                'updated_at' => Carbon::parse('2025-11-28 23:37:14'),
            ],
            [
                'id' => 12,
                'nama' => 'Perjanjian Kerja Sama (PKS)',
                'slug' => 'perjanjian-kerja-sama-pks',
                'kategori_informasi_id' => 3,
                'urutan' => 2,
                'is_active' => 1,
                'created_at' => Carbon::parse('2025-11-28 23:37:14'),
                'updated_at' => Carbon::parse('2025-11-28 23:37:14'),
            ],
            [
                'id' => 13,
                'nama' => 'Kesepakatan Bersama',
                'slug' => 'kesepakatan-bersama',
                'kategori_informasi_id' => 3,
                'urutan' => 3,
                'is_active' => 1,
                'created_at' => Carbon::parse('2025-11-28 23:37:14'),
                'updated_at' => Carbon::parse('2025-11-28 23:37:14'),
            ]
        ]);
    }
}
