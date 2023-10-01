<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Imports\CategoryImport;
use App\Imports\FoodImport;
use Maatwebsite\Excel\Facades\Excel;

class ImportData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:import-data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Imports data from xlsx files located in storage/app';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Excel::import(new CategoryImport, 'categories.xlsx');
        Excel::import(new FoodImport, 'food.xlsx');
    }
}
