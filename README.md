# OpenAPIClient-php

This is the contract for Vies on-the-Web endpoints. The checkVat service supports exact and approximate matching at the same time. In order to retrieve the requestIdentifier, the information about requesterMemberStateCode and requesterNumber have to be provided.

## Installation

### Requirements

- PHP 8.1+.

### Composer

```sh
composer require conedevelopment/vies-php
```

Then run `composer install`

## Usage

```php
use Cone\Vies\Client;
use Cone\Vies\Model\CheckVatRequest;
use Throwable;

$client = new Client;

try {
    $response = $client->api()->checkVatNumber(new CheckVatRequest([
        'countryCode' => 'HU',
        'vatNumber' => '12345678',
    ]));

    // Handle response
} catch (Throwable $e) {
    // Handle exception, report to Sentry etc...
}
```

## API Endpoints

All URIs are relative to *https://ec.europa.eu/taxation_customs/vies/rest-api*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*PublicApi* | [**checkStatus**](docs/Api/PublicApi.md#checkstatus) | **GET** /check-status | Check the status of each member states
*PublicApi* | [**checkVatNumber**](docs/Api/PublicApi.md#checkvatnumber) | **POST** /check-vat-number | Check a Vat Number for a specific country
*PublicApi* | [**checkVatTestService**](docs/Api/PublicApi.md#checkvattestservice) | **POST** /check-vat-test-service | Test the check vat service

## Models

- [CheckVatRequest](docs/Model/CheckVatRequest.md)
- [CheckVatResponse](docs/Model/CheckVatResponse.md)
- [CommonResponse](docs/Model/CommonResponse.md)
- [CountryStatus](docs/Model/CountryStatus.md)
- [ErrorWrapper](docs/Model/ErrorWrapper.md)
- [Status](docs/Model/Status.md)
- [StatusInformationResponse](docs/Model/StatusInformationResponse.md)
- [StatusInformationResponseVow](docs/Model/StatusInformationResponseVow.md)
