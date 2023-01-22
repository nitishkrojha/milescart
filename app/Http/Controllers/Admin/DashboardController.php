<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\ForgotPasswordMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Str;
use Exception;
use Illuminate\Support\Facades\Mail;


class DashboardController extends Controller
{
    public function index()
    {
        $data = User::find(Auth::guard('admin')->user()->id);
        return view('admin.Dashboard.index', ['data' => $data]);
    }
}
