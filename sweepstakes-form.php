<?php 
require_once('classes/enter.php');

if (isset($peabody->errors) && count($peabody->errors)) {
	$errors = $peabody->errors;
}

?>
<!DOCTYPE html>
<html  lang="">
<head>
<title>Expedia Mr Peabody &amp; Sherman</title>
<meta charset="utf-8" />
<!--[if IE]>
<link rel="stylesheet" type="text/css" media="all" href="https://www.formstack.com/forms/css/3/ie.css?20131211" />
<![endif]-->
<!--[if IE 7]><link rel="stylesheet" type="text/css" media="all" href="https://www.formstack.com/forms/css/3/ie7.css" /><![endif]-->
<!--[if IE 6]><link rel="stylesheet" type="text/css" media="all" href="https://www.formstack.com/forms/css/3/ie6fixes.css" /><![endif]-->
<link rel="stylesheet" type="text/css" href="https://www.formstack.com/forms/css/3/reset.css?20130225" />
<link rel="stylesheet" type="text/css" href="https://www.formstack.com/forms/css/3/default.css?20130404" />
<link rel="stylesheet" type="text/css" href="css/form.css" />
<!-- css3-mediaqueries.js for IE less than 9 -->
<!--[if lt IE 9]>
<script src="js/css3-mediaqueries.js"></script>
<![endif]-->
<!--[if lt IE 10]>
<style>
.IE89_only	{
	color: #6B6B6B;
	font-weight: bold;
	display:block;
}
</style>
<![endif]-->
</head>

<body class="fsBody" id="fsLocal">
<form method="post" novalidate enctype="multipart/form-data" action="sweepstakes-form.php" class="fsForm fsMultiColumn fsMaxCol2" id="fsForm1670286">
<div class="fsPage" id="fsPage1670286-1">
<div class="fsSection fs2Col">
<div id="fsRow1670286-1" class="fsRow fsFieldRow">
<div class="fsRowBody fsCell fsFieldCell <?php if (isset($errors['field23680485'])): ?> fsValidationError<?php endif ?> fsFirst  fsLabelVertical  fsSpan50 fsSpan50left" id="fsCell23680485" lang="en">
<span class="IE89_only">First Name</span>
<input type="text" id="field23680485" name="field23680485" size="15" required placeholder="First Name" title="First Name" value="<?php echo htmlspecialchars($form['field23680485']); ?>" class="fsField fsRequired namefield" aria-required="true" />
</div>
<div class="fsRowBody fsCell fsFieldCell <?php if (isset($errors['field23680503'])): ?> fsValidationError<?php endif ?>  fsLast fsLabelVertical  fsSpan50 fsSpan50right" id="fsCell23680503" lang="en">
<span class="IE89_only">Last Name</span>
<input type="text" id="field23680503" name="field23680503" size="15" required placeholder="Last Name" title="Last Name" value="<?php echo htmlspecialchars($form['field23680503']); ?>" class="fsField fsRequired namefield" aria-required="true" />
</div>
</div>
<div id="fsRow1670286-2" class="fsRow fsFieldRow fsLastRow">
<div class="fsRowBody fsCell fsFieldCell  fsFirst fsLast fsLabelVertical <?php if (isset($errors['field23680411'])): ?> fsValidationError<?php endif ?> fsSpan100 " id="fsCell23680411" lang="en">
<span class="IE89_only">Email</span>
<input type="email" id="field23680411" name="field23680411" size="50" required placeholder="Email" title="Email" value="<?php echo htmlspecialchars($form['field23680411']); ?>" class="fsField fsFormatEmail fsRequired" aria-required="true" />
</div>
</div>
<div id="fsRow1670286-3" class="fsRow fsFieldRow fsLastRow">
<div class="fsRowBody fsCell fsFieldCell  fsFirst fsLast fsLabelVertical <?php if (isset($errors['field23680448'])): ?> fsValidationError<?php endif ?> fsSpan100 " id="fsCell23680448" lang="en">
<span class="IE89_only">Phone Number - Example: (555) 123-4567</span>
<input type="tel" id="field23680448" name="field23680448" size="50" required  placeholder="Phone Number - Example: (555) 123-4567" title="Telephone Number" value="<?php echo htmlspecialchars($form['field23680448']); ?>"  class="fsField fsFormatPhoneUS fsRequired" aria-required="true"  />
</div>
</div>
<div id="fsRow1670286-4" class="fsRow fsFieldRow fsLastRow <?php if (isset($errors['field23792660M']) || isset($errors['field23792660D']) || isset($errors['field23792660Y'])): ?> fsValidationError<?php endif ?>">
<div class="fsRowBody fsCell fsFieldCell" id="fsCell23792660" lang="en">
<fieldset id="label23792660">
<legend class="fsLabel fsRequiredLabel fsLabelVertical"><span>Birthday<span class="fsRequiredMarker">*</span></span></legend>
<div class="fieldset-content">

