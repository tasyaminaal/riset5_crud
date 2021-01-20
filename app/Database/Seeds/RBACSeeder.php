<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;

class RBACSeeder extends \CodeIgniter\Database\Seeder
{

    public function run()
    {
        //================================================================== 
        //Users Seeder
        $data = [
            [
                'email'         => 'rifkigustiawan78.rg@gmail.com',
                // 'nim'           => '211810567',
                'nim'   => NULL,
                'fullname'      => 'Rifki Gustiawan',
                'user_image'    => 'default.svg',
                'password_hash' => password_hash("inipasswordrifki", PASSWORD_DEFAULT),
                'active'        => 1,
                'force_pass_reset' => 0,
                'created_at'    => Time::now(),
                'updated_at'    => Time::now()
            ],
            [
                'email'         => 'nissa.silviana@gmail.com',
                // 'nim'           => '221810502',
                'nim'   => NULL,
                'fullname'      => 'Nissa Silvianna Devi Nur Afni',
                'user_image'    => 'default.svg',
                'password_hash' => password_hash("inipasswordsul", PASSWORD_DEFAULT),
                'active'        => 1,
                'force_pass_reset' => 0,
                'created_at'    => Time::now(),
                'updated_at'    => Time::now()
            ]
        ];
        $this->db->table('users')->insertBatch($data);

        //================================================================== 
        //Groups Seeder
        $data = [
            [
                'name'            => 'Administrator',
                'description'     => '...'
            ],
            [
                'name'            => 'Alumni',
                'description'     => '...'
            ],
        ];
        $this->db->table('auth_groups')->insertBatch($data);

        //================================================================== 
        //Groups Users Seeder
        $data = [
            [
                'group_id'            => 1,
                'user_id'             => 1
            ],
            [
                'group_id'            => 2,
                'user_id'             => 2
            ],
        ];
        $this->db->table('auth_groups_users')->insertBatch($data);

        //================================================================== 
        //Users Permissions Seeder
        $data = [
            [
                'name'            => 'user-index',
                'description'     => '...'
            ],
        ];
        $this->db->table('auth_permissions')->insertBatch($data);

        //================================================================== 
        //Menu Seeder
        $data = [
            [
                'menu_name'       => 'Magement RBAC',
                'menu_icon'       => 'fas fa-users-cog'
            ],
            [
                'menu_name'       => 'Security',
                'menu_icon'       => 'fas fa-user-shield'
            ],
            [
                'menu_name'       => 'Token',
                'menu_icon'       => 'fas fa-qrcode'
            ],
            [
                'menu_name'       => 'Dashboard',
                'menu_icon'       => 'fas fa-tachometer-alt'
            ],
            [
                'menu_name'       => 'Tracking Activity',
                'menu_icon'       => 'fas fa-user-clock'
            ],
        ];
        $this->db->table('menu')->insertBatch($data);

        //================================================================== 
        //Submenu Seeder
        $data = [
            [
                'menu_id'   => 1,
                'title'     => 'Users',
                'url'       => 'admin/users',
                'icon'      => 'fas fa-users',
                'active'    => 1
            ],
            [
                'menu_id'   => 1,
                'title'     => 'Users Groups',
                'url'       => 'admin/users-groups',
                'icon'      => 'fas fa-tags',
                'active'    => 1
            ],
            [
                'menu_id'   => 1,
                'title'     => 'Groups',
                'url'       => 'admin/groups',
                'icon'      => 'fas fa-user-tag',
                'active'    => 1
            ],
            [
                'menu_id'   => 1,
                'title'     => 'Resources',
                'url'       => 'admin/resources',
                'icon'      =>  'fas fa-tasks',
                'active'    => 1
            ],
            [
                'menu_id'   => 1,
                'title'     => 'Access',
                'url'       => 'admin/access',
                'icon'      => 'fas fa-tools',
                'active'    => 1
            ],
            [
                'menu_id'   => 1,
                'title'     => 'Permissions',
                'url'       => 'admin/permissions',
                'icon'      => 'fas fa-cogs',
                'active'    => 1
            ],
            [
                'menu_id'   => 2,
                'title'     => 'Reset Attempts',
                'url'       => 'admin/reset-attempts',
                'icon'      =>  'fas fa-sync-alt',
                'active'    => 1
            ],
            [
                'menu_id'   => 2,
                'title'     => 'Activation Attempts',
                'url'       => 'admin/activation-attempts',
                'icon'      => 'fas fa-key',
                'active'    => 1
            ],
            [
                'menu_id'   => 2,
                'title'     => 'Login Attempts',
                'url'       => 'admin/login-attempts',
                'icon'      => 'fas fa-sign-in-alt',
                'active'    => 1
            ],
            [
                'menu_id'   => 4,
                'title'     => 'Report 1',
                'url'       => 'admin/report-1',
                'icon'      => 'far fa-chart-bar',
                'active'    => 1
            ],
            [
                'menu_id'   => 5,
                'title'     => 'Activity Log',
                'url'       => 'admin/activity-log',
                'icon'      => 'fas fa-mouse',
                'active'    => 1
            ],
            [
                'menu_id'   => 3,
                'title'     => 'Activation Tokens',
                'url'       => 'admin/activation-tokens',
                'icon'      => 'fas fa-barcode',
                'active'    => 1
            ],
            [
                'menu_id'   => 3,
                'title'     => 'Reset Tokens',
                'url'       => 'admin/reset-tokens',
                'icon'      => 'fas fa-barcode',
                'active'    => 1
            ],
            [
                'menu_id'   => 4,
                'title'     => 'Report 2',
                'url'       => 'admin/reports/report-2',
                'icon'      => 'far fa-chart-bar',
                'active'    => 0
            ],
        ];
        $this->db->table('submenu')->insertBatch($data);

        //================================================================== 
        //CRUD Seeder
        $data = [
            [
                'crud_name'      => 'Create'
            ],
            [
                'crud_name'      => 'Read'
            ],
            [
                'crud_name'      => 'Update'
            ],
            [
                'crud_name'      => 'Delete'
            ]
        ];
        $this->db->table('crud')->insertBatch($data);

        //================================================================== 
        //Submenu Access Seeder
        $data = [
            [
                'submenu_id'         => '1',
                'crud_id'   => '1'
            ],
            [
                'submenu_id'         => '1',
                'crud_id'   => '2'
            ],
            [
                'submenu_id'         => '1',
                'crud_id'   => '3'
            ],
            [
                'submenu_id'       => '1',
                'crud_id'   => '4'
            ],
            [
                'submenu_id'        => '2',
                'crud_id'   => '1'
            ],
            [
                'submenu_id'        => '2',
                'crud_id'   => '2'
            ],
            [
                'submenu_id'        => '2',
                'crud_id' => '3'
            ],
            [
                'submenu_id'       => '2',
                'crud_id'   => '4'
            ],
            [
                'submenu_id'       => '3',
                'crud_id' => '1'
            ],
            [
                'submenu_id'        => '3',
                'crud_id'   => '2'
            ],
            [
                'submenu_id'       => '3',
                'crud_id'   => '3'
            ],
            [
                'submenu_id'         => '3',
                'crud_id'  => '4'
            ],
            [
                'submenu_id'        => '4',
                'crud_id'  => '1'
            ],
            [
                'submenu_id'        => '4',
                'crud_id'  => '2'
            ],
            [
                'submenu_id'        => '4',
                'crud_id'   => '3'
            ],
            [
                'submenu_id'       => '4',
                'crud_id'  => '4'
            ],
            [
                'submenu_id'       => '5',
                'crud_id'  => '1'
            ],
            [
                'submenu_id'        => '5',
                'crud_id' => '2'
            ],
            [
                'submenu_id'       => '5',
                'crud_id'  => '3'
            ],
            [
                'submenu_id'        => '5',
                'crud_id'  => '4'
            ],
            [
                'submenu_id'      => '6',
                'crud_id'  => '1'
            ],
            [
                'submenu_id'         => '6',
                'crud_id'  => '2'
            ],
            [
                'submenu_id'        => '6',
                'crud_id'   => '3'
            ],
            [
                'submenu_id'         => '6',
                'crud_id'  => '4'
            ],
            [
                'submenu_id'       => '8',
                'crud_id'  => '2'
            ],
            [
                'submenu_id'       => '9',
                'crud_id'  => '2'
            ],
            [
                'submenu_id'        => '10',
                'crud_id'  => '2'
            ],
            [
                'submenu_id'       => '13',
                'crud_id'   => '2'
            ],
            [
                'submenu_id'        => '12',
                'crud_id'   => '2'
            ],
            [
                'submenu_id'        => '11',
                'crud_id'   => '2'
            ],
            [
                'submenu_id'        => '14',
                'crud_id'  => '2'
            ],
        ];
        $this->db->table('submenu_access')->insertBatch($data);

        //================================================================== 
        //Groups Access Seeder
        $data = [
            [
                'group_id'         => '1',
                'menu_access_id'   => '1'
            ],
            [
                'group_id'         => '1',
                'menu_access_id'   => '2'
            ],
            [
                'group_id'         => '1',
                'menu_access_id'   => '3'
            ],
            [
                'group_id'         => '1',
                'menu_access_id'   => '4'
            ],
            [
                'group_id'         => '1',
                'menu_access_id'   => '5'
            ],
            [
                'group_id'         => '1',
                'menu_access_id'   => '6'
            ],
            [
                'group_id'         => '1',
                'menu_access_id'   => '7'
            ],
            [
                'group_id'         => '1',
                'menu_access_id'   => '8'
            ],
            [
                'group_id'         => '1',
                'menu_access_id'   => '9'
            ],
            [
                'group_id'         => '1',
                'menu_access_id'   => '10'
            ],
            [
                'group_id'         => '1',
                'menu_access_id'   => '11'
            ],
            [
                'group_id'         => '1',
                'menu_access_id'   => '12'
            ],
            [
                'group_id'         => '1',
                'menu_access_id'   => '13'
            ],
            [
                'group_id'         => '1',
                'menu_access_id'   => '14'
            ],
            [
                'group_id'         => '1',
                'menu_access_id'   => '15'
            ],
            [
                'group_id'         => '1',
                'menu_access_id'   => '16'
            ],
            [
                'group_id'         => '1',
                'menu_access_id'   => '17'
            ],
            [
                'group_id'         => '1',
                'menu_access_id'   => '18'
            ],
            [
                'group_id'         => '1',
                'menu_access_id'   => '19'
            ],
            [
                'group_id'         => '1',
                'menu_access_id'   => '20'
            ],
            [
                'group_id'         => '1',
                'menu_access_id'   => '21'
            ],
            [
                'group_id'         => '1',
                'menu_access_id'   => '22'
            ],
            [
                'group_id'         => '1',
                'menu_access_id'   => '23'
            ],
            [
                'group_id'         => '1',
                'menu_access_id'   => '24'
            ],
            [
                'group_id'         => '1',
                'menu_access_id'   => '25'
            ],
        ];
        $this->db->table('groups_access')->insertBatch($data);

        //================================================================== 
        //Tabel Scope Seeder
        $data = [
            [
                'target_scope'      => 'Tabel Users'
            ],
        ];
        $this->db->table('table_scope')->insertBatch($data);

        //================================================================== 
        //Activity Log Seeder
        $data = [
            [
                'activity_id'        => 2,
                'time'               => '2020-12-17 11:04:04',
                'user_name'          => 'Rifki Gustiawan',
                'group_name'         => 'Administrator',
                'access_name'        => 2,
                'target_scope_id'    => 1,
                'description'        => 'Mengubah group user Muh. Restu',
                'status'             => 1
            ],
            [
                'activity_id'        => 4,
                'time'               => '2020-12-02 00:13:45',
                'user_name'          => '211810567@stis.ac.id',
                'group_name'         => 'Administrator',
                'access_name'        => 1,
                'target_scope_id'    => 1,
                'description'        => 'no desc',
                'status'             => 1
            ],

        ];
        $this->db->table('activity_log')->insertBatch($data);
    }
}
