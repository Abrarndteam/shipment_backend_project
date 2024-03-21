<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    use HasFactory;

    protected $table = 'shipments';

    public $timestamps = true;


    protected $fillable = [
        'D_name',
        'DUsername',
        'D_booking_Date_box',
        'D_origin_box',
        'D_center',
        'D_consignment_no_box',
        'Dlast_entry_box',
        'D_mtd_box',
        'Dcounter_box',
        'D_cashTotal_box',
        'D_service_box',
        'D_service_destination',
        'D_Description',
        'D_piecies',
        'D_weight_kgs_box',
        'D_V_weight_kg',
        'D_C_weight_gram',
        'D_Rate',
        'D_Discount_rarte',
        'D_declare_value',
        'D_full_insure',
        'D_insurance',
        'D_MTD_amount',
        'D_Total_vas',
        'D_net_Charged_Amount',
        'D_C_mob',
        'D_C_phn',
        'D_C_name',
        'D_C_Address',
        'D_S_mob',
        'D_S_phn',
        'D_S_cnic',
        'D_S_ntn',
        'D_S_name',
        'D_S_Address',
        'status',
        'payment',
        'extra1',
        'extra2',

    ];
}
