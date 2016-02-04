# The humble developer

A journal of things learnt along the way.

## Installation

Because I always forget.

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

Add configuration to Apache

```
sudo a2ensite 001-humbledev.conf
```

and reload the service

```
sudo service apache2 reload
```


