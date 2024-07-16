<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    public function collaborator()
    {
        return $this -> belongsTo('app\models\Collaborator');
    }

    public function typePayments()
    {
        return $this -> hasMany('app\models\TypePayment');
    }
}

