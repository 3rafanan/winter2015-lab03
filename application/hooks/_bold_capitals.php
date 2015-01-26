<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function bold_capitals()
{
	$CI =& get_instance();
	$buffer = $CI->output->get_output();

    // Create DOM object and load the output buffer
    $dom = new DOMDocument();
    $dom->loadHTML($buffer);

    $xpath = new DOMXpath($dom);
    // look for strings inside element p with attribute class="lead"
    $list = $xpath->query('//p[@class="lead"]');

    foreach($list as $node) {
        // replace the strings with strong capital letters
        $search = "'" . $node->nodeValue . "'";
        $replacement = preg_replace('(([A-Z]))', '<strong>$1</strong>', $search);
        $buffer = preg_replace($search, $replacement, $buffer);
    }

    // *NOTE: Not sure why but this doesn't work with the /dunno link.
    //        It doesn't render the <strong> tag properly. Even page
    //        source does not have a <strong> tag anywhere.
    //        All other links works properly.

	$CI->output->set_output($buffer);
	$CI->output->_display();


}

/* End of file _bold_capitals.php */
/* Location: ./system/application/hooks/_bold_capitals.php */
