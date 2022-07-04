<?php

namespace BeSimple\SoapClient;

interface SoapClientInterface
{
    public function __doRequest($request, $location, $action, $version, $oneWay = 0);

    public function __getLastRequestHeaders();

    public function __getLastRequest();

    public function __getLastResponseHeaders();

    public function __getLastResponse();

    public function getSoapKernel();
}