<?php
namespace App\Repository\Customer;

use App\Repository\Customer\CustomerInterface;
use App\Customer;

class CustomerRepository implements CustomerInterface
{
	protected $customer;

	public function __construct(
	Customer $customer
	)
	{
		$this->customer = $customer;
	}

	public function saveCustomer($params)
	{
		$params = array_only($params, [
			'first_name',
			'last_name',
			'email',
			'phone',
			'address'
		]);
		try {
			return $this->customer->insert($params);
		} catch (\Exception $e) {
			return false;
		}
	}
}