<!-- Used to pull in url for jquery -->
<span style="display:none;" id="fsCalendar23792660ImageUrl">https://www.formstack.com/forms/images/2/calendar.png</span>
<input type="hidden" id="field23792660Format" name="field23792660Format" value="MDY" />
<div class="hidden"><label for="field23792660M">Month</label></div>
<select id="field23792660M" name="field23792660M" class="fsField fsRequired dropdown" aria-required="true">
	<option value="" selected="selected">Month </option>
	<option value="Jan" <?php if($form['field23792660M'] == 'Jan'){echo'selected="selected"';} ?>>Jan</option>
	<option value="Feb" <?php if($form['field23792660M'] == 'Feb'){echo'selected="selected"';} ?>>Feb</option>
	<option value="Mar" <?php if($form['field23792660M'] == 'Mar'){echo'selected="selected"';} ?>>Mar</option>
	<option value="Apr" <?php if($form['field23792660M'] == 'Apr'){echo'selected="selected"';} ?>>Apr</option>
	<option value="May" <?php if($form['field23792660M'] == 'May'){echo'selected="selected"';} ?>>May</option>
	<option value="Jun" <?php if($form['field23792660M'] == 'Jun'){echo'selected="selected"';} ?>>Jun</option>
	<option value="Jul" <?php if($form['field23792660M'] == 'Jul'){echo'selected="selected"';} ?>>Jul</option>
	<option value="Aug" <?php if($form['field23792660M'] == 'Aug'){echo'selected="selected"';} ?>>Aug</option>
	<option value="Sep" <?php if($form['field23792660M'] == 'Sep'){echo'selected="selected"';} ?>>Sep</option>
	<option value="Oct" <?php if($form['field23792660M'] == 'Oct'){echo'selected="selected"';} ?>>Oct</option>
	<option value="Nov" <?php if($form['field23792660M'] == 'Nov'){echo'selected="selected"';} ?>>Nov</option>
	<option value="Dec" <?php if($form['field23792660M'] == 'Dec'){echo'selected="selected"';} ?>>Dec</option>
