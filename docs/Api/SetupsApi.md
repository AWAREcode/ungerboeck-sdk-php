# FomF\Ungerboeck\Client\SetupsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**setupsGetSetup**](SetupsApi.md#setupsGetSetup) | **GET** /api/v1/Setups/{OrgCode}/{Code} | Basic - Get a single setup by its parameters
[**setupsGetSetupList**](SetupsApi.md#setupsGetSetupList) | **GET** /api/v1/Setups/{OrgCode} | Basic - Search for setups using OData.


# **setupsGetSetup**
> \FomF\Ungerboeck\Client\Model\SetupsModel setupsGetSetup($org_code, $code)

Basic - Get a single setup by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\SetupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the setup.
$code = "code_example"; // string | The code of the setup.

try {
    $result = $apiInstance->setupsGetSetup($org_code, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SetupsApi->setupsGetSetup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the setup. |
 **code** | **string**| The code of the setup. |

### Return type

[**\FomF\Ungerboeck\Client\Model\SetupsModel**](../Model/SetupsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setupsGetSetupList**
> \FomF\Ungerboeck\Client\Model\SetupsModel setupsGetSetupList($org_code, $search)

Basic - Search for setups using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\SetupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->setupsGetSetupList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SetupsApi->setupsGetSetupList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\SetupsModel**](../Model/SetupsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

