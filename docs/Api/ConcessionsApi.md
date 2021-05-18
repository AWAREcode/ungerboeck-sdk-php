# FomF\Ungerboeck\Client\ConcessionsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**concessionsGetConcession**](ConcessionsApi.md#concessionsGetConcession) | **GET** /api/v1/Concessions/{OrgCode}/{SequenceNumber} | Standard - Get a single concession by its parameters
[**concessionsGetConcessionList**](ConcessionsApi.md#concessionsGetConcessionList) | **GET** /api/v1/Concessions/{OrgCode} | Standard - Search for concession using OData.


# **concessionsGetConcession**
> \FomF\Ungerboeck\Client\Model\ConcessionsModel concessionsGetConcession($org_code, $sequence_number)

Standard - Get a single concession by its parameters

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
    $result = $apiInstance->concessionsGetConcession($org_code, $sequence_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConcessionsApi->concessionsGetConcession: ', $e->getMessage(), PHP_EOL;
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

# **concessionsGetConcessionList**
> \FomF\Ungerboeck\Client\Model\ConcessionsModel concessionsGetConcessionList($org_code, $search)

Standard - Search for concession using OData.

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
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->concessionsGetConcessionList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConcessionsApi->concessionsGetConcessionList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\ConcessionsModel**](../Model/ConcessionsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

