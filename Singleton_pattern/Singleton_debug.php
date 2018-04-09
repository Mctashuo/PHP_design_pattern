<?php
/**
 * Created by PhpStorm.
 * User: Mctashuo
 * Date: 4/9/2018
 * Time: 9:03 AM
 */
$base = function($class_name)
{
    $file = __DIR__ . '\\'. $class_name .'.php';
    require($file);
};
spl_autoload_register($base);
$pref = Preferences::getInstance();
$pref->setProps("name", "matt");
unset($pref); // remove the reference
$pref2 = Preferences::getInstance();
print $pref2->getProps("name") ."\n"; // demonstrate value is not lost