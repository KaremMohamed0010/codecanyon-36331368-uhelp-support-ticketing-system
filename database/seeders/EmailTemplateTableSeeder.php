<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class EmailTemplateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('email_templates')->insert([

            [
                'code' => 'guestticket_email_verification',
                'title' => 'Guest Email Verification',
                'subject' => 'Guest Verification',
                'body' => '<p class="root-block-node" data-paragraphid="16" data-from-init="true" data-changed="false">Dear {{guestname}},</p>
                <p class="root-block-node" data-paragraphid="17" data-from-init="true" data-changed="false">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Please click on the below link and verify your email address to create your guest ticket.</p><p class="root-block-node" data-paragraphid="17" data-from-init="true" data-changed="false">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Your OTP:- {{guestotp}}</p><p class="root-block-node" data-paragraphid="17" data-from-init="true" data-changed="false">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;{{guestemail}}</p>
                <p class="root-block-node" data-paragraphid="19" data-from-init="true" data-changed="false">Sincerely,</p>
                <p class="root-block-node" data-paragraphid="20" data-from-init="true" data-changed="false">Support Team</p>',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
