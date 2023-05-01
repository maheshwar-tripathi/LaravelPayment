<?php
use App\Currency;
use Illuminate\Database\Seeder;

class CurreniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $currencies = [
            'usd',
            'eur',
            'gbp',
            'inr',
        ];

        foreach($currencies as $curency) {
            Currency::create([
                'iso' => $curency,
            ]);
        }
    }
}
