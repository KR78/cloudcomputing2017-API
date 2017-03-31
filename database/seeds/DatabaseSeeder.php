/ database/seeds/DatabaseSeeder.php

<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Model::unguard();

        DB::table('users')->delete();

        $users = array(
                [
                'first_name' => 'Student1',
                'last_name' => 'Student1',
                'username' => 'Student1', 
                'email' => 'Student1@gmail.com',
                'phone_no' => '12345678911',
                'active' =>'1',
                'gender'=>'male', 
                'avatar' =>'',
                'dob' =>'01012017', 
                'password' => Hash::make('secret')
                ],
        );
            
        // Loop through each user above and create the record for them in the database
        foreach ($users as $user)
        {
            User::create($user);
        }

        Model::reguard();
    }
}