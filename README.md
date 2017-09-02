# Airbrake plugin for Craft CMS

Plugin that allows you to log errors/exceptions in Craft CMS to Airbrake.

## Installation

To install Airbrake, follow these steps:

1. Download & unzip the file and place the `airbrake` directory into your `craft/plugins` directory
2. -OR- do a `git clone https://github.com/csoutham/Craft-Airbrake.git` directly into your `craft/plugins` folder.  You can then update it with `git pull`
3. Install plugin in the Craft Control Panel under Settings > Plugins
4. The plugin folder should be named `airbrake` for Craft to see it.  GitHub recently started appending `-master` (the branch name) to the name of the folder for zip file downloads.

Airbrake works on Craft 2.6.x.

## Airbrake Overview

Airbrake's cross platform error monitoring automatically detects crashes in your applications, letting you ship with confidence.

## Configuring Airbrake

1. Copy  the airbrake.php configuration file into your `craft/config` folder.
2. Update `host`, `projectKey`, `projectId` with a API key from your Airbrake project.
2. (Optionally) Set the `environment` configuration setting to something. Defaults to `production`.

## Using Airbrake

It will automatically log most exceptions/errors.
If you want to log a exception/error from an custom plugin, you can use this service methods:

- `craft()->airbrake->notify();`

## Airbrake Changelog

### 1.0.0 -- 2017.09.01

* Initial release

Brought to you by [Chris Southam](http://www.csoutham.com) with thanks to [Fred Carlsen](http://sjelfull.no).