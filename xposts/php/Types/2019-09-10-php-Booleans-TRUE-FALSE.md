---
title: " Booleans TRUE/FALSE "
last_modified_at: 2016-03-09T16:20:02-05:00
author_profile: false
keywords: Objects php , PHP Arrays , PHP Sorting Arrays, PHP GET + POST + REQUEST,php Null Types + Void , php Iterables,php Types,Booleans TRUE/FALSE ,
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
{% include tocc icon="cog" title=" Booleans TRUE/FALSE" %}

#### Booleans TRUE/FALSE

{% highlight php linenos %}  
<?php
$a = TRUE;
if ($a == "Strings") {
    echo "TRUE1 ";
if ($a == TRUE) {
    echo ":+: TRUE2 "."\n";
}}
    elseif
   ($a == FALSE ) {
        echo "FALSE";
    }
?>
{% endhighlight %}

{% highlight php linenos %}  
<?php
var_dump((bool) -1);
  echo " <== -1   .<br>";
var_dump((bool) 0);
  echo " <== 0   .<br>";
var_dump((bool) 1);       
  echo " <== 1   .<br>";
var_dump((bool) 1.1);        
  echo " <== 1.1   .<br>";
var_dump((bool) false);   
  echo " <== false  .<br>";
var_dump((bool) true);       
  echo " <== true   .<br>";
var_dump((bool) "false");  
  echo " <==" . "false" ."<br>";
var_dump((bool) "true");
  echo " <==" . "true" ."<br>";  
var_dump((bool) array());   
  echo " <==" . " array());" ."<br>";  
var_dump((bool) array(0, 0));
  echo " <==" . " array(0, 0));" ."<br>";  
var_dump((bool) array(false));
  echo " <==" . "array(false));" ."<br>";  
var_dump((bool) array("false"));
?>
{% endhighlight %}

### Output

{% highlight php linenos %}  
bool(true) <== -1 .
bool(false) <== 0 .
bool(true) <== 1 .
bool(true) <== 1.1 .
bool(false) <== false .
bool(true) <== true .
bool(true) <==false
bool(true) <==true
bool(false) <== array());
bool(true) <== array(0, 0));
bool(true) <==array(false));
bool(true)
{% endhighlight %}

# Converting to boolean .
## تحويل إلى منطقية

في حال كنت تريد تحويل قيمة إلى boolean نحتاج أستخدام التالي :

1- يلزم bool (oder) boolean / يمكن بدونها .

2- في حال وجود operator سوف يتم التحويل تلقائيا .

3- تتطلب الوظائف أو جمل التحكم حجة  boolean .

### إرجاج قيمة المتغيير المنطقية .

1. Integers

{% highlight php linenos %}  
echo '123:        '.(boolval(0) ? 'true' : 'false');
{% endhighlight %}

2. Strings
{% highlight php linenos %}  
echo '"knows1": '.(boolval("abc") ? 'true' : 'false');
{% endhighlight %}

3. Arrays

{% highlight php linenos %}  
echo '["a", 1990]:   '.(boolval([1, 2]) ? 'true' : 'false');
{% endhighlight %}

4. Classes

{% highlight php linenos %}  
echo 'stdClass: '.(boolval(new stdClass) ? 'true' : 'false');
{% endhighlight %}
