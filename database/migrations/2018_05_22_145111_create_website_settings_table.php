<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWebsiteSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('website_settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('website_name',200)->nullable();
            $table->string('website_account_email',200)->nullable();
            $table->string('website_legal_name',200)->nullable();
            $table->text('website_desc')->nullable();
            $table->string('website_phone',200)->nullable();
            $table->string('website_street',500)->nullable();
            $table->string('website_city',200)->nullable();
            $table->string('website_postal_code',200)->nullable();
            $table->string('website_country',200)->nullable();
            $table->string('website_region',200)->nullable();
            $table->string('website_currency',200)->nullable();
            $table->string('website_iban',500)->nullable();
            $table->string('website_order_prefix',200)->nullable();
            $table->string('website_order_suffix',200)->nullable();
            $table->string('website_url_facebook',500)->nullable();
            $table->string('website_url_twitter',500)->nullable();
            $table->string('website_url_instagram',500)->nullable();
            $table->string('website_url_google',500)->nullable();
            $table->string('website_mode_store',20)->nullable();
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
        Schema::dropIfExists('website_settings');
    }
}
