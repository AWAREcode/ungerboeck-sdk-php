# FomF\Ungerboeck\Client\PurchaseOrderUserApprovalsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**purchaseOrderUserApprovalsGetPurchaseOrderUserApproval**](PurchaseOrderUserApprovalsApi.md#purchaseOrderUserApprovalsGetPurchaseOrderUserApproval) | **GET** /api/v1/PurchaseOrderUserApprovals/{OrgCode}/{Sequence} | Standard - Get a purchase order user approval by its parameters
[**purchaseOrderUserApprovalsGetPurchaseOrderUserApprovalList**](PurchaseOrderUserApprovalsApi.md#purchaseOrderUserApprovalsGetPurchaseOrderUserApprovalList) | **GET** /api/v1/PurchaseOrderUserApprovals/{OrgCode} | Standard - Search for purchase order user approvals using OData.


# **purchaseOrderUserApprovalsGetPurchaseOrderUserApproval**
> \FomF\Ungerboeck\Client\Model\PurchaseOrderUserApprovalsModel purchaseOrderUserApprovalsGetPurchaseOrderUserApproval($org_code, $sequence)

Standard - Get a purchase order user approval by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\PurchaseOrderUserApprovalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the purchase order user approval.
$sequence = 56; // int | The sequence number of the purchase order user approval entry.

try {
    $result = $apiInstance->purchaseOrderUserApprovalsGetPurchaseOrderUserApproval($org_code, $sequence);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrderUserApprovalsApi->purchaseOrderUserApprovalsGetPurchaseOrderUserApproval: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the purchase order user approval. |
 **sequence** | **int**| The sequence number of the purchase order user approval entry. |

### Return type

[**\FomF\Ungerboeck\Client\Model\PurchaseOrderUserApprovalsModel**](../Model/PurchaseOrderUserApprovalsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **purchaseOrderUserApprovalsGetPurchaseOrderUserApprovalList**
> \FomF\Ungerboeck\Client\Model\PurchaseOrderUserApprovalsModel purchaseOrderUserApprovalsGetPurchaseOrderUserApprovalList($org_code, $search)

Standard - Search for purchase order user approvals using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\PurchaseOrderUserApprovalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | Search string using OData with model properties for the filter, Page and Page_Size to navigate

try {
    $result = $apiInstance->purchaseOrderUserApprovalsGetPurchaseOrderUserApprovalList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrderUserApprovalsApi->purchaseOrderUserApprovalsGetPurchaseOrderUserApprovalList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| Search string using OData with model properties for the filter, Page and Page_Size to navigate |

### Return type

[**\FomF\Ungerboeck\Client\Model\PurchaseOrderUserApprovalsModel**](../Model/PurchaseOrderUserApprovalsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

