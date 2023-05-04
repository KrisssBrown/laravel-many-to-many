<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $technologies = ['HTML', 'CSS', 'SASS', 'Laravel', 'Javascript', 'Vue', 'PHP', 'Mysql', 'Bootstrap'];

        foreach ($technologies as $technology) {

            $tech = new Technology();
            $tech->name = $technology;
            $tech->slug = Str::slug($technology);
            $tech->save();
    }
}
