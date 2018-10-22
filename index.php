<!DOCTYPE html>
<html>
    <head>
        <title>CSS Switcher - Dynamically loaded CSS and JS</title>
        <meta name="viewport" content="initial-scale=1">

        <!-- Custom jQuery and JavaScripts -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="scripts/scripts.js"></script>
    </head>
	<body>
		<div>
			<div>
				<h1>CSS Switcher</h1>
                <h2>Dynamically loaded CSS</h2>
			</div>

			<div>
                <h3>Using The Switcher</h3>
				<ul>
					<li>To use the switcher, set up 'scripts' and 'styles' folders in the root directory.</li>
                    <li>The 'scripts.js' file must be included in 'scripts' and the 'collect-themes.php' file in the root directory.</li>
					<li>For the dynamic CSS, ensure that the CSS name matches the corrosponding JS name (if required). Save the CSS in the 'styles' folder and the JS in the 'scripts' folder.</li>
					<li>The select will automatcially populate form the titles in the 'styles' folder.</li>
					<li>Follow the in-document comments in 'scripts.js' to make adjustments to the text and sorting.</li>
				</ul>
                <h4>Additional Notes</h4>
                <ul>
                    <li>The switcher will remember the last loaded stylesheet on page refresh</li>
                    <li>New visitors will be shown a random stylesheet</li>
                </ul>
			</div>

			<div>
                <h3>Working Example</h3>
                <p>This example shows how 4 different style sheets can be dynamically loaded. They are numbered using words, which are displayed alphabetically (editable in 'scripts.js'). Each stylesheet will change the background colour. There is also a random button, which will randomly select a stylesheet.</p>
				<p>Want to see this page in a different way?</p>
				<form>
					<div><select name="currentStyle"></select></div>
					
					<button type="submit" value="Submit">Select</button>
					<button type="button" value="Random">Random</button>	
				</form>
			</div>
		</div>
	</body>
</html>  
