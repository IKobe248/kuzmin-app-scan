<?php

declare(strict_types=1);

namespace Kuz\ScanApp;

class Scanner
{
  private $urls;
  private $httpClient;

  public function getString(string $url): string
  {
    return $this->urls[$url] ?? "";
  }
}
