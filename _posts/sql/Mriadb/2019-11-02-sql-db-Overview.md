---
title: " نظرة عامة على قواعد الببانات"
last_modified_at: 2016-03-09T16:20:02-05:00
author_profile: false
keywords: npm , JavaScript, sql-db,
#permalink: /Jekyl_paginate/

categories:
  - sql-db
tags:
  - sql-db

excerpt: ""
header:
  overlay_image: /assets/images/php_knows1.jpg
  overlay_filter: rgba(192,192,192,0.3)
  caption: "sql-db: [**knows1**](https://knows1.com)"
  actions:

sidebar:
  nav: "sql-db"
---
{% include tocc icon="cog" title="  نظرة عامة على قواعد الببانات" %}

# نظرة عامة على قواعد الببانات

### تسجيل الدخول لخادم قاعدة البيانات .

{% highlight sql linenos %}
$ sudo mysql -u root
{% endhighlight %}

### انشاء قاعدة بيانات جديدة .

{% highlight sql linenos %}
MariaDB [(none)]> CREATE DATABASE IF NOT EXISTS knows1;                   
Query OK, 1 row affected (0.001 sec)
{% endhighlight %}

### تسجيل الدخول لقاعدة البيانات التي أنشأنها .

{% highlight sql linenos %}
MariaDB [(none)]> use  knows1;
Database changed
{% endhighlight %}
### أنشاء جدول Blog .

{% highlight sql linenos %}
CREATE TABLE IF NOT EXISTS blog (
  blogID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  contents VARCHAR(100) NOT NULL,
  readingID INT, writerID INT);
{% endhighlight %}

### أنشاء جدول Writer .

{% highlight sql linenos %}
CREATE TABLE IF NOT EXISTS writer
(id INT NOT NULL PRIMARY KEY AUTO_INCREMENT);
{% endhighlight %}

### أنشاء جدول reading .

{% highlight sql linenos %}
CREATE TABLE IF NOT EXISTS reading
(id INT NOT NULL PRIMARY KEY AUTO_INCREMENT);
{% endhighlight %}
### أدخال البيانات .

{% highlight sql linenos %}
INSERT INTO blog (contents,readingID,writerID)
VALUES('php',1,1998),
      ('java',2,2005),
      ('git',3,2019),
      ('docker',4,2016),
      ('symfony',5,2011),
      ('gcloud',6,2018);
{% endhighlight %}

### مشاهدة الجدول .

{% highlight sql linenos %}
MariaDB [knows1]> SHOW TABLES;                                                                              
+------------------+
| Tables_in_knows1 |
+------------------+
| blog             |
| reading          |
| writer           |
+------------------+
3 rows in set (0.000 sec)
{% endhighlight %}

### مشاهدة معلومات جدول .


{% highlight sql linenos %}
MariaDB [knows1]> DESCRIBE blog;
+-----------+--------------+------+-----+---------+----------------+
| Field     | Type         | Null | Key | Default | Extra          |
+-----------+--------------+------+-----+---------+----------------+
| blogID    | int(11)      | NO   | PRI | NULL    | auto_increment |
| contents  | varchar(100) | NO   |     | NULL    |                |
| readingID | int(11)      | YES  |     | NULL    |                |
| writerID  | int(11)      | YES  |     | NULL    |                |
+-----------+--------------+------+-----+---------+----------------+
4 rows in set (0.001 sec)
{% endhighlight %}

{% highlight sql linenos %}
MariaDB [knows1]> DESCRIBE reading;
+-------+---------+------+-----+---------+----------------+
| Field | Type    | Null | Key | Default | Extra          |
+-------+---------+------+-----+---------+----------------+
| id    | int(11) | NO   | PRI | NULL    | auto_increment |
+-------+---------+------+-----+---------+----------------+
1 row in set (0.001 sec)
{% endhighlight %}

{% highlight sql linenos %}
MariaDB [knows1]> DESCRIBE writer;
+-------+---------+------+-----+---------+----------------+
| Field | Type    | Null | Key | Default | Extra          |
+-------+---------+------+-----+---------+----------------+
| id    | int(11) | NO   | PRI | NULL    | auto_increment |
+-------+---------+------+-----+---------+----------------+
1 row in set (0.001 sec)
{% endhighlight %}

### أسترداد المعلومات من الجدول .

{% highlight sql linenos %}
MariaDB [knows1]> SELECT * FROM blog;
+--------+----------+-----------+----------+
| blogID | contents | readingID | writerID |
+--------+----------+-----------+----------+
|      1 | php      |         1 |     1998 |
|      2 | java     |         2 |     2005 |
|      3 | git      |         3 |     2019 |
|      4 | docker   |         4 |     2016 |
|      5 | symfony  |         5 |     2011 |
|      6 | gcloud   |         6 |     2018 |
+--------+----------+-----------+----------+
6 rows in set (0.000 sec)
{% endhighlight %}

### ادخال بيانات جديدة .

{% highlight sql linenos %}
INSERT INTO blog (contents,readingID,writerID)
VALUES('sql===mariadb',11,2019);
{% endhighlight %}
{% highlight sql linenos %}
MariaDB [knows1]> SELECT * FROM blog;
+--------+---------------+-----------+----------+
| blogID | contents      | readingID | writerID |
+--------+---------------+-----------+----------+
|      1 | php           |         1 |     1998 |
|      2 | java          |         2 |     2005 |
|      3 | git           |         3 |     2019 |
|      4 | docker        |         4 |     2016 |
|      5 | symfony       |         5 |     2011 |
|      6 | gcloud        |         6 |     2018 |
|      7 | sql===mariadb |        11 |     2019 |
+--------+---------------+-----------+----------+
7 rows in set (0.000 sec)
{% endhighlight %}


### تحرير الببانات .


{% highlight sql linenos %}
UPDATE blog  
SET contents = "PHP 7.4.0RC5 released!"
WHERE blogID = 1;
{% endhighlight %}

{% highlight sql linenos %}
MariaDB [knows1]>  SELECT * FROM blog;
+--------+------------------------+-----------+----------+
| blogID | contents               | readingID | writerID |
+--------+------------------------+-----------+----------+
|      1 | PHP 7.4.0RC5 released! |         1 |     1998 |
|      2 | java                   |         2 |     2005 |
|      3 | git                    |         3 |     2019 |
|      4 | docker                 |         4 |     2016 |
|      5 | symfony                |         5 |     2011 |
|      6 | gcloud                 |         6 |     2018 |
|      7 | sql===mariadb          |        11 |     2019 |
+--------+------------------------+-----------+----------+
7 rows in set (0.001 sec)
{% endhighlight %}
