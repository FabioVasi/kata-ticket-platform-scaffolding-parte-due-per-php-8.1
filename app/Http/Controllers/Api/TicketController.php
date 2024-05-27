<?php

namespace App\Http\Controllers\Api;

use App\Models\Ticket;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TicketController extends Controller
{

    public function index(Request $request){
        $tickets = Ticket::with('category', 'operator', 'status', 'priority')->orderBy('priority_id', 'asc')->orderBy('status_id', 'desc')->get();


        return response()->json([
            'success' => true,
            'results' => $tickets,
            'request' => $request->status
        ]);
    }

}
