# FomF\Ungerboeck\Client\RolesApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**rolesGetRole**](RolesApi.md#rolesGetRole) | **GET** /api/v1/Roles/{ID} | Basic - Get a single Role by its parameters
[**rolesGetRolesList**](RolesApi.md#rolesGetRolesList) | **GET** /api/v1/Roles | Basic - Search for Roles using OData.  Note that this search endpoint does not use OrgCode.
[**rolesPostRole**](RolesApi.md#rolesPostRole) | **POST** /api/v1/Roles | Standard - Add a Role
[**rolesPutRole**](RolesApi.md#rolesPutRole) | **PUT** /api/v1/Roles/{ID} | Standard - Edit a Role


# **rolesGetRole**
> \FomF\Ungerboeck\Client\Model\RolesModel rolesGetRole($id)

Basic - Get a single Role by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The ID of the Role.

try {
    $result = $apiInstance->rolesGetRole($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->rolesGetRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of the Role. |

### Return type

[**\FomF\Ungerboeck\Client\Model\RolesModel**](../Model/RolesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **rolesGetRolesList**
> \FomF\Ungerboeck\Client\Model\RolesModel rolesGetRolesList($search)

Basic - Search for Roles using OData.  Note that this search endpoint does not use OrgCode.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->rolesGetRolesList($search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->rolesGetRolesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\RolesModel**](../Model/RolesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **rolesPostRole**
> \FomF\Ungerboeck\Client\Model\RolesModel rolesPostRole($data)

Standard - Add a Role

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data = new \FomF\Ungerboeck\Client\Model\RolesModel(); // \FomF\Ungerboeck\Client\Model\RolesModel | (Include in the HTTP Body) A RolesModel to add.

try {
    $result = $apiInstance->rolesPostRole($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->rolesPostRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\FomF\Ungerboeck\Client\Model\RolesModel**](../Model/RolesModel.md)| (Include in the HTTP Body) A RolesModel to add. |

### Return type

[**\FomF\Ungerboeck\Client\Model\RolesModel**](../Model/RolesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **rolesPutRole**
> \FomF\Ungerboeck\Client\Model\RolesModel rolesPutRole($id, $data)

Standard - Edit a Role

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The ID of the Role.
$data = new \FomF\Ungerboeck\Client\Model\RolesModel(); // \FomF\Ungerboeck\Client\Model\RolesModel | (Include in the HTTP Body) A RolesModel to edit.

try {
    $result = $apiInstance->rolesPutRole($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->rolesPutRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of the Role. |
 **data** | [**\FomF\Ungerboeck\Client\Model\RolesModel**](../Model/RolesModel.md)| (Include in the HTTP Body) A RolesModel to edit. |

### Return type

[**\FomF\Ungerboeck\Client\Model\RolesModel**](../Model/RolesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

