																	<?php
																		$SQL_STATEMENT_country = $DatabaseCo->dbLink->query("SELECT country_id,country_name FROM country WHERE status='APPROVED'");
																		while ($DatabaseCo->dbRow = mysqli_fetch_object($SQL_STATEMENT_country)) {
																	?>
																	<option value="<?php echo $DatabaseCo->dbRow->country_id; ?>" ><?php echo $DatabaseCo->dbRow->country_name; ?></option>
																	<?php } ?>