<!DOCTYPE html>
<html>
	<body>
		<form id="form" action="action.php" method="POST">
			<textarea id="inputarea" name="inputarea" rows="15" cols="100" ><?php echo $_POST["inputarea"]; ?></textarea>
			<input type="submit" value="Stampa formula" />
			<div id="loading">Loading...</div>
			<textarea id="result" name="result" rows="15" cols="100"></textarea>
		</form>	

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<script>
		 $('#loading').hide();
		 /* attach a submit handler to the form */
		 $("#form").submit(function(event) {
		   $('#loading').show();
			
		   /* stop form from submitting normally */
		   event.preventDefault();

		   /* get some values from elements on the page: */
		   var $form = $( this ),
		       term = $form.find( '#inputarea' ).val(),
		       url = $form.attr( 'action' );

		   /* Send the data using post and put the results in a div */
		   $.post( url, { s: term },
		     function( data ) {
			var $t=$( "#result" )
			$t.empty().append( data );
			$t.animate({scrollTop: $t.height()},1000);
			$('#loading').hide();
		     }
		   );
		 });
		</script>
	</body>
</html>
