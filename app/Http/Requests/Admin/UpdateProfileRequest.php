<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UpdateProfileRequest extends FormRequest
{
    public function authorize(): bool
    {
        return Auth::guard('web')->check();
    }

    public function rules(): array
    {
        $admin = Auth::user();

        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'email',
                'max:255',
                Rule::unique('users', 'email')->ignore($admin->id),
            ],
            'phone' => ['nullable', 'string', 'max:20'],
            'profile_image' => ['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:2048'],

            'current_password' => ['required', 'string'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => __('validation.required', ['attribute' => __('validation.attributes.name')]),
            'email.required' => __('validation.required', ['attribute' => __('validation.attributes.email')]),
            'email.unique' => __('validation.custom.email.unique'),
            'current_password.required' => __('validation.required', ['attribute' => __('validation.attributes.current_password')]),
            'password.required' => __('validation.required', ['attribute' => __('validation.attributes.password')]),
            'password.min' => __('validation.custom.password.min', ['min' => 8]),
            'password.confirmed' => __('validation.confirmed', ['attribute' => __('validation.attributes.password')]),
            'profile_image.image' => __('validation.image', ['attribute' => __('validation.attributes.profile_image')]),
        ];
    }

    public function withValidator($validator): void
    {
        $validator->after(function ($validator) {
            $admin = Auth::user();

            if (! Hash::check($this->current_password, $admin->password)) {
                $validator->errors()->add('current_password', __('validation.incorrect_current_password'));
            }
        });
    }
}
