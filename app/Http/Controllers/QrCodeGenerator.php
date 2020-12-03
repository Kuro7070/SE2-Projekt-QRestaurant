<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\LabelAlignment;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Response\QrCodeResponse;

class QrCodeGenerator extends Controller
{
    public static function generateQRCode($url)
    {

        $qrCode = new QrCode($url);
        $qrCode->setSize(300);
        $qrCode->setMargin(10);

        $qrCode->setWriterByName('svg');
        $qrCode->setEncoding('UTF-8');
        $qrCode->setErrorCorrectionLevel(ErrorCorrectionLevel::HIGH());
        $qrCode->setForegroundColor(['r' => 0, 'g' => 0, 'b' => 0, 'a' => 0]);
        $qrCode->setBackgroundColor(['r' => 255, 'g' => 255, 'b' => 255, 'a' => 0]);
//        $qrCode->setLogoPath(__DIR__ . '/../assets/images/symfony.png');
//        $qrCode->setLogoSize(150, 200);
        $qrCode->setValidateResult(false);

        $qrCode->setRoundBlockSize(true,
            QrCode::ROUND_BLOCK_SIZE_MODE_MARGIN);

        $qrCode->setWriterOptions(['exclude_xml_declaration' => true]);

        header('Content-Type: ' . $qrCode->getContentType());
        return $qrCode->writeDataUri();
    }
}

//\App\Http\Controllers\QrCodeGenerator::generateQRCode("Qrestaurant 2020")
