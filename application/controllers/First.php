<?php

/**
 * Our homepage. Show a table of all the author pictures. Clicking on one should show their quote.
 * Our quotes model has been autoloaded, because we use it everywhere.
 *
 * controllers/Welcome.php
 *
 * ------------------------------------------------------------------------
 */
class First extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index() {
        $this->data['pagebody'] = 'justone'; // show justone

        // get first author from the model
        $source = $this->quotes->first();

        $this->data['who'] = $source['who'];
        $this->data['mug'] = $source['mug'];
        $this->data['href'] = $source['where'];
        $this->data['what'] = $source['what'];


        $this->render();
    }

    function zzz() {
        // same author as the index
        $this->index();
    }

    function gimme($index) {
        $this->data['pagebody'] = 'justone'; // show just one

        // get author specified by the index
        $source = $this->quotes->get($index);

        $this->data['who'] = $source['who'];
        $this->data['mug'] = $source['mug'];
        $this->data['href'] = $source['where'];
        $this->data['what'] = $source['what'];


        $this->render();
    }
}

/* End of file First.php */
/* Location: application/controllers/First.php */