# Back to 80s

## Sales pitch

1980s sure was a great decade. Great music, great movies and great games. Sign me up! This plugin takes you back, literally.

## What it does?

Migrates all your content dates back to random dates from 1980s. For best performance, `$wpdb` is used instead of `WP_Query`. The migration starts automatically when you active the plugin and is done in steps to take care even larger site.

**That was fun but how do you reverse it?**

The funny thing is, you don't.

Please don't install this plugin. Or if you do, at least have backups.

## What's the issue?

Plugins can manipulate your data in ways that cannot be reversed. Not just the data they created but any data in the database. Some plugins do a great job cleaning their changes when the plugin is deleted but there are no guarantees.

This means that just activating a plugin briefly you can cause damage to your content that cannot be reversed without restoring a backup. Most of the time things like this doesn't happen but it is not unheard-of.

Most common ways this occures is that plugins create their own database tables or extend new columns to existing tables. When plugin is then removed at some point, these tables and columns are not removed. Other example could be a CDN plugin that will change attachments' data and after removing the plugin all your attachments are broken.

To add some fluff to your database won't require custom tables or columns because we have post meta and term meta where new rows can be added without any SQL knowledge (by using `update_post_meta()` and others). Adding these rows is so easy that many plugins don't really seem to critically consider weather they should do it (or at least to that extent they are doing it). Many SEO plugins are some of the worst offenders of this where each post can have 10+ rows of meta that could have been saved much more efficiently. For those meta rows it is very common that plugins don't clean up the data on uninstall and just leave that bloat in (because you might just install someday again).

The main lesson here is that plugins can cause changes that are still present long after plugin is removed.
