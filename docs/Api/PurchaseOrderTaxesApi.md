# FomF\Ungerboeck\Client\PurchaseOrderTaxesApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**purchaseOrderTaxesGetPurchaseOrderTax**](PurchaseOrderTaxesApi.md#purchaseOrderTaxesGetPurchaseOrderTax) | **GET** /api/v1/PurchaseOrderTaxes/{OrgCode}/{Number}/{ItemSequence}/{Sequence} | Standard - Retrieve a PurchaseOrderTax record
[**purchaseOrderTaxesGetPurchaseOrderTaxList**](PurchaseOrderTaxesApi.md#purchaseOrderTaxesGetPurchaseOrderTaxList) | **GET** /api/v1/PurchaseOrderTaxes/{OrgCode} | Standard - Search for PurchaseOrderTaxes using OData.


# **purchaseOrderTaxesGetPurchaseOrderTax**
> \FomF\Ungerboeck\Client\Model\PurchaseOrderTaxesModel purchaseOrderTaxesGetPurchaseOrderTax($org_code, $number, $item_sequence, $sequence)

Standard - Retrieve a PurchaseOrderTax record

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\PurchaseOrderTaxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the PurchaseOrderTax entry.
$number = 56; // int | The purchase order number of the PurchaseOrderTax entry.
$item_sequence = 56; // int | The item line number of the PurchaseOrderTax entry.
$sequence = 56; // int | The sequence number of the PurchaseOrderTax entry.

try {
    $result = $apiInstance->purchaseOrderTaxesGetPurchaseOrderTax($org_code, $number, $item_sequence, $sequence);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrderTaxesApi->purchaseOrderTaxesGetPurchaseOrderTax: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the PurchaseOrderTax entry. |
 **number** | **int**| The purchase order number of the PurchaseOrderTax entry. |
 **item_sequence** | **int**| The item line number of the PurchaseOrderTax entry. |
 **sequence** | **int**| The sequence number of the PurchaseOrderTax entry. |

### Return type

[**\FomF\Ungerboeck\Client\Model\PurchaseOrderTaxesModel**](../Model/PurchaseOrderTaxesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **purchaseOrderTaxesGetPurchaseOrderTaxList**
> \FomF\Ungerboeck\Client\Model\PurchaseOrderTaxesModel purchaseOrderTaxesGetPurchaseOrderTaxList($org_code, $search)

Standard - Search for PurchaseOrderTaxes using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\PurchaseOrderTaxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->purchaseOrderTaxesGetPurchaseOrderTaxList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrderTaxesApi->purchaseOrderTaxesGetPurchaseOrderTaxList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\PurchaseOrderTaxesModel**](../Model/PurchaseOrderTaxesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

