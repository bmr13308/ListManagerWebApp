<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run()
  {
    // \App\Models\User::factory(10)->create();
    DB::table('users')->insert(
      [
        'name' => 'admin',
        'username' => 'admin',
        'password' => Hash::make('admin123'),
        'email' => 'admin@admin.com'
      ]
    );

    DB::table('list_items')->insert(
      [
        ['list_id' => 1, 'index_number' => 0, 'user_id' => 1, 'text' => 'DOG'],
        ['list_id' => 1, 'index_number' => 1, 'user_id' => 1, 'text' => 'CAT'],
        ['list_id' => 1, 'index_number' => 2, 'user_id' => 1, 'text' => 'FROG'],
        ['list_id' => 1, 'index_number' => 3, 'user_id' => 1, 'text' => 'COW'],
        ['list_id' => 1, 'index_number' => 4, 'user_id' => 1, 'text' => 'SHEEP'],
        ['list_id' => 1, 'index_number' => 5, 'user_id' => 1, 'text' => 'LION'],

        ['list_id' => 2, 'index_number' => 0, 'user_id' => 1, 'text' => 'POUND'],
        ['list_id' => 2, 'index_number' => 1, 'user_id' => 1, 'text' => 'FISH'],
        ['list_id' => 2, 'index_number' => 2, 'user_id' => 1, 'text' => 'FOOT'],
        ['list_id' => 2, 'index_number' => 3, 'user_id' => 1, 'text' => 'MILK'],
        ['list_id' => 2, 'index_number' => 4, 'user_id' => 1, 'text' => 'SUPER'],
        ['list_id' => 2, 'index_number' => 5, 'user_id' => 1, 'text' => 'HEART']
      ]
    );
  }
}
