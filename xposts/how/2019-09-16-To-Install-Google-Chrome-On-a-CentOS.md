---
title: "How To Install Google Chrome On a CentOS ?"
last_modified_at: 2016-03-09T16:20:02-05:00
author_profile: false
keywords: Install Atom on CentOS , Install Atom on debian,How To Install Google Chrome On a CentOS ?,
#permalink: /Jekyl_paginate/

categories:
  - How
tags:
  - How

excerpt: ""
header:
  overlay_image: /assets/images/php_knows1.jpg
  overlay_filter: rgba(192,192,192,0.3)
  caption: "php: [**knows1**](https://knows1.com)"
  actions:

sidebar:
  nav: "How"
---
{% include tocc icon="cog" title="Install Google Chrome" %}

# How To Install Google Chrome On a CentOS ?

{% highlight linux linenos %}
$ echo "You are using $(getconf LONG_BIT) bit Linux distro."
{% endhighlight %}

> You are using 64 bit Linux distro.

## Install Google Chrome .

{% highlight linux linenos %}
$ wget https://dl.google.com/linux/direct/google-chrome-stable_current_x86_64.rpm
{% endhighlight %}

{% highlight linux linenos %}
$ sudo yum install ./google-chrome-stable_current_*.rpm -y
{% endhighlight %}

{% highlight linux linenos %}
$ rm google-chrome-stable_current_*.rpm
{% endhighlight %}

{% highlight linux linenos %}
sudo dnf install google-chrome-stable_current_*.rpm
{% endhighlight %}

## How do I upgrade Google Chrome ?

{% highlight linux linenos %}
$ sudo yum update google-chrome-stable
{% endhighlight %}
