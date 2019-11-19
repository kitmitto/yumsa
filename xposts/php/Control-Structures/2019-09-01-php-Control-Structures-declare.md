---
title: "Control Structures #declare"
last_modified_at: 2016-03-09T16:20:02-05:00
author_profile: false
keywords: Objects php , PHP Arrays , PHP Sorting Arrays, PHP GET + POST + REQUEST,  Control Structures if , Control Structures else  endif , (while),  endwhile, , ,for, endfor, ,foreach, endforeach, switch, endswitch ,
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
  nav: "php-Control"
---
{% include tocc icon="cog" title="Control Structures declare" %}



***************************************
# declare
***************************************

أعلن : تنفيذ نوع محدد من التعليمات ,


declare (تعليمات)
    code
{: .notice--danger}

> 1. تسمح (تعليمات) بضبط سلوك (الكود) .

***************************************
###  يوجد ثلاثة توجيهات هي التالي :
{: .notice--danger}
***************************************
يمكن إعطاء القيم الحرفية فقط

1.  ticks directive .

2. encoding directive .

3-  strict_types .

################################

> يمكن السيطرة على أنواع البيانات 1- للمعلمات و 2- قيم الإرجاع

{% highlight php linenos %}

<?php
$a = " Hallo ich bin knows1 und bin ich String";
$b = 1; // Hallo ich bin knows1 und bin ich integer

echo gettype($a)."\n"; // string
echo gettype($b); // integer

  Outbut : string integer
?>
{% endhighlight %}
***************************************
#### integer
{: .notice--danger}
***************************************
> لاحظ نتيجة الارجاع ما هي ؟
{% highlight php linenos %}

<?php
  function knows1($a, $b){
    return $a + $b;
}
  echo knows1(10, 50);

// 60
  ?>
{% endhighlight %}

> هذه النتيجة جيدة لا مشلكة حتى الآن .
***************************************
#### String
{: .notice--danger}
***************************************
> لاحظ نتيجة الارجاع ما هي ؟

{% highlight php linenos %}

<?php
  function knows1($a, $b){
    return $a + $b;
}
  echo knows1("10", "50");

// 60

  ?>
{% endhighlight %}

> هذه النتيجة غير جيدة هنا تبدء المشلكة  الآن , إرجاع السلسلة على أنها عدد صحيح .
***************************************
#### kein integer
{: .notice--danger}
***************************************

{% highlight php linenos %}

  <?php


  function knows1($a, $b){
    return $a + $b;
}

  echo knows1(true, "12false");

// 13

  ?>
{% endhighlight %}

> لاحظ الخلط الحاصل

***************************************
### الحل .
{: .notice--danger}
***************************************

> اوجدت اللغة لنا الحل التالي من الأصدار السابع .

|  |  |  |
| ---- | ---- | ---- |
| 7.0.0 Added |  strict_types | directive |

عند استدعاء دالة سوف تعود لنا فقط البيانات المعلن عنها دون غيرها .

***************************************
### في غاية الأهمية مكان التصريح : هو الأول في الوثيقة.
{: .notice--danger}
***************************************
{% highlight php linenos %}

<?php

declare(strict_types=1);

Fatal error: strict_types declaration must be the very first statement in the script in /wwwqzlJ3B on line 9

?>
{% endhighlight %}
***************************************
# اعلان معلمات الدالة {الصارمة} .
***************************************

{% highlight php linenos %}

<?php
 function knows1(int $a, int $b)
//function knows1(string $a, string $b)
//function knows1(Integer $a, Integer $b)
//function knows1(float $a, float $b)
//function knows1(bool $a, bool $b)
  ?>

{% endhighlight %}
***************************************
### 1. مثال صحيح .
{: .notice--danger}
***************************************
{% highlight php linenos %}

<?php
declare(strict_types=1);
function knows1(int $a, int $b)
//function knows1(string $a, string $b)
//function knows1(Integer $a, Integer $b)
//function knows1(float $a, float $b)
//function knows1(bool $a, bool $b)

 {
   echo $a + $b;
}
   knows1(1 , 1);

// 2
  ?>
{% endhighlight %}
***************************************
### 2. مثال صحيح .
{: .notice--danger}
***************************************
{% highlight php linenos %}

<?php
declare(strict_types=1);
function knows1(int $a, string $b)
//function knows1(string $a, string $b)
//function knows1(Integer $a, Integer $b)
//function knows1(float $a, float $b)
//function knows1(bool $a, bool $b)

 {
   echo $a . $b;
}
   knows1(1 , "hallo");


  ?>
{% endhighlight %}

***************************************
### 3. مثال صحيح . لتأكد أستبدل النقطة ب +
{: .notice--danger}
***************************************
{% highlight php linenos %}

<?php
declare(strict_types=1);
function knows1(int $a, string $b)
//function knows1(string $a, string $b)
//function knows1(Integer $a, Integer $b)
//function knows1(float $a, float $b)
//function knows1(bool $a, bool $b)

 {
   echo $a . $b; // لتأكد أستبدل النقطة ب +
}
   knows1(1 , "1hallo");


  ?>
{% endhighlight %}
***************************************
### 4. مثال خطأ ماهو الخطأ .
{: .notice--danger}
***************************************
{% highlight php linenos %}

<?php
declare(strict_types=1);
function knows1(int $a, int $b)
//function knows1(string $a, string $b)
//function knows1(Integer $a, Integer $b)
//function knows1(float $a, float $b)
//function knows1(bool $a, bool $b)

 {
   echo $a . $b;
}
   knows1(1 , "1hallo");


  ?>
{% endhighlight %}
***************************************
### الحل .
{: .notice--danger}
***************************************

PHP Fatal error:  Uncaught TypeError: Argument 2 passed to knows1() must be of the type int, string given, called in /workspace/Main.php on line 12 and defined in /workspace/Main.php:3
Stack trace:
{: .notice--danger}

#0 /workspace/Main.php(12): knows1(1, '1hallo')
#1 {main}
thrown in /workspace/Main.php on line 3

***************************************
##### خطأ ويصحح .
{: .notice--danger}
***************************************
{% highlight php linenos %}

<?php
declare(strict_types=1);

function a(int $a, int $b) {
    return $a + $b;
}

var_dump(sum(7.1, 1.7));

?>


++++++++++++++++++++++++++++++++++++++
<?php
declare(strict_types=1);

function a(float $a, float $b) {
    return $a + $b;
}

var_dump(a(7.1, 1.7));

// float(8.8)

?>
{% endhighlight %}
***************************************
# Encoding
{: .notice--danger}
***************************************
1- Funktionsparametern
2- Rückgabewerten
