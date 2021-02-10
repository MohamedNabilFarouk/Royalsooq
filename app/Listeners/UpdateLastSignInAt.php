<?php
namespace App\Listeners;

use Illuminate\Auth\Events\Login;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Carbon\Carbon;
use App\User;

class UpdateLastSignInAt
{
    public function __construct()
    {
        //
    }
    public function handle(Login $event)
    {
        $date =  Carbon::now();
        $user = $event->user->id;
        User::where('id', $user)
              ->update(['last_login' => $date]);
    }
}

?>