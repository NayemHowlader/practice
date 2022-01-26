<?php

use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        foreach(range(1,10) as $test){

            DB::table('clients')->insert([
                        'name' => 'nayem'.$test,
                        'email' => $test.'nayemhowlader77@gmail.com',
                        'phone' => $test. '762100187',
                       'address' => 'East-goran,Khilgaon,Dhaka-1219',
                  ]);
    
        }
    
        }
    }
    