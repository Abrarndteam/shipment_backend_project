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
        Schema::create('shipments', function (Blueprint $table) {
            $table->id();
            $table->string('D_name')->nullable();
            $table->string('DUsername')->nullable();
            $table->string('D_booking_Date_box')->nullable();
            $table->string('D_origin_box')->nullable();
            $table->string('D_center')->nullable();
            $table->string('D_consignment_no_box')->nullable();
            $table->string('Dlast_entry_box')->nullable();
            $table->string('D_mtd_box')->nullable();
            $table->string('Dcounter_box')->nullable();
            $table->string('D_cashTotal_box')->nullable();
            $table->string('D_service_box')->nullable();
            $table->string('D_service_destination')->nullable();
            $table->string('D_Description')->nullable();
            $table->string('D_piecies')->nullable();
            $table->string('D_weight_kgs_box')->nullable();
            $table->string('D_V_weight_kg')->nullable();
            $table->string('D_C_weight_gram')->nullable();
            $table->string('D_Rate')->nullable();
            $table->string('D_Discount_rarte')->nullable();
            $table->string('D_declare_value')->nullable();
            $table->string('D_full_insure')->nullable();
            $table->string('D_insurance')->nullable();
            $table->string('D_MTD_amount')->nullable();
            $table->string('D_Total_vas')->nullable();
            $table->string('D_net_Charged_Amount')->nullable();
            $table->string('D_C_mob')->nullable();
            $table->string('D_C_phn')->nullable();
            $table->string('D_C_name')->nullable();
            $table->string('D_C_Address')->nullable();
            $table->string('D_S_mob')->nullable();
            $table->string('D_S_phn')->nullable();
            $table->string('D_S_cnic')->nullable();
            $table->string('D_S_ntn')->nullable();
            $table->string('D_S_name')->nullable();
            $table->string('D_S_Address')->nullable();
            $table->string('status')->nullable();
            $table->string('payment')->nullable();
            $table->string('extra1')->nullable();
            $table->string('extra2')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shipments');
    }
};
