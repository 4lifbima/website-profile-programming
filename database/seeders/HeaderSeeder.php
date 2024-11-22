<?php

namespace Database\Seeders;

use App\Models\Header;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $headers = [
            'title'             => 'Welcome to Divisi Programming',
            'short_description' => 'Divisi yang dirancang khusus untuk mendalami teknologi-teknologi seperti javascript, PHP, Golang dan masih banyak teknologi lainnya',
            'hero_right'        => 'image.png'
        ];

        Header::create($headers);
    }
}
