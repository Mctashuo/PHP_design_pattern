<?php
/**
 * Created by PhpStorm.
 * User: Mctashuo
 * Date: 4/9/2018
 * Time: 11:14 AM
 */

class TerrainFactory
{
    private $sea;
    private $forest;
    private $plains;

    public function __construct(Sea $sea,Plains $plains,Forest $forest)
    {
        $this->sea = $sea;
        $this->forest = $forest;
        $this->plains = $plains;

    }
    public function getSea():Sea
    {
        return clone $this->sea;
    }

    public function getPlains() : Plains
    {
        return clone $this->plains;
    }

    public function getForest(): Forest
    {
        return clone $this->forest;
    }
}