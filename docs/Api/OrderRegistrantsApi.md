# FomF\Ungerboeck\Client\OrderRegistrantsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**orderRegistrantsCheckIn**](OrderRegistrantsApi.md#orderRegistrantsCheckIn) | **PUT** /api/v1/OrderRegistrants/{OrgCode}/{RegistrantSequenceNbr}/{EventID}/CheckIn | Extended (Registration Orders) - Registrant check-in
[**orderRegistrantsClearCheckIn**](OrderRegistrantsApi.md#orderRegistrantsClearCheckIn) | **PUT** /api/v1/OrderRegistrants/{OrgCode}/{RegistrantSequenceNbr}/{EventID}/ClearCheckIn | Extended (Registration Orders) - Registrant clear check-in
[**orderRegistrantsGetOrderRegistrant**](OrderRegistrantsApi.md#orderRegistrantsGetOrderRegistrant) | **GET** /api/v1/OrderRegistrants/{OrgCode}/{RegistrantSequenceNbr} | Standard - Get a single order registrant by its parameters
[**orderRegistrantsGetOrderRegistrantList**](OrderRegistrantsApi.md#orderRegistrantsGetOrderRegistrantList) | **GET** /api/v1/OrderRegistrants/{OrgCode} | Standard - Search for order registrant using OData.  Note, this will not return user fields.  Use the single GET endpoint to retrieve user fields.
[**orderRegistrantsPutOrderRegistrant**](OrderRegistrantsApi.md#orderRegistrantsPutOrderRegistrant) | **PUT** /api/v1/OrderRegistrants/{OrgCode}/{RegistrantSequenceNbr} | Standard - Edit a order registrant
[**orderRegistrantsSetRegistrantApproval**](OrderRegistrantsApi.md#orderRegistrantsSetRegistrantApproval) | **PUT** /api/v1/OrderRegistrants/{OrgCode}/{RegistrantSequenceNbr}/SetRegistrantApproval | Extended (Registration Orders) - Set order registrant Approval Status


# **orderRegistrantsCheckIn**
> object orderRegistrantsCheckIn($org_code, $registrant_sequence_nbr, $event_id)

Extended (Registration Orders) - Registrant check-in

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
$event_id = 56; // int | Event ID of the event the registrant is checking in to.

try {
    $result = $apiInstance->orderRegistrantsCheckIn($org_code, $registrant_sequence_nbr, $event_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderRegistrantsApi->orderRegistrantsCheckIn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the order registrant. |
 **registrant_sequence_nbr** | **int**| The code of the order registrant. |
 **event_id** | **int**| Event ID of the event the registrant is checking in to. |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderRegistrantsClearCheckIn**
> object orderRegistrantsClearCheckIn($org_code, $registrant_sequence_nbr, $event_id)

Extended (Registration Orders) - Registrant clear check-in

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
$event_id = 56; // int | Event ID of the event the registrant is clear checking in.

try {
    $result = $apiInstance->orderRegistrantsClearCheckIn($org_code, $registrant_sequence_nbr, $event_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderRegistrantsApi->orderRegistrantsClearCheckIn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the order registrant. |
 **registrant_sequence_nbr** | **int**| The code of the order registrant. |
 **event_id** | **int**| Event ID of the event the registrant is clear checking in. |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderRegistrantsGetOrderRegistrant**
> \FomF\Ungerboeck\Client\Model\OrderRegistrantsModel orderRegistrantsGetOrderRegistrant($org_code, $registrant_sequence_nbr)

Standard - Get a single order registrant by its parameters

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
    $result = $apiInstance->orderRegistrantsGetOrderRegistrant($org_code, $registrant_sequence_nbr);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderRegistrantsApi->orderRegistrantsGetOrderRegistrant: ', $e->getMessage(), PHP_EOL;
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

# **orderRegistrantsGetOrderRegistrantList**
> \FomF\Ungerboeck\Client\Model\OrderRegistrantsModel orderRegistrantsGetOrderRegistrantList($org_code, $search)

Standard - Search for order registrant using OData.  Note, this will not return user fields.  Use the single GET endpoint to retrieve user fields.

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
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->orderRegistrantsGetOrderRegistrantList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderRegistrantsApi->orderRegistrantsGetOrderRegistrantList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\OrderRegistrantsModel**](../Model/OrderRegistrantsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderRegistrantsPutOrderRegistrant**
> \FomF\Ungerboeck\Client\Model\OrderRegistrantsModel orderRegistrantsPutOrderRegistrant($org_code, $registrant_sequence_nbr, $data)

Standard - Edit a order registrant

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
    $result = $apiInstance->orderRegistrantsPutOrderRegistrant($org_code, $registrant_sequence_nbr, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderRegistrantsApi->orderRegistrantsPutOrderRegistrant: ', $e->getMessage(), PHP_EOL;
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

# **orderRegistrantsSetRegistrantApproval**
> object orderRegistrantsSetRegistrantApproval($org_code, $registrant_sequence_nbr, $data)

Extended (Registration Orders) - Set order registrant Approval Status

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
$data = new \FomF\Ungerboeck\Client\Model\RegistrationApprovalsModel(); // \FomF\Ungerboeck\Client\Model\RegistrationApprovalsModel | (Include in the HTTP Body) An RegistrationApprovalsModel entry to to change the approval status of a registrant.

try {
    $result = $apiInstance->orderRegistrantsSetRegistrantApproval($org_code, $registrant_sequence_nbr, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderRegistrantsApi->orderRegistrantsSetRegistrantApproval: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the order registrant. |
 **registrant_sequence_nbr** | **int**| The code of the order registrant. |
 **data** | [**\FomF\Ungerboeck\Client\Model\RegistrationApprovalsModel**](../Model/RegistrationApprovalsModel.md)| (Include in the HTTP Body) An RegistrationApprovalsModel entry to to change the approval status of a registrant. |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

