---
title: " File System in php"
last_modified_at: 2016-03-09T16:20:02-05:00
author_profile: false
keywords: Objects php , PHP Arrays , PHP Sorting Arrays, PHP GET + POST + REQUEST,PHP Date and Time,PHP Include + Require Files , File System in php
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
{% include tocc icon="cog" title="File System in php" %}

# File System in php .

#### كيفية  أنشاء الملفات ؟
#### كيف نقرأ الملفات ؟
#### كيفية تعديل الملفات ؟
#### كيفية الوصول للمفات ؟
#### كيفية معالجة الملفات ؟

> سوف نتعلم في هذا الدرس التعامل مع الملفات المختلفة في php .


## العمل مع الملفات في PHP

# PHP

هي لغة البرمجة جانب الخادم ,إذن نحن نحتاج للعمل مع الملفات والدلائل المخزنة على خادم الويب.





## كيفية فتح الملفات

### 1.  PHP fopen ()

أول شئ يجب معرفة كيفية فتح الملف ؟

{% highlight php linenos %}
fopen ("a-الطريق", "b- الطريقة")
{% endhighlight %}

- الطريق = اسم الملف الذي تريد فتحه .
- الطريقة = كيف ؟


{% highlight php linenos %}
<?php
$a = fopen("knows3.txt", "r")
                 or die("=> not exist!! <=");

// Outbut : => not exist!! <=
?>
{% endhighlight %}


# تحديد المعلمة الثانية .
a
| الرمز | الوصف  | الشرح |

| ----  | ---- | ---- |
| r	  | Read  | افتح الملف للقراءة ، بدءًا من بداية الملف |
| r+	 | Read | افتح الملف للقراءة والكتابة ، بدءًا من بداية الملف |
| w	 | Write | افتح الملف للكتابة ، بدءًا من بداية الملف. إذا كان الملف موجود بالفعل ، احذف المحتويات الموجودة. إذا لم يكن موجودًا ، فحاول إنشائه. |
| w+	 | Write | افتح الملف للكتابة والقراءة ، بدءًا من بداية الملف. إذا كان الملف موجود بالفعل ، احذف المحتويات الموجودة. إذا لم يكن موجودًا ، فحاول إنشائه. |
| x      | Cautious write | افتح الملف للكتابة ، بدءًا من بداية الملف. إذا كان الملف موجودًا بالفعل ، فلن يتم فتحه ، وسيرجع  خطأ ، وسيقوم  بإنشاء تحذير. |
| x+	 | Cautious write | افتح الملف للكتابة والقراءة ، بدءًا من بداية الملف. إذا كان الملف موجودًا بالفعل ، فلن يتم فتحه ، وسيرجع  خطأ ، وسيقوم  بإنشاء تحذير. |
| a	 | Append | افتح الملف للإلحاق (الكتابة) فقط ، بدءًا من نهاية المحتويات الموجودة ، إن وجدت. إذا لم يكن موجودًا ، فحاول إنشائه. |
| a+	 | Append | افتح الملف للإلحاق (الكتابة) والقراءة ، بدءًا من نهاية المحتويات الموجودة ، إن وجدت. إذا لم يكن موجودًا ، فحاول إنشائه. |



{% highlight php linenos %}
<?php
$a = fopen("knows3.php", "r")
                 or die("=> not exist!! <=");
if ($a) {
  echo "=> ok exist!! <=";
}
// Output : => ok exist!! <=
?>
{% endhighlight %}






# التحقق من وجود الملفات أو عدمها .

### 2. file_exists()

{% highlight php linenos %}
file_exists()
{% endhighlight %}



 # بناء الجملة .

{% highlight php linenos %}
<?php
echo file_exists("knows1.txt");
?>
{% endhighlight %}


{% highlight php linenos %}
<?php
$Name = '/path/to/name.txt';

if (file_exists($Name)) {
    echo " OK $Name OK ";
} else {
    echo "NO $Name NO ";
}
?>
{% endhighlight %}

-



## إغلاق الملفات .

#### 3. fclose()

بمجرد الانتهاء من العمل مع ملف ، يجب إغلاقه.

{% highlight php linenos %}
fclose()
{% endhighlight %}




{% highlight php linenos %}

<?php

$handle = fopen('test.txt', 'r');

fclose($handle);

?>

{% endhighlight %}

# القراءة من الملفات

### 4. fread()

 لقراءة كمية محددة من البيانات الملف .

{% highlight php linenos %}
fread()
{% endhighlight %}

تعلمنا التالي : 1. الفتح 2. الأغلاق . 3. الوجود و عدمه . الآن سوف نتعلم القراءة من الملف .


{% highlight php linenos %}
<?php
$name = "knows3.php";

$handle = fopen($name, "r");

if (fopen($name, "r"));{
    echo " OK name= ist open  OK <br>";
  }

$name1 = fread($handle, "15");

if (fread($handle, "15"));{
    echo " OK name1= ist read  OK <br>";
  }

if (fclose($handle)); {
    echo " OK nach :read= ist close  OK ";
  }
  var_dump($name1);
/*
Outbut : php:20:string '<?php echo "Hal' (length=15)
OK name= ist open OK
OK name1= ist read OK
OK nach :read= ist close OK*/
?>
{% endhighlight %}
{% highlight php linenos %}
<?php
$knows = "test.txt";
 if(file_exists($knows)){

    $knows1 = fopen($knows, "r") or die("No open ");

    $knows2 = fread($knows1, "10") or die("NO read ");

  fclose($knows1) or die("NO close ");

    echo $knows2;
} else{
    echo "No exist.";
}
?>

{% endhighlight %}



# قراءة محتويات الملف كاملة .

### 5. fread() + filesize()



