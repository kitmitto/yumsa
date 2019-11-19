---
title: "PHP Arrays"
last_modified_at: 2016-03-09T16:20:02-05:00
author_profile: false
keywords: Objects php , PHP Arrays
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
{% include tocc icon="cog" title="PHP Arrays" %}

# PHP Arrays شرح

## ؟ PHP Arrays  ما هو

## ؟ PHP Arrays كيف نستخدم


مجموعة من القيم = متغير  


لنفرض لدينا التالي :


The 12 Months

> - January - 31 days
> - February - 28
> - March - 31 days
> - April - 30 days
- May - 31 days
- June - 30 days
- July - 31 days
- August - 31 days
- September - 30 days
- October - 31 days
- November - 30 days
- December - 31 days


{% highlight php linenos %}
<?php

$most1 = "January";

$most2 = "February";

$most3 = "March";

$most4 = "April";

$most5 = "May";

$most6 = "July";

echo " $most1  $most2 $most3  $most4 $most5  $most6  "
?>

{% endhighlight %}

> output : January February March April May July
{: .notice--danger}

###### و لكن لو أردنا تخزين الأيام و الساعات و الدقائق و الثواني في متغيرات !!! ماذا سوف يحدث ؟


###### يبدو من هنا جائت فكرة صفيف < و لهذا السبب قسم  لثلاثة أنواع هي :

1- Indexed .

> مفهرس : مجموعة من المصفوفات مع مفتاح رقمي .

2- Associative .

> ترابطي : صفيف يكون لكل مفتاح قيمة خاصة به .

3- Multidimensional

> متعدد الأبعاد : صفيف يحتوي على صفيف واحد أو أكثر بداخله .

# Indexed

{% highlight php linenos %}
<?php
// indexed array
$most = array("January", "February", "March");

print_r($most);

?>

{% endhighlight %}

> output : Array ( [0] => January [1] => February [2] => March )
{: .notice--danger}


> a هذا يساوي الأول .

{% highlight php linenos %}
<?php
// indexed array
$most[0] = "January";
$most[1] = "February";
$most[2] = "March";

print_r($most)
?>

{% endhighlight %}

> output : Array ( [0] => January [1] => February [2] => March )
{: .notice--danger}

# Associative

> a يمكنك تعين القيم كيفما تشاء و السلاسل

{% highlight php linenos %}

<?php
// associative array
$most = array("January"=>1, "December"=>12, "October"=>10);
print_r($most)
?>
{% endhighlight %}

> output : Array ( [January] => 1 [December] => 12 [October] => 10 )
{: .notice--danger}


> a هذا يساوي الأول .

{% highlight php linenos %}

$most["January"] = "22";
$most["December"] = "12";
$most["October"] = "10";

print_r($most)

?>
{% endhighlight %}



> output : Array ( [January] => 22 [December] => 12 [October] => 10 )
{: .notice--danger}

# Multidimensional

> هو صفيف يمكن أن يحتوي كل من العناصر الداخلة فيه غلى صفيف . 1 = الكل , الجزء يساوي نفسه .

{% highlight php linenos %}
<?php

// array(); array(),

$most = array(
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

);
// Access nested value
echo "My name is: " . $most[2]["name"];
echo  "<br>";
echo "My phone number my friend knows2 is: " . $most[1]["phone"];


?>

{% endhighlight %}

> output : My name is: knows3
> My phone number my friend knows2 is: 1234567
{: .notice--danger}



# الإخراج .

> var_dump() = +
> print_r()  = -


# var_dump()

{% highlight php linenos %}
<?php
// associative array
$most = array("January"=>1, "December"=>12, "October"=>10);
var_dump($most)
?>
{% endhighlight %}

> output : array(3) { ["January"]=> int(1) ["December"]=> int(12) ["October"]=> int(10) }
{: .notice--danger}



# print_r()

{% highlight php linenos %}

<?php
// associative array
$most = array("January"=>1, "December"=>12, "October"=>10);
print_r($most)
?>

{% endhighlight %}

> output : Array ( [January] => 22 [December] => 12 [October] => 10 )
{: .notice--danger}




|->|=|
|----|----|
|1|يعيد الجميع|
|2|نستظيع تحديدالقيم  و السلاسل|
|3|مجموعات صفيف|
