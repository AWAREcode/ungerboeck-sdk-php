# FomF\Ungerboeck\Client\RelationshipsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**relationshipsDeleteRelationship**](RelationshipsApi.md#relationshipsDeleteRelationship) | **DELETE** /api/v1/Relationships/{OrgCode}/{MasterAccountCode}/{SubordinateAccountCode}/{RelationshipType} | Standard - Delete a relationship between two accounts
[**relationshipsGetRelationship**](RelationshipsApi.md#relationshipsGetRelationship) | **GET** /api/v1/Relationships/{OrgCode}/{MasterAccountCode}/{SubordinateAccountCode}/{RelationshipType} | Basic - Get a single relationship entry connecting two accounts by its parameters
[**relationshipsGetRelationshipList**](RelationshipsApi.md#relationshipsGetRelationshipList) | **GET** /api/v1/Relationships/{OrgCode} | Basic - Search for account relationships using OData.
[**relationshipsPostRelationship**](RelationshipsApi.md#relationshipsPostRelationship) | **POST** /api/v1/Relationships | Standard - Add a relationship to tie two accounts together
[**relationshipsPutRelationship**](RelationshipsApi.md#relationshipsPutRelationship) | **PUT** /api/v1/Relationships/{OrgCode}/{MasterAccountCode}/{SubordinateAccountCode}/{RelationshipType} | Standard - Edit a relationship between two accounts


# **relationshipsDeleteRelationship**
> relationshipsDeleteRelationship($org_code, $master_account_code, $subordinate_account_code, $relationship_type)

Standard - Delete a relationship between two accounts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\RelationshipsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of both accounts (note: multi-organization relationships not supported on API).
$master_account_code = "master_account_code_example"; // string | The account code of the master account.
$subordinate_account_code = "subordinate_account_code_example"; // string | The account code of the subordinate account.
$relationship_type = "relationship_type_example"; // string | The type code of the relationship.

try {
    $apiInstance->relationshipsDeleteRelationship($org_code, $master_account_code, $subordinate_account_code, $relationship_type);
} catch (Exception $e) {
    echo 'Exception when calling RelationshipsApi->relationshipsDeleteRelationship: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of both accounts (note: multi-organization relationships not supported on API). |
 **master_account_code** | **string**| The account code of the master account. |
 **subordinate_account_code** | **string**| The account code of the subordinate account. |
 **relationship_type** | **string**| The type code of the relationship. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **relationshipsGetRelationship**
> \FomF\Ungerboeck\Client\Model\RelationshipsModel relationshipsGetRelationship($org_code, $master_account_code, $subordinate_account_code, $relationship_type)

Basic - Get a single relationship entry connecting two accounts by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\RelationshipsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of both accounts (note: multi-organization relationships not supported on API).
$master_account_code = "master_account_code_example"; // string | The account code of the master account.
$subordinate_account_code = "subordinate_account_code_example"; // string | The account code of the subordinate account.
$relationship_type = "relationship_type_example"; // string | The type code of the relationship.

try {
    $result = $apiInstance->relationshipsGetRelationship($org_code, $master_account_code, $subordinate_account_code, $relationship_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RelationshipsApi->relationshipsGetRelationship: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of both accounts (note: multi-organization relationships not supported on API). |
 **master_account_code** | **string**| The account code of the master account. |
 **subordinate_account_code** | **string**| The account code of the subordinate account. |
 **relationship_type** | **string**| The type code of the relationship. |

### Return type

[**\FomF\Ungerboeck\Client\Model\RelationshipsModel**](../Model/RelationshipsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **relationshipsGetRelationshipList**
> \FomF\Ungerboeck\Client\Model\RelationshipsModel relationshipsGetRelationshipList($org_code, $search)

Basic - Search for account relationships using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\RelationshipsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->relationshipsGetRelationshipList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RelationshipsApi->relationshipsGetRelationshipList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\RelationshipsModel**](../Model/RelationshipsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **relationshipsPostRelationship**
> \FomF\Ungerboeck\Client\Model\RelationshipsModel relationshipsPostRelationship($data)

Standard - Add a relationship to tie two accounts together

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\RelationshipsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data = new \FomF\Ungerboeck\Client\Model\RelationshipsModel(); // \FomF\Ungerboeck\Client\Model\RelationshipsModel | (Include in the HTTP Body) an RelationshipsModel to add.

try {
    $result = $apiInstance->relationshipsPostRelationship($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RelationshipsApi->relationshipsPostRelationship: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\FomF\Ungerboeck\Client\Model\RelationshipsModel**](../Model/RelationshipsModel.md)| (Include in the HTTP Body) an RelationshipsModel to add. |

### Return type

[**\FomF\Ungerboeck\Client\Model\RelationshipsModel**](../Model/RelationshipsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **relationshipsPutRelationship**
> \FomF\Ungerboeck\Client\Model\RelationshipsModel relationshipsPutRelationship($org_code, $master_account_code, $subordinate_account_code, $relationship_type, $data)

Standard - Edit a relationship between two accounts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\RelationshipsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of both accounts (note: multi-organization relationships not supported on API).
$master_account_code = "master_account_code_example"; // string | The account code of the master account.
$subordinate_account_code = "subordinate_account_code_example"; // string | The account code of the subordinate account.
$relationship_type = "relationship_type_example"; // string | The type code of the relationship.
$data = new \FomF\Ungerboeck\Client\Model\RelationshipsModel(); // \FomF\Ungerboeck\Client\Model\RelationshipsModel | (Include in the HTTP Body) An RelationshipsModel entry to edit.

try {
    $result = $apiInstance->relationshipsPutRelationship($org_code, $master_account_code, $subordinate_account_code, $relationship_type, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RelationshipsApi->relationshipsPutRelationship: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of both accounts (note: multi-organization relationships not supported on API). |
 **master_account_code** | **string**| The account code of the master account. |
 **subordinate_account_code** | **string**| The account code of the subordinate account. |
 **relationship_type** | **string**| The type code of the relationship. |
 **data** | [**\FomF\Ungerboeck\Client\Model\RelationshipsModel**](../Model/RelationshipsModel.md)| (Include in the HTTP Body) An RelationshipsModel entry to edit. |

### Return type

[**\FomF\Ungerboeck\Client\Model\RelationshipsModel**](../Model/RelationshipsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

