---
title: "Installing-apache2-php-composer-Symfony"
last_modified_at: 2016-03-09T16:20:02-05:00
author_profile: false
keywords: Downloading-und-istall-Symfony ,,Installing-apache2-php-composer-Symfony
#permalink: /Jekyl_paginate/

categories:
  - Symfony
tags:
  - Symfony

excerpt: ""
header:
  overlay_image: /assets/images/Symfony.png
  overlay_filter: rgba(192,192,192,0.3)
  caption: "php: [**knows1**](https://knows1.com)"
  actions:

sidebar:
  nav: "Symfony"
---
{% include tocc icon="cog" title="Installing-apache2-php-composer-Symfony" %}

# إعداد بيئة تطوير Symfony على أنطمة لينكس .


### المتطلبات

> قبل إنشاء أول تطبيق Symfony الخاص بك ، يجب عليك:




> دعونا نبدء معاً من خلال تثبيت المتطلبات على لينكس , في حال كنت تستخدم غير دبيان أو ابنتو ذات الأوامر مع أستبدال اسم المستودع .

{% highlight php linenos %}
~$  sudo apt install apache2
{% endhighlight %}

{% highlight php linenos %}
 $ /usr/sbin/apache2 -v
{% endhighlight %}

{% highlight php linenos %}
 $ sudo  /etc/init.d/apache2 status
{% endhighlight %}

{% highlight php linenos %}
 $ sudo  /etc/init.d/apache2 stop
{% endhighlight %}

{% highlight php linenos %}
 $ sudo  /etc/init.d/apache2 start
{% endhighlight %}

{% highlight php linenos %}
 $ sudo  /etc/init.d/apache2 restart
{% endhighlight %}

{% highlight php linenos %}
 $ sudo  /etc/init.d/apache2 reload
{% endhighlight %}

{% highlight php linenos %}
 $ sudo  /etc/init.d/apache2 force-reload
{% endhighlight %}
> لنبدء مهمتنا من خلال الأمر التالي :
{% highlight php linenos %}
$ sudo nano /etc/apache2/mods-enabled/dir.conf
{% endhighlight %}

> سوف تشاهد مثل هذا .

{% highlight php linenos %}
<IfModule mod_dir.c>

        DirectoryIndex index.html index.cgi index.pl index.php index.xhtml index.htm

</IfModule>

# vim: syntax=apache ts=4 sw=4 sts=4 sr noet
{% endhighlight %}






> لاحظ أن index.html هو الأول فقط انسخ index.php للأول .







> احفظ التغيرات من كنترول + o .

- عمل reload ل apache من خلال الأمر التالي :
{% highlight php linenos %}
 $ sudo  /etc/init.d/apache2 reload
{% endhighlight %}
> دعونا نتأكد من حالة أباتشي من خلال الأمر التالي :

{% highlight php linenos %}
 $ sudo  /etc/init.d/apache2 status
{% endhighlight %}

{% highlight php linenos %}
$  sudo  /etc/init.d/apache2 status
● apache2.service - The Apache HTTP Server
   Loaded: loaded (/lib/systemd/system/apache2.service; enabled; vendor preset: enabled)
   Active: active (running) since Wed 2019-10-16 00:45:28 UTC; 4min 43s ago
     Docs: https://httpd.apache.org/docs/2.4/
  Process: 7425 ExecStart=/usr/sbin/apachectl start (code=exited, status=0/SUCCESS)
  Process: 7595 ExecReload=/usr/sbin/apachectl graceful (code=exited, status=0/SUCCESS)
 Main PID: 7429 (apache2)
    Tasks: 6 (limit: 651)
   Memory: 12.1M
   CGroup: /system.slice/apache2.service
           ├─7429 /usr/sbin/apache2 -k start
           ├─7603 /usr/sbin/apache2 -k start
           ├─7604 /usr/sbin/apache2 -k start
           ├─7605 /usr/sbin/apache2 -k start
           ├─7606 /usr/sbin/apache2 -k start
           └─7607 /usr/sbin/apache2 -k start

