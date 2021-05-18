# FomF\Ungerboeck\Client\RegistrationPreferenceTypesApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**registrationPreferenceTypesDeleteRegistrationPreferenceType**](RegistrationPreferenceTypesApi.md#registrationPreferenceTypesDeleteRegistrationPreferenceType) | **DELETE** /api/v1/RegistrationPreferenceTypes/{RegistrationPreferenceID} | Standard - Delete a registration preference type
[**registrationPreferenceTypesGetRegistrationPreferenceType**](RegistrationPreferenceTypesApi.md#registrationPreferenceTypesGetRegistrationPreferenceType) | **GET** /api/v1/RegistrationPreferenceTypes/{RegistrationPreferenceID} | Standard - Get a single registration preference type by its parameters
[**registrationPreferenceTypesGetRegistrationPreferenceTypeList**](RegistrationPreferenceTypesApi.md#registrationPreferenceTypesGetRegistrationPreferenceTypeList) | **GET** /api/v1/RegistrationPreferenceTypes | Standard - Search for registration preference type using OData.  Note, this will not return user fields.  Use the single GET endpoint to retrieve user fields.
[**registrationPreferenceTypesPostRegistrationPreferenceType**](RegistrationPreferenceTypesApi.md#registrationPreferenceTypesPostRegistrationPreferenceType) | **POST** /api/v1/RegistrationPreferenceTypes | Standard - Add a registration preference type
[**registrationPreferenceTypesPutRegistrationPreferenceType**](RegistrationPreferenceTypesApi.md#registrationPreferenceTypesPutRegistrationPreferenceType) | **PUT** /api/v1/RegistrationPreferenceTypes/{RegistrationPreferenceID} | Standard - Edit a registration preference type


# **registrationPreferenceTypesDeleteRegistrationPreferenceType**
> registrationPreferenceTypesDeleteRegistrationPreferenceType($registration_preference_id)

Standard - Delete a registration preference type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\RegistrationPreferenceTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$registration_preference_id = 56; // int | Registration preference type id

try {
    $apiInstance->registrationPreferenceTypesDeleteRegistrationPreferenceType($registration_preference_id);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationPreferenceTypesApi->registrationPreferenceTypesDeleteRegistrationPreferenceType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **registration_preference_id** | **int**| Registration preference type id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **registrationPreferenceTypesGetRegistrationPreferenceType**
> \FomF\Ungerboeck\Client\Model\RegistrationPreferenceTypesModel registrationPreferenceTypesGetRegistrationPreferenceType($registration_preference_id)

Standard - Get a single registration preference type by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\RegistrationPreferenceTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$registration_preference_id = 56; // int | Registration preference type id

try {
    $result = $apiInstance->registrationPreferenceTypesGetRegistrationPreferenceType($registration_preference_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationPreferenceTypesApi->registrationPreferenceTypesGetRegistrationPreferenceType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **registration_preference_id** | **int**| Registration preference type id |

### Return type

[**\FomF\Ungerboeck\Client\Model\RegistrationPreferenceTypesModel**](../Model/RegistrationPreferenceTypesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **registrationPreferenceTypesGetRegistrationPreferenceTypeList**
> \FomF\Ungerboeck\Client\Model\RegistrationPreferenceTypesModel registrationPreferenceTypesGetRegistrationPreferenceTypeList($search)

Standard - Search for registration preference type using OData.  Note, this will not return user fields.  Use the single GET endpoint to retrieve user fields.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\RegistrationPreferenceTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->registrationPreferenceTypesGetRegistrationPreferenceTypeList($search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationPreferenceTypesApi->registrationPreferenceTypesGetRegistrationPreferenceTypeList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\RegistrationPreferenceTypesModel**](../Model/RegistrationPreferenceTypesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **registrationPreferenceTypesPostRegistrationPreferenceType**
> \FomF\Ungerboeck\Client\Model\RegistrationPreferenceTypesModel registrationPreferenceTypesPostRegistrationPreferenceType($data)

Standard - Add a registration preference type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\RegistrationPreferenceTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data = new \FomF\Ungerboeck\Client\Model\RegistrationPreferenceTypesModel(); // \FomF\Ungerboeck\Client\Model\RegistrationPreferenceTypesModel | A RegistrationPreferenceTypesModel entry to add.

try {
    $result = $apiInstance->registrationPreferenceTypesPostRegistrationPreferenceType($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationPreferenceTypesApi->registrationPreferenceTypesPostRegistrationPreferenceType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\FomF\Ungerboeck\Client\Model\RegistrationPreferenceTypesModel**](../Model/RegistrationPreferenceTypesModel.md)| A RegistrationPreferenceTypesModel entry to add. |

### Return type

[**\FomF\Ungerboeck\Client\Model\RegistrationPreferenceTypesModel**](../Model/RegistrationPreferenceTypesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **registrationPreferenceTypesPutRegistrationPreferenceType**
> \FomF\Ungerboeck\Client\Model\RegistrationPreferenceTypesModel registrationPreferenceTypesPutRegistrationPreferenceType($registration_preference_id, $data)

Standard - Edit a registration preference type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\RegistrationPreferenceTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$registration_preference_id = 56; // int | Registration preference type id
$data = new \FomF\Ungerboeck\Client\Model\RegistrationPreferenceTypesModel(); // \FomF\Ungerboeck\Client\Model\RegistrationPreferenceTypesModel | A RegistrationPreferenceTypesModel entry to edit.

try {
    $result = $apiInstance->registrationPreferenceTypesPutRegistrationPreferenceType($registration_preference_id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationPreferenceTypesApi->registrationPreferenceTypesPutRegistrationPreferenceType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **registration_preference_id** | **int**| Registration preference type id |
 **data** | [**\FomF\Ungerboeck\Client\Model\RegistrationPreferenceTypesModel**](../Model/RegistrationPreferenceTypesModel.md)| A RegistrationPreferenceTypesModel entry to edit. |

### Return type

[**\FomF\Ungerboeck\Client\Model\RegistrationPreferenceTypesModel**](../Model/RegistrationPreferenceTypesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

