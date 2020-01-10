---
title: "Linux Services"
last_modified_at: 2016-03-09T16:20:02-05:00
author_profile: false
keywords: How To Add and Delete Users on Debian 10,How to stop users from Switching to Root user,Linux Services ?,
#permalink: /Jekyl_paginate/

categories:
  - server
tags:
  - server

excerpt: ""
header:
  overlay_image: /assets/images/linux.jpg
  overlay_filter: rgba(192,192,192,0.3)
  caption: "php: [**knows1**](https://knows1.com)"
  actions:

sidebar:
  nav: "server"
---
{% include tocc icon="cog" title="Linux Services" %}




# Linux Services


 قد يحدث أن تعمل خدمة ما دون علمك ، وتستهلك موارد النظام ، بل وتجعل نظامك عرضة للخطر إذا لم تؤخذ التدابير الأمنية في الاعتبار. نظرًا لوجود مثل هذه الحالات المحتملة ، من الجيد معرفة كيفية التحقق من هذه الحالات والتعامل معها ، فضلاً عن القدرة على مراقبة العمليات والخدمات التي تعمل على جهازك .

هناك بعض الأدوات التي تجعل من إدارة الخوادم أسهل .


# Systemd Services and Units


- هي أداة الإدارة المركزية للسيطرة على نظام .




1. عرض جميع الخدمات - عرض قائمة الخدمات التي يتم تشغيلها .
{% highlight php linenos %}
#   knows1:~$  systemctl -t service
{% endhighlight %}

2. قائمة إعداد جميع الخدمات .
{% highlight php linenos %}
#    knows1:~$  systemctl list-unit-files -t service
{% endhighlight %}

{% highlight php linenos %}
$   knows1:~$  sudo service --status-all
 [ + ]  apparmor
 [ + ]  chrony
 [ + ]  cron
 [ + ]  dbus
 [ + ]  haveged
 [ - ]  hwclock.sh
 [ + ]  kmod
 [ + ]  networking
 [ + ]  procps
 [ + ]  rsyslog
 [ + ]  ssh
 [ - ]    knows1:~$  sudo
 [ + ]  udev
 [ + ]  unattended-upgrades
{% endhighlight %}

{% highlight php linenos %}
  knows1:~$  systemctl
{% endhighlight %}

## هام
{% highlight php linenos %}
$   knows1:~$  systemctl list-units --all --state=inactive
{% endhighlight %}

## هام
{% highlight php linenos %}
$   knows1:~$  systemctl list-units --type=service
{% endhighlight %}

{% highlight php linenos %}
  knows1:~$  systemctl list-units
{% endhighlight %}

{% highlight php linenos %}
  knows1:~$  systemctl status
{% endhighlight %}

{% highlight php linenos %}
  knows1:~$  sudo   knows1:~$  systemctl start name.service
{% endhighlight %}

{% highlight php linenos %}
  knows1:~$  sudo   knows1:~$  systemctl stop
{% endhighlight %}

{% highlight php linenos %}
  knows1:~$  sudo   knows1:~$  systemctl restart
{% endhighlight %}

{% highlight php linenos %}
  knows1:~$  sudo   knows1:~$  systemctl reload
{% endhighlight %}

{% highlight php linenos %}
  knows1:~$  sudo   knows1:~$  systemctl reload-or-restart
{% endhighlight %}

{% highlight php linenos %}
  knows1:~$  sudo   knows1:~$  systemctl enable
{% endhighlight %}

{% highlight php linenos %}
  knows1:~$  sudo   knows1:~$  systemctl disable
{% endhighlight %}

{% highlight php linenos %}
  knows1:~$  systemctl is-active
{% endhighlight %}

{% highlight php linenos %}
  knows1:~$  systemctl is-enabled
{% endhighlight %}

{% highlight php linenos %}
  knows1:~$  systemctl is-failed
{% endhighlight %}
