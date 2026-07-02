<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Project;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 4; $i++) {
            $newProject = new Project();

            $newProject->title = $faker->sentence(2);
            $newProject->cover_image = "placeholder-img.png";
            $newProject->description = $faker->paragraph();
            $newProject->url_repo = 'https://github.com';
            $newProject->type_id = rand(1, 4);

            $newProject->save();
        }
    }
}
