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
        $usr = new User;
        $usr->name = "Kio Kusanagi";
        $usr->email = "kiokusa@gmail.com";
        $usr->password = bcrypt('admin');
        $usr->birthdate = '1990-08-20';
        $usr->gender = 'male';
        $usr->photo = 'imagen.jpg';
        $usr->role = 'Admin';
        $usr->save();

        User::create(array(
        	'name' => 'cesarin villeguin',
        	'email' => 'cesar@gmail.com',
        	'password' => bcrypt('editor'),
        	'birthdate' => '1990-07-16',
        	'gender'=> 'Male',
        	'photo' => 'hola.jpg'
        	 ));

        //factory
        factory(User::class, 100)->create();
    }
}
