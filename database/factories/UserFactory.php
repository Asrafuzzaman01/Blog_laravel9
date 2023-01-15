<?php

namespace Database\Factories;
use App\Models\post;
// use App\Models\category;
// use Illuminate\Support\Str;
// use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
// class UserFactory extends Factory
// {
//     /**
//      * Define the model's default state.
//      *
//      * @return array<string, mixed>
//      */
//     public function definition()
//     {
//         return [
//             'name' => fake()->name(),
//             'email' => fake()->unique()->safeEmail(),
//             'email_verified_at' => now(),
//             'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
//             'remember_token' => Str::random(10),
//         ];
//     }

//     /**
//      * Indicate that the model's email address should be unverified.
//      *
//      * @return static
//      */
//     public function unverified()
//     {
//         return $this->state(fn (array $attributes) => [
//             'email_verified_at' => null,
//         ]);
//     };

// }



class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
   
     */
    protected $model = post::class;
    // protected $model = category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cat_id' => $this->faker->rand(1,10),
            'user_id' => $this->faker->rand(1,10),
            'comment_id' => $this->faker->rand(1,10),
            'title' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'photo' => $this->faker->imageUrl(),
        ];
    }


    // public function define()
    // {
    //     return [
    //         'cat_name' => $this->faker->name(),
           
    //     ];
    // }
}


    //   $factory->define(App\category::class , function (Faker $faker){


    //         return [ 
    //             'cat_name'=>$faker->name,


    //         ];



    //     }
    // );

    //     $factory->define(App\post::class , function (Faker $faker){


    //         return [ 
    //             'cat_id' => rand(1,10),

    //             'user_id'=>rand(1,10),
    //             'comment_id'=>rand(1,10),
    //             'title'=>$faker->sentence,
    //             'description'=>$faker->paragraph,
    //             'photo'=>$faker->imageUrl

    //         ];



    //     }
    // );


