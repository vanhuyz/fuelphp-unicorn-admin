Unicorn Admin for FuelPHP 
==========================

Make your admin panel more beautiful with a template from Unicorn Admin
(for the lastest version, please purchase at [https://wrapbootstrap.com/theme/unicorn-admin-template-WB0F35928](https://wrapbootstrap.com/theme/unicorn-admin-template-WB0F35928))

## Installation

### Clone this repository

```sh
$ git clone git@github.com:vanhuyz/fuelphp-unicorn-admin.git
```

### Copy to your fuelphp project

```sh
$ cp -R fuelphp-unicorn-admin/glpgs_oil/ /path/to/your/fuelphp_project/fuel/packages/glpgs_oil

$ cp -R fuelphp-unicorn-admin/assets/ /path/to/your/fuelphp_project/fuel/public/assets/
```

### Edit `oil` file in the project root, change

from

```php
Package::load('oil');
```

to

```php
//Package::load('oil');
Package::load('glpgs_oil');
```

## Usage

The usage is almost the same as the original [Admin scaffolding](http://fuelphp.com/docs/packages/oil/generate.html#/admin), just replace `admin` with `unicorn`

For example,

```sh
$ php oil g unicorn project_entry title:string abstract:text full_text:text project_id:int is_draft:int order:int -s
```

Check your admin panel and you can see your result !