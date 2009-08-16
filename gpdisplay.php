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
	<select name="gpdisplay_style" id="selectButton" onChange="swapImage()">
			<option value="67">Select Style</option>
			<option value="1">Style 1</option>
			<option value="2">Style 2</option>
			<option value="3">Style 3</option>
			<option value="4">Style 4</option>
			<option value="5">Style 5</option>
			<option value="6">Style 6</option>
			<option value="7">Style 7</option>
			<option value="8">Style 8</option>
			<option value="9">Style 9</option>
			<option value="10">Style 10</option>
			<option value="11">Style 11</option>
			<option value="12">Style 12</option>
			<option value="13">Style 13</option>
			<option value="14">Style 14</option>
			<option value="15">Style 15</option>
			<option value="16">Style 16</option>
			<option value="17">Style 17</option>
			<option value="18">Style 18</option>
			<option value="19">Style 19</option>
			<option value="20">Style 20</option>
			<option value="21">Style 21</option>
			<option value="22">Style 22</option>
			<option value="23">Style 23</option>
			<option value="24">Style 24</option>
			<option value="25">Style 25</option>
			<option value="26">Style 26</option>
			<option value="27">Style 27</option>
			<option value="28">Style 28</option>
			<option value="29">Style 29</option>
			<option value="30">Style 30</option>
			<option value="31">Style 31</option>
			<option value="32">Style 32</option>
			<option value="33">Style 33</option>
			<option value="34">Style 34</option>
			<option value="35">Style 35</option>
			<option value="36">Style 36</option>
			<option value="37">Style 37</option>
			<option value="38">Style 38</option>
			<option value="39">Style 39</option>
			<option value="40">Style 40</option>
			<option value="41">Style 41</option>
			<option value="42">Style 42</option>
			<option value="43">Style 43</option>
			<option value="44">Style 44</option>
			<option value="45">Style 45</option>
			<option value="46">Style 46</option>
			<option value="47">Style 47</option>
			<option value="48">Style 48</option>
			<option value="49">Style 49</option>
			<option value="50">Style 50</option>
			<option value="51">Style 51</option>
			<option value="52">Style 52</option>
			<option value="53">Style 53</option>
			<option value="54">Style 54</option>
			<option value="55">Style 55</option>
			<option value="56">Style 56</option>
			<option value="57">Style 57</option>
			<option value="58">Style 58</option>
			<option value="59">Style 59</option>
			<option value="60">Style 60</option>
			<option value="61">Style 61</option>
			<option value="62">Style 62</option>
			<option value="63">Style 63</option>
			<option value="64">Style 64</option>
			<option value="65">Style 65</option>
			<option value="66">Style 66</option>
			<option value="67">Style 67</option>
			<option value="68">Style 68</option>
			<option value="69">Style 69</option>
			<option value="70">Style 70</option>
			<option value="71">Style 71</option>
			<option value="72">Style 72</option>
			<option value="73">Style 73</option>
			<option value="74">Style 74</option>
			<option value="75">Style 75</option>
			<option value="76">Style 76</option>
			<option value="77">Style 77</option>
			<option value="78">Style 78</option>
			<option value="79">Style 79</option>
			<option value="80">Style 80</option>
			<option value="81">Style 81</option>
			<option value="82">Style 82</option>
			<option value="83">Style 83</option>
			<option value="84">Style 84</option>
			<option value="85">Style 85</option>
			<option value="86">Style 86</option>
			<option value="87">Style 87</option>
			<option value="88">Style 88</option>
			<option value="89">Style 89</option>
			<option value="90">Style 90</option>
			<option value="91">Style 91</option>
			<option value="92">Style 92</option>
			<option value="93">Style 93</option>
			<option value="94">Style 94</option>
			<option value="95">Style 95</option>
			<option value="96">Style 96</option>
			<option value="97">Style 97</option>
			<option value="98">Style 98</option>
			<option value="99">Style 99</option>
			<option value="100">Style 100</option>
			<option value="101">Style 101</option>
			<option value="102">Style 102</option>
			<option value="103">Style 103</option>
			<option value="104">Style 104</option>
			<option value="105">Style 105</option>
			<option value="106">Style 106</option>
			<option value="107">Style 107</option>
			<option value="108">Style 108</option>
			<option value="109">Style 109</option>
			<option value="110">Style 110</option>
			<option value="111">Style 111</option>
			<option value="112">Style 112</option>
			<option value="113">Style 113</option>
			<option value="114">Style 114</option>
			<option value="115">Style 115</option>
			<option value="116">Style 116</option>
			<option value="117">Style 117</option>
			<option value="118">Style 118</option>
			<option value="119">Style 119</option>
			<option value="120">Style 120</option>
			<option value="121">Style 121</option>
			<option value="122">Style 122</option>
			<option value="123">Style 123</option>
			<option value="124">Style 124</option>
			<option value="125">Style 125</option>
			<option value="126">Style 126</option>
			<option value="127">Style 127</option>
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
  <div>
NOTE : <b>&lt;?php show_gpdisplay() ?&gt;</b> // Copy and Paste this code in theme files where you want [ Ex: sidebar.php]
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