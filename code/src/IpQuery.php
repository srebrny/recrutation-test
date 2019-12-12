<?php


namespace IpQuery;

use IpCore\Interfaces\IpQueryInterface;

class IpQuery implements IpQueryInterface
{
    private $ip = "";

    public function __construct(string $ipAddress)
    {
        if (!filter_var($ipAddress, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4 | FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE)) {
            throw new \InvalidArgumentException("$ipAddress isn't valid ip address or it's in private range.");
        }
        $this->ip = $ipAddress;
    }

    public function __toString(): string
    {
        return "localization";
    }
}