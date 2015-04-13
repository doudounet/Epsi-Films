<?php
/**
 * Created by PhpStorm.
 * User: Ludovic
 * Date: 13/04/2015
 * Time: 09:40
 */

class apiOMDB
{
    private $BASE_URL = 'http://www.omdbapi.com/';


    public function get_data($URL)
    {

        $data = json_decode(file_get_contents($URL));
        return $data;
    }

    public function find_by_IMDB_ID($ID)
    {
        return $this->get_data(sprintf('%s?i=%s', $this->BASE_URL, urlencode($ID)));
    }

    public function find_by_title($title)
    {
        return $this->get_data(sprintf('%s?s=%s', $this->BASE_URL, urlencode($title)));
    }
}