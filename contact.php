<?php

include_once('header.php');

?>

	<div id="titlebar">
		<div id="titlebartext" class="middle">
			Reach us
		</div>
	</div>
	<div class="datablock middle">
		<div class="heading">
			We are here
		</div>
		<iframe width="800" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=SVNIT,+Surat,+Gujarat,+India&amp;aq=0&amp;oq=svn&amp;sll=37.0625,-95.677068&amp;sspn=41.903538,56.513672&amp;ie=UTF8&amp;hq=&amp;hnear=&amp;t=m&amp;ll=21.165043,72.783673&amp;spn=0.005003,0.008572&amp;z=17&amp;iwloc=lyrftr:m,4772576491330785785,21.164693,72.783233&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=SVNIT,+Surat,+Gujarat,+India&amp;aq=0&amp;oq=svn&amp;sll=37.0625,-95.677068&amp;sspn=41.903538,56.513672&amp;ie=UTF8&amp;hq=&amp;hnear=&amp;t=m&amp;ll=21.165043,72.783673&amp;spn=0.005003,0.008572&amp;z=17&amp;iwloc=lyrftr:m,4772576491330785785,21.164693,72.783233" style="color:#0000FF;text-align:left">View Larger Map</a></small>
	</div>
	<hr class="middle" style="width:800px;border:1px solid #EEEEEE" />
	<div class="datablock middle">
		<div class="heading">
			Say something
		</div>
		<div class="content">
			<form action="message_submit.php" method="POST">
				<span class="member" style="width:100px;text-align:right">
					Name:
				</span>
				<span>
					<input type="text" name="name" class="custominput" />
				</span>
				<br />
				<span class="member" style="width:100px;text-align:right">
					E-mail:
				</span>
				<span>
					<input type="email" name="email" class="custominput" />
				</span>
				<br />
				<div style="position:relative">
					<span class="member" style="position:absolute;top:0;width:100px;text-align:right">
						Message:
					</span>
					<textarea rows="5" cols="40" wrap="physical" name="message" style="position:relative;left:103px;width:auto;height:auto" class="custominput">
					</textarea>
				</div>
			</form>^^the feature is being implemented
			<div id="addresscontainer">
				<b>
					Snail Mail:
				</b>
				<br />
				ACM NIT Surat Chapter,
				<br />
				Computer Engineering Department,
				<br />
				SVNIT Surat,
				<br />
				Ichchhanath, Surat - 395007
				<br /><br />
				<b>
					Email:
				</b>
				<br />
				admin@nitsurat.acm.org
			</div>
		</div>
	</div>
	
<?php

include_once('footer.php');

?>
