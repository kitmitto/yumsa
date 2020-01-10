---
title: "How to stop users from Switching to Root user ?"
last_modified_at: 2016-03-09T16:20:02-05:00
author_profile: false
keywords: How To Add and Delete Users on Debian 10,How to stop users from Switching to Root user ?,
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
{% include tocc icon="cog" title="How to stop users from Switching to Root user ?" %}

# How to stop users from Switching to Root user ?

1. add new user .

 {% highlight php linenos %}
$ sudo adduser username
{% endhighlight %}

{% highlight php linenos %}
Try again? [y/N]
Changing the user information for username
Enter the new value, or press ENTER for the default
        Full Name []:
        Room Number []:
        Work Phone []:
        Home Phone []:
        Other []:
Is the information correct? [Y/n] y
{% endhighlight %}


2. Configure username can switch to root account with su command.

{% highlight php linenos %}
$ sudo usermod -G adm username
{% endhighlight %}

{% highlight php linenos %}
$ sudo nano /etc/pam.d/su
{% endhighlight %}

4. Look for this

{% highlight php linenos %}
# auth       required   pam_wheel.so
{% endhighlight %}

5. uncomment => # auth

6. add the group

{% highlight php linenos %}
auth       required   pam_wheel.so group=adm
{% endhighlight %}

[1](https://fragen.knows1.com/server/How-to-Add-and-Delete-a-User-to-Sudoers/)[2](https://fragen.knows1.com/server/How-do-I-stop-sudo-su/)[3](https://fragen.knows1.com/server/How-To-Add-and-Delete-Users-on-Debian-10/)[4](https://fragen.knows1.com/server/How-to-stop-users-from-Switching-to-Root-user/)
