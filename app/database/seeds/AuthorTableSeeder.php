<?php

class  AuthorTableSeeder extends Seeder {
    public function run()
    {
        DB::table('users')->insert(array(
        	array(
                'email'=>'a@a.com',
                'password'=>Hash::make('dewefdfdf')
            ),
        	array(
                'email'=>'b@b.com',
                'password'=>Hash::make('dewefdfdf')
        		),
        	array(
                'email'=>'c@c.com',
                'password'=>Hash::make('dewefdfdf')
        		),
        	array(
                'email'=>'d@d.com',
                'password'=>Hash::make('dewefdfdf')
        		)       		        	
        	));
    }
}