<?php

namespace Database\Seeders;

use App\Enums\CpageEnums;
use App\Models\Site\Cpage;
use App\Models\Site\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CpageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            Cpage::updateOrCreate([
            "type" => 'privacy',
            "message" => "<p>This page informs you of our policies regarding the collection, use and disclosure of Personal Information we receive from users of the Site. We use your Personal Information only for providing and improving the Site and your experience accross our platform. By using the Site, you agree to the collection and use of information in accordance with this policy."            ]);

            Cpage::updateOrCreate([
            "type" => 'terms',
            "message" => "<p>These Terms and Conditions have been substantively updated to take into consideration changes in legislation and regulations applicable to our business in Nigeria.</p>
        <h4>1. INTRODUCTION</h4>"
            ]);

            Cpage::updateOrCreate([
            "type" => 'contact',
            "message" => "<p>&nbsp;</p>
<p><strong>You can contact us with the following information provided below.</strong></p>
<p>&nbsp;</p>
<p>&nbsp;<strong>Facebook page: facebook.com/kenspaytechnology</strong></p>
<p>&nbsp;</p>
<p>Phone No:&nbsp; &nbsp;&nbsp;</p>
<ul>
<li>+234&nbsp;8126216200</li>
</ul>
<p>Email: <a href='mailto:support@kenspay.com.ng'>support@kenspay.com.ng</a></p>
<p>Office: 22 ambose street apapa&nbsp; lagos.</p>
<p>&nbsp;</p>
<p>&nbsp;We will be glad to hear from you.</p>"
            ]);

    }
}
