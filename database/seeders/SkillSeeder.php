<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    public function run(): void
    {
        Skill::Create([
            'name' => 'PHP NATIVE',
            'description' => 'Learn basic web dinamis programing and syntax of PHP'
        ]);

        Skill::create([
            'name' => 'LARAVEL',
            'description' => 'High Level architecture MVC, Routing, Layout, Eloquent ORM' 
        ]);

        Skill::create([
            'name' => 'Git & Github',
            'description' => 'Version control system and repository for project'
        ]);
    }
}
