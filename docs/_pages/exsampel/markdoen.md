---
permalink: /Markdown/
title: "Markdown: Basics"
---

[Markdown](https://daringfireball.net/projects/markdown/license)

# 1

This is an H1
=============

This is an H2
-------------

```html
This is an H1
=============

This is an H2
-------------
```

# 2

# This is an H1

## This is an H2

###### This is an H6

```html
# This is an H1

## This is an H2

###### This is an H6

```
# 4

# This is an H1 #

## This is an H2 ##

### This is an H3 ######

```html
# This is an H1 #

## This is an H2 ##

### This is an H3 ######
```
# 5

> This is a blockquote with two paragraphs. Lorem ipsum dolor sit amet,
> consectetuer adipiscing elit. Aliquam hendrerit mi posuere lectus.
> Vestibulum enim wisi, viverra nec, fringilla in, laoreet vitae, risus.
>
> Donec sit amet nisl. Aliquam semper ipsum sit amet velit. Suspendisse
> id sem consectetuer libero luctus adipiscing.

```html
> This is a blockquote with two paragraphs. Lorem ipsum dolor sit amet,
> consectetuer adipiscing elit. Aliquam hendrerit mi posuere lectus.
> Vestibulum enim wisi, viverra nec, fringilla in, laoreet vitae, risus.
>
> Donec sit amet nisl. Aliquam semper ipsum sit amet velit. Suspendisse
> id sem consectetuer libero luctus adipiscing.
```
# 6

Markdown allows you to be lazy and only put the > before the first line of a hard-wrapped paragraph:

```html
Markdown allows you to be lazy and only put the > before the first line of a hard-wrapped paragraph:
```
# 7

> This is a blockquote with two paragraphs. Lorem ipsum dolor sit amet,
consectetuer adipiscing elit. Aliquam hendrerit mi posuere lectus.
Vestibulum enim wisi, viverra nec, fringilla in, laoreet vitae, risus.

> Donec sit amet nisl. Aliquam semper ipsum sit amet velit. Suspendisse
id sem consectetuer libero luctus adipiscing.

```html
> This is a blockquote with two paragraphs. Lorem ipsum dolor sit amet,
consectetuer adipiscing elit. Aliquam hendrerit mi posuere lectus.
Vestibulum enim wisi, viverra nec, fringilla in, laoreet vitae, risus.

> Donec sit amet nisl. Aliquam semper ipsum sit amet velit. Suspendisse
id sem consectetuer libero luctus adipiscing.
```
# 8

Blockquotes can be nested (i.e. a blockquote-in-a-blockquote) by adding additional levels of >:

```html
Blockquotes can be nested (i.e. a blockquote-in-a-blockquote) by adding additional levels of >:
```

# 9
> This is the first level of quoting.
>
> > This is nested blockquote.
>
> Back to the first level.

```html
> This is the first level of quoting.
>
> > This is nested blockquote.
>
> Back to the first level.
```

# 10
> ## This is a header.
>
> 1.   This is the first list item.
> 2.   This is the second list item.
>
> Here's some example code:
>
>     return shell_exec("echo $input | $markdown_script");

```html
> ## This is a header.
>
> 1.   This is the first list item.
> 2.   This is the second list item.
>
> Here's some example code:
>
>     return shell_exec("echo $input | $markdown_script");
```

# 11

*   Red
*   Green
*   Blue

```html
*   Red
*   Green
*   Blue
```
# 12

+   Red
+   Green
+   Blue

```html
+   Red
+   Green
+   Blue

```
# 13

-   Red
-   Green
-   Blue


```html
-   Red
-   Green
-   Blue

```
# 14

1.  Bird
2.  McHale
3.  Parish

```html
1.  Bird
2.  McHale
3.  Parish

<ol>
<li>Bird</li>
<li>McHale</li>
<li>Parish</li>
</ol>

```
# 15


```html

```
```html

```
```html

```
```html

```
```html

```
```html

```
```html

```
```html

```
```html

```
```html

```
```html

```
```html

```
```html

```
```html

```
```html

```
```html

```
```html

```
```html

```


#########

A First Level Header
====================

A Second Level Header
---------------------

Now is the time for all good men to come to
the aid of their country. This is just a
regular paragraph.

The quick brown fox jumped over the lazy
dog's back.

### Header 3

> This is a blockquote.
>
> This is the second paragraph in the blockquote.
>
> ## This is an H2 in a blockquote
Output:

<h1>A First Level Header</h1>

<h2>A Second Level Header</h2>

<p>Now is the time for all good men to come to
the aid of their country. This is just a
regular paragraph.</p>

<p>The quick brown fox jumped over the lazy
dog's back.</p>

<h3>Header 3</h3>

<blockquote>
    <p>This is a blockquote.</p>

    <p>This is the second paragraph in the blockquote.</p>

    <h2>This is an H2 in a blockquote</h2>
</blockquote>
PHRASE EMPHASIS
Markdown uses asterisks and underscores to indicate spans of emphasis.

Markdown:

Some of these words *are emphasized*.
Some of these words _are emphasized also_.

Use two asterisks for **strong emphasis**.
Or, if you prefer, __use two underscores instead__.
Output:

<p>Some of these words <em>are emphasized</em>.
Some of these words <em>are emphasized also</em>.</p>

<p>Use two asterisks for <strong>strong emphasis</strong>.
Or, if you prefer, <strong>use two underscores instead</strong>.</p>
LISTS
Unordered (bulleted) lists use asterisks, pluses, and hyphens (*, +, and -) as list markers. These three markers are interchangable; this:

*   Candy.
*   Gum.
*   Booze.
this:

+   Candy.
+   Gum.
+   Booze.
and this:

-   Candy.
-   Gum.
-   Booze.
all produce the same output:

<ul>
<li>Candy.</li>
<li>Gum.</li>
<li>Booze.</li>
</ul>
Ordered (numbered) lists use regular numbers, followed by periods, as list markers:

1.  Red
2.  Green
3.  Blue
Output:

<ol>
<li>Red</li>
<li>Green</li>
<li>Blue</li>
</ol>
If you put blank lines between items, you’ll get <p> tags for the list item html. You can create multi-paragraph list items by indenting the paragraphs by 4 spaces or 1 tab:

*   A list item.

    With multiple paragraphs.

*   Another item in the list.
Output:

<ul>
<li><p>A list item.</p>
<p>With multiple paragraphs.</p></li>
<li><p>Another item in the list.</p></li>
</ul>
LINKS
Markdown supports two styles for creating links: inline and reference. With both styles, you use square brackets to delimit the html you want to turn into a link.

Inline-style links use parentheses immediately after the link html. For example:

This is an [example link](http://example.com/).
Output:

<p>This is an <a href="http://example.com/">
example link</a>.</p>
Optionally, you may include a title attribute in the parentheses:

This is an [example link](http://example.com/ "With a Title").
Output:

<p>This is an <a href="http://example.com/" title="With a Title">
example link</a>.</p>
Reference-style links allow you to refer to your links by names, which you define elsewhere in your document:

I get 10 times more traffic from [Google][1] than from
[Yahoo][2] or [MSN][3].

[1]: http://google.com/        "Google"
[2]: http://search.yahoo.com/  "Yahoo Search"
[3]: http://search.msn.com/    "MSN Search"
Output:

<p>I get 10 times more traffic from <a href="http://google.com/"
title="Google">Google</a> than from <a href="http://search.yahoo.com/"
title="Yahoo Search">Yahoo</a> or <a href="http://search.msn.com/"
title="MSN Search">MSN</a>.</p>
The title attribute is optional. Link names may contain letters, numbers and spaces, but are not case sensitive:

I start my morning with a cup of coffee and
[The New York Times][NY Times].

[ny times]: http://www.nytimes.com/
Output:

<p>I start my morning with a cup of coffee and
<a href="http://www.nytimes.com/">The New York Times</a>.</p>
IMAGES
Image syntax is very much like link syntax.

Inline (titles are optional):

![alt html](/path/to/img.jpg "Title")
Reference-style:

![alt html][id]

[id]: /path/to/img.jpg "Title"
Both of the above examples produce the same output:

<img src="/path/to/img.jpg" alt="alt html" title="Title" />
CODE
In a regular paragraph, you can create code span by wrapping html in backtick quotes. Any ampersands (&) and angle brackets (< or >) will automatically be translated into HTML entities. This makes it easy to use Markdown to write about HTML example code:

I strongly recommend against using any `<blink>` tags.

I wish SmartyPants used named entities like `&mdash;`
instead of decimal-encoded entites like `&#8212;`.
Output:

<p>I strongly recommend against using any
<code>&lt;blink&gt;</code> tags.</p>

<p>I wish SmartyPants used named entities like
<code>&amp;mdash;</code> instead of decimal-encoded
entites like <code>&amp;#8212;</code>.</p>
To specify an entire block of pre-formatted code, indent every line of the block by 4 spaces or 1 tab. Just like with code spans, &, <, and > characters will be escaped automatically.

Markdown:

If you want your page to validate under XHTML 1.0 Strict,
you've got to put paragraph tags in your blockquotes:

    <blockquote>
        <p>For example.</p>
    </blockquote>
Output:

<p>If you want your page to validate under XHTML 1.0 Strict,
you've got to put paragraph tags in your blockquotes:</p>

<pre><code>&lt;blockquote&gt;
    &lt;p&gt;For example.&lt;/p&gt;
&lt;/blockquote&gt;
</code></pre>
