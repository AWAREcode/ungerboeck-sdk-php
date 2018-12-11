# FomF\Ungerboeck\Client\RequisitionApprovalApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**requisitionApprovalGetRequisitionApproval**](RequisitionApprovalApi.md#requisitionApprovalGetRequisitionApproval) | **GET** /api/v1/RequisitionApproval/{OrgCode}/{Number}/{Line}/{Sequence} | Get a requisition approval by its parameters
[**requisitionApprovalGetRequisitionApprovalList**](RequisitionApprovalApi.md#requisitionApprovalGetRequisitionApprovalList) | **GET** /api/v1/RequisitionApproval/{OrgCode} | Search for requisition approval using OData.


# **requisitionApprovalGetRequisitionApproval**
> \FomF\Ungerboeck\Client\Model\RequisitionApprovalModel requisitionApprovalGetRequisitionApproval($org_code, $number, $line, $sequence)

Get a requisition approval by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\RequisitionApprovalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the requisition approval.
$number = 56; // int | The number of the requisition the approval is associated with.
$line = 56; // int | The line number of the requisition item the approval is associated with.
$sequence = 56; // int | The sequence of the requisition approval.

try {
    $result = $apiInstance->requisitionApprovalGetRequisitionApproval($org_code, $number, $line, $sequence);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RequisitionApprovalApi->requisitionApprovalGetRequisitionApproval: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the requisition approval. |
 **number** | **int**| The number of the requisition the approval is associated with. |
 **line** | **int**| The line number of the requisition item the approval is associated with. |
 **sequence** | **int**| The sequence of the requisition approval. |

### Return type

[**\FomF\Ungerboeck\Client\Model\RequisitionApprovalModel**](../Model/RequisitionApprovalModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **requisitionApprovalGetRequisitionApprovalList**
> \FomF\Ungerboeck\Client\Model\RequisitionApprovalModel[] requisitionApprovalGetRequisitionApprovalList($org_code, $search)

Search for requisition approval using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\RequisitionApprovalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | Search string using OData with model properties for the filter, Page and Page_Size to navigate

try {
    $result = $apiInstance->requisitionApprovalGetRequisitionApprovalList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RequisitionApprovalApi->requisitionApprovalGetRequisitionApprovalList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| Search string using OData with model properties for the filter, Page and Page_Size to navigate |

### Return type

[**\FomF\Ungerboeck\Client\Model\RequisitionApprovalModel[]**](../Model/RequisitionApprovalModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

