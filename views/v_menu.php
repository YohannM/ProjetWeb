<?php
/*
 * TP PHP
 * Vue menu
 *
 * Copyright 2016, Eric Dufour
 * http://techfacile.fr
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 *
 * menu: http://www.w3schools.com/bootstrap/bootstrap_ref_comp_navs.asp
 */
?>
<!-- Menu du site -->

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
				<li <?=($page=='accueil') ? 'class="active"':'' ?>>
					<a href="index.php">
						<?= MENU_ACCUEIL ?>
					</a>
				</li>
    </ul>

		<!-- menu pour choisir la langue du site-->
		<ul class="nav navbar-nav navbar-right">
			<li>
				<!-- balise <a> pour que bootstrap le centre -->
				<a>
				<FORM method='get'>
					<?= CHOIX_LANGUE ?>
						<SELECT name='langue' size='1'>
							<OPTION VALUE ="FR-fr" <?= ($_SESSION['langue'] == "FR-fr") ? ' selected' : ''?>><?=FRANCAIS?></OPTION>
							<OPTION VALUE ="EN-en" <?= ($_SESSION['langue'] == "EN-en") ? ' selected' : ''?>><?=ANGLAIS?></OPTION>
							<OPTION VALUE ="CH-ch" <?= ($_SESSION['langue'] == "CH-ch") ? ' selected' : ''?>><?=CHINOIS?></OPTION>
						</SELECT>
					<INPUT TYPE='submit' VALUE="<?= VALIDER ?>" />
				</FORM>
				</a>
			</li>
		</ul>
  </div>
</nav>


