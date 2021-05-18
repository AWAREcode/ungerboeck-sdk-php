# FomF\Ungerboeck\Client\WebhooksApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**webhooksGetWebhook**](WebhooksApi.md#webhooksGetWebhook) | **GET** /api/v1/Webhooks/{OrgCode}/{SequenceNumber} | Standard - Get a single web hook by its parameters
[**webhooksGetWebhookList**](WebhooksApi.md#webhooksGetWebhookList) | **GET** /api/v1/Webhooks/{OrgCode} | Standard - Search for web hooks using OData.


# **webhooksGetWebhook**
> \FomF\Ungerboeck\Client\Model\WebhooksModel webhooksGetWebhook($org_code, $sequence_number)

Standard - Get a single web hook by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the web hook.
$sequence_number = 56; // int | The sequence number of the web hook.

try {
    $result = $apiInstance->webhooksGetWebhook($org_code, $sequence_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhooksGetWebhook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the web hook. |
 **sequence_number** | **int**| The sequence number of the web hook. |

### Return type

[**\FomF\Ungerboeck\Client\Model\WebhooksModel**](../Model/WebhooksModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webhooksGetWebhookList**
> \FomF\Ungerboeck\Client\Model\WebhooksModel webhooksGetWebhookList($org_code, $search)

Standard - Search for web hooks using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->webhooksGetWebhookList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhooksGetWebhookList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\WebhooksModel**](../Model/WebhooksModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

