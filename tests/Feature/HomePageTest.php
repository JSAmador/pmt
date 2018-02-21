<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HomePageTest extends TestCase
{


    public function testCanSendPriceInvoice() {

        $response = $this->call('POST', '/test', ['price' => 1234, 'invoice' =>'I0001']);

        $this->assertEquals(200, $response->status());


    }
}
