---
title: " PHP Math Functions "
last_modified_at: 2016-03-09T16:20:02-05:00
author_profile: false
keywords: Objects php , PHP Arrays , PHP Sorting Arrays ,PHP Loops, PHP Functions , PHP Math Functions
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
{% include tocc icon="cog" title="PHP Math Functions " %}


# PHP Math Functions .




{% highlight php linenos %}   
 <?php
echo 1 + 1; // : 2
 ?>
 {% endhighlight %}  


> مجرد .


X + X / X

{% highlight php linenos %}  
 <?php
echo 5 + 5 * 5; // : 30
echo 5 + 5 / 5; // : 6
echo 5 + 5 - 5; // : 5
echo 3 + 2 * 10 // 13;
 ?>
  {% endhighlight %}   



> مجمع

{% highlight php linenos %}  
 <?php
echo ( 5 + 5 ) * 5; // : 50
echo ( 5 + 5 ) / 5; // :  2
echo ( 5 + 5 ) - 5; // :  5
echo (3 + 2) * 10 // 50;
?>
  {% endhighlight %}   


سوف نذكر لكم الوظائف الاكثر استخدما , لا ننسى أن الوظائف تختلف حسب التطبيق الذي تسخدمه .
{: .notice--danger}


> راجع المواقع التالية لتوسع .
{: .notice}

1. [w3schools](https://www.w3schools.com/php/php_ref_math.asp)
{: .notice}
2. [php.net](https://www.php.net/manual/en/ref.math.php)
{: .notice}


abs(); - ceil(); - floor() - sqrt() - rand() - decbin() - bindec() - dechex() - hexdec() - decoct() - octdec() - base_convert('x', x, x);
{: .notice}

### 1. abs();  abs => abs
{: .notice--success}
للعثور على القيمة المطلقة .
{: .notice--danger}

> 1. integer .

> 2. float .

{% highlight php linenos %}
 <?php

# Find  integer or a float .

echo abs(-8.5); // 8.5 (double/float)
echo abs(6);    // 6 (integer)
?>
  {% endhighlight %}   





### 2. ceil();
{: .notice--success}

### 3. floor();
{: .notice--success}
نستطيع من خلال هذه الوظيفة تقريب قيمة كسرية لأعلى أو لأسفل .
{: .notice--danger}

> 1. ceil . للاعلى
{: .notice--success}

{% highlight php linenos %}  
 <?php
echo ceil(7.5);    // 8
echo "<br>";
echo ceil(7.999);  // 8
  echo "<br>";
echo ceil(-4.14);  // -3
?>
 {% endhighlight %}   


> 2. floor . للاسفل
{: .notice--success}

{% highlight php linenos %}  
 <?php
echo floor(7.5);    // 7
echo "<br>";
echo floor(7.999);  // 7
  echo "<br>";
echo floor(-4.14);  // -5
 ?>
   {% endhighlight %}   




### 4. sqrt() => الجذر التربيعي
{: .notice--success}
{% highlight php linenos %}  
 <?php
echo sqrt(3); // 1.7320508075689
    echo "<br>";
echo sqrt(8); // 2.8284271247462
 ?>
   {% endhighlight %}   




### 5. rand() Random => rand
{: .notice--success}
#### توليد عدد عشوائي

{% highlight php linenos %}  
 <?php
echo rand(5, 7) . "<br>";
echo rand(0, 10) . "\n";

echo rand(98, 100);
 ?>
  {% endhighlight %}   



### 6. decbin() Decimal => Binary
{: .notice--success}
#### حول للعشري

{% highlight php linenos %}  
 <?php

  // + 2 n

  echo decbin(12);    // 1100  

 ?>
  {% endhighlight %}  




### 7. bindec() Decimal <= Binary
{: .notice--success}
#### عكس العشري

{% highlight php linenos %}  
 <?php

  // + 2 n

  echo bindec(12);    // 1

 ?>
   {% endhighlight %}   















## لتوسع راجع التالي . [https://www.php.net/manual/en/ref.math.php](https://www.php.net/manual/en/ref.math.php)
{: .notice--danger}

| Math Functions | links | exsampl |
| ---- | ---- | ---- |
| abs قيمه مطلقه =>  Absolute value |[abs(x);](/php/php-Math-Functions/#1-abs--abs--abs) |echo abs(-x.x); echo abs(x);|
| acos | | |
| acosh | | |
| asin | | |
| asinh | | |
| atan2 | | |
| atan | | |
| atanh | | |
| base_​convert | | |
| bindec | | |
| ceil | | |
| cos | | |
| cosh | | |
| decbin | | |
| dechex | | |
| decoct | | |
| deg2rad | | |
| exp | | |
| expm1 | | |
| floor | | |
| fmod | | |
| getrandmax | | |
| hexdec | | |
| hypot | | |
| intdiv | | |
| is_​finite | | |
| is_​infinite | | |
| is_​nan | | |
| lcg_​value | | |
| log10 | | |
| log1p | | |
| log | | |
| max | | |
| min | | |
| mt_​getrandmax | | |
| mt_​rand | | |
| mt_​srand | | |
| octdec | | |
| pi | | |
| pow | | |
| rad2deg | | |
| rand | | |
| round | | |
| sin | | |
| sinh | | |
| sqrt | | |
| srand | | |
| tan | | |
| tanh | | |
{: .notice--success}
