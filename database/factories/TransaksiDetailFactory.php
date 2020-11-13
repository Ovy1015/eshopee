<?php

namespace Database\Factories;

use App\Models\transaksiDetail;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransaksiDetailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = transaksiDetail::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'transaksi_id' => 1,
            'barang_id' => 2,
            'jumlah' => $this->faker->numberBetween(1, 1000),
            'harga_beli' => $this->faker->randomNumber(),
            'discount' => 0
        ];
    }
}
