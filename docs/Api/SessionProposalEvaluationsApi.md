# FomF\Ungerboeck\Client\SessionProposalEvaluationsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**sessionProposalEvaluationsDeleteSessionProposalEvaluation**](SessionProposalEvaluationsApi.md#sessionProposalEvaluationsDeleteSessionProposalEvaluation) | **DELETE** /api/v1/SessionProposalEvaluations/{SessionProposalEvaluationID} | Standard - Delete a session proposal evaluation entry
[**sessionProposalEvaluationsGetSessionProposalEvaluation**](SessionProposalEvaluationsApi.md#sessionProposalEvaluationsGetSessionProposalEvaluation) | **GET** /api/v1/SessionProposalEvaluations/{SessionProposalEvaluationID} | Standard - Get a single session proposal evaluation by its parameters
[**sessionProposalEvaluationsGetSessionProposalEvaluationList**](SessionProposalEvaluationsApi.md#sessionProposalEvaluationsGetSessionProposalEvaluationList) | **GET** /api/v1/SessionProposalEvaluations | Standard - Search for session proposal evaluations using OData.  Note, this will not return user fields.  Use the single GET endpoint to retrieve user fields.
[**sessionProposalEvaluationsPostSessionProposalEvaluation**](SessionProposalEvaluationsApi.md#sessionProposalEvaluationsPostSessionProposalEvaluation) | **POST** /api/v1/SessionProposalEvaluations | Standard - Add a session proposal evaluation
[**sessionProposalEvaluationsPutSessionProposalEvaluation**](SessionProposalEvaluationsApi.md#sessionProposalEvaluationsPutSessionProposalEvaluation) | **PUT** /api/v1/SessionProposalEvaluations/{SessionProposalEvaluationID} | Standard - Edit a session proposal evaluation


# **sessionProposalEvaluationsDeleteSessionProposalEvaluation**
> sessionProposalEvaluationsDeleteSessionProposalEvaluation($session_proposal_evaluation_id)

Standard - Delete a session proposal evaluation entry

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\SessionProposalEvaluationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$session_proposal_evaluation_id = 56; // int | Session proposal evaluation id

try {
    $apiInstance->sessionProposalEvaluationsDeleteSessionProposalEvaluation($session_proposal_evaluation_id);
} catch (Exception $e) {
    echo 'Exception when calling SessionProposalEvaluationsApi->sessionProposalEvaluationsDeleteSessionProposalEvaluation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **session_proposal_evaluation_id** | **int**| Session proposal evaluation id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sessionProposalEvaluationsGetSessionProposalEvaluation**
> \FomF\Ungerboeck\Client\Model\SessionProposalEvaluationsModel sessionProposalEvaluationsGetSessionProposalEvaluation($session_proposal_evaluation_id)

Standard - Get a single session proposal evaluation by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\SessionProposalEvaluationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$session_proposal_evaluation_id = 56; // int | Session proposal evaluation id

try {
    $result = $apiInstance->sessionProposalEvaluationsGetSessionProposalEvaluation($session_proposal_evaluation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionProposalEvaluationsApi->sessionProposalEvaluationsGetSessionProposalEvaluation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **session_proposal_evaluation_id** | **int**| Session proposal evaluation id |

### Return type

[**\FomF\Ungerboeck\Client\Model\SessionProposalEvaluationsModel**](../Model/SessionProposalEvaluationsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sessionProposalEvaluationsGetSessionProposalEvaluationList**
> \FomF\Ungerboeck\Client\Model\SessionProposalEvaluationsModel sessionProposalEvaluationsGetSessionProposalEvaluationList($search)

Standard - Search for session proposal evaluations using OData.  Note, this will not return user fields.  Use the single GET endpoint to retrieve user fields.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\SessionProposalEvaluationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->sessionProposalEvaluationsGetSessionProposalEvaluationList($search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionProposalEvaluationsApi->sessionProposalEvaluationsGetSessionProposalEvaluationList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\SessionProposalEvaluationsModel**](../Model/SessionProposalEvaluationsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sessionProposalEvaluationsPostSessionProposalEvaluation**
> \FomF\Ungerboeck\Client\Model\SessionProposalEvaluationsModel sessionProposalEvaluationsPostSessionProposalEvaluation($data)

Standard - Add a session proposal evaluation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\SessionProposalEvaluationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data = new \FomF\Ungerboeck\Client\Model\SessionProposalEvaluationsModel(); // \FomF\Ungerboeck\Client\Model\SessionProposalEvaluationsModel | A SessionProposalEvaluationsModel entry to add.

try {
    $result = $apiInstance->sessionProposalEvaluationsPostSessionProposalEvaluation($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionProposalEvaluationsApi->sessionProposalEvaluationsPostSessionProposalEvaluation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\FomF\Ungerboeck\Client\Model\SessionProposalEvaluationsModel**](../Model/SessionProposalEvaluationsModel.md)| A SessionProposalEvaluationsModel entry to add. |

### Return type

[**\FomF\Ungerboeck\Client\Model\SessionProposalEvaluationsModel**](../Model/SessionProposalEvaluationsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sessionProposalEvaluationsPutSessionProposalEvaluation**
> \FomF\Ungerboeck\Client\Model\SessionProposalEvaluationsModel sessionProposalEvaluationsPutSessionProposalEvaluation($session_proposal_evaluation_id, $data)

Standard - Edit a session proposal evaluation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\SessionProposalEvaluationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$session_proposal_evaluation_id = 56; // int | Session proposal evaluation id
$data = new \FomF\Ungerboeck\Client\Model\SessionProposalEvaluationsModel(); // \FomF\Ungerboeck\Client\Model\SessionProposalEvaluationsModel | A SessionProposalEvaluationsModel entry to edit.

try {
    $result = $apiInstance->sessionProposalEvaluationsPutSessionProposalEvaluation($session_proposal_evaluation_id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionProposalEvaluationsApi->sessionProposalEvaluationsPutSessionProposalEvaluation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **session_proposal_evaluation_id** | **int**| Session proposal evaluation id |
 **data** | [**\FomF\Ungerboeck\Client\Model\SessionProposalEvaluationsModel**](../Model/SessionProposalEvaluationsModel.md)| A SessionProposalEvaluationsModel entry to edit. |

### Return type

[**\FomF\Ungerboeck\Client\Model\SessionProposalEvaluationsModel**](../Model/SessionProposalEvaluationsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

