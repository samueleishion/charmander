<?
/*
 * 
 * Charmander web tool 
 * @author: Samuel Acuna
 * @date: 05/24/2013
 * 
 * Charmander is a tool that fetches words/content from a database by linear similarity.
 * 
 * For more information: README.md
 * 
 */
 
require('class.terms.php');

// Create a new terms object and fetch for 
// words based on the search term being sent. 
// The search consists on looking for the words  
// contain the exact input provided by user.  
$terms = new terms();
$terms->fetch($_POST['search']); 

// Get an array of all the results and display
// them for the ajax to handle. 
$results = $terms->getTerms(); 
foreach($results as $e) {
	echo '<div class="result">'.$e.'</div>'; 
} 

?>