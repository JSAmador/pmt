<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class FormPageTest extends TestCase
{


    public function testPaymentSuccessPage() {


        $resp = $this->get("/paymentSuccess");

        $resp->assertStatus(200);

    }

    public function testPaymentFailPage() {


        $resp = $this->get("/paymentFail");

        $resp->assertStatus(200);

    }

}
