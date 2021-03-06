# BlogPagesApi

All URIs are relative to *https://api.kinow.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getBlogPage**](#getBlogPage) | **GET** /blog-pages/{blog_page_id} | 
[**getBlogPages**](#getBlogPages) | **GET** /blog-pages | 


## **getBlogPage**
> \Kaemo\Client\Model\BlogPage getBlogPage($blog_page_id)



Get blog page

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\BlogPagesApi();
$blog_page_id = 789; // int | 

try {
    $result = $api_instance->getBlogPage($blog_page_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlogPagesApi->getBlogPage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **blog_page_id** | **int**|  |

### Return type

[**\Kaemo\Client\Model\BlogPage**](#BlogPage)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getBlogPages**
> \Kaemo\Client\Model\BlogPageLists getBlogPages($page, $per_page, $filters, $sort_by, $sort_direction)



Get blog pages

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\BlogPagesApi();
$page = 789; // int | 
$per_page = 789; // int | 
$filters = "filters_example"; // string | ```  name[value]=string&name[operator]=contains&date_add[value]=string&date_add[operator]=lt  _______________    {  \"name\": {  \"value\": \"string\",  \"operator\": \"contains\"  },  \"date_add\": {  \"value\": \"string\",  \"operator\": \"lt\"  }  } ```  Operator can be strict, contains, gt or lt.
$sort_by = "sort_by_example"; // string | Sort by this attribute (id by default)
$sort_direction = "sort_direction_example"; // string | Sorting direction (asc by default)

try {
    $result = $api_instance->getBlogPages($page, $per_page, $filters, $sort_by, $sort_direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlogPagesApi->getBlogPages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]
 **filters** | **string**| &#x60;&#x60;&#x60;  name[value]&#x3D;string&amp;name[operator]&#x3D;contains&amp;date_add[value]&#x3D;string&amp;date_add[operator]&#x3D;lt  _______________    {  \&quot;name\&quot;: {  \&quot;value\&quot;: \&quot;string\&quot;,  \&quot;operator\&quot;: \&quot;contains\&quot;  },  \&quot;date_add\&quot;: {  \&quot;value\&quot;: \&quot;string\&quot;,  \&quot;operator\&quot;: \&quot;lt\&quot;  }  } &#x60;&#x60;&#x60;  Operator can be strict, contains, gt or lt. | [optional]
 **sort_by** | **string**| Sort by this attribute (id by default) | [optional]
 **sort_direction** | **string**| Sorting direction (asc by default) | [optional]

### Return type

[**\Kaemo\Client\Model\BlogPageLists**](#BlogPageLists)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