{% highlight php linenos %}
<?php
$name = "knows3.php";
$handle = fopen($name, "r"); or die
$name1 = fread($handle, filesize($name));
fclose($handle);

var_dump($name1); //Outbut :// /knows1/test/test/knows2.php:7::string '<?php echo "Hallo"; ?' (length=24)

?>

{% endhighlight %}


# قراءة محتويات الملف دون  فتحه !! .

### 6. readfile() + file_get_contents() + file()


سوف نقوم بقراءة محتويات الملف دون فتحه.



> readfile()

{% highlight php linenos %}
<?php
echo readfile("info.txt");
?>
{% endhighlight %}

{% highlight php linenos %}
<?php
$a = "test1.txt";
 if(file_exists($a)){
    readfile($a) or die("Tip: chmod 444 ");
} else{
    echo "ERROR: Kein file .";
}
?>
{% endhighlight %}


> file_get_contents()

{% highlight php linenos %}
<?php
$f = "knows.tex";
$f1 = file_get_contents($f);
echo $f1;
?>
{% endhighlight %}


> file()
{% highlight php linenos %}
<?php
$a = file('test.txt');

foreach($a as $b)
{
    echo($b);
}

?>
{% endhighlight %}

{% highlight php linenos %}
<?php
$a = "knows.tex";

if(file_exists($a)){

    $too = file($a) or die("Nein!!");
    foreach($too as $oot){
        echo $too;}
    };

?>
{% endhighlight %}

# الكتابة إلى الملفات .

#### 7. fwrite()

1. في حال كان الملف غير موجود سيتم إنشاؤه تلقائيا وكتابة البيانات إليه .
2. إذا كان الملف موجود بالفعل سوف يمحو محتويات هذا الملف ،
3. للكتابة إلى الملف مع الحفاظ على محتوباته أستبدل التالي .
a <=======> w


{% highlight php linenos %}
<?php
$fp = fopen('test.txt', 'w');
fwrite($fp, 'Hallo=>');
fwrite($fp, 'Ich bin : knows1');
fclose($fp);

// Outbut : Hallo=>Ich bin : knows1
?>
{% endhighlight %}

> أضافة قراءة الملف للانتاج .
{% highlight php linenos %}
<?php
$fp = fopen('test.txt', 'w');
fwrite($fp, 'Hallo=>');
fwrite($fp, 'Ich bin : knows1');
// أضافة قراءة الملف للانتاج
echo readfile("test.txt");
fclose($fp);

// Outbut : Hallo=>Ich bin : knows1
?>
{% endhighlight %}

{% highlight php linenos %}
<?php
$Öffnen = "test.txt";
$Schreiben = "Gold online kaufen zu tagesaktuellen Preisen.";

$a = fopen($Öffnen, "w") or die("Tipp: Dateiberechtigungen ändern.");


fwrite($a, $Schreiben) or die ("Tipp: chmod 777 -rwxrwxrwx ");
if (fwrite($a, $Schreiben));{
  echo "Daten wurden erfolgreich in die Datei geschrieben.";
}
fclose($handle);

?>
{% endhighlight %}
a <=======> w

{% highlight php linenos %}
<?php
$Öffnen = "test.txt";
$Schreiben = "+a +a Gold online kaufen zu tagesaktuellen Preisen.";
// a بدل w
$a = fopen($Öffnen, "a") or die("Tipp: Dateiberechtigungen ändern.");


fwrite($a, $Schreiben) or die ("Tipp: chmod 777 -rwxrwxrwx ");
if (fwrite($a, $Schreiben));{
  echo "Daten wurden erfolgreich in die Datei geschrieben.";
}
fclose($handle);

?>
{% endhighlight %}


# كتابة البيانات إلى ملف دون الحاجة لفتحه .
> سوف يحذف محتويات الملف .

#### 8. file_put_contents

{% highlight php linenos %}
<?php
$Öffnen = "test.txt";
$Schreiben = "(file_put_contents) Gold online kaufen zu tagesaktuellen Preisen.";
//fwrite
file_put_contents($Öffnen, $Schreiben) or die ("Tipp: chmod 777 -rwxrwxrwx ");
if (file_put_contents($Öffnen, $Schreiben));{
  echo "Daten wurden erfolgreich in die Datei geschrieben.";
}

?>
{% endhighlight %}



# كتابة البيانات إلى ملف دون الحاجة لفتحه مع الحفاظ على محتويات الملف  .
#### 8. file_put_contents + FILE_APPEND

{% highlight php linenos %}
<?php
$Öffnen = "test.txt";
$Schreiben = "(FILE_APPEND) +Gold online kaufen zu tagesaktuellen Preisen.";
//fwrite
file_put_contents($Öffnen, $Schreiben, FILE_APPEND) or die ("Tipp: chmod 777 -rwxrwxrwx ");
if (file_put_contents($Öffnen, $Schreiben));{
  echo "Daten wurden erfolgreich in die Datei geschrieben.";
}

?>
{% endhighlight %}

# إعادة تسمية الملفات .
#### rename()

{% highlight php linenos %}
<?php
rename("/var/www/knows1/test/test/test.txt", "/var/www/knows1/test/test/test.txt1");
?>

<?php
rename("test.txt", "test.txt1");
?>

{% endhighlight %}


{% highlight php linenos %}
<?php
$a = ("test.txt" );
$b = ("test.txt1");
rename($a, $b);
?>
{% endhighlight %}


# إزالة الملفات .


#### unlink()

## لمزيد راجع التالي :
{% highlight php linenos %}
<?php
unlink('test.txt1');
?>
{% endhighlight %}

> Filesystem Functions [filesystem](https://www.php.net/manual/en/book.filesystem.php)
