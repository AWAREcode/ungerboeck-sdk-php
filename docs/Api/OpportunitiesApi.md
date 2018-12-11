# FomF\Ungerboeck\Client\OpportunitiesApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**opportunitiesDeleteOpportunity**](OpportunitiesApi.md#opportunitiesDeleteOpportunity) | **DELETE** /api/v1/Opportunities/{OrgCode}/{AccountCode}/{Occurrence} | Delete an opportunity
[**opportunitiesGetOpportunitiesList**](OpportunitiesApi.md#opportunitiesGetOpportunitiesList) | **GET** /api/v1/Opportunities/{OrgCode} | Search for opportunities using OData.  Note, this will not return user fields.  Use the single GET endpoint to retrieve user fields.
[**opportunitiesGetOpportunity**](OpportunitiesApi.md#opportunitiesGetOpportunity) | **GET** /api/v1/Opportunities/{OrgCode}/{AccountCode}/{Occurrence} | Get a opportunity by its parameters
[**opportunitiesPostOpportunity**](OpportunitiesApi.md#opportunitiesPostOpportunity) | **POST** /api/v1/Opportunities | Add a opportunity
[**opportunitiesPutOpportunity**](OpportunitiesApi.md#opportunitiesPutOpportunity) | **PUT** /api/v1/Opportunities/{OrgCode}/{AccountCode}/{Occurrence} | Edit an opportunity


# **opportunitiesDeleteOpportunity**
> opportunitiesDeleteOpportunity($org_code, $account_code, $occurrence)

Delete an opportunity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\OpportunitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the opportunity.
$account_code = "account_code_example"; // string | The account code of the opportunity.
$occurrence = 56; // int | The sequence number (occurrence) of the opportunity.

try {
    $apiInstance->opportunitiesDeleteOpportunity($org_code, $account_code, $occurrence);
} catch (Exception $e) {
    echo 'Exception when calling OpportunitiesApi->opportunitiesDeleteOpportunity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the opportunity. |
 **account_code** | **string**| The account code of the opportunity. |
 **occurrence** | **int**| The sequence number (occurrence) of the opportunity. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **opportunitiesGetOpportunitiesList**
> \FomF\Ungerboeck\Client\Model\OpportunitiesModel[] opportunitiesGetOpportunitiesList($org_code, $search)

Search for opportunities using OData.  Note, this will not return user fields.  Use the single GET endpoint to retrieve user fields.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\OpportunitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | Search string using OData with model properties for the filter, Page and Page_Size to navigate

try {
    $result = $apiInstance->opportunitiesGetOpportunitiesList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunitiesApi->opportunitiesGetOpportunitiesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| Search string using OData with model properties for the filter, Page and Page_Size to navigate |

### Return type

[**\FomF\Ungerboeck\Client\Model\OpportunitiesModel[]**](../Model/OpportunitiesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **opportunitiesGetOpportunity**
> \FomF\Ungerboeck\Client\Model\OpportunitiesModel opportunitiesGetOpportunity($org_code, $account_code, $occurrence)

Get a opportunity by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\OpportunitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the opportunity.
$account_code = "account_code_example"; // string | The account code of the opportunity.
$occurrence = 56; // int | The Sequence number (occurrence) of the opportunity.

try {
    $result = $apiInstance->opportunitiesGetOpportunity($org_code, $account_code, $occurrence);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunitiesApi->opportunitiesGetOpportunity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the opportunity. |
 **account_code** | **string**| The account code of the opportunity. |
 **occurrence** | **int**| The Sequence number (occurrence) of the opportunity. |

### Return type

[**\FomF\Ungerboeck\Client\Model\OpportunitiesModel**](../Model/OpportunitiesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **opportunitiesPostOpportunity**
> \FomF\Ungerboeck\Client\Model\OpportunitiesModel opportunitiesPostOpportunity($data)

Add a opportunity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\OpportunitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data = new \FomF\Ungerboeck\Client\Model\OpportunitiesModel(); // \FomF\Ungerboeck\Client\Model\OpportunitiesModel | (Include in the HTTP Body) an OpportunitiesModel to add.

try {
    $result = $apiInstance->opportunitiesPostOpportunity($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunitiesApi->opportunitiesPostOpportunity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\FomF\Ungerboeck\Client\Model\OpportunitiesModel**](../Model/OpportunitiesModel.md)| (Include in the HTTP Body) an OpportunitiesModel to add. |

### Return type

[**\FomF\Ungerboeck\Client\Model\OpportunitiesModel**](../Model/OpportunitiesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **opportunitiesPutOpportunity**
> \FomF\Ungerboeck\Client\Model\OpportunitiesModel opportunitiesPutOpportunity($org_code, $account_code, $occurrence, $data)

Edit an opportunity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\OpportunitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the opportunity.
$account_code = "account_code_example"; // string | The account code of the opportunity.
$occurrence = 56; // int | The sequence number (occurrence) of the opportunity.
$data = new \FomF\Ungerboeck\Client\Model\OpportunitiesModel(); // \FomF\Ungerboeck\Client\Model\OpportunitiesModel | (Include in the HTTP Body) An OpportunitiesModel entry to edit.

try {
    $result = $apiInstance->opportunitiesPutOpportunity($org_code, $account_code, $occurrence, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunitiesApi->opportunitiesPutOpportunity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the opportunity. |
 **account_code** | **string**| The account code of the opportunity. |
 **occurrence** | **int**| The sequence number (occurrence) of the opportunity. |
 **data** | [**\FomF\Ungerboeck\Client\Model\OpportunitiesModel**](../Model/OpportunitiesModel.md)| (Include in the HTTP Body) An OpportunitiesModel entry to edit. |

### Return type

[**\FomF\Ungerboeck\Client\Model\OpportunitiesModel**](../Model/OpportunitiesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

