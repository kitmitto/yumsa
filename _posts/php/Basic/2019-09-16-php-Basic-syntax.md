---
title: " Basic syntax"
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
{% include tocc icon="cog" title="Basic syntax" %}




# Basic syntax
{: .notice}

# 1. PHP tags
{: .notice}

{% highlight php linenos %}
<?php and ?>
{% endhighlight %}

يفسر المترجم ما بين العلاماتين السابقتين على أنه php , في حال صح ما بينهما لغوياً , يكون الإخراج حسبما كتبت , و إلا سوف يعيد المترجم رسالة خطأ .
{: .notice--success}


# حذف علامة الإغلاق .
{: .notice}

إذا كان الملف يحتوي فقط على رمز PHP يمكن لك ذلك . أو من الأفضل . و السبب من وراء ذلك لمنع إضافة مسافة بيضاء أو خطوط جديدة بعد علامة إغلاق PHP .
{: .notice--success}

{% highlight php linenos %}
<?php

echo "Halloo";

// Output : Halloo
{% endhighlight %}

# HTML + php
{: .notice}

1. يمكن تضمين HTML خارج علامتي الفتح و الإغلاق ل php على أنه HTML .

2. يمكن تضمين HTML خارج علامتي الفتح و الإغلاق ل php على أنه مختلط .


- في حال كان المستند إمتداد php , يكون الإخراج التالي :
{: .notice--success}


{% highlight php linenos %}
<h1>Hallo</h1>
<?php echo "knows1";?>
<h1>Bay</h1>

Output : <h1>Hallo</h1>
Output : knows1<h1>Bay</h1>
{% endhighlight %}

- في حال كان المستند إمتداد html و على الخادم مثبت php , يكون الإخراج التالي :
{: .notice--success}

{% highlight php linenos %}
<!DOCTYPE html>
<html>
<body>

<h1>Hallo</h1>
<?php echo "knows1";?>
<h1>Bay</h1>

Output : Hallo

Output : knows1

Output : Bay
</body>
</html>
{% endhighlight %}

# php يتحكم في html
{: .notice}
يمكن أن يتحكم php بما هو خارج علامتي `<?php and ?>` , لاحظ المثال التالي .
{: .notice--success}

{% highlight php linenos %}
<!DOCTYPE html>
<html>
<body>

<?php if ($a !== 10): ?>
  <h1> know1 </h1>
<?php else: ?>
  <h1> know2 </h1>
<?php endif; ?>

</body>
</html>
{% endhighlight %}

#### فصل التعليمات .
{: .notice}
- فاصلة منقوطة في نهاية كل عبارة .
{: .notice--success}

#### أخر عبارة لا تحتاج للإغلاق مع إمتداد php !!
{: .notice}

{% highlight php linenos %}
<?php  echo 'knows1=>'; ?>
<?php  echo 'knows2=>'; ?>
<?php  echo 'knows3=>'; ?>
<?php  echo 'knows4=one=>?>';
{% endhighlight %}

#### أخر عبارة  تحتاج للإغلاق مع غير إمتداد php !!
{: .notice}

{% highlight php linenos %}
<?php  echo 'knows1=>'; ?>
<?php  echo 'knows2=>'; ?>
<?php  echo 'knows3=>'; ?>
<?php  echo 'knows4=one=>?>';
  // OUTPUT : Parse error: syntax error, unexpected '<', expecting end of file in /wwwWrZgAI on line 12
{% endhighlight %}  

#### فقط أخر عبارة تحتاج فاصلة منقوطة مع إمتداد php!!
{: .notice}

{% highlight php linenos %}
<?php  echo 'knows1=>' ?> // ohne ;
<?php  echo 'knows2=>' ?>  // ohne ;
<?php  echo 'knows3=>' ?>  // ohne ;
<?php  echo 'knows4=one=>?>';
{% endhighlight %}

#### فقط كل عبارة تحتاج فاصلة منقوطة مع غير إمتداد php!!
{: .notice}




{% highlight php linenos %}
<!DOCTYPE html>
<html>
<body>

<?php  echo 'knows1=>' ?> // ohne ;
<?php  echo 'knows2=>' ?>  // ohne ;
<?php  echo 'knows3=>' ?>  // ohne ;
<?php  echo 'knows4=one=>?>';
OUTPUT : Parse error: syntax error, unexpected '<', expecting end of file in /wwwZHdhaG on line 10
</body>
</html>
{% endhighlight %}

#### مسافة
{% highlight php linenos %}
<?php
$a = "knows";
$b = "1";
echo $a . ' '. ' '. ' '. $b; // knows  1
?>
{% endhighlight %}
