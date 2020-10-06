<?php

use Illuminate\Database\Seeder;

class QuestionnairesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('questionnaires')->insert([
        'name' => 'test 1',
      ]);

      DB::table('questionnaires')->insert([
        'name' => 'test 2',
      ]);

      DB::table('questionnaires')->insert([
        'name' => 'test 3',
      ]);
    }
}
