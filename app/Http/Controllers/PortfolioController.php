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
        $path = storage_path('app\resume\Resume-ahmadfahrudin.pdf');
        return response()->download($path);
    }

    public function SendMessage(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);
        Message::insert([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'description' => $request->description,
            'created_at' => Carbon::now(),
        ]);
        flash()
            ->options([
                'timeout' => 3000, // 3 seconds
                'position' => 'bottom-right',
            ])
            ->success('Pesan Anda Berhasil dikirim.');

        return back();
    }
}
