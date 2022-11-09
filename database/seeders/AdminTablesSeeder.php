<?php

namespace Database\Seeders;

use Dcat\Admin\Models;
use Illuminate\Database\Seeder;
use DB;

class AdminTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // base tables
        Models\Menu::truncate();
        Models\Menu::insert(
            [
                [
                    "id" => 1,
                    "parent_id" => 0,
                    "order" => 1,
                    "title" => "Index",
                    "icon" => "fa-bar-chart",
                    "uri" => "/",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2021-09-29 10:19:07",
                    "updated_at" => "2021-10-15 12:52:36"
                ],
                [
                    "id" => 2,
                    "parent_id" => 0,
                    "order" => 15,
                    "title" => "Admin",
                    "icon" => "feather icon-settings",
                    "uri" => "",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2021-09-29 10:19:07",
                    "updated_at" => "2021-10-01 14:11:01"
                ],
                [
                    "id" => 3,
                    "parent_id" => 0,
                    "order" => 13,
                    "title" => "工作團隊",
                    "icon" => "fa-steam",
                    "uri" => "auth/users",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2021-09-29 10:19:07",
                    "updated_at" => "2021-10-15 12:54:47"
                ],
                [
                    "id" => 4,
                    "parent_id" => 2,
                    "order" => 16,
                    "title" => "Roles",
                    "icon" => "",
                    "uri" => "auth/roles",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2021-09-29 10:19:07",
                    "updated_at" => "2021-10-01 14:11:01"
                ],
                [
                    "id" => 5,
                    "parent_id" => 2,
                    "order" => 17,
                    "title" => "Permission",
                    "icon" => "",
                    "uri" => "auth/permissions",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2021-09-29 10:19:07",
                    "updated_at" => "2021-10-01 14:11:01"
                ],
                [
                    "id" => 6,
                    "parent_id" => 2,
                    "order" => 18,
                    "title" => "Menu",
                    "icon" => "",
                    "uri" => "auth/menu",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2021-09-29 10:19:07",
                    "updated_at" => "2021-10-01 14:11:01"
                ],
                [
                    "id" => 7,
                    "parent_id" => 2,
                    "order" => 19,
                    "title" => "Extensions",
                    "icon" => "",
                    "uri" => "auth/extensions",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2021-09-29 10:19:07",
                    "updated_at" => "2021-10-01 14:11:01"
                ],
                [
                    "id" => 9,
                    "parent_id" => 0,
                    "order" => 3,
                    "title" => "最新消息",
                    "icon" => "fa-newspaper-o",
                    "uri" => "/activity",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2021-09-27 23:30:28",
                    "updated_at" => "2021-10-15 12:52:56"
                ],
                [
                    "id" => 10,
                    "parent_id" => 26,
                    "order" => 8,
                    "title" => "超跑車款",
                    "icon" => "fa-circle-o",
                    "uri" => "/car",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2021-09-27 23:30:43",
                    "updated_at" => "2021-10-01 14:11:01"
                ],
                [
                    "id" => 11,
                    "parent_id" => 26,
                    "order" => 9,
                    "title" => "性能車款",
                    "icon" => "fa-circle-o",
                    "uri" => "/power",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2021-09-27 23:30:55",
                    "updated_at" => "2021-10-01 14:11:01"
                ],
                [
                    "id" => 12,
                    "parent_id" => 25,
                    "order" => 11,
                    "title" => "租車流程",
                    "icon" => "fa-circle-o",
                    "uri" => "/sop",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2021-09-27 23:31:05",
                    "updated_at" => "2021-10-01 14:11:01"
                ],
                [
                    "id" => 13,
                    "parent_id" => 25,
                    "order" => 12,
                    "title" => "租車須知",
                    "icon" => "fa-circle-o",
                    "uri" => "/notice",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2021-09-27 23:31:26",
                    "updated_at" => "2021-10-01 14:11:01"
                ],
                [
                    "id" => 14,
                    "parent_id" => 0,
                    "order" => 2,
                    "title" => "首頁圖片",
                    "icon" => "fa-image",
                    "uri" => "/banner",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2021-09-27 23:52:47",
                    "updated_at" => "2021-10-15 12:52:46"
                ],
                [
                    "id" => 17,
                    "parent_id" => 0,
                    "order" => 14,
                    "title" => "網站配置",
                    "icon" => "fa-briefcase",
                    "uri" => "/settings",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2021-09-29 12:13:06",
                    "updated_at" => "2021-10-15 12:54:59"
                ],
                [
                    "id" => 22,
                    "parent_id" => 24,
                    "order" => 6,
                    "title" => "文章",
                    "icon" => "fa-circle-o",
                    "uri" => "/post",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2021-10-01 12:23:30",
                    "updated_at" => "2021-10-01 13:11:48"
                ],
                [
                    "id" => 23,
                    "parent_id" => 24,
                    "order" => 5,
                    "title" => "主題",
                    "icon" => "fa-circle-o",
                    "uri" => "/subject",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2021-10-01 12:23:41",
                    "updated_at" => "2021-10-01 13:11:48"
                ],
                [
                    "id" => 24,
                    "parent_id" => 0,
                    "order" => 4,
                    "title" => "超跑職人",
                    "icon" => "fa-columns",
                    "uri" => NULL,
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2021-10-01 13:11:32",
                    "updated_at" => "2021-10-15 12:53:30"
                ],
                [
                    "id" => 25,
                    "parent_id" => 0,
                    "order" => 10,
                    "title" => "租車管理",
                    "icon" => "fa-book",
                    "uri" => NULL,
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2021-10-01 14:10:21",
                    "updated_at" => "2021-10-15 12:54:24"
                ],
                [
                    "id" => 26,
                    "parent_id" => 0,
                    "order" => 7,
                    "title" => "車款管理",
                    "icon" => "fa-inbox",
                    "uri" => NULL,
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2021-10-01 14:10:36",
                    "updated_at" => "2021-10-15 12:57:26"
                ]
            ]
        );

        Models\Permission::truncate();
        Models\Permission::insert(
            [
                [
                    "id" => 1,
                    "name" => "Auth management",
                    "slug" => "auth-management",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 1,
                    "parent_id" => 0,
                    "created_at" => "2021-09-29 10:19:07",
                    "updated_at" => NULL
                ],
                [
                    "id" => 2,
                    "name" => "Users",
                    "slug" => "users",
                    "http_method" => "",
                    "http_path" => "/auth/users*",
                    "order" => 2,
                    "parent_id" => 1,
                    "created_at" => "2021-09-29 10:19:07",
                    "updated_at" => NULL
                ],
                [
                    "id" => 3,
                    "name" => "Roles",
                    "slug" => "roles",
                    "http_method" => "",
                    "http_path" => "/auth/roles*",
                    "order" => 3,
                    "parent_id" => 1,
                    "created_at" => "2021-09-29 10:19:07",
                    "updated_at" => NULL
                ],
                [
                    "id" => 4,
                    "name" => "Permissions",
                    "slug" => "permissions",
                    "http_method" => "",
                    "http_path" => "/auth/permissions*",
                    "order" => 4,
                    "parent_id" => 1,
                    "created_at" => "2021-09-29 10:19:07",
                    "updated_at" => NULL
                ],
                [
                    "id" => 5,
                    "name" => "Menu",
                    "slug" => "menu",
                    "http_method" => "",
                    "http_path" => "/auth/menu*",
                    "order" => 5,
                    "parent_id" => 1,
                    "created_at" => "2021-09-29 10:19:07",
                    "updated_at" => NULL
                ],
                [
                    "id" => 6,
                    "name" => "Extension",
                    "slug" => "extension",
                    "http_method" => "",
                    "http_path" => "/auth/extensions*",
                    "order" => 6,
                    "parent_id" => 1,
                    "created_at" => "2021-09-29 10:19:07",
                    "updated_at" => NULL
                ],
                [
                    "id" => 7,
                    "name" => "後台管理權限",
                    "slug" => "Admin",
                    "http_method" => "",
                    "http_path" => "/activity*,/activity/create*,/banner*,/banner/create*,/car*,/car/create*,/power*,/power/create*,/sop*,/sop/create*,/notice*,/notice/create*,/post*,/post/create*,/subject*,/subject/create*,/settings*,/auth/users*,/auth/users/create*",
                    "order" => 7,
                    "parent_id" => 0,
                    "created_at" => "2021-09-29 10:28:16",
                    "updated_at" => "2021-10-15 13:16:16"
                ]
            ]
        );

        Models\Role::truncate();
        Models\Role::insert(
            [
                [
                    "id" => 1,
                    "name" => "Administrator",
                    "slug" => "administrator",
                    "created_at" => "2021-09-29 10:19:07",
                    "updated_at" => "2021-09-29 10:19:07"
                ],
                [
                    "id" => 2,
                    "name" => "行銷",
                    "slug" => "MD",
                    "created_at" => "2021-09-29 10:24:57",
                    "updated_at" => "2021-09-29 10:24:57"
                ],
                [
                    "id" => 3,
                    "name" => "行政",
                    "slug" => "AD",
                    "created_at" => "2021-09-29 10:25:09",
                    "updated_at" => "2021-09-29 10:25:09"
                ]
            ]
        );

        Models\Setting::truncate();
		Models\Setting::insert(
			[
                [
                    "slug" => "crm_description",
                    "value" => "網站描述",
                    "created_at" => "2021-09-29 13:05:58",
                    "updated_at" => "2021-09-29 13:05:58"
                ],
                [
                    "slug" => "crm_keyword",
                    "value" => "超跑,租貸,頂級",
                    "created_at" => "2021-09-29 13:38:47",
                    "updated_at" => "2021-09-29 13:42:22"
                ],
                [
                    "slug" => "crm_logo",
                    "value" => "images/c52b995cba48f982d1ebb538eda887a6.png",
                    "created_at" => "2021-09-29 13:13:28",
                    "updated_at" => "2021-09-29 13:29:10"
                ],
                [
                    "slug" => "crm_name",
                    "value" => "CARGOBACK",
                    "created_at" => "2021-09-29 13:04:49",
                    "updated_at" => "2021-09-29 13:58:25"
                ],
                [
                    "slug" => "crm_og_description",
                    "value" => "臉書描述",
                    "created_at" => "2021-09-29 13:05:58",
                    "updated_at" => "2021-09-29 13:05:58"
                ],
                [
                    "slug" => "crm_og_image",
                    "value" => "images/bg-auth3.jpg",
                    "created_at" => "2021-09-29 13:05:58",
                    "updated_at" => "2021-09-29 13:31:33"
                ],
                [
                    "slug" => "crm_og_name",
                    "value" => "臉書標題",
                    "created_at" => "2021-09-29 13:05:58",
                    "updated_at" => "2021-09-29 13:05:58"
                ],
                [
                    "slug" => "crm_og_site_name",
                    "value" => "臉書次標題",
                    "created_at" => "2021-09-29 13:05:58",
                    "updated_at" => "2021-09-29 13:05:58"
                ],
                [
                    "slug" => "crm_og_url",
                    "value" => "http://localhost:8000/",
                    "created_at" => "2021-09-29 13:05:58",
                    "updated_at" => "2021-09-29 13:16:34"
                ],
                [
                    "slug" => "crm_url",
                    "value" => "http://localhost:8000/",
                    "created_at" => "2021-09-29 13:05:58",
                    "updated_at" => "2021-09-29 13:16:34"
                ]
            ]
		);

		Models\Extension::truncate();
		Models\Extension::insert(
			[

            ]
		);

		Models\ExtensionHistory::truncate();
		Models\ExtensionHistory::insert(
			[

            ]
		);

        // pivot tables
        DB::table('admin_permission_menu')->truncate();
		DB::table('admin_permission_menu')->insert(
			[
                [
                    "permission_id" => 7,
                    "menu_id" => 1,
                    "created_at" => "2021-10-15 13:14:17",
                    "updated_at" => "2021-10-15 13:14:17"
                ],
                [
                    "permission_id" => 7,
                    "menu_id" => 3,
                    "created_at" => "2021-10-15 13:14:17",
                    "updated_at" => "2021-10-15 13:14:17"
                ],
                [
                    "permission_id" => 7,
                    "menu_id" => 9,
                    "created_at" => "2021-10-15 13:05:36",
                    "updated_at" => "2021-10-15 13:05:36"
                ],
                [
                    "permission_id" => 7,
                    "menu_id" => 10,
                    "created_at" => "2021-10-15 13:14:17",
                    "updated_at" => "2021-10-15 13:14:17"
                ],
                [
                    "permission_id" => 7,
                    "menu_id" => 11,
                    "created_at" => "2021-10-15 13:14:17",
                    "updated_at" => "2021-10-15 13:14:17"
                ],
                [
                    "permission_id" => 7,
                    "menu_id" => 12,
                    "created_at" => "2021-10-15 13:14:17",
                    "updated_at" => "2021-10-15 13:14:17"
                ],
                [
                    "permission_id" => 7,
                    "menu_id" => 13,
                    "created_at" => "2021-10-15 13:14:17",
                    "updated_at" => "2021-10-15 13:14:17"
                ],
                [
                    "permission_id" => 7,
                    "menu_id" => 14,
                    "created_at" => "2021-10-15 13:14:17",
                    "updated_at" => "2021-10-15 13:14:17"
                ],
                [
                    "permission_id" => 7,
                    "menu_id" => 17,
                    "created_at" => "2021-10-15 13:14:17",
                    "updated_at" => "2021-10-15 13:14:17"
                ],
                [
                    "permission_id" => 7,
                    "menu_id" => 22,
                    "created_at" => "2021-10-15 13:14:17",
                    "updated_at" => "2021-10-15 13:14:17"
                ],
                [
                    "permission_id" => 7,
                    "menu_id" => 23,
                    "created_at" => "2021-10-15 13:14:17",
                    "updated_at" => "2021-10-15 13:14:17"
                ],
                [
                    "permission_id" => 7,
                    "menu_id" => 24,
                    "created_at" => "2021-10-15 13:14:17",
                    "updated_at" => "2021-10-15 13:14:17"
                ],
                [
                    "permission_id" => 7,
                    "menu_id" => 25,
                    "created_at" => "2021-10-15 13:14:17",
                    "updated_at" => "2021-10-15 13:14:17"
                ],
                [
                    "permission_id" => 7,
                    "menu_id" => 26,
                    "created_at" => "2021-10-15 13:14:17",
                    "updated_at" => "2021-10-15 13:14:17"
                ]
            ]
		);

        DB::table('admin_role_menu')->truncate();
        DB::table('admin_role_menu')->insert(
            [
                [
                    "role_id" => 3,
                    "menu_id" => 1,
                    "created_at" => "2021-09-29 10:25:09",
                    "updated_at" => "2021-09-29 10:25:09"
                ],
                [
                    "role_id" => 3,
                    "menu_id" => 2,
                    "created_at" => "2021-10-15 13:05:18",
                    "updated_at" => "2021-10-15 13:05:18"
                ],
                [
                    "role_id" => 3,
                    "menu_id" => 3,
                    "created_at" => "2021-09-29 10:25:09",
                    "updated_at" => "2021-09-29 10:25:09"
                ],
                [
                    "role_id" => 3,
                    "menu_id" => 5,
                    "created_at" => "2021-09-29 10:25:09",
                    "updated_at" => "2021-09-29 10:25:09"
                ],
                [
                    "role_id" => 3,
                    "menu_id" => 9,
                    "created_at" => "2021-09-29 10:25:09",
                    "updated_at" => "2021-09-29 10:25:09"
                ],
                [
                    "role_id" => 3,
                    "menu_id" => 10,
                    "created_at" => "2021-09-29 10:25:09",
                    "updated_at" => "2021-09-29 10:25:09"
                ],
                [
                    "role_id" => 3,
                    "menu_id" => 11,
                    "created_at" => "2021-09-29 10:25:09",
                    "updated_at" => "2021-09-29 10:25:09"
                ],
                [
                    "role_id" => 3,
                    "menu_id" => 12,
                    "created_at" => "2021-09-29 10:25:09",
                    "updated_at" => "2021-09-29 10:25:09"
                ],
                [
                    "role_id" => 3,
                    "menu_id" => 13,
                    "created_at" => "2021-09-29 10:25:09",
                    "updated_at" => "2021-09-29 10:25:09"
                ],
                [
                    "role_id" => 3,
                    "menu_id" => 14,
                    "created_at" => "2021-09-29 10:25:09",
                    "updated_at" => "2021-09-29 10:25:09"
                ],
                [
                    "role_id" => 3,
                    "menu_id" => 17,
                    "created_at" => "2021-10-15 13:05:18",
                    "updated_at" => "2021-10-15 13:05:18"
                ],
                [
                    "role_id" => 3,
                    "menu_id" => 22,
                    "created_at" => "2021-10-15 13:05:18",
                    "updated_at" => "2021-10-15 13:05:18"
                ],
                [
                    "role_id" => 3,
                    "menu_id" => 23,
                    "created_at" => "2021-10-15 13:05:18",
                    "updated_at" => "2021-10-15 13:05:18"
                ],
                [
                    "role_id" => 3,
                    "menu_id" => 24,
                    "created_at" => "2021-10-15 13:05:18",
                    "updated_at" => "2021-10-15 13:05:18"
                ],
                [
                    "role_id" => 3,
                    "menu_id" => 25,
                    "created_at" => "2021-10-15 13:05:18",
                    "updated_at" => "2021-10-15 13:05:18"
                ],
                [
                    "role_id" => 3,
                    "menu_id" => 26,
                    "created_at" => "2021-10-15 13:05:18",
                    "updated_at" => "2021-10-15 13:05:18"
                ]
            ]
        );

        DB::table('admin_role_permissions')->truncate();
        DB::table('admin_role_permissions')->insert(
            [
                [
                    "role_id" => 2,
                    "permission_id" => 7,
                    "created_at" => "2021-09-29 10:28:40",
                    "updated_at" => "2021-09-29 10:28:40"
                ],
                [
                    "role_id" => 3,
                    "permission_id" => 4,
                    "created_at" => "2021-10-15 13:05:18",
                    "updated_at" => "2021-10-15 13:05:18"
                ],
                [
                    "role_id" => 3,
                    "permission_id" => 7,
                    "created_at" => "2021-09-29 10:28:49",
                    "updated_at" => "2021-09-29 10:28:49"
                ]
            ]
        );

        // finish
    }
}