Oct 16 00:45:27 instance-2 systemd[1]: Starting The Apache HTTP Server...
Oct 16 00:45:28 instance-2 systemd[1]: Started The Apache HTTP Server.
Oct 16 00:48:52 instance-2 systemd[1]: Reloading The Apache HTTP Server.
Oct 16 00:48:52 instance-2 systemd[1]: Reloaded The Apache HTTP Server.
{% endhighlight %}

> كيفية إنشاء مضيف ظاهري للتطبيق الذي نعمل لأجله ؟
{% highlight php linenos %}
$ sudo mkdir /var/www/knows1
{% endhighlight %}

# أصلاح ملكية الملفات .
{% highlight php linenos %}
$  ls -l /var/www/
total 8
drwxr-xr-x 2 root root 4096 Oct 15 23:59 html
drwxr-xr-x 2 root root 4096 Oct 16 00:52 knows1
{% endhighlight %}

{% highlight php linenos %}
$ sudo chown -R $USER:$USER /var/www
{% endhighlight %}

{% highlight php linenos %}
drwxr-xr-x 2 knows1 knows1 4096 Oct 15 23:59 html
drwxr-xr-x 2 knows1 knows1 4096 Oct 16 00:52 knows1
{% endhighlight %}

> الآن نحن بحاجة أنشاء ملف جديد في الدليل التالي لدلالة على المضيف الجديد الخاص بنا .


{% highlight php linenos %}
$ sudo touch /etc/apache2/sites-available/knows1.conf
{% endhighlight %}

{% highlight php linenos %}
$ ls /etc/apache2/sites-available/
000-default.conf  default-ssl.conf  knows1.conf
{% endhighlight %}

{% highlight php linenos %}
$ sudo nano /etc/apache2/sites-available/knows1.conf
{% endhighlight %}


> لا تنسى استبدال knows1 بمعلوماتك .




{% highlight php linenos %}
<VirtualHost * :80>

    ServerAdmin webmaster@localhost

    DocumentRoot /var/www/knows1

  ServerName knows1.com

    ServerAlias www.knows1.com

    ErrorLog ${APACHE_LOG_DIR}/error.log

    CustomLog ${APACHE_LOG_DIR}/access.log combined

</VirtualHost>
{% endhighlight %}


{% highlight php linenos %}
$ sudo a2ensite knows1
{% endhighlight %}

{% highlight php linenos %}
$ sudo systemctl reload apache2
{% endhighlight %}

> في حال رغبت في تعطليه .
{% highlight php linenos %}
$ sudo a2dissite 000-default
{% endhighlight %}


> التحق أن عملنا يسير على النحو الصحيح .
{% highlight php linenos %}
$  sudo apache2ctl configtest
Syntax OK
{% endhighlight %}

### حالة جدار الحماية ؟
{% highlight php linenos %}
$ sudo ufw status
{% endhighlight %}

#### تثبيت جدار الحماية UFW من خلال الامر التالي .

> ملاحظة : انتبه في حال فعلت جدار الحماية يجب السماح ل SSH و إلا أنك بعد تسجيل الخروج من الخادم الخاص بك سوف تفقد الدخول إليه مرة أخرى .


| Usage| ufw COMMAND | |
| ---- | ---- | ---- |
| Commands | | |
| enable          |                enables the firewall | |
| disable            |             disables the firewall | |
| default ARG         |            set default policy | |
| logging LEVEL        |           set logging to LEVEL | |
| allow ARGS            |          add allow rule | |
| deny ARGS              |         add deny rule | |
| reject ARGS             |        add reject rule | |
| limit ARGS               |       add limit rule | |
| delete RULE|NUM       |          delete RULE | |
| insert NUM RULE        |         insert RULE at NUM | |
| route RULE              |        add route RULE | |
| route delete RULE|NUM    |       delete route RULE | |
| route insert NUM RULE     |      insert route RULE at NUM | |
| reload                     |     reload firewall | |
| reset              |             reset firewall | |
| status              |            show firewall status | |
| status numbered      |           show firewall status as numbered list of RULES | |
| status verbose        |          show verbose firewall status | |
| show ARG               |         show firewall report | |
| version                 |        display version information | |

