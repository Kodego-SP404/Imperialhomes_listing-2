<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition()    
    {        
        return [            
            'propertyName' => $this->faker->sentence(),            
            'propertyType' => $this->faker->sentence(),            
            'model' => $this->faker->paragraph(1),          
            'location' => $this->faker->sentence(),            
            'tags' => 'laravel, api, backend',             
            'price' => $this->faker->decimal('amount', 5, 2),           
            'file' => $this->faker->paragraph(1),           
            'description' => $this->faker->paragraph(3),       
         ];    
        }
}
