<?php

namespace Database\Seeders;

use App\Models\master_barang;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        master_barang::create([
            'id' => '1',
            'nama_barang' => 'Sabun batang',
            'harga_satuan' => '3000'
        ]);

        master_barang::create([
            'id' => '2',
            'nama_barang' => 'Mi Instan',
            'harga_satuan' => '2000'
        ]);

        master_barang::create([
            'id' => '3',
            'nama_barang' => 'Pensil',
            'harga_satuan' => '1000'
        ]);

        master_barang::create([
            'id' => '4',
            'nama_barang' => 'Kopi Sachet',
            'harga_satuan' => '1500'
        ]);

        master_barang::create([
            'id' => '5',
            'nama_barang' => 'Air minum galon',
            'harga_satuan' => '20000'
        ]);
    }
}
