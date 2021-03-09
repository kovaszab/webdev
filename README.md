Full web development stack: (PHP/Apache/MySQL/phpmyadmin)
===================================

### Persisting database
To enable database persistence add the line
```
    - mysql_data:/var/lib/mysql
```
under 'volumes' section of service 'mysql'
in 'docker-compose.yaml'.
```
services:
    mysql:
        volumes:
```

