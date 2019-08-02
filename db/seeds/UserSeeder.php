<?php


use Phinx\Seed\AbstractSeed;

class UserSeeder extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {
        $format = 'Y-m-d H:i:s';
        $faker = Faker\Factory::create();
        $data = [];
        for ($i = 0; $i < 10000; $i++) {
            $created = $faker->dateTimeBetween('-150 days')->format($format);
            $data[] = [
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'birth_date' => $faker->dateTimeBetween('-80 years', '-5 years')->format($format),
                'city' => $faker->city,
                'profession' => $faker->jobTitle,
                'children_count' => $faker->numberBetween(0, 4),
                'created' => $created,
                'updated' => $faker->dateTimeBetween($created)->format($format),
            ];
        }

        $this->table('user')->insert($data)->save();
    }
}
