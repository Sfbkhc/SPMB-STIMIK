<?php

namespace App\Controllers;

use BniApi\BniPhp\Bni;

class BNIController extends BaseController
{
    public function index()
    {
        // Inisialisasi kredensial API BNI
        $client_id = "202d1f32-5cb5-4de7-abf6-204e95317a44";
        $client_secret = "44b31673e29cce7d5c1a57fa0d10a09e78b0181873b3818d039d8ab6d0b21369";
        $api_key = "5fcc4ad2-1290-450c-8102-630476b719e8";
        $environment = BNI::ENVIRONMENT_SANDBOX; // Atau gunakan BNI::ENVIRONMENT_PRODUCTION untuk live
        $bni = new BNI($client_id, $client_secret, $api_key, $environment);

        // Mendapatkan akses token
        $access_token = $bni->getAccessToken();

        // Contoh: Mendapatkan saldo
        $response = $bni->getBalance([
            'client_id' => $client_id,
            'account_no' => '0115476117', // Nomor rekening BNI Anda
        ]);

        // Tampilkan hasil respons
        return $this->response->setJSON($response);
    }
}
