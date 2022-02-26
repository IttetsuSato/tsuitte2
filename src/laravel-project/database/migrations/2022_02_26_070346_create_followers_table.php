<?php
            use Illuminate\Support\Facades\Schema;
            use Illuminate\Database\Schema\Blueprint;
            use Illuminate\Database\Migrations\Migration;
            
            class CreateFollowersTable extends Migration
            {
                /**
                 * Run the migrations.
                 *
                 * @return void
                 */
                public function up()
                {
                    Schema::create("followers", function (Blueprint $table) {
						$table->foreignId('following_user_id')->constrained('users')->onDelete('cascade');
						$table->foreignId('followed_user_id')->constrained('users')->onDelete('cascade');
                    });
                }
    
                /**
                 * Reverse the migrations.
                 *
                 * @return void
                 */
                public function down()
                {
                    Schema::dropIfExists("followers");
                }
            }
        