# FomF\Ungerboeck\Client\PurchaseOrderDistributionsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**purchaseOrderDistributionsGetPurchaseOrderDistribution**](PurchaseOrderDistributionsApi.md#purchaseOrderDistributionsGetPurchaseOrderDistribution) | **GET** /api/v1/PurchaseOrderDistribution/{OrgCode}/{Number}/{Sequence}/{Line} | Standard - Get a purchase order distribution by its parameters
[**purchaseOrderDistributionsGetPurchaseOrderDistributionList**](PurchaseOrderDistributionsApi.md#purchaseOrderDistributionsGetPurchaseOrderDistributionList) | **GET** /api/v1/PurchaseOrderDistribution/{OrgCode} | Standard - Search for purchase order distributions using OData.


# **purchaseOrderDistributionsGetPurchaseOrderDistribution**
> \FomF\Ungerboeck\Client\Model\PurchaseOrderDistributionsModel purchaseOrderDistributionsGetPurchaseOrderDistribution($org_code, $number, $sequence, $line)

Standard - Get a purchase order distribution by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\PurchaseOrderDistributionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of purchase order distribution.
$number = 56; // int | The order number of purchase order distribution
$sequence = 56; // int | The sequence number of purchase order distribution
$line = 56; // int | The order line of the order item.

try {
    $result = $apiInstance->purchaseOrderDistributionsGetPurchaseOrderDistribution($org_code, $number, $sequence, $line);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrderDistributionsApi->purchaseOrderDistributionsGetPurchaseOrderDistribution: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of purchase order distribution. |
 **number** | **int**| The order number of purchase order distribution |
 **sequence** | **int**| The sequence number of purchase order distribution |
 **line** | **int**| The order line of the order item. |

### Return type

[**\FomF\Ungerboeck\Client\Model\PurchaseOrderDistributionsModel**](../Model/PurchaseOrderDistributionsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **purchaseOrderDistributionsGetPurchaseOrderDistributionList**
> \FomF\Ungerboeck\Client\Model\PurchaseOrderDistributionsModel purchaseOrderDistributionsGetPurchaseOrderDistributionList($org_code, $search)

Standard - Search for purchase order distributions using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\PurchaseOrderDistributionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | Search string using OData with model properties for the filter, Page and Page_Size to navigate

try {
    $result = $apiInstance->purchaseOrderDistributionsGetPurchaseOrderDistributionList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrderDistributionsApi->purchaseOrderDistributionsGetPurchaseOrderDistributionList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| Search string using OData with model properties for the filter, Page and Page_Size to navigate |

### Return type

[**\FomF\Ungerboeck\Client\Model\PurchaseOrderDistributionsModel**](../Model/PurchaseOrderDistributionsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

