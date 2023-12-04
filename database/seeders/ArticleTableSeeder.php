<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Article;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $articles = [
            [
                'title' => 'Tips memasak agar hasil maksimal',
                'photo'=> 'https://www.eatthis.com/wp-content/uploads/sites/4/2022/07/woman-cooking.jpg?quality=82&strip=1',
                'desc' => 'Sekilas memasak terlihat gampang, tetapi sebenarnya butuh trik supaya hasilnya maksimal. Berikut tips memasak yang perlu kamu tahu.',
                'content' => 'Memasak memang terlihat sederhana dan siapa pun bisa melakukannya. Tetapi, ternyata untuk menghasilkan makanan yang lezatnya sempurna dibutuhkan beberapa trik dan pengetahuan untuk mengolah makanan secara tepat.
                Setiap orang sangat wajar jika melakukan kesalahan saat memasak. Untuk kamu yang baru ingin belajar masak atau yang sudah berpengalaman memasak sekalipun, perhatikan kembali cara memasak yang biasanya kamu lakukan.
                Berikut ini 5 tips memasak agar hasilnya maksimal tanpa merusak makanan, menurut Readers Digest:
                1. Tidak Menambahkan Terlalu Banyak Garam
                Terlalu banyak mengasup garam tidak akan baik untuk tubuh. Kamu akan lebih banyak minum saat makananmu terlalu asin.
                Taburkan secukupnya garam pada bahan makananmu. Pastikan jumlahnya sudah cukup dan tidak berlebihan.

                2. Mengayak Tepung
                Mengayak tepung akan membantu memisahkan partikel tepung. Membuat partikelnya juga menjadi halus.
                Tepung yang tidak diayak akan menghasilkan adonan yang menggumpal. Ini akan merusak rasa makanan saat masuk ke mulut.

                3. Menggunakan Secukupnya Air Saat Memasak Nasi
                Pastikan saat memasak nasi, menggunakan air yang cukup. Artinya tidak terlalu sedikit ataupun banyak. Gunakan perbandingan yang tepat antara jumlah beras dan air.
                Kelebihan air akan membuat beras menjadi sangat lembek. Kecuali jika kamu ingin membuat bubur. Rasio beras dan air sejumlah 1:2 untuk memasak nasi bisa dijadikan patokan.

                4. Mengaduk Dengan Baik
                Jika kamu tidak mengaduk masakan dengan baik, masakan akan matang dengan tidak merata. Mengaduk menjadi kunci menghasilkan masakan dengan matang dan rasa yang merata.
                Selain itu , tidak mengaduk makanan akan membuat makanan di bagian bawah menjadi gosong. Makanan yang ada di bagian atas juga akan menjadi kekurangan panas sehingga lebih lama matang.

                5. Tidak Memasak Sayuran Terlalu Lama
                Sayuran yang terlalu matang akan kehilangan sebagian kandungan vitaminnya. Sayuran yang terlalu matang juga akan lebih kering dan lembek.
                Ada cara yang bisa dilakukan untuk mengatasi hal ini. Rendam sayuran pada air es kemudian hangatkan kembali secara perlahan.',
                'created_at' => Carbon::now()
            ],
            [
                'title' => 'Cara Menyimpan Bawang Merah Agar Tahan Lama',
                'photo'=> 'https://res.cloudinary.com/dk0z4ums3/image/upload/v1620032803/attached_image/selain-gurih-manfaat-bawang-merah-juga-banyak.jpg',
                'desc' => 'Bawang merah menjadi salah satu bumbu dasar yang selalu ada di setiap masakan di Indonesia. Dengan bawang merah, setiap masakan yang kita buat akan semakin lezat, nikmat dan beraroma wangi khas. Cita rasa masakan yang semula biasanya, akan semakin kuat dengan bumbu bawang merah di dalamnya.',
                'content' => 'Saat harga bawang merah sedang cukup murah seperti sekarang ini, tak ada salahnya untuk membeli bawang merah dalam jumlah banyak. Dengan cara penyimpanan yang tepat, bumbu bawang merah bisa tahan lebih lama. Berikut beberapa cara tepat menyimpan bawang merah agar tahan lebih lama tanpa mengurangi kualitas dan rasanya.
                1. Pisahkan Bawang Merah dari Bumbu Lain
                Cara pertama ada pisahkan bawang merah dari bumbu lain saat disimpan. Termasuk memisahkannya dari bawang putih. Saat bawang merah disimpan sendiri tanpa bumbu lain, ini akan lebih tahan lama dan tetap berkualitas. 
                
                2. Simpan di Tempat Kering dan Terbuka
                Bawang merah cukup disimpan di tempat yang kering dan terbuka agar tahan lebih lama. Dalam suhu ruang di tempat terbuka, bawang merah bisa tahan hingga berhari-hari bahkan satu minggu. Untuk bawang merah yang berkualitas baik dan cukup kering, ini bahkan bisa bertahan hingga satu bulan. 
                
                3. Kupas dan Simpan di Kulkas
                Bawang merah juga bisa disimpan di dalam kulkas dengan cara dikupas dulu sebelumnya. Simpan di wadah kering dan tertutup rapat kemudian simpan di kulkas. Dengan cara ini bawang merah  bisa tahan hingga berminggu-minggu. Meski tahan lama,  cara penyimpanan ini memungkinkan bawang merah bertunas. Ini karena kulkas bersuhu rendah dan lembab yang memudahkan bawang bertunas.',
                'created_at' => Carbon::now()
            ],
        ];
        Article::truncate();
        Article::insert($articles);
    }
}
