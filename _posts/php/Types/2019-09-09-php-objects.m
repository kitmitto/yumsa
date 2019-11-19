






# Objects

الكائن هو نوع بيانات لا يسمح فقط بتخزين البيانات ولكن أيضًا المعلومات الموجودة , كيفية معالجة هذه البيانات. الكائن هو مثيل محدد لفئة-class تخدم كقوالب لكائنات-objects , يتم إنشاء الكائنات بناءً على هذا القالب عبر الكلمة الأساسية الجديدة.

كل كائن يكونه التالي :

- داخل class

- يستقي من properties-الخصائص .

- ينظم سيره methods-طرق

له خصائص و طرق مقابلة لتلك الخاصة بفئته الرئيسية

- كل  كائن مستقل تماما مع properties and methods .

- يمكن لكائن التداحل مع الكائنات الاخرى .





<?php
// Class definition
class greeting{
    // properties
    public $str = "Hello World!";

    // methods
    function show_greeting(){
        return $this->str;
    }
}

// Create object from class
$message = new greeting;
var_dump($message);
?>



<?php
class foo
{
    function do_foo()
    {
        echo "Doing foo.";
    }
}

$bar = new foo;
$bar->do_foo();
?>
