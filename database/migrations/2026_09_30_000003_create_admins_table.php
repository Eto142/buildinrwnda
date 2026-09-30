<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        $admins = DB::table('users')
            ->where('is_admin', true)
            ->orderBy('id')
            ->get([
                'id',
                'name',
                'email',
                'email_verified_at',
                'password',
                'remember_token',
                'created_at',
                'updated_at',
            ])
            ->map(fn (object $admin): array => (array) $admin)
            ->all();

        if ($admins !== []) {
            DB::table('admins')->insert($admins);
        }

        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('is_admin');
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->boolean('is_admin')->default(false);
        });

        foreach (DB::table('admins')->get() as $admin) {
            DB::table('users')->updateOrInsert(
                ['email' => $admin->email],
                [
                    'name' => $admin->name,
                    'email_verified_at' => $admin->email_verified_at,
                    'password' => $admin->password,
                    'remember_token' => $admin->remember_token,
                    'is_admin' => true,
                    'created_at' => $admin->created_at,
                    'updated_at' => $admin->updated_at,
                ]
            );
        }

        Schema::dropIfExists('admins');
    }
};
