<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->notNullable();
            $table->string('phone', 20)->Nullable();
            $table->string('province_id', 10)->notNullable();
            $table->string('district_id', 10)->notNullable();
            $table->string('ward_id', 10)->notNullable();
            $table->string('address', 50)->notNullable();
            $table->dateTime('birthday')->notNullable();
            $table->string('image', 50)->notNullable();
            $table->string('email')->unique()->notNullable();
            $table->string('password')->notNullable();
            $table->timestamps(); // Laravel mặc định đã nullable, nếu cần bắt buộc thì chỉnh

            $table->text('desc')->nullable(); // Mô tả có thể trống
$table->text('user_agent')->nullable(); // Không phải lúc nào cũng có user agent
$table->text('ip')->nullable(); // Người dùng có thể không có IP hợp lệ
$table->timestamp('email_verified_at')->nullable(); // Email có thể chưa xác thực
$table->rememberToken(); // Laravel mặc định nullable


        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};