# FomF\Ungerboeck\Client\RequisitionsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**requisitionsGetRequisitions**](RequisitionsApi.md#requisitionsGetRequisitions) | **GET** /api/v1/Requisitions/{OrgCode}/{Number} | Get a requisition by its parameters
[**requisitionsGetRequisitionsList**](RequisitionsApi.md#requisitionsGetRequisitionsList) | **GET** /api/v1/Requisitions/{OrgCode} | Search for requisitions using OData.


# **requisitionsGetRequisitions**
> \FomF\Ungerboeck\Client\Model\RequisitionsModel requisitionsGetRequisitions($org_code, $number)

Get a requisition by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\RequisitionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the requisition.
$number = 56; // int | The number of the requisition it is associated with.

try {
    $result = $apiInstance->requisitionsGetRequisitions($org_code, $number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RequisitionsApi->requisitionsGetRequisitions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the requisition. |
 **number** | **int**| The number of the requisition it is associated with. |

### Return type

[**\FomF\Ungerboeck\Client\Model\RequisitionsModel**](../Model/RequisitionsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **requisitionsGetRequisitionsList**
> \FomF\Ungerboeck\Client\Model\RequisitionsModel[] requisitionsGetRequisitionsList($org_code, $search)

Search for requisitions using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\RequisitionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | Search string using OData with model properties for the filter, Page and Page_Size to navigate

try {
    $result = $apiInstance->requisitionsGetRequisitionsList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RequisitionsApi->requisitionsGetRequisitionsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| Search string using OData with model properties for the filter, Page and Page_Size to navigate |

### Return type

[**\FomF\Ungerboeck\Client\Model\RequisitionsModel[]**](../Model/RequisitionsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

