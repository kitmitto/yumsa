---
title: " PHP Introduction"
last_modified_at: 2016-03-09T16:20:02-05:00
author_profile: false
keywords: Objects php , PHP Arrays , PHP Sorting Arrays ,PHP Loops , PHP Introduction
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
  nav: "Basic"
---
{% include tocc icon="cog" title=" PHP Introduction" %}


### استخدام وسوم هتمل .


> لاحظ استبدل " ب ' حتى لا يحدث تضارب .
{: .notice--danger}

```php
<?php
echo "<h1 style='text-align:center'>hallo world !! <h1>";
?>
```
> يمكن أيضاً وضع قبل و قبل نهاية علامة \ لمنع التضارب .
{: .notice--danger}

```php

<?php
echo "<h1 style=\"text-align:center\">hallo world !! <h1>";
?>
```

> للدمج نشتخدم النقظة .
{: .notice--danger}

```php

<?php
echo  "ich" . "bin" . "knows1";
?>

```

> للدمج و الفصل و نستخدم .
{: .notice--danger}

```php
<?php
echo  "ich " ."\n" . "bin" ."\n". "knows1";
?>
```



# التعليقات

```php
<?php
// 1- echo  "ich " ."\n" . "bin" ."\n". "knows1";
# 2- echo  "ich " ."\n" . "bin" ."\n". "knows1";
/* 3- echo  "ich " ."\n" . "bin" ."\n". "knows1"; */

/* echo  "ich " ."\n" . "bin" ."\n". "knows1";
echo  "ich " ."\n" . "bin" ."\n". "knows1";
echo  "ich " ."\n" . "bin" ."\n". "knows1";*/
<?
```

#### تسمية المتغير
{: .notice--danger}
```php
$knows1
```
#### اسناد القيمة .
{: .notice--danger}
```php
$knows2 = "Hallo";
```
#### اسناد عدد صحيح .
{: .notice--danger}
```php
$knows3 = 1;
```
#### اسناد عدد كسري .
{: .notice--danger}
```php
$knows4 = 1,10;
```
#### القيم الفارغة .
{: .notice--danger}
```php
$knows5 = null;
```
#### القيم المنطقية .
{: .notice--danger}
```php
$knows6 = false/true;
```
#### نصي
{: .notice--danger}
```php
$knows7 = "Hallo" or 'Hallo';
```
# معالجة القيم
{: .notice--danger}
```php
$knows8 = $knows1 +-*/% $knows2;
```

# دمج المتتغيرات .
{: .notice--danger}
```php
<?php

$knows1 = 1;

$knows2 = 2;

$_ = $knows1.$knows2;

echo $_;

echo "<br>";

$knows1 = "knows";

$knows2 = 1;

$_a = $knows1.$knows2;

echo $_a;

// Outbut : 12
// knows1
?>
```

# echo

> الفرق بين '' - "" .
> '' = انتاج المتغير .
> "" انتاج القيمة .
{: .notice}

{% highlight php linenos %}
<?php

$knows1 = "ich";

$knows2 = "bin";

$knows3 = "knows1";
// 1
echo $knows1.$knows2; echo "<br>";
//  2
echo "$knows1 $knows2 <br>";
// 3
echo '( $knows1 $knows2 )' ,'<br>';

// Outbut : 1 = ichbin
// Outbut : 2 = ich bin
// Outbut : 3 = ( $knows1 $knows2 )

?>
{% endhighlight %}

# String + number und number erste
{: .notice}

{% highlight php linenos %}
<?php

// 1
$knows1 = 1990;

// 2 number erste
$knows2 = "1990knows1";

echo "$knows1+$knows2 =".($knows1+$knows2).'<br>';

// Outbut :  = 1990+1990knows1 =3980

?>
{% endhighlight %}


# String + number und String erste
{: .notice}

{% highlight php linenos %}
<?php
// 1
$knows1 = 1990;

// 2
$knows2 = 'a1990';

echo "$knows1+$knows2 =".($knows1+$knows2).'<br>';

// Outbut :  = 1990+a1990 =1990

?>
{% endhighlight %}

# true = 1
{: .notice}

{% highlight php linenos %}
<?php

// 1
$knows1 = 1990;

// 2 number erste
$knows2 = true;

echo "$knows1+$knows2 =".($knows1+$knows2).'<br>';

// Outbut :  = 1990+1 =1991

?>
{% endhighlight %}


# false = 0
{: .notice}

{% highlight php linenos %}
<?php

// 1
$knows1 = 1990;

// 2
$knows2 = false;

echo "$knows1+$knows2 =".($knows1+$knows2).'<br>';

// Outbut :  = 1990+ =1990

?>
{% endhighlight %}


# null =
{: .notice}

{% highlight php linenos %}
<?php


// 1
$knows1 = 1990;

// 2
$knows2 = null;

echo "$knows1+$knows2 =".($knows1+$knows2).'<br>';

// Outbut :  = 1990+ =1990



?>
{% endhighlight %}

# 2 number in 1 string = 1 number "NaaaN"
{: .notice}


{% highlight php linenos %}
<?php

// 1
$knows1 = 1990;

// 2
$knows2 = "1990a1990";

echo "$knows1+$knows2 =".($knows1+$knows2).'<br>';

// Outbut :  = 1990+1990a1990 =3980
?>
{% endhighlight %}

# 2 number in 1 string = 1 number "N.aaa.N"
{: .notice}


{% highlight php linenos %}
<?php

// 1
$knows1 = 1990;

// 2
$knows2 = "1991.a.1990";

echo "$knows1+$knows2 =".($knows1+$knows2).'<br>';

// Outbut :  = 1990+1991.a.1990 =3981



?>
{% endhighlight %}



### الفرق echo - print
{: .notice--danger}

```php
echo (5)+(5)."<br>"; //ok
```
```php
print (5)+(5)."<br>"; //ok
```
```php
echo (5),(5)."<br>"; //ok
```
```php
#print (5),(5)."<br>"; //no
```
```php
echo (5),(5)+(5),(5)."<br>"; //ok
```
```php
#print (5),(5)+(5),(5)."<br>"; //no
```
# echo .  عدة معلمات مع الاقواس أو بدون
{: .notice--danger}


```php
 echo  "and a ", 1, 2, 3 ."<br>";   //مفصولة بفواصل دون أقواس
```
```php
echo ("KNOWS1 a 1990")."<br>"; // معلمة واحدة فقط مع الأقواس
```
```php
echo ("KNOWS1 a 1990").("KNOWS1 a 1990")."<br>"; // عدة معلمات مع الاقواس
```
```php
echo ("KNOWS1 a 1990")."<br>";  
```


# print()  تأخذ معلمة واحدة فقط .
{: .notice--danger}

```php
print  "and a ", 1, 2, 3 ."<br>";   //خطأ
```
```php
print ("KNOWS1 a 1990")."<br>"; //صح
```
```php
print ("KNOWS1 a 1990").("KNOWS1 a 1990")."<br>"; // صح
```
