<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Yajra\DataTables\DataTables;

class CustomerController extends Controller
{
    /**
     * Show the form to create a new customer.
     */
    public function create()
    {
        return view('cms.admin.customers.create');
    }

    /**
     * Store a new customer.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|max:255|unique:customers,email',
            'password' => 'required|min:6',
            'phone'    => 'nullable|string|max:20',
            'address'  => 'nullable|string|max:500',
            'status'   => ['required', Rule::in(['active', 'inactive'])],
        ]);

        Customer::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
            'phone'    => $request->phone,
            'address'  => $request->address,
            'status'   => $request->status,
        ]);

        return redirect()->route('admin.customers.index')->with('success', 'Customer created successfully.');
    }

    /**
     * List all customers.
     */
    public function index()
    {
        $customers = Customer::latest()->paginate(10);
        return view('cms.admin.customers.index', compact('customers'));
    }

        
    public function getCustomerData()
    {
        $customers = Customer::select(['id', 'name', 'email', 'phone', 'address', 'status']);

        return DataTables::of($customers)
            ->addColumn('status', function ($customer) {
                return $customer->status == 'active' ? 
                    '<span class="badge bg-success">Active</span>' : 
                    '<span class="badge bg-danger">Inactive</span>';
            })
            ->addColumn('action', function ($customer) {
                return '<span class="border border-danger dt-trash rounded-3 d-inline-block" onclick="deleteCustomer(' . $customer->id . ')"><i class="bi bi-trash-fill text-danger"></i></span>';
            })
            ->rawColumns(['status', 'action']) 
            ->make(true); 
    }

    /**
     * Show the edit form for a customer.
     */
    public function edit(Customer $customer)
    {
        return view('cms.admin.customers.edit', compact('customer'));
    }

    /**
     * Update a customer.
     */
    public function update(Request $request, Customer $customer)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => ['required', 'email', 'max:255', Rule::unique('customers')->ignore($customer->id)],
            'phone'    => 'nullable|string|max:20',
            'address'  => 'nullable|string|max:500',
            'status'   => ['required', Rule::in(['active', 'inactive'])],
        ]);

        $data = $request->only(['name', 'email', 'phone', 'address', 'status']);

        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }

        $customer->update($data);

        return redirect()->route('admin.customers.index')->with('success', 'Customer updated successfully.');
    }

    /**
     * Delete a customer.
     */
   
public function destroy(Customer $customer)
    {
        try {
            $customer->delete();

            return response()->json(['success' => true, 'message' => __('cms.customers.success_delete')]);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'There was an error deleting the customer. Please try again.']);
        }
    }
}
