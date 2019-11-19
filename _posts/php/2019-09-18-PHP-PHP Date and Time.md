---
title: " PHP Date and Time"
last_modified_at: 2016-03-09T16:20:02-05:00
author_profile: false
keywords: Objects php , PHP Arrays , PHP Sorting Arrays, PHP GET + POST + REQUEST,PHP Date and Time,
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
{% include tocc icon="cog" title=" PHP Date and Time" %}

# PHP Date and Time

```php
The PHP Date() Function

date()
```
# بناء الجملة .


date(aالشكل1,aالطابع الزمني2 )
- الشكل مطلوب -سنة - يوم - ساعة - دقائق - ثواني ...الخ
{: .notice}
- الطابع الزمني هو معلمة اختياري
{: .notice}


{% highlight php linenos %}
<?php
$ist = date(" d/m/Y");
echo "Heute ist : $ist";
?>
{% endhighlight %}

# formats .

### second, minute, hour, day,month, year


| 1- الوصف |2- الرمز |  3- الانتاج |
| ---- | ---- | ---- |
| السنة=> | Y | تخرج 4 ارقام 2005|
| السنة=> | y | تخرج 2 رقم 05 |
| الشهر=> | M | تخرج السشهر نصي |
| الشهر=> | m | تخرج السشهر |
| اليوم=> | D | تخرج اليوم نصي |
| اليوم=> | d | تخرج اليوم رقمي |
| الساعة=> | h | بتنسيق 12 ساعة |
| الساعة=> | H |  تنسيق 24 ساعة  |
| دقائق=> | i | دقائق |
| ثواني=> | s | ثواني |
| صباح&مساء=> | a | حرف صغير am or pm |
| صباح&مساء=> | A | حرف كبير am or pm |






{% highlight php linenos %}
<?php
echo date("M,d,Y h:i:s A") . "<br>";
echo "es ist =>"; date("h:i:s") . "<br>";
echo date("h:i a"). "<br>";
echo date("d/m/Y") . "<br>";
echo date("d-m-Y") . "<br>";
echo date("d.m.Y") . "<br>";
echo date("d.M.Y/D");
/*  
Output:   
Sep,25,2019 07:13:24 PM
es ist =>07:13 pm
25/09/2019
25-09-2019
25.09.2019
25.Sep.2019/Wed

?>
{% endhighlight %}

## time() Function
## الحصول على الوقت الحالي .

{% highlight php linenos %}
<?php
  echo(date("F d, Y h:i:s A", $timestamp));

  // January 01, 1970 12:00:00 AM && هذا تاريخ بداية أونكس
?>
{% endhighlight %}



{% highlight php linenos %}
 <?php
$timestamp = time();
echo($timestamp);

  // انتاج للعملية اللحقة && 1569439250
?>
{% endhighlight %}
تابع العملية اللاحقة و سوف ترى الانتاج .
{: .notice}

{% highlight php linenos %}
<?php
$t= 1569439250; // $t = $timestamp

echo(date("M,d,Y h:i:s A", $t)); // التحكم في الاخراج

// Output : Sep,25,2019 07:20:50 PM  

?>
{% endhighlight %}


#  mktime()

تستخدم الدالة لإنشاء الطابع الزمني بناءً على تاريخ ووقت محددين , يتم إرجاع الطابع الزمني للتاريخ والوقت الحالي في حال  لم يتم توفير التاريخ والوقت ،
{: .notice}


### بناء الجملة .

mktime(hour, minute, second, month, day, year)


{% highlight php linenos %}
<?php

echo mktime(00, 00, 00, 9, 25, 2019);  

// OUtput : 1569369600
 ?>
{% endhighlight %}

تستخدام هذه الوظيفة للعثور على اسماء الأيام و الأسبوع الموافق لتاريخ معين. للقيام بذلك ،
{: .notice}

نريد معرفة اليوم في تاريخ : 18/3/1948 .
