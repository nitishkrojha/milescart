<?php

namespace App\Http\Controllers\Api;

use App\Models\Event;
use App\Models\Customer;
use App\Models\AccessToken;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;




class EventController extends Controller
{

    public function listEvents(Request $request)
    {
        // Retrieve the status and mode filter values from the request
        $status = $request->input('status');
        $mode = $request->input('mode');

        // Initialize the query builder
        $query = Event::query();

        // If the status filter is present, add a where clause to the query
        if ($status) {
            $query->where('status', $status);
        }

        // If the mode filter is present, add a where clause to the query
        if ($mode) {
            $query->where('mode', $mode);
        }

        // Order the events by start date in descending order
        $query->orderBy('event_start_date', 'desc');

        // Retrieve the events from the database
        $events = $query->get();

        // Return the events as a JSON response
        return response()->json([

            'status' => true,
            'data' => $events,

        ], 200);
    }
}
