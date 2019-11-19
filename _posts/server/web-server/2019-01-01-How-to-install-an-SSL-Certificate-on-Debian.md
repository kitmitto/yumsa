---
title: "How to install an SSL Certificate on Debian ?"
last_modified_at: 2016-03-09T16:20:02-05:00
author_profile: false
keywords: How To Add and Delete Users on Debian 10,How to install an SSL Certificate on Debian, كيفية تنصيب شهادة SSL مجانية عبر خدمة Let's encrypt ,
#permalink: /Jekyl_paginate/

categories:
  - server
tags:
  - server

excerpt: "How to install an SSL Certificate on Debian"
header:
  overlay_image: /assets/images/linux.jpg
  overlay_filter: rgba(192,192,192,0.3)
  caption: "php: [**knows1**](https://knows1.com)"
  actions:

sidebar:
  nav: "server"
---

{% include tocc icon="cog" title="How to install an SSL Certificate on Debian" %}




# How to install an SSL Certificate on Debian ?

# كيفية تنصيب شهادة SSL مجانية عبر خدمة Let's encrypt ؟

## شرح كيفية تثبيت شهادة SSL من [Let's Encrypt](https://certbot.eff.org/docs/) ؟

في حال كنت تتمكن من الحصول على شهادات SSL صالحة لمدة 3 شهور قابلة للتجديد مجاناً ,من خلال التعرف على كيفية الحصول على شهادة SSL مجانية من موقع Let's Encrypt .

## ما هي [Let's Encrypt](https://certbot.eff.org/lets-encrypt/debianbuster-apache) ؟

هي مرجع شهادات غير ربحية و الذي تقوم بإدراته مجموعة Internet Security Research Group , مما يتيح لك الحصول على شهادات X.509  من أجل تشفير أمان طبقة النقل من دون أي رسوم. و هذه الشهادة سوف تكون  صالحة لمدة 90 يومًا ، يمكن بعدها إجراء التجديد اليدوي أو ضبط الإعداد لتجديد التلقائي .


### المتطلبات .

1- port 80

2- خادم Apache .

في حال عدم وجود خادم أباتشي لديك شاهد التالي [How To Install the Apache Web Server](https://fragen.knows1.com/server/How-to-Install-Apache-on-Debian10/)



## تنصيب certbot من خلال الأمر التالي :

{% highlight php linenos %}
$ sudo apt -y install certbot
{% endhighlight %}

{% highlight php linenos %}
knows1:~$ sudo apt -y install certbot
Reading package lists... Done
Building dependency tree       
Reading state information... Done
The following additional packages will be installed:
  libicu63 python-pyicu python3-acme python3-asn1crypto python3-certbot
  python3-certifi python3-cffi-backend python3-chardet
  python3-configargparse python3-configobj python3-cryptography
  python3-distutils python3-future python3-idna python3-josepy
  python3-lib2to3 python3-mock python3-openssl python3-parsedatetime
{% endhighlight %}

{% highlight php linenos %}
$ sudo mkdir  /var/www/html/knows1.net
{% endhighlight %}

{% highlight php linenos %}
$ sudo certbot certonly --webroot -w /var/www/html -d knows1.net
{% endhighlight %}

{% highlight php linenos %}
$ sudo certbot certonly --webroot -w /var/www/html -d knows1.net
Saving debug log to /var/log/letsencrypt/letsencrypt.log
Plugins selected: Authenticator webroot, Installer None
Enter email address (used for urgent renewal and security notices) (Enter 'c' to
cancel):
{% endhighlight %}

{% highlight php linenos %}
lease read the Terms of Service at
https://letsencrypt.org/documents/LE-SA-v1.2-November-15-2017.pdf. You must
agree in order to register with the ACME server at
https://acme-v02.api.letsencrypt.org/directory
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
(A)gree/(C)ancel: A
{% endhighlight %}


{% highlight php linenos %}
Would you be willing to share your email address with the Electronic Frontier
Foundation, a founding partner of the Let's Encrypt project and the non-profit
organization that develops Certbot? We'd like to send you email about our work
encrypting the web, EFF news, campaigns, and ways to support digital freedom.
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
(Y)es/(N)o: N
{% endhighlight %}

{% highlight php linenos %}
   /etc/letsencrypt/live/knows1.net/fullchain.pem
   Your key file has been saved at:
   /etc/letsencrypt/live/knows1.net/privkey.pem
   Your cert will expire on 2020-02-10. To obtain a new or tweaked
   version of this certificate in the future, simply run certbot
   again. To non-interactively renew *all* of your certificates, run
   "certbot renew"
 - If you like Certbot, please consider supporting our work by:

   Donating to ISRG / Let's Encrypt:   https://letsencrypt.org/donate
   Donating to EFF:                    https://eff.org/donate-le
{% endhighlight %}

## How to renew with webroot?

{% highlight php linenos %}
$ sudo certbot renew
{% endhighlight %}

or

{% highlight php linenos %}
$ sudo certbot renew --force-renew
{% endhighlight %}


{% highlight php linenos %}
$ sudo certbot --version
    certbot 0.31.0
{% endhighlight %}
