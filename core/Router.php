<?php

class Router
{
    public $routes = [];

    /**
     * Initialisiert die definierten Routes
     * in der Datei routes.php.
     *
     * @param $routes
     */
    public function define($routes)
    {
        $this->routes = $routes;
    }

    /**
     * Sucht zu einer übergebenen URI ($uri) den dazugehörigen
     * Dateipfad zum Controller.
     *
     * @param $uri
     * @return mixed
     */
    public function parse($uri){
      //If Uri Belongs to website
      if (array_key_exists($uri, $this->routes)) {
          return $this->routes[$uri];
      } else {
          error_log("Using URL: " . $uri);
          $expandedUrl = yourlsExpand($uri);
          if ($expandedUrl != "fnot found" && $expandedUrl != "not found" )
      		{
      		    echo "<script type='text/javascript'> window.location='" . $expandedUrl . "'</script>";
      		}
          //If no match
          else {
            echo "<script type='text/javascript'> window.location='404'</script>";
          }
        }
    }
}
