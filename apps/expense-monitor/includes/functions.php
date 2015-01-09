<?php

    require_once("constants.php");

    /**
     * Logs out current user, if any.
     */
    function logout()
    {
        $_SESSION = [];
        if (!empty($_COOKIE[session_name()]))
        {
            setcookie(session_name(), "", time() - 42000);
        }
        session_destroy();
    }


    /**
     * Executes SQL statement, possibly with parameters, returning
     * an array of all rows in result set or false on (non-fatal) error.
     */
    function query(/* $sql [, ... ] */)
    {
		$sql = func_get_arg(0);
		$spl = func_get_arg(1);
        $parameters = array_slice(func_get_args(), 1);
		static $handle;
		if (!isset($handle))
        {
            try
            {
                $handle = new PDO("mysql:dbname=" . DATABASE . ";host=" . SERVER, USERNAME, PASSWORD);
                $handle->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); 
            }
            catch (Exception $e)
            {
                trigger_error($e->getMessage(), E_USER_ERROR);
                exit;
            }
        }
        $statement = $handle->prepare($sql);
		if ($statement === false)
        {
			echo("Error: ".$sql);
			trigger_error($handle->errorInfo(), E_USER_ERROR);
            exit;
        }
        $results = $statement->execute($parameters);
        if ($results !== false)
        {
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        }
        else
        {
            return false;
        }
    }

    /**
     * Redirects user to destination, which can be
     * a URL or a relative path on the local host.
     * Because this function outputs an HTTP header, it
     * must be called before caller outputs any HTML.
     */
    function redirect($destination)
    {
        // handle URL
        if (preg_match("/^https?:\/\//", $destination))
        {
            header("Location: " . $destination);
        }

        // handle absolute path
        else if (preg_match("/^\//", $destination))
        {
            $protocol = (isset($_SERVER["HTTPS"])) ? "https" : "http";
            $host = $_SERVER["HTTP_HOST"];
            header("Location: $protocol://$host$destination");
        }

        // handle relative path
        else
        {
            // adapted from http://www.php.net/header
            $protocol = (isset($_SERVER["HTTPS"])) ? "https" : "http";
            $host = $_SERVER["HTTP_HOST"];
            $path = rtrim(dirname($_SERVER["PHP_SELF"]), "/\\");
            header("Location: $protocol://$host$path/$destination");
        }

        // exit immediately since we're redirecting anyway
        exit;
    }

    /**
     * Renders template, passing in values.
     */
    function render($template, $values = [])
    {
        if (file_exists("../templates/$template"))
        {
            extract($values);
            require("../templates/$template");
        }
        else if (file_exists("../../templates/$template"))
        {
            extract($values);
            require("../../templates/$template");
        }
        else
        {
            trigger_error("Invalid template: $template", E_USER_ERROR);
        }
    }

?>

<?php

	function arrayToObject($data = array(), $name = "")
    {
		echo("{ ");
		$keys = array_keys($data);
		foreach($keys as $key)
			echo(" '".$key."':'".$data[$key]."', ");
		echo(" }");
    }
?>