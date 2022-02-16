		<ul>
			<li><a href='/Client/index'>Client index</a></li>
			<li><a href='/Client/create'>Client create</a></li>
			<li><a href='/Main/index'>Main index</a></li>
		<?php if(!isset($_SESSION['user_id'])){ ?>
			<li><a href='/User/login'>Log in</a></li>
		<?php }else{ ?>
			<li><a href='/User/logout'>Log out</a></li>
		<?php } ?>
		</ul>



