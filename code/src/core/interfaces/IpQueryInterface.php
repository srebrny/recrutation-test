<?php

namespace IpCore\Interfaces;

interface IpQueryInterface
{
    public function __construct(string $ipAddress);
    public function __toString();
}