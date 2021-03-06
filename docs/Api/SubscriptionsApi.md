# SubscriptionsApi

All URIs are relative to *https://api.kinow.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getDisabledSubscriptions**](#getDisabledSubscriptions) | **GET** /videos/{video_id}/disabled-subscriptions | 
[**getProductSubscription**](#getProductSubscription) | **GET** /products/{product_id}/subscription | 
[**getSubscription**](#getSubscription) | **GET** /subscriptions/{subscription_id} | 
[**getSubscriptionCategories**](#getSubscriptionCategories) | **GET** /subscriptions/{subscription_id}/categories | 
[**getSubscriptionCoverImage**](#getSubscriptionCoverImage) | **GET** /subscriptions/{subscription_id}/cover | 
[**getSubscriptions**](#getSubscriptions) | **GET** /subscriptions | 
[**uploadSubscriptionCover**](#uploadSubscriptionCover) | **POST** /subscriptions/{subscription_id}/cover | 


## **getDisabledSubscriptions**
> \Kaemo\Client\Model\Subscriptions getDisabledSubscriptions($video_id, $page, $per_page)



Get disabled subscriptions list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\SubscriptionsApi();
$video_id = 789; // int | Video ID to fetch
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getDisabledSubscriptions($video_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->getDisabledSubscriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **video_id** | **int**| Video ID to fetch |
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]

### Return type

[**\Kaemo\Client\Model\Subscriptions**](#Subscriptions)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getProductSubscription**
> \Kaemo\Client\Model\Subscription getProductSubscription($product_id)



Get Subscription linked to a Product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\SubscriptionsApi();
$product_id = 789; // int | Product ID to fetch

try {
    $result = $api_instance->getProductSubscription($product_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->getProductSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| Product ID to fetch |

### Return type

[**\Kaemo\Client\Model\Subscription**](#Subscription)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getSubscription**
> \Kaemo\Client\Model\Subscription getSubscription($subscription_id)



Get Subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\SubscriptionsApi();
$subscription_id = 789; // int | Product ID to fetch

try {
    $result = $api_instance->getSubscription($subscription_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->getSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **int**| Product ID to fetch |

### Return type

[**\Kaemo\Client\Model\Subscription**](#Subscription)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getSubscriptionCategories**
> \Kaemo\Client\Model\Categories getSubscriptionCategories($subscription_id, $page, $per_page, $sort_by, $sort_direction)



Get categories list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\SubscriptionsApi();
$subscription_id = 789; // int | 
$page = 789; // int | 
$per_page = 789; // int | 
$sort_by = "sort_by_example"; // string | Sort by this attribute (id by default)
$sort_direction = "sort_direction_example"; // string | Sorting direction (asc by default)

try {
    $result = $api_instance->getSubscriptionCategories($subscription_id, $page, $per_page, $sort_by, $sort_direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->getSubscriptionCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **int**|  |
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]
 **sort_by** | **string**| Sort by this attribute (id by default) | [optional]
 **sort_direction** | **string**| Sorting direction (asc by default) | [optional]

### Return type

[**\Kaemo\Client\Model\Categories**](#Categories)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getSubscriptionCoverImage**
> \Kaemo\Client\Model\Image getSubscriptionCoverImage($subscription_id)



Get cover image of a subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\SubscriptionsApi();
$subscription_id = 789; // int | Subscription ID to fetch

try {
    $result = $api_instance->getSubscriptionCoverImage($subscription_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->getSubscriptionCoverImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **int**| Subscription ID to fetch |

### Return type

[**\Kaemo\Client\Model\Image**](#Image)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getSubscriptions**
> \Kaemo\Client\Model\Subscriptions getSubscriptions($page, $per_page)



Get Subscriptions list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\SubscriptionsApi();
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getSubscriptions($page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->getSubscriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]

### Return type

[**\Kaemo\Client\Model\Subscriptions**](#Subscriptions)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **uploadSubscriptionCover**
> \Kaemo\Client\Model\Image uploadSubscriptionCover($subscription_id, $file, $hash, $hash_algorithm)



Upload subscription cover

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\SubscriptionsApi();
$subscription_id = 3.4; // float | Subscription ID to fetch
$file = "/path/to/file.txt"; // \SplFileObject | 
$hash = "hash_example"; // string | 
$hash_algorithm = "hash_algorithm_example"; // string | Hash algorithm to check the hash file (default value is: sha256)

try {
    $result = $api_instance->uploadSubscriptionCover($subscription_id, $file, $hash, $hash_algorithm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->uploadSubscriptionCover: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **float**| Subscription ID to fetch |
 **file** | **\SplFileObject**|  |
 **hash** | **string**|  |
 **hash_algorithm** | **string**| Hash algorithm to check the hash file (default value is: sha256) | [optional]

### Return type

[**\Kaemo\Client\Model\Image**](#Image)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: Not defined

