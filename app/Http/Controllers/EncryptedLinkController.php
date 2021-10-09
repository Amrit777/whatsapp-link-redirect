<?php

namespace App\Http\Controllers;

use App\Models\EncryptedLink;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class EncryptedLinkController extends Controller
{
    public function approveEncryptedLinkToken($token, Request $request)
    {
        // get user by invite salt token
        $result = EncryptedLink::where('EncryptedLink', $token)
            ->where('isApproved', '!=', 'y')
            ->first();

        if (!empty($result)) {
            $updated = $update = EncryptedLink::where('EncryptedLink', $token)->update([
                "isApproved" => "y",
                "ApprovedDate" => Carbon::now()->toDateTimeString(),
                "ApprovedIP" => $request->ip()
            ]);
            if ($updated) {
                \Session::flash('success', 'Approved');
            } else {
                \Session::flash('error', 'Error !!!');
            }
        } else {
            \Session::flash('error', 'Not valid data !!!');
        }
        return view('wap');
    }
}
