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
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        // build the list of authors, to pass on to our view
        $source = $this->quotes->first();
        //$authors = array();
        //foreach ($source as $record) {
        //    $authors[] = array('who' => $record['who'], 'mug' => $record['mug'], 'href' => $record['where']);
        //}
        //$authors[] = array('who' => $source['who'], 'mug' => $source['mug'], 'href' => $source['where']);

        //$this->data['authors'] = array('who' => $source['who'], 'mug' => $source['mug'], 'href' => $source['where']);

        $this->data['who'] = $source['who'];
        $this->data['mug'] = $source['mug'];
        $this->data['href'] = $source['where'];
        $this->data['what'] = $source['what'];


        $this->render();
    }

    function zzz() {
        $this->index();
    }

    function gimme($index) {
        $this->data['pagebody'] = 'justone';

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