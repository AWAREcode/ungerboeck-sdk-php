# FomF\Ungerboeck\Client\AccountMailingListsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountMailingListsDeleteAccountMailingList**](AccountMailingListsApi.md#accountMailingListsDeleteAccountMailingList) | **DELETE** /api/v1/AccountMailingLists/{OrgCode}/{ID} | Standard - Remove a Mailing list from an account
[**accountMailingListsGetAccountMailingList**](AccountMailingListsApi.md#accountMailingListsGetAccountMailingList) | **GET** /api/v1/AccountMailingLists/{OrgCode}/{ID} | Standard - Get a single account mailing list entry by its parameters
[**accountMailingListsGetAccountMailingListList**](AccountMailingListsApi.md#accountMailingListsGetAccountMailingListList) | **GET** /api/v1/AccountMailingLists/{OrgCode} | Standard - Search for account mailing list using OData.
[**accountMailingListsPostAccountMailingList**](AccountMailingListsApi.md#accountMailingListsPostAccountMailingList) | **POST** /api/v1/AccountMailingLists | Standard - Add a Mailing list to an account
[**accountMailingListsPutAccountMailingList**](AccountMailingListsApi.md#accountMailingListsPutAccountMailingList) | **PUT** /api/v1/AccountMailingLists/{OrgCode}/{Id} | Standard - Edit account Mailing list


# **accountMailingListsDeleteAccountMailingList**
> accountMailingListsDeleteAccountMailingList($org_code, $id)

Standard - Remove a Mailing list from an account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\AccountMailingListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The Organization Code of the Account Mailing list.
$id = 56; // int | The Id of the Account Mailing list.

try {
    $apiInstance->accountMailingListsDeleteAccountMailingList($org_code, $id);
} catch (Exception $e) {
    echo 'Exception when calling AccountMailingListsApi->accountMailingListsDeleteAccountMailingList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The Organization Code of the Account Mailing list. |
 **id** | **int**| The Id of the Account Mailing list. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountMailingListsGetAccountMailingList**
> \FomF\Ungerboeck\Client\Model\AccountMailingListsModel accountMailingListsGetAccountMailingList($org_code, $id)

Standard - Get a single account mailing list entry by its parameters

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
    $result = $apiInstance->accountMailingListsGetAccountMailingList($org_code, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountMailingListsApi->accountMailingListsGetAccountMailingList: ', $e->getMessage(), PHP_EOL;
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

# **accountMailingListsGetAccountMailingListList**
> \FomF\Ungerboeck\Client\Model\AccountMailingListsModel accountMailingListsGetAccountMailingListList($org_code, $search)

Standard - Search for account mailing list using OData.

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
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->accountMailingListsGetAccountMailingListList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountMailingListsApi->accountMailingListsGetAccountMailingListList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\AccountMailingListsModel**](../Model/AccountMailingListsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountMailingListsPostAccountMailingList**
> \FomF\Ungerboeck\Client\Model\AccountMailingListsModel accountMailingListsPostAccountMailingList($data)

Standard - Add a Mailing list to an account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\AccountMailingListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data = new \FomF\Ungerboeck\Client\Model\AccountMailingListsModel(); // \FomF\Ungerboeck\Client\Model\AccountMailingListsModel | (Include in the HTTP Body) a AccountMailingListsModel to add.

try {
    $result = $apiInstance->accountMailingListsPostAccountMailingList($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountMailingListsApi->accountMailingListsPostAccountMailingList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\FomF\Ungerboeck\Client\Model\AccountMailingListsModel**](../Model/AccountMailingListsModel.md)| (Include in the HTTP Body) a AccountMailingListsModel to add. |

### Return type

[**\FomF\Ungerboeck\Client\Model\AccountMailingListsModel**](../Model/AccountMailingListsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountMailingListsPutAccountMailingList**
> \FomF\Ungerboeck\Client\Model\AccountMailingListsModel accountMailingListsPutAccountMailingList($org_code, $id, $data)

Standard - Edit account Mailing list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\AccountMailingListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The Organization Code of the Account Mailing list.
$id = 56; // int | The Id of the Account Mailing list.
$data = new \FomF\Ungerboeck\Client\Model\AccountMailingListsModel(); // \FomF\Ungerboeck\Client\Model\AccountMailingListsModel | (Include in the HTTP Body) a AccountMailingListsModel to update

try {
    $result = $apiInstance->accountMailingListsPutAccountMailingList($org_code, $id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountMailingListsApi->accountMailingListsPutAccountMailingList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The Organization Code of the Account Mailing list. |
 **id** | **int**| The Id of the Account Mailing list. |
 **data** | [**\FomF\Ungerboeck\Client\Model\AccountMailingListsModel**](../Model/AccountMailingListsModel.md)| (Include in the HTTP Body) a AccountMailingListsModel to update |

### Return type

[**\FomF\Ungerboeck\Client\Model\AccountMailingListsModel**](../Model/AccountMailingListsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

