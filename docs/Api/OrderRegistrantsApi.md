# FomF\Ungerboeck\Client\OrderRegistrantsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**orderRegistrantsGetOrderRegistrants**](OrderRegistrantsApi.md#orderRegistrantsGetOrderRegistrants) | **GET** /api/v1/OrderRegistrants/{OrgCode}/{RegistrantSequenceNbr} | Get an order registrant by its parameters
[**orderRegistrantsGetOrderRegistrantsList**](OrderRegistrantsApi.md#orderRegistrantsGetOrderRegistrantsList) | **GET** /api/v1/OrderRegistrants/{OrgCode} | Search for order registrant using OData.  Note, this will not return user fields.  Use the single GET endpoint to retrieve user fields.
[**orderRegistrantsPutOrderRegistrants**](OrderRegistrantsApi.md#orderRegistrantsPutOrderRegistrants) | **PUT** /api/v1/OrderRegistrants/{OrgCode}/{RegistrantSequenceNbr} | Edit a order registrant


# **orderRegistrantsGetOrderRegistrants**
> \FomF\Ungerboeck\Client\Model\OrderRegistrantsModel orderRegistrantsGetOrderRegistrants($org_code, $registrant_sequence_nbr)

Get an order registrant by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\OrderRegistrantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the order registrant.
$registrant_sequence_nbr = 56; // int | The code of the order registrant.

try {
    $result = $apiInstance->orderRegistrantsGetOrderRegistrants($org_code, $registrant_sequence_nbr);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderRegistrantsApi->orderRegistrantsGetOrderRegistrants: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the order registrant. |
 **registrant_sequence_nbr** | **int**| The code of the order registrant. |

### Return type

[**\FomF\Ungerboeck\Client\Model\OrderRegistrantsModel**](../Model/OrderRegistrantsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderRegistrantsGetOrderRegistrantsList**
> \FomF\Ungerboeck\Client\Model\OrderRegistrantsModel[] orderRegistrantsGetOrderRegistrantsList($org_code, $search)

Search for order registrant using OData.  Note, this will not return user fields.  Use the single GET endpoint to retrieve user fields.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\OrderRegistrantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | Search string using OData with model properties for the filter, Page and Page_Size to navigate

try {
    $result = $apiInstance->orderRegistrantsGetOrderRegistrantsList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderRegistrantsApi->orderRegistrantsGetOrderRegistrantsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| Search string using OData with model properties for the filter, Page and Page_Size to navigate |

### Return type

[**\FomF\Ungerboeck\Client\Model\OrderRegistrantsModel[]**](../Model/OrderRegistrantsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderRegistrantsPutOrderRegistrants**
> \FomF\Ungerboeck\Client\Model\OrderRegistrantsModel orderRegistrantsPutOrderRegistrants($org_code, $registrant_sequence_nbr, $data)

Edit a order registrant

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\OrderRegistrantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the order registrant.
$registrant_sequence_nbr = 56; // int | The code of the order registrant.
$data = new \FomF\Ungerboeck\Client\Model\OrderRegistrantsModel(); // \FomF\Ungerboeck\Client\Model\OrderRegistrantsModel | (Include in the HTTP Body) An OrderRegistrantsModel entry to edit.

try {
    $result = $apiInstance->orderRegistrantsPutOrderRegistrants($org_code, $registrant_sequence_nbr, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderRegistrantsApi->orderRegistrantsPutOrderRegistrants: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the order registrant. |
 **registrant_sequence_nbr** | **int**| The code of the order registrant. |
 **data** | [**\FomF\Ungerboeck\Client\Model\OrderRegistrantsModel**](../Model/OrderRegistrantsModel.md)| (Include in the HTTP Body) An OrderRegistrantsModel entry to edit. |

### Return type

[**\FomF\Ungerboeck\Client\Model\OrderRegistrantsModel**](../Model/OrderRegistrantsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

