---
title: "Add User to Sudoers CentOS and Add User to Sudo Group ?"
last_modified_at: 2016-03-09T16:20:02-05:00
author_profile: false
keywords: Install Atom on CentOS , Install Atom on debian,How To Install Google Chrome On a CentOS ?,Add User to Sudoers CentOS and Add User to Sudo Group,
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
{% include tocc icon="cog" title="How To Add and Delete Users" %}


# Add User to Sudoers CentOS and Add User to Sudo Group

## How To Add and Delete Users on a CentOS 7 Server

{% highlight linux linenos %}
# ssh root@server_ip_address
{% endhighlight %}

## How to Add and Delete Users

{% highlight linux linenos %}
# adduser username
{% endhighlight %}

{% highlight linux linenos %}
# passwd
{% endhighlight %}

## Add a User to a Group or Second Group .

{% highlight linux linenos %}
# usermod -aG wheel username
{% endhighlight %}

{% highlight linux linenos %}
# exit
{% endhighlight %}
## Remove a Linux user

{% highlight linux linenos %}
$ sudo userdel username
{% endhighlight %}

{% highlight linux linenos %}
$ sudo userdel -r username
{% endhighlight %}
