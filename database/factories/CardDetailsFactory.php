<?php

namespace Database\Factories;

use App\Models\CardDetails;
use Illuminate\Database\Eloquent\Factories\Factory;

class CardDetailsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CardDetails::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
                'logo' =>'C:\xampp\htdocs\master_data_operatons\public\img\logo.png',
                'name' => $this->faker->name,
                'image' => 'C:\xampp\htdocs\master_data_operatons\public\img\sample.jpg',
                'student_id' => 'S43FS'.rand(100, 10000000),
                'roll' => rand(1000, 100000),
                'class' => ['One', 'Two', 'Three', 'Four', 'Five'][rand(0, 4)],
                'section' => ['A', 'B', 'C', 'D'][rand(0, 3)],
                'year' => 2021
        
        ];
    }
}
