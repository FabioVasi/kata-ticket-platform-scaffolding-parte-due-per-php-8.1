<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\ClosedTicket;
use App\Models\Category;
use App\Models\Operator;
use App\Models\Priority;
use App\Models\Status;
use App\Models\Ticket;
use Illuminate\Support\Facades\Storage; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use illuminate\Support\Facades\Auth;
class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ticket = Ticket::where('status_id', Auth::id())->get();

        return view('admin.tickets.index', compact('ticket'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ticket = new Ticket();
        $categories = Category::all();
        $priorities = Priority::all();
        $operators = Operator::all();
        return view('admin.tickets.create', compact('ticket', 'categories', 'priorities', 'operators'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $ticket = new Ticket($data);
        $ticket->save();
        return redirect()->route('admin.tickets.show', $ticket);
    }

    /**
     * Display the specified resource.
     */
    public function show(Ticket $ticket)
    {
        return view('admin.tickets.show', compact('ticket'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ticket $ticket)
    {
        $categories = Category::all();
        $priorities = Priority::all();
        $operators = Operator::all();
        $statuses = Status::all();
        // dd($statuses);
        return view('admin.tickets.edit', compact('ticket', 'categories', 'priorities', 'operators', 'statuses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ticket $ticket)
    {
        $statusData = $request->status_id;
        $ticket->status_id = $statusData;
        $ticket->save();

        return redirect()->route('admin.tickets.show', $ticket);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ticket $ticket)
    {
        if ($ticket->status_id === Auth::id()) {
            if ($ticket->img) {
                Storage::delete($ticket);
            }

            $ticket->delete();

            return to_route('admin.tickets.index')->with('message', 'Ticket deleted successfully 👍');
        }

        abort(403, 'You cannot delete this ticket!');
    }

}
