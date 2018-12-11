# FomF\Ungerboeck\Client\RelationshipTypesApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**relationshipTypesGetRelationshipTypes**](RelationshipTypesApi.md#relationshipTypesGetRelationshipTypes) | **GET** /api/v1/RelationshipTypes/{OrgCode}/{Code} | Get an relationship type by its parameters
[**relationshipTypesGetRelationshipTypesList**](RelationshipTypesApi.md#relationshipTypesGetRelationshipTypesList) | **GET** /api/v1/RelationshipTypes/{OrgCode} | Search for relationship type using OData.


# **relationshipTypesGetRelationshipTypes**
> \FomF\Ungerboeck\Client\Model\RelationshipTypesModel relationshipTypesGetRelationshipTypes($org_code, $code)

Get an relationship type by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\RelationshipTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the relationship type.
$code = "code_example"; // string | The code of the relationship type.

try {
    $result = $apiInstance->relationshipTypesGetRelationshipTypes($org_code, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RelationshipTypesApi->relationshipTypesGetRelationshipTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the relationship type. |
 **code** | **string**| The code of the relationship type. |

### Return type

[**\FomF\Ungerboeck\Client\Model\RelationshipTypesModel**](../Model/RelationshipTypesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **relationshipTypesGetRelationshipTypesList**
> \FomF\Ungerboeck\Client\Model\RelationshipTypesModel[] relationshipTypesGetRelationshipTypesList($org_code, $search)

Search for relationship type using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\RelationshipTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | Search string using OData with model properties for the filter, Page and Page_Size to navigate

try {
    $result = $apiInstance->relationshipTypesGetRelationshipTypesList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RelationshipTypesApi->relationshipTypesGetRelationshipTypesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| Search string using OData with model properties for the filter, Page and Page_Size to navigate |

### Return type

[**\FomF\Ungerboeck\Client\Model\RelationshipTypesModel[]**](../Model/RelationshipTypesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

