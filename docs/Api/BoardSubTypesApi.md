# Spinen\ConnectWise\Clients\Service\BoardSubTypesApi
Spinen&#39;s PHP ConnectWise Client for Service API generated by Swagger Code Generator.

All URIs are relative to *https://api-na.myconnectwise.net/v4_6_release/apis/3.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**serviceBoardsIdSubtypesCountGet**](BoardSubTypesApi.md#serviceBoardsIdSubtypesCountGet) | **GET** /service/boards/{id}/subtypes/count | 
[**serviceBoardsIdSubtypesGet**](BoardSubTypesApi.md#serviceBoardsIdSubtypesGet) | **GET** /service/boards/{id}/subtypes | 
[**serviceBoardsIdSubtypesPost**](BoardSubTypesApi.md#serviceBoardsIdSubtypesPost) | **POST** /service/boards/{id}/subtypes | 
[**serviceBoardsIdSubtypesSubtypeIdDelete**](BoardSubTypesApi.md#serviceBoardsIdSubtypesSubtypeIdDelete) | **DELETE** /service/boards/{id}/subtypes/{subtypeId} | 
[**serviceBoardsIdSubtypesSubtypeIdGet**](BoardSubTypesApi.md#serviceBoardsIdSubtypesSubtypeIdGet) | **GET** /service/boards/{id}/subtypes/{subtypeId} | 
[**serviceBoardsIdSubtypesSubtypeIdPatch**](BoardSubTypesApi.md#serviceBoardsIdSubtypesSubtypeIdPatch) | **PATCH** /service/boards/{id}/subtypes/{subtypeId} | 
[**serviceBoardsIdSubtypesSubtypeIdPut**](BoardSubTypesApi.md#serviceBoardsIdSubtypesSubtypeIdPut) | **PUT** /service/boards/{id}/subtypes/{subtypeId} | 


# **serviceBoardsIdSubtypesCountGet**
> \Spinen\ConnectWise\Clients\Service\Spinen\ConnectWise\Clients\Service\Model\Count serviceBoardsIdSubtypesCountGet($id, $conditions)



Get Subtypes Count

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Service\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Service\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Service\Api\BoardSubTypesApi();
$id = 56; // int | 
$conditions = "conditions_example"; // string | 

try {
    $result = $api_instance->serviceBoardsIdSubtypesCountGet($id, $conditions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardSubTypesApi->serviceBoardsIdSubtypesCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **conditions** | **string**|  | [optional]

### Return type

[**\Spinen\ConnectWise\Clients\Service\Spinen\ConnectWise\Clients\Service\Model\Count**](../Model/Count.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serviceBoardsIdSubtypesGet**
> \Spinen\ConnectWise\Clients\Service\Spinen\ConnectWise\Clients\Service\Model\SubType[] serviceBoardsIdSubtypesGet($id, $conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size)



Get Subtypes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Service\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Service\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Service\Api\BoardSubTypesApi();
$id = 56; // int | 
$conditions = "conditions_example"; // string | 
$order_by = "order_by_example"; // string | 
$childconditions = "childconditions_example"; // string | 
$customfieldconditions = "customfieldconditions_example"; // string | 
$page = 56; // int | 
$page_size = 56; // int | 

try {
    $result = $api_instance->serviceBoardsIdSubtypesGet($id, $conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardSubTypesApi->serviceBoardsIdSubtypesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **conditions** | **string**|  | [optional]
 **order_by** | **string**|  | [optional]
 **childconditions** | **string**|  | [optional]
 **customfieldconditions** | **string**|  | [optional]
 **page** | **int**|  | [optional]
 **page_size** | **int**|  | [optional]

### Return type

[**\Spinen\ConnectWise\Clients\Service\Spinen\ConnectWise\Clients\Service\Model\SubType[]**](../Model/SubType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serviceBoardsIdSubtypesPost**
> \Spinen\ConnectWise\Clients\Service\Spinen\ConnectWise\Clients\Service\Model\SubType serviceBoardsIdSubtypesPost($id, $sub_type)



Create Subtype

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Service\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Service\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Service\Api\BoardSubTypesApi();
$id = 56; // int | 
$sub_type = new \Spinen\ConnectWise\Clients\Service\Spinen\ConnectWise\Clients\Service\Model\SubType(); // \Spinen\ConnectWise\Clients\Service\Spinen\ConnectWise\Clients\Service\Model\SubType | 

try {
    $result = $api_instance->serviceBoardsIdSubtypesPost($id, $sub_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardSubTypesApi->serviceBoardsIdSubtypesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **sub_type** | [**\Spinen\ConnectWise\Clients\Service\Spinen\ConnectWise\Clients\Service\Model\SubType**](../Model/\Spinen\ConnectWise\Clients\Service\Spinen\ConnectWise\Clients\Service\Model\SubType.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Service\Spinen\ConnectWise\Clients\Service\Model\SubType**](../Model/SubType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serviceBoardsIdSubtypesSubtypeIdDelete**
> serviceBoardsIdSubtypesSubtypeIdDelete($id, $subtype_id)



Delete Subtype By Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Service\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Service\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Service\Api\BoardSubTypesApi();
$id = 56; // int | 
$subtype_id = 56; // int | 

try {
    $api_instance->serviceBoardsIdSubtypesSubtypeIdDelete($id, $subtype_id);
} catch (Exception $e) {
    echo 'Exception when calling BoardSubTypesApi->serviceBoardsIdSubtypesSubtypeIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **subtype_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serviceBoardsIdSubtypesSubtypeIdGet**
> \Spinen\ConnectWise\Clients\Service\Spinen\ConnectWise\Clients\Service\Model\SubType serviceBoardsIdSubtypesSubtypeIdGet($id, $subtype_id)



Get Subtype By Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Service\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Service\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Service\Api\BoardSubTypesApi();
$id = 56; // int | 
$subtype_id = 56; // int | 

try {
    $result = $api_instance->serviceBoardsIdSubtypesSubtypeIdGet($id, $subtype_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardSubTypesApi->serviceBoardsIdSubtypesSubtypeIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **subtype_id** | **int**|  |

### Return type

[**\Spinen\ConnectWise\Clients\Service\Spinen\ConnectWise\Clients\Service\Model\SubType**](../Model/SubType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serviceBoardsIdSubtypesSubtypeIdPatch**
> \Spinen\ConnectWise\Clients\Service\Spinen\ConnectWise\Clients\Service\Model\SubType serviceBoardsIdSubtypesSubtypeIdPatch($id, $subtype_id, $operations)



Update Subtype

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Service\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Service\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Service\Api\BoardSubTypesApi();
$id = 56; // int | 
$subtype_id = 56; // int | 
$operations = array(new PatchOperation()); // \Spinen\ConnectWise\Clients\Service\Spinen\ConnectWise\Clients\Service\Model\PatchOperation[] | 

try {
    $result = $api_instance->serviceBoardsIdSubtypesSubtypeIdPatch($id, $subtype_id, $operations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardSubTypesApi->serviceBoardsIdSubtypesSubtypeIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **subtype_id** | **int**|  |
 **operations** | [**\Spinen\ConnectWise\Clients\Service\Spinen\ConnectWise\Clients\Service\Model\PatchOperation[]**](../Model/PatchOperation.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Service\Spinen\ConnectWise\Clients\Service\Model\SubType**](../Model/SubType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serviceBoardsIdSubtypesSubtypeIdPut**
> \Spinen\ConnectWise\Clients\Service\Spinen\ConnectWise\Clients\Service\Model\SubType serviceBoardsIdSubtypesSubtypeIdPut($id, $subtype_id, $sub_type)



Replace Subtype

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Service\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Service\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Service\Api\BoardSubTypesApi();
$id = 56; // int | 
$subtype_id = 56; // int | 
$sub_type = new \Spinen\ConnectWise\Clients\Service\Spinen\ConnectWise\Clients\Service\Model\SubType(); // \Spinen\ConnectWise\Clients\Service\Spinen\ConnectWise\Clients\Service\Model\SubType | 

try {
    $result = $api_instance->serviceBoardsIdSubtypesSubtypeIdPut($id, $subtype_id, $sub_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardSubTypesApi->serviceBoardsIdSubtypesSubtypeIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **subtype_id** | **int**|  |
 **sub_type** | [**\Spinen\ConnectWise\Clients\Service\Spinen\ConnectWise\Clients\Service\Model\SubType**](../Model/\Spinen\ConnectWise\Clients\Service\Spinen\ConnectWise\Clients\Service\Model\SubType.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Service\Spinen\ConnectWise\Clients\Service\Model\SubType**](../Model/SubType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
