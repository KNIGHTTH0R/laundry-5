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
        // Test REST API with authentication to get all orders
        // Admin user
        $response = $this->json('GET', 'api/orders', ['email' => 'aaa@aaa.com', 'password' => 'aaaaaa']);
        $response->assertStatus(200);
        // Normal user
        $response = $this->json('GET', 'api/orders', ['email' => 'ccc@ccc.com', 'password' => 'cccccc']);
        $response->assertStatus(403);
        // Guest
        $response = $this->json('GET', 'api/order');
        $response->assertStatus(404);

        // Get get specific order
        $response = $this->json('GET', 'api/orders/1', ['email' => 'aaa@aaa.com', 'password' => 'aaaaaa']);
        $response->assertStatus(200);
        $response = $this->json('GET', 'api/orders/1');
        $response->assertStatus(404);

        // Create a new order
        $response = $this->json('POST', 'api/orders', [
            'email' => 'aaa@aaa.com',
            'password' => 'aaaaaa',
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
        
        // Update a order
        $response = $this->put('api/orders/1', [
            'email' => 'aaa@aaa.com',
            'password' => 'aaaaaa',
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
        
        // Delete a order
        $response = $this->delete('api/orders/5', ['email' => 'aaa@aaa.com', 'password' => 'aaaaaa']);
        $response->assertStatus(204);
    }

}
