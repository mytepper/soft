<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Repository\Customer\CustomerInterface;

class Customers extends Controller
{
    protected $customer;

    public function __construct(
    CustomerInterface $customer
    )
    {
        $this->customer = $customer;
    }

    public function create()
    {
        return view('customers.create');
    }
}
