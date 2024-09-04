<?php

namespace Database\Seeders;

use App\Models\Expense;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExpenseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $categories = ['Food', 'Transport', 'Entertainment', 'Bills', 'Shopping'];

        for ($i = 0; $i < 10; $i++) {
            Expense::create([
                'description' => 'Expense ' . ($i + 1),
                'amount' => rand(10, 1000) / 10,
                'date' => Carbon::now()->subDays(rand(1, 30))->format('Y-m-d'),
                'category' => $categories[array_rand($categories)],
            ]);
        }
    }
}
