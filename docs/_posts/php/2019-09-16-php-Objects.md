---
title: "php: Objects"
last_modified_at: 2016-03-09T16:20:02-05:00
author_profile: false
keywords: Objects php , PHP Arrays
#permalink: /Jekyl_paginate/

categories:
  - php
tags:
  - php

excerpt: "function mod($b, $c, $d) {"
header:
  overlay_image: /assets/images/php_knows1.jpg
  overlay_filter: rgba(192,192,192,0.3)
  caption: "php: [**knows1**](https://knows1.com)"
  actions:

sidebar:
  nav: "php"
---
{% include tocc icon="cog" title="php: Objects" %}

# ملاحظة هذا الدرس غير جاهز الرجاء المراجعة في وقت لاحق !!


1- البداية
-------------------------------
```php
$a = 0;
$a = $a + 10;
$a = $a - 6;
$a = $a / 2;
$a = $a * 6;

print $a;

```


#  التجريد-Abstraction : لوحدها

### سحب بعض من كل

توفير معلمات من نوع محدد لعملية ما
{: .notice}

```php

$a = 4 + 6;
//10
----------------
function mod($b, $c){
 return $b + $c;

a(4, 6)
// 10
}
```


التغليف-Encapsulation :
----------------------
## جمع البعض و تبعيض الكل

### لف الوظائف و والقيم داخل التجريد

```php

$a = 4 + 6;
$a = $a - 3;

//7
```
```php

function mod($b, $c, $d) {

$a = $b + $c;
$a = $a -$d;
return $a;
}

mod(4, 6, 3);
// 7
```

- أول تغليف من خلال وظيفة
- لاحظ أنك مقيد بالمتغيير الأول تصاعدياً أو تنازياً لا يمكن البدء
- مقيد

```php

function  mod() {
$a = 0;
$a = $a + 10;
$a = $a - 4;
$a = $a / 2;
$a = $a * 5;

return $total;

}

print mod();

// 18
```
[1- Introduction to Object Oriented Programming](https://www.daggerhart.com/wp-content/uploads/Daggerhart-Drupal-1.-Introduction-to-Object-Oriented-Programming.pdf?x10648)

[2- List of Keywords](https://www.php.net/manual/en/reserved.keywords.php)
