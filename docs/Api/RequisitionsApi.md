# FomF\Ungerboeck\Client\RequisitionsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**requisitionsGetRequisition**](RequisitionsApi.md#requisitionsGetRequisition) | **GET** /api/v1/Requisitions/{OrgCode}/{Number} | Standard - Get a single requisition by its parameters
[**requisitionsGetRequisitionList**](RequisitionsApi.md#requisitionsGetRequisitionList) | **GET** /api/v1/Requisitions/{OrgCode} | Standard - Search for requisitions using OData.


# **requisitionsGetRequisition**
> \FomF\Ungerboeck\Client\Model\RequisitionsModel requisitionsGetRequisition($org_code, $number)

Standard - Get a single requisition by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\RequisitionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the requisition.
$number = 56; // int | The number of the requisition it is associated with.

try {
    $result = $apiInstance->requisitionsGetRequisition($org_code, $number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RequisitionsApi->requisitionsGetRequisition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the requisition. |
 **number** | **int**| The number of the requisition it is associated with. |

### Return type

[**\FomF\Ungerboeck\Client\Model\RequisitionsModel**](../Model/RequisitionsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **requisitionsGetRequisitionList**
> \FomF\Ungerboeck\Client\Model\RequisitionsModel requisitionsGetRequisitionList($org_code, $search)

Standard - Search for requisitions using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\RequisitionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->requisitionsGetRequisitionList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RequisitionsApi->requisitionsGetRequisitionList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\RequisitionsModel**](../Model/RequisitionsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

