# FomF\Ungerboeck\Client\RequisitionTaxesApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**requisitionTaxesGetRequisitionTax**](RequisitionTaxesApi.md#requisitionTaxesGetRequisitionTax) | **GET** /api/v1/RequisitionTaxes/{OrgCode}/{Number}/{Line}/{Sequence} | Basic - Retrieve a RequisitionTax record
[**requisitionTaxesGetRequisitionTaxList**](RequisitionTaxesApi.md#requisitionTaxesGetRequisitionTaxList) | **GET** /api/v1/RequisitionTaxes/{OrgCode} | Basic - Search for RequisitionTaxes using OData.


# **requisitionTaxesGetRequisitionTax**
> \FomF\Ungerboeck\Client\Model\RequisitionTaxesModel requisitionTaxesGetRequisitionTax($org_code, $number, $line, $sequence)

Basic - Retrieve a RequisitionTax record

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\RequisitionTaxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the RequisitionTax entry.
$number = 56; // int | The requisition number of the RequisitionTax entry.
$line = 56; // int | The requisition line number of the RequisitionTax entry.
$sequence = 56; // int | The sequence number of the RequisitionTax entry.

try {
    $result = $apiInstance->requisitionTaxesGetRequisitionTax($org_code, $number, $line, $sequence);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RequisitionTaxesApi->requisitionTaxesGetRequisitionTax: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the RequisitionTax entry. |
 **number** | **int**| The requisition number of the RequisitionTax entry. |
 **line** | **int**| The requisition line number of the RequisitionTax entry. |
 **sequence** | **int**| The sequence number of the RequisitionTax entry. |

### Return type

[**\FomF\Ungerboeck\Client\Model\RequisitionTaxesModel**](../Model/RequisitionTaxesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **requisitionTaxesGetRequisitionTaxList**
> \FomF\Ungerboeck\Client\Model\RequisitionTaxesModel requisitionTaxesGetRequisitionTaxList($org_code, $search)

Basic - Search for RequisitionTaxes using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\RequisitionTaxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->requisitionTaxesGetRequisitionTaxList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RequisitionTaxesApi->requisitionTaxesGetRequisitionTaxList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\RequisitionTaxesModel**](../Model/RequisitionTaxesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

