<?php

namespace App\Services;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;


class MaLocalisation extends AbstractController
{
    /**
     * @Route("/geo", name="geo")
     */
    public function MaLocalisation()
    {

        $db = new \IP2Location\Database('../../vendor/ip2location/ip2location-php/data/IP2LOCATION-LITE-DB11.BIN', \IP2Location\Database::FILE_IO);
        $ip = file_get_contents("http://checkip+.amazonaws.com/");
        $records = $db->lookup($ip, \IP2Location\Database::ALL);
        dump($records);
        if (is_array($records)) {
            return $records['cityName'];
        } else return "";
    }
}