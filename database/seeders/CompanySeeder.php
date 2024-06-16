<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Company;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Company::create([
            'company_name' => 'Test Company',
            'company_email' => 'test@example.com',
            'company_phone' => '1234567890',
            'company_address' => 'Test Address',
            'created_by' => 1,

        ]);

        $user = User::find(1);
        $user->update([
            'company_id' => '1',
        ]);
    }
}
