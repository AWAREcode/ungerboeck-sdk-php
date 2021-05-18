# FomF\Ungerboeck\Client\EventJobClassesApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**eventJobClassesGetEventJobClass**](EventJobClassesApi.md#eventJobClassesGetEventJobClass) | **GET** /api/v1/EventJobClasses/{OrgCode}/{Code} | Basic - Get a single event class by its parameters
[**eventJobClassesGetEventJobClassList**](EventJobClassesApi.md#eventJobClassesGetEventJobClassList) | **GET** /api/v1/EventJobClasses/{OrgCode} | Basic - Search for event class using OData.


# **eventJobClassesGetEventJobClass**
> \FomF\Ungerboeck\Client\Model\EventJobClassesModel eventJobClassesGetEventJobClass($org_code, $code)

Basic - Get a single event class by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\EventJobClassesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the event class.
$code = "code_example"; // string | The code of the event class.

try {
    $result = $apiInstance->eventJobClassesGetEventJobClass($org_code, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventJobClassesApi->eventJobClassesGetEventJobClass: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the event class. |
 **code** | **string**| The code of the event class. |

### Return type

[**\FomF\Ungerboeck\Client\Model\EventJobClassesModel**](../Model/EventJobClassesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **eventJobClassesGetEventJobClassList**
> \FomF\Ungerboeck\Client\Model\EventJobClassesModel eventJobClassesGetEventJobClassList($org_code, $search)

Basic - Search for event class using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\EventJobClassesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->eventJobClassesGetEventJobClassList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventJobClassesApi->eventJobClassesGetEventJobClassList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\EventJobClassesModel**](../Model/EventJobClassesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

