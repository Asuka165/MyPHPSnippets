/**
 *	Function for replacing quotes which can break the code
 *
 *	Character like single quote, double quote will be replace with ASCII code for HTML
 */

function EscapeQuote($txt) { 
	if(is_array($txt)){return array_map(__METHOD__, $txt);}

	if(!empty($txt) && is_string($txt)) { 
		return str_replace(array("'", '"'), array('&#39;', '&#34;'), $txt); 
	} 

	return $txt; 
}
