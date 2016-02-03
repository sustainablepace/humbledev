# baudson dev blog

I'm a software developer at <https://www.rewe-group.com/de/unternehmen/vertriebslinien/rewe-digital> "REWE Digital".

## Installation

Because I always forget.

Create a virtual host configuration file `001-baudson_de.conf` in Apache, typically at `/etc/apache2/sites-available/`, with the following content

```XML
<VirtualHost *:80>
        ServerName baudson_de

        ServerAdmin dev@baudson.de
        DocumentRoot /home/christoph/projects/baudson

        <Directory /home/christoph/projects/baudson/>
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
a2ensite 001-baudson_de.conf
```

and reload the service

```
sudo service apache2 reload
```


