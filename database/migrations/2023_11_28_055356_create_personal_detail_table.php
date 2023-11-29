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
        Schema::create('personal_detail', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('national_insurance')->nullable();
            $table->date('dob')->nullable();
            $table->string('email')->nullable();
            $table->string('post_code')->nullable();
            $table->string('telephone1')->nullable();
            $table->string('mobile')->nullable();
            $table->string('address')->nullable();
            $table->string('e_first_name')->nullable();
            $table->string('e_last_name')->nullable();
            $table->string('e_email')->nullable();
            $table->string('e_post_code')->nullable();
            $table->string('e_telephone1')->nullable();
            $table->string('e_mobile')->nullable();
            $table->string('e_address')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('bank_short_code')->nullable();
            $table->string('bank_account_number')->nullable();
            $table->boolean('is_criminal')->nullable();
            $table->string('criminal_detail')->nullable();
            $table->string('proof_id_img')->nullable();
            $table->string('proof_of_address_img')->nullable();
            $table->string('proof_of_public_img')->nullable();
            $table->string('proof_of_dbs_img')->nullable();
            $table->string('proof_of_gas_front_img')->nullable();
            $table->string('proof_of_gas_back_img')->nullable();
            $table->string('declaration_name')->nullable();
            $table->string('declaration_date')->nullable();
            $table->string('health_name')->nullable();
            $table->string('health_date')->nullable();
            $table->string('is_confirm')->nullable();
            $table->string('sub_contractor_date')->nullable();
            $table->string('term_sub_contractor_name')->nullable();
            $table->decimal('percentage')->nullable();
            $table->decimal('contractor_name')->nullable();
            $table->decimal('contract_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personal_detail');
    }
};
