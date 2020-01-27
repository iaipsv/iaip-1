<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('api', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('name');  
            $table->char('acronym');
            $table->char('avatar_file_name');
            $table->char('avatar_content_type');
            $table->bigInteger('avatar_file_size');
            $table->bigInteger('institution_type_id');
            $table->bigInteger('standard_category_id');
            $table->boolean('enabled');
            $table->boolean('accepts_online_requests');
            $table->double('certification_amount', 12, 2);
            $table->double('reproduction_amount', 12, 2);
            $table->char('external_transparency_site_url');
            $table->char('facebook_url');
            $table->char('facebook_username');
            $table->char('officer_email');
            $table->char('officer_name');
            $table->char('twitter_url');
            $table->char('twitter_username');
            $table->char('website_url');
            $table->date('officer_designation_date');
            $table->char('administrative_document_file_name');
            $table->char('administrative_document_content_type');
            $table->bigInteger('administrative_document_file_size');
            $table->date('administrative_document_updated_at');
            // Otras 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('api');
    }
}
