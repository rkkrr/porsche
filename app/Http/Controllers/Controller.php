<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Result;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function counts($user) {
        $count_invitings = $user->invitings()->count();
        $count_inviters = $user->inviters()->count();

        return [
            'count_invitings' => $count_invitings,
            'count_inviters' => $count_inviters,
        ];
    }
}