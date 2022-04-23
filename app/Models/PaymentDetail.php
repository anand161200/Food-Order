<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentDetail extends Model
{
    use HasFactory;

    protected $table = "payment_table";

    protected $fillable = [

        'order_id',
        'amount',
        'order_date',
        'address',
        'contact_number',
        'payment_method',
        'Name_of_card',
        'Credit_card_number',
        'Expiration',
        'CVV',

    ];
    public $timestamps = false;
}
