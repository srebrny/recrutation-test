<?php


namespace IpQuery\Response;

use IpCore\Interfaces\IpQueryResponseInterface;

class IpQueryResponse implements IpQueryResponseInterface
{
    private string $query = "";
    private string $status = "";
    private string $continent = "";
    private string $continentCode = "";
    private string $country = "";
    private string $countryCode = "";
    private string $region = "";
    private string $regionName = "";
    private string $city = "";
    private string $district = "";
    private string $zip = "";
    private string $lat = "";
    private string $lon = "";
    private string $timezone = "";
    private string $currency = "";
    private string $isp = "";
    private string $org = "";
    private string $as = "";
    private string $asName = "";
    private bool $mobile = false;
    private bool $proxy = false;

    public function __construct(
        string $query,
        string $status,
        string $continent,
        string $continentCode,
        string $country,
        string $countryCode,
        string $region,
        string $regionName,
        string $city,
        string $district,
        string $zip,
        string $lat,
        string $lon,
        string $timezone,
        string $currency,
        string $isp,
        string $org,
        string $as,
        string $asName,
        bool $mobile,
        bool $proxy
    )
    {
        $this->query = $query;
        $this->status = $status;
        $this->continent = $continent;
        $this->continentCode = $continentCode;
        $this->country = $country;
        $this->countryCode = $countryCode;
        $this->region = $region;
        $this->regionName = $regionName;
        $this->city = $city;
        $this->district = $district;
        $this->zip = $zip;
        $this->lat = $lat;
        $this->lon = $lon;
        $this->timezone = $timezone;
        $this->currency = $currency;
        $this->isp = $isp;
        $this->org = $org;
        $this->as = $as;
        $this->asName = $asName;
        $this->mobile = $mobile;
        $this->proxy = $proxy;
    }

    public static function fromString(string $jsonResponse): IpQueryResponse
    {
        $obj = json_decode($jsonResponse);

        var_dump($obj);
        return new IpQueryResponse(
            $obj->query,
            $obj->status,
            $obj->continent,
            $obj->continentCod,
            $obj->country,
            $obj->countryCod,
            $obj->region,
            $obj->regionNam,
            $obj->city,
            $obj->district,
            $obj->zip,
            $obj->lat,
            $obj->lon,
            $obj->timezone,
            $obj->currency,
            $obj->isp,
            $obj->org,
            $obj->as,
            $obj->asname,
            $obj->mobile,
            $obj->proxy
        );
    }

    public function __toString()
    {
        return json_encode(
            [
                'query' => $this->query,
                'status' => $this->status,
                'continent' => $this->continent,
                'continentCode' => $this->continentCode,
                'country' => $this->country,
                'countryCode' => $this->countryCode,
                'region' => $this->region,
                'regionName' => $this->regionName,
                'city' => $this->city,
                'district' => $this->district,
                'zip' => $this->zip,
                'lat' => $this->lat,
                'lon' => $this->lon,
                'timezone' => $this->timezone,
                'currency' => $this->currency,
                'isp' => $this->isp,
                'org' => $this->org,
                'as' => $this->as,
                'asname' => $this->asName,
                'mobile' => $this->mobile,
                'proxy' => $this->proxy
            ],
            JSON_PRETTY_PRINT
        );
    }

}