</select>
<div class="hidden"><label for="field23792660D">Day</label></div>
<select id="field23792660D" name="field23792660D" class="fsField fsRequired dropdown" aria-required="true">
	<option value="" selected="selected">Day </option>
	<option value="01" <?php if($form['field23792660D'] == '01'){echo'selected="selected"';} ?>>01</option>
	<option value="02" <?php if($form['field23792660D'] == '02'){echo'selected="selected"';} ?>>02</option>
	<option value="03" <?php if($form['field23792660D'] == '03'){echo'selected="selected"';} ?>>03</option>
	<option value="04" <?php if($form['field23792660D'] == '04'){echo'selected="selected"';} ?>>04</option>
	<option value="05" <?php if($form['field23792660D'] == '05'){echo'selected="selected"';} ?>>05</option>
	<option value="06" <?php if($form['field23792660D'] == '06'){echo'selected="selected"';} ?>>06</option>
	<option value="07" <?php if($form['field23792660D'] == '07'){echo'selected="selected"';} ?>>07</option>
	<option value="08" <?php if($form['field23792660D'] == '08'){echo'selected="selected"';} ?>>08</option>
	<option value="09" <?php if($form['field23792660D'] == '09'){echo'selected="selected"';} ?>>09</option>
	<option value="10" <?php if($form['field23792660D'] == '10'){echo'selected="selected"';} ?>>10</option>
	<option value="11" <?php if($form['field23792660D'] == '11'){echo'selected="selected"';} ?>>11</option>
	<option value="12" <?php if($form['field23792660D'] == '12'){echo'selected="selected"';} ?>>12</option>
	<option value="13" <?php if($form['field23792660D'] == '13'){echo'selected="selected"';} ?>>13</option>
	<option value="14" <?php if($form['field23792660D'] == '14'){echo'selected="selected"';} ?>>14</option>
	<option value="15" <?php if($form['field23792660D'] == '15'){echo'selected="selected"';} ?>>15</option>
	<option value="16" <?php if($form['field23792660D'] == '16'){echo'selected="selected"';} ?>>16</option>
	<option value="17" <?php if($form['field23792660D'] == '17'){echo'selected="selected"';} ?>>17</option>
	<option value="18" <?php if($form['field23792660D'] == '18'){echo'selected="selected"';} ?>>18</option>
	<option value="19" <?php if($form['field23792660D'] == '19'){echo'selected="selected"';} ?>>19</option>
	<option value="20" <?php if($form['field23792660D'] == '20'){echo'selected="selected"';} ?>>20</option>
	<option value="21" <?php if($form['field23792660D'] == '21'){echo'selected="selected"';} ?>>21</option>
	<option value="22" <?php if($form['field23792660D'] == '22'){echo'selected="selected"';} ?>>22</option>
	<option value="23" <?php if($form['field23792660D'] == '23'){echo'selected="selected"';} ?>>23</option>
	<option value="24" <?php if($form['field23792660D'] == '24'){echo'selected="selected"';} ?>>24</option>
	<option value="25" <?php if($form['field23792660D'] == '25'){echo'selected="selected"';} ?>>25</option>
	<option value="26" <?php if($form['field23792660D'] == '26'){echo'selected="selected"';} ?>>26</option>
	<option value="27" <?php if($form['field23792660D'] == '27'){echo'selected="selected"';} ?>>27</option>
	<option value="28" <?php if($form['field23792660D'] == '28'){echo'selected="selected"';} ?>>28</option>
	<option value="29" <?php if($form['field23792660D'] == '29'){echo'selected="selected"';} ?>>29</option>
	<option value="30" <?php if($form['field23792660D'] == '30'){echo'selected="selected"';} ?>>30</option>
	<option value="31" <?php if($form['field23792660D'] == '31'){echo'selected="selected"';} ?>>31</option>
