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

class terms {
	private $dblink; 
	private $root; 
	private $terms; 
	private $size; 
	
	// Create a new terms object
	public function __construct() {
		require(getcwd().'/dbi.php'); 
		$this->dblink = $dblink; 
		$this->clear(); 
	}
	
	// Clear terms object
	// @post: reset all instance variables
	private function clear() {
		$this->root = ''; 
		$this->terms = Array(); 
		$this->size = 0; 
	}
	
	// Looks for a root on the word database (dictionary)
	// @param: string to be used as root to search for 
	// @pre: none
	// @post: array of all words that match
	public function fetch($s) {
		$s = $this->clean($s); 
		
		$this->clear(); 
		$this->root = $s; 
		$temp = $this->root; 
		$result = mysqli_query($this->dblink,"SELECT * FROM words WHERE term LIKE '%$temp%' ORDER BY term ASC"); 
		while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
			$this->terms[$this->size] = $row['term']; 
			$this->size += 1; 
		}
	}
	
	// returns words being searched/matched ("root")
	public function getRoot() {
		return $this->root; 
	}
	
	// returns terms that match the root
	public function getTerms() {
		return $this->terms; 
	}
	
	// returns the size of the array or the amount of 
	// words that match the root
	public function getSize() {
		return $this->size; 
	}
	
	// filters the text being search to prevent 
	// sql injection
	private function clean($s) {
		return htmlentities(stripslashes($s)); 
	}
}

?>