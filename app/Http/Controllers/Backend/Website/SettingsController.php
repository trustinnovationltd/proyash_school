<?php

namespace App\Http\Controllers\Backend\Website;

use App\Http\Controllers\Controller;
use App\Models\BasicSettings\Shift;
use App\Models\Website\WebsiteSettings;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index()
    {
        $websiteSettings = WebsiteSettings::first();
        return view('backend.website.settings.index', compact('websiteSettings'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'title' => 'required|string|max:255',
            'short_description' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:20',
            'alternative_phone_1' => 'nullable|string|max:20',
            'alternative_phone_2' => 'nullable|string|max:20',
            'email' => 'nullable|email',
            'alternative_email_1' => 'nullable|email',
            'alternative_email_2' => 'nullable|email',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'principle_name' => 'nullable|string|max:255',
            'principle_message' => 'nullable|string',
            'facebook_link' => 'nullable|url',
            'youtube_link' => 'nullable|url',
            'twitter_link' => 'nullable|url',
            'linkedin_link' => 'nullable|url',
        ]);

        $websiteSettings = WebsiteSettings::first();

        if (!$websiteSettings) {
            $websiteSettings = new WebsiteSettings();
        }

        $websiteSettings->fill([
            'title' => $request->title,
            'short_description' => $request->short_description,
            'phone' => $request->phone,
            'alternative_phone_1' => $request->alternative_phone_1,
            'alternative_phone_2' => $request->alternative_phone_2,
            'email' => $request->email,
            'alternative_email_1' => $request->alternative_email_1,
            'alternative_email_2' => $request->alternative_email_2,
            'principle_name' => $request->principle_name,
            'principle_message' => $request->principle_message,
            'facebook_link' => $request->facebook_link,
            'youtube_link' => $request->youtube_link,
            'twitter_link' => $request->twitter_link,
            'linkedin_link' => $request->linkedin_link,
        ]);

        // Handle logo upload
        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $logoName = time() . '_logo.' . $logo->getClientOriginalExtension();
            $logo->move(public_path('frontend/assets/uploads'), $logoName);
            $websiteSettings->logo = 'frontend/assets/uploads/' . $logoName;
        }

        // Handle principle image upload
        if ($request->hasFile('principle_image')) {
            $principleImage = $request->file('principle_image');
            $principleImageName = time() . '_principle.' . $principleImage->getClientOriginalExtension();
            $principleImage->move(public_path('frontend/assets/uploads'), $principleImageName);
            $websiteSettings->principle_image = 'frontend/assets/uploads/' . $principleImageName;
        }

        $websiteSettings->save();

        return redirect()->back()->with('success', 'Website Settings saved successfully.');
    }
}
