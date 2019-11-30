---
title: " php Integers "
last_modified_at: 2016-03-09T16:20:02-05:00
author_profile: false
keywords: Objects php , PHP Arrays , PHP Sorting Arrays, PHP GET + POST + REQUEST,php Null Types + Void , php Iterables,php Types,Integers,
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
{% include tocc icon="cog" title=" php Integers " %}



{% highlight php linenos %}
<?php
$a = 1990;
var_dump($a);
  Output : int(1)
?>
{% endhighlight %}


> integer : عدد صحيح
أعداد صحيحة هي أرقام بدون أي جزء عشري.

## 5 = integer !! output: float(5)
#### القاعد في المعامل لبس في النتيجة .

ستكون النتيجة النهائية float إذا كان أحدهم float و النتيجة integer .

{% highlight php linenos %}
 <?php

  $a = 2.5 * 2;
  if($a == 5)

  var_dump($a);
  //output: float(5)

?>  
{% endhighlight %}

{% highlight php linenos %}
 <?php

  $a = 2.5 * 2;
  $b= 1;
  $c = $a +$b;
  if($a == 5)

  var_dump($c);

 //utpout: float(6)
?>  
{% endhighlight %}

لضبط الانتاج أستخدم is_int($value) .

وظيفة للتحقق مما إذا كان عدد من نوع عدد صحيح.

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

|reference | | |
| ---- | ---- | ---- |
| reference [1](https://www.php.net/manual/en/book.gmp.php) | [2](https://www.php.net/manual/en/language.types.float.php) | [3](https://www.php.net/manual/en/book.bc.php) |

# نظام العد العشري Decimal
# نظام العد الثنائي Binary
# نظام العد الثماني Octal  
# نظام العد السداسي عشر Hexa

قاعدة العدد العشري هي البدأ بـ 10⁰
قاعدة العدد الثنائي هي البدأ بـ 2²



# نظام العد العشري Decimal

1- تصنيف العدد 1- أحاد 2-عشرات 3-مئات  4-ألوف 5- عشرات ألوف 6- مئات ألوف .

لدينا الرقم التالي :

{% highlight php linenos %}
123,456
{% endhighlight %}

{% highlight php linenos %}
1*100 000, 2* 10 000, 3* 1000, 4*1 , 4 * 100, 5 * 10 , 6 * 1
{% endhighlight %}

- تصنيف العدد حسب الرتبة = الاس

{% highlight php linenos %}
(1×10⁵) +( 2×10⁴ ) +(3×10³ )+( 4×10² )+(5×10¹) +(6×10⁰)
{% endhighlight %}

{% highlight php linenos %}
الناتج = 123,456
{% endhighlight %}


>قاعدة العدد العشري هي البدأ بـ 10⁰ من عشر خانات بعد الخانة العاشرة يفتح الخانة الجديدة .
>قاعدة العدد الثنائي هي البدأ بـ 2² من خانتان بعد الخانة الثانية يفتح الخانة الجديدة .

تمثيل قيم عددية باستخدام رمزين 0 و1.نستطيع استخدام أي رمزين أو حالتين مثل 0 و1 أو A/B . و هذا ما تستخدمه الحواسب .

العدد 101 هو في العشري مئة و واحد , بينما هو الثنائي 5 .

التميز بين العشري و الثنائي = 101₁₀ / 101₂ .

يمكن تميز الثنائي بالزموز بالرمز b أو bin .

{% highlight php linenos %}
101b , 101B , 101% , 101₂ , 101 binary
{% endhighlight %}

العد من 1 إلى 11 بالارقام الثنائية .

{% highlight php linenos %}
0000, 0001, 0010, 0011, 0100, 0101, 0110, 0111, 1000, 1001,1010, 1100,
{% endhighlight %}

نحاول معرفة رقم 16 بالثنائي من خلال العملية الحسابية .

{% highlight php linenos %}
10101
{% endhighlight %}

{% highlight php linenos %}
(2⁰ × 1) + (2¹ × 0) + (2² × 1) + (2³ × 0) + (2⁴ × 1)
{% endhighlight %}

{% highlight php linenos %}
 ( 1 ) + ( 0 ) + ( 4 ) + ( 0 ) + ( 16 )
{% endhighlight %}
 # octal الثماني

 {% highlight php linenos %}
 0،1،2،3،4،5،6،7
{% endhighlight %}

{% highlight php linenos %}
 (8⁰ × 1) + (8¹ × 0) + (8² × 1) + (8³ × 0) + (8⁴ × 1)
{% endhighlight %}
 # نظام 16 رقم .

{% highlight php linenos %}
 يستخدم 10 أرقام و 6 أحرف وهي كالتالي:  0، 1، 2، 3، 4، 5، 6، 7، 8، 9، A، B، C، D، E، F الأحرف 10 حيث  F = 15 ,  E = 14 , D = 13 , C = 12 , B = 11 , A = 10
 {% endhighlight %}

{% highlight php linenos %}
 (16⁰ × 1) + (16¹ × 0) + (16² × 1) + (16³ × 0) + (16⁴ × F)
{% endhighlight %}
