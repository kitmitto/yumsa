---
title: "Misc-php-Functions"
last_modified_at: 2016-03-09T16:20:02-05:00
author_profile: false
keywords: Objects php ., PHP Arrays , PHP Sorting Arrays ,PHP Loops , PHP Introduction, Misc. Functions ,
#permalink: /Jekyl_paginate/

categories:
  - php
tags:
  - php

excerpt: ""
header:
  overlay_image: /assets/images/php_knows1.jpg
  overlay_filter: rgba(192,192,192,0.3)
  caption: "php: [**knows1**](https://knows1.com)"
  actions:

sidebar:
  nav: "php"
---
{% include tocc icon="cog" title="Misc-php-Functions" %}

# Misc. Functions

#### ملاحظة : هناك الكثير من الوظائف التي سوف تضاف إلى هذه البحث في أوقات مختلفة .
{: .notice--danger}

> define = الثوابت

يشبه المتغير بدون $ , و من المعلوم أنه لا يمكن تغيير قيمة الثابت بعد ضبطه و يمكن الوصول إلى الثوابت بدون أعتبار النطاق .



1. الاسم .
2. القيمة .
3. true <=> false .


{% highlight php linenos %}
define(N,V,T or F)
{% endhighlight %}

{% highlight php linenos %}
<?php
define("KNOWS1", "Hello world.");
echo KNOWS1."<br>"; // outputs "Hello world."
echo knows1; // outputs "knows1"
?>
{% endhighlight %}

# define true

{% highlight php linenos %}
<?php
define("KNOWS1", "Hello knows2.", true);
echo KNOWS1; // outputs = Hello knows2.
echo knows1; // outputs = Hello knows2.
?>
{% endhighlight %}

# define array

{% highlight php linenos %}
<?php

define ("MOST", array(
    array(
        "name" => "knows1",
        "phone" => "123456",
        "Age" => "22",
        "School" => "my School",
        "Class" => "12",
    ),
        array(
        "name" => "knows2",
        "phone" => "1234567",
        "Age" => "22",
        "School" => "my Schoolo",
        "Class" => "11",
    ),

    array(
        "name" => "knows3",
        "phone" => "1234568",
        "Age" => "22",
        "School" => "my Schooloo",
        "Class" => "10",
    ),

),);

// ***
echo "My name is: " . MOST[2]["name"];

echo "My phone number my friend knows2 is: " . MOST[1]["phone"];
?>
{% endhighlight %}


{% highlight php linenos %}
<?php
define('KNOWS1', array(
    'Ich',
    'bin knows1 !!',
    '<h1>und du</h1>'
),);
echo "<h1>ich bin knows1</h1>".KNOWS1[2]; // outputs "cat"
?>
{% endhighlight %}
