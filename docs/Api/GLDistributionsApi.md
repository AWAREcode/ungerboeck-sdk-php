# FomF\Ungerboeck\Client\GLDistributionsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**gLDistributionsGetGLDistribution**](GLDistributionsApi.md#gLDistributionsGetGLDistribution) | **GET** /api/v1/GLDistributions/{OrgCode}/{RecordType}/{SequenceNumber} | Standard - Get GLDistribution by its parameters
[**gLDistributionsGetGLDistributionList**](GLDistributionsApi.md#gLDistributionsGetGLDistributionList) | **GET** /api/v1/GLDistributions/{OrgCode} | Standard - Search for GLDistributions using OData.


# **gLDistributionsGetGLDistribution**
> \FomF\Ungerboeck\Client\Model\GLDistributionsModel gLDistributionsGetGLDistribution($org_code, $record_type, $sequence_number)

Standard - Get GLDistribution by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\GLDistributionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the GLDistribution.
$record_type = "record_type_example"; // string | The Record Type code of the GLDistribution.
$sequence_number = 56; // int | The Sequence Number of the GLDistribution are associated with.

try {
    $result = $apiInstance->gLDistributionsGetGLDistribution($org_code, $record_type, $sequence_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GLDistributionsApi->gLDistributionsGetGLDistribution: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the GLDistribution. |
 **record_type** | **string**| The Record Type code of the GLDistribution. |
 **sequence_number** | **int**| The Sequence Number of the GLDistribution are associated with. |

### Return type

[**\FomF\Ungerboeck\Client\Model\GLDistributionsModel**](../Model/GLDistributionsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **gLDistributionsGetGLDistributionList**
> \FomF\Ungerboeck\Client\Model\GLDistributionsModel gLDistributionsGetGLDistributionList($org_code, $search)

Standard - Search for GLDistributions using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\GLDistributionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->gLDistributionsGetGLDistributionList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GLDistributionsApi->gLDistributionsGetGLDistributionList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\GLDistributionsModel**](../Model/GLDistributionsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

