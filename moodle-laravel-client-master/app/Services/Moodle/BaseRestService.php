<?php

namespace App\Services\Moodle;


use App\Services\RestService;
use DateTime;

class BaseRestService {

    /**
     * Set request params.
     *
     * @var array
     */
    protected $params = [];

    /**
     * Set request url
     *
     * @var string
     */
    protected $url;

    /**
     * Set rest service connection.
     *
     * @var RestService
     */
    protected $service;

    public function __construct() {
        $this->url = 'http://34.125.125.16/moodle/webservice/rest/server.php';
        $this->params = [
            'moodlewsrestformat' => 'json',
            'wstoken' =>'5a6198152b35a542d0ed57de6f63d9f8' ,
        ];
        $this->service = new RestService();
    }

    /**
     * Create data formated string from timestamp
     *
     * @param int $ts
     * @return string
     */
    protected static function toDateTime($ts) {
        if ($ts === 0) {
            return '';
        }
        $date = new DateTime("@$ts");
        return $date->format('Y-m-d H:i:s e');
    }
}
