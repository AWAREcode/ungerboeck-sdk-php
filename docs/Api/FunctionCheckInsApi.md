# FomF\Ungerboeck\Client\FunctionCheckInsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**functionCheckInsDeleteFunctionCheckIn**](FunctionCheckInsApi.md#functionCheckInsDeleteFunctionCheckIn) | **DELETE** /api/v1/FunctionCheckIns/{Sequence} | Standard - Delete a function checkin entry
[**functionCheckInsGetFunctionCheckIn**](FunctionCheckInsApi.md#functionCheckInsGetFunctionCheckIn) | **GET** /api/v1/FunctionCheckIns/{Sequence} | Standard - Get a single function check-in entry by its parameters
[**functionCheckInsGetFunctionCheckInList**](FunctionCheckInsApi.md#functionCheckInsGetFunctionCheckInList) | **GET** /api/v1/FunctionCheckIns | Standard - Search for function check-in record OData. Note that this search endpoint does not use OrgCode.
[**functionCheckInsPostFunctionCheckIn**](FunctionCheckInsApi.md#functionCheckInsPostFunctionCheckIn) | **POST** /api/v1/FunctionCheckIns | Standard - Add a function check-in
[**functionCheckInsPutFunctionCheckIn**](FunctionCheckInsApi.md#functionCheckInsPutFunctionCheckIn) | **PUT** /api/v1/FunctionCheckIns/{Sequence} | Standard - Edit a function check-in.  This is the same as the &#39;Function Check-Out&#39; action in backoffice.


# **functionCheckInsDeleteFunctionCheckIn**
> functionCheckInsDeleteFunctionCheckIn($sequence)

Standard - Delete a function checkin entry

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\FunctionCheckInsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sequence = 56; // int | The code of the function check-in sequence.

try {
    $apiInstance->functionCheckInsDeleteFunctionCheckIn($sequence);
} catch (Exception $e) {
    echo 'Exception when calling FunctionCheckInsApi->functionCheckInsDeleteFunctionCheckIn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sequence** | **int**| The code of the function check-in sequence. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **functionCheckInsGetFunctionCheckIn**
> \FomF\Ungerboeck\Client\Model\FunctionCheckInsModel functionCheckInsGetFunctionCheckIn($sequence)

Standard - Get a single function check-in entry by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\FunctionCheckInsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sequence = 56; // int | The code of the function check-in sequence.

try {
    $result = $apiInstance->functionCheckInsGetFunctionCheckIn($sequence);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FunctionCheckInsApi->functionCheckInsGetFunctionCheckIn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sequence** | **int**| The code of the function check-in sequence. |

### Return type

[**\FomF\Ungerboeck\Client\Model\FunctionCheckInsModel**](../Model/FunctionCheckInsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **functionCheckInsGetFunctionCheckInList**
> \FomF\Ungerboeck\Client\Model\FunctionCheckInsModel functionCheckInsGetFunctionCheckInList($search)

Standard - Search for function check-in record OData. Note that this search endpoint does not use OrgCode.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\FunctionCheckInsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->functionCheckInsGetFunctionCheckInList($search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FunctionCheckInsApi->functionCheckInsGetFunctionCheckInList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\FunctionCheckInsModel**](../Model/FunctionCheckInsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **functionCheckInsPostFunctionCheckIn**
> \FomF\Ungerboeck\Client\Model\FunctionCheckInsModel functionCheckInsPostFunctionCheckIn($data)

Standard - Add a function check-in

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\FunctionCheckInsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data = new \FomF\Ungerboeck\Client\Model\FunctionCheckInsModel(); // \FomF\Ungerboeck\Client\Model\FunctionCheckInsModel | (Include in the HTTP Body) A FunctionCheckInModel entry to add.

try {
    $result = $apiInstance->functionCheckInsPostFunctionCheckIn($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FunctionCheckInsApi->functionCheckInsPostFunctionCheckIn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\FomF\Ungerboeck\Client\Model\FunctionCheckInsModel**](../Model/FunctionCheckInsModel.md)| (Include in the HTTP Body) A FunctionCheckInModel entry to add. |

### Return type

[**\FomF\Ungerboeck\Client\Model\FunctionCheckInsModel**](../Model/FunctionCheckInsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **functionCheckInsPutFunctionCheckIn**
> \FomF\Ungerboeck\Client\Model\FunctionCheckInsModel functionCheckInsPutFunctionCheckIn($sequence, $data)

Standard - Edit a function check-in.  This is the same as the 'Function Check-Out' action in backoffice.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\FunctionCheckInsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sequence = 56; // int | The code of the function check-in sequence.
$data = new \FomF\Ungerboeck\Client\Model\FunctionCheckInsModel(); // \FomF\Ungerboeck\Client\Model\FunctionCheckInsModel | (Include in the HTTP Body) An FunctionCheckInModel entry to edit.

try {
    $result = $apiInstance->functionCheckInsPutFunctionCheckIn($sequence, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FunctionCheckInsApi->functionCheckInsPutFunctionCheckIn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sequence** | **int**| The code of the function check-in sequence. |
 **data** | [**\FomF\Ungerboeck\Client\Model\FunctionCheckInsModel**](../Model/FunctionCheckInsModel.md)| (Include in the HTTP Body) An FunctionCheckInModel entry to edit. |

### Return type

[**\FomF\Ungerboeck\Client\Model\FunctionCheckInsModel**](../Model/FunctionCheckInsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

