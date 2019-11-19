---
title: "PHP Sorting Arrays"
last_modified_at: 2016-03-09T16:20:02-05:00
author_profile: false
keywords: Objects php , PHP Arrays , PHP Sorting Arrays
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
{% include tocc icon="cog" title="PHP Sorting Arrays" %}

# PHP Sorting Arrays

## ؟ php  كيفية فرز المصفوفات من خلال وظائف الفرز في



{% highlight php linenos %}
sort() <=> rsort() [Uses] = sorting indexed
{% endhighlight %}

# > order
> [مفهرس] للفرز (((عناصر))) صفيف التصاعد + التنازلي .
{% highlight php linenos %}
asort() <=> arsort() [Uses] = sorting associative
{% endhighlight %}

# > value
> [ترابطي] للفرز (((قيم))) صفيف التصاعد + التنازلي .

{% highlight php linenos %}
ksort() <=> krsort() [Uses] = sorting associative
{% endhighlight %}

# > key
> [ترابطي] للفرز (((المفتاح))) صفيف التصاعد + التنازلي .

# Indexed > Order

# > 1. sort()

{% highlight php linenos %}
<?php
//
$Months = array("January",
              "February",
              "March",
              "April",
               "May",
               "June",
               "July",
               "August",
               "September",
               "October",
               "November",
               "December");
               //
               sort($Months);
               print_r($Months);
               ?>
               {% endhighlight %}
> output : Array ( [0] => April
                  >[1] => August
                  >[2] => December
                  [3] => February
                  [4] => January
                  [5] => July
                  [6] => June
                  [7] => March
                  [8] => May
                  [9] => November
                  [10] => October
                  [11] => September )
{: .notice--danger}



{% highlight php linenos %}
 <?php
//
  $Months = array("1000",
"980",
 "958",
  "110",
      "565",
            "990",
              "2101",
                  "3215",
                "6532",
          "565",
          "656",
        "3265");
      //
sort($Months);
          print_r($Months);
            ?>
  {% endhighlight %}

> Array ( [0] => 110 [1] => 565 [2] => 565 [3] => 656 [4] => 958 [5] => 980 [6] => 990 [7] => 1000 [8] => 2101 [9] => 3215 [10] => 3265 [11] => 6532 )
{: .notice--danger}


# > 2. rsort()

{% highlight php linenos %}
<?php
//
$Months = array("January",
              "February",
              "March",
              "April",
               "May",
               "June",
               "July",
               "August",
               "September",
               "October",
               "November",
               "December");
               //
               rsort($Months);
               print_r($Months);
               ?>
               {% endhighlight %}
> output : Array ( [0] => September
                  > [1] => October
                >  [2] => November
                  [3] => May
                  [4] => March
                  [5] => June
                  [6] => July
                  [7] => January
                  [8] => February
                  [9] => December
                  [10] => August
                  [11] => April )
{: .notice--danger}

{% highlight php linenos %}
 <?php
//
  $Months = array("1000",
"980",
 "958",
  "110",
      "565",
            "990",
              "2101",
                  "3215",
                "6532",
          "565",
          "656",
        "3265");
      //
rsort($Months);
          print_r($Months);
            ?>
  {% endhighlight %}

> Array ( [0] => Array ( [0] => 6532 [1] => 3265 [2] => 3215 [3] => 2101 [4] => 1000 [5] => 990 [6] => 980 [7] => 958 [8] => 656 [9] => 565 [10] => 565 [11] => 110 )
{: .notice--danger}

# Associative # Value

# > asort()

{% highlight php linenos %}
<?php
//
$Months = array("January"=>31,
              "February"=>28,
              "March"=>31,
              "April"=>30,
               "May"=>31,
               "June"=>30,
               "July"=>31,
               "August"=>31,
               "September"=>30,
               "October"=>31,
               "November"=>30,
               "December"=>31);
               //
               asort($Months);
               print_r($Months);
               ?>
               {% endhighlight %}

> output : Array ( [February] => 28 [April] => 30 [June] => 30 [September] => 30 [November] => 30 [January] => 31 [March] => 31 [May] => 31 [July] => 31 [August] => 31 [October] => 31 [December] => 31 )
{: .notice--danger}

# > arsort()
{% highlight php linenos %}
<?php
//
$Months = array("January"=>31,
              "February"=>28,
              "March"=>31,
              "April"=>30,
               "May"=>31,
               "June"=>30,
               "July"=>31,
               "August"=>31,
               "September"=>30,
               "October"=>31,
               "November"=>30,
               "December"=>31);
               //
               arsort($Months);
               print_r($Months);
               ?>
               {% endhighlight %}

> output : Array ( [January] => 31 [March] => 31 [May] => 31 [July] => 31 [August] => 31 [October] => 31 [December] => 31 [April] => 30 [June] => 30 [September] => 30 [November] => 30 [February] => 28 )
{: .notice--danger}

# Associative # Key

## > ksort()

{% highlight php linenos %}
<?php
//
$Months = array("January"=>31,
              "February"=>28,
              "March"=>31,
              "April"=>30,
               "May"=>31,
               "June"=>30,
               "July"=>31,
               "August"=>31,
               "September"=>30,
               "October"=>31,
               "November"=>30,
               "December"=>31);
               //
               ksort($Months);
               print_r($Months);
               ?>
               {% endhighlight %}

> output : Array ( [April] => 30 [August] => 31 [December] => 31 [February] => 28 [January] => 31 [July] => 31 [June] => 30 [March] => 31 [May] => 31 [November] => 30 [October] => 31 [September] => 30 )
{: .notice--danger}


## > krsort()


{% highlight php linenos %}
<?php
//
$Months = array("January"=>31,
              "February"=>28,
              "March"=>31,
              "April"=>30,
               "May"=>31,
               "June"=>30,
               "July"=>31,
               "August"=>31,
               "September"=>30,
               "October"=>31,
               "November"=>30,
               "December"=>31);
               //
               krsort($Months);
               print_r($Months);
               ?>
               {% endhighlight %}

> output : Array ( [September] => 30 [October] => 31 [November] => 30 [May] => 31 [March] => 31 [June] => 30 [July] => 31 [January] => 31 [February] => 28 [December] => 31 [August] => 31 [April] => 30 )
{: .notice--danger}
