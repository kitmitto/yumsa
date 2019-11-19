---
title: " PHP Functions"
last_modified_at: 2016-03-09T16:20:02-05:00
author_profile: false
keywords: Objects php , PHP Arrays , PHP Sorting Arrays ,PHP Loops, PHP Functions
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
{% include tocc icon="cog" title="PHP Functions" %}

# PHP Functions

> الوظيفة هي عبارة عن كتلة من التعليمات البرمجية قائمة بذاتها تقوم بمهمة محددة.
{: .notice--danger}

> هناك مجموعة ضخمة من الوظائف الداخلية أو المدمجة
{: .notice--success}

> البرامج النصية لأداء مهمة محددة ، مثل gettype(), print_r(), var_dump
{: .notice--success}

> 1. دائما تبدأ وظيفتك مع الكلمة
{: .notice--success}

> function
{: .notice--danger}
> 2. تذكر أن رمز وظيفتك يجب أن يكون بين {}
{: .notice--success}




# وظائف محددة . تشبه التجريد و التغليف .

> بالإضافة إلى وظائف مدمجة , يتيح لك PHP أيضًا تحديد وظائفك ,

> - نظافة الكود و عدم التكرار .

> - استخراج كتلة من التعليمات البرمجية في مكون واحد .

> - يمكنك الآن تنفيذ نفس المهمة عن طريق استدعاء هذه الوظيفة في أي مكان تريده في البرنامج النصي دون الحاجة إلى نسخ ولصق نفس كتلة الشفرة مرارًا وتكرارًا.بعد إنشاء مرة واحدة يمكن استخدامها عدة مرات ,  أي تغييرات يتم إجراؤها داخل وظيفة يتم تنفيذها تلقائيًا في جميع الأماكن دون لمس العديد من الملفات.

> - من السهل إعادة استخدام نفس الوظيفة في التطبيقات الأخرى فقط عن طريق تضمين ملف php الذي يحتوي على هذه الوظائف.

## إنشاء و استدعاء الوظائف


{% highlight php linenos %}
function Name(){
    // Code
// Code a هذا البناء الاساسي للجملة
}
{% endhighlight %}

{% highlight php linenos %}
function Name() {}
--------------------

a الاستتدعاء : Name();

{% endhighlight %}


# 1. Example function .

{% highlight php linenos %}
<?php

function name()  
{
    echo "This is Example for function";
}

//
name();

?>
{% endhighlight %}

# Functions المعلمات-Parameters-Arguments

> - داخل القوس يسمى المعلمات
> - نحدد المعلمات ليتم تنفيذها في الوظيفة ,
> - يتم استخدام هذه المعلمات لقبول المدخلات أثناء وقت التشغيل.

{: .notice--success}

## استخدام المعلمات

> يمكنك إرسال المعلومات التي يمكن للوظيفة استخدامها من خلال المعلمة تظهر المعلمة مع الأقواس () , سوف تبدو المعلمة مثل المتغيير العادي ,

# 1. Example Functions+Parameters

{% highlight php linenos %}

<?php

//  Parameters ($a, $b, $c)

  function knows1($a, $b, $c){

//  Function 1

    $plural = $a + $b + $c;

//  Function 2

  $Subtract = $a - $b - $c;

    echo "Functions-Parameters-Arguments => $plural";

  echo "<br>";

    echo "Functions-Parameters-Arguments => $Subtract";


}

  // a الاستتدعاء : Name();
  knows1(10, 10, 10)



?>

{% endhighlight %}


> output :
- Functions-Parameters-Arguments => 30
- Functions-Parameters-Arguments => -10
{: .notice--danger}

# 2. Example Functions+Parameters

{% highlight php linenos %}
<?php
function so($a, $b, $c, $d){
  $schau = $a + $b - $c - $d;
  echo "ist das  $a  $b  $c $d = $schau";
}

so(5, 5, 5, 5)

?>
{% endhighlight %}


> output :
- ist das 5 5 5 5 = 0
{: .notice--danger}



555555

{% highlight php linenos %}


<?php
function knows1( $color){

 echo "<p style=\"color:$color; \">I am red</p>";
}

knows1("red");

?>
{% endhighlight %}


{% highlight php linenos %}


<?php
function knows1( $color, $size, $background){

 echo "<p style=\"color:$color; font-size:$size; background-color:$background;  \">I am knows1</p>";
}

knows1("red", "50px", "blue");

?>
{% endhighlight %}



{% highlight php linenos %}

<?php
function knows1( $color, $size=10, $background){

 echo "<p style=\"color:$color; font-size:$size; background-color:$background;  \">I am knows1</p>";
}

knows1("red", "#Tomato");
knows1("red", "#Gray");
knows1("red", "#Orange");
knows1("red", "#SlateBlue");

?>
{% endhighlight %}


# معلمات أختيارية و قيمة أفتراضية .




{% highlight php linenos %}

<?php
function knows1($a = 5)
{
    return $a;
}

echo knows1();
  // زيادة القيمة مع الحفاظ على الحد الادنى ل المعلمات
  echo knows1(10001);

  ?>
{% endhighlight %}

{% highlight php linenos %}

<?php

function knows($man, $mon=50){
    echo "name:$man; <br> alt:{$mon}; <br>";   
}

//no argument
//no argument
//no argument
knows("a1");
knows("a2");
knows("a3");
?>
{% endhighlight %}



# استرجاع القيم من دالة_الوظيفة .


> باستخدام عبارة الإرجاع يمكن أن نقوم بإرجاع قيمة


{% highlight php linenos %}

<?php

function knows($a1, $a2, $a3){
    $all = "$a1 $a2 $a3 ";
    return $all;
}

// ارجاع قيم المعلمات
echo knows(5, 5, 5);
?>
{% endhighlight %}



