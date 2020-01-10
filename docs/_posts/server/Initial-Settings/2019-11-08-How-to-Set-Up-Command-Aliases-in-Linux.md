---
title: "How to Set Up Command Aliases in Linux"
last_modified_at: 2016-03-09T16:20:02-05:00
author_profile: false
keywords: How To Add and Delete Users on Debian 10,How to Set Up Command Aliases in Linux,
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
{% include tocc icon="cog" title="How to Set Up Command Aliases in Linux" %}

How to Set Up Command Aliases in Linux ?



الأسماء المستعارة في أنظمة التشغيل Unix و Linux رائعة. إنها تتيح لك تحديد الأوامر الخاصة بك ، أو اختصارات الأوامر ، بحيث يمكنك تخصيص سطر الأوامر ، وجعله يعمل بالطريقة التي تريدها .

يمكنك توفير بعض الوقت عن طريق إنشاء أسماء مستعارة للأوامر الأكثر استخدامًا. الأسماء المستعارة مثل الاختصارات المخصصة المستخدمة لتمثيل أمر (أو مجموعة من الأوامر) يتم تنفيذه باستخدام أو بدون خيارات مخصصة. من المحتمل أنك تستخدم أسماء مستعارة بالفعل على نظام Linux الخاص بك.

### see a list of defined aliases

{% highlight linux linenos %}
$ alias
{% endhighlight %}

{% highlight linux linenos %}
alias dir='dir --color=auto'
alias egrep='egrep --color=auto'
alias fgrep='fgrep --color=auto'
alias grep='grep --color=auto'
alias l='ls -CF'
alias la='ls -A'
alias ll='ls -l'
alias ls='ls --color=auto'
alias mv='mv -i'
alias rm='rm -i'
alias vdir='vdir --color=auto'
{% endhighlight %}

{% include adsense.html %}

# 1- all users

{% highlight linux linenos %}
$ cd /etc/profile.d/
{% endhighlight %}

{% highlight linux linenos %}
$ sudo nano .knows1
{% endhighlight %}

# add some more ls aliases

{% highlight linux linenos %}
 alias ll='ls -l'
 alias la='ls -A'
 alias l='ls -CF'
 alias rm='rm -i'
 alias cp='cp -i'
 alias mv='mv -i'
 alias ls='ls --color=auto'
 alias dir='dir --color=auto'
 alias vdir='vdir --color=auto'
 alias grep='grep --color=auto'
 alias fgrep='fgrep --color=auto'
 alias egrep='egrep --color=auto'
{% endhighlight %}

{% highlight linux linenos %}
$ sudo su
{% endhighlight %}

{% highlight linux linenos %}
# source /etc/profile.d/.knows1
{% endhighlight %}

{% highlight linux linenos %}
# exit
{% endhighlight %}

{% highlight linux linenos %}
$ source /etc/profile.d/.knows1
{% endhighlight %}

# add to One user .
{% include adsense.html %}
{% highlight linux linenos %}
$ nano ~/.bashrc
{% endhighlight %}

# add some more ls aliases

{% highlight linux linenos %}
 alias ll='ls -l'
 alias la='ls -A'
 alias l='ls -CF'
 alias rm='rm -i'
 alias cp='cp -i'
 alias mv='mv -i'
 alias ls='ls --color=auto'
 alias dir='dir --color=auto'
 alias vdir='vdir --color=auto'
 alias grep='grep --color=auto'
 alias fgrep='fgrep --color=auto'
 alias egrep='egrep --color=auto'
{% endhighlight %}
