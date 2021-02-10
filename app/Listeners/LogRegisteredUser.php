<?php
namespace App\Listeners;

use Illuminate\Auth\Events\Login;
use Illuminate\Auth\Events\Registered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Carbon\Carbon;
use App\User;

class LogRegisteredUser
{
    public function __construct()
    {
        //
    }
    public function handle(Registered $event)
    {
        $date =  Carbon::now();
        $user = $event->user->id;
        User::where('id', $user)
              ->update(['last_login' => $date]);
    }
}

?>