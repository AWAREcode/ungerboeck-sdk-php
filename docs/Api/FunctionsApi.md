# FomF\Ungerboeck\Client\FunctionsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**functionsDeleteFunction**](FunctionsApi.md#functionsDeleteFunction) | **DELETE** /api/v1/Functions/{OrgCode}/{EventID}/{FunctionID} | Delete a function from an event
[**functionsGetFunction**](FunctionsApi.md#functionsGetFunction) | **GET** /api/v1/Functions/{OrgCode}/{EventID}/{FunctionID} | Get a function by its parameters
[**functionsGetFunctionsList**](FunctionsApi.md#functionsGetFunctionsList) | **GET** /api/v1/Functions/{OrgCode} | Search for Functions using OData.  Note, this will not return user fields.  Use the single GET endpoint to retrieve user fields.
[**functionsInsertAfter**](FunctionsApi.md#functionsInsertAfter) | **POST** /api/v1/Functions/InsertAfter/{TargetFunctionID} | Add a function to an event after the target function the function hierarchy.  The new function will appear on the same level as the target function.
[**functionsInsertIndented**](FunctionsApi.md#functionsInsertIndented) | **POST** /api/v1/Functions/InsertIndented/{ParentFunctionID} | Add a function to an event indented into the target function in the function hierarchy.  The new function will appear as a child of the parent function.
[**functionsPutFunction**](FunctionsApi.md#functionsPutFunction) | **PUT** /api/v1/Functions/{OrgCode}/{EventID}/{FunctionID} | Edit a Function


# **functionsDeleteFunction**
> functionsDeleteFunction($org_code, $event_id, $function_id)

Delete a function from an event

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\FunctionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the function.
$event_id = 56; // int | The Event ID of the event the function is attached to.
$function_id = 56; // int | The Function ID of the function.

try {
    $apiInstance->functionsDeleteFunction($org_code, $event_id, $function_id);
} catch (Exception $e) {
    echo 'Exception when calling FunctionsApi->functionsDeleteFunction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the function. |
 **event_id** | **int**| The Event ID of the event the function is attached to. |
 **function_id** | **int**| The Function ID of the function. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **functionsGetFunction**
> \FomF\Ungerboeck\Client\Model\FunctionsModel functionsGetFunction($org_code, $event_id, $function_id)

Get a function by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\FunctionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the Function.
$event_id = 56; // int | The Event ID of the event the function is attached to.
$function_id = 56; // int | The Function ID of the function.

try {
    $result = $apiInstance->functionsGetFunction($org_code, $event_id, $function_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FunctionsApi->functionsGetFunction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the Function. |
 **event_id** | **int**| The Event ID of the event the function is attached to. |
 **function_id** | **int**| The Function ID of the function. |

### Return type

[**\FomF\Ungerboeck\Client\Model\FunctionsModel**](../Model/FunctionsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **functionsGetFunctionsList**
> \FomF\Ungerboeck\Client\Model\FunctionsModel[] functionsGetFunctionsList($org_code, $search)

Search for Functions using OData.  Note, this will not return user fields.  Use the single GET endpoint to retrieve user fields.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\FunctionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | Search string using OData with model properties for the filter, Page and Page_Size to navigate

try {
    $result = $apiInstance->functionsGetFunctionsList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FunctionsApi->functionsGetFunctionsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| Search string using OData with model properties for the filter, Page and Page_Size to navigate |

### Return type

[**\FomF\Ungerboeck\Client\Model\FunctionsModel[]**](../Model/FunctionsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **functionsInsertAfter**
> \FomF\Ungerboeck\Client\Model\FunctionsModel functionsInsertAfter($target_function_id, $data)

Add a function to an event after the target function the function hierarchy.  The new function will appear on the same level as the target function.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\FunctionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$target_function_id = 56; // int | This is the function ID of the sibling function to the new function being added.
$data = new \FomF\Ungerboeck\Client\Model\FunctionsModel(); // \FomF\Ungerboeck\Client\Model\FunctionsModel | (Include in the HTTP Body) A FunctionsModel entry to add.

try {
    $result = $apiInstance->functionsInsertAfter($target_function_id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FunctionsApi->functionsInsertAfter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **target_function_id** | **int**| This is the function ID of the sibling function to the new function being added. |
 **data** | [**\FomF\Ungerboeck\Client\Model\FunctionsModel**](../Model/FunctionsModel.md)| (Include in the HTTP Body) A FunctionsModel entry to add. |

### Return type

[**\FomF\Ungerboeck\Client\Model\FunctionsModel**](../Model/FunctionsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **functionsInsertIndented**
> \FomF\Ungerboeck\Client\Model\FunctionsModel functionsInsertIndented($parent_function_id, $data)

Add a function to an event indented into the target function in the function hierarchy.  The new function will appear as a child of the parent function.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\FunctionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$parent_function_id = 56; // int | This is the function ID of the parent function of the new function being added.
$data = new \FomF\Ungerboeck\Client\Model\FunctionsModel(); // \FomF\Ungerboeck\Client\Model\FunctionsModel | (Include in the HTTP Body) A FunctionsModel entry to add.

try {
    $result = $apiInstance->functionsInsertIndented($parent_function_id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FunctionsApi->functionsInsertIndented: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parent_function_id** | **int**| This is the function ID of the parent function of the new function being added. |
 **data** | [**\FomF\Ungerboeck\Client\Model\FunctionsModel**](../Model/FunctionsModel.md)| (Include in the HTTP Body) A FunctionsModel entry to add. |

### Return type

[**\FomF\Ungerboeck\Client\Model\FunctionsModel**](../Model/FunctionsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **functionsPutFunction**
> \FomF\Ungerboeck\Client\Model\FunctionsModel functionsPutFunction($org_code, $event_id, $function_id, $data)

Edit a Function

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\FunctionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the Function.
$event_id = 56; // int | The Event ID of the event the function is attached to.
$function_id = 56; // int | The Function ID of the function.
$data = new \FomF\Ungerboeck\Client\Model\FunctionsModel(); // \FomF\Ungerboeck\Client\Model\FunctionsModel | (Include in the HTTP Body) An FunctionsModel entry to edit.

try {
    $result = $apiInstance->functionsPutFunction($org_code, $event_id, $function_id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FunctionsApi->functionsPutFunction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the Function. |
 **event_id** | **int**| The Event ID of the event the function is attached to. |
 **function_id** | **int**| The Function ID of the function. |
 **data** | [**\FomF\Ungerboeck\Client\Model\FunctionsModel**](../Model/FunctionsModel.md)| (Include in the HTTP Body) An FunctionsModel entry to edit. |

### Return type

[**\FomF\Ungerboeck\Client\Model\FunctionsModel**](../Model/FunctionsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

