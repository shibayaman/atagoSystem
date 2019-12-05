<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PurchaseHistory;
class PurchaseHistoryController extends Controller
{
    public function get(Request $request)
    {
        $res = PurchaseHistory::all();
        if(is_null($res)) {
            return json_encode (null);
        }
        return $res;
        // return('a');
    }
}
