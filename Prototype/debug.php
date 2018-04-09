<?php
/**
 * Created by PhpStorm.
 * User: Mctashuo
 * Date: 4/9/2018
 * Time: 11:19 AM
 */
include('proClass.php');
include('TerrainFactory.php');

$facotry = new TerrainFactory(new EarthSea(),new EarthPlains(),new EarthForest());
print_r($facotry->getSea());
echo "<br />";
print_r($facotry->getPlains());
echo '<br />';
print_r($facotry->getForest());
echo '<br />';