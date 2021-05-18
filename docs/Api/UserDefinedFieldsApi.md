# FomF\Ungerboeck\Client\UserDefinedFieldsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**userDefinedFieldsGetUserDefinedField**](UserDefinedFieldsApi.md#userDefinedFieldsGetUserDefinedField) | **GET** /api/v1/UserDefinedFields/{OrgCode}/{IssueOpportunityClass}/{IssueOpportunityType}/{SequenceNumber} | Basic - Get a single user defined field entry by its parameters.  Note, this is referring to the metadata of the User Field itself, not the user field values stored on the various Ungerboeck areas.
[**userDefinedFieldsGetUserDefinedFieldList**](UserDefinedFieldsApi.md#userDefinedFieldsGetUserDefinedFieldList) | **GET** /api/v1/UserDefinedFields/{OrgCode} | Basic - Search for user defined field metadata using OData.  Note, this is referring to the metadata of the User Field itself, not the user field values stored on the various Ungerboeck areas.


# **userDefinedFieldsGetUserDefinedField**
> \FomF\Ungerboeck\Client\Model\UserDefinedFieldsModel userDefinedFieldsGetUserDefinedField($org_code, $issue_opportunity_class, $issue_opportunity_type, $sequence_number)

Basic - Get a single user defined field entry by its parameters.  Note, this is referring to the metadata of the User Field itself, not the user field values stored on the various Ungerboeck areas.

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
    $result = $apiInstance->userDefinedFieldsGetUserDefinedField($org_code, $issue_opportunity_class, $issue_opportunity_type, $sequence_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserDefinedFieldsApi->userDefinedFieldsGetUserDefinedField: ', $e->getMessage(), PHP_EOL;
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

# **userDefinedFieldsGetUserDefinedFieldList**
> \FomF\Ungerboeck\Client\Model\UserDefinedFieldsModel userDefinedFieldsGetUserDefinedFieldList($org_code, $search)

Basic - Search for user defined field metadata using OData.  Note, this is referring to the metadata of the User Field itself, not the user field values stored on the various Ungerboeck areas.

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
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->userDefinedFieldsGetUserDefinedFieldList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserDefinedFieldsApi->userDefinedFieldsGetUserDefinedFieldList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\UserDefinedFieldsModel**](../Model/UserDefinedFieldsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

