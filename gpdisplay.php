<?php
/*
Plugin Name: Google PageRank Display
Plugin URI: http://www.getrank.org/wp-google-pagerank-display/
Description: Google PageRank Display shows your site pagerank instantly and you can change style from General Options or <a href="options-general.php?page=gpdisplay">here</a>. more than 120+ pagerank buttons & badges
Version: 1.0
Author: Bora
Author URI: http://www.getrank.org
*/

function show_gpdisplay()
{

$showrank .= "<div align='center'>";
$showrank .= "<a href=\"http://www.getrank.org\" target=\"_blank\">
<img src=\"http://www.getrank.org/prbutton/pagerank-display.php?a=getCode&s=";
$showrank .= get_option('gpdisplay_style');
$showrank .= "\" title=\"Free Google PageRank Checker\" border=\"0px\" alt=\"GetRank - Webmaster and Seo Tools\" /></a>";

$showrank .= "</div>";

echo $showrank;
			
}


function gpdisplay_option()
{

	$options = array("gpdisplay_style");
	
	if($_POST['action'] == 'save')
	{
		foreach($options as $o)
		{	
			if(isset( $_POST[$o]) )
			{
				$val = $_POST[$o];
				update_option($o, $val);
			}	
		}
	}

	$gpdisplay_style =  get_option('gpdisplay_style');

?>

<form action="?page=gpdisplay" method="POST">
<input type="hidden" name="action" value="save"/>
<h2>Google PageRank Display Options</h2>
<table width="50%" height="129" border="0" cellpadding="6" cellspacing="10" bordercolor="#333333">
   <tr> 
    <td height="36">Select Style // <a href="http://www.getrank.org/pagerank-display/" target="_blank">Click Here for Buttons Preview</td>
    <td>
<select name="gpdisplay_style">
<?php

for ($i = 1; $i <= 127; $i++) {
    echo "<option value='".$i."'>".$i."</option>";
	$gpdisplay_style = $i;
}
?>
</select>

  	</td>
  </tr>
  <tr> 
    <td height="36">Current Style</td> 
    <td height="36"><?php echo get_option('gpdisplay_style'); ?></td>
</tr>
  <tr> 
    <td height="39" colspan="2"><div align="center"> 
        <input type="submit" name="Submit" value="Update Options" >
      </div></td>
  </tr>
  <div>
NOTE : <b>&lt;?php show_gpdisplay() ?&gt;</b> // Copy and Paste this code in theme files where you want [ Ex: sidebar.php]
</div>
</table>

</form>

<?php
}

function gpdisplay_add_admin()
{
	add_options_page('GRank Display', 'GRank Display', 7, 'gpdisplay', 'gpdisplay_option');
}

function gpdisplay_install()
{ 
	add_option('gpdisplay_style', 	"67", "Select Sytle");
	
}

add_action('admin_menu', 'gpdisplay_add_admin');
register_activation_hook(__FILE__,"gpdisplay_install");

?>