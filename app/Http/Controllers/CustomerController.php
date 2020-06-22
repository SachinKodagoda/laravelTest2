<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use App\Repositories\CustomerRepositoryInterface;

class CustomerController extends Controller
{
    private $customerRepository;

    public function __construct(CustomerRepositoryInterface $customerRepository)
    {
        $this->customerRepository = $customerRepository;
    }

    public function index()
    {
        $customer = $this->customerRepository->all();
        return $customer;
    }

    public function show($customerId)
    {
        $customer = $this->customerRepository->findById($customerId);
        return $customer;
    }

    public function update($customerId)
    {
        $this->customerRepository->update($customerId);
        return redirect('/customers/'.$customerId);
    }

    public function destroy($customerId)
    {
        $this->customerRepository->destroy($customerId);
        return redirect('/customers');
    }
}
