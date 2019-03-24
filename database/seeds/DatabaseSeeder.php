<?php

use Illuminate\Database\Seeder;

use App\User;
// php artisan db:seed  ---- executar seed.


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		// $this->call(UsersTableSeeder::class);
		User::create([
			'name'		=> 'Admin',
			'email'		=> 'email@email.com',
			'password'	=> bcrypt('123456'),
		]);
    }
}
