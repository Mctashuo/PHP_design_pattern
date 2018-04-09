<?php
/**
 * Created by PhpStorm.
 * User: Mctashuo
 * Date: 4/9/2018
 * Time: 10:27 AM
 */

class MegaCommsManager extends CommsManager
{
    public function getApptEncoder(): ApptEncoder
    {
        return new MegaApptEncoder();
    }
    public function getHeaderText(): string
    {
        return "Mega Header";
    }

    public function getFooterText(): string
    {
        return "Mega footer";
    }


}