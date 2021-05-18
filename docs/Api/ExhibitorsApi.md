# FomF\Ungerboeck\Client\ExhibitorsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**exhibitorsGetExhibitor**](ExhibitorsApi.md#exhibitorsGetExhibitor) | **GET** /api/v1/Exhibitors/{OrgCode}/{ExhibitorID} | Standard - Get a single Exhibitor by its parameters
[**exhibitorsGetExhibitorList**](ExhibitorsApi.md#exhibitorsGetExhibitorList) | **GET** /api/v1/Exhibitors/{OrgCode} | Standard - Search for Exhibitors using OData.  Note, this will not return user fields.  Use the single GET endpoint to retrieve user fields.
[**exhibitorsPostExhibitor**](ExhibitorsApi.md#exhibitorsPostExhibitor) | **POST** /api/v1/Exhibitors | Standard - Add an Exhibitor
[**exhibitorsPutExhibitor**](ExhibitorsApi.md#exhibitorsPutExhibitor) | **PUT** /api/v1/Exhibitors/{OrgCode}/{ExhibitorID} | Standard - Edit an Exhibitor


# **exhibitorsGetExhibitor**
> \FomF\Ungerboeck\Client\Model\ExhibitorsModel exhibitorsGetExhibitor($org_code, $exhibitor_id)

Standard - Get a single Exhibitor by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\ExhibitorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the Exhibitor.
$exhibitor_id = 56; // int | The Exhibitor ID of the Exhibitor.

try {
    $result = $apiInstance->exhibitorsGetExhibitor($org_code, $exhibitor_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExhibitorsApi->exhibitorsGetExhibitor: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the Exhibitor. |
 **exhibitor_id** | **int**| The Exhibitor ID of the Exhibitor. |

### Return type

[**\FomF\Ungerboeck\Client\Model\ExhibitorsModel**](../Model/ExhibitorsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **exhibitorsGetExhibitorList**
> \FomF\Ungerboeck\Client\Model\ExhibitorsModel exhibitorsGetExhibitorList($org_code, $search)

Standard - Search for Exhibitors using OData.  Note, this will not return user fields.  Use the single GET endpoint to retrieve user fields.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\ExhibitorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->exhibitorsGetExhibitorList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExhibitorsApi->exhibitorsGetExhibitorList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\ExhibitorsModel**](../Model/ExhibitorsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **exhibitorsPostExhibitor**
> \FomF\Ungerboeck\Client\Model\ExhibitorsModel exhibitorsPostExhibitor($data)

Standard - Add an Exhibitor

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\ExhibitorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data = new \FomF\Ungerboeck\Client\Model\ExhibitorsModel(); // \FomF\Ungerboeck\Client\Model\ExhibitorsModel | (Include in the HTTP Body) An ExhibitorsModel entry to add.

try {
    $result = $apiInstance->exhibitorsPostExhibitor($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExhibitorsApi->exhibitorsPostExhibitor: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\FomF\Ungerboeck\Client\Model\ExhibitorsModel**](../Model/ExhibitorsModel.md)| (Include in the HTTP Body) An ExhibitorsModel entry to add. |

### Return type

[**\FomF\Ungerboeck\Client\Model\ExhibitorsModel**](../Model/ExhibitorsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **exhibitorsPutExhibitor**
> \FomF\Ungerboeck\Client\Model\ExhibitorsModel exhibitorsPutExhibitor($org_code, $exhibitor_id, $data)

Standard - Edit an Exhibitor

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\ExhibitorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the Exhibitor.
$exhibitor_id = 56; // int | The ID of the Exhibitor.
$data = new \FomF\Ungerboeck\Client\Model\ExhibitorsModel(); // \FomF\Ungerboeck\Client\Model\ExhibitorsModel | (Include in the HTTP Body) An ExhibitorsModel entry to edit.

try {
    $result = $apiInstance->exhibitorsPutExhibitor($org_code, $exhibitor_id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExhibitorsApi->exhibitorsPutExhibitor: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the Exhibitor. |
 **exhibitor_id** | **int**| The ID of the Exhibitor. |
 **data** | [**\FomF\Ungerboeck\Client\Model\ExhibitorsModel**](../Model/ExhibitorsModel.md)| (Include in the HTTP Body) An ExhibitorsModel entry to edit. |

### Return type

[**\FomF\Ungerboeck\Client\Model\ExhibitorsModel**](../Model/ExhibitorsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

