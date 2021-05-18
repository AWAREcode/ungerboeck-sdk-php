# FomF\Ungerboeck\Client\SessionProposalEvaluationCriteriaResponsesApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**sessionProposalEvaluationCriteriaResponsesDeleteSessionProposalEvaluationCriteriaResponse**](SessionProposalEvaluationCriteriaResponsesApi.md#sessionProposalEvaluationCriteriaResponsesDeleteSessionProposalEvaluationCriteriaResponse) | **DELETE** /api/v1/SessionProposalEvaluationCriteriaResponses/{AbstractEvaluationResponseId} | Standard - Delete a session proposal evaluation response entry
[**sessionProposalEvaluationCriteriaResponsesGetSessionProposalEvaluationCriteriaResponse**](SessionProposalEvaluationCriteriaResponsesApi.md#sessionProposalEvaluationCriteriaResponsesGetSessionProposalEvaluationCriteriaResponse) | **GET** /api/v1/SessionProposalEvaluationCriteriaResponses/{AbstractEvaluationResponseId} | Standard - Get a single session proposal evaluation response by its parameters
[**sessionProposalEvaluationCriteriaResponsesGetSessionProposalEvaluationCriteriaResponseList**](SessionProposalEvaluationCriteriaResponsesApi.md#sessionProposalEvaluationCriteriaResponsesGetSessionProposalEvaluationCriteriaResponseList) | **GET** /api/v1/SessionProposalEvaluationCriteriaResponses | Standard - Search for session proposal evaluation responses using OData.  Note, this will not return user fields.  Use the single GET endpoint to retrieve user fields.
[**sessionProposalEvaluationCriteriaResponsesPostSessionProposalEvaluationCriteriaResponse**](SessionProposalEvaluationCriteriaResponsesApi.md#sessionProposalEvaluationCriteriaResponsesPostSessionProposalEvaluationCriteriaResponse) | **POST** /api/v1/SessionProposalEvaluationCriteriaResponses | Standard - Add a session proposal evaluation response
[**sessionProposalEvaluationCriteriaResponsesPutSessionProposalEvaluationCriteriaResponse**](SessionProposalEvaluationCriteriaResponsesApi.md#sessionProposalEvaluationCriteriaResponsesPutSessionProposalEvaluationCriteriaResponse) | **PUT** /api/v1/SessionProposalEvaluationCriteriaResponses/{AbstractEvaluationResponseId} | Standard - Edit a session proposal evaluation response


# **sessionProposalEvaluationCriteriaResponsesDeleteSessionProposalEvaluationCriteriaResponse**
> sessionProposalEvaluationCriteriaResponsesDeleteSessionProposalEvaluationCriteriaResponse($abstract_evaluation_response_id)

Standard - Delete a session proposal evaluation response entry

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\SessionProposalEvaluationCriteriaResponsesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$abstract_evaluation_response_id = 56; // int | Session proposal evaluation response id

try {
    $apiInstance->sessionProposalEvaluationCriteriaResponsesDeleteSessionProposalEvaluationCriteriaResponse($abstract_evaluation_response_id);
} catch (Exception $e) {
    echo 'Exception when calling SessionProposalEvaluationCriteriaResponsesApi->sessionProposalEvaluationCriteriaResponsesDeleteSessionProposalEvaluationCriteriaResponse: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **abstract_evaluation_response_id** | **int**| Session proposal evaluation response id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sessionProposalEvaluationCriteriaResponsesGetSessionProposalEvaluationCriteriaResponse**
> \FomF\Ungerboeck\Client\Model\SessionProposalEvaluationCriteriaResponsesModel sessionProposalEvaluationCriteriaResponsesGetSessionProposalEvaluationCriteriaResponse($abstract_evaluation_response_id)

Standard - Get a single session proposal evaluation response by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\SessionProposalEvaluationCriteriaResponsesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$abstract_evaluation_response_id = 56; // int | 

try {
    $result = $apiInstance->sessionProposalEvaluationCriteriaResponsesGetSessionProposalEvaluationCriteriaResponse($abstract_evaluation_response_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionProposalEvaluationCriteriaResponsesApi->sessionProposalEvaluationCriteriaResponsesGetSessionProposalEvaluationCriteriaResponse: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **abstract_evaluation_response_id** | **int**|  |

### Return type

[**\FomF\Ungerboeck\Client\Model\SessionProposalEvaluationCriteriaResponsesModel**](../Model/SessionProposalEvaluationCriteriaResponsesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sessionProposalEvaluationCriteriaResponsesGetSessionProposalEvaluationCriteriaResponseList**
> \FomF\Ungerboeck\Client\Model\SessionProposalEvaluationCriteriaResponsesModel sessionProposalEvaluationCriteriaResponsesGetSessionProposalEvaluationCriteriaResponseList($search)

Standard - Search for session proposal evaluation responses using OData.  Note, this will not return user fields.  Use the single GET endpoint to retrieve user fields.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\SessionProposalEvaluationCriteriaResponsesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->sessionProposalEvaluationCriteriaResponsesGetSessionProposalEvaluationCriteriaResponseList($search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionProposalEvaluationCriteriaResponsesApi->sessionProposalEvaluationCriteriaResponsesGetSessionProposalEvaluationCriteriaResponseList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\SessionProposalEvaluationCriteriaResponsesModel**](../Model/SessionProposalEvaluationCriteriaResponsesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sessionProposalEvaluationCriteriaResponsesPostSessionProposalEvaluationCriteriaResponse**
> \FomF\Ungerboeck\Client\Model\SessionProposalEvaluationCriteriaResponsesModel sessionProposalEvaluationCriteriaResponsesPostSessionProposalEvaluationCriteriaResponse($data)

Standard - Add a session proposal evaluation response

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\SessionProposalEvaluationCriteriaResponsesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data = new \FomF\Ungerboeck\Client\Model\SessionProposalEvaluationCriteriaResponsesModel(); // \FomF\Ungerboeck\Client\Model\SessionProposalEvaluationCriteriaResponsesModel | A SessionProposalEvaluationCriteriaResponsesModel entry to add.

try {
    $result = $apiInstance->sessionProposalEvaluationCriteriaResponsesPostSessionProposalEvaluationCriteriaResponse($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionProposalEvaluationCriteriaResponsesApi->sessionProposalEvaluationCriteriaResponsesPostSessionProposalEvaluationCriteriaResponse: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\FomF\Ungerboeck\Client\Model\SessionProposalEvaluationCriteriaResponsesModel**](../Model/SessionProposalEvaluationCriteriaResponsesModel.md)| A SessionProposalEvaluationCriteriaResponsesModel entry to add. |

### Return type

[**\FomF\Ungerboeck\Client\Model\SessionProposalEvaluationCriteriaResponsesModel**](../Model/SessionProposalEvaluationCriteriaResponsesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sessionProposalEvaluationCriteriaResponsesPutSessionProposalEvaluationCriteriaResponse**
> \FomF\Ungerboeck\Client\Model\SessionProposalEvaluationCriteriaResponsesModel sessionProposalEvaluationCriteriaResponsesPutSessionProposalEvaluationCriteriaResponse($abstract_evaluation_response_id, $data)

Standard - Edit a session proposal evaluation response

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\SessionProposalEvaluationCriteriaResponsesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$abstract_evaluation_response_id = 56; // int | 
$data = new \FomF\Ungerboeck\Client\Model\SessionProposalEvaluationCriteriaResponsesModel(); // \FomF\Ungerboeck\Client\Model\SessionProposalEvaluationCriteriaResponsesModel | A SessionProposalEvaluationCriteriaResponsesModel entry to edit.

try {
    $result = $apiInstance->sessionProposalEvaluationCriteriaResponsesPutSessionProposalEvaluationCriteriaResponse($abstract_evaluation_response_id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionProposalEvaluationCriteriaResponsesApi->sessionProposalEvaluationCriteriaResponsesPutSessionProposalEvaluationCriteriaResponse: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **abstract_evaluation_response_id** | **int**|  |
 **data** | [**\FomF\Ungerboeck\Client\Model\SessionProposalEvaluationCriteriaResponsesModel**](../Model/SessionProposalEvaluationCriteriaResponsesModel.md)| A SessionProposalEvaluationCriteriaResponsesModel entry to edit. |

### Return type

[**\FomF\Ungerboeck\Client\Model\SessionProposalEvaluationCriteriaResponsesModel**](../Model/SessionProposalEvaluationCriteriaResponsesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

