# FomF\Ungerboeck\Client\ActivitiesApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**activitiesDeleteActivity**](ActivitiesApi.md#activitiesDeleteActivity) | **DELETE** /api/v1/Activities/{OrgCode}/{AccountCode}/{SequenceNumber} | Basic - Delete an activity
[**activitiesGetActivity**](ActivitiesApi.md#activitiesGetActivity) | **GET** /api/v1/Activities/{OrgCode}/{AccountCode}/{SequenceNumber} | Basic - Get a single activity by its parameters
[**activitiesGetActivityList**](ActivitiesApi.md#activitiesGetActivityList) | **GET** /api/v1/Activities/{OrgCode} | Basic - Search for activities using OData.
[**activitiesPostActivity**](ActivitiesApi.md#activitiesPostActivity) | **POST** /api/v1/Activities | Basic - Add an activity
[**activitiesPutActivity**](ActivitiesApi.md#activitiesPutActivity) | **PUT** /api/v1/Activities/{OrgCode}/{AccountCode}/{SequenceNumber} | Basic - Edit an activity


# **activitiesDeleteActivity**
> activitiesDeleteActivity($org_code, $account_code, $sequence_number)

Basic - Delete an activity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\ActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the activity.
$account_code = "account_code_example"; // string | The account code of the activity.
$sequence_number = 56; // int | The sequence number of the activity.

try {
    $apiInstance->activitiesDeleteActivity($org_code, $account_code, $sequence_number);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->activitiesDeleteActivity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the activity. |
 **account_code** | **string**| The account code of the activity. |
 **sequence_number** | **int**| The sequence number of the activity. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **activitiesGetActivity**
> \FomF\Ungerboeck\Client\Model\ActivitiesModel activitiesGetActivity($org_code, $account_code, $sequence_number)

Basic - Get a single activity by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\ActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the activity.
$account_code = "account_code_example"; // string | The account code of the activity.
$sequence_number = 56; // int | The sequence number of the activity.

try {
    $result = $apiInstance->activitiesGetActivity($org_code, $account_code, $sequence_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->activitiesGetActivity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the activity. |
 **account_code** | **string**| The account code of the activity. |
 **sequence_number** | **int**| The sequence number of the activity. |

### Return type

[**\FomF\Ungerboeck\Client\Model\ActivitiesModel**](../Model/ActivitiesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **activitiesGetActivityList**
> \FomF\Ungerboeck\Client\Model\ActivitiesModel activitiesGetActivityList($org_code, $search)

Basic - Search for activities using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\ActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->activitiesGetActivityList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->activitiesGetActivityList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\ActivitiesModel**](../Model/ActivitiesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **activitiesPostActivity**
> \FomF\Ungerboeck\Client\Model\ActivitiesModel activitiesPostActivity($data)

Basic - Add an activity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\ActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data = new \FomF\Ungerboeck\Client\Model\ActivitiesModel(); // \FomF\Ungerboeck\Client\Model\ActivitiesModel | (Include in the HTTP Body) an ActivitiesModel to add.

try {
    $result = $apiInstance->activitiesPostActivity($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->activitiesPostActivity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\FomF\Ungerboeck\Client\Model\ActivitiesModel**](../Model/ActivitiesModel.md)| (Include in the HTTP Body) an ActivitiesModel to add. |

### Return type

[**\FomF\Ungerboeck\Client\Model\ActivitiesModel**](../Model/ActivitiesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **activitiesPutActivity**
> \FomF\Ungerboeck\Client\Model\ActivitiesModel activitiesPutActivity($org_code, $account_code, $sequence_number, $data)

Basic - Edit an activity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\ActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the activity.
$account_code = "account_code_example"; // string | The account code of the activity.
$sequence_number = 56; // int | The sequence number of the activity
$data = new \FomF\Ungerboeck\Client\Model\ActivitiesModel(); // \FomF\Ungerboeck\Client\Model\ActivitiesModel | (Include in the HTTP Body) An ActivitiesModel entry to edit.

try {
    $result = $apiInstance->activitiesPutActivity($org_code, $account_code, $sequence_number, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->activitiesPutActivity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the activity. |
 **account_code** | **string**| The account code of the activity. |
 **sequence_number** | **int**| The sequence number of the activity |
 **data** | [**\FomF\Ungerboeck\Client\Model\ActivitiesModel**](../Model/ActivitiesModel.md)| (Include in the HTTP Body) An ActivitiesModel entry to edit. |

### Return type

[**\FomF\Ungerboeck\Client\Model\ActivitiesModel**](../Model/ActivitiesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

