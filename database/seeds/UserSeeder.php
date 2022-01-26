<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    //     for($i=0;$i<=10;$i++){

        
    //     DB::table('users')->insert([
    //         'name' => 'nayem'.$i,
    //         'email' => $i.'nayemhowlader77@gmail.com',
    //         'password' => Hash::make('12345678'),
    //     ]);

    // }

 
    foreach(range(1,10) as $test){

        DB::table('users')->insert([
                    'name' => 'nayem'.$test,
                    'email' => $test.'nayemhowlader77@gmail.com',
                   'password' => Hash::make('12345678'),
              ]);

    }

    }
}
