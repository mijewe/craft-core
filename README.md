# Craft Boilerplate
A starting point for creating new Craft projects.

## Getting Started
To create a new Craft project based on this repo, create your new repo. Let's call it Feast.

In Feast, add this boilerplate repo as a remote,
```
git remote add boilerplate https://github.com/mijewe/craft-boilerplate.git
```
pull in the contents,
```
git pull boilerplate master
```
and then make sure you can't push up to the boilerplate, as that may well break everything.
```
git remote set-url --push boilerplate no_push
```

### Setting Up
Feast is built with [Craft](http://craftcms.com), but the Craft source files are not included with this repo. That would be ridiculous. Don't worry about installing Craft though, as that's done for you with the ```grunt init``` task.

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
