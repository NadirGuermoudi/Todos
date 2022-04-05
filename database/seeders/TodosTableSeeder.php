<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Todo;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TodosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $todo = new Todo();
        $todo->title = "Todo numero 1";
        $todo->description = "description todo 1";
        $todo->done = false;
        $todo->order = 4;
        $todo->ends_at = Carbon::now()->addDays(10);
        $todo->save();

        $todo = new Todo();
        $todo->title = "Todo numero 2";
        $todo->description = "description todo 2";
        $todo->done = true;
        $todo->order = 3;
        $todo->ends_at = Carbon::now()->addDays(6);
        $todo->save();

        $todo = new Todo();
        $todo->title = "Todo numero 3";
        $todo->description = "description todo 3";
        $todo->done = false;
        $todo->order = 2;
        $todo->ends_at = Carbon::now()->addDays(5);
        $todo->save();

        $todo = new Todo();
        $todo->title = "Todo numero 4";
        $todo->description = "description todo 4";
        $todo->done = true;
        $todo->order = 1;
        $todo->ends_at = Carbon::now()->addDays(-2);
        $todo->save();
    }
}
