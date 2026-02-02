<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\Skill;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    

    public function run()
    {
        $project1 = Project::create([
            'title' => 'Website Portofolio',
            'description' => 'Website portofolio pribadi menggunakan Laravel',
            'link' => 'https://youtube.com',
            'image' => 'Dreamybull 11.jpg',
            
        ]);

        $skills = Skill::whereIn('name', ['PHP','Laravel','MySQL'])->pluck('id');

        $project1->skills()->sync($skills);

        $project2 = Project::create([
            'title' => 'Medical Practice Hospital Malioboro',
            'description' => 'DR house',
            'link' => 'https://kick.com',
            'image' => 'House.jpg',
            
        ]);

        $skills = Skill::whereIn('name', ['PHP','Laravel','Bootstrap'])->pluck('id');

        $project2->skills()->sync($skills);
    }

}
