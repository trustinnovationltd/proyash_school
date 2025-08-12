@extends('backend.layouts.master')
@section('css')
    <style>
        .preview-box {
            border: 1px solid #ccc;
            padding: 5px;
            border-radius: 8px;
            background-color: #f9f9f9;
        }

        .preview-box img {
            width: 100%;
            height: auto;
            border-radius: 5px;
        }
    </style>
@endsection

@section('title', 'Admission')
@section('main_menu', __('messages.home'))
@section('active_menu', 'Admission')

@section('content')
    <div class="row">
        {{-- @include('backend.layouts.partials.message') --}}
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="card-title">Student Admission</h3>
                    </div>
                    <div class="col-md-6" style="text-align: right">
                        <a href="{{ route('admin.admission.students.index') }}" type="button" class="btn btn-success btn-sm"
                            style="color: white">
                            Student List
                        </a>
                    </div>
                </div>
            </div>
            <form action="{{ route('admin.admission.students.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <h4>Student Basic Information</h4>
                    <div class="row mb-3">
                        <div class="col-lg-3 col-md-4 mb-2">
                            <label>Name (BN)</label>
                            <input type="text" name="name_bn" class="form-control" value="{{ old('name_bn') }}">
                            <span class="text-danger">{{ $errors->first('name_bn') }}</span>
                        </div>

                        <div class="col-lg-3 col-md-4 mb-2">
                            <label>Name (EN)</label>
                            <input type="text" name="name_en" class="form-control" value="{{ old('name_en') }}">
                            <span class="text-danger">{{ $errors->first('name_en') }}</span>
                        </div>

                        <div class="col-lg-3 col-md-4 mb-2">
                            <label>Admission Date</label>
                            <input type="date" name="admission_date" class="form-control"
                                value="{{ old('admission_date') }}">
                            <span class="text-danger">{{ $errors->first('admission_date') }}</span>
                        </div>

                        <div class="col-lg-3 col-md-4 mb-2">
                            <label>Birth Date</label>
                            <input type="date" name="birth_date" class="form-control" value="{{ old('birth_date') }}">
                            <span class="text-danger">{{ $errors->first('birth_date') }}</span>
                        </div>

                        <div class="col-lg-3 col-md-4 mb-2">
                            <label for="nationality">Nationality</label>
                            <select id="nationality" name="nationality" class="form-select select2">
                                <option value="">Select Nationality</option>
                                <option value="Afghan" {{ old('nationality') == 'Afghan' ? 'selected' : '' }}>Afghan
                                </option>
                                <option value="Albanian" {{ old('nationality') == 'Albanian' ? 'selected' : '' }}>Albanian
                                </option>
                                <option value="Algerian" {{ old('nationality') == 'Algerian' ? 'selected' : '' }}>Algerian
                                </option>
                                <option value="American" {{ old('nationality') == 'American' ? 'selected' : '' }}>American
                                </option>
                                <option value="Andorran" {{ old('nationality') == 'Andorran' ? 'selected' : '' }}>Andorran
                                </option>
                                <option value="Angolan" {{ old('nationality') == 'Angolan' ? 'selected' : '' }}>Angolan
                                </option>
                                <option value="Antiguan and Barbudan"
                                    {{ old('nationality') == 'Antiguan and Barbudan' ? 'selected' : '' }}>Antiguan and
                                    Barbudan</option>
                                <option value="Argentine" {{ old('nationality') == 'Argentine' ? 'selected' : '' }}>
                                    Argentine</option>
                                <option value="Armenian" {{ old('nationality') == 'Armenian' ? 'selected' : '' }}>Armenian
                                </option>
                                <option value="Australian" {{ old('nationality') == 'Australian' ? 'selected' : '' }}>
                                    Australian</option>
                                <option value="Austrian" {{ old('nationality') == 'Austrian' ? 'selected' : '' }}>Austrian
                                </option>
                                <option value="Azerbaijani" {{ old('nationality') == 'Azerbaijani' ? 'selected' : '' }}>
                                    Azerbaijani</option>
                                <option value="Bahamian" {{ old('nationality') == 'Bahamian' ? 'selected' : '' }}>Bahamian
                                </option>
                                <option value="Bahraini" {{ old('nationality') == 'Bahraini' ? 'selected' : '' }}>Bahraini
                                </option>
                                <option value="Bangladeshi" {{ old('nationality') == 'Bangladeshi' ? 'selected' : '' }}>
                                    Bangladeshi</option>
                                <option value="Barbadian" {{ old('nationality') == 'Barbadian' ? 'selected' : '' }}>
                                    Barbadian</option>
                                <option value="Belarusian" {{ old('nationality') == 'Belarusian' ? 'selected' : '' }}>
                                    Belarusian</option>
                                <option value="Belgian" {{ old('nationality') == 'Belgian' ? 'selected' : '' }}>Belgian
                                </option>
                                <option value="Belizean" {{ old('nationality') == 'Belizean' ? 'selected' : '' }}>Belizean
                                </option>
                                <option value="Beninese" {{ old('nationality') == 'Beninese' ? 'selected' : '' }}>Beninese
                                </option>
                                <option value="Bhutanese" {{ old('nationality') == 'Bhutanese' ? 'selected' : '' }}>
                                    Bhutanese</option>
                                <option value="Bolivian" {{ old('nationality') == 'Bolivian' ? 'selected' : '' }}>Bolivian
                                </option>
                                <option value="Bosnian" {{ old('nationality') == 'Bosnian' ? 'selected' : '' }}>Bosnian
                                </option>
                                <option value="Botswanan" {{ old('nationality') == 'Botswanan' ? 'selected' : '' }}>
                                    Botswanan</option>
                                <option value="Brazilian" {{ old('nationality') == 'Brazilian' ? 'selected' : '' }}>
                                    Brazilian</option>
                                <option value="British" {{ old('nationality') == 'British' ? 'selected' : '' }}>British
                                </option>
                                <option value="Bruneian" {{ old('nationality') == 'Bruneian' ? 'selected' : '' }}>Bruneian
                                </option>
                                <option value="Bulgarian" {{ old('nationality') == 'Bulgarian' ? 'selected' : '' }}>
                                    Bulgarian</option>
                                <option value="Burkinabe" {{ old('nationality') == 'Burkinabe' ? 'selected' : '' }}>
                                    Burkinabe</option>
                                <option value="Burmese" {{ old('nationality') == 'Burmese' ? 'selected' : '' }}>Burmese
                                </option>
                                <option value="Burundian" {{ old('nationality') == 'Burundian' ? 'selected' : '' }}>
                                    Burundian</option>
                                <option value="Cabo Verdean" {{ old('nationality') == 'Cabo Verdean' ? 'selected' : '' }}>
                                    Cabo Verdean</option>
                                <option value="Cambodian" {{ old('nationality') == 'Cambodian' ? 'selected' : '' }}>
                                    Cambodian</option>
                                <option value="Cameroonian" {{ old('nationality') == 'Cameroonian' ? 'selected' : '' }}>
                                    Cameroonian</option>
                                <option value="Canadian" {{ old('nationality') == 'Canadian' ? 'selected' : '' }}>Canadian
                                </option>
                                <option value="Chilean" {{ old('nationality') == 'Chilean' ? 'selected' : '' }}>Chilean
                                </option>
                                <option value="Chinese" {{ old('nationality') == 'Chinese' ? 'selected' : '' }}>Chinese
                                </option>
                                <option value="Colombian" {{ old('nationality') == 'Colombian' ? 'selected' : '' }}>
                                    Colombian</option>
                                <option value="Comoran" {{ old('nationality') == 'Comoran' ? 'selected' : '' }}>Comoran
                                </option>
                                <option value="Congolese (Congo-Brazzaville)"
                                    {{ old('nationality') == 'Congolese (Congo-Brazzaville)' ? 'selected' : '' }}>Congolese
                                    (Congo-Brazzaville)</option>
                                <option value="Congolese (Congo-Kinshasa)"
                                    {{ old('nationality') == 'Congolese (Congo-Kinshasa)' ? 'selected' : '' }}>Congolese
                                    (Congo-Kinshasa)</option>
                                <option value="Costa Rican" {{ old('nationality') == 'Costa Rican' ? 'selected' : '' }}>
                                    Costa Rican</option>
                                <option value="Croatian" {{ old('nationality') == 'Croatian' ? 'selected' : '' }}>Croatian
                                </option>
                                <option value="Cuban" {{ old('nationality') == 'Cuban' ? 'selected' : '' }}>Cuban</option>
                                <option value="Cypriot" {{ old('nationality') == 'Cypriot' ? 'selected' : '' }}>Cypriot
                                </option>
                                <option value="Czech" {{ old('nationality') == 'Czech' ? 'selected' : '' }}>Czech</option>
                                <option value="Danish" {{ old('nationality') == 'Danish' ? 'selected' : '' }}>Danish
                                </option>
                                <option value="Djiboutian" {{ old('nationality') == 'Djiboutian' ? 'selected' : '' }}>
                                    Djiboutian</option>
                                <option value="Dominican" {{ old('nationality') == 'Dominican' ? 'selected' : '' }}>
                                    Dominican</option>
                                <option value="Dutch" {{ old('nationality') == 'Dutch' ? 'selected' : '' }}>Dutch</option>
                                <option value="East Timorese"
                                    {{ old('nationality') == 'East Timorese' ? 'selected' : '' }}>East Timorese</option>
                                <option value="Ecuadorean" {{ old('nationality') == 'Ecuadorean' ? 'selected' : '' }}>
                                    Ecuadorean</option>
                                <option value="Egyptian" {{ old('nationality') == 'Egyptian' ? 'selected' : '' }}>Egyptian
                                </option>
                                <option value="Emirati" {{ old('nationality') == 'Emirati' ? 'selected' : '' }}>Emirati
                                </option>
                                <option value="Equatorial Guinean"
                                    {{ old('nationality') == 'Equatorial Guinean' ? 'selected' : '' }}>Equatorial Guinean
                                </option>
                                <option value="Eritrean" {{ old('nationality') == 'Eritrean' ? 'selected' : '' }}>Eritrean
                                </option>
                                <option value="Estonian" {{ old('nationality') == 'Estonian' ? 'selected' : '' }}>Estonian
                                </option>
                                <option value="Eswatini" {{ old('nationality') == 'Eswatini' ? 'selected' : '' }}>Eswatini
                                </option>
                                <option value="Ethiopian" {{ old('nationality') == 'Ethiopian' ? 'selected' : '' }}>
                                    Ethiopian</option>
                                <option value="Fijian" {{ old('nationality') == 'Fijian' ? 'selected' : '' }}>Fijian
                                </option>
                                <option value="Finnish" {{ old('nationality') == 'Finnish' ? 'selected' : '' }}>Finnish
                                </option>

                                <option value="French" {{ old('nationality') == 'French' ? 'selected' : '' }}>French
                                </option>
                                <option value="Gabonese" {{ old('nationality') == 'Gabonese' ? 'selected' : '' }}>Gabonese
                                </option>
                                <option value="Gambian" {{ old('nationality') == 'Gambian' ? 'selected' : '' }}>Gambian
                                </option>
                                <option value="Georgian" {{ old('nationality') == 'Georgian' ? 'selected' : '' }}>Georgian
                                </option>
                                <option value="German" {{ old('nationality') == 'German' ? 'selected' : '' }}>German
                                </option>
                                <option value="Ghanaian" {{ old('nationality') == 'Ghanaian' ? 'selected' : '' }}>Ghanaian
                                </option>
                                <option value="Greek" {{ old('nationality') == 'Greek' ? 'selected' : '' }}>Greek
                                </option>
                                <option value="Grenadian" {{ old('nationality') == 'Grenadian' ? 'selected' : '' }}>
                                    Grenadian</option>
                                <option value="Guatemalan" {{ old('nationality') == 'Guatemalan' ? 'selected' : '' }}>
                                    Guatemalan</option>
                                <option value="Guinean" {{ old('nationality') == 'Guinean' ? 'selected' : '' }}>Guinean
                                </option>
                                <option value="Guinea-Bissauan"
                                    {{ old('nationality') == 'Guinea-Bissauan' ? 'selected' : '' }}>Guinea-Bissauan
                                </option>
                                <option value="Guyanese" {{ old('nationality') == 'Guyanese' ? 'selected' : '' }}>Guyanese
                                </option>
                                <option value="Haitian" {{ old('nationality') == 'Haitian' ? 'selected' : '' }}>Haitian
                                </option>
                                <option value="Honduran" {{ old('nationality') == 'Honduran' ? 'selected' : '' }}>Honduran
                                </option>
                                <option value="Hungarian" {{ old('nationality') == 'Hungarian' ? 'selected' : '' }}>
                                    Hungarian</option>
                                <option value="Icelander" {{ old('nationality') == 'Icelander' ? 'selected' : '' }}>
                                    Icelander</option>
                                <option value="Indian" {{ old('nationality') == 'Indian' ? 'selected' : '' }}>Indian
                                </option>
                                <option value="Indonesian" {{ old('nationality') == 'Indonesian' ? 'selected' : '' }}>
                                    Indonesian</option>
                                <option value="Iranian" {{ old('nationality') == 'Iranian' ? 'selected' : '' }}>Iranian
                                </option>
                                <option value="Iraqi" {{ old('nationality') == 'Iraqi' ? 'selected' : '' }}>Iraqi
                                </option>
                                <option value="Irish" {{ old('nationality') == 'Irish' ? 'selected' : '' }}>Irish
                                </option>
                                <option value="Israeli" {{ old('nationality') == 'Israeli' ? 'selected' : '' }}>Israeli
                                </option>
                                <option value="Italian" {{ old('nationality') == 'Italian' ? 'selected' : '' }}>Italian
                                </option>
                                <option value="Ivorian" {{ old('nationality') == 'Ivorian' ? 'selected' : '' }}>Ivorian
                                </option>
                                <option value="Jamaican" {{ old('nationality') == 'Jamaican' ? 'selected' : '' }}>Jamaican
                                </option>
                                <option value="Japanese" {{ old('nationality') == 'Japanese' ? 'selected' : '' }}>Japanese
                                </option>
                                <option value="Jordanian" {{ old('nationality') == 'Jordanian' ? 'selected' : '' }}>
                                    Jordanian</option>
                                <option value="Kazakhstani" {{ old('nationality') == 'Kazakhstani' ? 'selected' : '' }}>
                                    Kazakhstani</option>
                                <option value="Kenyan" {{ old('nationality') == 'Kenyan' ? 'selected' : '' }}>Kenyan
                                </option>
                                <option value="Kiribati" {{ old('nationality') == 'Kiribati' ? 'selected' : '' }}>
                                    Kiribati</option>
                                <option value="Korean (North)"
                                    {{ old('nationality') == 'Korean (North)' ? 'selected' : '' }}>Korean (North)</option>
                                <option value="Korean (South)"
                                    {{ old('nationality') == 'Korean (South)' ? 'selected' : '' }}>Korean (South)</option>
                                <option value="Kuwaiti" {{ old('nationality') == 'Kuwaiti' ? 'selected' : '' }}>Kuwaiti
                                </option>
                                <option value="Kyrgyzstani" {{ old('nationality') == 'Kyrgyzstani' ? 'selected' : '' }}>
                                    Kyrgyzstani</option>
                                <option value="Laotian" {{ old('nationality') == 'Laotian' ? 'selected' : '' }}>Laotian
                                </option>
                                <option value="Latvian" {{ old('nationality') == 'Latvian' ? 'selected' : '' }}>Latvian
                                </option>
                                <option value="Lebanese" {{ old('nationality') == 'Lebanese' ? 'selected' : '' }}>
                                    Lebanese</option>
                                <option value="Liberian" {{ old('nationality') == 'Liberian' ? 'selected' : '' }}>
                                    Liberian</option>
                                <option value="Libyan" {{ old('nationality') == 'Libyan' ? 'selected' : '' }}>Libyan
                                </option>
                                <option value="Liechtensteiner"
                                    {{ old('nationality') == 'Liechtensteiner' ? 'selected' : '' }}>Liechtensteiner
                                </option>
                                <option value="Lithuanian" {{ old('nationality') == 'Lithuanian' ? 'selected' : '' }}>
                                    Lithuanian</option>
                                <option value="Luxembourgish"
                                    {{ old('nationality') == 'Luxembourgish' ? 'selected' : '' }}>Luxembourgish</option>
                                <option value="Malagasy" {{ old('nationality') == 'Malagasy' ? 'selected' : '' }}>
                                    Malagasy</option>
                                <option value="Malawian" {{ old('nationality') == 'Malawian' ? 'selected' : '' }}>
                                    Malawian</option>
                                <option value="Malaysian" {{ old('nationality') == 'Malaysian' ? 'selected' : '' }}>
                                    Malaysian</option>
                                <option value="Maldivian" {{ old('nationality') == 'Maldivian' ? 'selected' : '' }}>
                                    Maldivian</option>
                                <option value="Malian" {{ old('nationality') == 'Malian' ? 'selected' : '' }}>Malian
                                </option>
                                <option value="Maltese" {{ old('nationality') == 'Maltese' ? 'selected' : '' }}>Maltese
                                </option>
                                <option value="Marshallese" {{ old('nationality') == 'Marshallese' ? 'selected' : '' }}>
                                    Marshallese</option>
                                <option value="Mauritanian" {{ old('nationality') == 'Mauritanian' ? 'selected' : '' }}>
                                    Mauritanian</option>
                                <option value="Mauritian" {{ old('nationality') == 'Mauritian' ? 'selected' : '' }}>
                                    Mauritian</option>
                                <option value="Mexican" {{ old('nationality') == 'Mexican' ? 'selected' : '' }}>Mexican
                                </option>

                                <option value="Micronesian" {{ old('nationality') == 'Micronesian' ? 'selected' : '' }}>
                                    Micronesian</option>
                                <option value="Moldovan" {{ old('nationality') == 'Moldovan' ? 'selected' : '' }}>
                                    Moldovan</option>
                                <option value="Monacan" {{ old('nationality') == 'Monacan' ? 'selected' : '' }}>Monacan
                                </option>
                                <option value="Mongolian" {{ old('nationality') == 'Mongolian' ? 'selected' : '' }}>
                                    Mongolian</option>
                                <option value="Montenegrin" {{ old('nationality') == 'Montenegrin' ? 'selected' : '' }}>
                                    Montenegrin</option>
                                <option value="Moroccan" {{ old('nationality') == 'Moroccan' ? 'selected' : '' }}>
                                    Moroccan</option>
                                <option value="Mozambican" {{ old('nationality') == 'Mozambican' ? 'selected' : '' }}>
                                    Mozambican</option>
                                <option value="Namibian" {{ old('nationality') == 'Namibian' ? 'selected' : '' }}>
                                    Namibian</option>
                                <option value="Nauruan" {{ old('nationality') == 'Nauruan' ? 'selected' : '' }}>Nauruan
                                </option>
                                <option value="Nepalese" {{ old('nationality') == 'Nepalese' ? 'selected' : '' }}>
                                    Nepalese</option>
                                <option value="New Zealander"
                                    {{ old('nationality') == 'New Zealander' ? 'selected' : '' }}>New Zealander</option>
                                <option value="Nicaraguan" {{ old('nationality') == 'Nicaraguan' ? 'selected' : '' }}>
                                    Nicaraguan</option>
                                <option value="Nigerien" {{ old('nationality') == 'Nigerien' ? 'selected' : '' }}>
                                    Nigerien</option>
                                <option value="Nigerian" {{ old('nationality') == 'Nigerian' ? 'selected' : '' }}>
                                    Nigerian</option>
                                <option value="North Macedonian"
                                    {{ old('nationality') == 'North Macedonian' ? 'selected' : '' }}>North Macedonian
                                </option>
                                <option value="Norwegian" {{ old('nationality') == 'Norwegian' ? 'selected' : '' }}>
                                    Norwegian</option>
                                <option value="Omani" {{ old('nationality') == 'Omani' ? 'selected' : '' }}>Omani
                                </option>
                                <option value="Pakistani" {{ old('nationality') == 'Pakistani' ? 'selected' : '' }}>
                                    Pakistani</option>
                                <option value="Palauan" {{ old('nationality') == 'Palauan' ? 'selected' : '' }}>Palauan
                                </option>
                                <option value="Palestinian" {{ old('nationality') == 'Palestinian' ? 'selected' : '' }}>
                                    Palestinian</option>
                                <option value="Panamanian" {{ old('nationality') == 'Panamanian' ? 'selected' : '' }}>
                                    Panamanian</option>
                                <option value="Papua New Guinean"
                                    {{ old('nationality') == 'Papua New Guinean' ? 'selected' : '' }}>Papua New Guinean
                                </option>
                                <option value="Paraguayan" {{ old('nationality') == 'Paraguayan' ? 'selected' : '' }}>
                                    Paraguayan</option>
                                <option value="Peruvian" {{ old('nationality') == 'Peruvian' ? 'selected' : '' }}>
                                    Peruvian</option>
                                <option value="Filipino" {{ old('nationality') == 'Filipino' ? 'selected' : '' }}>
                                    Filipino</option>
                                <option value="Polish" {{ old('nationality') == 'Polish' ? 'selected' : '' }}>Polish
                                </option>
                                <option value="Portuguese" {{ old('nationality') == 'Portuguese' ? 'selected' : '' }}>
                                    Portuguese</option>
                                <option value="Qatari" {{ old('nationality') == 'Qatari' ? 'selected' : '' }}>Qatari
                                </option>
                                <option value="Romanian" {{ old('nationality') == 'Romanian' ? 'selected' : '' }}>
                                    Romanian</option>
                                <option value="Russian" {{ old('nationality') == 'Russian' ? 'selected' : '' }}>Russian
                                </option>
                                <option value="Rwandan" {{ old('nationality') == 'Rwandan' ? 'selected' : '' }}>Rwandan
                                </option>
                                <option value="Saint Lucian"
                                    {{ old('nationality') == 'Saint Lucian' ? 'selected' : '' }}>Saint Lucian</option>
                                <option value="Salvadoran" {{ old('nationality') == 'Salvadoran' ? 'selected' : '' }}>
                                    Salvadoran</option>
                                <option value="Samoan" {{ old('nationality') == 'Samoan' ? 'selected' : '' }}>Samoan
                                </option>
                                <option value="San Marinese"
                                    {{ old('nationality') == 'San Marinese' ? 'selected' : '' }}>San Marinese</option>
                                <option value="Sao Tomean" {{ old('nationality') == 'Sao Tomean' ? 'selected' : '' }}>Sao
                                    Tomean</option>
                                <option value="Saudi" {{ old('nationality') == 'Saudi' ? 'selected' : '' }}>Saudi
                                </option>
                                <option value="Senegalese" {{ old('nationality') == 'Senegalese' ? 'selected' : '' }}>
                                    Senegalese</option>
                                <option value="Serbian" {{ old('nationality') == 'Serbian' ? 'selected' : '' }}>Serbian
                                </option>
                                <option value="Seychellois" {{ old('nationality') == 'Seychellois' ? 'selected' : '' }}>
                                    Seychellois</option>
                                <option value="Sierra Leonean"
                                    {{ old('nationality') == 'Sierra Leonean' ? 'selected' : '' }}>Sierra Leonean</option>
                                <option value="Singaporean" {{ old('nationality') == 'Singaporean' ? 'selected' : '' }}>
                                    Singaporean</option>
                                <option value="Slovak" {{ old('nationality') == 'Slovak' ? 'selected' : '' }}>Slovak
                                </option>
                                <option value="Slovenian" {{ old('nationality') == 'Slovenian' ? 'selected' : '' }}>
                                    Slovenian</option>
                                <option value="Solomon Islander"
                                    {{ old('nationality') == 'Solomon Islander' ? 'selected' : '' }}>Solomon Islander
                                </option>
                                <option value="Somali" {{ old('nationality') == 'Somali' ? 'selected' : '' }}>Somali
                                </option>
                                <option value="South African"
                                    {{ old('nationality') == 'South African' ? 'selected' : '' }}>South African</option>
                                <option value="South Sudanese"
                                    {{ old('nationality') == 'South Sudanese' ? 'selected' : '' }}>South Sudanese</option>
                                <option value="Spanish" {{ old('nationality') == 'Spanish' ? 'selected' : '' }}>Spanish
                                </option>
                                <option value="Sri Lankan" {{ old('nationality') == 'Sri Lankan' ? 'selected' : '' }}>Sri
                                    Lankan</option>
                                <option value="Sudanese" {{ old('nationality') == 'Sudanese' ? 'selected' : '' }}>
                                    Sudanese</option>
                                <option value="Surinamese" {{ old('nationality') == 'Surinamese' ? 'selected' : '' }}>
                                    Surinamese</option>
                                <option value="Swedish" {{ old('nationality') == 'Swedish' ? 'selected' : '' }}>Swedish
                                </option>
                                <option value="Swiss" {{ old('nationality') == 'Swiss' ? 'selected' : '' }}>Swiss
                                </option>

                                <option value="Syrian" {{ old('nationality') == 'Syrian' ? 'selected' : '' }}>Syrian
                                </option>
                                <option value="Taiwanese" {{ old('nationality') == 'Taiwanese' ? 'selected' : '' }}>
                                    Taiwanese</option>
                                <option value="Tajikistani" {{ old('nationality') == 'Tajikistani' ? 'selected' : '' }}>
                                    Tajikistani</option>
                                <option value="Tanzanian" {{ old('nationality') == 'Tanzanian' ? 'selected' : '' }}>
                                    Tanzanian</option>
                                <option value="Thai" {{ old('nationality') == 'Thai' ? 'selected' : '' }}>Thai</option>
                                <option value="Togolese" {{ old('nationality') == 'Togolese' ? 'selected' : '' }}>
                                    Togolese</option>
                                <option value="Tongan" {{ old('nationality') == 'Tongan' ? 'selected' : '' }}>Tongan
                                </option>
                                <option value="Trinidadian and Tobagonian"
                                    {{ old('nationality') == 'Trinidadian and Tobagonian' ? 'selected' : '' }}>Trinidadian
                                    and Tobagonian</option>
                                <option value="Tunisian" {{ old('nationality') == 'Tunisian' ? 'selected' : '' }}>
                                    Tunisian</option>
                                <option value="Turkish" {{ old('nationality') == 'Turkish' ? 'selected' : '' }}>Turkish
                                </option>
                                <option value="Turkmen" {{ old('nationality') == 'Turkmen' ? 'selected' : '' }}>Turkmen
                                </option>
                                <option value="Tuvaluan" {{ old('nationality') == 'Tuvaluan' ? 'selected' : '' }}>
                                    Tuvaluan</option>
                                <option value="Ugandan" {{ old('nationality') == 'Ugandan' ? 'selected' : '' }}>Ugandan
                                </option>
                                <option value="Ukrainian" {{ old('nationality') == 'Ukrainian' ? 'selected' : '' }}>
                                    Ukrainian</option>
                                <option value="Uruguayan" {{ old('nationality') == 'Uruguayan' ? 'selected' : '' }}>
                                    Uruguayan</option>
                                <option value="Uzbekistani" {{ old('nationality') == 'Uzbekistani' ? 'selected' : '' }}>
                                    Uzbekistani</option>
                                <option value="Vanuatuan" {{ old('nationality') == 'Vanuatuan' ? 'selected' : '' }}>
                                    Vanuatuan</option>
                                <option value="Venezuelan" {{ old('nationality') == 'Venezuelan' ? 'selected' : '' }}>
                                    Venezuelan</option>
                                <option value="Vietnamese" {{ old('nationality') == 'Vietnamese' ? 'selected' : '' }}>
                                    Vietnamese</option>
                                <option value="Yemeni" {{ old('nationality') == 'Yemeni' ? 'selected' : '' }}>Yemeni
                                </option>
                                <option value="Zambian" {{ old('nationality') == 'Zambian' ? 'selected' : '' }}>Zambian
                                </option>
                                <option value="Zimbabwean" {{ old('nationality') == 'Zimbabwean' ? 'selected' : '' }}>
                                    Zimbabwean</option>

                            </select>
                            <span class="text-danger">{{ $errors->first('nationality') }}</span>
                        </div>

                        <div class="col-lg-3 col-md-4 mb-2">
                            <label for="religion">Religion</label>
                            <select id="religion" name="religion" class="form-select">
                                <option value="">Select Religion</option>
                                <option value="Islam" {{ old('religion') == 'Islam' ? 'selected' : '' }}>Islam</option>
                                <option value="Hinduism" {{ old('religion') == 'Hinduism' ? 'selected' : '' }}>Hinduism
                                </option>
                                <option value="Christianity" {{ old('religion') == 'Christianity' ? 'selected' : '' }}>
                                    Christianity</option>
                                <option value="Buddhism" {{ old('religion') == 'Buddhism' ? 'selected' : '' }}>Buddhism
                                </option>
                                <option value="Other" {{ old('religion') == 'Other' ? 'selected' : '' }}>Other</option>
                            </select>

                            <span class="text-danger">{{ $errors->first('religion') }}</span>
                        </div>

                        <div class="col-lg-3 col-md-4 mb-2">
                            <label for="blood_group">Blood Group</label>
                            <select id="blood_group" name="blood_group" class="form-select">
                                <option value="">Select Blood Group</option>
                                <option value="A+" {{ old('blood_group') == 'A+' ? 'selected' : '' }}>A+</option>
                                <option value="A-" {{ old('blood_group') == 'A-' ? 'selected' : '' }}>A-</option>
                                <option value="B+" {{ old('blood_group') == 'B+' ? 'selected' : '' }}>B+</option>
                                <option value="B-" {{ old('blood_group') == 'B-' ? 'selected' : '' }}>B-</option>
                                <option value="AB+" {{ old('blood_group') == 'AB+' ? 'selected' : '' }}>AB+</option>
                                <option value="AB-" {{ old('blood_group') == 'AB-' ? 'selected' : '' }}>AB-</option>
                                <option value="O+" {{ old('blood_group') == 'O+' ? 'selected' : '' }}>O+</option>
                                <option value="O-" {{ old('blood_group') == 'O-' ? 'selected' : '' }}>O-</option>
                            </select>

                            <span class="text-danger">{{ $errors->first('blood_group') }}</span>
                        </div>
                        <div class="col-lg-3 col-md-4 mb-2">
                            <label for="status">Status</label>
                            <select id="status" name="status" class="form-select">
                                <option value="1" {{ old('status') == '1' ? 'selected' : '' }}>Active</option>
                                <option value="0" {{ old('status') == '0' ? 'selected' : '' }}>Inactive</option>
                            </select>
                            <span class="text-danger">{{ $errors->first('status') }}</span>
                        </div>
                    </div>

                    <h4>Parents Information</h4>
                    <div class="row">
                        <div class="col-lg-3 col-md-4 mb-2">
                            <label>Father's Name (BN)</label>
                            <input type="text" name="father_name_bn" class="form-control"
                                value="{{ old('father_name_bn') }}">
                            <span class="text-danger">{{ $errors->first('father_name_bn') }}</span>
                        </div>
                        <div class="col-lg-3 col-md-4 mb-2">
                            <label>Father's Name (EN)</label>
                            <input type="text" name="father_name_en" class="form-control"
                                value="{{ old('father_name_en') }}">
                            <span class="text-danger">{{ $errors->first('father_name_en') }}</span>
                        </div>
                        <div class="col-lg-3 col-md-4 mb-2">
                            <label>Father's Mobile</label>
                            <input type="text" name="father_mobile" class="form-control"
                                value="{{ old('father_mobile') }}">
                            <span class="text-danger">{{ $errors->first('father_mobile') }}</span>
                        </div>
                        <div class="col-lg-3 col-md-4 mb-2">
                            <label>Father's Occupation</label>
                            <input type="text" name="father_occupation" class="form-control"
                                value="{{ old('father_occupation') }}">
                            <span class="text-danger">{{ $errors->first('father_occupation') }}</span>
                        </div>
                        <div class="col-lg-3 col-md-4 mb-2">
                            <label>Father's Organization Name</label>
                            <input type="text" name="father_organization_name" class="form-control"
                                value="{{ old('father_organization_name') }}">
                            <span class="text-danger">{{ $errors->first('father_organization_name') }}</span>
                        </div>
                        <div class="col-lg-3 col-md-4 mb-2">
                            <label>Father's Basic Income (BDT)</label>
                            <input type="number" name="father_basic_income" class="form-control"
                                value="{{ old('father_basic_income') }}">
                            <span class="text-danger">{{ $errors->first('father_basic_income') }}</span>
                        </div>
                        <div class="col-lg-3 col-md-4 mb-2">
                            <label>Father's Gross Income (BDT)</label>
                            <input type="number" name="father_gross_income" class="form-control"
                                value="{{ old('father_gross_income') }}">
                            <span class="text-danger">{{ $errors->first('father_gross_income') }}</span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-3 col-md-4 mb-2">
                            <label>Mother's Name (BN)</label>
                            <input type="text" name="mother_name_bn" class="form-control"
                                value="{{ old('mother_name_bn') }}">
                            <span class="text-danger">{{ $errors->first('mother_name_bn') }}</span>
                        </div>
                        <div class="col-lg-3 col-md-4 mb-2">
                            <label>Mother's Name (EN)</label>
                            <input type="text" name="mother_name_en" class="form-control"
                                value="{{ old('mother_name_en') }}">
                            <span class="text-danger">{{ $errors->first('mother_name_en') }}</span>
                        </div>
                        <div class="col-lg-3 col-md-4 mb-2">
                            <label>Mother's Mobile</label>
                            <input type="text" name="mother_mobile" class="form-control"
                                value="{{ old('mother_mobile') }}">
                            <span class="text-danger">{{ $errors->first('mother_mobile') }}</span>
                        </div>
                        <div class="col-lg-3 col-md-4 mb-2">
                            <label>Mother's Occupation</label>
                            <input type="text" name="mother_occupation" class="form-control"
                                value="{{ old('mother_occupation') }}">
                            <span class="text-danger">{{ $errors->first('mother_occupation') }}</span>
                        </div>
                        <div class="col-lg-3 col-md-4 mb-2">
                            <label>Mother's Organization Name</label>
                            <input type="text" name="mother_organization_name" class="form-control"
                                value="{{ old('mother_organization_name') }}">
                            <span class="text-danger">{{ $errors->first('mother_organization_name') }}</span>
                        </div>
                        <div class="col-lg-3 col-md-4 mb-2">
                            <label>Mother's Basic Income (BDT)</label>
                            <input type="number" name="mother_basic_income" class="form-control"
                                value="{{ old('mother_basic_income') }}">
                            <span class="text-danger">{{ $errors->first('mother_basic_income') }}</span>
                        </div>
                        <div class="col-lg-3 col-md-4 mb-2">
                            <label>Mother's Gross Income (BDT)</label>
                            <input type="number" name="mother_gross_income" class="form-control"
                                value="{{ old('mother_gross_income') }}">
                            <span class="text-danger">{{ $errors->first('mother_gross_income') }}</span>
                        </div>
                    </div>

                    <h4>Address</h4>
                    <div class="row">
                        <div class="col-lg-3 col-md-4 mb-2">
                            <label>Present Village / Area</label>
                            <input type="text" name="present_village" class="form-control"
                                value="{{ old('present_village') }}">
                            <span class="text-danger">{{ $errors->first('present_village') }}</span>
                        </div>
                        <div class="col-lg-3 col-md-4 mb-2">
                            <label>Present Post Office</label>
                            <input type="text" name="present_post_office" class="form-control"
                                value="{{ old('present_post_office') }}">
                            <span class="text-danger">{{ $errors->first('present_post_office') }}</span>
                        </div>
                        <div class="col-lg-3 col-md-4 mb-2">
                            <label>Present Upazila</label>
                            <input type="text" name="present_upazila" class="form-control"
                                value="{{ old('present_upazila') }}">
                            <span class="text-danger">{{ $errors->first('present_upazila') }}</span>
                        </div>
                        <div class="col-lg-3 col-md-4 mb-2">
                            <label>Present District / City</label>
                            <input type="text" name="present_district" class="form-control"
                                value="{{ old('present_district') }}">
                            <span class="text-danger">{{ $errors->first('present_district') }}</span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-3 col-md-4 mb-2">
                            <label>Permanent Village / Area</label>
                            <input type="text" name="permanent_village" class="form-control"
                                value="{{ old('permanent_village') }}">
                            <span class="text-danger">{{ $errors->first('permanent_village') }}</span>
                        </div>
                        <div class="col-lg-3 col-md-4 mb-2">
                            <label>Permanent Post Office</label>
                            <input type="text" name="permanent_post_office" class="form-control"
                                value="{{ old('permanent_post_office') }}">
                            <span class="text-danger">{{ $errors->first('permanent_post_office') }}</span>
                        </div>
                        <div class="col-lg-3 col-md-4 mb-2">
                            <label>Permanent Upazila</label>
                            <input type="text" name="permanent_upazila" class="form-control"
                                value="{{ old('permanent_upazila') }}">
                            <span class="text-danger">{{ $errors->first('permanent_upazila') }}</span>
                        </div>
                        <div class="col-lg-3 col-md-4 mb-2">
                            <label>Permanent District / City</label>
                            <input type="text" name="permanent_district" class="form-control"
                                value="{{ old('permanent_district') }}">
                            <span class="text-danger">{{ $errors->first('permanent_district') }}</span>
                        </div>
                    </div>

                    <h4>Documents</h4>
                    <div class="row mb-3">
                        <div class="col-lg-3 col-md-4 mb-2">
                            <div class="form-group">
                                <label class="form-label">Guardian Signature</label>
                                <input class="form-control" type="file" id="guardianSignature" accept="image/*"
                                    name="guardian_signature">
                                <span class="text-danger">{{ $errors->first('guardian_signature') }}</span>
                                <div id="guardianPreview" class="row mt-3 d-none"></div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 mb-2">
                            <div class="form-group">
                                <label class="form-label">Student Image</label>
                                <input class="form-control" type="file" id="studentImage" accept="image/*"
                                    name="student_image">
                                <span class="text-danger">{{ $errors->first('student_image') }}</span>
                                <div id="studentImagePreview" class="mt-3 d-none"></div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 mb-2">
                            <div class="form-group">
                                <label class="form-label">Student Signature</label>
                                <input class="form-control" type="file" id="studentSignature" accept="image/*"
                                    name="student_signature">
                                <span class="text-danger">{{ $errors->first('student_signature') }}</span>
                                <div id="studentPreview" class="row mt-3 d-none"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-footer text-center">
                    <button class="btn btn-info" type="submit">Save Information</button>
                    <a href="{{ route('admin.admission.students.index') }}" type="button"
                        class="btn btn-danger text-white">
                        Canceled
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('script')
    <script>
        function setupImagePreview(inputId, previewId) {
            const input = document.getElementById(inputId);
            const previewContainer = document.getElementById(previewId);

            input.addEventListener('change', function() {
                const files = Array.from(this.files);
                previewContainer.innerHTML = '';

                if (files.length > 0) {
                    previewContainer.classList.remove('d-none');

                    files.forEach((file, index) => {
                        const reader = new FileReader();

                        reader.onload = function(e) {
                            const col = document.createElement('div');
                            col.classList.add('col-6', 'col-md-4');

                            const previewBox = document.createElement('div');
                            previewBox.classList.add('preview-box', 'position-relative');

                            const img = document.createElement('img');
                            img.src = e.target.result;
                            img.classList.add('img-fluid', 'border', 'rounded');

                            const removeBtn = document.createElement('button');
                            removeBtn.innerHTML = '&times;';
                            removeBtn.classList.add('btn', 'btn-sm', 'btn-danger', 'position-absolute',
                                'top-0', 'end-0');
                            removeBtn.setAttribute('type', 'button');
                            removeBtn.addEventListener('click', () => {
                                input.value = '';
                                previewContainer.innerHTML = '';
                                previewContainer.classList.add('d-none');
                            });

                            previewBox.appendChild(img);
                            previewBox.appendChild(removeBtn);
                            col.appendChild(previewBox);
                            previewContainer.appendChild(col);
                        };

                        reader.readAsDataURL(file);
                    });
                } else {
                    previewContainer.classList.add('d-none');
                    previewContainer.innerHTML = '';
                }
            });
        }

        // Attach to both inputs
        setupImagePreview('guardianSignature', 'guardianPreview');
        setupImagePreview('studentSignature', 'studentPreview');
        setupImagePreview('studentImage', 'studentImagePreview');
    </script>


@endsection
