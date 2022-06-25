<?php

namespace App\Http\Controllers;

use App\Models\Seat;

class ApiController extends Controller
{
    public function getSeatStatus(){
        $status = Seat::select(['id','seat'])->get()->toJson(JSON_PRETTY_PRINT);
        return response($status,200);
    }
}