</select>
<div class="hidden"><label for="field23792660Y">Year</label></div>
<select id="field23792660Y" name="field23792660Y" class="fsField fsRequired dropdown" aria-required="true">
	<option value="" selected="selected">Year </option>
	<option value="1904" <?php if($form['field23792660Y'] == '1904'){echo'selected="selected"';} ?>>1904</option>
	<option value="1905" <?php if($form['field23792660Y'] == '1905'){echo'selected="selected"';} ?>>1905</option>
	<option value="1906" <?php if($form['field23792660Y'] == '1906'){echo'selected="selected"';} ?>>1906</option>
	<option value="1907" <?php if($form['field23792660Y'] == '1907'){echo'selected="selected"';} ?>>1907</option>
	<option value="1908" <?php if($form['field23792660Y'] == '1908'){echo'selected="selected"';} ?>>1908</option>
	<option value="1909" <?php if($form['field23792660Y'] == '1909'){echo'selected="selected"';} ?>>1909</option>
	<option value="1910" <?php if($form['field23792660Y'] == '1910'){echo'selected="selected"';} ?>>1910</option>
	<option value="1911" <?php if($form['field23792660Y'] == '1911'){echo'selected="selected"';} ?>>1911</option>
	<option value="1912" <?php if($form['field23792660Y'] == '1912'){echo'selected="selected"';} ?>>1912</option>
	<option value="1913" <?php if($form['field23792660Y'] == '1913'){echo'selected="selected"';} ?>>1913</option>
	<option value="1914" <?php if($form['field23792660Y'] == '1914'){echo'selected="selected"';} ?>>1914</option>
	<option value="1915" <?php if($form['field23792660Y'] == '1915'){echo'selected="selected"';} ?>>1915</option>
	<option value="1916" <?php if($form['field23792660Y'] == '1916'){echo'selected="selected"';} ?>>1916</option>
	<option value="1917" <?php if($form['field23792660Y'] == '1917'){echo'selected="selected"';} ?>>1917</option>
	<option value="1918" <?php if($form['field23792660Y'] == '1918'){echo'selected="selected"';} ?>>1918</option>
	<option value="1919" <?php if($form['field23792660Y'] == '1919'){echo'selected="selected"';} ?>>1919</option>
	<option value="1920" <?php if($form['field23792660Y'] == '1920'){echo'selected="selected"';} ?>>1920</option>
	<option value="1921" <?php if($form['field23792660Y'] == '1921'){echo'selected="selected"';} ?>>1921</option>
	<option value="1922" <?php if($form['field23792660Y'] == '1922'){echo'selected="selected"';} ?>>1922</option>
	<option value="1923" <?php if($form['field23792660Y'] == '1923'){echo'selected="selected"';} ?>>1923</option>
	<option value="1924" <?php if($form['field23792660Y'] == '1924'){echo'selected="selected"';} ?>>1924</option>
	<option value="1925" <?php if($form['field23792660Y'] == '1925'){echo'selected="selected"';} ?>>1925</option>
	<option value="1926" <?php if($form['field23792660Y'] == '1926'){echo'selected="selected"';} ?>>1926</option>
	<option value="1927" <?php if($form['field23792660Y'] == '1927'){echo'selected="selected"';} ?>>1927</option>
	<option value="1928" <?php if($form['field23792660Y'] == '1928'){echo'selected="selected"';} ?>>1928</option>
	<option value="1929" <?php if($form['field23792660Y'] == '1929'){echo'selected="selected"';} ?>>1929</option>
	<option value="1930" <?php if($form['field23792660Y'] == '1930'){echo'selected="selected"';} ?>>1930</option>
	<option value="1931" <?php if($form['field23792660Y'] == '1931'){echo'selected="selected"';} ?>>1931</option>
	<option value="1932" <?php if($form['field23792660Y'] == '1932'){echo'selected="selected"';} ?>>1932</option>
	<option value="1933" <?php if($form['field23792660Y'] == '1933'){echo'selected="selected"';} ?>>1933</option>
	<option value="1934" <?php if($form['field23792660Y'] == '1934'){echo'selected="selected"';} ?>>1934</option>
	<option value="1935" <?php if($form['field23792660Y'] == '1935'){echo'selected="selected"';} ?>>1935</option>
	<option value="1936" <?php if($form['field23792660Y'] == '1936'){echo'selected="selected"';} ?>>1936</option>
	<option value="1937" <?php if($form['field23792660Y'] == '1937'){echo'selected="selected"';} ?>>1937</option>
	<option value="1938" <?php if($form['field23792660Y'] == '1938'){echo'selected="selected"';} ?>>1938</option>
	<option value="1939" <?php if($form['field23792660Y'] == '1939'){echo'selected="selected"';} ?>>1939</option>
	<option value="1940" <?php if($form['field23792660Y'] == '1940'){echo'selected="selected"';} ?>>1940</option>
	<option value="1941" <?php if($form['field23792660Y'] == '1941'){echo'selected="selected"';} ?>>1941</option>
	<option value="1942" <?php if($form['field23792660Y'] == '1942'){echo'selected="selected"';} ?>>1942</option>
	<option value="1943" <?php if($form['field23792660Y'] == '1943'){echo'selected="selected"';} ?>>1943</option>
	<option value="1944" <?php if($form['field23792660Y'] == '1944'){echo'selected="selected"';} ?>>1944</option>
	<option value="1945" <?php if($form['field23792660Y'] == '1945'){echo'selected="selected"';} ?>>1945</option>
	<option value="1946" <?php if($form['field23792660Y'] == '1946'){echo'selected="selected"';} ?>>1946</option>
	<option value="1947" <?php if($form['field23792660Y'] == '1947'){echo'selected="selected"';} ?>>1947</option>
	<option value="1948" <?php if($form['field23792660Y'] == '1948'){echo'selected="selected"';} ?>>1948</option>
	<option value="1949" <?php if($form['field23792660Y'] == '1949'){echo'selected="selected"';} ?>>1949</option>
	<option value="1950" <?php if($form['field23792660Y'] == '1950'){echo'selected="selected"';} ?>>1950</option>
	<option value="1951" <?php if($form['field23792660Y'] == '1951'){echo'selected="selected"';} ?>>1951</option>
	<option value="1952" <?php if($form['field23792660Y'] == '1952'){echo'selected="selected"';} ?>>1952</option>
	<option value="1953" <?php if($form['field23792660Y'] == '1953'){echo'selected="selected"';} ?>>1953</option>
	<option value="1954" <?php if($form['field23792660Y'] == '1954'){echo'selected="selected"';} ?>>1954</option>
	<option value="1955" <?php if($form['field23792660Y'] == '1955'){echo'selected="selected"';} ?>>1955</option>
	<option value="1956" <?php if($form['field23792660Y'] == '1956'){echo'selected="selected"';} ?>>1956</option>
	<option value="1957" <?php if($form['field23792660Y'] == '1957'){echo'selected="selected"';} ?>>1957</option>
	<option value="1958" <?php if($form['field23792660Y'] == '1958'){echo'selected="selected"';} ?>>1958</option>
	<option value="1959" <?php if($form['field23792660Y'] == '1959'){echo'selected="selected"';} ?>>1959</option>
	<option value="1960" <?php if($form['field23792660Y'] == '1960'){echo'selected="selected"';} ?>>1960</option>
	<option value="1961" <?php if($form['field23792660Y'] == '1961'){echo'selected="selected"';} ?>>1961</option>
	<option value="1962" <?php if($form['field23792660Y'] == '1962'){echo'selected="selected"';} ?>>1962</option>
	<option value="1963" <?php if($form['field23792660Y'] == '1963'){echo'selected="selected"';} ?>>1963</option>
	<option value="1964" <?php if($form['field23792660Y'] == '1964'){echo'selected="selected"';} ?>>1964</option>
	<option value="1965" <?php if($form['field23792660Y'] == '1965'){echo'selected="selected"';} ?>>1965</option>
	<option value="1966" <?php if($form['field23792660Y'] == '1966'){echo'selected="selected"';} ?>>1966</option>
	<option value="1967" <?php if($form['field23792660Y'] == '1967'){echo'selected="selected"';} ?>>1967</option>
	<option value="1968" <?php if($form['field23792660Y'] == '1968'){echo'selected="selected"';} ?>>1968</option>
	<option value="1969" <?php if($form['field23792660Y'] == '1969'){echo'selected="selected"';} ?>>1969</option>
	<option value="1970" <?php if($form['field23792660Y'] == '1970'){echo'selected="selected"';} ?>>1970</option>
	<option value="1971" <?php if($form['field23792660Y'] == '1971'){echo'selected="selected"';} ?>>1971</option>
	<option value="1972" <?php if($form['field23792660Y'] == '1972'){echo'selected="selected"';} ?>>1972</option>
	<option value="1973" <?php if($form['field23792660Y'] == '1973'){echo'selected="selected"';} ?>>1973</option>
	<option value="1974" <?php if($form['field23792660Y'] == '1974'){echo'selected="selected"';} ?>>1974</option>
	<option value="1975" <?php if($form['field23792660Y'] == '1975'){echo'selected="selected"';} ?>>1975</option>
	<option value="1976" <?php if($form['field23792660Y'] == '1976'){echo'selected="selected"';} ?>>1976</option>
	<option value="1977" <?php if($form['field23792660Y'] == '1977'){echo'selected="selected"';} ?>>1977</option>
	<option value="1978" <?php if($form['field23792660Y'] == '1978'){echo'selected="selected"';} ?>>1978</option>
	<option value="1979" <?php if($form['field23792660Y'] == '1979'){echo'selected="selected"';} ?>>1979</option>
	<option value="1980" <?php if($form['field23792660Y'] == '1980'){echo'selected="selected"';} ?>>1980</option>
	<option value="1981" <?php if($form['field23792660Y'] == '1981'){echo'selected="selected"';} ?>>1981</option>
	<option value="1982" <?php if($form['field23792660Y'] == '1982'){echo'selected="selected"';} ?>>1982</option>
	<option value="1983" <?php if($form['field23792660Y'] == '1983'){echo'selected="selected"';} ?>>1983</option>
	<option value="1984" <?php if($form['field23792660Y'] == '1984'){echo'selected="selected"';} ?>>1984</option>
	<option value="1985" <?php if($form['field23792660Y'] == '1985'){echo'selected="selected"';} ?>>1985</option>
	<option value="1986" <?php if($form['field23792660Y'] == '1986'){echo'selected="selected"';} ?>>1986</option>
	<option value="1987" <?php if($form['field23792660Y'] == '1987'){echo'selected="selected"';} ?>>1987</option>
	<option value="1988" <?php if($form['field23792660Y'] == '1988'){echo'selected="selected"';} ?>>1988</option>
	<option value="1989" <?php if($form['field23792660Y'] == '1989'){echo'selected="selected"';} ?>>1989</option>
	<option value="1990" <?php if($form['field23792660Y'] == '1990'){echo'selected="selected"';} ?>>1990</option>
	<option value="1991" <?php if($form['field23792660Y'] == '1991'){echo'selected="selected"';} ?>>1991</option>
	<option value="1992" <?php if($form['field23792660Y'] == '1992'){echo'selected="selected"';} ?>>1992</option>
	<option value="1993" <?php if($form['field23792660Y'] == '1993'){echo'selected="selected"';} ?>>1993</option>
	<option value="1994" <?php if($form['field23792660Y'] == '1994'){echo'selected="selected"';} ?>>1994</option>
	<option value="1995" <?php if($form['field23792660Y'] == '1995'){echo'selected="selected"';} ?>>1995</option>
	<option value="1996" <?php if($form['field23792660Y'] == '1996'){echo'selected="selected"';} ?>>1996</option>
	<option value="1997" <?php if($form['field23792660Y'] == '1997'){echo'selected="selected"';} ?>>1997</option>
	<option value="1998" <?php if($form['field23792660Y'] == '1998'){echo'selected="selected"';} ?>>1998</option>
	<option value="1999" <?php if($form['field23792660Y'] == '1999'){echo'selected="selected"';} ?>>1999</option>
	<option value="2000" <?php if($form['field23792660Y'] == '2000'){echo'selected="selected"';} ?>>2000</option>
	<option value="2001" <?php if($form['field23792660Y'] == '2001'){echo'selected="selected"';} ?>>2001</option>
	<option value="2002" <?php if($form['field23792660Y'] == '2002'){echo'selected="selected"';} ?>>2002</option>
	<option value="2003" <?php if($form['field23792660Y'] == '2003'){echo'selected="selected"';} ?>>2003</option>
	<option value="2004" <?php if($form['field23792660Y'] == '2004'){echo'selected="selected"';} ?>>2004</option>
	<option value="2005" <?php if($form['field23792660Y'] == '2005'){echo'selected="selected"';} ?>>2005</option>
	<option value="2006" <?php if($form['field23792660Y'] == '2006'){echo'selected="selected"';} ?>>2006</option>
	<option value="2007" <?php if($form['field23792660Y'] == '2007'){echo'selected="selected"';} ?>>2007</option>
	<option value="2008" <?php if($form['field23792660Y'] == '2008'){echo'selected="selected"';} ?>>2008</option>
	<option value="2009" <?php if($form['field23792660Y'] == '2009'){echo'selected="selected"';} ?>>2009</option>
	<option value="2010" <?php if($form['field23792660Y'] == '2010'){echo'selected="selected"';} ?>>2010</option>
	<option value="2011" <?php if($form['field23792660Y'] == '2011'){echo'selected="selected"';} ?>>2011</option>
	<option value="2012" <?php if($form['field23792660Y'] == '2012'){echo'selected="selected"';} ?>>2012</option>
	<option value="2013" <?php if($form['field23792660Y'] == '2013'){echo'selected="selected"';} ?>>2013</option>
	<option value="2014" <?php if($form['field23792660Y'] == '2014'){echo'selected="selected"';} ?>>2014</option>
