<?php

use Illuminate\Database\Seeder;
use Quill\SampleModule\Models\SampleModule;

class SampleModuleTableSeeder extends Seeder
{
   	/**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(SampleModule::class, 10)->create();
    }

}
