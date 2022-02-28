# Posts on the Run

## Sales pitch

Want to have the experience of having deleted all your content without doing so? Posts on the Run will take you and your visitors into a wild ride. Where did all the posts go?

## What it does?

Manipulates globally `pre_get_posts` action by inserting non-existing post type which breaks practically all front-end views and makes content unreachable in admin.

No permanent damage is done but definately makes your site seem broken when activated. Please, don't do it.

## What's the issue?

WordPress uses [WP_Query](https://developer.wordpress.org/reference/classes/wp_query/) for most of the queries for content. Fetch a list of posts? WP_Query. Show a single post? WP_Query. Display posts for admins in editing view. WP_Query.

There is a very powerful hook called [pre_get_posts](https://developer.wordpress.org/reference/hooks/pre_get_posts/) that lets developers modify all the query arguments used for any WP_Query. This unleashes great power to do anything from changing sort order from newest to alphabetical or creating a complete multilingual plugin that will automatically restrict queries to current language.

With great power comes... you know. Responsibility. It is very easy to mess things up if you are not very careful to check on which contexts you change the query. It is very easy to mess up admin views or just have your changes applied to various archives. Probably most of the developers have made mistakes with this action and many bugs are just waiting to be found.
