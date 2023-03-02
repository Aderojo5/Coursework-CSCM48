<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\students;

class studentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(App\students::class, 20)->create();
    }
}
