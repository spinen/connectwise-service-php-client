# Spinen\ConnectWise\Clients\Service\LocationsApi
Spinen&#39;s PHP ConnectWise Client for Service API generated by Swagger Code Generator.

All URIs are relative to *https://api-na.myconnectwise.net/v4_6_release/apis/3.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**serviceLocationsCountGet**](LocationsApi.md#serviceLocationsCountGet) | **GET** /service/locations/count | 
[**serviceLocationsGet**](LocationsApi.md#serviceLocationsGet) | **GET** /service/locations | 
[**serviceLocationsIdDelete**](LocationsApi.md#serviceLocationsIdDelete) | **DELETE** /service/locations/{id} | 
[**serviceLocationsIdGet**](LocationsApi.md#serviceLocationsIdGet) | **GET** /service/locations/{id} | 
[**serviceLocationsIdPatch**](LocationsApi.md#serviceLocationsIdPatch) | **PATCH** /service/locations/{id} | 
[**serviceLocationsIdPut**](LocationsApi.md#serviceLocationsIdPut) | **PUT** /service/locations/{id} | 
[**serviceLocationsPost**](LocationsApi.md#serviceLocationsPost) | **POST** /service/locations | 


# **serviceLocationsCountGet**
> \Spinen\ConnectWise\Clients\Service\Model\Count serviceLocationsCountGet($conditions)



Create Locations Count

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Service\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Service\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Service\Api\LocationsApi();
$conditions = "conditions_example"; // string | 

try {
    $result = $api_instance->serviceLocationsCountGet($conditions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->serviceLocationsCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conditions** | **string**|  | [optional]

### Return type

[**\Spinen\ConnectWise\Clients\Service\Model\Count**](../Model/Count.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serviceLocationsGet**
> \Spinen\ConnectWise\Clients\Service\Model\Location[] serviceLocationsGet($conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size)



Get Locations

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Service\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Service\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Service\Api\LocationsApi();
$conditions = "conditions_example"; // string | 
$order_by = "order_by_example"; // string | 
$childconditions = "childconditions_example"; // string | 
$customfieldconditions = "customfieldconditions_example"; // string | 
$page = 56; // int | 
$page_size = 56; // int | 

try {
    $result = $api_instance->serviceLocationsGet($conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->serviceLocationsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conditions** | **string**|  | [optional]
 **order_by** | **string**|  | [optional]
 **childconditions** | **string**|  | [optional]
 **customfieldconditions** | **string**|  | [optional]
 **page** | **int**|  | [optional]
 **page_size** | **int**|  | [optional]

### Return type

[**\Spinen\ConnectWise\Clients\Service\Model\Location[]**](../Model/Location.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serviceLocationsIdDelete**
> serviceLocationsIdDelete($id)



Delete Location By Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Service\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Service\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Service\Api\LocationsApi();
$id = 56; // int | 

try {
    $api_instance->serviceLocationsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->serviceLocationsIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serviceLocationsIdGet**
> \Spinen\ConnectWise\Clients\Service\Model\Location serviceLocationsIdGet($id)



Get Location By Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Service\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Service\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Service\Api\LocationsApi();
$id = 56; // int | 

try {
    $result = $api_instance->serviceLocationsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->serviceLocationsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Spinen\ConnectWise\Clients\Service\Model\Location**](../Model/Location.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serviceLocationsIdPatch**
> \Spinen\ConnectWise\Clients\Service\Model\Location serviceLocationsIdPatch($id, $operations)



Update Location

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Service\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Service\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Service\Api\LocationsApi();
$id = 56; // int | 
$operations = array(new PatchOperation()); // \Spinen\ConnectWise\Clients\Service\Model\PatchOperation[] | 

try {
    $result = $api_instance->serviceLocationsIdPatch($id, $operations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->serviceLocationsIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **operations** | [**\Spinen\ConnectWise\Clients\Service\Model\PatchOperation[]**](../Model/PatchOperation.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Service\Model\Location**](../Model/Location.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serviceLocationsIdPut**
> \Spinen\ConnectWise\Clients\Service\Model\Location serviceLocationsIdPut($id, $location)



Replace Location

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Service\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Service\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Service\Api\LocationsApi();
$id = 56; // int | 
$location = new \Spinen\ConnectWise\Clients\Service\Model\Location(); // \Spinen\ConnectWise\Clients\Service\Model\Location | 

try {
    $result = $api_instance->serviceLocationsIdPut($id, $location);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->serviceLocationsIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **location** | [**\Spinen\ConnectWise\Clients\Service\Model\Location**](../Model/\Spinen\ConnectWise\Clients\Service\Model\Location.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Service\Model\Location**](../Model/Location.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serviceLocationsPost**
> \Spinen\ConnectWise\Clients\Service\Model\Location serviceLocationsPost($location)



Create Location

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Service\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Service\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Service\Api\LocationsApi();
$location = new \Spinen\ConnectWise\Clients\Service\Model\Location(); // \Spinen\ConnectWise\Clients\Service\Model\Location | 

try {
    $result = $api_instance->serviceLocationsPost($location);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->serviceLocationsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location** | [**\Spinen\ConnectWise\Clients\Service\Model\Location**](../Model/\Spinen\ConnectWise\Clients\Service\Model\Location.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Service\Model\Location**](../Model/Location.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

