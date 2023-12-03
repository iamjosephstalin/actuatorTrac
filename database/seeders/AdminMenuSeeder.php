<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Schema;

class AdminMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        if (Schema::hasTable('admin_menu')) {
            DB::table('admin_menu')->truncate();
            DB::table('admin_menu')->insert([
                    [
                        "parent_id" => 0,
                        "order" => 1,
                        "title" => "Dashboard",
                        "icon" => "icon-chart-bar",
                        "uri" => "/",
                        "permission" => null,
                        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                    ],
                    [
                        "parent_id" => 0,
                        "order" => 2,
                        "title" => "Admin",
                        "icon" => "icon-server",
                        "uri" => "",
                        "permission" => null,
                        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                    ],
                    [
                        "parent_id" => 2,
                        "order" => 3,
                        "title" => "Users",
                        "icon" => "icon-users",
                        "uri" => "auth/users",
                        "permission" => null,
                        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                    ],
                    [
                        "parent_id" => 2,
                        "order" => 4,
                        "title" => "Roles",
                        "icon" => "icon-user",
                        "uri" => "auth/roles",
                        "permission" => null,
                        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                    ],
                    [
                        "parent_id" => 2,
                        "order" => 5,
                        "title" => "Permission",
                        "icon" => "icon-ban",
                        "uri" => "auth/permissions",
                        "permission" => null,
                        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                    ],
                    [
                        "parent_id" => 2,
                        "order" => 6,
                        "title" => "Menu",
                        "icon" => "icon-bars",
                        "uri" => "auth/menu",
                        "permission" => null,
                        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                    ],
                    [
                        "parent_id" => 2,
                        "order" => 7,
                        "title" => "Operation log",
                        "icon" => "icon-history",
                        "uri" => "auth/logs",
                        "permission" => null,
                        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                    ],
                    [
                        "parent_id" => 0,
                        "order" => 8,
                        "title" => "Helpers",
                        "icon" => "icon-cogs",
                        "uri" => "",
                        "permission" => null,
                        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                    ],
                    [
                        "parent_id" => 8,
                        "order" => 12,
                        "title" => "Scaffold",
                        "icon" => "icon-keyboard",
                        "uri" => "helpers/scaffold",
                        "permission" => null,
                        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                    ],
                    [
                        "parent_id" => 8,
                        "order" => 9,
                        "title" => "Database terminal",
                        "icon" => "icon-database",
                        "uri" => "helpers/terminal/database",
                        "permission" => null,
                        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                    ],
                    [
                        "parent_id" => 8,
                        "order" => 10,
                        "title" => "Laravel artisan",
                        "icon" => "icon-terminal",
                        "uri" => "helpers/terminal/artisan",
                        "permission" => null,
                        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                    ],
                    [
                        "parent_id" => 8,
                        "order" => 11,
                        "title" => "Routes",
                        "icon" => "icon-list-alt",
                        "uri" => "helpers/routes",
                        "permission" => null,
                        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                    ],
                    [
                        "parent_id" => 0,
                        "order" => 13,
                        "title" => "Settings",
                        "icon" => "icon-wrench",
                        "uri" => "settings",
                        "permission" => '*',
                        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                    ],
                    [
                        "parent_id" => 13,
                        "order" => 0,
                        "title" => "Regional Settings",
                        "icon" => "icon-angle-right",
                        "uri" => "settings/reg-settings",
                        "permission" => '*',
                        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                    ],
                    [
                        "parent_id" => 14,
                        "order" => 0,
                        "title" => "Currencies",
                        "icon" => "icon-angle-right",
                        "uri" => "settings/reg-settings/currencies",
                        "permission" => '*',
                        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                    ],
                    [
                        "parent_id" => 14,
                        "order" => 0,
                        "title" => "VAT Rate",
                        "icon" => "icon-angle-right",
                        "uri" => "settings/reg-settings/vat-rates",
                        "permission" => '*',
                        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                    ],
                    [
                        "parent_id" => 14,
                        "order" => 0,
                        "title" => "Units",
                        "icon" => "icon-angle-right",
                        "uri" => "settings/reg-settings/units",
                        "permission" => '*',
                        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                    ]
            ]);
        }
        Schema::enableForeignKeyConstraints();
    }
}
