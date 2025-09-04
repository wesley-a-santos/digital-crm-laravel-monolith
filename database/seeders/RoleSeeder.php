<?php

namespace Database\Seeders;

use App\Enums\Roles;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rows = [];

        foreach (Roles::cases() as $role) {
            $rows[] = [
                'id' => $role->value,
                'name' => $role->label(),
            ];
        }

        Role::upsert(values: $rows, uniqueBy: ['id'], update: ['name']);
    }
}
