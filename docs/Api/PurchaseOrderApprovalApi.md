# FomF\Ungerboeck\Client\PurchaseOrderApprovalApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**purchaseOrderApprovalGetPurchaseOrderApproval**](PurchaseOrderApprovalApi.md#purchaseOrderApprovalGetPurchaseOrderApproval) | **GET** /api/v1/PurchaseOrderApproval/{OrgCode}/{Number}/{ItemSequence}/{Sequence} | Standard - Get a single purchase order approval by its parameters
[**purchaseOrderApprovalGetPurchaseOrderApprovalList**](PurchaseOrderApprovalApi.md#purchaseOrderApprovalGetPurchaseOrderApprovalList) | **GET** /api/v1/PurchaseOrderApproval/{OrgCode} | Standard - Search for purchase order approval using OData.
[**purchaseOrderApprovalPostPurchaseOrderApproval**](PurchaseOrderApprovalApi.md#purchaseOrderApprovalPostPurchaseOrderApproval) | **POST** /api/v1/PurchaseOrderApproval | Standard - Approve Purchase Order


# **purchaseOrderApprovalGetPurchaseOrderApproval**
> \FomF\Ungerboeck\Client\Model\PurchaseOrderApprovalModel purchaseOrderApprovalGetPurchaseOrderApproval($org_code, $number, $item_sequence, $sequence)

Standard - Get a single purchase order approval by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\PurchaseOrderApprovalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the purchase order approval.
$number = 56; // int | The number of the purchase order the approval is associated with.
$item_sequence = 56; // int | The line number of the purchase order item the approval is associated with.
$sequence = 56; // int | The sequence of the purchase order approval.

try {
    $result = $apiInstance->purchaseOrderApprovalGetPurchaseOrderApproval($org_code, $number, $item_sequence, $sequence);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrderApprovalApi->purchaseOrderApprovalGetPurchaseOrderApproval: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the purchase order approval. |
 **number** | **int**| The number of the purchase order the approval is associated with. |
 **item_sequence** | **int**| The line number of the purchase order item the approval is associated with. |
 **sequence** | **int**| The sequence of the purchase order approval. |

### Return type

[**\FomF\Ungerboeck\Client\Model\PurchaseOrderApprovalModel**](../Model/PurchaseOrderApprovalModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **purchaseOrderApprovalGetPurchaseOrderApprovalList**
> \FomF\Ungerboeck\Client\Model\PurchaseOrderApprovalModel purchaseOrderApprovalGetPurchaseOrderApprovalList($org_code, $search)

Standard - Search for purchase order approval using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\PurchaseOrderApprovalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->purchaseOrderApprovalGetPurchaseOrderApprovalList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrderApprovalApi->purchaseOrderApprovalGetPurchaseOrderApprovalList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\PurchaseOrderApprovalModel**](../Model/PurchaseOrderApprovalModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **purchaseOrderApprovalPostPurchaseOrderApproval**
> \FomF\Ungerboeck\Client\Model\PurchaseOrderApprovalModel purchaseOrderApprovalPostPurchaseOrderApproval($data)

Standard - Approve Purchase Order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\PurchaseOrderApprovalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data = new \FomF\Ungerboeck\Client\Model\PurchaseOrderApprovalModel(); // \FomF\Ungerboeck\Client\Model\PurchaseOrderApprovalModel | (Include in the HTTP Body) A PurchaseOrderApprovalModel entry to add.

try {
    $result = $apiInstance->purchaseOrderApprovalPostPurchaseOrderApproval($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrderApprovalApi->purchaseOrderApprovalPostPurchaseOrderApproval: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\FomF\Ungerboeck\Client\Model\PurchaseOrderApprovalModel**](../Model/PurchaseOrderApprovalModel.md)| (Include in the HTTP Body) A PurchaseOrderApprovalModel entry to add. |

### Return type

[**\FomF\Ungerboeck\Client\Model\PurchaseOrderApprovalModel**](../Model/PurchaseOrderApprovalModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

