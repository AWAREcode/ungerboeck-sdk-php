# FomF\Ungerboeck\Client\RequisitionItemsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**requisitionItemsGetRequisitionItems**](RequisitionItemsApi.md#requisitionItemsGetRequisitionItems) | **GET** /api/v1/RequisitionItems/{OrgCode}/{Number}/{Sequence} | Get a requisition item by its parameters
[**requisitionItemsGetRequisitionItemsList**](RequisitionItemsApi.md#requisitionItemsGetRequisitionItemsList) | **GET** /api/v1/RequisitionItems/{OrgCode} | Search for requisition item using OData.


# **requisitionItemsGetRequisitionItems**
> \FomF\Ungerboeck\Client\Model\RequisitionItemsModel requisitionItemsGetRequisitionItems($org_code, $number, $sequence)

Get a requisition item by its parameters

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
    $result = $apiInstance->requisitionItemsGetRequisitionItems($org_code, $number, $sequence);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RequisitionItemsApi->requisitionItemsGetRequisitionItems: ', $e->getMessage(), PHP_EOL;
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

[**\FomF\Ungerboeck\Client\Model\RequisitionItemsModel**](../Model/RequisitionItemsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **requisitionItemsGetRequisitionItemsList**
> \FomF\Ungerboeck\Client\Model\RequisitionItemsModel[] requisitionItemsGetRequisitionItemsList($org_code, $search)

Search for requisition item using OData.

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
$search = "search_example"; // string | Search string using OData with model properties for the filter, Page and Page_Size to navigate

try {
    $result = $apiInstance->requisitionItemsGetRequisitionItemsList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RequisitionItemsApi->requisitionItemsGetRequisitionItemsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| Search string using OData with model properties for the filter, Page and Page_Size to navigate |

### Return type

[**\FomF\Ungerboeck\Client\Model\RequisitionItemsModel[]**](../Model/RequisitionItemsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

