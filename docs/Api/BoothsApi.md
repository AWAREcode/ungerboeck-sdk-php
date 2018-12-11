# FomF\Ungerboeck\Client\BoothsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**boothsGetBooths**](BoothsApi.md#boothsGetBooths) | **GET** /api/v1/Booths/{OrgCode}/{SequenceNumber} | Get a booth by its parameters
[**boothsGetBoothsList**](BoothsApi.md#boothsGetBoothsList) | **GET** /api/v1/Booths/{OrgCode} | Search for booth using OData.


# **boothsGetBooths**
> \FomF\Ungerboeck\Client\Model\BoothsModel boothsGetBooths($org_code, $sequence_number)

Get a booth by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\BoothsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the booth.
$sequence_number = 56; // int | The sequence number of the booth.

try {
    $result = $apiInstance->boothsGetBooths($org_code, $sequence_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoothsApi->boothsGetBooths: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the booth. |
 **sequence_number** | **int**| The sequence number of the booth. |

### Return type

[**\FomF\Ungerboeck\Client\Model\BoothsModel**](../Model/BoothsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **boothsGetBoothsList**
> \FomF\Ungerboeck\Client\Model\BoothsModel[] boothsGetBoothsList($org_code, $search)

Search for booth using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\BoothsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | Search string using OData with model properties for the filter, Page and Page_Size to navigate

try {
    $result = $apiInstance->boothsGetBoothsList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoothsApi->boothsGetBoothsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| Search string using OData with model properties for the filter, Page and Page_Size to navigate |

### Return type

[**\FomF\Ungerboeck\Client\Model\BoothsModel[]**](../Model/BoothsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

