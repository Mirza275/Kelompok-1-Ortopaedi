<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pasien;
use App\Models\Obat;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        Pasien::create([
            'nama_pasien' => 'Budi Santoso',
            'nik' => '3201123456789012',
            'no_bpjs' => '0001234567890',
            'tanggal_lahir' => '1990-05-12',
            'umur' => 34,
            'jenis_kelamin' => 'L',
            'alamat' => 'Jl. Melati No. 45, Bandung',
            'nomor_hp' => '081234567890',
            'penanggung_jawab' => 'Siti Rohmah'
        ]);
        Obat::create([
            'nama_obat' => 'Paracetamol',
            'jenis_obat' => 'Tablet',
            'stok' => 150,
            'satuan' => 'Strip',
            'harga' => 5000
        ]);
    }
}
