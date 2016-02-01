# Link Social plugin for Craft CMS

A CraftCMS Twig template plugin that links @usernames and hashtags in blocks of text.

## Installation

To install Link Social, follow these steps:

1. Download & unzip the file and place the `linksocial` directory into your `craft/plugins` directory
2.  -OR- do a `git clone https://github.com/shealan/linksocial.git` directly into your `craft/plugins` folder.  You can then update it with `git pull`
3. Install plugin in the Craft Control Panel under Settings > Plugins
4. The plugin folder should be named `linksocial` for Craft to see it.  GitHub recently started appending `-master` (the branch name) to the name of the folder for zip file downloads.

Link Social works on Craft 2.4.x and Craft 2.5.x.

## Link Social Overview

Linksocial is a super simple plugin to link usernames and hastags in blocks of text. It currently supports Twitter and Instagram.

## Using Link Social

Add the following pipe to any text content and set the option to twitter or instagram to ensure links point to the right place. Eg:

```
{{ entry.tweet | linkSocial('twitter') }}
```

Note: Linksocial will strip HTML tags from this text before adding it's own, so formatting will be lost. Tweets and Instagram posts don't have any formatting options so it shouldn't be an issue.

## Link Social Roadmap

Some things to do, and ideas for potential features:

* Add option to link to current page or new window (currently new window only).

## Link Social Changelog

### 1 -- 2016.01.29

* Initial release

Brought to you by [Shealan Forshaw](http://shealanforshaw.com)