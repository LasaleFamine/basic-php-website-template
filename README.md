# Basic HTML to PHP website template  

> Made for personal use, a simple skeleton to convert a static template HTML into a dynamic PHP website.  

## Vendor included  

Out of the box is included a little library of mine: [lasale-lib-php](https://github.com/LasaleFamine/lasale-lib-php)

## Htaccess  

Is also included an `htacess.txt` file ready to be renamed to `.htaccess`.
It will redirect every request to your web server to the **`public`** directory, **hide** the directory **within the url** and **hide** also the `.php` extension of every file served.

## Configuration  

### `config.json`

Relative to [lasale-lib-php](https://github.com/LasaleFamine/lasale-lib-php).

### `includes/`  

- `config.php`: configuration file of the application
- `helpers.php`: some helpers for rendering etc.

### `public/`

Application controller and public resources (images, js, css etc.)

### `views/`

All the views (HTML based).

# License

MIT &copy; LasaleFamine
