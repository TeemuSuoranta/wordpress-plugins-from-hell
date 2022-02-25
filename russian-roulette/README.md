# Russian Roulette

## Sales pitch

Is maintaining a WordPress site boring? This plugin gives you true excitement with 1:6 odds of losing it all. Will you survive?

## What it does?

On activation you have 1:6 change to lose all your database tables. This plugin hooks to the activation hook and if you run into bad luck, your database tables are dropped with `$wpdb` but if you survive that, you are safe. If you can see the plugin activated, you made it and can wear that as a badge of honor.

This will actually wreak havoc on your database. Please don't install this plugin.

## What's the issue?

WordPress plugins have access to the database to perform SQL operations on all the tables. This means data that WordPress core created as well as data that other plugins created.

In addition to manipulating just the data SQL can be used to manupulate the table schema as well. Sometimes plugins create new columns or tables in some other character encoding that the rest of the database. This can cause issues with the backups and other weirdness.

Plugin architecture has no way to force plugins to ask your permission when they do something for the first time like your smartphone does. All plugins have practically same amount of power weather they use it or not.
