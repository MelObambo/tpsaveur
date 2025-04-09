<?php

namespace App\Controllers;

class Controller
{

    /**
     * Redirects the user to the login page if a session is not active
     * 
     * @return void
     */ 
    public function isConnected() : void
    {
        if (isset($_SESSION['id'])){
            $this->redirect('login');
            exit();
        }
    }

    /**
     * Redirects to the targeted page
     * 
     * @param string $path
     * The path to redirect to.
     * 
     * The path takes the value of the sub-controller that is to render.
     * 
     * @return void
     */
    public function redirect(String $path) : void
    {
        header('Location: index.php?view=' . $path);
    }

    /**
     * Selects the view to render
     * 
     * @param string $view
     * The render view.
     * 
     * The view takes the value of the view that is to be rendered.
     * 
     * @return object $this
     */
    public function render(String $view) : object
    {
        require('View/' . $view . '.php');
        return $this;
    }
}



?>