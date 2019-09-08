<?php
namespace Rinjax\Website\Database\Seeders;

use Illuminate\Database\Seeder;
use Rinjax\Website\Models\DemoUser;

class DemoUsersTableSeeder extends Seeder
{
    public function run()
    {
        \DB::table('demo_users')->insert([]);

        factory(DemoUser::class, 10)->create();
    }
}