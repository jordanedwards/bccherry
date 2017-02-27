<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('address');
            $table->string('city');
            $table->string('postal_code');
            $table->string('contact_person')->nullable();
            $table->string('business_phone');
            $table->string('sales_agent')->nullable();
            $table->string('sales_phone')->nullable();
            $table->string('sales_email')->nullable();
            $table->string('toll_free')->nullable();
            $table->string('fax')->nullable();
            $table->string('employment_contact')->nullable();
            $table->string('employment_email')->nullable();
            $table->string('website')->nullable();
            $table->string('distribution_type')->nullable();
            $table->smallInteger('sales_directory_active')->default(0);
            $table->smallInteger('employment_directory_active')->default(0);
            $table->string('orchard_description')->nullable();
            $table->text('features')->nullable();
            $table->text('harvest_weeks')->nullable();
            $table->text('certifications')->nullable();
            $table->string('positions_available')->nullable();
            $table->string('logo')->nullable();
            $table->smallInteger('active')->default(0);
            $table->timestamps();

            $table->softDeletes();
            $table->index('name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('member');
    }
}
