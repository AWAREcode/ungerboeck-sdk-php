# FomF\Ungerboeck\Client\InventoryBalancesApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**inventoryBalancesGetInventoryBalance**](InventoryBalancesApi.md#inventoryBalancesGetInventoryBalance) | **GET** /api/v1/InventoryBalances/{OrgCode}/{Item}/{LotSerialNumber}/{Location}/{FiscalYear}/{FiscalPeriod} | Standard - Retrieve a InventoryBalance record
[**inventoryBalancesGetInventoryBalanceList**](InventoryBalancesApi.md#inventoryBalancesGetInventoryBalanceList) | **GET** /api/v1/InventoryBalances/{OrgCode} | Standard - Search for records.


# **inventoryBalancesGetInventoryBalance**
> \FomF\Ungerboeck\Client\Model\InventoryBalancesModel inventoryBalancesGetInventoryBalance($org_code, $item, $lot_serial_number, $location, $fiscal_year, $fiscal_period)

Standard - Retrieve a InventoryBalance record

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\InventoryBalancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the InventoryBalance entry.
$item = "item_example"; // string | The item code of the InventoryBalance entry.
$lot_serial_number = "lot_serial_number_example"; // string | The lot/serial number of item of the InventoryBalance entry.
$location = "location_example"; // string | The space code of space the item balance pertains to in the InventoryBalance entry.
$fiscal_year = 56; // int | The fiscal year of the InventoryBalance entry.
$fiscal_period = 56; // int | The fiscal period of the InventoryBalance entry.

try {
    $result = $apiInstance->inventoryBalancesGetInventoryBalance($org_code, $item, $lot_serial_number, $location, $fiscal_year, $fiscal_period);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryBalancesApi->inventoryBalancesGetInventoryBalance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the InventoryBalance entry. |
 **item** | **string**| The item code of the InventoryBalance entry. |
 **lot_serial_number** | **string**| The lot/serial number of item of the InventoryBalance entry. |
 **location** | **string**| The space code of space the item balance pertains to in the InventoryBalance entry. |
 **fiscal_year** | **int**| The fiscal year of the InventoryBalance entry. |
 **fiscal_period** | **int**| The fiscal period of the InventoryBalance entry. |

### Return type

[**\FomF\Ungerboeck\Client\Model\InventoryBalancesModel**](../Model/InventoryBalancesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryBalancesGetInventoryBalanceList**
> \FomF\Ungerboeck\Client\Model\InventoryBalancesModel inventoryBalancesGetInventoryBalanceList($org_code, $search)

Standard - Search for records.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\InventoryBalancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place, needed for user-defined fields
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->inventoryBalancesGetInventoryBalanceList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryBalancesApi->inventoryBalancesGetInventoryBalanceList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place, needed for user-defined fields |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\InventoryBalancesModel**](../Model/InventoryBalancesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

