<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

/**
 * Class RolePermissionSeeder.
 *
 * @see https://spatie.be/docs/laravel-permission/v5/basic-usage/multiple-guards
 */
class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Permission List as array.
        $permissions = [

            [
                'group_name' => 'dashboard',
                'permissions' => [
                    'dashboard.view',
                    'dashboard.edit',
                ],
            ],
            [
                'group_name' => 'admission',
                'permissions' => [
                    'admission.view',
                    'admission.edit',
                    'admission.delete',
                    'admission.update',
                ],
            ],
            [
                'group_name' => 'website',
                'permissions' => [
                    'website.view',
                    'website.edit',
                    'website.delete',
                    'website.update',
                ],
            ],
            [
                'group_name' => 'user',
                'permissions' => [
                    'user.create',
                    'user.view',
                    'user.edit',
                    'user.delete',
                    'user.approve',
                ],
            ],
            [
                'group_name' => 'role',
                'permissions' => [
                    'role.create',
                    'role.view',
                    'role.edit',
                    'role.delete',
                    'role.approve',
                ],
            ],
            [
                'group_name' => 'profile',
                'permissions' => [
                    'profile.view',
                    'profile.edit',
                    'profile.delete',
                    'profile.update',
                ],
            ],
            [
                'group_name' => 'employee',
                'permissions' => [
                    'employee.view',
                    'employee.edit',
                    'employee.delete',
                    'employee.update',
                ],
            ],
        ];


        // Do same for the admin guard for tutorial purposes.
        $user = User::where('email', 'admin@til.net')->first();
        $roleSuperAdmin = $this->maybeCreateSuperAdminRole();

        // Create Executive Role.
        $userExecutive = User::where('email', 'executive@gmail.com')->first();
        $roleExecutive = $this->maybeCreateExecutiveRole();

        // Create and Assign Permissions
        for ($i = 0; $i < count($permissions); $i++) {
            $permissionGroup = $permissions[$i]['group_name'];
            for ($j = 0; $j < count($permissions[$i]['permissions']); $j++) {
                $permissionExist = Permission::where('name', $permissions[$i]['permissions'][$j])->first();
                if (is_null($permissionExist)) {
                    $permission = Permission::create(
                        [
                            'name' => $permissions[$i]['permissions'][$j],
                            'group_name' => $permissionGroup,
                            'guard_name' => 'web',
                        ]
                    );
                    $roleSuperAdmin->givePermissionTo($permission);
                    $permission->assignRole($roleSuperAdmin);
                }
            }
        }

        // Assign super admin role permission to superadmin user.
        if ($user) {
            $user->assignRole($roleSuperAdmin);
        }

        // Assign subscriber role permission to subscriber user.
        if ($userExecutive) {
            // Add profile permissions to subscriber role.
            $subscriberPermissions = [
                'profile.view',
                'profile.edit',
                'profile.delete',
                'profile.update',
            ];

            // Add the permissions to the subscriber role.
            foreach ($subscriberPermissions as $permission) {
                $roleExecutive->givePermissionTo($permission);
            }

            $userExecutive->assignRole('Executive');
        }

        $this->command->info('Roles and Permissions created successfully!');
    }

    private function maybeCreateSuperAdminRole(): Role
    {
        return Role::firstOrCreate(
            ['name' => 'Superadmin', 'guard_name' => 'web'],
            ['name' => 'superadmin', 'guard_name' => 'web']
        );
    }

    private function maybeCreateExecutiveRole(): Role
    {
        return Role::firstOrCreate(
            ['name' => 'Executive', 'guard_name' => 'web']
        );
    }
}
