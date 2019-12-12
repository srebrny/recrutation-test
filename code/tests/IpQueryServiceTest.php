<?php

declare(strict_types=1);

use IpQuery\IpLocalizationService;
use PHPUnit\Framework\TestCase;
use IpQuery\IpQuery;


final class IpQueryServiceTest extends TestCase
{
    const VALID_IP = '90.156.104.72';
    const INVALID_IP = '127.0.0.1';


    public function testCanBeCreatedFromValidIpAddress(): void
    {
        $this->assertInstanceOf(
            IpQuery::class,
            IpLocalizationService::fromString(self::VALID_IP)
        );
    }

    public function testCannotBeCreatedFromInvalidEmailAddress(): void
    {
        $this->expectException(InvalidArgumentException::class);

        IpLocalizationService::fromString(self::INVALID_IP);
    }

    public function testCanBeUsedAsString(): void
    {
        $this->assertEquals(
            'localization',
            IpLocalizationService::fromString(self::VALID_IP)
        );
    }
}