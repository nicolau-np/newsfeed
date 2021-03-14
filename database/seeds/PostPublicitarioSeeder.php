<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostPublicitarioSeeder extends Seeder
{
    static $publicidades = [
        [
            'titulo'=>"BitCoins",
            'link'=>"https://phemex.com/lp-crypto-platform?group=730&referralCode=DPXAJ&gclid=CjwKCAiAhbeCBhBcEiwAkv2cY-PLZ3RgLpHu9TSknlQs6vlrxBnh0cU1gdLSQYpcjmEnRki9yq93OhoCpiAQAvD_BwE",
            'linkImg'=>"https://news.bitcoin.com/wp-content/uploads/2017/01/Standard-Cashback-Banner-728x90-GIF.gif",
            'estado'=>"on",
        ],
        [
            'titulo'=>"FolioBit",
            'link'=>"https://www.iobit.com/pt/index.php",
            'linkImg'=>"https://thumbs.gfycat.com/AnchoredPointedBluebird-size_restricted.gif",
            'estado'=>"on",
        ],
    ];
    public function run()
    {
        foreach (self::$publicidades as $publicidade) {
            DB::table('post_publicitarios')->insert(
                $publicidade
            );
        }
    }
}