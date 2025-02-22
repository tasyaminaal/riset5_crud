<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Rbac extends Seeder
{
	public function run()
	{
		date_default_timezone_set("Asia/Bangkok");
		$now = date("Y-m-d H:i:s");
		$data = [
			[
				'email'             => 'dummy@stis.ac.id',
				'username'          => 'Dummy',
				'id_alumni'         => '0110160',
				'fullname'          => 'Dummy_dummy',
				'user_image'        => 'default.svg',
				'password_hash'     => '$2y$10$yLFu3bK0s5cHqd1VLT6Eh.GjA3H2GJzwqb6o/gjrhKXTWGkMsh3IS',
				'active'            => 1,
				'force_pass_reset'  => 0,
				'created_at'        => $now,
				'updated_at'        => $now
			]
		];
		$this->db->table('users')->insertBatch($data);

		$data = [
			[
				'name'          	=> 'Administrator',
				'description'       => ''
			],
			[
				'name'          	=> 'Alumni',
				'description'       => ''
			],
			[
				'name'          	=> 'Webservice Administrator',
				'description'       => ''
			],
			[
				'name'          	=> 'Developer',
				'description'       => ''
			]
		];
		$this->db->table('auth_groups')->insertBatch($data);

		$data = [
			[
				'target_scope'       => 'Tabel Users'
			],
			[
				'target_scope'       => 'Tabel Users Groups'
			],
			[
				'target_scope'       => 'Tabel Resources'
			],
			[
				'target_scope'       => 'Tabel Resources Access'
			],
			[
				'target_scope'       => 'Tabel Permission'
			],
			[
				'target_scope'       => 'Tabel Groups'
			]
		];
		$this->db->table('table_scope')->insertBatch($data);

		$data = [
			[
				'time'       		=> '2021-02-18 18:30:05',
				'user_name'       	=> 'dummy@stis.ac.id',
				'group_name'       	=> 'Alumni',
				'access_name'       => 3,
				'target_scope_id'   => 2,
				'description'       => 'Menghapus role/group Administrator untuk user Dummy_dummy',
				'status'       		=> 1
			],
			[
				'time'       		=> '2021-02-18 18:30:05',
				'user_name'       	=> 'dummy@stis.ac.id',
				'group_name'       	=> 'Administrator',
				'access_name'       => 3,
				'target_scope_id'   => 2,
				'description'       => 'Menghapus role/group Alumni untuk user Dummy_dummy',
				'status'       		=> 1
			],
			[
				'time'       		=> '2021-02-18 18:30:05',
				'user_name'       	=> 'dummy@stis.ac.id',
				'group_name'       	=> 'Administrator,Alumni',
				'access_name'       => 1,
				'target_scope_id'   => 2,
				'description'       => 'MMenambahkan role/group Alumni untuk user Dummy_dummy',
				'status'       		=> 1
			]
		];
		$this->db->table('activity_log')->insertBatch($data);

		$data = [
			[
				'group_id'      => 1,
				'user_id'       => 1
			],
			[
				'group_id'      => 2,
				'user_id'       => 1
			],
			[
				'group_id'      => 3,
				'user_id'       => 1
			],
			[
				'group_id'      => 4,
				'user_id'       => 1
			],
		];
		$this->db->table('auth_groups_users')->insertBatch($data);

		$data = [
			[
				'name'       	=> 'user-index',
				'description'   => '',
			]
		];
		$this->db->table('auth_permissions')->insertBatch($data);

		$data = [
			[
				'crud_name'       => 'Create'
			],
			[
				'crud_name'       => 'Read'
			],
			[
				'crud_name'       => 'Update'
			],
			[
				'crud_name'       => 'Delete'
			]
		];
		$this->db->table('crud')->insertBatch($data);

		$data = [
			[
				'menu_name'     => 'Magement RBAC',
				'menu_icon'		=> 'fas fa-users-cog'
			],
			[
				'menu_name'     => 'Security',
				'menu_icon'		=> 'fas fa-user-shield'
			],
			[
				'menu_name'     => 'Token',
				'menu_icon'		=> 'fas fa-qrcode'
			],
			[
				'menu_name'     => 'Dashboard',
				'menu_icon'		=> 'fas fa-tachometer-alt'
			],
			[
				'menu_name'     => 'Tracking Activity',
				'menu_icon'		=> 'fas fa-user-clock'
			],
			[
				'menu_name'     => 'Setting Aplikasi',
				'menu_icon'		=> 'fas fa-user-shield'
			]
		];
		$this->db->table('menu')->insertBatch($data);

		$data = [
			[
				'menu_id'     	=> 1,
				'title'			=> 'Users',
				'url'			=> 'admin/users',
				'icon'			=> 'fas fa-users',
				'active'		=> '1'
			],
			[
				'menu_id'     	=> 1,
				'title'			=> 'Users Groups',
				'url'			=> 'admin/users-groups',
				'icon'			=> 'fas fa-tags',
				'active'		=> '1'
			],
			[
				'menu_id'     	=> 1,
				'title'			=> 'Groups',
				'url'			=> 'admin/groups',
				'icon'			=> 'fas fa-user-tag',
				'active'		=> '1'
			],
			[
				'menu_id'     	=> 1,
				'title'			=> 'Resources',
				'url'			=> 'admin/resources',
				'icon'			=> 'fas fa-tasks',
				'active'		=> '1'
			],
			[
				'menu_id'     	=> 1,
				'title'			=> 'Access',
				'url'			=> 'admin/access',
				'icon'			=> 'fas fa-tools',
				'active'		=> '1'
			],
			[
				'menu_id'     	=> 1,
				'title'			=> 'Permissions',
				'url'			=> 'admin/permissions',
				'icon'			=> 'fas fa-cogs',
				'active'		=> '1'
			],
			[
				'menu_id'     	=> 2,
				'title'			=> 'Reset Attempts',
				'url'			=> 'admin/reset-attempts',
				'icon'			=> 'fas fa-sync-alt',
				'active'		=> '1'
			],
			[
				'menu_id'     	=> 2,
				'title'			=> 'Activation Attempts',
				'url'			=> 'admin/activation-attempts',
				'icon'			=> 'fas fa-key',
				'active'		=> '1'
			],
			[
				'menu_id'     	=> 2,
				'title'			=> 'Login Attempts',
				'url'			=> 'admin/login-attempts',
				'icon'			=> 'fas fa-sign-in-alt',
				'active'		=> '1'
			],
			[
				'menu_id'     	=> 4,
				'title'			=> 'Report 1',
				'url'			=> 'admin/report-1',
				'icon'			=> 'far fa-chart-bar',
				'active'		=> '1'
			],
			[
				'menu_id'     	=> 5,
				'title'			=> 'Activity Log',
				'url'			=> 'admin/activity-log',
				'icon'			=> 'activity-log',
				'active'		=> '1'
			],
			[
				'menu_id'     	=> 3,
				'title'			=> 'Activation Tokens',
				'url'			=> 'admin/activation-tokens',
				'icon'			=> 'fas fa-barcode',
				'active'		=> '1'
			],
			[
				'menu_id'     	=> 3,
				'title'			=> 'Reset Tokens',
				'url'			=> 'admin/reset-tokens',
				'icon'			=> 'fas fa-barcode',
				'active'		=> '1'
			],
			[
				'menu_id'     	=> 4,
				'title'			=> 'Report 2',
				'url'			=> 'admin/reports/report-2',
				'icon'			=> 'far fa-chart-bar',
				'active'		=> '0'
			]
		];
		$this->db->table('submenu')->insertBatch($data);

		$data = [
			[
				'submenu_id'     	=> 1,
				'crud_id'			=> 1
			],
			[
				'submenu_id'     	=> 1,
				'crud_id'			=> 2
			],
			[
				'submenu_id'     	=> 1,
				'crud_id'			=> 3
			],
			[
				'submenu_id'     	=> 1,
				'crud_id'			=> 4
			],
			[
				'submenu_id'     	=> 2,
				'crud_id'			=> 1
			],
			[
				'submenu_id'     	=> 2,
				'crud_id'			=> 2
			],
			[
				'submenu_id'     	=> 2,
				'crud_id'			=> 3
			],
			[
				'submenu_id'     	=> 2,
				'crud_id'			=> 4
			],
			[
				'submenu_id'     	=> 3,
				'crud_id'			=> 1
			],
			[
				'submenu_id'     	=> 3,
				'crud_id'			=> 2
			],
			[
				'submenu_id'     	=> 3,
				'crud_id'			=> 3
			],
			[
				'submenu_id'     	=> 3,
				'crud_id'			=> 4
			],
			[
				'submenu_id'     	=> 4,
				'crud_id'			=> 1
			],
			[
				'submenu_id'     	=> 4,
				'crud_id'			=> 2
			],
			[
				'submenu_id'     	=> 4,
				'crud_id'			=> 3
			],
			[
				'submenu_id'     	=> 4,
				'crud_id'			=> 4
			],
			[
				'submenu_id'     	=> 5,
				'crud_id'			=> 1
			],
			[
				'submenu_id'     	=> 5,
				'crud_id'			=> 2
			],
			[
				'submenu_id'     	=> 5,
				'crud_id'			=> 3
			],
			[
				'submenu_id'     	=> 5,
				'crud_id'			=> 4
			],
			[
				'submenu_id'     	=> 6,
				'crud_id'			=> 1
			],
			[
				'submenu_id'     	=> 6,
				'crud_id'			=> 2
			],
			[
				'submenu_id'     	=> 6,
				'crud_id'			=> 3
			],
			[
				'submenu_id'     	=> 6,
				'crud_id'			=> 4
			],
			[
				'submenu_id'     	=> 7,
				'crud_id'			=> 2
			],
			[
				'submenu_id'     	=> 8,
				'crud_id'			=> 2
			],
			[
				'submenu_id'     	=> 9,
				'crud_id'			=> 2
			],
			[
				'submenu_id'     	=> 12,
				'crud_id'			=> 2
			],
			[
				'submenu_id'     	=> 11,
				'crud_id'			=> 2
			],
			[
				'submenu_id'     	=> 10,
				'crud_id'			=> 2
			],
			[
				'submenu_id'     	=> 13,
				'crud_id'			=> 2
			]
		];
		$this->db->table('submenu_access')->insertBatch($data);

		$data = [
			[
				'group_id'     		=> 2,
				'menu_access_id'	=> 2
			],
			[
				'group_id'     		=> 1,
				'menu_access_id'	=> 1
			],
			[
				'group_id'     		=> 1,
				'menu_access_id'	=> 2
			],
			[
				'group_id'     		=> 1,
				'menu_access_id'	=> 3
			],
			[
				'group_id'     		=> 1,
				'menu_access_id'	=> 4
			],
			[
				'group_id'     		=> 1,
				'menu_access_id'	=> 5
			],
			[
				'group_id'     		=> 1,
				'menu_access_id'	=> 6
			],
			[
				'group_id'     		=> 1,
				'menu_access_id'	=> 7
			],
			[
				'group_id'     		=> 1,
				'menu_access_id'	=> 8
			],
			[
				'group_id'     		=> 1,
				'menu_access_id'	=> 13
			],
			[
				'group_id'     		=> 1,
				'menu_access_id'	=> 14
			],
			[
				'group_id'     		=> 1,
				'menu_access_id'	=> 15
			],
			[
				'group_id'     		=> 1,
				'menu_access_id'	=> 16
			],
			[
				'group_id'     		=> 1,
				'menu_access_id'	=> 17
			],
			[
				'group_id'     		=> 1,
				'menu_access_id'	=> 18
			],
			[
				'group_id'     		=> 1,
				'menu_access_id'	=> 19
			],
			[
				'group_id'     		=> 1,
				'menu_access_id'	=> 20
			],
			[
				'group_id'     		=> 1,
				'menu_access_id'	=> 21
			],
			[
				'group_id'     		=> 1,
				'menu_access_id'	=> 22
			],
			[
				'group_id'     		=> 1,
				'menu_access_id'	=> 23
			],
			[
				'group_id'     		=> 1,
				'menu_access_id'	=> 24
			],
			[
				'group_id'     		=> 1,
				'menu_access_id'	=> 25
			],
			[
				'group_id'     		=> 1,
				'menu_access_id'	=> 26
			],
			[
				'group_id'     		=> 1,
				'menu_access_id'	=> 27
			],
			[
				'group_id'     		=> 1,
				'menu_access_id'	=> 28
			],
			[
				'group_id'     		=> 1,
				'menu_access_id'	=> 29
			],
			[
				'group_id'     		=> 1,
				'menu_access_id'	=> 30
			],
			[
				'group_id'     		=> 2,
				'menu_access_id'	=> 1
			],
			[
				'group_id'     		=> 1,
				'menu_access_id'	=> 31
			],
			[
				'group_id'     		=> 1,
				'menu_access_id'	=> 10
			],
			[
				'group_id'     		=> 1,
				'menu_access_id'	=> 9
			],
			[
				'group_id'     		=> 1,
				'menu_access_id'	=> 11
			],
			[
				'group_id'     		=> 1,
				'menu_access_id'	=> 12
			],
		];
		$this->db->table('groups_access')->insertBatch($data);
	}
}
