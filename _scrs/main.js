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

$(document).ready(function() {
	// get text being searched as user types it 
	$('input').keyup(function() {
		var s = $(this).val(); 
		
		// if input box is not empty send info via ajax 
		// and return the results
		// @param: text being inputed
		// @pre: info is not empty/null
		// @post: results found/notification of no results
		if(s.length>0) $.ajax({
			type:'POST',
			url:'_incs/search.php',
			data: {search:s}, 
			success: function(data) {
				if(data=='') {
					// notify that there are no results found if no data
					// is retrieved from ajax call
					$('.dropdown').html('<div class="result" id="none">No results found.</div>'); 
				} else { 
					// display results retrieved from ajax call
					$('.dropdown').html(data);
				}
			}
		});
		else $('.dropdown').html('');  
	}); 
});
