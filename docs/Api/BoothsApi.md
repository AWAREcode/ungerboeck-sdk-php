# FomF\Ungerboeck\Client\BoothsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**boothsDeleteBooth**](BoothsApi.md#boothsDeleteBooth) | **DELETE** /api/v1/Booths/{OrgCode}/{SequenceNumber} | Standard - Delete a Booth
[**boothsGetBooth**](BoothsApi.md#boothsGetBooth) | **GET** /api/v1/Booths/{OrgCode}/{SequenceNumber} | Standard - Get a single booth by its parameters
[**boothsGetBoothList**](BoothsApi.md#boothsGetBoothList) | **GET** /api/v1/Booths/{OrgCode} | Standard - Search for booth using OData.
[**boothsPostBooth**](BoothsApi.md#boothsPostBooth) | **POST** /api/v1/Booths | Standard - Add a Booth
[**boothsPutBooth**](BoothsApi.md#boothsPutBooth) | **PUT** /api/v1/Booths/{OrgCode}/{SequenceNumber} | Standard - Edit a Booth


# **boothsDeleteBooth**
> boothsDeleteBooth($org_code, $sequence_number)

Standard - Delete a Booth

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\BoothsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the Exhibitor.
$sequence_number = 56; // int | The sequence number of the booth.

try {
    $apiInstance->boothsDeleteBooth($org_code, $sequence_number);
} catch (Exception $e) {
    echo 'Exception when calling BoothsApi->boothsDeleteBooth: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the Exhibitor. |
 **sequence_number** | **int**| The sequence number of the booth. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **boothsGetBooth**
> \FomF\Ungerboeck\Client\Model\BoothsModel boothsGetBooth($org_code, $sequence_number)

Standard - Get a single booth by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\BoothsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the booth.
$sequence_number = 56; // int | The sequence number of the booth.

try {
    $result = $apiInstance->boothsGetBooth($org_code, $sequence_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoothsApi->boothsGetBooth: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the booth. |
 **sequence_number** | **int**| The sequence number of the booth. |

### Return type

[**\FomF\Ungerboeck\Client\Model\BoothsModel**](../Model/BoothsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **boothsGetBoothList**
> \FomF\Ungerboeck\Client\Model\BoothsModel boothsGetBoothList($org_code, $search)

Standard - Search for booth using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\BoothsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->boothsGetBoothList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoothsApi->boothsGetBoothList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\BoothsModel**](../Model/BoothsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **boothsPostBooth**
> \FomF\Ungerboeck\Client\Model\BoothsModel boothsPostBooth($data)

Standard - Add a Booth

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\BoothsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data = new \FomF\Ungerboeck\Client\Model\BoothsModel(); // \FomF\Ungerboeck\Client\Model\BoothsModel | (Include in the HTTP Body) A BoothsModel entry to add.

try {
    $result = $apiInstance->boothsPostBooth($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoothsApi->boothsPostBooth: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\FomF\Ungerboeck\Client\Model\BoothsModel**](../Model/BoothsModel.md)| (Include in the HTTP Body) A BoothsModel entry to add. |

### Return type

[**\FomF\Ungerboeck\Client\Model\BoothsModel**](../Model/BoothsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **boothsPutBooth**
> \FomF\Ungerboeck\Client\Model\BoothsModel boothsPutBooth($org_code, $sequence_number, $data)

Standard - Edit a Booth

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\BoothsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the Exhibitor.
$sequence_number = 56; // int | The sequence number of the booth.
$data = new \FomF\Ungerboeck\Client\Model\BoothsModel(); // \FomF\Ungerboeck\Client\Model\BoothsModel | (Include in the HTTP Body) A BoothsModel entry to edit.

try {
    $result = $apiInstance->boothsPutBooth($org_code, $sequence_number, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoothsApi->boothsPutBooth: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the Exhibitor. |
 **sequence_number** | **int**| The sequence number of the booth. |
 **data** | [**\FomF\Ungerboeck\Client\Model\BoothsModel**](../Model/BoothsModel.md)| (Include in the HTTP Body) A BoothsModel entry to edit. |

### Return type

[**\FomF\Ungerboeck\Client\Model\BoothsModel**](../Model/BoothsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

