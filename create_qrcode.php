<?php
// Bestand met functions inladen, deze regel laten staan aub
require 'vendor/autoload.php';

use CodeItNow\BarcodeBundle\Utils\QrCode;

$qrCode = new QrCode();
$qrCode
    ->setText('g')
    ->setSize(300)
    ->setPadding(10)
    ->setErrorCorrection('high')
    ->setForegroundColor(array('r' => 0, 'g' => 0, 'b' => 0, 'a' => 0))
    ->setBackgroundColor(array('r' => 255, 'g' => 255, 'b' => 255, 'a' => 0))
    ->setLabel('ekmek')
    ->setLabelFontSize(16)
    ->setImageType(QrCode::IMAGE_TYPE_PNG)
;
echo '<img src="data:'.$qrCode->getContentType().';base64,'.$qrCode->generate().'" />';

// Laad de composer autoloader in

// Lees de documentatie van de bacon/bacon-qr-code package
// Zo kom je te weten hoe je deze package kunt gebruiken
// https://github.com/Bacon/BaconQrCode

// Maak een QR code met als inhoud een leuke URL
// Tip: Gebruik de SvgImageBackEnd()

// Sla de QR code op als afbeelding: "qrcode.svg"