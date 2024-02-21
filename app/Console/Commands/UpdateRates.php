<?php

namespace App\Console\Commands;

use App\Models\Coin;
use Illuminate\Console\Command;

class UpdateRates extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:update-rates';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    private function getAssets($coin)
    {
        $url = "https://api.coincap.io/v2/assets/". strtolower($coin);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);
        curl_close($ch);
        $output = json_decode($output);
        return $output->data;
    }

    public function handle()
    {
        $coins = Coin::all();
        foreach ($coins as $coin) {
            $assets = $this->getAssets($coin->id_coingap);
            $coin->update([
                "course" => $assets->priceUsd,
                "assets" => json_encode($assets)
            ]);
        }
    }
}
