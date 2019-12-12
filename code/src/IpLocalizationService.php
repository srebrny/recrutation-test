<?php


namespace IpQuery;


class IpLocalizationService
{
    public static function fromString(string $ipAddress): IpQuery
    {
        return new IpQuery($ipAddress);
    }
}