<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class Qpay {

    protected $host, $username, $password;
    protected $accessToken, $refreshToken;

    public function __construct($host, $username, $password)
    {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;

        $this->authToken();
    }

    public function authToken()
    {
        $url = $this->host . '/auth/token';
        $response = Http::withBasicAuth($this->username, $this->password)->post($url);

        if ($response->successful()) {
            $json = $response->json();
            $this->accessToken = $json['access_token'];
            $this->refreshToken = $json['refresh_token'];
        }

        return $response;
    }

    public function authRefresh()
    {
        $url = $this->host . '/auth/refresh';
        $response = Http::withToken($this->refreshToken)->post($url);

        if ($response->successful()) {
            $json = $response->json();
            $this->accessToken = $json['access_token'];
            $this->refreshToken = $json['refresh_token'];
        }

        return $response;
    }

    public function createInvoice($body)
    {
        $url = $this->host . '/invoice';
        $response = Http::withToken($this->accessToken)->retry(3, 100)->post($url, $body);

        return $response;
    }

    public function getInvoice($invoiceId)
    {
        $url = $this->host . '/invoice/' . $invoiceId;
        $response = Http::withToken($this->accessToken)->retry(3, 100)->get($url);

        return $response;
    }

    public function cancelInvoice($invoiceId)
    {
        $url = $this->host . '/invoice/' . $invoiceId;
        $response = Http::withToken($this->accessToken)->retry(3, 100)->delete($url);

        return $response;
    }

    public function getCallbackURL($paymentId)
    {
        return route('payment.callback', $paymentId);
    }

    public function paymentCheck($invoiceId)
    {
        $url = $this->host . '/payment/check';
        $body = [
            'object_type' => 'INVOICE',
            'object_id' => $invoiceId,
            'offset' => [
                'page_number' => 1,
                'page_limit' => 100
            ]
        ];
        $response = Http::withToken($this->accessToken)->retry(3, 100)->post($url, $body);

        return $response;
    }
}