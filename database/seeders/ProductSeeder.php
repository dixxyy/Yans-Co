<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            // --- SLING BAG (Category 1) ---
            [
                'nama' => 'Louis Vuitton Twist MM Sling Bag',
                'deskripsi' => 'Tas selempang mewah dari Louis Vuitton dengan kunci putar LV Twist gelombang yang ikonis, dibuat dari kulit Epi yang anggun.',
                'harga' => 62000000,
                'stok' => 10,
                'berat' => 850, // Kulit Epi berstruktur kokoh agak mantap bobotnya
                'gambar' => 'https://images.voila.id/pr:sharp/rs:fit:1080:0/plain/https%3A%2F%2Fassets.voila.id%2Fvoila%2Fimages%2Fproduct%2Flouis-vuitton%2F6product-PLVD_M59887-Xms-2026-05-04T1055150700.jpeg@webp',
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Louis Vuitton Multi Pochette',
                'deskripsi' => 'Tas selempang hibrida Louis Vuitton yang memadukan beberapa kantong serta tali jacquard yang sporty.',
                'harga' => 41000000,
                'stok' => 15,
                'berat' => 500, // Bahan kanvas hibrida cenderung ringan dan compact
                'gambar' => 'https://id.louisvuitton.com/images/is/image/lv/1/PP_VP_L/louis-vuitton-multi-pochette-accessoires--M44813_PM2_Front%20view.png?wid=1090&hei=1090',
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // --- HANDBAG (Category 2) ---
            [
                'nama' => 'Chanel Classic Handbag Lambskin',
                'deskripsi' => 'Tas tangan legendaris Chanel dengan jahitan quilted berlapis kulit domba yang halus serta hardware berlapis emas.',
                'harga' => 14500000,
                'stok' => 5,
                'berat' => 750, // Lambskin berlapis hardware rantai emas medium
                'gambar' => 'https://www.chanel.com/images///f_auto,q_auto:good,dpr_1.1/w_1600/-9543206305822.jpg',
                'category_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Chanel Coco Handle Bag',
                'deskripsi' => 'Menampilkan handle atas yang kokoh bermaterial kulit eksotis dipadukan dengan strap rantai khas Chanel.',
                'harga' => 98000000,
                'stok' => 8,
                'berat' => 900, // Handle atas kokoh menambah bobot struktur tas
                'gambar' => 'https://images.voila.id/pr:sharp/rs:fit:1080:0/plain/https%3A%2F%2Fassets.voila.id%2Fvoila%2Fimages%2Fproduct%2Fchanel%2F1product-A92990-B05061-BROWN-Xms-2024-06-11T1414260700.jpeg@webp',
                'category_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // --- SHOULDER BAG (Category 3) ---
            [
                'nama' => 'Gucci GG Marmont Shoulder Bag',
                'deskripsi' => 'Tas bahu Gucci berstruktur lembut dengan motif matelassé chevron dan logo Double G emas timbul.',
                'harga' => 39000000,
                'stok' => 12,
                'berat' => 650, // Struktur tas empuk lembut, pas di bahu
                'gambar' => 'https://down-id.img.susercontent.com/file/b18689cea5df2cf4343a79d9ece06d26@resize_w900_nl.webp',
                'category_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Gucci Jackie 1961 Shoulder Bag',
                'deskripsi' => 'Menghidupkan kembali siluet hobo ikonis Gucci tahun 60-an dengan penutup piston emas yang khas.',
                'harga' => 43000000,
                'stok' => 7,
                'berat' => 600, // Ramping dan minimalis hobo style
                'gambar' => 'https://images.voila.id/pr:sharp/rs:fit:1080:0/plain/https%3A%2F%2Fassets.voila.id%2Fvoila%2Fimages%2Fproduct%2Fgucci%2F2product-810232-AAD5V-1541-Xms-2025-07-28T1503370700.jpeg@webp',
                'category_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // --- TOTEBAG (Category 4) ---
            [
                'nama' => 'Dior Book Tote Oblique',
                'deskripsi' => 'Totebag kanvas tebal kreasi Dior yang sepenuhnya dibordir dengan motif Dior Oblique legendaris.',
                'harga' => 53000000,
                'stok' => 14,
                'berat' => 1200, // Kanvas tebal bordir full berukuran besar/lebar
                'gambar' => 'https://balilene.com/cdn/shop/products/Dior_Book_Tote_Bag_In_Embroidered_Canvas_Oblique_Bordeaux_depan_1000x.jpg?v=1537780834',
                'category_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Dior Lady D-Joy Large Tote',
                'deskripsi' => 'Menyajikan garis arsitektur horizontal modern dari lini Lady Dior yang anggun dan berkelas.',
                'harga' => 72000000,
                'stok' => 6,
                'berat' => 1100, // Model memanjang horizontal full leather premium
                'gambar' => 'https://images.voila.id/pr:sharp/rs:fit:1080:0/plain/https%3A%2F%2Fassets.voila.id%2Fvoila%2Fimages%2Fproduct%2Fchristian-dior%2F3product-S0910ONGE_M030-Xms-2023-02-22T1550040700.jpeg@webp',
                'category_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // --- BACKPACK (Category 5) ---
            [
                'nama' => 'Prada Re-Nylon Medium Backpack',
                'deskripsi' => 'Ransel premium Prada bermaterial nilon daur ulang dipadukan dengan detail kulit Saffiano.',
                'harga' => 34000000,
                'stok' => 11,
                'berat' => 950, // Nilon cenderung ringan untuk ukuran tas ransel punggung
                'gambar' => 'https://www.prada.com/content/dam/pradabkg_products/1/1BZ/1BZ811/RV44F0002/1BZ811_RV44_F0002_V_OTO_SLF.jpg/_jcr_content/renditions/cq5dam.web.hebebed.2000.2000.jpg',
                'category_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Prada Saffiano Leather Backpack',
                'deskripsi' => 'Ransel full leather premium berstruktur kokoh dengan tekstur cross-grain khas kulit Saffiano.',
                'harga' => 47000000,
                'stok' => 4,
                'berat' => 1500, // Ransel full leather kulit Saffiano mantap paling berat
                'gambar' => 'https://www.prada.com/content/dam/pradabkg_products/2/2VZ/2VZ102/9Z2F0002/2VZ102_9Z2_F0002_V_DOO_SLF.jpg/_jcr_content/renditions/cq5dam.web.hebebed.2000.2000.jpg',
                'category_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // --- CLUTCH (Category 6) ---
            [
                'nama' => 'Hermes Kelly Cut Clutch',
                'deskripsi' => 'Tas genggam pesta malam hari yang luar biasa eksklusif, mengadaptasi penutup dari lini Hermes Kelly.',
                'harga' => 21000000,
                'stok' => 2,
                'berat' => 450, // Tipis, pipih, dan sangat ringan genggam pesta
                'gambar' => 'https://media.saclab.com/2021/08/1024_Hermes_Kelly_Cut_Clutch_Gold_S_1F_S-1.jpg',
                'category_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Hermes Jige Elan Clutch Bag',
                'deskripsi' => 'Clutch bergaya minimalis dari Hermes dengan penutup tab kulit berbentuk huruf H yang ramping.',
                'harga' => 85000000,
                'stok' => 5,
                'berat' => 400, // Ramping tanpa strap logam, super ringan
                'gambar' => 'https://assets.hermes.com/is/image/hermesproduct/048490CA65_front_wm_1?size=3000,3000&extend=0,0,0,0&align=0,0&$product_item_grid_g$&wid=800&hei=800',
                'category_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        // REKAYASA CEK AMAN: Jika ada baris produk yang kelupaan diisi kolom beratnya, dipaksa default 1000g
        foreach ($products as $key => $product) {
            if (!isset($product['berat'])) {
                $products[$key]['berat'] = 1000;
            }
        }

        DB::table('products')->insert($products);
    }
}