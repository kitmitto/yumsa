---
title: "burn linux iso to usb"
last_modified_at: 2016-03-09T16:20:02-05:00
author_profile: false
keywords: Download Debian CD and DVD,burn linux iso to usb,
#permalink: /Jekyl_paginate/

categories:
  - Debian
tags:
  - Debian

excerpt: ""
header:
  overlay_image: /assets/images/php_knows1.jpg
  overlay_filter: rgba(192,192,192,0.3)
  caption: "php: [**knows1**](https://knows1.com)"
  actions:

sidebar:
  nav: "Debian"
---
{% include tocc icon="cog" title="burn linux iso to usb" %}

# burn linux iso to usb

{% highlight php linenos %}
$ ls
{% endhighlight %}

{% highlight php linenos %}
debian-9.2.1-arm64-DVD-1.iso
debian-10.1.0-amd64-DVD-3.iso  
Fedora-Workstation-Live-x86_64-29-1.2.iso
{% endhighlight %}

{% highlight php linenos %}
 dd if=<file> of=<device> bs=4M; sync
 dd if=debian-10.1.0-amd64-DVD-3.iso of=/dev/sdb
{% endhighlight %}

## OutPut :

{% highlight php linenos %}
9158264+0 records in
9158264+0 records out
4689031168 bytes (4.7 GB, 4.4 GiB) copied, 1446.48 s, 3.2 MB/s
{% endhighlight %}
