<?php
/**
 * Created by PhpStorm.
 * User: Mctashuo
 * Date: 4/9/2018
 * Time: 10:11 AM
 */

spl_autoload_register();

$mgr = new BloggsCommsManager();
print $mgr->getHeaderText();
echo "<br />";
print $mgr->getApptEncoder()->encode();
echo "<br />";
print $mgr->getFooterText();
echo "<br />";

$mgr1 = new MegaCommsManager();

print $mgr1->getHeaderText();
echo "<br />";
print $mgr1->getApptEncoder()->encode();
echo "<br />";
print $mgr1->getFooterText();
echo "<br />";
