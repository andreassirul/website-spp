<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Kolom role, username, foto sudah ada di create_users_table.
        // Migration ini sengaja kosong karena tidak ada perubahan tambahan.
    }

    public function down(): void
    {
        //
    }
};
