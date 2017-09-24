<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ClientController extends Controller
{

    function token($id)
    {
        $client = new Client();
        $res = $client->request('GET', 'http://aip-rest.appspot.com/api/token/' . $id);
        return $res->getBody();
    }

    function sequence($sequence)
    {
        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', 'http://aip-rest.appspot.com/api/sequence/latest?token=' . $sequence);
        return $res->getBody();
    }

    function newsequence($sequence)
    {
        $client = new \GuzzleHttp\Client();

        $res = $client->request('POST', 'http://aip-rest.appspot.com/api/sequence?token=' . $sequence, [
            'json' => ['number' => '161']
        ]);
        return $res->getBody();
    }

    function delete($sequence)
    {
        $client = new \GuzzleHttp\Client();
        $res = $client->request('DELETE', 'aip-rest.appspot.com/api/lock/12751172?token=' . $sequence);
        return $res->getBody();
    }

    function update()
    {
        $client = new \GuzzleHttp\Client([
            'auth' => ['12751172', 'swing'],
        ]);

        $res = $client->request('PUT', 'http://aip-rest.appspot.com/api/secure/students/12751172', [
            'json' => [
                'studentId' => '12751172',
                'studentName' => 'Hongming Lin'
            ]
        ]);
        return $res->getStatusCode();
    }

}
