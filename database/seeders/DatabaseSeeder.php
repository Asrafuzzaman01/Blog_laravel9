<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\post;
// use App\Models\category;


// class DatabaseSeeder extends Seeder
// {
//     /**
//      * Seed the application's database.
//      *
//      * @return void
//      */
//     public function run()
//     {
//         // \App\Models\User::factory(10)->create();

//         // \App\Models\User::factory()->create([
//         //     'name' => 'Test User',
//         //     'email' => 'test@example.com',
//         // ]);

//         // factory(App\post::class ,10)->create();
//         // factory(App\category::class ,10)->create();

//         post::factory()->count(50)->create();
//         category::factory()->count(50)->create();
        



//     }
// }

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     *
     */
    public function run()
    {
        post::factcory()->count(10)->create();
        // ategory::factory()->count(10)->create();
        
    }
}
