# FomF\Ungerboeck\Client\MailingListsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**mailingListsGetMailing**](MailingListsApi.md#mailingListsGetMailing) | **GET** /api/v1/MailingLists/{OrgCode}/{ID} | Get a mailing list by its parameters
[**mailingListsGetMailingList**](MailingListsApi.md#mailingListsGetMailingList) | **GET** /api/v1/MailingLists/{OrgCode} | Search for mailing list using OData.


# **mailingListsGetMailing**
> \FomF\Ungerboeck\Client\Model\MailingListsModel mailingListsGetMailing($org_code, $id)

Get a mailing list by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\MailingListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the mailing list.
$id = 56; // int | The ID of the mailing list.

try {
    $result = $apiInstance->mailingListsGetMailing($org_code, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailingListsApi->mailingListsGetMailing: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the mailing list. |
 **id** | **int**| The ID of the mailing list. |

### Return type

[**\FomF\Ungerboeck\Client\Model\MailingListsModel**](../Model/MailingListsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **mailingListsGetMailingList**
> \FomF\Ungerboeck\Client\Model\MailingListsModel[] mailingListsGetMailingList($org_code, $search)

Search for mailing list using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\MailingListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | Search string using OData with model properties for the filter, Page and Page_Size to navigate

try {
    $result = $apiInstance->mailingListsGetMailingList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailingListsApi->mailingListsGetMailingList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| Search string using OData with model properties for the filter, Page and Page_Size to navigate |

### Return type

[**\FomF\Ungerboeck\Client\Model\MailingListsModel[]**](../Model/MailingListsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

