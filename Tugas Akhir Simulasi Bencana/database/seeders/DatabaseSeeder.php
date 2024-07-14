<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Disaster;
use App\Models\Province;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make("12345678"),
        ]);

        Disaster::create([
            'nama_bencana' => "Gempa Bumi"
        ]);
        Disaster::create([
            'nama_bencana' => "Tanah Longsor"
        ]);
        Disaster::create([
            'nama_bencana' => "Gunung Meletus"
        ]);
        Disaster::create([
            'nama_bencana' => "Tsunami"
        ]);
        Disaster::create([
            'nama_bencana' => "Banjir"
        ]);

        Province::create([
            'nama_provinsi' => "Jakarta"
        ]);
        Province::create([
            'nama_provinsi' => "Jawa Barat"
        ]);
        Province::create([
            'nama_provinsi' => "Banten"
        ]);

        City::create([
            'province_id' => 1,
            'nama_kota' => "Jakarta Pusat",
            'latitude' => "-6.1865",
            'longitude' => "106.845",
            'lokasi' => "https://maps.app.goo.gl/uG7drZMai3TTEczT6"
        ]);
        City::create([
            'province_id' => 1,
            'nama_kota' => "Jakarta Selatan",
            'latitude' => "-6.2297",
            'longitude' => "106.6893",
            'lokasi' => "https://maps.app.goo.gl/wZAW3vZiRMAzEFtMA"
        ]);
        City::create([
            'province_id' => 1,
            'nama_kota' => "Jakarta Timur",
            'latitude' => "-6.2115",
            'longitude' => "106.8451",
            'lokasi' => "https://maps.app.goo.gl/VbXU6pqKsomPwL1V6"
        ]);
        City::create([
            'province_id' => 1,
            'nama_kota' => "Jakarta Barat",
            'latitude' => "-6.1683",
            'longitude' => "106.7583",
            'lokasi' => "https://maps.app.goo.gl/27bLdcNJKeVD3vzg7"
        ]);
        City::create([
            'province_id' => 1,
            'nama_kota' => "Jakarta Utara",
            'latitude' => "-6.1388",
            'longitude' => "106.8637",
            'lokasi' => "https://maps.app.goo.gl/9trnpPpUvN44WyB88"
        ]);

        City::create([
            'province_id' => 2,
            'nama_kota' => "Bogor",
            'latitude' => "-6.5950",
            'longitude' => "106.8166",
            'lokasi' => "https://maps.app.goo.gl/K7mdjUzquAtazjpUA"
        ]);
        City::create([
            'province_id' => 2,
            'nama_kota' => "Bandung",
            'latitude' => "-6.9175",
            'longitude' => "107.6191",
            'lokasi' => "https://maps.app.goo.gl/LeMLniYjseNs6HaW9"
        ]);
        City::create([
            'province_id' => 2,
            'nama_kota' => "Bekasi",
            'latitude' => "-6.2416",
            'longitude' => "106.9924",
            'lokasi' => "https://maps.app.goo.gl/ECve3NpyWeYBg8448"
        ]);
        City::create([
            'province_id' => 2,
            'nama_kota' => "Depok",
            'latitude' => "-6.4025",
            'longitude' => "106.7942",
            'lokasi' => "https://maps.app.goo.gl/EijMQ1zhMWnjpghe7"
        ]);
        City::create([
            'province_id' => 2,
            'nama_kota' => "Cirebon",
            'latitude' => "-6.7063",
            'longitude' => "108.5570",
            'lokasi' => "https://maps.app.goo.gl/y6Uoy4FquWHWBvaDA"
        ]);
        City::create([
            'province_id' => 2,
            'nama_kota' => "Sukabumi",
            'latitude' => "-6.9225",
            'longitude' => "106.9286",
            'lokasi' => "https://maps.app.goo.gl/GcQAfQf7xqEJQc598"
        ]);
        City::create([
            'province_id' => 2,
            'nama_kota' => "Tasikmalaya",
            'latitude' => "-7.4274",
            'longitude' => "108.1707",
            'lokasi' => "https://maps.app.goo.gl/nUfcotVdTUFWmBWdA"
        ]);

        City::create([
            'province_id' => 3,
            'nama_kota' => "Serang",
            'latitude' => "-6.1104",
            'longitude' => "106.1635",
            'lokasi' => "https://maps.app.goo.gl/exHU2pE93MpaRU2A8"
        ]);
        City::create([
            'province_id' => 3,
            'nama_kota' => "Cilegon",
            'latitude' => "-6.0025",
            'longitude' => "106.0111",
            'lokasi' => "https://maps.app.goo.gl/SGNcWaGoXUPyaC3d9"
        ]);
        City::create([
            'province_id' => 3,
            'nama_kota' => "Tangerang",
            'latitude' => "-6.1783",
            'longitude' => "106.6319",
            'lokasi' => "https://maps.app.goo.gl/Sj231E3bexCAnNjx8"
        ]);
        City::create([
            'province_id' => 3,
            'nama_kota' => "Tangerang Selatan",
            'latitude' => "-6.2886",
            'longitude' => "106.7185",
            'lokasi' => "https://maps.app.goo.gl/WqEKGKxAL7eu1S2R8"
            ]);
        City::create([
            'province_id' => 3,
            'nama_kota' => "Lebak",
            'latitude' => "-6.5642",
            'longitude' => "106.2522",
            'lokasi' => "https://maps.app.goo.gl/RaukvkSbQHySBpCu6"
        ]);
        City::create([
            'province_id' => 3,
            'nama_kota' => "Pandeglang",
            'latitude' => "-6.3253",
            'longitude' => "105.8336",
            'lokasi' => "https://maps.app.goo.gl/gAd29Vk9bTTzALxs8"
        ]);
    }
}
