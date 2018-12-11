# FomF\Ungerboeck\Client\EventProductsAndServicesApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**eventProductsAndServicesGetEventProductsAndServices**](EventProductsAndServicesApi.md#eventProductsAndServicesGetEventProductsAndServices) | **GET** /api/v1/EventProductsAndServices/{OrgCode}/{SequenceNumber} | Get an event product and service by its parameters
[**eventProductsAndServicesGetEventProductsAndServicesList**](EventProductsAndServicesApi.md#eventProductsAndServicesGetEventProductsAndServicesList) | **GET** /api/v1/EventProductsAndServices/{OrgCode} | Search for event products and services using OData.


# **eventProductsAndServicesGetEventProductsAndServices**
> \FomF\Ungerboeck\Client\Model\EventProductsAndServicesModel eventProductsAndServicesGetEventProductsAndServices($org_code, $sequence_number)

Get an event product and service by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\EventProductsAndServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the event product and service.
$sequence_number = 56; // int | The sequence number of the event product and service.

try {
    $result = $apiInstance->eventProductsAndServicesGetEventProductsAndServices($org_code, $sequence_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventProductsAndServicesApi->eventProductsAndServicesGetEventProductsAndServices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the event product and service. |
 **sequence_number** | **int**| The sequence number of the event product and service. |

### Return type

[**\FomF\Ungerboeck\Client\Model\EventProductsAndServicesModel**](../Model/EventProductsAndServicesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **eventProductsAndServicesGetEventProductsAndServicesList**
> \FomF\Ungerboeck\Client\Model\EventProductsAndServicesModel[] eventProductsAndServicesGetEventProductsAndServicesList($org_code, $search)

Search for event products and services using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\EventProductsAndServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | Search string using OData with model properties for the filter, Page and Page_Size to navigate

try {
    $result = $apiInstance->eventProductsAndServicesGetEventProductsAndServicesList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventProductsAndServicesApi->eventProductsAndServicesGetEventProductsAndServicesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| Search string using OData with model properties for the filter, Page and Page_Size to navigate |

### Return type

[**\FomF\Ungerboeck\Client\Model\EventProductsAndServicesModel[]**](../Model/EventProductsAndServicesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

