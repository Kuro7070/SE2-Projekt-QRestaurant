<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    public static function saveCoronaContact(Request $request)
    {
        $arrival   = Carbon::create(null, null, null, $request->customer_arrival_hours,
            $request->customer_arrival_minutes, null, null);
        $departure = Carbon::create(null, null, null, $request->customer_departure_hours,
            $request->customer_departure_minutes, null, null);

        $customer = new Customer;
        $customer->gastronom_id       = $request->customer_gastronom_id;
        $customer->vorname       = $request->customer_vorname;
        $customer->nachname      = $request->customer_nachname;
        $customer->street        = $request->customer_street;
        $customer->streetno      = $request->customer_streetno;
        $customer->zip           = $request->customer_zip;
        $customer->ort           = $request->customer_ort;
        $customer->email         = $request->customer_email;
        $customer->telefonnummer = $request->customer_telefonnummer;
        $customer->ankunft       = $request->customer_arrival_hours . ':' . $request->customer_arrival_minutes;
        $customer->abreise       = $request->customer_departure_hours . ':' . $request->customer_departure_minutes;
        $customer->verbleib      = $arrival->diffInMinutes($departure);

        $customer->save();

        return true;
    }

}
