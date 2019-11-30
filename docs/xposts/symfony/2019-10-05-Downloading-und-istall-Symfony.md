---
title: "Downloading-und-install-Symfony"
last_modified_at: 2016-03-09T16:20:02-05:00
author_profile: false
keywords: Downloading-und-istall-Symfony ,
#permalink: /Jekyl_paginate/

categories:
  - Symfony
tags:
  - Symfony

excerpt: ""
header:
  overlay_image: /assets/images/Symfony.png
  overlay_filter: rgba(192,192,192,0.3)
  caption: "php: [**knows1**](https://knows1.com)"
  actions:

sidebar:
  nav: "Symfony"
---
{% include tocc icon="cog" title="Downloading-und-istall-Symfony" %}

# غير جاهز راجع هذا  في وقت لاحق

# 1. تنزيل Symfony

### المتطلبات .

1. Composer .

2. PHP 7.1.3 ++ .

3. Nginx or Apache

##### بعد تحقيق المتطلبات .

{% highlight php linenos %}
 $ composer create-project symfony/skeleton symfony_knows1
{% endhighlight %}

# Outbut

{% highlight php linenos %}

 What's next?


  * Run your application:
    1. Go to the project directory
    2. Create your code repository with the git init command
    3. Download the Symfony CLI at https://symfony.com/download to install a development web server

  * Read the documentation at https://symfony.com/doc

{% endhighlight %}

##### 2. الدخول لملف المشروع  .

{% highlight php linenos %}
cd symfony_knows1
{% endhighlight %}

##### 3. عرض ملفات المشروع  .

{% highlight php linenos %}
bin  
composer.json  
composer.lock  
config  
public  
src  
symfony.lock  
var  
vendor

{% endhighlight %}

##### 4. تشغيل المشروع في المتصفح .


{% highlight php linenos %}
 $ symfony server:start
{% endhighlight %}

# output

{% highlight php linenos %}
[OK] Web server listening on https://127.0.0.1:8000 (PHP CLI 7.3.4)
{% endhighlight %}


{% highlight php linenos %}
Welcome to
Symfony 4.3.4
Your application is now ready. You can start working on it at:
/home/knows1/symfony_knows1/

What's next?
Read the documentation to learn
How to create your first page in Symfony
{% endhighlight %}


#### 5. الأساسيات من خلال بناء صفحتنا الأولى .
  A. Route .

  B. Controller.

  C. Response.

> سوف نتعلم الأساسيات من خلال بناء صفحة .ة .

{% highlight php linenos %}
$ nano config/routes.yaml
{% endhighlight %}

>  تحديد عنوان صفحتنا الجديدة , هذا ما يسمى الطريق .




> Uncomment : controller

{% highlight php linenos %}
index:
    path: / يحدد عنوان
    controller: App\Controller\DefaultController::index // الوظيفة التي سيتم استدعاؤها كلما ذهب أي شخص إلى العنوان
// هذه الوظيفة غير موجودة ، لذلك دعونا ننشئها
{% endhighlight %}


#### 6. أنشاء وظيفة .

{% highlight php linenos %}
 nano src/Controller/DefaultController.php
{% endhighlight %}

#### 7. لصق التالي .

{% highlight php linenos %}
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class DefaultController
{
    public function index()
    {
        return new Response('Hello!');
    }
}
{% endhighlight %}

## عند محاولة تحميل الصفحة في المتصفح .
{% highlight php linenos %}
Expected to find class "App\Controller\DefaultController" in file "/home/knows1/symfony_knows1/src/Controller/DefaultController.php" while importing services from resource "../src/Controller", but it was not found! Check the namespace prefix used with the resource in /home/knows1/symfony_knows1/config/services.yaml (which is loaded in resource "/home/knows1/symfony_knows1/config/services.yaml").
{% endhighlight %}

## سوف نحاول التالي .
{% highlight php linenos %}
$ nano config/services.yaml
{% endhighlight %}
