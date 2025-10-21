<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use App\Http\Requests\Vendor\UpdateProfileRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function edit()
    {
        $vendor = auth()->guard('vendor')->user();

        return view('vendor.profile.edit', compact('vendor'));
    }

    public function update(UpdateProfileRequest $request)
    {
        $vendor = auth()->guard('vendor')->user();
        $data = $request->only(['name', 'email', 'phone']);

        // Handle profile image upload
        if ($request->hasFile('profile_image')) {
            if ($vendor->profile_image && Storage::exists('public/'.$vendor->profile_image)) {
                Storage::delete('public/'.$vendor->profile_image);
            }
            $path = $request->file('profile_image')->store('vendor_profiles', 'public');
            $data['profile_image'] = $path;
        }

        // Handle password update
        if ($request->filled('current_password') && $request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }

        $vendor->update($data);

        return back()->with('success', __('cms.profile.profile_updated'));
    }
}