| Application | profile commands | |
 | app list     |                   list application profiles | |
 | app info PROFILE      |          show information on PROFILE | |
 | app update PROFILE    |          update PROFILE | |
 | app default ARG       |          set default application policy | |


{% highlight php linenos %}
$ sudo apt install ufw
{% endhighlight %}
### هل جدار الحماية الخاص بك يسمح بحركة مرور HTTP و HTTPS. ؟
{% highlight php linenos %}
$ sudo ufw app list
{% endhighlight %}
### تثبيت PHP 7.1 أو الأصدارت الأعلى .
1. Ctype .
2. iconv .
3. JSON .
4. PCRE .
5. Session .
6. SimpleXML .
7. Tokenizer .

{% highlight php linenos %}
$ apt-cache search php libapache2-mod-php
{% endhighlight %}

{% highlight php linenos %}
$ php -v
PHP 7.3.9-1~deb10u1 (cli) (built: Sep 18 2019 10:33:23) ( NTS )
Copyright (c) 1997-2018 The PHP Group
Zend Engine v3.3.9, Copyright (c) 1998-2018 Zend Technologies
    with Zend OPcache v7.3.9-1~deb10u1, Copyright (c) 1999-2018, by Zend Technologies
{% endhighlight %}





### تثبيت الملحن ، والذي يستخدم لتثبيت حزم PHP ؛

أذهب للموقع الرسمي و سوف تجد ما يشبه هذا  [https://getcomposer.org](https://getcomposer.org)
{% highlight php linenos %}
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
{% endhighlight %}

{% highlight php linenos %}
$ sudo mv composer.phar /usr/local/bin/composer
{% endhighlight %}

{% highlight php linenos %}
$ composer
{% endhighlight %}


### قم بتثبيت Symfony مع الأدوات التي تحتاجها لتطوير تطبيقك محليًا.
{% highlight php linenos %}
$ wget https://get.symfony.com/cli/installer -O - | bash
{% endhighlight %}

{% highlight php linenos %}
$ export PATH="$HOME/.symfony/bin:$PATH"
{% endhighlight %}

{% highlight php linenos %}
$ sudo  mv /home/knows1/.symfony/bin/symfony /usr/local/bin/symfony
{% endhighlight %}

{% highlight php linenos %}
$ symfony
Symfony CLI version v4.7.3 (c) 2017-2019 Symfony SAS
Symfony CLI helps developers manage projects, from local code to remote infrastructure
{% endhighlight %}

| These are common commands used in various situations| | |
| ---- | ---- | ---- |
|Work on a project locally| | |

|  new  | Create a new Symfony project  | |
|  serve |Run a local web server | |
| server:stop | Stop the local web server | |
| security:check| Check security issues in project dependencies | |
| composer| Runs Composer without memory limit | |
| console |Runs the Symfony Console (bin/console) for current project | |
| php, pecl, pear, php-fpm, php-cgi, php-config, phpdbg | Runs the named binary using the configured PHP version | |

| Manage a project on Cloud | | |
| ---- | ---- | ---- |
|  login| Log in with your SymfonyConnect account | |
|  init|Initialize a new project using templates | |
|  link| Link current git repository to a SymfonyCloud project | |
|  projects| List active projects | |
|  envs | List environments | |
|  env:create| Create an environment | |
|  tunnel:open|Open SSH tunnels to the app's services | |
|  ssh | Open an SSH connection to the app container | |
|  deploy | Deploy an environment | |
|  domains | List domains | |
|  vars | List variables | |
|  user:add |Add a user to the project | |

#### التأكد من سير الأمور على ما يرام .

{% highlight php linenos %}
$  symfony check:requirements
{% endhighlight %}


> بعد الفحص وجد لدي المشكلة التالية .

{% highlight php linenos %}
[ERROR]                                          
 Your system is not ready to run Symfony projects
{% endhighlight %}


#### الحل .

{% highlight php linenos %}
$ apt-cache search php SimpleXML
{% endhighlight %}

{% highlight php linenos %}
$ sudo apt install php-xml
{% endhighlight %}

{% highlight php linenos %}
[OK]                                         
 Your system is ready to run Symfony projects
{% endhighlight %}
