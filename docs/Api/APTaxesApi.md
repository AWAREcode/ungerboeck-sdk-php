# FomF\Ungerboeck\Client\APTaxesApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**aPTaxesGetAPTax**](APTaxesApi.md#aPTaxesGetAPTax) | **GET** /api/v1/APTaxes/{OrgCode}/{SupplierAccountCode}/{SequenceNumber} | Standard - Get an ap tax by its parameters
[**aPTaxesGetAPTaxList**](APTaxesApi.md#aPTaxesGetAPTaxList) | **GET** /api/v1/APTaxes/{OrgCode} | Standard - Search for ap taxes using OData.


# **aPTaxesGetAPTax**
> \FomF\Ungerboeck\Client\Model\APTaxesModel aPTaxesGetAPTax($org_code, $supplier_account_code, $sequence_number)

Standard - Get an ap tax by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\APTaxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the ap tax.
$supplier_account_code = "supplier_account_code_example"; // string | The supplier account code of the ap tax entry.
$sequence_number = 56; // int | The sequence number of the ap tax entry.

try {
    $result = $apiInstance->aPTaxesGetAPTax($org_code, $supplier_account_code, $sequence_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APTaxesApi->aPTaxesGetAPTax: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the ap tax. |
 **supplier_account_code** | **string**| The supplier account code of the ap tax entry. |
 **sequence_number** | **int**| The sequence number of the ap tax entry. |

### Return type

[**\FomF\Ungerboeck\Client\Model\APTaxesModel**](../Model/APTaxesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **aPTaxesGetAPTaxList**
> \FomF\Ungerboeck\Client\Model\APTaxesModel aPTaxesGetAPTaxList($org_code, $search)

Standard - Search for ap taxes using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\APTaxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | Search string using OData with model properties for the filter, Page and Page_Size to navigate

try {
    $result = $apiInstance->aPTaxesGetAPTaxList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APTaxesApi->aPTaxesGetAPTaxList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| Search string using OData with model properties for the filter, Page and Page_Size to navigate |

### Return type

[**\FomF\Ungerboeck\Client\Model\APTaxesModel**](../Model/APTaxesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

