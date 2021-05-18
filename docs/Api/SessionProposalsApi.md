# FomF\Ungerboeck\Client\SessionProposalsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**sessionProposalsAssignEvaluators**](SessionProposalsApi.md#sessionProposalsAssignEvaluators) | **PUT** /api/v1/SessionProposals/{OrgCode}/{Id}/AssignEvaluators | Standard - Assign evaluators to session propoal
[**sessionProposalsDeleteSessionProposal**](SessionProposalsApi.md#sessionProposalsDeleteSessionProposal) | **DELETE** /api/v1/SessionProposals/{OrgCode}/{Id} | Standard - Delete a session proposal entry
[**sessionProposalsGetSessionProposal**](SessionProposalsApi.md#sessionProposalsGetSessionProposal) | **GET** /api/v1/SessionProposals/{OrgCode}/{Id} | Standard - Get a single session proposal by its parameters
[**sessionProposalsGetSessionProposalList**](SessionProposalsApi.md#sessionProposalsGetSessionProposalList) | **GET** /api/v1/SessionProposals/{OrgCode} | Standard - Search for session proposal using OData.  Note, this will not return user fields.  Use the single GET endpoint to retrieve user fields.
[**sessionProposalsPostSessionProposal**](SessionProposalsApi.md#sessionProposalsPostSessionProposal) | **POST** /api/v1/SessionProposals | Standard - Add a session proposal
[**sessionProposalsPutSessionProposal**](SessionProposalsApi.md#sessionProposalsPutSessionProposal) | **PUT** /api/v1/SessionProposals/{OrgCode}/{Id} | Standard - Edit a session proposal


# **sessionProposalsAssignEvaluators**
> object sessionProposalsAssignEvaluators($org_code, $id, $data)

Standard - Assign evaluators to session propoal

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\SessionProposalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the order registrant.
$id = 56; // int | Session proposal ID.
$data = new \FomF\Ungerboeck\Client\Model\SessionProposalsAssignEvaluatorsModel(); // \FomF\Ungerboeck\Client\Model\SessionProposalsAssignEvaluatorsModel | (Include in the HTTP Body) An SessionProposalsAssignEvaluatorsModel entry to to assign evaluator to session proposal. Multiple evaluators can be comma delimited

try {
    $result = $apiInstance->sessionProposalsAssignEvaluators($org_code, $id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionProposalsApi->sessionProposalsAssignEvaluators: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the order registrant. |
 **id** | **int**| Session proposal ID. |
 **data** | [**\FomF\Ungerboeck\Client\Model\SessionProposalsAssignEvaluatorsModel**](../Model/SessionProposalsAssignEvaluatorsModel.md)| (Include in the HTTP Body) An SessionProposalsAssignEvaluatorsModel entry to to assign evaluator to session proposal. Multiple evaluators can be comma delimited |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sessionProposalsDeleteSessionProposal**
> sessionProposalsDeleteSessionProposal($org_code, $id)

Standard - Delete a session proposal entry

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\SessionProposalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code
$id = 56; // int | Session proposal id

try {
    $apiInstance->sessionProposalsDeleteSessionProposal($org_code, $id);
} catch (Exception $e) {
    echo 'Exception when calling SessionProposalsApi->sessionProposalsDeleteSessionProposal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code |
 **id** | **int**| Session proposal id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sessionProposalsGetSessionProposal**
> \FomF\Ungerboeck\Client\Model\SessionProposalsModel sessionProposalsGetSessionProposal($org_code, $id)

Standard - Get a single session proposal by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\SessionProposalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the session proposal.
$id = 56; // int | Session proposal id

try {
    $result = $apiInstance->sessionProposalsGetSessionProposal($org_code, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionProposalsApi->sessionProposalsGetSessionProposal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the session proposal. |
 **id** | **int**| Session proposal id |

### Return type

[**\FomF\Ungerboeck\Client\Model\SessionProposalsModel**](../Model/SessionProposalsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sessionProposalsGetSessionProposalList**
> \FomF\Ungerboeck\Client\Model\SessionProposalsModel sessionProposalsGetSessionProposalList($org_code, $search)

Standard - Search for session proposal using OData.  Note, this will not return user fields.  Use the single GET endpoint to retrieve user fields.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\SessionProposalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->sessionProposalsGetSessionProposalList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionProposalsApi->sessionProposalsGetSessionProposalList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\SessionProposalsModel**](../Model/SessionProposalsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sessionProposalsPostSessionProposal**
> \FomF\Ungerboeck\Client\Model\SessionProposalsModel sessionProposalsPostSessionProposal($data)

Standard - Add a session proposal

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\SessionProposalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data = new \FomF\Ungerboeck\Client\Model\SessionProposalsModel(); // \FomF\Ungerboeck\Client\Model\SessionProposalsModel | A SessionProposalsModel entry to add.

try {
    $result = $apiInstance->sessionProposalsPostSessionProposal($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionProposalsApi->sessionProposalsPostSessionProposal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\FomF\Ungerboeck\Client\Model\SessionProposalsModel**](../Model/SessionProposalsModel.md)| A SessionProposalsModel entry to add. |

### Return type

[**\FomF\Ungerboeck\Client\Model\SessionProposalsModel**](../Model/SessionProposalsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sessionProposalsPutSessionProposal**
> \FomF\Ungerboeck\Client\Model\SessionProposalsModel sessionProposalsPutSessionProposal($org_code, $id, $data)

Standard - Edit a session proposal

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\SessionProposalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the session proposal.
$id = 56; // int | The order number of the session proposal.
$data = new \FomF\Ungerboeck\Client\Model\SessionProposalsModel(); // \FomF\Ungerboeck\Client\Model\SessionProposalsModel | A SessionProposalsModel entry to edit.

try {
    $result = $apiInstance->sessionProposalsPutSessionProposal($org_code, $id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionProposalsApi->sessionProposalsPutSessionProposal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the session proposal. |
 **id** | **int**| The order number of the session proposal. |
 **data** | [**\FomF\Ungerboeck\Client\Model\SessionProposalsModel**](../Model/SessionProposalsModel.md)| A SessionProposalsModel entry to edit. |

### Return type

[**\FomF\Ungerboeck\Client\Model\SessionProposalsModel**](../Model/SessionProposalsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

