# Thanos Optimizer

## Sales pitch

Are plugins slowing down your site? Thanos Optimizer comes to the rescue by selecting randomly half of the plugins that you are using and deactivates them. Need to optimize even further? Just activate Thanos Optimizer again.

## What it does?

On activaion hook the list of active plugins is fetched. Half of the plugins are selected randomly and deactivated. Thanos Optimizer cannot self-deactivate because during activation it is not part of the list of active plugins.

Please don't install this plugin. Or if you do, at least have backups. Plugin deactivation hooks are run and if some plugins delete data there, you can absolutely lose some data.

## What's the issue?

Plugins can activate or deactivate other plugins. This is not regularly occurring thing but a neat trivia and demonstrates another way how plugins are not contained into any sandbox where they could not influence your whole site.

WordPress saves list of activated plugins at options table in `active_plugins` row so in theory you can just fetch it like any other option via `get_option('active_plugins')` and deactivate plugins with `deactivate_plugins()`.

Because option values are also filterable via `pre_option_{$option}` you could probably also activate or deactivate other plugins dynamically for example in certain context or certain time. With this filter you could probably also fake the status of plugins in UI so that when admin is looking the plugin list, some plugins would seem deactivated without really being so.

Some plugins are safe from Thanos Optimzer, though. WordPress can have `/mu-plugins/` directory in addition to regular `/plugins/`. These are [Must Use Plugins](https://wordpress.org/support/article/must-use-plugins/) that cannot be deactivated from UI or from database. Any plugin can still find out what mu-plugins are activated through `get_mu_plugins()`.

Notice that mu-plugins cannot have sub-directories by default and you need something like [roots/bedrock-autoloader](https://github.com/roots/bedrock-autoloader) to make it work.