</select>
<input type="text" id="fsCalendar23792660Link" class="fsCalendarPickerLink" style="display:none;" aria-required="true" />
<!-- <div id="fsCalendar23792660" class="fsCalendar" style=" position:absolute"></div> -->
&nbsp;
</div></fieldset>
</div>
</div>
<div id="fsRow1670286-5" class="fsRow fsFieldRow fsLastRow">
<div class="fsRowBody fsCell fsFieldCell  fsFirst fsLast fsLabelVertical  fsSpan100 " id="fsCell23680476" lang="en">
<fieldset id="label23680476">
<legend class="fsLabel fsLabelVertical hidden"><span>Share my info with MovieTickets.com</span></legend>
<div class="fieldset-content">

<label class="fsOptionLabel vertical" for="field23680476_1"><input name="field23680476[]" type="checkbox"  class="fsField  vertical" id="field23680476_1" value="Share my info with MovieTickets.com" <?php if (!isset($form['field23680476']) || count($form['field23680476']) > 0): ?> checked <?php endif ?>   />Share my info with MovieTickets.com</label>
</div></fieldset>
</div>
</div>
</div>
</div>
<div id="fsSubmit1670286" class="fsSubmit fsPagination" >
<button type="button" id="fsPreviousButton1670286" class="fsPreviousButton" value="Previous Page" style="display:none; "><span class="fsFull">Previous</span><span class="fsSlim">&larr;</span></button>
<button type="button" id="fsNextButton1670286" class="fsNextButton" value="Next Page" style="display:none; "><span class="fsFull">Next</span><span class="fsSlim">&rarr;</span></button>
<input type="hidden" name="form" value="1670286" />
<input type="hidden" name="viewkey" value="2XoDecAgHU" />
<input type="hidden" name="hidden_fields" id="hidden_fields1670286" value="" />
<input type="hidden" name="_submit" value="1" />
<input type="hidden" name="incomplete" id="incomplete1670286" value="" />
<input type="hidden" name="style_version" value="3" />
<?php if (count($errors)) { ?>
	<div class="fsError"> <?php  echo array_shift($errors); ?> </div>
 <?php } ?>
