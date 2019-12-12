<?php

declare(strict_types=1);

use IpQuery\IpQueryService;
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
            IpQueryService::fromString(self::VALID_IP)
        );
    }

    public function testCannotBeCreatedFromInvalidEmailAddress(): void
    {
        $this->expectException(InvalidArgumentException::class);

        IpQueryService::fromString(self::INVALID_IP);
    }

    public function testCanBeUsedAsString(): void
    {
        $this->assertEquals(
            'localization',
            IpQueryService::fromString(self::VALID_IP)
        );
    }
}