<?php

namespace App\Http\Controllers;

use App\Models\Shipment;
use Illuminate\Http\Request;


class shipmentController extends Controller
{
    function uploadShipment()
    {


        $post = new Shipment;

        $post->D_name = $request->D_name;
        $post->DUsername = $request->DUsername;
        $post->D_booking_Date_box = $request->D_booking_Date_box;
        $post->D_origin_box = $request->D_origin_box;
        $post->D_center = $request->D_center;
        $post->D_consignment_no_box = $request->D_consignment_no_box;
        $post->Dlast_entry_box = $request->Dlast_entry_box;
        $post->D_mtd_box = $request->D_mtd_box;
        $post->Dcounter_box = $request->Dcounter_box;
        $post->D_cashTotal_box = $request->D_cashTotal_box;
        $post->D_service_box = $request->D_service_box;
        $post->D_service_destination = $request->D_service_destination;
        $post->D_Description = $request->D_Description;
        $post->D_piecies = $request->D_piecies;
        $post->D_weight_kgs_box = $request->D_weight_kgs_box;
        $post->D_V_weight_kg = $request->D_V_weight_kg;
        $post->D_C_weight_gram = $request->D_C_weight_gram;
        $post->D_Rate = $request->D_Rate;
        $post->D_Discount_rarte = $request->D_Discount_rarte;
        $post->D_declare_value = $request->D_declare_value;
        $post->D_full_insure = $request->D_full_insure;
        $post->D_insurance = $request->D_insurance;
        $post->D_MTD_amount = $request->D_MTD_amount;
        $post->D_Total_vas = $request->D_Total_vas;
        $post->D_net_Charged_Amount = $request->D_net_Charged_Amount;
        $post->D_C_mob = $request->D_C_mob;
        $post->D_C_phn = $request->D_C_phn;
        $post->D_C_name = $request->D_C_name;
        $post->D_C_Address = $request->D_C_Address;
        $post->D_S_mob = $request->D_S_mob;
        $post->D_S_phn = $request->D_S_phn;
        $post->D_S_cnic = $request->D_S_cnic;
        $post->D_S_ntn = $request->D_S_ntn;
        $post->D_S_name = $request->D_S_name;
        $post->D_S_Address = $request->D_S_Address;
        $post->status = $request->status;
        $post->payment = $request->payment;
        $post->extra1 = $request->extra1;
        $post->extra2 = $request->extra2;
        $results = $post->save();
        if ($results) {
            return ["result" => "Added"];
        } else {
            return ["result" => " Not Added"];
        }
    }



    function listShipment(Request $request)
    {
        return Shipment::all();
    }



    function updateShipment()
    {
        $post = Shipment();
        if () {
            $post->D_name = $request->D_name;
            $post->DUsername = $request->DUsername;
            $post->D_booking_Date_box = $request->D_booking_Date_box;
            $post->D_origin_box = $request->D_origin_box;
            $post->D_center = $request->D_center;
            $post->D_consignment_no_box = $request->D_consignment_no_box;
            $post->Dlast_entry_box = $request->Dlast_entry_box;
            $post->D_mtd_box = $request->D_mtd_box;
            $post->Dcounter_box = $request->Dcounter_box;
            $post->D_cashTotal_box = $request->D_cashTotal_box;
            $post->D_service_box = $request->D_service_box;
            $post->D_service_destination = $request->D_service_destination;
            $post->D_Description = $request->D_Description;
            $post->D_piecies = $request->D_piecies;
            $post->D_weight_kgs_box = $request->D_weight_kgs_box;
            $post->D_V_weight_kg = $request->D_V_weight_kg;
            $post->D_C_weight_gram = $request->D_C_weight_gram;
            $post->D_Rate = $request->D_Rate;
            $post->D_Discount_rarte = $request->D_Discount_rarte;
            $post->D_declare_value = $request->D_declare_value;
            $post->D_full_insure = $request->D_full_insure;
            $post->D_insurance = $request->D_insurance;
            $post->D_MTD_amount = $request->D_MTD_amount;
            $post->D_Total_vas = $request->D_Total_vas;
            $post->D_net_Charged_Amount = $request->D_net_Charged_Amount;
            $post->D_C_mob = $request->D_C_mob;
            $post->D_C_phn = $request->D_C_phn;
            $post->D_C_name = $request->D_C_name;
            $post->D_C_Address = $request->D_C_Address;
            $post->D_S_mob = $request->D_S_mob;
            $post->D_S_phn = $request->D_S_phn;
            $post->D_S_cnic = $request->D_S_cnic;
            $post->D_S_ntn = $request->D_S_ntn;
            $post->D_S_name = $request->D_S_name;
            $post->D_S_Address = $request->D_S_Address;
            $post->status = $request->status;
            $post->payment = $request->payment;
            $post->extra1 = $request->extra1;
            $post->extra2 = $request->extra2;
            $results = $post->update();
            return ["result" => "updated"];
        } else {
            return ["result" => " Not found"];
        }
    }



    function deleteShipment(Request $request)
    {
        $post = Shipment();
        if () {
            $results = $post->delete();
            return ["result" => "deleted successfully"];
        } else {
            return ["result" => " Not found"];
        }
    }



    function searchShipment(Request $request, $D_consignment_no_box)
    {
        return Shipment::where('D_consignment_no_box', $D_consignment_no_box)->get();
    }
}
