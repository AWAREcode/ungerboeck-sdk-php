# FomF\Ungerboeck\Client\FunctionSeatingChartsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**functionSeatingChartsDeleteFunctionSeatingChart**](FunctionSeatingChartsApi.md#functionSeatingChartsDeleteFunctionSeatingChart) | **DELETE** /api/v1/FunctionSeatingCharts/{OrgCode}/{SequenceNumber} | Standard - Delete a Function seating chart from an event
[**functionSeatingChartsGetFunctionSeatingChart**](FunctionSeatingChartsApi.md#functionSeatingChartsGetFunctionSeatingChart) | **GET** /api/v1/FunctionSeatingCharts/{OrgCode}/{SequenceNumber} | Basic - Get a single Function seating chart by sequence number
[**functionSeatingChartsGetFunctionSeatingChartList**](FunctionSeatingChartsApi.md#functionSeatingChartsGetFunctionSeatingChartList) | **GET** /api/v1/FunctionSeatingCharts/{OrgCode} | Basic - Get a list of Function seating charts by specified search data
[**functionSeatingChartsPostFunctionSeatingChart**](FunctionSeatingChartsApi.md#functionSeatingChartsPostFunctionSeatingChart) | **POST** /api/v1/FunctionSeatingCharts | Standard - Add a Function seating chart
[**functionSeatingChartsPutFunctionSeatingChart**](FunctionSeatingChartsApi.md#functionSeatingChartsPutFunctionSeatingChart) | **PUT** /api/v1/FunctionSeatingCharts/{OrgCode}/{SequenceNumber} | Standard - Edit a Function seating chart


# **functionSeatingChartsDeleteFunctionSeatingChart**
> functionSeatingChartsDeleteFunctionSeatingChart($org_code, $sequence_number)

Standard - Delete a Function seating chart from an event

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\FunctionSeatingChartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the function seating chart.
$sequence_number = 56; // int | The Primary Key for a function seating chart.

try {
    $apiInstance->functionSeatingChartsDeleteFunctionSeatingChart($org_code, $sequence_number);
} catch (Exception $e) {
    echo 'Exception when calling FunctionSeatingChartsApi->functionSeatingChartsDeleteFunctionSeatingChart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the function seating chart. |
 **sequence_number** | **int**| The Primary Key for a function seating chart. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **functionSeatingChartsGetFunctionSeatingChart**
> \FomF\Ungerboeck\Client\Model\FunctionSeatingChartsModel functionSeatingChartsGetFunctionSeatingChart($org_code, $sequence_number)

Basic - Get a single Function seating chart by sequence number

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\FunctionSeatingChartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the function seating chart.
$sequence_number = 56; // int | The Primary Key for a function seating chart.

try {
    $result = $apiInstance->functionSeatingChartsGetFunctionSeatingChart($org_code, $sequence_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FunctionSeatingChartsApi->functionSeatingChartsGetFunctionSeatingChart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the function seating chart. |
 **sequence_number** | **int**| The Primary Key for a function seating chart. |

### Return type

[**\FomF\Ungerboeck\Client\Model\FunctionSeatingChartsModel**](../Model/FunctionSeatingChartsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **functionSeatingChartsGetFunctionSeatingChartList**
> \FomF\Ungerboeck\Client\Model\FunctionSeatingChartsModel functionSeatingChartsGetFunctionSeatingChartList($org_code, $search)

Basic - Get a list of Function seating charts by specified search data

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\FunctionSeatingChartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the function seating chart.
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->functionSeatingChartsGetFunctionSeatingChartList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FunctionSeatingChartsApi->functionSeatingChartsGetFunctionSeatingChartList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the function seating chart. |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\FunctionSeatingChartsModel**](../Model/FunctionSeatingChartsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **functionSeatingChartsPostFunctionSeatingChart**
> \FomF\Ungerboeck\Client\Model\FunctionSeatingChartsModel functionSeatingChartsPostFunctionSeatingChart($data)

Standard - Add a Function seating chart

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\FunctionSeatingChartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data = new \FomF\Ungerboeck\Client\Model\FunctionSeatingChartsModel(); // \FomF\Ungerboeck\Client\Model\FunctionSeatingChartsModel | FunctionSeatingChartsModel data field. Any parameter on the model can be set here in JSON form.

try {
    $result = $apiInstance->functionSeatingChartsPostFunctionSeatingChart($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FunctionSeatingChartsApi->functionSeatingChartsPostFunctionSeatingChart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\FomF\Ungerboeck\Client\Model\FunctionSeatingChartsModel**](../Model/FunctionSeatingChartsModel.md)| FunctionSeatingChartsModel data field. Any parameter on the model can be set here in JSON form. |

### Return type

[**\FomF\Ungerboeck\Client\Model\FunctionSeatingChartsModel**](../Model/FunctionSeatingChartsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **functionSeatingChartsPutFunctionSeatingChart**
> \FomF\Ungerboeck\Client\Model\FunctionSeatingChartsModel functionSeatingChartsPutFunctionSeatingChart($org_code, $sequence_number, $data)

Standard - Edit a Function seating chart

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\FunctionSeatingChartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the function seating chart.
$sequence_number = 56; // int | The Primary Key for a function seating chart.
$data = new \FomF\Ungerboeck\Client\Model\FunctionSeatingChartsModel(); // \FomF\Ungerboeck\Client\Model\FunctionSeatingChartsModel | 

try {
    $result = $apiInstance->functionSeatingChartsPutFunctionSeatingChart($org_code, $sequence_number, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FunctionSeatingChartsApi->functionSeatingChartsPutFunctionSeatingChart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the function seating chart. |
 **sequence_number** | **int**| The Primary Key for a function seating chart. |
 **data** | [**\FomF\Ungerboeck\Client\Model\FunctionSeatingChartsModel**](../Model/FunctionSeatingChartsModel.md)|  |

### Return type

[**\FomF\Ungerboeck\Client\Model\FunctionSeatingChartsModel**](../Model/FunctionSeatingChartsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

