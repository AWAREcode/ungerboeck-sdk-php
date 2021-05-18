# FomF\Ungerboeck\Client\UserRolesApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**userRolesDeleteUserRole**](UserRolesApi.md#userRolesDeleteUserRole) | **DELETE** /api/v1/UserRoles/{User}/{Role} | Standard - Delete a Role from a User
[**userRolesGetUserRole**](UserRolesApi.md#userRolesGetUserRole) | **GET** /api/v1/UserRoles/{User}/{Role} | Basic - Get a single UserRole entry by its parameters
[**userRolesGetUserRoleList**](UserRolesApi.md#userRolesGetUserRoleList) | **GET** /api/v1/UserRoles | Basic - Search for UserRoles using OData.  Note that this search endpoint does not use OrgCode.
[**userRolesPostUserRole**](UserRolesApi.md#userRolesPostUserRole) | **POST** /api/v1/UserRoles | Standard - Add a role to a user.  You can include a comma delimited list of User ID&#39;s, Role ID&#39;s, but not both.


# **userRolesDeleteUserRole**
> string userRolesDeleteUserRole($user, $role)

Standard - Delete a Role from a User

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\UserRolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user = "user_example"; // string | 
$role = "role_example"; // string | 

try {
    $result = $apiInstance->userRolesDeleteUserRole($user, $role);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserRolesApi->userRolesDeleteUserRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user** | **string**|  |
 **role** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userRolesGetUserRole**
> \FomF\Ungerboeck\Client\Model\UserRolesModel userRolesGetUserRole($user, $role)

Basic - Get a single UserRole entry by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\UserRolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user = "user_example"; // string | 
$role = "role_example"; // string | 

try {
    $result = $apiInstance->userRolesGetUserRole($user, $role);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserRolesApi->userRolesGetUserRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user** | **string**|  |
 **role** | **string**|  |

### Return type

[**\FomF\Ungerboeck\Client\Model\UserRolesModel**](../Model/UserRolesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userRolesGetUserRoleList**
> \FomF\Ungerboeck\Client\Model\UserRolesModel userRolesGetUserRoleList($search)

Basic - Search for UserRoles using OData.  Note that this search endpoint does not use OrgCode.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\UserRolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->userRolesGetUserRoleList($search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserRolesApi->userRolesGetUserRoleList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\UserRolesModel**](../Model/UserRolesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userRolesPostUserRole**
> \FomF\Ungerboeck\Client\Model\UserRolesModel userRolesPostUserRole($data)

Standard - Add a role to a user.  You can include a comma delimited list of User ID's, Role ID's, but not both.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\UserRolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data = new \FomF\Ungerboeck\Client\Model\UserRolesModel(); // \FomF\Ungerboeck\Client\Model\UserRolesModel | (Include in the HTTP Body) A UserRolesModel to add.

try {
    $result = $apiInstance->userRolesPostUserRole($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserRolesApi->userRolesPostUserRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\FomF\Ungerboeck\Client\Model\UserRolesModel**](../Model/UserRolesModel.md)| (Include in the HTTP Body) A UserRolesModel to add. |

### Return type

[**\FomF\Ungerboeck\Client\Model\UserRolesModel**](../Model/UserRolesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

