# Mikrotik Api for Laravel 5.X (Updated for 5.8+)
WIP - Work In Progress

Instalation
----

Via composer:
```
composer require jjsquady/mikrotikapi
```

Or manually insert this block into your composer.json in require section:
```
"require": {
    "jjsquady/mikrotikapi": "dev-master", // <- this line
}
```

Configuration on Laravel (< 5.4):
----

Insert into `config/app.php` in `providers` array:

```
jjsquady\MikrotikApi\MikrotikServiceProvider::class
```

#### Use the Facade:

Insert into `config/app.php` in `facades` array:

```
'Mikrotik' => jjsquady\MikrotikApi\Facades\MikrotikFacade::class
```

**Note:** for Laravel 5.4+ this package comes with Package Discovery enabled.


#### Publish the configuration file:

```
php artisan vendor:publish --provider=jjsquady\MikrotikApi\MikrotikServiceProvider::class
```

Basic Usage:
----

Set up the host and credentials into .env file:

```$bash
   MK_API_HOST=<mk_ip>
   MK_API_USER=<username>
   MK_API_PASSWORD=<password>
   MK_API_PORT=<mk_port_defaults_8728>
```

```$php

// create a connection with Mikrotik Router

$conn = Mikrokit::connect()->getConnection();
 
if($conn->isConnected()) {
    // you have access to Commands
    // and can call from here...
}
```

Getting interfaces:
---
```$php
$conn = Mikrokit::connect()->getConnection();
 
if($conn->isConnected()) {
    // Get all interfaces
    $interfaces = Interfaces::bind($conn)->get();
    
    // get() returns a Collection and you can use all methods available
    
    // you can send it to view 
    return view("<some_view>", [
        'interfaces' => $interfaces
    ]);
}
```

This project its a work in progress... and its in early developing phase.
I really get thankful with ur contribution.

##### Created by jjsquady (Jorge Junior)
##### (cc) 2017-2019
##### License: MIT
