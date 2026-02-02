<?php

namespace Database\Seeders;
use App\Models\Skill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{

public function run()
{
    $skills = ['PHP', 'Laravel', 'MySQL', 'Bootstrap'];

    foreach ($skills as $skill) {
        Skill::create(['name' => $skill]);
    }
}

}
