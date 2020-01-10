---
title: "How to Install MariaDB"
last_modified_at: 2016-03-09T16:20:02-05:00
author_profile: false
keywords: How do I know if MariaDB is installed? , How do I access MariaDB? ,How to check MariaDB version,What is MariaDB default password?,How To Add and Delete Users on Debian 10,How to install an SSL Certificate on Debian, كيفية تنصيب شهادة SSL مجانية عبر خدمة Let's encrypt ,
#permalink: /Jekyl_paginate/

categories:
  - server
tags:
  - server

excerpt: "How to Install MariaDB"
header:
  overlay_image: /assets/images/linux.jpg
  overlay_filter: rgba(192,192,192,0.3)
  caption: "php: [**knows1**](https://knows1.com)"
  actions:

sidebar:
  nav: "server"
---

{% include tocc icon="cog" title="How To Install MariaDB on Debian 10" %}




# How to Install MariaDB .

## How To Install MariaDB on Debian 10 ?

{% highlight php linenos %}
@mariadb:~$ sudo apt -y update && sudo apt -y upgrade
{% endhighlight %}

{% highlight php linenos %}
@mariadb:~$ sudo apt -y install mariadb-server
{% endhighlight %}

{% highlight php linenos %}
Reading package lists... Done
Building dependency tree       
Reading state information... Done
The following additional packages will be installed:
  galera-3 gawk libaio1 libcgi-fast-perl libcgi-pm-perl libconfig-inifiles-perl
  libdbd-mysql-perl libdbi-perl libencode-locale-perl libfcgi-perl libgdbm-compat4
  libhtml-parser-perl libhtml-tagset-perl libhtml-template-perl libhttp-date-perl
  libhttp-message-perl libio-html-perl liblwp-mediatypes-perl libmariadb3 libmpfr6
  libperl5.28 libreadline5 libsigsegv2 libsnappy1v5 libterm-readkey-perl
  libtimedate-perl liburi-perl lsof mariadb-client-10.3 mariadb-client-core-10.3
  mariadb-common mariadb-server-10.3 mariadb-server-core-10.3 mysql-common perl
  perl-modules-5.28 psmisc rsync socat
{% endhighlight %}

### Enter

{% highlight php linenos %}
@mariadb:~$ sudo mysql_secure_installation
{% endhighlight %}

{% highlight php linenos %}
NOTE: RUNNING ALL PARTS OF THIS SCRIPT IS RECOMMENDED FOR ALL MariaDB
      SERVERS IN PRODUCTION USE!  PLEASE READ EACH STEP CAREFULLY!

In order to log into MariaDB to secure it, we'll need the current
password for the root user.  If you've just installed MariaDB, and
you haven't set the root password yet, the password will be blank,
so you should just press enter here.

Enter current password for root (enter for none):
{% endhighlight %}

### Enter n

{% highlight php linenos %}
Setting the root password ensures that nobody can log into the MariaDB
root user without the proper authorisation.

Set root password? [Y/n]
{% endhighlight %}

### Enter Y

{% highlight php linenos %}
By default, a MariaDB installation has an anonymous user, allowing anyone
to log into MariaDB without having to have a user account created for
them.  This is intended only for testing, and to make the installation
go a bit smoother.  You should remove them before moving into a
production environment.
Remove anonymous users? [Y/n]
{% endhighlight %}

### Enter Y

{% highlight php linenos %}
Normally, root should only be allowed to connect from 'localhost'.  This
ensures that someone cannot guess at the root password from the network.

Disallow root login remotely? [Y/n]

{% endhighlight %}

### Enter Y

{% highlight php linenos %}
By default, MariaDB comes with a database named 'test' that anyone can
access.  This is also intended only for testing, and should be removed
before moving into a production environment.

Remove test database and access to it? [Y/n]
{% endhighlight %}

### Enter Y
{% highlight php linenos %}
Reloading the privilege tables will ensure that all changes made so far
will take effect immediately.

Reload privilege tables now? [Y/n]
{% endhighlight %}

###

{% highlight php linenos %}
All done!  If you've completed all of the above steps, your MariaDB
installation should now be secure.

Thanks for using MariaDB!
{% endhighlight %}

###

{% highlight php linenos %}
mariadb:~$ sudo mariadb
Welcome to the MariaDB monitor.  Commands end with ; or \g.
Your MariaDB connection id is 42                                                                                 
Server version: 10.3.17-MariaDB-0+deb10u1 Debian 10                                                              

Copyright (c) 2000, 2018, Oracle, MariaDB Corporation Ab and others.                                             

Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.                                   

MariaDB [(none)]>
{% endhighlight %}

###

{% highlight php linenos %}
MariaDB [(none)]> SELECT User,Host,Password FROM mysql.user;                                                     
+------+-----------+----------+
| User | Host      | Password |
+------+-----------+----------+
| root | localhost |          |
+------+-----------+----------+
1 row in set (0.001 sec)
{% endhighlight %}

###

{% highlight php linenos %}
MariaDB [(none)]> show databases;
+--------------------+
| Database           |
+--------------------+
| information_schema |
| mysql              |
| performance_schema |
+--------------------+
3 rows in set (0.000 sec)

MariaDB [(none)]>         
{% endhighlight %}

### How to check MariaDB version ?

{% highlight php linenos %}
MariaDB [(none)]> SELECT VERSION();                                                                              
+---------------------------+
| VERSION()                 |
+---------------------------+
| 10.3.17-MariaDB-0+deb10u1 |
+---------------------------+
1 row in set (0.000 sec)

MariaDB [(none)]>
{% endhighlight %}

###


{% highlight php linenos %}
$ sudo apt -y remove  mariadb-server
{% endhighlight %}

{% highlight php linenos %}
$ sudo apt -y purge mariadb-server
{% endhighlight %}

{% highlight php linenos %}
$ sudo apt -y autoremove
{% endhighlight %}
