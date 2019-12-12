<?php


namespace IpQuery;


class IpQueryService
{
    public static function fromString(string $ipAddress): IpQuery
    {
        return new IpQuery($ipAddress);
    }
}