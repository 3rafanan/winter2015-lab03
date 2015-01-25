<?php

/**
 * Our homepage. Show a table of all the author pictures. Clicking on one should show their quote.
 * Our quotes model has been autoloaded, because we use it everywhere.
 *
 * controllers/Welcome.php
 *
 * ------------------------------------------------------------------------
 */
class Bingo extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index() {
        $this->data['pagebody'] = 'justone';  // show justone

        // get author 5 from the model
        $source = $this->quotes->get(5);

        $this->data['who'] = $source['who'];
        $this->data['mug'] = $source['mug'];
        $this->data['href'] = $source['where'];
        $this->data['what'] = $source['what'];

        $this->render();
    }

    function wisdom() {
        $this->data['pagebody'] = 'justone';  // show justone

        // get author 6 from the model
        $source = $this->quotes->get(6);

        $this->data['who'] = $source['who'];
        $this->data['mug'] = $source['mug'];
        $this->data['href'] = $source['where'];
        $this->data['what'] = $source['what'];

        $this->render();
    }
}

/* End of file Bingo.php */
/* Location: application/controllers/Bingo.php */