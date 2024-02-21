<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('coins', function (Blueprint $table) {
            $table->id();
            $table->string("id_coingap")->nullable();
            $table->string("full_name")->nullable();
            $table->string("symbol")->nullable()->index();
            $table->text("assets")->nullable();
            $table->string("course")->nullable();
            $table->timestamps();
        });
        $data = [
          ["id_coingap" => "bitcoin", "full_name" => "Bitcoin", "symbol" => "BTC", "assets" => "{}"],
          ["id_coingap" => "1inch", "full_name" => "1inch", "symbol" => "1inch", "assets" => "{}"],
          ["id_coingap" => "ethereum", "full_name" => "Ethereum", "symbol" => "ETH", "assets" => "{}"],
          ["id_coingap" => "binance-coin", "full_name" => "Binance-coin", "symbol" => "BNB", "assets" => "{}"],
          ["id_coingap" => "polygon", "full_name" => "Polygon", "symbol" => "MATIC", "assets" => "{}"],


        ];

        foreach ($data as $datum) {
            DB::table('coins')->insert([
                    [
                        "full_name" => $datum['full_name'],
                        "symbol" => $datum['symbol'],
                        "id_coingap" => $datum['id_coingap'],
                        "assets" => $datum['assets'],
                    ]]
            );

        }

    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coins');
    }
};
