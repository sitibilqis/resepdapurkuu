<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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
                'title' => 'Spaghetti Carbonara',
                'category' => 'Itali',
                'photo' =>'https://www.prochiz.com/wp-content/uploads/2021/11/spaghetti-carbonara-original-italia.jpg',
                'desc' =>'Spaghetti ala carbonara atau carbonara adalah masakan Italia yang berupa spaghetti yang dimasak dengan saus telur, keju dan daging.',
                'portion' =>'1',
                'est_time' =>'15',
                'ingredients' => 
                    '400 gram spaghetti,
                    200 gram pancetta atau bacon, potong kecil,
                    4 kuning telur,
                    100 gram keju parmesan, parut,
                    250 ml fresh cream,
                    1/2 sdt merica bubuk,
                    1 sdt garam',
                'ingr_price' => 
                    '20000,
                    350000,
                    12000,
                    20000,
                    7000,
                    500,
                    500',
                'step' =>
                    'Didihkan air dalam panci besar.
                    Tambahkan garam dan masukkan spaghetti.
                    Rebus spaghetti sesuai petunjuk pada kemasan, hingga al dente (masih sedikit keras).
                    Sambil menunggu spaghetti matang, panaskan minyak zaitun dalam wajan.
                    Tumis pancetta atau bacon hingga garing.
                    Dalam mangkuk, kocok kuning telur dan keju parmesan hingga rata.
                    Sisihkan sedikit air rebusan spaghetti, sekitar 100 ml.
                    Setelah spaghetti matang, tiriskan dan segera masukkan kembali ke dalam panci.
                    Tambahkan fresh cream, merica bubuk, dan tumisan pancetta atau bacon. Aduk rata.
                    Kecilkan api, lalu tuangkan campuran kuning telur dan keju parmesan secara perlahan sambil diaduk terus-menerus. 
                    Tambahkan air rebusan spaghetti yang telah disisihkan sedikit demi sedikit jika saus terlalu kental.
                    Aduk cepat hingga saus menjadi creamy dan mengental.
                    Angkat panci dari api dan sajikan spaghetti carbonara selagi panas.',
                'step_img' => 'https://i.pinimg.com/564x/98/7a/4f/987a4f1d34b901d3b412cb63c03d0ea5.jpg',
                'link' =>'https://www.youtube.com/watch?v=DMcFqtm1lfY',
                'created_at' => Carbon::now(),
            ],
        ];
        Recipe::truncate();
        Recipe::insert($recipes);
    }
}
