# FomF\Ungerboeck\Client\EventProductsAndServicesApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**eventProductsAndServicesGetEventProductAndServiceList**](EventProductsAndServicesApi.md#eventProductsAndServicesGetEventProductAndServiceList) | **GET** /api/v1/EventProductsAndServices/{OrgCode} | Basic - Search for event products and services using OData.
[**eventProductsAndServicesGetEventProductService**](EventProductsAndServicesApi.md#eventProductsAndServicesGetEventProductService) | **GET** /api/v1/EventProductsAndServices/{OrgCode}/{SequenceNumber} | Basic - Get a single event product and service by its parameters
[**eventProductsAndServicesPostEventProductService**](EventProductsAndServicesApi.md#eventProductsAndServicesPostEventProductService) | **POST** /api/v1/EventProductsAndServices | Standard - Add an event product and service
[**eventProductsAndServicesPutEventProductService**](EventProductsAndServicesApi.md#eventProductsAndServicesPutEventProductService) | **PUT** /api/v1/EventProductsAndServices/{OrgCode}/{SequenceNumber} | Standard - Edit an event product and service


# **eventProductsAndServicesGetEventProductAndServiceList**
> \FomF\Ungerboeck\Client\Model\EventProductsAndServicesModel eventProductsAndServicesGetEventProductAndServiceList($org_code, $search)

Basic - Search for event products and services using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\EventProductsAndServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->eventProductsAndServicesGetEventProductAndServiceList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventProductsAndServicesApi->eventProductsAndServicesGetEventProductAndServiceList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\EventProductsAndServicesModel**](../Model/EventProductsAndServicesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **eventProductsAndServicesGetEventProductService**
> \FomF\Ungerboeck\Client\Model\EventProductsAndServicesModel eventProductsAndServicesGetEventProductService($org_code, $sequence_number)

Basic - Get a single event product and service by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\EventProductsAndServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the event product and service.
$sequence_number = 56; // int | The sequence number of the event product and service.

try {
    $result = $apiInstance->eventProductsAndServicesGetEventProductService($org_code, $sequence_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventProductsAndServicesApi->eventProductsAndServicesGetEventProductService: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the event product and service. |
 **sequence_number** | **int**| The sequence number of the event product and service. |

### Return type

[**\FomF\Ungerboeck\Client\Model\EventProductsAndServicesModel**](../Model/EventProductsAndServicesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **eventProductsAndServicesPostEventProductService**
> \FomF\Ungerboeck\Client\Model\EventProductsAndServicesModel eventProductsAndServicesPostEventProductService($data)

Standard - Add an event product and service

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\EventProductsAndServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data = new \FomF\Ungerboeck\Client\Model\EventProductsAndServicesModel(); // \FomF\Ungerboeck\Client\Model\EventProductsAndServicesModel | (Include in the HTTP Body) A EventProductsAndServicesModel entry to add.

try {
    $result = $apiInstance->eventProductsAndServicesPostEventProductService($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventProductsAndServicesApi->eventProductsAndServicesPostEventProductService: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\FomF\Ungerboeck\Client\Model\EventProductsAndServicesModel**](../Model/EventProductsAndServicesModel.md)| (Include in the HTTP Body) A EventProductsAndServicesModel entry to add. |

### Return type

[**\FomF\Ungerboeck\Client\Model\EventProductsAndServicesModel**](../Model/EventProductsAndServicesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **eventProductsAndServicesPutEventProductService**
> \FomF\Ungerboeck\Client\Model\EventProductsAndServicesModel eventProductsAndServicesPutEventProductService($org_code, $sequence_number, $data)

Standard - Edit an event product and service

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\EventProductsAndServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the Exhibitor.
$sequence_number = 56; // int | The sequence number of the booth.
$data = new \FomF\Ungerboeck\Client\Model\EventProductsAndServicesModel(); // \FomF\Ungerboeck\Client\Model\EventProductsAndServicesModel | (Include in the HTTP Body) A BoothsModel entry to edit.

try {
    $result = $apiInstance->eventProductsAndServicesPutEventProductService($org_code, $sequence_number, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventProductsAndServicesApi->eventProductsAndServicesPutEventProductService: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the Exhibitor. |
 **sequence_number** | **int**| The sequence number of the booth. |
 **data** | [**\FomF\Ungerboeck\Client\Model\EventProductsAndServicesModel**](../Model/EventProductsAndServicesModel.md)| (Include in the HTTP Body) A BoothsModel entry to edit. |

### Return type

[**\FomF\Ungerboeck\Client\Model\EventProductsAndServicesModel**](../Model/EventProductsAndServicesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

