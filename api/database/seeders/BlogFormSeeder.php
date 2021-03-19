<?php

namespace Database\Seeders;

use App\Models\BlogForm;
use Illuminate\Database\Seeder;

class BlogFormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BlogForm::factory(5)->create();
    }
}
