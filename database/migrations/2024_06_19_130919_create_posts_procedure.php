<?php

use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
      
        $procedure = "DROP PROCEDURE IF EXISTS `get_posts`;
        CREATE PROCEDURE `get_posts`()
        BEGIN
        SELECT * FROM posts;
        END;";

    \DB::unprepared($procedure);     

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        \DB::unprepared('DROP PROCEDURE IF EXISTS get_posts_by_postid');

    }
};
