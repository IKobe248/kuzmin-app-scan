<?php

declare(strict_types=1);

namespace IKobe248\UrlTester;

class ScannerHosts
{
  private $urls;
  private $httpClient;

  public function __construct(array $urls)
  {
    $this->urls = $urls;
    $this->httpClient = new GuzzleHttp\Client();
  }
}
