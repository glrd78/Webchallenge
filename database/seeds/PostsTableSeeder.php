<?php

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->truncate();

        $posts = [];
        $faker = Factory::create();

        for( $i = 0 ; $i < 10 ;$i++){

            $posts[] =[
                'title'             =>  $faker->sentence(),
                'slug'              =>  $faker->slug(),
                'content'           =>  $faker->text($maxNbChars = 191),
                'id_author'           =>  rand(0, 10),
                'id_postcategory'   =>  rand(0, 10)
            ];

        }


        DB::table('posts')->insert($posts);
    }
}
