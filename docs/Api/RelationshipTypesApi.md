# FomF\Ungerboeck\Client\RelationshipTypesApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**relationshipTypesGetRelationshipType**](RelationshipTypesApi.md#relationshipTypesGetRelationshipType) | **GET** /api/v1/RelationshipTypes/{OrgCode}/{Code} | Basic - Get a single relationship type by its parameters
[**relationshipTypesGetRelationshipTypeList**](RelationshipTypesApi.md#relationshipTypesGetRelationshipTypeList) | **GET** /api/v1/RelationshipTypes/{OrgCode} | Basic - Search for relationship type using OData.


# **relationshipTypesGetRelationshipType**
> \FomF\Ungerboeck\Client\Model\RelationshipTypesModel relationshipTypesGetRelationshipType($org_code, $code)

Basic - Get a single relationship type by its parameters

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
    $result = $apiInstance->relationshipTypesGetRelationshipType($org_code, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RelationshipTypesApi->relationshipTypesGetRelationshipType: ', $e->getMessage(), PHP_EOL;
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

# **relationshipTypesGetRelationshipTypeList**
> \FomF\Ungerboeck\Client\Model\RelationshipTypesModel relationshipTypesGetRelationshipTypeList($org_code, $search)

Basic - Search for relationship type using OData.

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
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->relationshipTypesGetRelationshipTypeList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RelationshipTypesApi->relationshipTypesGetRelationshipTypeList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\RelationshipTypesModel**](../Model/RelationshipTypesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

