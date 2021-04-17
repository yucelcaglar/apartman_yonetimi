<?php

namespace Database\Factories;

use App\Models\Blok;
use App\Models\gider_ekle;
use App\Models\gider_kalemleri;
use Illuminate\Database\Eloquent\Factories\Factory;

class GiderEkleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = gider_ekle::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'gider_id' => function(){
                return gider_kalemleri::all()->random();
            },
            'blok_id' => function(){
                return Blok::all()->random();
            },
            'daire' => $this->faker->random_int(1,100)
        ];
    }
}