الوظائف لا يمكن ان ترجع قيم متعددة , نستطيع حلها عن طريق إرجاع صفيف من خلال المثال التالي :
{% highlight php linenos %}

<?php

function knows($a, $b){
    $all = $a + $b;
    $array = array($a, $b, $all);
    return $array;
}

// Assign variables as if they were an array
list($a, $b, $all) = knows(100, 200);
echo  "$a +"; // + لاقيمة لها الا التوضيح
echo  "$b ="; // = لاقيمة لها الا التوضيح
echo  $all;  
?>
{% endhighlight %}



# ارجاع معلمة مرجعية .


{% highlight php linenos %}
<?php
  //  &$add معلمة + مرجع
function knows(&$add){
  // وظيفة
    $add * = $add;
    // ارجاع
    return $add;
  }
     // تمثيل المعلمة
  $a = 4;
  echo $a;

       // الاستدعاء

knows($a);
?>
{% endhighlight %}


{% highlight php linenos %}

<?php

  // الوظيف ضرب العدد بنفسه
    // معلمة مرجعية

function knows(&$merg){
    $merg * = $merg;
    return $merg;
}

$neue = 5;
echo $neue;
   echo "<br>";

knows($neue);
echo $neue;
  echo "<br>";

  $neue1 = 10;
echo $neue1;
   echo "<br>";

knows($neue1);
echo $neue1;
?>
{% endhighlight %}


# ارجاع معلماتين مرجعية .
{% highlight php linenos %}

<?php

  // الوظيف ضرب العدد بنفسه
    // معلمة مرجعية

function knows(&$merg, &$merg1){
    $merg = $merg + $merg1;
    return $merg;
}

$neue = 5;  // Outputs: 5
  $neue1 = 6;  // Outputs: 6
echo "$neue  $neue1"; // Outputs: 5 6
   echo "<br>";

  knows($neue, $neue1);
echo $neue;

?>
{% endhighlight %}


# نطاق المتغيرات .

## نعلم أننا يمكما أن نعلن عن المتغير أينما كان , لكن لا ننسى مكان الاعلان يؤثر على مكان الرؤية ,
{: .notice--danger}

>  نطاق المتغيرات : هي إمكانية الوصول إلى متغير.
> 1. وظيفة : من الداخل للخارج [x] لا يمكن .
> 2. وظيفة : من خارجها لداخلها [x] لا يمكن .
> 3. وظيفة :(اعلان عالمي) من الداخل للخارج [ok] يمكن .
> 4. وظيفة :(اعلان عالمي) من خارجها لداخلها [ok] يمكن .
{: .notice}

#### Scope


# 1.  من الداخل للخارج .


{% highlight php linenos %}
<?php

function knows(){
    $a = " وظيفة : من الداخل للخارج [x] لا يمكن .";
    echo $a;
}
knows(); // [ok]

echo $a; // [x]
?>
{% endhighlight %}


# 2.  من خارجها لداخلها .

{% highlight php linenos %}
<?php
 $a = "  وظيفة : من خارجها لداخلها [x] لا يمكن .";

function knows(){

    echo $a;
}

knows(); // [x]

echo $a; // [ok]
?>
{% endhighlight %}

# 3. عالمي من خارجها لداخلها.



{% highlight php linenos %}
<?php

 $a = "  وظيفة :(اعلان عالمي) من خارجها لداخلها [ok] يمكن";

function knows(){
  //  متغير خارجي + اعلان عالمي + يمكن استخدام كلتا الحالتين

    global $a;
    echo $a;

}

knows(); // [ok]

   echo "<br>";

echo $a; // [ok]
?>
{% endhighlight %}

# 4.  اعلان عالمي من الداخل للخارج .


{% highlight php linenos %}
<?php
function knows(){
  //  متغير داخلي + اعلان عالمي + يمكن استخدام كلتا الحالتين
  global $a;
  $a = "وظيفة :(اعلان عالمي) من الداخل للخارج [ok] يمكن";

  echo $a;

}

knows(); // [ok]

   echo "<br>";

echo  $a; // [ok]
?>
{% endhighlight %}



# اضافة قيمة جديدة لمتغير .

{% highlight php linenos %}

<?php
$knows = "variable";


function a1(){
    global $a1;
    echo $a1;
}

knows(); // Outpus: variable
echo $a1; // Outpus: variable

// اضافة القيم .
$a1 = "neue value";

knows(); // Outputs: neue value
echo $a1; // Outputs: neue value
?>
{% endhighlight %}


# Recursive


{% highlight php linenos %}
<?php
function knows($a) {


    global $wie_vile;
    global $sein;

    foreach($a as $a1){
        if(is_array($a1)){
            knows($a1);
        } else{
            $sein[] = $a1;
            $wie_vile++;
        }
    }

    return array('alle' => $wie_vile, 'wie' => $sein);
}

  $familie = array(
    "f1 " => array(
        "f1_1"=>1,
        "f1_2"=>2,
        "f1_3"=>3
    ),
    "f2" => array(
        "f2_1"=>4,
        "f3" => array(
            "f3_1"=>5,
            "f3_2"=>6,
            "f3_3"=>7
        ),
        "f3_4"=>8,
        "f3_5"=>9
    ),
    "f4" => array(
        "f5" => array(
            "f6" => array(
                "f6_1"=>10,
                "f6_2"=>11
            ),
            "f6_3"=>12,
            "f6_4"=>13
        ),
        "f6_5"=>14,
        "f7" => array(
            "f7_1"=>15,
            "f7_2"=>16
       )
    )
);

$knows1 = knows($familie);
echo $knows1['alle'];
  echo "<br>";
echo implode('=>', $knows1['wie']);
?>
{% endhighlight %}