<div role="alert" id="requiredFieldsError" style="display:none;">Please fill in a valid value for all required fields</div>
<div role="alert" id="invalidFormatError" style="display:none;">Please ensure all values are in a proper format.</div>
<div role="alert" id="resumeConfirm" style="display:none;">Are you sure you want to leave this form and resume later?</div>
<div role="alert" id="fileTypeAlert" style="display:none;">You must upload one of the following file types for the selected field:</div>
<div role="alert" id="embedError" style="display:none;">There was an error displaying the form. Please copy and paste the embed code again.</div>
<div role="alert" id="applyDiscountButton" style="display:none;">Apply Discount</div>
<div role="alert" id="dcmYouSaved" style="display:none;">You saved</div>
<div role="alert" id="dcmWithCode" style="display:none;">with code</div>
<div role="alert" id="submitButtonText" style="display:none;">Submit</div>
<div role="alert" id="submittingText" style="display:none;"> </div>
<input id="fsSubmitButton1670286"
class="fsSubmitButton"
style="display:block;"
type="submit"
value="" />
<div class="clear"></div><br>

</div>
<script type="text/javascript" src="https://www.formstack.com/forms/js/3/jquery.min.js"></script>
<link href="https://www.formstack.com/forms/css/3/jquery-ui.css?20130225" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="https://www.formstack.com/forms/js/3/jquery-ui.min.js?20130225"></script>
<script type="text/javascript" src="https://www.formstack.com/forms/js/3/scripts.js?20140110"></script>
<script type="text/javascript">
if(window.addEventListener) {
window.addEventListener('load', loadFormstack, false);
} else if(window.attachEvent) {
window.attachEvent('onload', loadFormstack);
} else {
loadFormstack();
}
function loadFormstack() {
// var form1670286 = new Formstack.Form(1670286);
// form1670286.logicFields = [];
// form1670286.calcFields = [];
// form1670286.init();
// window.form1670286 = form1670286;
};
</script>
</form>
</body>
</html>