<?php
/**
 * Created by PhpStorm.
 * User: Mctashuo
 * Date: 4/9/2018
 * Time: 10:01 AM
 */

class BloggsCommsManager extends CommsManager
{
    public function getApptEncoder(): ApptEncoder
    {
        return new BloggsApptEncoder();
    }
    public function getFooterText(): string
    {
        return "BloggsCal header\n";
    }
    public function getHeaderText(): string
    {
        return "BloggsCal footer\n";
    }

}