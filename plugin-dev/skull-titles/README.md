# Skull Titles – WordPress Plugin

Adds a ☠️ emoji prefix to all post titles on the front-end.  
Used to explore the basics of WordPress plugin architecture and content filtering.

## Why This Exists

This plugin is part of a larger push to relearn from the ground up—starting with:
- Hooking into WordPress filter events
- Understanding plugin file structure and metadata
- Testing changes in a local environment cleanly

## What's Working

- ✅ Hooks into `the_title` filter
- ✅ Modifies post titles without affecting backend or database
- ✅ Active and tested in local WordPress install

## What's Next

- ⏳ Admin settings page to toggle skull prefix on/off  
- ⏳ Learn how to safely use `add_options_page` and `register_setting`  
- ⏳ Sanitize and persist plugin settings using native WP APIs

## Plugin Entry

`/skull-titles/skull-titles.php`

## Notes / Roadblocks

- ⚠️ Local WP install defaults to HTTPS and fails on HTTP  
  - Workaround: Manually access via `https://site-name.local`  
  - Root cause: Likely tied to local server config or certificate mismatch  
  - Fix pending deeper dive once plugin scope expands
