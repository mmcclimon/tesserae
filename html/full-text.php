<?php include "first.php"; ?>
<?php include "nav_search.php"; ?>

		</div>
		
		<div id="main">
			
			<form action="<?php echo $url_cgi.'/read_table.pl'; ?>" method="post" ID="Form1">
								
				<h1>Full-Target Display</h1>
				
				<p>
					This is a draft interface for full-text display of results.  It's buggy.  
					If you have any suggestions about what features would be useful here,
					please feel free to let us know.
				</p>
				
				<table class="input">
					<tr>
						<td><span class="h2">Source:</span></td>
						<td>
							<select name="source" ID="source">
								<?php include $fs_html.'/textlist.la.l.php'; ?>
							</select>
						</td>
					</tr>
					<tr>
						<td><span class="h2">Target:</span></td>
						<td>
							<select name="target" ID="target">
								<?php include $fs_html.'/textlist.la.r.php'; ?>
							</select>
						</td>
					</tr>
					<tr>
						<td><span class="h2">Unit:</span></td>
						<td>
							<select name="unit">
								<option value="line">line</option>
								<option value="phrase">phrase</option>
							</select>
						</td>
					</tr>
					<tr>
						<td><span class="h2">Feature:</span></td>
						<td>
							<select name="feature">
								<option value="word">exact form only</option>
								<option value="stem" selected="selected">lemma</option>
								<option value="syn">lemma + synonyms</option>
							</select>
						</td>
					</tr>
					<tr>
						<td><span class="h2">Number of stop words:</span></td>
						<td>
							<select name="stopwords">
								<option value="0">0</option>
								<option value="10" selected="selected">10</option>
								<option value="20">20</option>
								<option value="30">30</option>
								<option value="40">40</option>
								<option value="50">50</option>
								<option value="100">100</option>
								<option value="150">150</option>
								<option value="200">200</option>
							</select>							
						</td>
					</tr>
					<tr>
						<td><span class="h2">Stoplist basis:</span></td>
						<td>
							<select name="stbasis">
								<option value="corpus">corpus</option>
								<option value="target">target</option>
								<option value="source">source</option>
								<option value="both">target + source</option>
							</select>
						</td>
					</tr>
					<tr>
						<td><span class="h2">Maximum distance:</span></td>
						<td>
							<select name="dist">
								<option value="999" selected="selected">no max</option>
								<option value="5">5 tokens</option>
								<option value="10">10 tokens</option>
								<option value="20">20 tokens</option>
								<option value="30">30 tokens</option>
								<option value="40">40 tokens</option>
								<option value="50">50 tokens</option>
							</select>							
						</td>
					</tr>
					<tr>
						<td><span class="h2">Distance metric:</span></td>
						<td>
							<select name="dibasis">
								<option value="span">span</option>
								<option value="span-target">span-target</option>
								<option value="span-source">span-source</option>
								<option value="freq" selected="selected">frequency</option>
								<option value="freq-target">freq-target</option>
								<option value="freq-source">freq-source</option>
							</select>
						</td>
					</tr>
				</table>

				<input type="hidden" name="frontend" value="fulltext" />
				<input type="submit" value="Compare Texts" ID="btnSubmit" NAME="btnSubmit" />
			</form>
		</div>

		<?php include "last.php"; ?>

