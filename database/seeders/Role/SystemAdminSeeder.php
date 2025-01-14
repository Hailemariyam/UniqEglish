<?php

namespace Database\Seeders\Role;

use App\Models\User;
use Exception;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SystemAdminSeeder extends Seeder {
    use UserSeederTrait;
    /**
     * Run the database seeds.
     */
    public function run(): void {
        $sysAdmins = [
            ['first_name' => 'System Admin', 'email' => 'admin', 'gender' => MALE, 'role' => SYSTEM_ADMIN],
        ];

        try {
            DB::beginTransaction();

            foreach ($sysAdmins as $sysAdmin) {
                $user = $this->createUser($sysAdmin);
            }

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            echo "Unable to seed system admins";
        }
    }
}
