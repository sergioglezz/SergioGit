# Gestionando dependencias en PHP

## Requisitos

* Nivel intermedio en desarrollo con PHP
* Conocimientos para trabajar con un terminal/consola o línea de comandos en unix

## Indice

* Introducción
* Instalación
* Comandos y Esquema

## Objetivos

* Aprender a gestionar tus dependencias por proyecto
* Diferencias entre dependencias en desarrollo y producción
* Usar el estándar PSR-4 de autocarga de clases y archivos
* Crear proyectos y librerías propios e incluirlos en otros proyectos



## Gestor de Paquetes vs Gestor de Dependencias

> A diferencia de _PIP_, _YUM_ o _APT_, [composer]() no es capaz de gestionar dependencias a nivel global. _Él trata con paquetes, pero a nivel de proyecto._

## ¿Qué me aporta composer?

> * Centraliza las dependencias de mi proyecto
> * Tener de forma clara las librerías de las que depende mi proyecto especificadas en un manifiesto
> * Actualizarlas todas con un único comando
> * Componentizar mis propias librerías

## Instalación de composer

### En entornos Unix
○ Descargar el archivo `composer.phar`

```bash
php composer-setup.php --install-dir=bin --filename=composer
```

### En Windows
○ Descargar el archivo `Composer-setup.exe`

```bash
C:\bin> echo @php "%~dp0composer.phar" %*>composer.bat
```

En todos los entornos

* Descargar el archivo `composer.phar`
* Ubicarlo en la raíz del proyecto para poder consumirlo como un ejecutable de `php` (no recomendado)

## Manejando Composer

```bash
$ composer -v
   ______
  / ____/___  ____ ___  ____  ____  ________  _____
 / /   / __ \/ __ `__ \/ __ \/ __ \/ ___/ _ \/ ___/
/ /___/ /_/ / / / / / / /_/ / /_/ (__  )  __/ /
\____/\____/_/ /_/ /_/ .___/\____/____/\___/_/
                    /_/
Composer version 2.1.12 2021-11-09 16:02:04

Usage:
  command [options] [arguments]

Options:
  -h, --help                     Display this help message
  -q, --quiet                    Do not output any message
  -V, --version                  Display this application version
      --ansi                     Force ANSI output
      --no-ansi                  Disable ANSI output
  -n, --no-interaction           Do not ask any interactive question
      --profile                  Display timing and memory usage information
      --no-plugins               Whether to disable plugins.
  -d, --working-dir=WORKING-DIR  If specified, use the given directory as working directory.
      --no-cache                 Prevent use of the cache
  -v|vv|vvv, --verbose           Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

Available commands:
  about                Shows a short information about Composer.
  archive              Creates an archive of this composer package.
  browse               Opens the package's repository URL or homepage in your browser.
  cc                   Clears composer's internal package cache.
  check-platform-reqs  Check that platform requirements are satisfied.
  clear-cache          Clears composer's internal package cache.
  clearcache           Clears composer's internal package cache.
  config               Sets config options.
  create-project       Creates new project from a package into given directory.
  depends              Shows which packages cause the given package to be installed.
  diagnose             Diagnoses the system to identify common errors.
  dump-autoload        Dumps the autoloader.
  dumpautoload         Dumps the autoloader.
  exec                 Executes a vendored binary/script.
  fund                 Discover how to help fund the maintenance of your dependencies.
  global               Allows running commands in the global composer dir ($COMPOSER_HOME).
  help                 Displays help for a command
  home                 Opens the package's repository URL or homepage in your browser.
  i                    Installs the project dependencies from the composer.lock file if present, or falls back on the composer.json.
  info                 Shows information about packages.
  init                 Creates a basic composer.json file in current directory.
  install              Installs the project dependencies from the composer.lock file if present, or falls back on the composer.json.
  licenses             Shows information about licenses of dependencies.
  list                 Lists commands
  outdated             Shows a list of installed packages that have updates available, including their latest version.
  prohibits            Shows which packages prevent the given package from being installed.
  reinstall            Uninstalls and reinstalls the given package names
  remove               Removes a package from the require or require-dev.
  require              Adds required packages to your composer.json and installs them.
  run                  Runs the scripts defined in composer.json.
  run-script           Runs the scripts defined in composer.json.
  search               Searches for packages.
  self-update          Updates composer.phar to the latest version.
  selfupdate           Updates composer.phar to the latest version.
  show                 Shows information about packages.
  status               Shows a list of locally modified packages.
  suggests             Shows package suggestions.
  u                    Upgrades your dependencies to the latest version according to composer.json, and updates the composer.lock file.
  update               Upgrades your dependencies to the latest version according to composer.json, and updates the composer.lock file.
  upgrade              Upgrades your dependencies to the latest version according to composer.json, and updates the composer.lock file.
  validate             Validates a composer.json and composer.lock.
  why                  Shows which packages cause the given package to be installed.
  why-not              Shows which packages prevent the given package from being installed.
```

[composer.json](composer.json) es un manifiesto que indica las dependencias de nuestro proyecto en las distintas dependencias.

Inicializamos nuestro proyecto usando `composer init`:

```bash
$ composer init


  Welcome to the Composer config generator  
                                            


