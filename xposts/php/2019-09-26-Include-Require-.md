---
title: " PHP Include + Require Files"
last_modified_at: 2016-03-09T16:20:02-05:00
author_profile: false
keywords: Objects php , PHP Arrays , PHP Sorting Arrays, PHP GET + POST + REQUEST,PHP Date and Time,PHP Include + Require Files
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
{% include tocc icon="cog" title="PHP Include + Require Files" %}

# PHP Include + Require Files .


### Include one PHP file into another PHP File .


## include() + require()

{% highlight php linenos %}
include()
require()
{% endhighlight %}

- نستطيع من خلال التضمين تضمين الكود الموجود في ملف PHP داخل ملف PHP آخر.

- التضمين يساوي النسخ و اللصق , و لكن دون النسخ , يشبه خظ أتصال .


# كيف يتم ذلك ؟

- نحتاج ملف منفصل لتخزين مجموعة من التعليمات البرمجية و من ثم أستخدم الكود أينما نريد بإستخدام التالي  .

1- include()

2- require()


# example

footer = all the pages of a website .


## بناء الجملة .

{% highlight php linenos %}

include("path/to/filename");  
include 'filename';
-
require "path/to/filename";
require 'filename';
-
<?php include 'menu.php';?>
<?php require 'menu.php';?>
{% endhighlight %}



في حال كان الملف مطلوبا من قبل التطبيق عندها نستخدم "يتطلب" في حال الخلل لن يعمل التطبيق بدونه .

{: .notice}

في حال كان الملف  غير مطلوب من قبل التطبيق نستخدم "تضمين" و يمكن أن يستمر التطبيق عند عدم العثور على الملف.في حال الخلل  يعمل التطبيق بدونه .
{: .notice}



## مثال الأستخدام لجميع الصفحات .

{% highlight php linenos %}
<body>
<?php include "header.php"; ?>
<?php include "menu.php"; ?>
<?php include "footer.php"; ?>
</body>
{% endhighlight %}



{% highlight php linenos %}
<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html>
<head>


	<?php include("includes/head-tag-contents.php");?>
</head>
<body>

<?php include("includes/design-top.php");?>
<?php include("includes/navigation.php");?>


<?php include("includes/footer.php");?>

</body>
</html>
{% endhighlight %}


#  include_once <==> require_once

لحل مشكلة إذا قمت بتضمين نفس الملف بطريق الخطأ أكثر من مرة واحدة داخل الكود الخاص بك باستخدام التضمين أو يتطلب , نستخدم العيارات التالية ,



```php
include_once

 require_once

```

سوف نضمن تضمين البيانات مرة واحدة فقط حتى لو طُلب منه تضمينه مرة ثانية ,




### محاولة التطبيق .

1- انشئ ملف التالي : `knows1.php` و أضف التالي .

{% highlight php linenos %}
<?php
function knows1($b, $c){

$a = $b * $c;

echo $a;

};

?>
{% endhighlight %}
2- أنشئ ملف `knows2.php` و أضف التالي .

## include + require

{% highlight php linenos %}
<?php

include "knows1.php";
knows1(5, 6); //30

echo "<br>";

require "knows1.php";
knows1(5, 7); //لا انتاج
?>
{% endhighlight %}

# require_once

> لكن لو أضفنا التالي تحل التعارض .
{% highlight php linenos %}
<?php

require_once "knows1.php";
knows1(5, 6); //30

echo "<br>";

require_once "knows1.php";
knows1(5, 7); //35
?>
{% endhighlight %}

> استناج .

1- include + require
يقرأ الوظيفة مرة واحدة و التضمين الثاني يعتبر خطأ .
{: .notice}

2- include_once + require_once
يقرأ كل تضمين على حدة , مما يعني إمكانية تكرار الوظيفة مع قيم مختلفة .
{: .notice}
