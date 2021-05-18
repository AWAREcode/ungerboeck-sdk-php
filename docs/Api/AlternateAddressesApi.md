# FomF\Ungerboeck\Client\AlternateAddressesApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**alternateAddressesGetAlternateAddress**](AlternateAddressesApi.md#alternateAddressesGetAlternateAddress) | **GET** /api/v1/AlternateAddresses/{OrgCode}/{Account}/{SequenceNumber}/{RecordType} | Basic - Get a single alternate address by its parameters
[**alternateAddressesGetAlternateAddressList**](AlternateAddressesApi.md#alternateAddressesGetAlternateAddressList) | **GET** /api/v1/AlternateAddresses/{OrgCode} | Basic - Search for alternate address using OData.


# **alternateAddressesGetAlternateAddress**
> \FomF\Ungerboeck\Client\Model\AlternateAddressesModel alternateAddressesGetAlternateAddress($org_code, $account, $sequence_number, $record_type)

Basic - Get a single alternate address by its parameters

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
    $result = $apiInstance->alternateAddressesGetAlternateAddress($org_code, $account, $sequence_number, $record_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlternateAddressesApi->alternateAddressesGetAlternateAddress: ', $e->getMessage(), PHP_EOL;
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

# **alternateAddressesGetAlternateAddressList**
> \FomF\Ungerboeck\Client\Model\AlternateAddressesModel alternateAddressesGetAlternateAddressList($org_code, $search)

Basic - Search for alternate address using OData.

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
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->alternateAddressesGetAlternateAddressList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlternateAddressesApi->alternateAddressesGetAlternateAddressList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\AlternateAddressesModel**](../Model/AlternateAddressesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

