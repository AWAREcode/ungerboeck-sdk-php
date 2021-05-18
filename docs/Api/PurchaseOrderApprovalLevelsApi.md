# FomF\Ungerboeck\Client\PurchaseOrderApprovalLevelsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**purchaseOrderApprovalLevelsGetPurchaseOrderApprovalLevel**](PurchaseOrderApprovalLevelsApi.md#purchaseOrderApprovalLevelsGetPurchaseOrderApprovalLevel) | **GET** /api/v1/PurchaseOrderApprovalLevels/{OrgCode}/{Type}/{ApprovalLevel} | Standard - Get a purchase order approval level by its parameters
[**purchaseOrderApprovalLevelsGetPurchaseOrderApprovalLevelList**](PurchaseOrderApprovalLevelsApi.md#purchaseOrderApprovalLevelsGetPurchaseOrderApprovalLevelList) | **GET** /api/v1/PurchaseOrderApprovalLevels/{OrgCode} | Standard - Search for purchase order approval levels using OData.


# **purchaseOrderApprovalLevelsGetPurchaseOrderApprovalLevel**
> \FomF\Ungerboeck\Client\Model\PurchaseOrderApprovalLevelsModel purchaseOrderApprovalLevelsGetPurchaseOrderApprovalLevel($org_code, $type, $approval_level)

Standard - Get a purchase order approval level by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\PurchaseOrderApprovalLevelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the purchase order approval level.
$type = "type_example"; // string | The approval type of the purchase order approval level entry.
$approval_level = 56; // int | The approval level of the purchase order approval level entry.

try {
    $result = $apiInstance->purchaseOrderApprovalLevelsGetPurchaseOrderApprovalLevel($org_code, $type, $approval_level);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrderApprovalLevelsApi->purchaseOrderApprovalLevelsGetPurchaseOrderApprovalLevel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the purchase order approval level. |
 **type** | **string**| The approval type of the purchase order approval level entry. |
 **approval_level** | **int**| The approval level of the purchase order approval level entry. |

### Return type

[**\FomF\Ungerboeck\Client\Model\PurchaseOrderApprovalLevelsModel**](../Model/PurchaseOrderApprovalLevelsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **purchaseOrderApprovalLevelsGetPurchaseOrderApprovalLevelList**
> \FomF\Ungerboeck\Client\Model\PurchaseOrderApprovalLevelsModel purchaseOrderApprovalLevelsGetPurchaseOrderApprovalLevelList($org_code, $search)

Standard - Search for purchase order approval levels using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\PurchaseOrderApprovalLevelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | Search string using OData with model properties for the filter, Page and Page_Size to navigate

try {
    $result = $apiInstance->purchaseOrderApprovalLevelsGetPurchaseOrderApprovalLevelList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrderApprovalLevelsApi->purchaseOrderApprovalLevelsGetPurchaseOrderApprovalLevelList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| Search string using OData with model properties for the filter, Page and Page_Size to navigate |

### Return type

[**\FomF\Ungerboeck\Client\Model\PurchaseOrderApprovalLevelsModel**](../Model/PurchaseOrderApprovalLevelsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

