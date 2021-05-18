# FomF\Ungerboeck\Client\UsersApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**usersCopy**](UsersApi.md#usersCopy) | **PUT** /api/v1/Users/{SourceID}/Copy | Standard - Copy a User, optionally bringing along its sub items
[**usersGetUser**](UsersApi.md#usersGetUser) | **GET** /api/v1/Users/{ID} | Basic - Get a single user by its parameters
[**usersGetUserList**](UsersApi.md#usersGetUserList) | **GET** /api/v1/Users | Basic - Search for users using OData.  Note that this search endpoint does not use OrgCode.
[**usersPostUser**](UsersApi.md#usersPostUser) | **POST** /api/v1/Users | Standard - Add a user
[**usersPutUser**](UsersApi.md#usersPutUser) | **PUT** /api/v1/Users/{ID} | Standard - Edit a User
[**usersSendActivateUserEmail**](UsersApi.md#usersSendActivateUserEmail) | **PUT** /api/v1/Users/{ID}/SendActivateUserEmail | Standard - This will generate and send a set password message to the user&#39;s email address.  Once the user completes the process, they wil be able to log in to Ungerboeck.  Running this endpoint will not affect anything on the user data.


# **usersCopy**
> \FomF\Ungerboeck\Client\Model\UsersModel usersCopy($source_id, $data)

Standard - Copy a User, optionally bringing along its sub items

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$source_id = "source_id_example"; // string | The ID of the User to be copied.
$data = new \FomF\Ungerboeck\Client\Model\Users(); // \FomF\Ungerboeck\Client\Model\Users | (Include in the HTTP Body) A model of type Copy.Users for configuration.

try {
    $result = $apiInstance->usersCopy($source_id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersCopy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **source_id** | **string**| The ID of the User to be copied. |
 **data** | [**\FomF\Ungerboeck\Client\Model\Users**](../Model/Users.md)| (Include in the HTTP Body) A model of type Copy.Users for configuration. |

### Return type

[**\FomF\Ungerboeck\Client\Model\UsersModel**](../Model/UsersModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersGetUser**
> \FomF\Ungerboeck\Client\Model\UsersModel usersGetUser($id)

Basic - Get a single user by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The ID of the User.

try {
    $result = $apiInstance->usersGetUser($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersGetUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of the User. |

### Return type

[**\FomF\Ungerboeck\Client\Model\UsersModel**](../Model/UsersModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersGetUserList**
> \FomF\Ungerboeck\Client\Model\UsersModel usersGetUserList($search)

Basic - Search for users using OData.  Note that this search endpoint does not use OrgCode.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->usersGetUserList($search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersGetUserList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\UsersModel**](../Model/UsersModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersPostUser**
> \FomF\Ungerboeck\Client\Model\UsersModel usersPostUser($data)

Standard - Add a user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data = new \FomF\Ungerboeck\Client\Model\UsersModel(); // \FomF\Ungerboeck\Client\Model\UsersModel | (Include in the HTTP Body) A UsersModel to add.

try {
    $result = $apiInstance->usersPostUser($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersPostUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\FomF\Ungerboeck\Client\Model\UsersModel**](../Model/UsersModel.md)| (Include in the HTTP Body) A UsersModel to add. |

### Return type

[**\FomF\Ungerboeck\Client\Model\UsersModel**](../Model/UsersModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersPutUser**
> \FomF\Ungerboeck\Client\Model\UsersModel usersPutUser($id, $data)

Standard - Edit a User

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The ID of the User.
$data = new \FomF\Ungerboeck\Client\Model\UsersModel(); // \FomF\Ungerboeck\Client\Model\UsersModel | (Include in the HTTP Body) A UsersModel to edit.

try {
    $result = $apiInstance->usersPutUser($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersPutUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of the User. |
 **data** | [**\FomF\Ungerboeck\Client\Model\UsersModel**](../Model/UsersModel.md)| (Include in the HTTP Body) A UsersModel to edit. |

### Return type

[**\FomF\Ungerboeck\Client\Model\UsersModel**](../Model/UsersModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersSendActivateUserEmail**
> object usersSendActivateUserEmail($id)

Standard - This will generate and send a set password message to the user's email address.  Once the user completes the process, they wil be able to log in to Ungerboeck.  Running this endpoint will not affect anything on the user data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The ID of the User.

try {
    $result = $apiInstance->usersSendActivateUserEmail($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersSendActivateUserEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of the User. |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

