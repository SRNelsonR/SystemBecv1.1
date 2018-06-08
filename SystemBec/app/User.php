<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function admin(){
        return $this->type==='admin';

    }

    public function operaciones(){
        return $this->type==='operaciones';

    }
    public function seguimiento(){
        return $this->type==='seguimiento';

    }


     /*-------------------------------------------codigo para las autentifiacion---------------------------------*/

    public function formacion(){
        return $this->type==='formacion';
    }

    public function liderazgo(){
        return $this->type=='liderazgo';
    }

    public function compromiso(){
        return $this->type==='compromiso';
    }

    public function monitoreo(){
        return $this->type==='monitoreo';
    }

    public function planilla(){
        return $this->type==='planilla';
    }

    public function contabilidad(){
        return $this->type==='contabilidad';
    }







    /************************************************************************************************************/







}
