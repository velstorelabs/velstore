<?php

namespace App\Http\Controllers;

use App\Models\SiteSetting;
use Illuminate\Http\Request;

class SiteSettingsController extends Controller
{
    
    public function index()
    {
        return view('cms.admin.site-settings.index'); 
    }    
     public function edit()
     {
         $settings = SiteSetting::first();
         return view('cms.admin.site-settings.edit', compact('settings'));
     }
 
     public function update(Request $request)
     {
         $request->validate([
             'site_name' => 'required|string|max:255',
             'tagline' => 'nullable|string|max:255',
             'meta_title' => 'nullable|string|max:255',
             'meta_description' => 'nullable|string',
             'meta_keywords' => 'nullable|string',
             'contact_email' => 'nullable|email',
             'contact_phone' => 'nullable|string|max:20',
             'address' => 'nullable|string',
             'footer_text' => 'nullable|string',
         ]);
 
         $settings = SiteSetting::first();
 
         $settings->update([
             'site_name' => $request->site_name,
             'tagline' => $request->tagline,
             'meta_title' => $request->meta_title,
             'meta_description' => $request->meta_description,
             'meta_keywords' => $request->meta_keywords,
             'contact_email' => $request->contact_email,
             'contact_phone' => $request->contact_phone,
             'address' => $request->address,
             'footer_text' => $request->footer_text,
         ]);
 
         return redirect()->back()->with('success', 'Site settings updated successfully!');
     }
}
