# FomF\Ungerboeck\Client\CommunicationsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**communicationsDeleteCommunication**](CommunicationsApi.md#communicationsDeleteCommunication) | **DELETE** /api/v1/Communications/{OrgCode}/{AccountCode}/{SequenceNumber} | Delete a communication entry from an account
[**communicationsGetCommunication**](CommunicationsApi.md#communicationsGetCommunication) | **GET** /api/v1/Communications/{OrgCode}/{AccountCode}/{SequenceNumber} | Get a communication entry by its parameters
[**communicationsGetCommunicationList**](CommunicationsApi.md#communicationsGetCommunicationList) | **GET** /api/v1/Communications/{OrgCode} | Search for account communication entries using OData.
[**communicationsPostCommunication**](CommunicationsApi.md#communicationsPostCommunication) | **POST** /api/v1/Communications | Add a communication entry to an account
[**communicationsPutCommunication**](CommunicationsApi.md#communicationsPutCommunication) | **PUT** /api/v1/Communications/{OrgCode}/{AccountCode}/{SequenceNumber} | Edit a communication entry


# **communicationsDeleteCommunication**
> communicationsDeleteCommunication($org_code, $account_code, $sequence_number)

Delete a communication entry from an account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\CommunicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the communication entry.
$account_code = "account_code_example"; // string | The account code of the communication entry.
$sequence_number = 56; // int | The Sequence Number of the communication entry.

try {
    $apiInstance->communicationsDeleteCommunication($org_code, $account_code, $sequence_number);
} catch (Exception $e) {
    echo 'Exception when calling CommunicationsApi->communicationsDeleteCommunication: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the communication entry. |
 **account_code** | **string**| The account code of the communication entry. |
 **sequence_number** | **int**| The Sequence Number of the communication entry. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **communicationsGetCommunication**
> \FomF\Ungerboeck\Client\Model\CommunicationsModel communicationsGetCommunication($org_code, $account_code, $sequence_number)

Get a communication entry by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\CommunicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the communication entry.
$account_code = "account_code_example"; // string | The account code of the communication entry.
$sequence_number = 56; // int | The Sequence Number of the communication entry.

try {
    $result = $apiInstance->communicationsGetCommunication($org_code, $account_code, $sequence_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunicationsApi->communicationsGetCommunication: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the communication entry. |
 **account_code** | **string**| The account code of the communication entry. |
 **sequence_number** | **int**| The Sequence Number of the communication entry. |

### Return type

[**\FomF\Ungerboeck\Client\Model\CommunicationsModel**](../Model/CommunicationsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **communicationsGetCommunicationList**
> \FomF\Ungerboeck\Client\Model\CommunicationsModel[] communicationsGetCommunicationList($org_code, $search)

Search for account communication entries using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\CommunicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | Search string using OData with model properties for the filter, Page and Page_Size to navigate

try {
    $result = $apiInstance->communicationsGetCommunicationList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunicationsApi->communicationsGetCommunicationList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| Search string using OData with model properties for the filter, Page and Page_Size to navigate |

### Return type

[**\FomF\Ungerboeck\Client\Model\CommunicationsModel[]**](../Model/CommunicationsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **communicationsPostCommunication**
> \FomF\Ungerboeck\Client\Model\CommunicationsModel communicationsPostCommunication($data)

Add a communication entry to an account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\CommunicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data = new \FomF\Ungerboeck\Client\Model\CommunicationsModel(); // \FomF\Ungerboeck\Client\Model\CommunicationsModel | (Include in the HTTP Body) A CommunicationsModel entry to add.

try {
    $result = $apiInstance->communicationsPostCommunication($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunicationsApi->communicationsPostCommunication: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\FomF\Ungerboeck\Client\Model\CommunicationsModel**](../Model/CommunicationsModel.md)| (Include in the HTTP Body) A CommunicationsModel entry to add. |

### Return type

[**\FomF\Ungerboeck\Client\Model\CommunicationsModel**](../Model/CommunicationsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **communicationsPutCommunication**
> \FomF\Ungerboeck\Client\Model\CommunicationsModel communicationsPutCommunication($org_code, $account_code, $sequence_number, $data)

Edit a communication entry

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\CommunicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the communication entry.
$account_code = "account_code_example"; // string | The account code of the communication entry.
$sequence_number = 56; // int | The Sequence Number of the communication entry.
$data = new \FomF\Ungerboeck\Client\Model\CommunicationsModel(); // \FomF\Ungerboeck\Client\Model\CommunicationsModel | (Include in the HTTP Body) A CommunicationsModel entry to edit.

try {
    $result = $apiInstance->communicationsPutCommunication($org_code, $account_code, $sequence_number, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunicationsApi->communicationsPutCommunication: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the communication entry. |
 **account_code** | **string**| The account code of the communication entry. |
 **sequence_number** | **int**| The Sequence Number of the communication entry. |
 **data** | [**\FomF\Ungerboeck\Client\Model\CommunicationsModel**](../Model/CommunicationsModel.md)| (Include in the HTTP Body) A CommunicationsModel entry to edit. |

### Return type

[**\FomF\Ungerboeck\Client\Model\CommunicationsModel**](../Model/CommunicationsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

