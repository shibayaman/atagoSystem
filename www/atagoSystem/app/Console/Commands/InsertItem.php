<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class InsertItem extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:InsertItem';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command iteminsert';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $now = Carbon::now();

        //商品追加

        $data = [

            ['item_name' => '情報処理教科書 情報処理安全確保支援士 2020年版','item_url' => 'https://m.media-amazon.com/images/I/81hlUU1PVsL._AC_UL320_ML3_.jpg','item_price' =>2000,'item_stock' => 100,'category_name' =>'資格', 'created_at' => $now,'updated_at' => $now],
            ['item_name' => '情報処理教科書 データベーススペシャリスト 2020年版','item_url' => 'https://m.media-amazon.com/images/I/818F6gI4lGL._AC_UL320_ML3_.jpg','item_price' => 2000,'item_stock' => 100,'category_name' =>'資格', 'created_at' => $now,'updated_at' => $now],
            ['item_name' => '情報処理教科書 ネットワークスペシャリスト 2019年版','item_url' => 'https://m.media-amazon.com/images/I/81ufzIldIGL._AC_UL320_ML3_.jpg','item_price' => 2000,'item_stock' => 100,'category_name' =>'資格', 'created_at' => $now,'updated_at' => $now],
            ['item_name' => '【オラクル認定資格試験対策書】ORACLE MASTER Bronze[12c SQL基礎](試験番号:1Z0-061)完全詳解+精選問題集(オラクルマスタースタディガイド)','item_url' => 'https://m.media-amazon.com/images/I/71yf+lsf4UL._AC_UL320_ML3_.jpg','item_price' => 4000,'item_stock' => 100,'category_name' =>'資格', 'created_at' => $now,'updated_at' => $now],
            ['item_name' => '【オラクル認定資格試験対策書】ORACLE MASTER Bronze[Bronze DBA 12c](試験番号:1Z0-065)完全詳解+精選問題集(オラクルマスタースタディガイド)','item_url' => 'https://m.media-amazon.com/images/I/71n-9NmwlsL._AC_UL320_ML3_.jpg','item_price' => 4000,'item_stock' => 100,'category_name' =>'資格', 'created_at' => $now,'updated_at' => $now],
            ['item_name' => 'オラクルマスター教科書 Bronze Oracle Database 12c SQL基礎','item_url' => 'https://m.media-amazon.com/images/I/81bbuSH92EL._AC_UL320_ML3_.jpg','item_price' => 4000,'item_stock' => 100,'category_name' =>'資格', 'created_at' => $now,'updated_at' => $now],
            ['item_name' => 'オラクルマスター教科書 Bronze Oracle Database DBA12c','item_url' => 'https://m.media-amazon.com/images/I/51PqeER-hfL._AC_UL320_ML3_.jpg','item_price' => 4000,'item_stock' => 100,'category_name' =>'資格', 'created_at' => $now,'updated_at' => $now],
            ['item_name' => 'オラクルマスター教科書 Silver Oracle Database 12c','item_url' => 'https://m.media-amazon.com/images/I/819ekgC2ziL._AC_UL320_ML3_.jpg','item_price' => 4000,'item_stock' => 100,'category_name' =>'資格', 'created_at' => $now,'updated_at' => $now],
            ['item_name' => 'オラクルマスター教科書 Gold Oracle Database 12c','item_url' => 'https://m.media-amazon.com/images/I/71lmVVMRnaL._AC_UL320_ML3_.jpg','item_price' => 7000,'item_stock' => 100,'category_name' =>'資格', 'created_at' => $now,'updated_at' => $now],
            ['item_name' => '徹底攻略 Java SE 7/8 Bronze 問題集[1Z0-814]対応','item_url' => 'https://m.media-amazon.com/images/I/81A1uFFh79L._AC_UL320_ML3_.jpg','item_price' => 2800,'item_stock' => 100,'category_name' =>'資格', 'created_at' => $now,'updated_at' => $now],
            ['item_name' => '徹底攻略 Java SE 8 Silver 問題集[1Z0-808]対応','item_url' => 'https://m.media-amazon.com/images/I/9158-tMCrJL._AC_UL320_ML3_.jpg','item_price' => 3500,'item_stock' => 100,'category_name' =>'資格', 'created_at' => $now,'updated_at' => $now],
            ['item_name' => '徹底攻略 Java SE 8 Gold 問題集[1Z0-809]対応','item_url' => 'https://m.media-amazon.com/images/I/81qhsrrlXML._AC_UL320_ML3_.jpg','item_price' => 4000,'item_stock' => 100,'category_name' =>'資格', 'created_at' => $now,'updated_at' => $now],
            ['item_name' => 'オラクル認定資格教科書 Javaプログラマ Gold SE 8 (EXAMPRESS)','item_url' => 'https://m.media-amazon.com/images/I/51h4k9HvzBL._AC_UL320_ML3_.jpg','item_price' => 4600,'item_stock' => 100,'category_name' =>'資格', 'created_at' => $now,'updated_at' => $now],
            ['item_name' => 'Microsoft Office Specialist Microsoft Excel 2016 対策テキスト& 問題集 (よくわかるマスター)','item_url' => 'https://m.media-amazon.com/images/I/715x0E-OARL._AC_UL320_ML3_.jpg','item_price' => 2000,'item_stock' => 100,'category_name' =>'資格', 'created_at' => $now,'updated_at' => $now],
            ['item_name' => 'Microsoft Office Specialist Microsoft Excel 2016 Expert 対策テキスト&問題集 (よくわかるマスター)','item_url' => 'https://m.media-amazon.com/images/I/712kVYt47OL._AC_UL320_ML3_.jpg','item_price' => 3300,'item_stock' => 100,'category_name' =>'資格', 'created_at' => $now,'updated_at' => $now],
            ['item_name' => 'Microsoft Office Specialist Microsoft Word 2016 対策テキスト& 問題集 (よくわかるマスター)','item_url' => 'https://m.media-amazon.com/images/I/71OHtaMr8yL._AC_UL320_ML3_.jpg','item_price' => 2200,'item_stock' => 100,'category_name' =>'資格', 'created_at' => $now,'updated_at' => $now],
            ['item_name' => 'Microsoft Office Specialist Microsoft PowerPoint 2016 対策テキスト&問題集 (よくわかるマスター)','item_url' => 'https://m.media-amazon.com/images/I/71UUm8esgUL._AC_UL320_ML3_.jpg','item_price' => 2400,'item_stock' => 100,'category_name' =>'資格', 'created_at' => $now,'updated_at' => $now],
            ['item_name' => 'Microsoft Office Specialist Microsoft Accsess 2016 対策テキスト&問題集 (よくわかるマスター)','item_url' => 'https://m.media-amazon.com/images/I/71XPf3gyFzL._AC_UL320_ML3_.jpg','item_price' => 3000,'item_stock' => 100,'category_name' =>'資格', 'created_at' => $now,'updated_at' => $now],

            ['item_name' => 'セキュリティ技術の教科書','item_url' => 'https://m.media-amazon.com/images/I/91XzVpYxdiL._AC_UL320_ML3_.jpg','item_price' => 5000,'item_stock' => 100,'category_name' =>'技術書', 'created_at' => $now,'updated_at' => $now],
            ['item_name' => '暗号技術入門','item_url' => 'https://m.media-amazon.com/images/I/71VvlaRb6zL._AC_UL320_ML3_.jpg','item_price' => 5000,'item_stock' => 100,'category_name' =>'技術書', 'created_at' => $now,'updated_at' => $now],

            ['item_name' => 'アサヒ飲料 モンスター エナジー 355ml×24本','item_url' => 'https://m.media-amazon.com/images/I/71AGNrVcLPL._AC_UL320_ML3_.jpg','item_price' => 4444,'item_stock' => 4444,'category_name' =>'ドリンク', 'created_at' => $now,'updated_at' => $now],
            ['item_name' => 'アサヒ飲料 モンスター パイプラインパンチ 355ml ×24本','item_url' => 'https://m.media-amazon.com/images/I/71HODTcVEJL._AC_UL320_ML3_.jpg','item_price' => 44444,'item_stock' => 4444,'category_name' =>'ドリンク', 'created_at' => $now,'updated_at' => $now],
            ['item_name' => 'アサヒ飲料 モンスター カオス 355ml×24本','item_url' => 'https://m.media-amazon.com/images/I/81sDWWcjhuL._AC_UL320_ML3_.jpg','item_price' => 4444,'item_stock' => 4444,'category_name' =>'ドリンク', 'created_at' => $now,'updated_at' => $now],
            ['item_name' => 'アサヒ飲料 モンスターウルトラ缶 355ml×24本','item_url' => 'https://m.media-amazon.com/images/I/81Ha1G6jXbL._AC_UL320_ML3_.jpg','item_price' => 4444,'item_stock' => 4444,'category_name' =>'ドリンク', 'created_at' => $now,'updated_at' => $now],
            ['item_name' => 'アサヒ飲料 モンスターアブソリュートリーゼロ 355ml×24本','item_url' => 'https://m.media-amazon.com/images/I/817KoRjLBJL._AC_UL320_ML3_.jpg','item_price' => 4444,'item_stock' => 4444,'category_name' =>'ドリンク', 'created_at' => $now,'updated_at' => $now],
            ['item_name' => 'アサヒ飲料 モンスター キューバリブレ 355ml×24本','item_url' => 'https://m.media-amazon.com/images/I/81zMMaF68qL._AC_UL320_ML3_.jpg','item_price' => 4444,'item_stock' => 4444,'category_name' =>'ドリンク', 'created_at' => $now,'updated_at' => $now],
            ['item_name' => 'レッドブル・エナジードリンク 355ml×24本','item_url' => 'https://m.media-amazon.com/images/I/716FMmCIV6L._AC_UL320_ML3_.jpg','item_price' => 4444,'item_stock' => 4444,'category_name' =>'ドリンク', 'created_at' => $now,'updated_at' => $now],

        ];

        DB::table('items')->insert($data);

    }
}
