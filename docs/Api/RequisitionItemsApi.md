# FomF\Ungerboeck\Client\RequisitionItemsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**requisitionItemsGetRequisitionItem**](RequisitionItemsApi.md#requisitionItemsGetRequisitionItem) | **GET** /api/v1/RequisitionItems/{OrgCode}/{Number}/{Sequence} | Standard - Get a single requisition item by its parameters
[**requisitionItemsGetRequisitionItemList**](RequisitionItemsApi.md#requisitionItemsGetRequisitionItemList) | **GET** /api/v1/RequisitionItems/{OrgCode} | Standard - Search for requisition item using OData.


# **requisitionItemsGetRequisitionItem**
> \FomF\Ungerboeck\Client\Model\RequisitionApprovalModel requisitionItemsGetRequisitionItem($org_code, $number, $sequence)

Standard - Get a single requisition item by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\RequisitionItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the requisition item.
$number = 56; // int | The number of the requisition the requisition item is associated with.
$sequence = 56; // int | The sequence of the requisition item.

try {
    $result = $apiInstance->requisitionItemsGetRequisitionItem($org_code, $number, $sequence);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RequisitionItemsApi->requisitionItemsGetRequisitionItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the requisition item. |
 **number** | **int**| The number of the requisition the requisition item is associated with. |
 **sequence** | **int**| The sequence of the requisition item. |

### Return type

[**\FomF\Ungerboeck\Client\Model\RequisitionApprovalModel**](../Model/RequisitionApprovalModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **requisitionItemsGetRequisitionItemList**
> \FomF\Ungerboeck\Client\Model\RequisitionItemsModel requisitionItemsGetRequisitionItemList($org_code, $search)

Standard - Search for requisition item using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\RequisitionItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->requisitionItemsGetRequisitionItemList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RequisitionItemsApi->requisitionItemsGetRequisitionItemList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\RequisitionItemsModel**](../Model/RequisitionItemsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

