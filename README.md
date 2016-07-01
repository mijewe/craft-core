# Craft Core
A starting point for creating new Craft projects.

## What is this?
Craft Core is a sort of boilerplate for new Craft projects. Unlike the old Craft Boilerplate, here the core templates and styles are separate from the rest of the templates and styles. This should reduce the amount of horrible conflicts you've got to deal with when pulling the latest changes from Craft Core into your project.

## What's in the box?

## Getting Started
To create a new Craft project based on this Core, create your repo and add Craft Core as a remote,
```
git remote add core https://github.com/mijewe/craft-core.git
```
pull in the contents,
```
git pull core master
```
and then make sure you can't push up to the core, as that may well break everything.
```
git remote set-url --push core no_push
```

### Setting Up
Your site is built with [Craft](http://craftcms.com), but the Craft source files are not included with this repo. That would be ridiculous. Don't worry about installing Craft though, as that's done for you with the ```grunt init``` task.

We compile all our assets using Grunt. So first run ```npm i``` to install the node modules, ```bower update``` to install the bower components, ```grunt init``` to install Craft, and then ```grunt build``` to generate all the assets.

```
npm i ; bower update ; grunt init build
```

## Plugins we use in this project
We don't include plugin files in the repo. That would also be ridiculous. So here is a list of the plugins used:
* [Anchor](https://github.com/mijewe/craft-anchor)
* [Cachey](https://github.com/dustcollective/craft-cachey), by Dust
* [Contact Form](https://github.com/pixelandtonic/ContactForm), by Pixel & Tonic
* [Email Wrap](https://github.com/mijewe/craft-emailwrap)
* [JSON Transforms](https://github.com/mijewe/craft-jsontransforms)
* [Redirect Manager](https://github.com/rkingon/Craft-Plugin--Redirect-Manager), by Roi Kingon
* [Refresh String](https://github.com/mijewe/craft-refreshstring.git)
* [Sprout Fields](http://sprout.barrelstrengthdesign.com/craft-plugins/fields), by Barrel Strength Design
* [Typogrify](https://github.com/jamiepittock/craft-typogrify), by Jamie Pittock
