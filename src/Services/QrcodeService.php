<?php

namespace App\Services;

use Endroid\QrCode\Builder\BuilderInterface;
use Endroid\QrCode\Color\Color;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelLow;

class QrcodeService
{
    /**
     * @var BuilderInterface
     */
    protected $builder;

    public function __construct(BuilderInterface $builder)
    {
        $this->builder = $builder;
    }

    public function qrcode($query)
    {

        $url = 'https://www.google.com/search?q=';

        $objDateTime = new \DateTime('NOW');
        $dateString = $objDateTime->format('d-m-Y H:i:s');
        $path = dirname(__DIR__, 2).'/public/assets/';

        $result = $this->builder
            ->data($query)
            ->size(400)
            ->errorCorrectionLevel(new ErrorCorrectionLevelLow())
            ->encoding(new Encoding('UTF-8'))

            ->backgroundColor(new Color(233,255,251))
            ->build()
        ;

        $namePng = uniqid(''.'').'.png';

        $result->saveToFile((\dirname(__DIR__,2).'/public/qrcode/'.$namePng));
        return $result->getDataUri();
    }
}