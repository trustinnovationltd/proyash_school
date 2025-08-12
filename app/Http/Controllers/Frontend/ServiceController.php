<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function services()
    {
        return view('frontend.pages.services.all_services');
    }
    public function medical_assessment_care()
    {
        return view('frontend.pages.services.medical_assesment');
    }
    public function neurological_assessment()
    {
        return view('frontend.pages.services.neurological_assessment');
    }
    public function audiology_assessment()
    {
        return view('frontend.pages.services.audiology_assessment');
    }
    public function psychology_service_management()
    {
        return view('frontend.pages.services.psychology_service_management');
    }
    public function diet_management()
    {
        return view('frontend.pages.services.diet_management');
    }
    public function counselling()
    {
        return view('frontend.pages.services.counselling');
    }
    public function speech_language_therapy()
    {
        return view('frontend.pages.services.speech');
    }
    public function occupational_sensory_therapy()
    {
        return view('frontend.pages.services.occupational_sensory_therapy');
    }
    public function physiotherapy()
    {
        return view('frontend.pages.services.physiotherapy');
    }
    public function hydrotherapy()
    {
        return view('frontend.pages.services.hydrotherapy');
    }
    public function prosthetic_orthotic_center()
    {
        return view('frontend.pages.services.prosthetic_orthotic_center');
    }
    public function music_therapy_yoga()
    {
        return view('frontend.pages.services.music_therapy_yoga');
    }
    public function hyperbaric_oxygen_chamber()
    {
        return view('frontend.pages.services.hyperbaric_oxygen_chamber');
    }
    public function swimming()
    {
        return view('frontend.pages.services.swimming');
    }
    public function art_craft()
    {
        return view('frontend.pages.services.art_craft');
    }
    public function music_dance()
    {
        return view('frontend.pages.services.music_dance');
    }
}
