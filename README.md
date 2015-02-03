# js-logger
This will make it possible for you to track all your Javascript errors into a log on your server

# How to use

First include the js file into the top of your `<head>`-tag:   
```
<script src="path/to/jslogger.js"></script>
```

Then initilize it:
```
JSLogger({
    url: '//your-site.com/logger.php'
});
```

Then whenever a JS error happens, it will be sent to your `logger.php` file. (Change this to whatever you want)

# Server Examples
- [Logger.php Example](https://github.com/marktopper/js-logger/blob/master/examples/serverside/logger.php)
