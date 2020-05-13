<?php

use Zxing\QrReader;

defined('BASEPATH') or exit('No direct script access allowed');

class Qrdetector extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('qr/reader');
    }

    public function decode()
    {
        // Read image input
        // $image = fopen($_FILES["qrcode"]["tmp_name"], 'r');
        $image = $_FILES["qrcode"]["tmp_name"];

        // Decode QR Code
        $qrcode = new QrReader($image);

        // Store text to data
        $data['qrcode_text'] = $qrcode->text();

        $this->load->view('qr/decode', $data);
    }
}