This command will guide you through creating your composer.json config.
```

Este comando nos generará a nivel de proyecto un primer archivo [composer.json](composer.json). [composer.json](composer.json) es un manifiesto que indica las dependencias de nuestro proyecto en las distintas dependencias.

A continuación, la instalación guiada nos pedirá que indiquemos el directorio don de ubicarán las dependencias, por defecto [vendor](vendor):

```bash
Package name (<vendor>/<name>) [franc/php-8-2021-11-01]:
```

Seguidamente deberemos indicar la descripción del proyecto, en nuestro caso _esto es una demo de composer_:

```bash
Description []: esto es una demo de composer
```

Después necesitaremos un autor, el cual se define con una estructura determinada `<firstname> <lastname> <email>`:

```bash
Author [John Doe <john.doe@demo.com>, n to skip]: john doe
Invalid author string.  Must be in the format: John Smith <john@example.com>
Author [John Doe <john.doe@demo.com>, n to skip]: n
```

> _En nuestro caso lo definimos con una estructura errónea, para a continuación indicar que no queremos definirlo._

Ya podremos indicar la mínima versión que utilizaremos en nuestro proyecto:

```bash
Minimum Stability []: 
```

Y el tipo de paquete que vamos a crear, en nuestro caso un _project_:

```bash
Package Type (e.g. library, project, metapackage, composer-plugin) []: project
```

A continuación podremos indicar una licencia:

```bash
License []: 
```

Finalmente, seleccionamos las dependencias, nosotros indicaremos que necesitamos _doctrine_

```bash
Define your dependencies.

Would you like to define your dependencies (require) interactively [yes]?
Search for a package: doctrine

Found 15 packages matching doctrine

   [0] doctrine/lexer
   [1] doctrine/instantiator
   [2] doctrine/inflector
   [3] doctrine/dbal
   [4] doctrine/cache
   [5] doctrine/annotations
   [6] doctrine/doctrine-migrations-bundle
   [7] doctrine/doctrine-bundle
   [8] symfony/doctrine-bridge
   [9] gedmo/doctrine-extensions
  [10] symfony/property-info
  [11] doctrine/common
  [12] doctrine/persistence
  [13] doctrine/orm
  [14] doctrine/migrations

Enter package # to add, or the complete package name if it is not listed: doctrine/dbal
Enter the version constraint to require (or leave blank to use the latest version): 
Using version ^3.1 for doctrine/dbal
Search for a package: 
```

> `^3.1`, en la versión indicada que se descargará el `^` nos indica que se usaran las versiones superiores a la existente `3.1`.

```bash
Would you like to define your dev dependencies (require-dev) interactively [yes]?
Search for a package: phpunit

Found 15 packages matching phpunit

   [0] phpunit/phpunit
   [1] phpunit/php-timer
   [2] phpunit/php-text-template
   [3] phpunit/php-file-iterator
   [4] phpunit/php-code-coverage
   [5] phpunit/phpunit-mock-objects Abandoned. No replacement was suggested.
   [6] symfony/phpunit-bridge
   [7] phpunit/php-token-stream Abandoned. No replacement was suggested.
   [8] jean85/pretty-package-versions
   [9] brianium/paratest
  [10] phpunit/php-invoker
  [11] spatie/phpunit-snapshot-assertions
  [12] phpunit/phpunit-selenium
  [13] phpspec/prophecy-phpunit
  [14] johnkary/phpunit-speedtrap

Enter package # to add, or the complete package name if it is not listed: phpunit/phpunit
Enter the version constraint to require (or leave blank to use the latest version): 
Using version ^9.5 for phpunit/phpunit
```

En composer 1, que usa el `PSR-0` está deprecado.

```bash
Search for a package: 
Add PSR-4 autoload mapping? Maps namespace "JohnDoe\DemoComposer" to the entered relative path. [src/, n to skip]: 

{
    "name": "franc/php-8-2021-11-01",
    "description": "esto es una demo de composer",
    "type": "project",
    "require": {
        "doctrine/dbal": "^3.1"
    },
    "require-dev": {
        "phpunit/phpunit": "^9.5"
    },
    "autoload": {
        "psr-4": {
            "Franc\\Php820211101\\": "src/"
        }
    }
}
```

```bash
Do you confirm generation [yes]? y
Would you like the vendor directory added to your .gitignore [yes]? y
Would you like to install dependencies now [yes]? y
```

```bash
Loading composer repositories with package information
Updating dependencies
Lock file operations: 39 installs, 0 updates, 0 removals
  - Locking composer/package-versions-deprecated (1.11.99.4)
  - Locking doctrine/cache (2.1.1)
  - Locking doctrine/dbal (3.1.4)
  - Locking doctrine/deprecations (v0.5.3)
  - ...
  - Installing phpunit/phpunit (9.5.10): Extracting archive
9 package suggestions were added by new dependencies, use `composer suggest` to see details.
Generating autoload files
composer/package-versions-deprecated: Generating version class...
composer/package-versions-deprecated: ...done generating version class
30 packages you are using are looking for funding.
Use the `composer fund` command to find out more!
PSR-4 autoloading configured. Use "namespace JohnDoe\DemoComposer;" in src/
Include the Composer autoloader with: require 'vendor/autoload.php';
```

```bash
📦my_project
 ┗ 📂src
 ┗ 📂vendor
 ┗ 📜.gitignore
 ┗ 📜composer.json
 ┗ 📜composer-lock.json
```