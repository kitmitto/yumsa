---
title: " PHP Float - Floating point numbers"
last_modified_at: 2016-03-09T16:20:02-05:00
author_profile: false
keywords: Objects php , PHP Arrays , PHP Sorting Arrays, PHP GET + POST + REQUEST,php Null Types + Void , php Iterables,php Types,Integers,PHP Float - Floating point numbers,
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
{% include tocc icon="cog" title=" PHP Float - Floating point numbers " %}

# PHP Float - Floating point numbers

 تعويم :

1. 1.23
2. 123.1
3. 7.66E+66
4. 5.99E-0

### 1. 1.23
{% highlight php linenos %}
<?php
$a = 1.23;
  var_dump($a)

  //  Output = float(1.23)
?>
{% endhighlight %}

### 2. 123.1
{% highlight php linenos %}
<?php
$a = 123.1;
  var_dump($a)

  //  Output = float(123.1)
?>
{% endhighlight %}

### 2. 123.1
{% highlight php linenos %}
<?php
$a = 123.1;
  var_dump($a)

  //  Output = float(123.1)
?>
{% endhighlight %}

### 3. 7.66E+66
{% highlight php linenos %}
 <?php
$a = 7.66E+66;
  var_dump($a)

  //  Output = float(7.66E+66)
?>
{% endhighlight %}

### 4. 5.99E-0
{% highlight php linenos %}
 <?php
$a = 5.99E-0;
  var_dump($a)

  //  Output = float(5.99)
?>
{% endhighlight %}


> هناك وظيفتان يمكن استخدامهما لتحديد ما إذا كانت القيمة التي تتعامل معها Float أم لا.


1. is_float()

2. is_double()

{% highlight php linenos %}
 <?php
      $a = 5.99E-100;
  if (is_float($a))
 echo "knows1";

  //  Output = knows1
?>  
{% endhighlight %}

{% highlight php linenos %}
 <?php
      $a = 5.99E-100;
  if (is_double($a))
 echo "knows1";

  //  Output = knows1
?>
{% endhighlight %}

{% highlight php linenos %}
<?php
$a = 123;
$b = 12.3;

if (is_int($a))
{
    echo "knows1 = integer <br>";
  if (is_float($b)){
     echo "knows2 = float";
}}

//utpout: knows1 = integer
//utpout: knows2 = float

?>  
{% endhighlight %}


#### What is that float(INF) !?
> هي  القيمة العددية محددة أو غير محدودة

{% highlight php linenos %}
<?php
$a = 123;
$b = 12.3;
$c = 1.8e308;  
if (is_int($a))
{
    echo "knows1 = integer <br>";
  if (is_float($b)){
     echo "knows2 = float<br> ";
     if ($a !== $b){
       var_dump($c);
}}}

//utpout: knows1 = integer
//utpout: knows2 = float
//utpout: knows2 = float(INF)
?>  
{% endhighlight %}

# float(INF)


التحقق من القيمة العددية محددة أو غير محدودة :

1. is_finite()

2. is_infinite()

{% highlight php linenos %}
<?php
$a = 123;
#$b = 12.3;
$b = 1.8e308;  
if (is_finite($a)) {
    echo "knows1 = is_finite <br>";
  if (is_infinite($b)){
     echo "knows2 = is_infinite<br> ";

}}

//utpout: knows1 = is_finite
//utpout: knows2 = is_infinite

?>  
{% endhighlight %}
