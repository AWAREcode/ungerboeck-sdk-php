# FomF\Ungerboeck\Client\ConcessionsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**concessionsGetConcessions**](ConcessionsApi.md#concessionsGetConcessions) | **GET** /api/v1/Concessions/{OrgCode}/{SequenceNumber} | Get a concession by its parameters
[**concessionsGetConcessionsList**](ConcessionsApi.md#concessionsGetConcessionsList) | **GET** /api/v1/Concessions/{OrgCode} | Search for concession using OData.


# **concessionsGetConcessions**
> \FomF\Ungerboeck\Client\Model\ConcessionsModel concessionsGetConcessions($org_code, $sequence_number)

Get a concession by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\ConcessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the concession.
$sequence_number = 56; // int | The sequence number of the concession.

try {
    $result = $apiInstance->concessionsGetConcessions($org_code, $sequence_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConcessionsApi->concessionsGetConcessions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the concession. |
 **sequence_number** | **int**| The sequence number of the concession. |

### Return type

[**\FomF\Ungerboeck\Client\Model\ConcessionsModel**](../Model/ConcessionsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **concessionsGetConcessionsList**
> \FomF\Ungerboeck\Client\Model\ConcessionsModel[] concessionsGetConcessionsList($org_code, $search)

Search for concession using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\ConcessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | Search string using OData with model properties for the filter, Page and Page_Size to navigate

try {
    $result = $apiInstance->concessionsGetConcessionsList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConcessionsApi->concessionsGetConcessionsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| Search string using OData with model properties for the filter, Page and Page_Size to navigate |

### Return type

[**\FomF\Ungerboeck\Client\Model\ConcessionsModel[]**](../Model/ConcessionsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

