<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use IpQuery\Response\IpQueryResponse;


class IpQueryResponseTest extends TestCase
{
    const VALID_RESPONSE = "{
  \"query\": \"24.48.0.1\",
  \"status\": \"success\",
  \"country\": \"Canada\",
  \"countryCode\": \"CA\",
  \"region\": \"QC\",
  \"regionName\": \"Quebec\",
  \"city\": \"Montreal\",
  \"zip\": \"H1S\",
  \"lat\": 45.5808,
  \"lon\": -73.5825,
  \"timezone\": \"America/Toronto\",
  \"isp\": \"Le Groupe Videotron Ltee\",
  \"org\": \"Videotron Ltee\",
  \"as\": \"AS5769 Videotron Telecom Ltee\"
}";
    const INVALID_RESPONSE = "{
  \"query\": \"127.0.0.1\",
  \"message\": \"reserved range\",
  \"status\": \"fail\"
}";

    public function testCanBeUsedAsString(): void
    {
        $this->assertEquals(
            'localization',
            IpQueryResponse::fromString(self::INVALID_RESPONSE)
        );
    }
}