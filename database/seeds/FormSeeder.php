<?php

use Illuminate\Database\Seeder;
use App\Form;

class FormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return factory(Form::class,5)->create();
    }
}
