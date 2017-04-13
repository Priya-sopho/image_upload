<?php

/*** Helper functions ***/

 /**
     * Redirects user to location, which can be a URL or
     * a relative path on the local host.
     *
     * http://stackoverflow.com/a/25643550/5156190
     *
     * Because this function outputs an HTTP header, it
     * must be called before caller outputs any HTML.
     */
    function redirect($location)
    {
        if (headers_sent($file, $line))
        {
            trigger_error("HTTP headers already sent at {$file}:{$line}", E_USER_ERROR);
        }
        header("Location: {$location}");
        exit;
    }


 /**
 Renders view, passing in values.
 ***/
  function render($view, $values = [])
    {
        // if view exists, render it
        if (file_exists("../views/{$view}"))
        {
            // extract variables into local scope
            extract($values);

            require("../views/{$view}");
             exit;
        }

        // else error
        else
        {
            trigger_error("Invalid view: {$view}", E_USER_ERROR);
        }
    }
    
function apologize($message)
  {
    render("apology.php",["message" => $message]);
    exit;
  }
?> 