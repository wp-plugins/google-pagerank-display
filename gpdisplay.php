<?php
/*
Plugin Name: Google PageRank Display
Plugin URI: http://www.getrank.org/wp-google-pagerank-display/
Description: Google PageRank Display shows your site pagerank instantly and you can change style from General Options or <a href="options-general.php?page=gpdisplay">here</a>. more than 120+ pagerank buttons & badges
Version: 1.1
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

<script type="text/javascript">
function swapImage(){
	var image = document.getElementById("defaultButton");
	var dropd = document.getElementById("selectButton");
	image.src = "http://www.getrank.org/prbutton/images/pr/" + dropd.value + "/pr5.gif";	
};
</script>

<form action="?page=gpdisplay" method="POST">
<input type="hidden" name="action" value="save"/>
<h2>Google PageRank Display Options</h2>
<table width="450" height="129" border="0" cellpadding="6" cellspacing="10" bordercolor="#333333">
   <tr> 
    <td height="36" align="left"><strong>Select Style : </strong></td>
    <td align="center">
	<select name="gpdisplay_style" id="selectButton" onChange="swapImage()" style="width:100px">
			<?php
for ($i = 1; $i <= 127; $i++) {
	if (get_option('gpdisplay_style') == $i ) {
	$selected = " selected='selected' ";
	} else {
	$selected = " ";
	}
    echo "<option".$selected."value='".$i."'>Style ".$i."</option>";
}
?>
</select></td>
    <td align="center">
	<img id="defaultButton" align="absmiddle" src="http://www.getrank.org/prbutton/images/pr/<?php echo $gpdisplay_style; ?>/pr5.gif" />	</td>
  </tr>
  <tr> 
    <td height="36" align="left"><strong>Current Style : </strong></td> 
    <td align="center"><div style="color:#FF0000; font-size:18px;"><b><?php echo get_option('gpdisplay_style'); ?></b></div></td>
    <td height="36" align="center"></td>
</tr>
  <tr> 
    <td height="39" colspan="3" align="left"> 
        <input type="submit" name="Submit" value="Update Options" >
     </td>
  </tr>
</table>

</form>
<div align="left">
<a href="http://www.getrank.org/" target="_blank" style="color:#FF0000;">Click here</a> for more <u>seo and webmaster tools</u>
</div>
<br />
<br />
<div align="left">
NOTE : <b>&lt;?php show_gpdisplay() ?&gt;</b> // Copy and Paste this code in your theme files where you want [ Ex: sidebar.php]
</div>
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