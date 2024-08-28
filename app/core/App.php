<?php

// Define the App class
class App
{
    // Initialize default controller to be used
    protected $controller = 'BookController';

    // Initialize default method to be called in the controller
    protected $method = 'index';

    // Initialize parameters to be passed to the method
    protected $params = [];

    // Constructor method
    public function __construct()
    {
        // Parse the URL to get its components by calling below parseUrl() private method
        $urlParts = $this->parseUrl();

        // Import the routes configuration file
        require_once '../app/routes.php';

        // Check if the first part of the URL exists
        if (isset($urlParts[0])) {
            // Set the route to the first part of the URL
            $route = $urlParts[0];
        }

        // Check if the second part of the URL exists
        if (isset($urlParts[1])) {
            // Append the second part of the URL to the route
            $route = $route . '/' . $urlParts[1];
        }

        // Check if the route exists in the routes array in router.php file
        if (isset($routes[$route])) {
            // Set the controller based on the route configuration
            $this->controller = $routes[$route]['controller'];
            // Set the method based on the route configuration
            $this->method = $routes[$route]['method'];
        } else {
            // If the route is not found, display a 404 error message
            echo "404 - Route Not found!";
            return;
        }

        // Include the controller file
        require_once '../app/controllers/' . $this->controller . '.php';

        // Create an object (Instantiate controller) from the imported controller
        $this->controller = new $this->controller;

        // Call the method of the controller with the parameters
        // --------------------------------------------------------------------------------------------------------------------
        // call_user_func_array() is used to call a callback function with an array of parameters to be passed to the function
        // Ex: call_user_func_array([BookController, updateBook], [$id])
        // In the above example this function will call updateBook($id) method in BookController class
        // --------------------------------------------------------------------------------------------------------------------
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    // Function to parse the URL and return its components
    private function parseUrl()
    {
        // Get the request URI
        $uri = $_SERVER['REQUEST_URI'];

        // Split the URI into path and query string (i.e., additional parameters contains in the url that use to pass data to the server)
        // --------------------------------------------------------------------------------------------------------------------
        // Ex: 
        //      Browser URL = "http://localhost/book-store/public/book?id=3"
        //      $uri = "/book-store/public/book?id=3"
        //      $parts = ["/book-store/public/book", "id=3"]
        // 
        // parse_str($parts[1], $args) method will return an array look like this
        //      $args = ['id' => 3]
        // --------------------------------------------------------------------------------------------------------------------

        $parts = explode('?', $uri);

        // If there is a query string, parse it into parameters
        if (isset($parts[1])) {
            parse_str($parts[1], $args);
            // Set the parameters to the parsed query string
            $this->params = $args;
        } else {
            // If no query string, set parameters to an empty array
            $this->params = [];
        }

        // Split the path into segments and sanitize it
        // ---------------------------------------------------------------------------
        // substr($parts[0], 1) is used to remove the first (string --> '/') from the url
        // Ex:
        //      input --> "/book-store/public/book/"
        //      output --> "book-store/public/book/"
        // ---------------------------------------------------------------------------
        $url = explode('/', filter_var(rtrim((substr($parts[0], 1)), FILTER_SANITIZE_URL)));

        // Remove the first two segments (the base URL)
        // ---------------------------------------------------------------------------
        // Ex:
        //      input --> ['book-store', 'public', 'book']
        //      output --> ['book']
        // ---------------------------------------------------------------------------
        $path = array_slice($url, 2);
        
        // Return the remaining path segments
        return $path;
    }
}
