# FomF\Ungerboeck\Client\AlternateAddressesApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**alternateAddressesGetAlternateAddresses**](AlternateAddressesApi.md#alternateAddressesGetAlternateAddresses) | **GET** /api/v1/AlternateAddresses/{OrgCode}/{Account}/{SequenceNumber}/{RecordType} | Get a alternate address by its parameters
[**alternateAddressesGetAlternateAddressesList**](AlternateAddressesApi.md#alternateAddressesGetAlternateAddressesList) | **GET** /api/v1/AlternateAddresses/{OrgCode} | Search for alternate address using OData.


# **alternateAddressesGetAlternateAddresses**
> \FomF\Ungerboeck\Client\Model\AlternateAddressesModel alternateAddressesGetAlternateAddresses($org_code, $account, $sequence_number, $record_type)

Get a alternate address by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\AlternateAddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the alternate address.
$account = "account_example"; // string | The account code of the alternate address.
$sequence_number = 56; // int | The sequence number of the alternate address.
$record_type = "record_type_example"; // string | The record type of the alternate address.

try {
    $result = $apiInstance->alternateAddressesGetAlternateAddresses($org_code, $account, $sequence_number, $record_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlternateAddressesApi->alternateAddressesGetAlternateAddresses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the alternate address. |
 **account** | **string**| The account code of the alternate address. |
 **sequence_number** | **int**| The sequence number of the alternate address. |
 **record_type** | **string**| The record type of the alternate address. |

### Return type

[**\FomF\Ungerboeck\Client\Model\AlternateAddressesModel**](../Model/AlternateAddressesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **alternateAddressesGetAlternateAddressesList**
> \FomF\Ungerboeck\Client\Model\AlternateAddressesModel[] alternateAddressesGetAlternateAddressesList($org_code, $search)

Search for alternate address using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\AlternateAddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | Search string using OData with model properties for the filter, Page and Page_Size to navigate

try {
    $result = $apiInstance->alternateAddressesGetAlternateAddressesList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlternateAddressesApi->alternateAddressesGetAlternateAddressesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| Search string using OData with model properties for the filter, Page and Page_Size to navigate |

### Return type

[**\FomF\Ungerboeck\Client\Model\AlternateAddressesModel[]**](../Model/AlternateAddressesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

