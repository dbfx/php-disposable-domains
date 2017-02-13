<?php

namespace DisposableEmail\DomainList;

class DomainList
{
    private $domains = [];

    public function __construct() {
        $contents = file_get_contents(dirname(PHP_SELF) . '/domain-list.txt');
        $this->domains = explode("\n", $contents);
    }

    /**
     * Check if a domain is in the disposable list
     *
     * @param $key domain to check
     * @return bool
     */
    public function search($key) {
        return in_array($key, $this->domains);
    }

    /**
     * Receive an array of all disposable domains
     *
     * @return array
     */
    public function load() {
        return $this->domains;
    }

}