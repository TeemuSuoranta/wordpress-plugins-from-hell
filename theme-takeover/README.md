# Theme Takeover

## Sales pitch

Is your theme doing a bad job at presenting your content? You can outsource practically all that theme stuff to a plugin. Theme Takeover will ignore all those messy page templates and replace them with a minimalistic solution.

## What it does?

Modifies `template_include` filter overriding the default [Template Hierarchy](https://developer.wordpress.org/themes/basics/template-hierarchy/). After activation all the front-end views use template from this plugin.

No permanent damage is done to site but front-end will seem broken. So, maybe don't install this as well.

## What's the issue?

The separation of themes and plugins is mostly an illusion. Plugin can do practically everything that theme can and vice versa. You can host all of your templates in a plugin. You can set `theme_supports` in a plugin.

Only practical separation is that WordPress site requires one theme to be active. No plugins are required. The minimal theme is required to have `style.css` that holds metadata (and styles), `index.php` as catch-all template and `functions.php` for various PHP code. You could probably make it down to 2 files with some hooks in `functions.php`. Themes practically always hold much more code but it is not required. You can do all that other stuff in a plugin if you want.

One common misconception is that theme has some kind of upper hand on what goes to front end but that's not really true. With right hooks and priorities, plugins can absolutely override lots of things that theme has done. Theme can also override many things that plugin does.

When this interchangeability is known, the rules of what should be done in a plugin or in a theme become a bit artificial. Code organization, maintainability and ability to use built-in update functionality then dictate that some things are usually done in a plugin and some others in a theme. Some things are also easier done in a theme because there is some built-in logic like the default Template Hierarchy.

The main lesson here is that plugins can modify themes in a way that you cannot practically prevent as a theme developer.
