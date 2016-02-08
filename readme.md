# The humble developer

A journal of things learnt along the way.

## Installation

Because I _always_ forget.

### Webserver ###

First, install php5 and apache2 via `sudo apt-get install php5`. Then enable Apache's rewrite module via `sudo a2enmod rewrite`.

Create a virtual host configuration file `001-humbledev.conf` in Apache, typically at `/etc/apache2/sites-available/`, with the following content

```ApacheConf
<VirtualHost *:80>
        ServerName humbledev

        ServerAdmin dev@baudson.de
        DocumentRoot /home/christoph/projects/humbledev

        <Directory /home/christoph/projects/humbledev/>
        	Options Indexes FollowSymLinks
	        AllowOverride All
        	Require all granted
        </Directory>

        ErrorLog ${APACHE_LOG_DIR}/error.log
        CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>
```

The setting `AllowOverride All` allows the `.htaccess` settings to override the global settings.

Add the configuration to Apache

```
sudo a2ensite 001-humbledev.conf
```

and reload the service

```
sudo service apache2 reload
```

Add the server name to your hosts file

```
sudo vim /etc/hosts
```

like this

```
127.0.0.1	localhost humbledev
```

### License ###

create a new file `keys.php` in the folder `site/config`, with the following content

```
<?php
define( 'KIRBY_LICENSE', 'YOUR_LICENSE_KEY' );
?>
```

and add your own license key. The file is in `.gitignore` so it is not visible in Github.
