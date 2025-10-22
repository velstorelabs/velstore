<?php

namespace App\Http\Requests\Customer;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UpdateProfileRequest extends FormRequest
{
    public function authorize(): bool
    {
        return Auth::guard('customer')->check();
    }

    public function rules(): array
    {
        $customer = Auth::guard('customer')->user();

        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'email',
                'max:255',
                Rule::unique('customers', 'email')->ignore($customer->id),
            ],
            'phone' => ['nullable', 'string', 'max:20'],
            'address' => ['nullable', 'string'],
            'profile_image' => ['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:2048'],

            'current_password' => ['nullable', 'string'],
            'password' => ['nullable', 'string', 'min:8', 'confirmed'],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => __('Name is required.'),
            'email.required' => __('Email is required.'),
            'email.unique' => __('This email is already in use.'),
            'password.min' => __('Password must be at least 8 characters long.'),
            'password.confirmed' => __('Password confirmation does not match.'),
            'profile_image.image' => __('Profile image must be a valid JPG, JPEG, or PNG file.'),
        ];
    }

    public function withValidator($validator): void
    {
        $validator->after(function ($validator) {
            if ($this->filled('password')) {
                $customer = Auth::guard('customer')->user();

                if (! $customer || ! Hash::check($this->input('current_password', ''), $customer->password)) {
                    $validator->errors()->add('current_password', __('The current password is incorrect.'));
                }
            }
        });
    }
}
