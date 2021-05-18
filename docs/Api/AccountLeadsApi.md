# FomF\Ungerboeck\Client\AccountLeadsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountLeadsDeleteAccountLead**](AccountLeadsApi.md#accountLeadsDeleteAccountLead) | **DELETE** /api/v1/AccountLeads/{OrgCode}/{LeadId} | Standard - Delete Account lead entry
[**accountLeadsGetAccountLead**](AccountLeadsApi.md#accountLeadsGetAccountLead) | **GET** /api/v1/AccountLeads/{OrgCode}/{LeadId} | Standard - Get a single Account Lead entry by its parameters
[**accountLeadsGetAccountLeads**](AccountLeadsApi.md#accountLeadsGetAccountLeads) | **GET** /api/v1/AccountLeads/{OrgCode} | Standard - Search for Account lead using OData.
[**accountLeadsPostAccountLead**](AccountLeadsApi.md#accountLeadsPostAccountLead) | **POST** /api/v1/AccountLeads | Standard - Add new Account Lead entry
[**accountLeadsPutAccountLead**](AccountLeadsApi.md#accountLeadsPutAccountLead) | **PUT** /api/v1/AccountLeads/{OrgCode}/{LeadId} | Standard - Edit Account Lead entry


# **accountLeadsDeleteAccountLead**
> accountLeadsDeleteAccountLead($org_code, $lead_id)

Standard - Delete Account lead entry

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\AccountLeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$lead_id = 56; // int | Id of Account Lead

try {
    $apiInstance->accountLeadsDeleteAccountLead($org_code, $lead_id);
} catch (Exception $e) {
    echo 'Exception when calling AccountLeadsApi->accountLeadsDeleteAccountLead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **lead_id** | **int**| Id of Account Lead |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountLeadsGetAccountLead**
> \FomF\Ungerboeck\Client\Model\AccountLeadsModel accountLeadsGetAccountLead($org_code, $lead_id)

Standard - Get a single Account Lead entry by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\AccountLeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$lead_id = 56; // int | Id of Account lead entry.

try {
    $result = $apiInstance->accountLeadsGetAccountLead($org_code, $lead_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountLeadsApi->accountLeadsGetAccountLead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **lead_id** | **int**| Id of Account lead entry. |

### Return type

[**\FomF\Ungerboeck\Client\Model\AccountLeadsModel**](../Model/AccountLeadsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountLeadsGetAccountLeads**
> \FomF\Ungerboeck\Client\Model\AccountLeadsModel accountLeadsGetAccountLeads($org_code, $search)

Standard - Search for Account lead using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\AccountLeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->accountLeadsGetAccountLeads($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountLeadsApi->accountLeadsGetAccountLeads: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\AccountLeadsModel**](../Model/AccountLeadsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountLeadsPostAccountLead**
> \FomF\Ungerboeck\Client\Model\AccountLeadsModel accountLeadsPostAccountLead($data)

Standard - Add new Account Lead entry

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\AccountLeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data = new \FomF\Ungerboeck\Client\Model\AccountLeadsModel(); // \FomF\Ungerboeck\Client\Model\AccountLeadsModel | (Include in the HTTP Body) An AccountLeadsModel entry to add.

try {
    $result = $apiInstance->accountLeadsPostAccountLead($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountLeadsApi->accountLeadsPostAccountLead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\FomF\Ungerboeck\Client\Model\AccountLeadsModel**](../Model/AccountLeadsModel.md)| (Include in the HTTP Body) An AccountLeadsModel entry to add. |

### Return type

[**\FomF\Ungerboeck\Client\Model\AccountLeadsModel**](../Model/AccountLeadsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountLeadsPutAccountLead**
> \FomF\Ungerboeck\Client\Model\AccountLeadsModel accountLeadsPutAccountLead($org_code, $lead_id, $data)

Standard - Edit Account Lead entry

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\AccountLeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place.
$lead_id = "lead_id_example"; // string | Id of Account Lead.
$data = new \FomF\Ungerboeck\Client\Model\AccountLeadsModel(); // \FomF\Ungerboeck\Client\Model\AccountLeadsModel | (Include in the HTTP Body) AccountLeadsModel entry to edit.

try {
    $result = $apiInstance->accountLeadsPutAccountLead($org_code, $lead_id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountLeadsApi->accountLeadsPutAccountLead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place. |
 **lead_id** | **string**| Id of Account Lead. |
 **data** | [**\FomF\Ungerboeck\Client\Model\AccountLeadsModel**](../Model/AccountLeadsModel.md)| (Include in the HTTP Body) AccountLeadsModel entry to edit. |

### Return type

[**\FomF\Ungerboeck\Client\Model\AccountLeadsModel**](../Model/AccountLeadsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

