# FomF\Ungerboeck\Client\RegistrationOrdersApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**registrationOrdersCalculateTaxes**](RegistrationOrdersApi.md#registrationOrdersCalculateTaxes) | **POST** /api/v1/RegistrationOrders/CalculateTaxes | Extended (Registration Orders) - Calculate Taxes on a registration order
[**registrationOrdersGetRegistrationOrder**](RegistrationOrdersApi.md#registrationOrdersGetRegistrationOrder) | **GET** /api/v1/RegistrationOrders/{OrgCode}/{OrderNumber} | Standard - Get a single registration order by its parameters
[**registrationOrdersGetRegistrationOrderList**](RegistrationOrdersApi.md#registrationOrdersGetRegistrationOrderList) | **GET** /api/v1/RegistrationOrders/{OrgCode} | Standard - Search for registration orders using OData.  Note, this will not return user fields.  Use the single GET endpoint to retrieve user fields.
[**registrationOrdersMoveOrder**](RegistrationOrdersApi.md#registrationOrdersMoveOrder) | **PUT** /api/v1/RegistrationOrders/MoveOrder | Extended (Registration Orders) - Use this action endpoint to move Registration Orders a different event or a different function on the same event.  This process replicates the \&quot;Move Order\&quot; functionality found in Ungerboeck&#39;s \&quot;Registration Orders\&quot; window.
[**registrationOrdersMoveOrdersBulk**](RegistrationOrdersApi.md#registrationOrdersMoveOrdersBulk) | **PUT** /api/v1/RegistrationOrders/MoveOrdersBulk | Extended (Registration Orders) - Use this action endpoint to move multiple Registration Orders to a different event or a different function on the same event.  This process replicates the \&quot;Move Order\&quot; functionality found in Ungerboeck&#39;s \&quot;Registration Orders\&quot; window.  If one or more orders fails to move, this endpoint will return a MoveOrdersBulkErrorsModel object.
[**registrationOrdersPostRegistrationOrder**](RegistrationOrdersApi.md#registrationOrdersPostRegistrationOrder) | **POST** /api/v1/RegistrationOrders | Extended (Registration Orders) - Add a registration order
[**registrationOrdersPutRegistrationOrder**](RegistrationOrdersApi.md#registrationOrdersPutRegistrationOrder) | **PUT** /api/v1/RegistrationOrders/{OrgCode}/{OrderNumber} | Extended (Registration Orders) - Edit a registration order


# **registrationOrdersCalculateTaxes**
> \FomF\Ungerboeck\Client\Model\RegistrationOrdersModel registrationOrdersCalculateTaxes($data)

Extended (Registration Orders) - Calculate Taxes on a registration order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\RegistrationOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data = new \FomF\Ungerboeck\Client\Model\RegistrationOrdersModel(); // \FomF\Ungerboeck\Client\Model\RegistrationOrdersModel | (Include in the HTTP Body) A RegistrationOrdersModel entry to calculate taxes.

try {
    $result = $apiInstance->registrationOrdersCalculateTaxes($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationOrdersApi->registrationOrdersCalculateTaxes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\FomF\Ungerboeck\Client\Model\RegistrationOrdersModel**](../Model/RegistrationOrdersModel.md)| (Include in the HTTP Body) A RegistrationOrdersModel entry to calculate taxes. |

### Return type

[**\FomF\Ungerboeck\Client\Model\RegistrationOrdersModel**](../Model/RegistrationOrdersModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **registrationOrdersGetRegistrationOrder**
> \FomF\Ungerboeck\Client\Model\RegistrationOrdersModel registrationOrdersGetRegistrationOrder($org_code, $order_number)

Standard - Get a single registration order by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\RegistrationOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the registration order.
$order_number = 56; // int | The Order Number of the registration order.

try {
    $result = $apiInstance->registrationOrdersGetRegistrationOrder($org_code, $order_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationOrdersApi->registrationOrdersGetRegistrationOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the registration order. |
 **order_number** | **int**| The Order Number of the registration order. |

### Return type

[**\FomF\Ungerboeck\Client\Model\RegistrationOrdersModel**](../Model/RegistrationOrdersModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **registrationOrdersGetRegistrationOrderList**
> \FomF\Ungerboeck\Client\Model\RegistrationOrdersModel registrationOrdersGetRegistrationOrderList($org_code, $search)

Standard - Search for registration orders using OData.  Note, this will not return user fields.  Use the single GET endpoint to retrieve user fields.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\RegistrationOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->registrationOrdersGetRegistrationOrderList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationOrdersApi->registrationOrdersGetRegistrationOrderList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\RegistrationOrdersModel**](../Model/RegistrationOrdersModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **registrationOrdersMoveOrder**
> registrationOrdersMoveOrder($data)

Extended (Registration Orders) - Use this action endpoint to move Registration Orders a different event or a different function on the same event.  This process replicates the \"Move Order\" functionality found in Ungerboeck's \"Registration Orders\" window.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\RegistrationOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data = new \FomF\Ungerboeck\Client\Model\MoveOrderModel(); // \FomF\Ungerboeck\Client\Model\MoveOrderModel | (Include in the HTTP Body) A MoveOrderModel entry.

try {
    $apiInstance->registrationOrdersMoveOrder($data);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationOrdersApi->registrationOrdersMoveOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\FomF\Ungerboeck\Client\Model\MoveOrderModel**](../Model/MoveOrderModel.md)| (Include in the HTTP Body) A MoveOrderModel entry. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **registrationOrdersMoveOrdersBulk**
> \FomF\Ungerboeck\Client\Model\MoveOrdersBulkErrorsModel registrationOrdersMoveOrdersBulk($data)

Extended (Registration Orders) - Use this action endpoint to move multiple Registration Orders to a different event or a different function on the same event.  This process replicates the \"Move Order\" functionality found in Ungerboeck's \"Registration Orders\" window.  If one or more orders fails to move, this endpoint will return a MoveOrdersBulkErrorsModel object.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\RegistrationOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data = new \FomF\Ungerboeck\Client\Model\MoveOrdersBulkModel(); // \FomF\Ungerboeck\Client\Model\MoveOrdersBulkModel | (Include in the HTTP Body) A MoveOrdersBulkModel entry.

try {
    $result = $apiInstance->registrationOrdersMoveOrdersBulk($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationOrdersApi->registrationOrdersMoveOrdersBulk: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\FomF\Ungerboeck\Client\Model\MoveOrdersBulkModel**](../Model/MoveOrdersBulkModel.md)| (Include in the HTTP Body) A MoveOrdersBulkModel entry. |

### Return type

[**\FomF\Ungerboeck\Client\Model\MoveOrdersBulkErrorsModel**](../Model/MoveOrdersBulkErrorsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **registrationOrdersPostRegistrationOrder**
> \FomF\Ungerboeck\Client\Model\RegistrationOrdersModel registrationOrdersPostRegistrationOrder($data)

Extended (Registration Orders) - Add a registration order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\RegistrationOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data = new \FomF\Ungerboeck\Client\Model\RegistrationOrdersModel(); // \FomF\Ungerboeck\Client\Model\RegistrationOrdersModel | (Include in the HTTP Body) A RegistrationOrdersModel entry to add.

try {
    $result = $apiInstance->registrationOrdersPostRegistrationOrder($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationOrdersApi->registrationOrdersPostRegistrationOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\FomF\Ungerboeck\Client\Model\RegistrationOrdersModel**](../Model/RegistrationOrdersModel.md)| (Include in the HTTP Body) A RegistrationOrdersModel entry to add. |

### Return type

[**\FomF\Ungerboeck\Client\Model\RegistrationOrdersModel**](../Model/RegistrationOrdersModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **registrationOrdersPutRegistrationOrder**
> \FomF\Ungerboeck\Client\Model\RegistrationOrdersModel registrationOrdersPutRegistrationOrder($org_code, $order_number, $data)

Extended (Registration Orders) - Edit a registration order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\RegistrationOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the registration order.
$order_number = 56; // int | The order number of the registration order.
$data = new \FomF\Ungerboeck\Client\Model\RegistrationOrdersModel(); // \FomF\Ungerboeck\Client\Model\RegistrationOrdersModel | (Include in the HTTP Body) A RegistrationOrdersModel entry to edit.

try {
    $result = $apiInstance->registrationOrdersPutRegistrationOrder($org_code, $order_number, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationOrdersApi->registrationOrdersPutRegistrationOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the registration order. |
 **order_number** | **int**| The order number of the registration order. |
 **data** | [**\FomF\Ungerboeck\Client\Model\RegistrationOrdersModel**](../Model/RegistrationOrdersModel.md)| (Include in the HTTP Body) A RegistrationOrdersModel entry to edit. |

### Return type

[**\FomF\Ungerboeck\Client\Model\RegistrationOrdersModel**](../Model/RegistrationOrdersModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

