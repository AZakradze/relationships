<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Customer;
use App\Models\Developer;
use App\Models\Email;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Company::factory()->create()->each(function ($company) {
            Email::factory()->times(5)->create(['company_id' => $company->id]);
            Customer::factory()->times(5)->create(['company_id' => $company->id]);
            $company->developer()->attach(Developer::factory()->create());
        });

    }


}
