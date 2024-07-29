<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Brian2694\Toastr\Facades\Toastr;

class PortfolioController extends Controller
{
    public function DownloadResume()
    {
        $path = storage_path('app\resume\resume.pdf');
        return response()->download($path);
    }
}
