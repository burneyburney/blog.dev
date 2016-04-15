<?php

class UserTableSeeder extends Seeder
{
        public function run()
        {
            $user = new User();
            $user->first_name = $_ENV['USER_FIRST'];
            $user->last_name = $_ENV['USER_LAST'];
            $user->email = $_ENV['USER_EMAIL'];
            $user->password= $_ENV['USER_PASS'];
            $user->save();
        }

}

// create a new file for a Seeder
// name of class is stubly case (camel w/ first name CAPITOL)
// migrate, creates and modifys tables
