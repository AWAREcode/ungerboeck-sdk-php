# FomF\Ungerboeck\Client\DistributionsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**distributionsGetDistributions**](DistributionsApi.md#distributionsGetDistributions) | **GET** /api/v1/Distributions/{OrgCode}/{BulletinApplication}/{Meeting}/{Bulletin}/{DistributionEntrySeqNbr} | Get a bulletin distribution by its parameters
[**distributionsGetDistributionsList**](DistributionsApi.md#distributionsGetDistributionsList) | **GET** /api/v1/Distributions/{OrgCode} | Search for bulletin distribution using OData.


# **distributionsGetDistributions**
> \FomF\Ungerboeck\Client\Model\DistributionsModel distributionsGetDistributions($org_code, $bulletin_application, $meeting, $bulletin, $distribution_entry_seq_nbr)

Get a bulletin distribution by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\DistributionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the bulletin distribution.
$bulletin_application = "bulletin_application_example"; // string | The bulletin application of the bulletin distribution.
$meeting = 56; // int | The meeting ID of the bulletin distribution.
$bulletin = 56; // int | The bulletin sequence number of the bulletin distribution.
$distribution_entry_seq_nbr = 56; // int | The distribution entry sequence number of the bulletin distribution.

try {
    $result = $apiInstance->distributionsGetDistributions($org_code, $bulletin_application, $meeting, $bulletin, $distribution_entry_seq_nbr);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistributionsApi->distributionsGetDistributions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the bulletin distribution. |
 **bulletin_application** | **string**| The bulletin application of the bulletin distribution. |
 **meeting** | **int**| The meeting ID of the bulletin distribution. |
 **bulletin** | **int**| The bulletin sequence number of the bulletin distribution. |
 **distribution_entry_seq_nbr** | **int**| The distribution entry sequence number of the bulletin distribution. |

### Return type

[**\FomF\Ungerboeck\Client\Model\DistributionsModel**](../Model/DistributionsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **distributionsGetDistributionsList**
> \FomF\Ungerboeck\Client\Model\DistributionsModel[] distributionsGetDistributionsList($org_code, $search)

Search for bulletin distribution using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\DistributionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | Search string using OData with model properties for the filter, Page and Page_Size to navigate

try {
    $result = $apiInstance->distributionsGetDistributionsList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistributionsApi->distributionsGetDistributionsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| Search string using OData with model properties for the filter, Page and Page_Size to navigate |

### Return type

[**\FomF\Ungerboeck\Client\Model\DistributionsModel[]**](../Model/DistributionsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

