# FomF\Ungerboeck\Client\ARDemographicsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**aRDemographicsDeleteARDemographic**](ARDemographicsApi.md#aRDemographicsDeleteARDemographic) | **DELETE** /api/v1/ARDemographics/{OrgCode}/{Account} | Standard - Delete AR demographics
[**aRDemographicsGetARDemographic**](ARDemographicsApi.md#aRDemographicsGetARDemographic) | **GET** /api/v1/ARDemographics/{OrgCode}/{Account} | Standard - Get a single AR demographic entry by its parameters
[**aRDemographicsGetARDemographicList**](ARDemographicsApi.md#aRDemographicsGetARDemographicList) | **GET** /api/v1/ARDemographics/{OrgCode} | Standard - Search for AR demographics using OData.
[**aRDemographicsPostARDemographic**](ARDemographicsApi.md#aRDemographicsPostARDemographic) | **POST** /api/v1/ARDemographics | Standard - Add new AR demographic entry
[**aRDemographicsPutARDemographic**](ARDemographicsApi.md#aRDemographicsPutARDemographic) | **PUT** /api/v1/ARDemographics/{OrgCode}/{Account} | Standard - Edit AR demographics


# **aRDemographicsDeleteARDemographic**
> aRDemographicsDeleteARDemographic($org_code, $account)

Standard - Delete AR demographics

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\ARDemographicsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the AR demographics.
$account = "account_example"; // string | Account number of the AR demographics.

try {
    $apiInstance->aRDemographicsDeleteARDemographic($org_code, $account);
} catch (Exception $e) {
    echo 'Exception when calling ARDemographicsApi->aRDemographicsDeleteARDemographic: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the AR demographics. |
 **account** | **string**| Account number of the AR demographics. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **aRDemographicsGetARDemographic**
> \FomF\Ungerboeck\Client\Model\ARDemographicsModel aRDemographicsGetARDemographic($org_code, $account)

Standard - Get a single AR demographic entry by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\ARDemographicsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the AR demographic entry.
$account = "account_example"; // string | The account code of the AR demographic entry.

try {
    $result = $apiInstance->aRDemographicsGetARDemographic($org_code, $account);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ARDemographicsApi->aRDemographicsGetARDemographic: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the AR demographic entry. |
 **account** | **string**| The account code of the AR demographic entry. |

### Return type

[**\FomF\Ungerboeck\Client\Model\ARDemographicsModel**](../Model/ARDemographicsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **aRDemographicsGetARDemographicList**
> \FomF\Ungerboeck\Client\Model\ARDemographicsModel aRDemographicsGetARDemographicList($org_code, $search)

Standard - Search for AR demographics using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\ARDemographicsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->aRDemographicsGetARDemographicList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ARDemographicsApi->aRDemographicsGetARDemographicList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\ARDemographicsModel**](../Model/ARDemographicsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **aRDemographicsPostARDemographic**
> \FomF\Ungerboeck\Client\Model\ARDemographicsModel aRDemographicsPostARDemographic($data)

Standard - Add new AR demographic entry

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\ARDemographicsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data = new \FomF\Ungerboeck\Client\Model\ARDemographicsModel(); // \FomF\Ungerboeck\Client\Model\ARDemographicsModel | (Include in the HTTP Body) A ARDemographicsModel entry to add.

try {
    $result = $apiInstance->aRDemographicsPostARDemographic($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ARDemographicsApi->aRDemographicsPostARDemographic: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\FomF\Ungerboeck\Client\Model\ARDemographicsModel**](../Model/ARDemographicsModel.md)| (Include in the HTTP Body) A ARDemographicsModel entry to add. |

### Return type

[**\FomF\Ungerboeck\Client\Model\ARDemographicsModel**](../Model/ARDemographicsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **aRDemographicsPutARDemographic**
> \FomF\Ungerboeck\Client\Model\ARDemographicsModel aRDemographicsPutARDemographic($org_code, $account, $data)

Standard - Edit AR demographics

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\ARDemographicsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the AR Demographic.
$account = "account_example"; // string | The sequence number of the AR demographic.
$data = new \FomF\Ungerboeck\Client\Model\ARDemographicsModel(); // \FomF\Ungerboeck\Client\Model\ARDemographicsModel | (Include in the HTTP Body) A ARDemographicsModel entry to edit.

try {
    $result = $apiInstance->aRDemographicsPutARDemographic($org_code, $account, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ARDemographicsApi->aRDemographicsPutARDemographic: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the AR Demographic. |
 **account** | **string**| The sequence number of the AR demographic. |
 **data** | [**\FomF\Ungerboeck\Client\Model\ARDemographicsModel**](../Model/ARDemographicsModel.md)| (Include in the HTTP Body) A ARDemographicsModel entry to edit. |

### Return type

[**\FomF\Ungerboeck\Client\Model\ARDemographicsModel**](../Model/ARDemographicsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

