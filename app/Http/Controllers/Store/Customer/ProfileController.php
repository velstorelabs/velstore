<?php

namespace App\Http\Controllers\Store\Customer;

use App\Http\Controllers\Controller;
use App\Http\Requests\Customer\UpdateProfileRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function edit()
    {
        $customer = Auth::guard('customer')->user();

        return view('themes.xylo.customer.profile.edit', compact('customer'));
    }

    public function update(UpdateProfileRequest $request)
    {
        $customer = Auth::guard('customer')->user();

        $data = $request->only(['name', 'email', 'phone', 'address']);

        // Handle profile image upload
        if ($request->hasFile('profile_image')) {
            if ($customer->profile_image && Storage::disk('public')->exists($customer->profile_image)) {
                Storage::disk('public')->delete($customer->profile_image);
            }

            $path = $request->file('profile_image')->store('customer_profiles', 'public');
            $data['profile_image'] = $path;
        }

        // Handle password update (mutator in model will hash automatically if present)
        if ($request->filled('password')) {
            $data['password'] = $request->password;
        }

        $customer->update($data);

        return back()->with('success', __('store.profile.profile_updated'));
    }
}
