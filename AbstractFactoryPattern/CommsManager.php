<?php
/**
 * Created by PhpStorm.
 * User: Mctashuo
 * Date: 4/9/2018
 * Time: 10:47 AM
 */

abstract class CommsManager
{
    const APPT = 1;
    const TTD = 2;
    const CONTACT = 3;
    abstract public function getHeaderText():string;
    abstract public function make(int $flag_int):Encoder;
    abstract public function getFootText(): string;


}