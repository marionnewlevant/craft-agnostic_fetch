# Agnostic Fetch plugin for Craft CMS 3.x

Craft plugin that provides uniform syntax for fetching elements whether or not they have been eager loaded

## Installation

To install Agnostic Fetch, follow these steps:

1. Download & unzip the file, rename the unzipped folder to `agnosticfetch` and place the `agnosticfetch` folder into your `craft/plugins` folder
2. -OR- do a `git clone https://github.com/marionnewlevant/craft3-agnositic_fetch.git` directly into your `craft/plugins` folder, and rename to `agnosticfetch`. You can then update it with `git pull`
3. -OR- install with Composer via `composer require marionnewlevant/agnositic-fetch` from your project folder
4. Install plugin in the Craft Control Panel under Settings > Plugins
5. The plugin folder should be named `agnosticfetch` for Craft to see it.

Agnostic Fetch works on Craft 3.x.

## Agnostic Fetch Overview

The code to fetch the elements from a Craft Element Query is different when the elements have been [eager-loaded](https://craftcms.com/docs/templating/eager-loading-elements). For example, to get the first element of a non eagerly loaded field, `someField.one()`, but for an eagerly loaded field, `someField[0]` (and that doesn't even get into the error checking). With Agnostic Fetch, you can do `someField | one` (or `one(someField)` or `craft.agnosticfetch.one(someField)`).

The Agnostic Fetch functions are available as twig filters, as twig functions, and as craft variables.

## Using Agnostic Fetch

### all

Use any of:

- someField | all
- all(someField)
- craft.agnosticfetch.all(someField)

### one

Use any of:

- someField | one
- one(someField)
- craft.agnosticfetch.one(someField)

### nth

Use any of:

- someField | nth(index)
- nth(someField, index)
- craft.agnosticfetch.nth(someField, index)

(index is based from `0`)

### ids

Use any of:

- someField | ids
- ids(someField)
- craft.agnosticfetch.ids(someField)

### count

Use any of:

- someField | count
- count(someField)
- craft.agnosticfetch.count(someField)

### isEager

In addition to the fetching functions, `isEager` will tell you whether elements have been eager loaded or not.

Use any of:

- someField | isEager
- isEager(someField)
- craft.agnosticfetch.isEager(someField)

Brought to you by [Marion Newlevant](http://marion.newlevant.com)
