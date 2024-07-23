<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Generate a random ISBN-13 without dashes
        $isbnWithoutDashes = $this->faker->isbn13;

        // Format the ISBN-13 with dashes
        $formattedIsbn = substr($isbnWithoutDashes, 0, 3) . '-' .
            substr($isbnWithoutDashes, 4, 2) . '-' .
            substr($isbnWithoutDashes, 6, 5) . '-' .
            substr($isbnWithoutDashes, 11, 2) . '-' .
            substr($isbnWithoutDashes, 12, 1);
        return [
            'isbn' => $formattedIsbn,
            'title' => $this->faker->sentence(),
            'author' => $this->faker->name(),
            'description' => $this->faker->sentence(),
            'date_published' => $this->faker->date(),
        ];
    }

}
