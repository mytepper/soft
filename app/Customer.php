<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';

    public function services()
    {
        return $this->hasMany('App\Service', 'customer_id', 'id');
    }
}
