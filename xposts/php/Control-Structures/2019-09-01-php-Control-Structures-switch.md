---
title: "Control Structures => #switch "
last_modified_at: 2016-03-09T16:20:02-05:00
author_profile: false
keywords: Objects php , PHP Arrays , PHP Sorting Arrays, PHP GET + POST + REQUEST,  Control Structures if , Control Structures else  endif , (while),  endwhile, , ,for, endfor, ,foreach, endforeach, switch, endswitch , switch,
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
{% include tocc icon="cog" title="Control Structures => switch" %}





******************************************
# Control Structures #switch
{: .notice--danger}
******************************************

> عدة حالات . تنفيذ الحالة المظابقة . و إلا نفذ الإفتراضي .
{: .notice--danger}

> ملاحظة : يشبه
> if elseif
{: .notice--danger}
******************************************
#### 1. بناء الجملة .
{: .notice--info}
******************************************

{% highlight php linenos %}
<?php
switch (variable) {
  case 'value':
    // code...
    break;

  default:
    // code...
    break;
}
?>

  {% endhighlight %}
******************************************
#### 2. تطبيق البناء .
{: .notice--info}
******************************************
{% highlight php linenos %}



<?php
$a = 5;
switch ($a) {
  case '5':
    echo "a = 5";
    break;

  default:
    echo "a !== 5";
    break;
}
?>  

  {% endhighlight %}


******************************************
#### 3. strings زيادة القضايا أو الكتل .
{: .notice--info}
******************************************


{% highlight php linenos %}
<?php
$a = "sign in";
switch ($a) {

  case 'New user':
    echo "Register your blog";
    break;

  case 'member':
    echo "Enter the password";
    break;


  case 'unregistered':
    echo "Register";
    break;


  case 'editor':
    echo "password";
    break;    

  case 'sign in':
    echo "Welcome What's New?";
    break;

  default:
    echo "You cannot access the requested newspaper";
    break;
}
?>  




  {% endhighlight %}


******************************************
#### 4. Integer زيادة القضايا أو الكتل .
{: .notice--info}
******************************************
{% highlight php linenos %}
<?php
$a = 5;
switch ($a) {

  case '1':
    echo "Register your blog";
    break;

  case '2':
    echo "Enter the password";
    break;


  case '3':
    echo "Register";
    break;


  case '5':
    echo "password";
    break;    

  case '4':
    echo "Welcome What's New?";
    break;

  default:
    echo "You cannot access the requested newspaper";
    break;
}
?>  




  {% endhighlight %}


******************************************
#### البناء السهل .
{: .notice--info}
******************************************

{% highlight php linenos %}

<?php
$a = 'hallo5';
switch ($a) {
  case 'hallo1': echo "string1"; break;
  case 'hallo2': echo "string2"; break;
  case 'hallo3': echo "string3"; break;
  case 'hallo4': echo "string4"; break;
  case 'hallo5': echo "string5"; break;
  default: echo "string"; break;
}

 ?>




  {% endhighlight %}


******************************************
#### يمكن أن نفعل مثل هذا .
{: .notice--info}
******************************************

{% highlight php linenos %}

<?php
$a = date("h");
$b = date("M,d,Y h:i:s A");  
switch ($a) {
  case '1': echo "The time is now $b"; break;
  case '2': echo "The time is now $b"; break;
  case '3': echo "The time is now $b"; break;
  case '4': echo "The time is now $b"; break;
  case '5': echo "The time is now $b"; break;
  case '6': echo "The time is now $b"; break;
  case '7': echo "The time is now $b"; break;
  case '8': echo "The time is now $b"; break;
  case '9': echo "The time is now $b"; break;
  case '10': echo "The time is now $b"; break;
  case '11': echo "The time is now $b"; break;
  case '12': echo "The time is now $b"; break;

  default: echo "string"; break;
}

 ?>

  {% endhighlight %}
