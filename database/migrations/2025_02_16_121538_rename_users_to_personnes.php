<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    public function up()
    {
        Schema::rename('users', 'personnes');
    }

    public function down()
    {
        Schema::rename('personnes', 'users');
    }
};
