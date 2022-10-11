<?php

use App\Laravel\Models\User;
use Illuminate\Database\Seeder;

class AdminAccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $first_user = User::find(1);
        if($first_user){
            $input = ['username' => "admin", 'email' => "admin@yahoo.com",'password' => bcrypt('admin'),'name' => "Master Admin","type" => "super_user"];
            $first_user->fill($input);
            $first_user->save();
        }else{
                User::create(
                    ['id'=> 1,'username' => "admin", 'email' => "admin@yahoo.com",'password' => bcrypt('admin'),'name' => "Master Admin","type" => "super_user"]
                );
        
                
        }
    }
}
