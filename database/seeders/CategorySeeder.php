<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Elektronik',
                'slug' => 'elektronik',
                'description' => 'Kategori produk elektronik',
            ],
            [
                'name' => 'Fashion',
                'slug' => 'fashion',
                'description' => 'Kategori pakaian dan aksesoris',
            ],
            [
                'name' => 'Makanan',
                'slug' => 'makanan',
                'description' => 'Kategori makanan dan minuman',
            ],
            [
                'name' => 'Olahraga',
                'slug' => 'olahraga',
                'description' => 'Kategori perlengkapan olahraga',
            ],
        ];

        foreach ($categories as $category) {
            Category::updateOrCreate(
                ['slug' => $category['slug']],
                $category
            );
        }
    }
}