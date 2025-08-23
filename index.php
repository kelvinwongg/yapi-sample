<?php

namespace YapiSample;

use Yapi\Yapi;

require_once __DIR__ . '/vendor/autoload.php';

// Auto Flow
// $yapi = new \Yapi\Yapi('oas/api.yaml');

// Manual Flow
$yapi = new \Yapi\Yapi();
$yapi->initResponse();
$yapi->loadYaml('oas/api.yaml');
$yapi->loadRequest();
$yapi->checkRequest($yapi->file, $yapi->request);
$yapi->loadHook();
$yapi->execBefore($yapi->request, $yapi->response, $yapi->file, $yapi->hook);
$yapi->execCrud($yapi->request, $yapi->response, $yapi->file, $yapi->hook);
$yapi->execAfter($yapi->request, $yapi->response, $yapi->file, $yapi->hook);
$yapi->handleResponse($yapi->response);
