<?php

use Illuminate\Database\Seeder;

class CordinateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [
            [1, 1, 1, 1, 0, 0, 0, 0, 0, 1, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1, 1, 1, 1, 0, 0, 0, 0, 0, 1, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1],
            [1, 1, 1, 0, 0, 0, 0, 0, 0, 1, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1, 1, 1, 1, 0, 0, 0, 0, 0, 1, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1],
            [1, 1, 0, 0, 0, 0, 0, 0, 1, 1, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1, 1, 1, 1, 0, 0, 0, 0, 0, 1, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1],
            [1, 1, 0, 0, 0, 0, 0, 1, 0, 0, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1, 1, 1, 1, 0, 0, 0, 0, 0, 1, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1],
            [1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1, 1, 1, 1, 0, 0, 0, 0, 0, 1, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1],
            [1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1, 1, 1, 1, 0, 0, 0, 0, 0, 1, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1],
            [1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1, 1, 1, 1, 0, 0, 0, 0, 0, 1, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1],
            [1, 1, 1, 1, 1, 1, 1, 0, 0, 1, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1, 1, 1, 1, 0, 0, 0, 0, 0, 1, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1],
            [1, 1, 1, 1, 1, 2, 1, 1, 0, 0, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1, 1, 1, 1, 0, 0, 0, 0, 0, 1, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1],
            [1, 1, 1, 1, 1, 2, 1, 1, 0, 0, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1, 1, 1, 1, 0, 0, 0, 0, 0, 1, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1],
            [1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1, 1, 1, 1, 0, 0, 0, 0, 0, 1, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2],
            [1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1, 1, 1, 1, 0, 0, 0, 0, 0, 1, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2,2],
            [1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1, 1, 1, 1, 0, 0, 0, 0, 0, 1, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2,3],
            [1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1, 1, 1, 1, 0, 0, 0, 0, 0, 1, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2,2,3],
            [1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1, 1, 1, 1, 0, 0, 0, 0, 0, 1, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2,3,3],
            [1, 1, 1, 3, 1, 1, 1, 1, 0, 0, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1, 1, 1, 1, 0, 0, 0, 0, 0, 1, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2,2,3,3],
            [1, 1, 1, 3, 1, 1, 1, 1, 0, 0, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1, 1, 1, 1, 0, 0, 0, 0, 0, 1, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2,3,3,3],
            [1, 1, 1, 3, 1, 1, 1, 1, 0, 0, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1, 1, 1, 1, 0, 0, 0, 0, 0, 1, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2,2,3,3,3],
            [1, 1, 1, 3, 1, 1, 1, 1, 0, 0, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1, 1, 1, 1, 0, 0, 0, 0, 0, 1, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2,3,3,3,3],
            [1, 1, 1, 3, 1, 1, 1, 1, 0, 0, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1, 1, 1, 1, 0, 0, 0, 0, 0, 1, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2,3,3,3,3],
            [1, 1, 1, 3, 1, 1, 1, 1, 0, 0, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1, 1, 1, 1, 0, 0, 0, 0, 0, 1, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2,3,3,3,3],
            [1, 1, 1, 3, 1, 1, 1, 1, 0, 0, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1, 1, 1, 1, 0, 0, 0, 0, 0, 1, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,2,2,3,3,3,3],
            [1, 1, 1, 3, 1, 1, 1, 1, 0, 0, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1, 1, 1, 1, 0, 0, 0, 0, 0, 1, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,2,3,3,3,3,3],
            [1, 1, 1, 3, 1, 1, 1, 1, 0, 0, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1, 1, 1, 1, 0, 0, 0, 0, 0, 1, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,2,3,3,3,3,3],
            [1, 1, 1, 3, 1, 1, 1, 1, 0, 0, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1, 1, 1, 1, 0, 0, 0, 0, 0, 1, 2,1,1,1,1,1,1,1,1,1,1,1,1,2,2,3,3,3,3,3],
            [1, 1, 1, 3, 1, 1, 1, 1, 0, 0, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1, 1, 1, 1, 0, 0, 0, 0, 0, 1, 2,1,1,1,1,1,1,1,1,1,1,1,1,2,3,3,3,3,3,3],
            [1, 1, 1, 3, 1, 1, 1, 1, 0, 0, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1, 1, 1, 1, 0, 0, 0, 0, 0, 1, 2,1,1,1,1,1,1,1,1,1,1,1,1,2,3,3,3,3,3,3],
            [1, 1, 1, 3, 1, 1, 1, 1, 0, 0, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1, 1, 1, 1, 0, 0, 0, 0, 0, 1, 2,1,1,1,1,1,1,1,1,1,1,1,1,2,3,3,3,3,3,3],
            [1, 1, 1, 3, 1, 1, 1, 1, 0, 0, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1, 1, 1, 1, 0, 0, 0, 0, 0, 1, 2,1,1,1,1,1,1,1,1,1,1,1,2,2,3,3,3,3,3,3],
            [1, 1, 1, 3, 1, 1, 1, 1, 0, 0, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1, 1, 1, 1, 0, 0, 0, 0, 0, 1, 2,1,1,1,1,1,1,1,1,1,1,1,2,3,3,3,3,3,3,3],
            [1, 1, 1, 3, 1, 1, 1, 1, 0, 0, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1, 1, 1, 1, 0, 0, 0, 0, 0, 1, 2,1,1,1,1,1,1,1,1,1,1,1,2,3,3,3,3,3,3,3],
            [1, 1, 1, 1, 0, 0, 0, 0, 0, 1, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1, 1, 1, 1, 0, 0, 0, 0, 0, 1, 2,1,1,1,1,1,1,1,1,1,1,2,2,3,3,3,3,3,3,3],
            [1, 1, 1, 0, 0, 0, 0, 0, 0, 1, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1, 1, 1, 1, 0, 0, 0, 0, 0, 1, 2,1,1,1,1,1,1,1,1,1,2,2,3,3,3,3,3,3,3,3],
            [1, 1, 0, 0, 0, 0, 0, 0, 1, 1, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1, 1, 1, 1, 0, 0, 0, 0, 0, 1, 2,1,1,1,1,1,1,1,1,2,2,3,3,3,3,3,3,3,3,3],
            [1, 1, 0, 0, 0, 0, 0, 1, 0, 0, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1, 1, 1, 1, 0, 0, 0, 0, 0, 1, 2,1,1,1,1,1,1,1,1,2,3,3,3,3,3,3,3,3,3,3],
            [1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1, 1, 1, 1, 0, 0, 0, 0, 0, 1, 2,1,1,1,1,1,1,1,1,2,3,3,3,3,3,3,3,3,3,3],
            [1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1, 1, 1, 1, 0, 0, 0, 0, 0, 1, 2,1,1,1,1,1,1,1,1,2,3,3,3,3,3,3,3,3,3,3],
            [1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1, 1, 1, 1, 0, 0, 0, 0, 0, 1, 2,1,1,1,1,1,1,1,2,2,3,3,3,3,3,3,3,3,3,3],
            [1, 1, 1, 1, 1, 1, 1, 0, 0, 1, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1, 1, 1, 1, 0, 0, 0, 0, 0, 1, 2,1,1,1,1,1,1,1,2,3,3,3,3,3,3,3,3,3,3,3],
            [1, 1, 1, 1, 1, 2, 1, 1, 0, 0, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1, 1, 1, 1, 0, 0, 0, 0, 0, 1, 2,1,1,1,1,1,1,1,2,2,3,3,3,3,3,3,3,3,3,3],
            [1, 1, 1, 1, 1, 2, 1, 1, 0, 0, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1, 1, 1, 1, 0, 0, 0, 0, 0, 1, 2,1,1,1,1,1,1,1,1,2,2,3,3,3,3,3,3,3,3,3],
            [1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1, 1, 1, 1, 0, 0, 0, 0, 0, 1, 2,1,1,1,1,1,1,1,1,1,2,2,3,3,3,3,3,3,3,3],
            [1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1, 1, 1, 1, 0, 0, 0, 0, 0, 1, 2,1,1,1,1,1,1,1,1,1,1,2,3,3,3,3,3,3,3,3],
            [1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1, 1, 1, 1, 0, 0, 0, 0, 0, 1, 2,1,1,1,1,1,1,1,1,1,2,2,3,3,3,3,3,3,3,3],
            [1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1, 1, 1, 1, 0, 0, 0, 0, 0, 1, 2,1,1,1,1,1,1,1,1,2,2,3,3,3,3,3,3,3,3,3],
            [1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1, 1, 1, 1, 0, 0, 0, 0, 0, 1, 2,1,1,1,1,1,1,1,2,2,3,3,3,3,3,3,3,3,3,3],
            [1, 1, 1, 3, 1, 1, 1, 1, 0, 0, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1, 1, 1, 1, 0, 0, 0, 0, 0, 1, 2,1,1,1,1,1,1,2,2,3,3,3,3,3,3,3,3,3,3,3],
            [1, 1, 1, 3, 1, 1, 1, 1, 0, 0, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1, 1, 1, 1, 0, 0, 0, 0, 0, 1, 2,1,1,1,1,1,2,2,3,3,3,3,3,3,3,3,3,3,3,3],
            [1, 1, 1, 3, 1, 1, 1, 1, 0, 0, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1, 1, 1, 1, 0, 0, 0, 0, 0, 1, 2,1,1,1,1,2,3,3,3,3,3,3,3,3,3,3,3,3,3,3],
            [1, 1, 1, 3, 1, 1, 1, 1, 0, 0, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1, 1, 1, 1, 0, 0, 0, 0, 0, 1, 2,1,1,1,1,2,3,3,3,3,3,3,3,3,3,3,3,3,3,3],
            [1, 1, 1, 3, 1, 1, 1, 1, 0, 0, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1, 1, 1, 1, 0, 0, 0, 0, 0, 1, 2,1,1,1,1,2,3,3,3,3,3,3,3,3,3,3,3,3,3,3],
            [1, 1, 1, 3, 1, 1, 1, 1, 0, 0, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1, 1, 1, 1, 0, 0, 0, 0, 0, 1, 2,1,1,1,1,2,3,3,3,3,3,3,3,3,3,3,3,3,3,3],
            [1, 1, 1, 3, 1, 1, 1, 1, 0, 0, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1, 1, 1, 1, 0, 0, 0, 0, 0, 1, 2,1,1,1,1,2,3,3,3,3,3,3,3,3,3,3,3,3,3,3],
            [1, 1, 1, 3, 1, 1, 1, 1, 0, 0, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1, 1, 1, 1, 0, 0, 0, 0, 0, 1, 2,1,1,1,2,2,2,3,3,3,3,3,3,3,3,3,3,3,3,3],
            [1, 1, 1, 3, 1, 1, 1, 1, 0, 0, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1, 1, 1, 1, 0, 0, 0, 0, 0, 1, 2,1,1,1,2,3,2,2,3,3,3,3,3,3,3,3,3,3,3,3],
            [1, 1, 1, 3, 1, 1, 1, 1, 0, 0, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1, 1, 1, 1, 0, 0, 0, 0, 0, 1, 2,1,1,1,2,3,3,2,2,3,3,3,3,3,3,3,3,3,3,3],
            [1, 1, 1, 3, 1, 1, 1, 1, 0, 0, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1, 1, 1, 1, 0, 0, 0, 0, 0, 1, 2,1,1,1,2,3,3,3,2,2,3,3,3,3,3,3,3,3,3,3],
            [1, 1, 1, 3, 1, 1, 1, 1, 0, 0, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1, 1, 1, 1, 0, 0, 0, 0, 0, 1, 2,1,1,1,2,3,3,3,3,2,2,3,3,3,3,3,3,3,3,3],
            [1, 1, 1, 3, 1, 1, 1, 1, 0, 0, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1, 1, 1, 1, 0, 0, 0, 0, 0, 1, 2,1,1,1,1,2,3,3,3,3,2,2,3,3,3,3,3,3,3,3],
            [1, 1, 1, 3, 1, 1, 1, 1, 0, 0, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1, 1, 1, 1, 0, 0, 0, 0, 0, 1, 2,1,1,1,1,2,3,3,3,3,3,2,2,3,3,3,3,3,3,3],
            [1, 1, 1, 3, 1, 1, 1, 1, 0, 0, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1, 1, 1, 1, 0, 0, 0, 0, 0, 1, 2,1,1,1,1,2,3,3,3,3,3,3,2,3,3,3,3,3,3,3],
            [1, 1, 1, 3, 1, 1, 1, 1, 0, 0, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1, 1, 1, 1, 0, 0, 0, 0, 0, 1, 2,1,1,1,1,1,2,3,3,3,3,3,2,3,3,3,3,3,3,3],
            [1, 1, 1, 3, 1, 1, 1, 1, 0, 0, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1, 1, 1, 1, 0, 0, 0, 0, 0, 1, 2,1,1,1,1,1,2,2,3,3,3,3,2,3,3,3,3,3,3,3],
            [1, 1, 1, 3, 1, 1, 1, 1, 0, 0, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1, 1, 1, 1, 0, 0, 0, 0, 0, 1, 2,1,1,1,1,1,1,2,2,3,3,2,2,3,3,3,3,3,3,3],
            [1, 1, 1, 3, 1, 1, 1, 1, 0, 0, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1, 1, 1, 1, 0, 0, 0, 0, 0, 1, 2,1,1,1,1,1,1,1,2,2,3,2,3,3,3,3,3,3,3,3],
            [1, 1, 1, 3, 1, 1, 1, 1, 0, 0, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1, 1, 1, 1, 0, 0, 0, 0, 0, 1, 2,1,1,1,1,1,1,1,1,2,3,2,3,3,3,3,3,3,3,3],
            [1, 1, 1, 3, 1, 1, 1, 1, 0, 0, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1, 1, 1, 1, 0, 0, 0, 0, 0, 1, 2,1,1,1,1,1,1,1,1,2,2,2,3,3,3,3,3,3,3,3],
            [1, 1, 1, 3, 1, 1, 1, 1, 0, 0, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1, 1, 1, 1, 0, 0, 0, 0, 0, 1, 2,1,1,1,1,1,1,1,1,2,2,3,3,3,3,3,3,3,3,3],
            [1, 1, 1, 3, 1, 1, 1, 1, 0, 0, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1, 1, 1, 1, 0, 0, 0, 0, 0, 1, 2,1,1,1,1,1,1,1,1,1,2,2,3,3,3,3,3,3,3,3],
            [1, 1, 1, 3, 1, 1, 1, 1, 0, 0, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1, 1, 1, 1, 0, 0, 0, 0, 0, 1, 2,1,1,1,1,1,1,1,1,1,1,2,2,3,3,3,3,3,3,3],
            [1, 1, 1, 3, 1, 1, 1, 1, 0, 0, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1, 1, 1, 1, 0, 0, 0, 0, 0, 1, 2,1,1,1,1,1,1,1,1,1,1,1,2,2,3,3,3,3,3,3],
            [1, 1, 1, 3, 1, 1, 1, 1, 0, 0, 2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1, 1, 1, 1, 0, 0, 0, 0, 0, 1, 2,1,1,1,1,1,1,1,1,1,1,1,1,2,3,3,3,3,3,3],
        ];

        foreach ($array as $arr){
            \App\Models\Coordinate::create([
                'y_coordinates'=>json_encode($arr)
            ]);
        }
    }
}
