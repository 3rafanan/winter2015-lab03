<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function bold_capitals()
{
	$CI =& get_instance();
	$buffer = $CI->output->get_output();

    // Find all capital letters between <p class="lead"></p><br/>
    $buffer = preg_replace_callback("/[A-Z](?=(?:.(?!<p class=\"lead\">))*<\/p><br\/>)/",
                function ($matches) {
                    return "<strong>" . $matches[0] . "</strong>"; // Put capital letters inside strong tags
                },
                $buffer);

    $CI->output->set_output($buffer);
	$CI->output->_display();
}

/* End of file _bold_capitals.php */
/* Location: ./system/application/hooks/_bold_capitals.php */
