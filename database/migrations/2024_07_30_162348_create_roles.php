<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $roles1 =Role::create(['name'=> 'administrador']);
        $roles2 =Role::create(['name'=> 'Supervisor']);
        $roles3 =Role::create(['name'=> 'Usuario']);
        $user = User::find(1);
        $user->assignRole($role1);
        $user = User::find(2);
        $user->assignRole($role2);
        $user = User::find(3);
        $user->assignRole($role3);
       
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
    }
};
