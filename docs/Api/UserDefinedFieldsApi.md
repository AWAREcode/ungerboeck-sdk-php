# FomF\Ungerboeck\Client\UserDefinedFieldsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**userDefinedFieldsGetUserDefinedFields**](UserDefinedFieldsApi.md#userDefinedFieldsGetUserDefinedFields) | **GET** /api/v1/UserDefinedFields/{OrgCode}/{IssueOpportunityClass}/{IssueOpportunityType}/{SequenceNumber} | Get a user defined field by its parameters
[**userDefinedFieldsGetUserDefinedFieldsList**](UserDefinedFieldsApi.md#userDefinedFieldsGetUserDefinedFieldsList) | **GET** /api/v1/UserDefinedFields/{OrgCode} | Search for user defined field using OData.


# **userDefinedFieldsGetUserDefinedFields**
> \FomF\Ungerboeck\Client\Model\UserDefinedFieldsModel userDefinedFieldsGetUserDefinedFields($org_code, $issue_opportunity_class, $issue_opportunity_type, $sequence_number)

Get a user defined field by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\UserDefinedFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the user defined field.
$issue_opportunity_class = "issue_opportunity_class_example"; // string | The issue opportunity class of the user defined field.
$issue_opportunity_type = "issue_opportunity_type_example"; // string | The issue opportunity type of the user defined field.
$sequence_number = 56; // int | The sequence of the user defined field.

try {
    $result = $apiInstance->userDefinedFieldsGetUserDefinedFields($org_code, $issue_opportunity_class, $issue_opportunity_type, $sequence_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserDefinedFieldsApi->userDefinedFieldsGetUserDefinedFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the user defined field. |
 **issue_opportunity_class** | **string**| The issue opportunity class of the user defined field. |
 **issue_opportunity_type** | **string**| The issue opportunity type of the user defined field. |
 **sequence_number** | **int**| The sequence of the user defined field. |

### Return type

[**\FomF\Ungerboeck\Client\Model\UserDefinedFieldsModel**](../Model/UserDefinedFieldsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userDefinedFieldsGetUserDefinedFieldsList**
> \FomF\Ungerboeck\Client\Model\UserDefinedFieldsModel[] userDefinedFieldsGetUserDefinedFieldsList($org_code, $search)

Search for user defined field using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\UserDefinedFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | Search string using OData with model properties for the filter, Page and Page_Size to navigate

try {
    $result = $apiInstance->userDefinedFieldsGetUserDefinedFieldsList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserDefinedFieldsApi->userDefinedFieldsGetUserDefinedFieldsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| Search string using OData with model properties for the filter, Page and Page_Size to navigate |

### Return type

[**\FomF\Ungerboeck\Client\Model\UserDefinedFieldsModel[]**](../Model/UserDefinedFieldsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

