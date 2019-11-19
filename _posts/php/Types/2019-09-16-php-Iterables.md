---
title: " php Iterables "
last_modified_at: 2016-03-09T16:20:02-05:00
author_profile: false
keywords: Objects php , PHP Arrays , PHP Sorting Arrays, PHP GET + POST + REQUEST,php Null Types + Void , php Iterables,
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
{% include tocc icon="cog" title=" php Iterables " %}

#### Iterables
> تقوم بإعادة تجميع كل أنواع البيانات التي يمكننا تكرارها: بيانات المصفوفات وعبورها ،


- يقبل تنفيذ كل من array و object كلا هذين النوعين قابلان(( للتكرار)) باستخدام foreach
- والفكرة هي استخدامه بمثابة إعلان نوع على معلمة أو إرجاع نوع يشير إلى قيمة iterable
- يمكن استخدامها مع العائد-yield من داخل المولد- generator.


متوقعة-Iterable = يمكن استخدامه كنوع معلمة للإشارة إلى أن الوظيفة تتطلب مجموعة من القيم ,


### 1. تكرار المعلمة .


{% highlight php linenos %}
function abc(iterable $a) {foreach ($iterable as $a) {code}}
{% endhighlight %}

{% highlight php linenos %}
<?php
function abc(iterable $a) {
    foreach ($a as $key => $val) {
        var_dump($val);

    }
}
  abc([10, 20, 30, 7.0, "knows1" ]);

?>
{% endhighlight %}


### 2. يمكن تعيين قيمة افتراضية للمعلمة قابلة للتكرار .

{% highlight php linenos %}
function abc(iterable $names = []) {}
{% endhighlight %}

### 3. تكرار نوع الإرجاع = وظيفة إرجاع القيمة .

{% highlight php linenos %}
function bar(): iterable {
    return [1, 2, 3];
}
{% endhighlight %}


{% highlight php linenos %}
  <?php
 function export(): iterable {
   return [
     'go1',
     'go2',
     'go3'
   ];
 }
var_dump(export())
?>
{% endhighlight %}

{% highlight php linenos %}
 function numbers(): iterable {
    for ($i = 0; $i <= 5; $i++) {
       yield $i;
    }
 }
{% endhighlight %}


### 4. نوع الارجاع مع مولد .

{% highlight php linenos %}
<?php
  function my_generator() {
    yield 100;
    yield 200;
    yield 300;
    }
function abc(iterable $a) {
    foreach ($a as $key => $val) {
        var_dump($val);

    }
}
abc(my_generator());
?>
{% endhighlight %}

{% highlight php linenos %}
<?php
  function my_generator() {
    yield 100;
    yield 200;
    yield 300;
    }
function abc(iterable $a) {
    foreach ($a as $key => $val) {
        var_dump( $val + $val);

    }
}
abc(my_generator());
?>
{% endhighlight %}

{% highlight php linenos %}
function abc(): iterable {
    yield 1;
    yield 2;
    yield 3;
}
{% endhighlight %}
