# FomF\Ungerboeck\Client\CyclesApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cyclesGetCycle**](CyclesApi.md#cyclesGetCycle) | **GET** /api/v1/Cycles/{OrgCode}/{Code} | Standard - Get a single membership cycle by its parameters
[**cyclesGetCycleList**](CyclesApi.md#cyclesGetCycleList) | **GET** /api/v1/Cycles/{OrgCode} | Standard - Search for membership cycle using OData.


# **cyclesGetCycle**
> \FomF\Ungerboeck\Client\Model\CyclesModel cyclesGetCycle($org_code, $code)

Standard - Get a single membership cycle by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\CyclesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the membership cycle.
$code = "code_example"; // string | The code of the membership cycle.

try {
    $result = $apiInstance->cyclesGetCycle($org_code, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CyclesApi->cyclesGetCycle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the membership cycle. |
 **code** | **string**| The code of the membership cycle. |

### Return type

[**\FomF\Ungerboeck\Client\Model\CyclesModel**](../Model/CyclesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cyclesGetCycleList**
> \FomF\Ungerboeck\Client\Model\CyclesModel cyclesGetCycleList($org_code, $search)

Standard - Search for membership cycle using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\CyclesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->cyclesGetCycleList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CyclesApi->cyclesGetCycleList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\CyclesModel**](../Model/CyclesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

