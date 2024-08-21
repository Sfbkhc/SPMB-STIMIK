<?php

namespace App\Controllers;

use BniApi\BniPhp\api\Ecollection;
use BniApi\BniPhp\Bni; 

class BNIController extends BaseController
{
    public function index()
    {
        // Inisialisasi kredensial API BNI
        $client_id = "202d1f32-5cb5-4de7-abf6-204e95317a44";
        $client_secret = "44b31673e29cce7d5c1a57fa0d10a09e78b0181873b3818d039d8ab6d0b21369";
        $api_key = "5fcc4ad2-1290-450c-8102-630476b719e8";
        $api_secret = '6f5f2618-0c0c-4708-9e94-490b0049e10a';      
        $app_name = 'SPMB';

        // Membuat instance BNI dan Ecollection
        $bni = new Bni(Bni::ENV_SANDBOX, $client_id, $client_secret, $api_key, $api_secret, $app_name);
        $ecoll = new Ecollection($bni);
        
        // Detail transaksi
        $trxId = 'trx-20240001';  // ID Transaksi (bisa disesuaikan)
        $trxAmount = 1000; // Jumlah transaksi (misalnya, 1000 rupiah)
        $billingType = 'c'; // Credit Billing Type
        $customerName = 'M.r Joni'; // Nama Pelanggan
        $customerEmail = 'joni@gmail.com'; // Email Pelanggan
        $customerPhone = '081913533832'; // Telepon Pelanggan
        $datetimeExpired = (new \DateTime())->modify('+2 days')->format('Y-m-d\TH:i:s+07:00'); // 2 hari dari sekarang
        $description = "Pembayaran Virtual Account STIMIK"; // Deskripsi pembayaran

        try {
            // Membuat tagihan dengan API BNI Ecollection
            $createBilling = $ecoll->createBilling(
                $trxId,
                $trxAmount,
                $billingType,
                $customerName,
                $customerEmail,
                $customerPhone,
                '', // Virtual Account akan digenerate otomatis
                $datetimeExpired,
                $description
            );

            // Mengembalikan respon dalam format JSON
            return $this->response->setJSON($createBilling);
        } catch (\Exception $e) {
            log_message('error', 'Error membuat tagihan: ' . $e->getMessage());
            return $this->response->setStatusCode(500)->setJSON(['error' => 'Terjadi kesalahan saat membuat tagihan. ' . $e->getMessage()]);
        }
    }
}
