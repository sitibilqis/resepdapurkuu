<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Recipe;

class RecipeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $recipes = [
            [
                'title' =>'Spaghetti Carbonara',
                'photo' =>'https://th.bing.com/th/id/OIP.WDjLazx9UFOY6TGCQsxcEAHaE3?rs=1&pid=ImgDetMain',
                'desc' =>'Spaghetti alla carbonara atau carbonara adalah masakan Italia yang berupa spaghetti yang dimasak dengan saus telur, keju dan daging.',
                'portion' =>'1',
                'est_time' =>'15',
                'ingredients' =>'400 gram spaghetti
                200 gram pancetta atau bacon, potong kecil
                4 kuning telur
                100 gram keju parmesan, parut
                250 ml fresh cream
                1/2 sdt merica bubuk
                1 sdt garam',
                'step' =>'Didihkan air dalam panci besar. Tambahkan garam dan masukkan spaghetti. Rebus spaghetti sesuai petunjuk pada kemasan, hingga al dente (masih sedikit keras).
                Sambil menunggu spaghetti matang, panaskan minyak zaitun dalam wajan. Tumis pancetta atau bacon hingga garing.
                Dalam mangkuk, kocok kuning telur dan keju parmesan hingga rata.
                Sisihkan sedikit air rebusan spaghetti, sekitar 100 ml.
                Setelah spaghetti matang, tiriskan dan segera masukkan kembali ke dalam panci.
                Tambahkan fresh cream, merica bubuk, dan tumisan pancetta atau bacon. Aduk rata.
                Kecilkan api, lalu tuangkan campuran kuning telur dan keju parmesan secara perlahan sambil diaduk terus-menerus. Tambahkan air rebusan spaghetti yang telah disisihkan sedikit demi sedikit jika saus terlalu kental.
                Aduk cepat hingga saus menjadi creamy dan mengental.
                Angkat panci dari api dan sajikan spaghetti carbonara selagi panas.',
                'link' =>'https://www.youtube.com/watch?v=DMcFqtm1lfY',
                'created_at' => Carbon::now(),
            ],
            [
                'title' =>'Pempek',
                'photo' =>'https://vokasi.co.id/wp-content/uploads/2019/07/foto_utama_pempek_2.jpg',
                'desc' =>'Pempek adalah makanan khas Palembang, Sumatera Selatan. Pempek terbuat dari adonan ikan giling yang dicampur dengan tepung sagu dan bumbu-bumbu',
                'portion' =>'1',
                'est_time' =>'3',
                'ingredients' =>'500 gram ikan tenggiri, fillet dan giling halus
                250 gram tepung sagu
                150 gram tepung terigu
                1 butir telur ayam
                1 sdm bawang putih halus
                1 sdt garam
                1/2 sdt gula pasir
                1/4 sdt merica bubuk',
                'step' =>'Campur ikan tenggiri giling, tepung sagu, tepung terigu, telur ayam, bawang putih halus, garam, gula pasir, dan merica bubuk. Aduk rata hingga adonan kalis.
                Bagi adonan menjadi beberapa bagian.
                Bentuk adonan sesuai selera.
                Rebus pempek hingga matang.
                Angkat dan tiriskan.
                Sajikan pempek dengan cuko pempek, ebi kering goreng, bawang merah goreng, dan daun bawang iris.',
                'link' =>'https://www.youtube.com/watch?v=c9jqyIIB4XQ',
                'created_at' => Carbon::now(),
            ]
        ];
        Recipe::truncate();
        Recipe::insert($recipes);
    }
}
