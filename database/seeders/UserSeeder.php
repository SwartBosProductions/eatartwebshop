<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'first_name' => 'Jorrit',
                'insertion' => null,
                'last_name' => 'Bosma',
                'birthday' => '1981-10-14',
                'email' => 'bosma.jorrit@gmail.com',
                'password' => 'wijetenkunst',
                'street' => 'Boslaan',
                'house_num' => '53',
                'house_num_addition' => null,
                'postal_code' => '9449 PS',
                'city' => 'Nooitgedacht',
                'created_by' => 1,
                'role_id' => 1,
                'usergroup_id' => 3
            ],
            [
                'first_name' => 'Folkert',
                'insertion' => null,
                'last_name' => 'Swart',
                'birthday' => '1980-06-18',
                'email' => 'folkert@swartmail.nl',
                'password' => 'wijetenkunst',
                'street' => 'Hortensialaan',
                'house_num' => '11',
                'house_num_addition' => 'a',
                'postal_code' => '9713 KG',
                'city' => 'Groningen',
                'created_by' => 1,
                'role_id' => 1,
                'usergroup_id' => 3
            ],
            [
                'first_name' => 'Ré',
                'insertion' => null,
                'last_name' => 'Promeneer',
                'birthday' => '1955-03-28',
                'email' => 'repro@nhlstenden.nl',
                'password' => 'wijverkopenkunst',
                'street' => 'Rengerslaan',
                'house_num' => '10',
                'house_num_addition' => null,
                'postal_code' => '8917 DD',
                'city' => 'Leeuwarden',
                'created_by' => 1,
                'role_id' => 2,
                'usergroup_id' => 1
            ],
            [
                'first_name' => 'Art',
                'insertion' => null,
                'last_name' => 'Stiek',
                'birthday' => '2001-09-28',
                'email' => 'art@nhlstenden.nl',
                'password' => 'ikmaakkunst',
                'street' => 'Studentenlaan',
                'house_num' => '112',
                'house_num_addition' => 'A',
                'postal_code' => '8917 DA',
                'city' => 'Leeuwarden',
                'created_by' => 1,
                'role_id' => 3,
                'usergroup_id' => 2
            ],
            [
                'first_name' => 'Ella',
                'insertion' => null,
                'last_name' => 'Bella',
                'birthday' => '2002-07-08',
                'email' => 'ella@nhlstenden.nl',
                'password' => 'ikmaakkunst',
                'street' => 'Studentenlaan',
                'house_num' => '113',
                'house_num_addition' => 'B',
                'postal_code' => '8917 DB',
                'city' => 'Leeuwarden',
                'created_by' => 1,
                'role_id' => 3,
                'usergroup_id' => 2
            ],
            [
                'first_name' => 'Freek',
                'insertion' => null,
                'last_name' => 'Vonk',
                'birthday' => '2003-06-05',
                'email' => 'freek@nhlstenden.nl',
                'password' => 'ikmaakgeenkunst',
                'street' => 'Studentenlaan',
                'house_num' => '113',
                'house_num_addition' => 'C',
                'postal_code' => '8917 DB',
                'city' => 'Leeuwarden',
                'created_by' => 1,
                'role_id' => 4,
                'usergroup_id' => 2
            ],
            [
                'first_name' => 'Foekje',
                'insertion' => null,
                'last_name' => 'Futselaar',
                'birthday' => '2001-02-07',
                'email' => 'foekje@nhlstenden.nl',
                'password' => 'ikmaakgeenkunst',
                'street' => 'Studentenlaan',
                'house_num' => '113',
                'house_num_addition' => 'D',
                'postal_code' => '8917 DB',
                'city' => 'Leeuwarden',
                'created_by' => 1,
                'role_id' => 4,
                'usergroup_id' => 2
            ],
            [
                'first_name' => 'Fedde',
                'insertion' => null,
                'last_name' => 'Futselaar',
                'birthday' => '1962-02-07',
                'email' => 'fedde@futselaar.nl',
                'password' => 'ikbeneenopa',
                'street' => 'Opasteeg',
                'house_num' => '13',
                'house_num_addition' => 'F',
                'postal_code' => '8917 DS',
                'city' => 'Leeuwarden',
                'created_by' => 1,
                'role_id' => 4,
                'usergroup_id' => 3
            ],
            [
                'first_name' => 'Filanda',
                'insertion' => null,
                'last_name' => 'Futselaar',
                'birthday' => '1960-01-07',
                'email' => 'filanda@futselaar.nl',
                'password' => 'ikbeneenoma',
                'street' => 'Opasteeg',
                'house_num' => '13',
                'house_num_addition' => 'F',
                'postal_code' => '8917 DS',
                'city' => 'Leeuwarden',
                'created_by' => 1,
                'role_id' => 4,
                'usergroup_id' => 3
            ],
            [
                'first_name' => 'Leo',
                'insertion' => null,
                'last_name' => 'Raar',
                'birthday' => '1970-11-11',
                'email' => 'leo@nhlstenden.nl',
                'password' => 'ikbeneenleraar',
                'street' => 'Docentenkamp',
                'house_num' => '15',
                'house_num_addition' => null,
                'postal_code' => '8912 AS',
                'city' => 'Leeuwarden',
                'created_by' => 1,
                'role_id' => 4,
                'usergroup_id' => 1
            ],
            [
                'first_name' => 'Lea',
                'insertion' => null,
                'last_name' => 'Raar',
                'birthday' => '1970-11-11',
                'email' => 'lea@nhlstenden.nl',
                'password' => 'ikbeneenleraar',
                'street' => 'Docentenkamp',
                'house_num' => '13',
                'house_num_addition' => null,
                'postal_code' => '8912 AS',
                'city' => 'Leeuwarden',
                'created_by' => 1,
                'role_id' => 4,
                'usergroup_id' => 1
            ],
        ]);
    }
}
