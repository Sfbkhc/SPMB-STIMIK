<?php

namespace App\Controllers;

use BNI\Client as BNIClient;

class AuthController extends BaseController
{
    protected $bniClient;

    public function __construct()
    {
        // Inisialisasi BNI Client
        $this->bniClient = new BNIClient([
            'client_id' => '202d1f32-5cb5-4de7-abf6-204e95317a44', // Isi dengan client_id Anda
            'client_secret' => '44b31673e29cce7d5c1a57fa0d10a09e78b0181873b3818d039d8ab6d0b21369', // Isi dengan client_secret Anda
            'api_key' => '5fcc4ad2-1290-450c-8102-630476b719e8', // Isi dengan API key Anda
            'redirect_uri' => 'https://pmb.spmb-stimik.my.id/oauth/callback',
            'environment' => 'sandbox', // Gunakan 'production' jika di produksi
        ]);
    }

    public function redirect()
    {
        // Dapatkan URL otorisasi dari BNI Client
        $authUrl = $this->bniClient->getAuthorizationUrl();

        // Redirect pengguna ke halaman otorisasi
        return redirect()->to($authUrl);
    }

    public function callback()
    {
        // Tangkap kode otorisasi dari callback
        $code = $this->request->getVar('code');

        // Tukarkan kode otorisasi dengan token akses
        $accessToken = $this->bniClient->getAccessToken($code);

        // Simpan token ke dalam session atau database
        session()->set('access_token', $accessToken);

        // Redirect ke halaman dashboard atau halaman lain
        return redirect()->to('/dashboard')->with('message', 'Autentikasi berhasil');
    }
}
