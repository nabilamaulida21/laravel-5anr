php artisan make:migration create_matakuliah_table

Isi migration

php artisan migrate

=======================================================

php artisan make:migration modify_prodi_add_kaprodi

Isi migration-nya

php artisan migrate

=======================================================

php artisan make:model Prodi

protected $table = "prodi";
protected $guarded = [];

// optional: kalo mau datanya sudah terisi
php artisan make:seeder ProdiSeeder

Prodi::create([
    'kode_prodi' => "PR-001",
    'nama_prodi' => 'Teknik Informatika',
    'nama_kaprodi' => "Adul",
]);

Prodi::create([
    'kode_prodi' => "PR-002",
    'nama_prodi' => 'Sistem Informasi',
    'nama_kaprodi' => "Bejo",
]);

// ini dimasukkan di database/seeders/DatabaseSeeder.php
$this->call(ProdiSeeder::class);

-- Pilihan: Terminal/Command Prompt
php artisan db:seed // mau lanjutan
php artisan db:seed --class=ProdiSeeder // kita yang tentukan
php artisan migrate:fresh --seed // mau dari awal
