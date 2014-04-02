<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		$user = User::create([
			'email' 		=> 'jessicalegner@gmail.com',
			'password' 	=> Hash::make('puppy')
		]);
		$user->save();

		foreach(range(1, 10) as $index)
		{
			$spice = new Spice([
				'user_id' => $user->id,
				'name' => $faker->word,
				'expiration' => $faker->dateTimeThisDecade()
			]);

			$user->spices()->save($spice);
		}
	}

}