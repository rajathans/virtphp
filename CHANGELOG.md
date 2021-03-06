### 0.5.2-alpha (2015-1-18)

  * Introduced the activate command which returns the source command to copy in order to activate an env, and if the system has a supported clipboard, copies the command to said clipboard

### 0.5.1-alpha (2014-08-13)

  * Added logging in the ~/.virtphp/log/ directory for pear_log.txt.

### 0.5.0-alpha (2014-06-06)

  * Added support for global Composer installs in the active virtPHP environment
  * Fixed a bug on OS X involving the presence of an existing `~/.pearrc` file
  * Various bug fixes and docs improvements

### 0.4.0-alpha (2014-05-14)

  * Changed the default behavior of the `create` command to create all new virtPHP environments in `~/.virtphp/envs/`; this may be overridden with the `--install-path` option
  * Added ability to delete a virtPHP environment by name with `delete envname`
  * Fixed issue in which we failed to remove an environment from the environments list
  * Updated all code in the project to conform to PSR-2 standard
  * Various improvements to tests and raised level of code coverage
  * Various bug fixes and docs improvements

### 0.3.0-alpha (2014-03-24)

  * Added `show` command to show all environments created with virtPHP
  * Updated `create`, `clone`, and `destroy` commands to write to `~/.virtphp/environments.json` when creating or destroying virtPHP environments
  * Improved searching for a local `~/.pearrc` config file (fixes #25)
  * Various bug fixes and docs improvements

### 0.2.0-alpha (2014-03-06)

  * Added checks to the `activate` script to detect whether another virtPHP or virtualenv environment is running; one must deactivate virtualenv environments before they can activate a virtPHP env. Switching virtPHP env is allowed.
  * Added Travis CI and Coveralls.io configuration to run tests and generate coverage reports
  * Changed to use PSR-4 autoloading
  * Various bug fixes and docs improvements

### 0.1.0-alpha (2014-03-03)

  * Initial release
