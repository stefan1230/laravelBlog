<?php

use Illuminate\Database\Seeder;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   public function run()
    {
        $user_one = new User();
        $user_one->role_id = 1;
        $user_one->name = "Stefan";
        $user_one->email = "stefan.richi@yahoo.com";
        $user_one->password = bcrypt('1234567890');
        $user_one->save();
    }
}
