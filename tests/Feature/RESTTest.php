<?php

namespace Tests\Feature;

use GuzzleHttp\Client;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RESTTest extends TestCase
{

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testRESTAPI()
    {
        $response = $this->get('api/orders');
        $response->assertStatus(200);
        $response = $this->get('api/order');
        $response->assertStatus(404);

        $response = $this->get('api/orders/1');
        $response->assertStatus(200);
        $response = $this->get('api/orders/0');
        $response->assertStatus(500);

        $response = $this->post('api/orders', [
            "user_id" => 0,
            "laundry" => "0.00",
            "ironing" => "0.00",
            "laundry_status" => "completed",
            "payment_status" => "paid",
            "pickup" => "2017-01-01",
            "delivery" => "2017-01-05",
            "notes" => "notes0"
        ]);
        $response->assertStatus(201);
        $response = $this->post('api/orders');
        $response->assertStatus(500);
        
        $response = $this->put('api/orders/1', [
            "user_id" => 0,
            "laundry" => "99.00",
            "ironing" => "99.00",
            "laundry_status" => "completed",
            "payment_status" => "paid",
            "pickup" => "2017-01-01",
            "delivery" => "2017-01-05",
            "notes" => "notes0"
        ]);
        $response->assertStatus(200);
        $response = $this->put('api/orders/0');
        $response->assertStatus(500);
        
        $response = $this->delete('api/orders/5');
        $response->assertStatus(204);
        $response = $this->delete('api/orders/5');
        $response->assertStatus(404);
    }

}
