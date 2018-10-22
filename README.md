# css-switcher
A simple way to dynamically switch the css and js of a site

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
                
<h3>Working Example</h3>
                <p>The example in index.php shows how 4 different style sheets can be dynamically loaded. They are numbered using words, which are displayed alphabetically (editable in 'scripts.js'). Each stylesheet will change the background colour. There is also a random button, which will randomly select a stylesheet.</p>
