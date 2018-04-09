<?php
/**
 * Created by PhpStorm.
 * User: Mctashuo
 * Date: 4/9/2018
 * Time: 10:49 AM
 */

class BloggsCommManager extends CommsManager
{
   public function getHeaderText():string
   {
       return "BloggCal header";
   }
   public function make(int $flag_int):Encoder
   {
       switch ($flag_int)
       {
           case self::APPT:
                return new BloggsApptEncoder();
           case self::CONTACT:
               return new BloggsContactEncoder();
           case self::TTD:
               return new bloggsTtdEncoder();
       }
   }
   public function getFootText(): string
   {
       return "BloggsCal footer\n";
   }

}