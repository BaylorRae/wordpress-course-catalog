# WordPress Course Catalog

This is a starting pointing for creating a course catalog with WordPress.

![Course Catalog Screenshot](./wp-content/themes/course-demo/screenshot.png)

## Starting the Project

I've included a full backup of my wordpress database. Be sure to restore your
local database from this before installing wordpress to ensure a smooth
transition. The username and password are both `baylor`.

```bash
$ git clone https://github.com/BaylorRae/wordpress-course-catalog.git
$ docker-compose up -d # starts mysql and wordpress at http://localhost:8080

# optional
$ cat complete.sql | docker exec \
  -i \ # pass sql from stdin
  $(docker-compose ps -q mysql) \ # find the container id from docker-compose
  /usr/bin/mysql \ # run mysql
  -u root --password=password wordpress # default credentials from docker-compose.yml
```
