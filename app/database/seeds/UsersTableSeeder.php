<?php
 
class UsersTableSeeder extends Seeder
{
 
    public function run()
    {
        DB::table( 'users' )->delete();
 
        User::create( array (
            'uuid' => 100, // 管理者
        ) );
 
        User::create( array (
            'uuid' => 1,
        ) );
 
        User::create( array (
            'uuid' => 'user3',
        ) );
    }
 
}
