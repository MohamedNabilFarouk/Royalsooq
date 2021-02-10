<?php



namespace App;



use AvoRed\Framework\Database\Models\Address;

use Laravel\Passport\HasApiTokens;

use Laravel\Passport\ClientRepository;

use Illuminate\Notifications\Notifiable;

use Illuminate\Foundation\Auth\User as Authenticatable;

use AvoRed\Framework\Database\Models\Product; 
use Illuminate\Contracts\Auth\MustVerifyEmail;



class User extends Authenticatable implements MustVerifyEmail

{

    use Notifiable, HasApiTokens;



    /**

     * The attributes that are mass assignable.

     *

     * @var array

     */

    protected $fillable = [

        'name', 'email', 'password', 'image','seller','phone','last_login','slug'

    ];



    /**

     * The attributes that should be hidden for arrays.

     *

     * @var array

     */

    protected $hidden = [

        'password', 'remember_token',

    ];



    /**

     * The attributes that should be cast to native types.

     *

     * @var array

     */

    protected $casts = [

        'email_verified_at' => 'datetime',

    ];



    /**

     * Get the Passport Client for User and If it doesnot exist then create a new one.

     * @return \Laravel\Passport\Client $client

     */

    public function getPassportClient()

    {

        $client = $this->clients->first();

        if (null === $client) {

            $clientRepository = app(ClientRepository::class);



            $redirectUri = env('APP_URL');

            $client = $clientRepository->createPasswordGrantClient($this->id, $this->name, $redirectUri);

        }



        return $client;

    }



    public function addresses()

    {

        return $this->hasMany(Address::class);

    }



    public function products()

    {

        return $this->hasMany('AvoRed\Framework\Database\Models\Product','user_id');

    }



    public function wish()

    {

        return $this->hasMany('AvoRed\Framework\Database\Models\Wishlist','user_id');

    }



    public function complaint()

    {

        return $this->hasMany(Complaint::class, 'user_id');

    }



    public function chat()

    {

        return $this->hasMany('AvoRed\Framework\Database\Models\ChatMessage','user_id');

    }



    public function order()

    {

        return $this->hasMany('AvoRed\Framework\Database\Models\Order','user_id');

    }



    public function shop_slider()

    {

        return $this->hasMany('AvoRed\Framework\Database\Models\ShopSlider','user_id');

    }



    public function provider()

    {

        return $this->hasOne('AvoRed\Framework\Database\Models\Provider','user_id');

    }

}

