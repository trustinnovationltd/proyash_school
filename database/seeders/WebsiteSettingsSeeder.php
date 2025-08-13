<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WebsiteSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('website_settings')->insert([
            'id' => 1,
            'title' => 'Proyash, Jashore Area',
            'email' => 'proyashjashore@gmail.com',
            'phone' => '+8801769-553729',
            'address' => null,
            'logo' => 'frontend/assets/uploads/1753944960_logo.png',
            'short_description' => 'Proyash Jashore is a specialized school dedicated to nurturing children with autism and special needs. We provide inclusive education, therapy, and support to help every child grow with dignity and confidence.',
            'principle_name' => 'Lt Col Hasan Shahriar Kabir, psc, Arty',
            'principle_image' => 'frontend/assets/uploads/1753944960_principle.jpeg',
            'principle_message' => '<p>Welcome to Proyash, Jashore Area &ndash; a center of care, hope, and inclusive excellence.<br /><br />At Proyash, we believe that every child is unique, full of potential, and worthy of dignity, respect, and opportunity. Our institution is dedicated to nurturing the cognitive, emotional, physical, and social development of children with special needs, including those on the autism spectrum.<br /><br />We understand the extraordinary journey that these children and their families undertake every day. That&rsquo;s why Proyash is not just a school &ndash; it is a community built on compassion, innovation, and unwavering commitment. With a multidisciplinary team of dedicated educators, therapists, and caregivers, we strive to create an environment where students feel safe, valued, and inspired to grow.<br /><br />Our approach combines specialized education, therapy services, and life skills training to equip our students with the tools they need to thrive in society. We emphasize individualized learning plans, family involvement, and integrated support to ensure that each child receives the best possible care tailored to their needs.<br /><br />As the Principal of this institution, I am proud to lead a mission that is deeply rooted in empathy, professionalism, and purposeful education. I am grateful to the Bangladesh Army, 55 Infantry Division and Jessore Area, our partner organizations, and above all, the families who entrust us with their precious children.<br /><br />Together, let us continue to build a more inclusive and compassionate society &ndash; where every ability is recognized, every voice is heard, and every child gets the chance to shine.<br /><br />Warm regards,<br />Lt Col Hasan Shahriar Kabir, psc<br />Principal<br />Proyash, Jashore Area</p>',
            'facebook_link' => null,
            'youtube_link' => null,
            'twitter_link' => null,
            'linkedin_link' => null,
            'alternative_phone_1' => null,
            'alternative_phone_2' => null,
            'alternative_email_1' => null,
            'alternative_email_2' => null,
            'extra_field_1' => null,
            'extra_field_2' => null,
            'extra_field_3' => null,
            'extra_field_4' => null,
            'extra_field_5' => null,
            'created_by' => null,
            'updated_by' => null,
            'created_at' => '2025-07-31 00:56:00',
            'updated_at' => '2025-07-31 00:56:00',
        ]);
    }
}
