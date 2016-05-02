<?php
 
class UserAdminSeeder extends Seeder
{
    public function run()
    {
        DB::table('user_admin')->delete();
        DB::table('user_admin')->insert(array (
            array (
            'name'     => 'Dracule Mihawk',
            'username' => 'mihawk',
            'email'    => 'mihawk@gmail.com',
            'password' => Hash::make('rahasiakampret'),
            ),
            array (
            'name'     => 'Trafalgar Law',
            'username' => 'trafa',
            'email'    => 'trafa@gmail.com',
            'password' => Hash::make('rahasiakampret'),
            ),
        ));
    }
}