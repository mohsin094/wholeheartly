<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            'thanks_header' => 'Thank you for your Order',
            'tabs_txt' => json_encode(['1. YOUR ORDER', '2. YOUR FEEDBACK', '3. GET YOUR BENEFIT']),
            'first_tab' => json_encode(['Please enter your Amazon ORDER ID here. </br> Use the "FIND ID" button to get it easily from your Amazon Order History page.','*How long have you been using it?', '*How satisfied are you with our product?
            ']),
            'four_star_page' => json_encode(['*Why is this item short of your expectations? </br> *How would you like us to improve?
            ']),
            'five_star_page' => json_encode(['Thank you! We are so excited you came for your Benefit! You can choose to receive </br> <strong> a same product (for free) </strong>
            </br> when you complete these steps. We truly appreciate your review on Amazon as it helps us immensely! </br>
            Please kindly support our growing business. <strong> Please save your review screenshot and return here to upload it </strong> , </br> so that you can unlock your benefit! Thank you for your business and your time!','Leave Feedback','Leave Feedback for the products on Amazon and claim all offers','']),
            'review' => json_encode(['Love all the product amazing!']),
            'thanks_page' => json_encode(['Thank you for your feedback! </br> Our customer service will contact you shortly. </br> Please CHECK YOUR EMAIL INBOX (or SPAM BOX) for further assistance! </br> Have a Nice Day!', 'wholeheartly.com Customer Support Team']),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
