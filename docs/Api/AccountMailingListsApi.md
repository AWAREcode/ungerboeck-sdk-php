# FomF\Ungerboeck\Client\AccountMailingListsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountMailingListsGetAccountMailing**](AccountMailingListsApi.md#accountMailingListsGetAccountMailing) | **GET** /api/v1/AccountMailingLists/{OrgCode}/{ID} | Get a account mailing list by its parameters
[**accountMailingListsGetAccountMailingList**](AccountMailingListsApi.md#accountMailingListsGetAccountMailingList) | **GET** /api/v1/AccountMailingLists/{OrgCode} | Search for account mailing list using OData.


# **accountMailingListsGetAccountMailing**
> \FomF\Ungerboeck\Client\Model\AccountMailingListsModel accountMailingListsGetAccountMailing($org_code, $id)

Get a account mailing list by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\AccountMailingListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the account mailing list.
$id = 56; // int | The ID of the account mailing list.

try {
    $result = $apiInstance->accountMailingListsGetAccountMailing($org_code, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountMailingListsApi->accountMailingListsGetAccountMailing: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the account mailing list. |
 **id** | **int**| The ID of the account mailing list. |

### Return type

[**\FomF\Ungerboeck\Client\Model\AccountMailingListsModel**](../Model/AccountMailingListsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountMailingListsGetAccountMailingList**
> \FomF\Ungerboeck\Client\Model\AccountMailingListsModel[] accountMailingListsGetAccountMailingList($org_code, $search)

Search for account mailing list using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\AccountMailingListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | Search string using OData with model properties for the filter, Page and Page_Size to navigate

try {
    $result = $apiInstance->accountMailingListsGetAccountMailingList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountMailingListsApi->accountMailingListsGetAccountMailingList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| Search string using OData with model properties for the filter, Page and Page_Size to navigate |

### Return type

[**\FomF\Ungerboeck\Client\Model\AccountMailingListsModel[]**](../Model/AccountMailingListsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

