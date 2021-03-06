<html lang="en-US"><head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- <title></title> -->
	<title>JLPT</title>
	<meta name="title" content="">
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="http://jaltra.org/backend/themes/darkgray/images/jaltra-logo.jpeg" type="image/x-icon">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/bd0303748e.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="regform.css">

	<style>
	 p{
		/* display:inline-block; */
		margin:0px !important;
		
	}
	</style>
<style id="fit-vids-style">.fluid-width-video-wrapper{width:100%;position:relative;padding:0;}.fluid-width-video-wrapper iframe,.fluid-width-video-wrapper object,.fluid-width-video-wrapper embed {position:absolute;top:0;left:0;width:100%;height:100%;}</style></head>

<body class="stretched vsc-initialized device-sm" data-gr-c-s-loaded="true">

		<section id="content " class="about" style="padding: 10px 0px;">
			<div class="container">
				<form id="formentry" action="applier.php" method="post" enctype="multipart/form-data">
					<div class="">
						<div class="row">        
								<div class="col-md-2">
									<h4><b>（基金返送用)</b><br>For the Japan <br>Foundation</h4>          
								</div>
								<div class="col-md-7" style="text-align:center">
								<input type="hidden" name="news_id" value="4"> 
								<input type="hidden" name="user_id" value="1952"> 
								<input type="hidden" name="exam_year" value="2020"> 
								<input type="hidden" name="news_title" value="JLPT (Japanese Language Proficiency Test)DEC 2019"> 
								<input type="hidden" name="news_date" value="2020-09-02"> 
								<input type="hidden" name="venue_exam_month" value="12"> 
								<input type="hidden" name="description" value="<p>JLPT (Japanese&nbsp;Language Proficiency Test)DEC 2019</p>"> 
								<input type="hidden" name="payment_amt" id="payment_amt" value=""> 
									<h4><b>2020年第2回日本語能力試験</b><br>The Japanese-Language Proficiency Test in 2020（December）</h4> 
									<h2><b>受 験 願 書</b></h2>  
									<h4>Application Form</h4>                
								</div>
								<div class="col-md-1" style="text-align:right;padding-top:30px">
								<input type="checkbox" id="special_accommoda" name="special_accommoda" value="yes">
												<label for="special_accommoda">✓</label>
								</div>
								<div class="col-md-2">								
									<h4 class="right"><b><input type="checkbox">受験上の配慮を希望</b>
									Request Special
									Testing
									Accommodations</h4>                     
								</div> 
								<div>
									<h4>For Special Testing Accommodation please email/call Test Administration Committee and inform beforehand</h4>
								</div>  
							</div><table>
							                
						</table>
						
						
						<div>
							<h4><b>受験案内2ページにある「受験願書 記入例」を参考に、太枠内のみ正しく記入してください。</b>
							<br>Fill in the information required in the boxed areas as shown in the"Application Form Example" on the <a class="key_word" href="http://jaltra.org/uploads/JLPT_content/guide_2020A.pdf" name="guide" target="_blank"> <strong>Test Guide.</strong> </a> </h4>
						</div>
						
						<div>
							<table class="table1" style="width:100%">
								<tbody><tr>
									<td>① <b>受験レベル</b><br>Test Level</td>
									<td style="text-align: center"><h3><b>N
										<select name="level">
											<option></option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
										</select></b></h3>
										<span class="text-danger"></span>
									</td>
									<td>②<b> 受験地</b><br>Test Site<small class="req"> *</small></td>
									<td style="text-align: center"><h3><b>CHENNAI</b></h3></td>
									<td style="width:60%; text-align: center"><b>受験番号</b> Examinee Registration Number<br><b><input type="hidden" name="reg_no" value="20A">(Automatic Generation)</b></td>
								</tr>
							</tbody></table>
						</div>
						<div>
							<table style="width:100%">
								<tbody>
									<tr>							
										<td>③<b>名前</b> <br>Name <small class="req"> *</small></td>
										<td style="width:95%; text-align: left;padding:10px 0px 10px 0px;">
											<input type="text" name="name" onkeyup="this.value = this.value.toUpperCase();" style="width:100%;" value="">
											<span class="text-danger"></span>
										</td>
									</tr>     
									<tr>
										<td></td>
										<td style="width:95%; text-align: left;">
											<span style="padding-left: 50px">注：<b>英字26文字（活字体の大文字）のみ</b>を使ってください。名前はこの欄に書かれた通りに試験結果通知書等に記載されます。</span>
											<br><span style="padding-left: 50px">Note : Print your name <b>only in 26 English capital letters.</b> Your name will be printed on the certificates as you write.</span>
										</td>
									</tr>
								</tbody>
							</table>
							<table style="width:100%">
								<tbody>
									<tr>
										<td style="width:5%; text-align: center">④<b>性別</b><br>Gender<small class="req"> *</small></td>
										<td style="width:29%; text-align: center"><b>男</b>Male<input type="radio" name="gender" value="M"><span style="padding-left: 50px"><b>女</b>Female<input type="radio" name="gender" value="F"></span>
											<span class="text-danger"></span>
										</td>
									
										<td style="width:25%;text-align: center">⑤<b>生年月日</b><br>Date of Birth<small class="req"> *</small></td>
										<td style="text-align: center;padding:10px 0px 10px 0px;">
 											<div class="date-dropdowns"><input type="hidden" name="dob" id="example" value="">
											 	<select class="year" name="date_[year]">
													<option value="">Year</option>
													<option value="2040">2040</option>
													<option value="2039">2039</option>
													<option value="2038">2038</option>
													<option value="2037">2037</option>
													<option value="2036">2036</option>
													<option value="2035">2035</option>
													<option value="2034">2034</option>
													<option value="2033">2033</option>
													<option value="2032">2032</option>
													<option value="2031">2031</option>
													<option value="2030">2030</option>
													<option value="2029">2029</option>
													<option value="2028">2028</option>
													<option value="2027">2027</option>
													<option value="2026">2026</option>
													<option value="2025">2025</option>
													<option value="2024">2024</option>
													<option value="2023">2023</option>
													<option value="2022">2022</option>
													<option value="2021">2021</option>
													<option value="2020">2020</option>
													<option value="2019">2019</option>
													<option value="2018">2018</option>
													<option value="2017">2017</option>
													<option value="2016">2016</option>
													<option value="2015">2015</option>
													<option value="2014">2014</option>
													<option value="2013">2013</option>
													<option value="2012">2012</option>
													<option value="2011">2011</option>
													<option value="2010">2010</option>
													<option value="2009">2009</option>
													<option value="2008">2008</option>
													<option value="2007">2007</option>
													<option value="2006">2006</option>
													<option value="2005">2005</option>
													<option value="2004">2004</option>
													<option value="2003">2003</option>
													<option value="2002">2002</option>
													<option value="2001">2001</option>
													<option value="2000">2000</option>
													<option value="1999">1999</option>
													<option value="1998">1998</option>
													<option value="1997">1997</option>
													<option value="1996">1996</option>
													<option value="1995">1995</option>
													<option value="1994">1994</option>
													<option value="1993">1993</option>
													<option value="1992">1992</option>
													<option value="1991">1991</option>
													<option value="1990">1990</option>
													<option value="1989">1989</option>
													<option value="1988">1988</option>
													<option value="1987">1987</option>
													<option value="1986">1986</option>
													<option value="1985">1985</option>
													<option value="1984">1984</option>
													<option value="1983">1983</option>
													<option value="1982">1982</option>
													<option value="1981">1981</option>
													<option value="1980">1980</option>
													<option value="1979">1979</option>
													<option value="1978">1978</option>
													<option value="1977">1977</option>
													<option value="1976">1976</option>
													<option value="1975">1975</option>
													<option value="1974">1974</option>
													<option value="1973">1973</option>
													<option value="1972">1972</option>
													<option value="1971">1971</option>
													<option value="1970">1970</option>
												</select>
												<select class="month" name="date_[month]">
													<option value="">Month</option>
													<option value="01">January</option>
													<option value="02">February</option>
													<option value="03">March</option>
													<option value="04">April</option>
													<option value="05">May</option>
													<option value="06">June</option>
													<option value="07">July</option>
													<option value="08">August</option>
													<option value="09">September</option>
													<option value="10">October</option>
													<option value="11">November</option>
													<option value="12">December</option>
												</select>
												<select class="day" name="date_[day]">
													<option value="">Day</option>
													<option value="01">1st</option>
													<option value="02">2nd</option>
													<option value="03">3rd</option>
													<option value="04">4th</option>
													<option value="05">5th</option>
													<option value="06">6th</option>
													<option value="07">7th</option>
													<option value="08">8th</option>
													<option value="09">9th</option>
													<option value="10">10th</option>
													<option value="11">11th</option>
													<option value="12">12th</option>
													<option value="13">13th</option>
													<option value="14">14th</option>
													<option value="15">15th</option>
													<option value="16">16th</option>
													<option value="17">17th</option>
													<option value="18">18th</option>
													<option value="19">19th</option>
													<option value="20">20th</option>
													<option value="21">21st</option>
													<option value="22">22nd</option>
													<option value="23">23rd</option>
													<option value="24">24th</option>
													<option value="25">25th</option>
													<option value="26">26th</option>
													<option value="27">27th</option>
													<option value="28">28th</option>
													<option value="29">29th</option>
													<option value="30">30th</option>
													<option value="31">31st</option>
												</select>
											</div> 
											<span class="text-danger"></span>
										</td>                
									</tr>
								</tbody>
							</table>
							<table style="width:100%">
								<tbody>
									<tr>
										<td style="width:32%; text-align: left">⑥オンライン結果通知用暗証番号<b>（8桁の数字のみ名前)</b> <br>8-digit passcode<b> (numbers only)</b><br> for Online Test Results Announcement <small class="req"> *</small></td>
										<td style="width:30%; text-align: left">
											<input type="text" maxlength="8" name="pscode" value="">
											<span class="text-danger"></span>
										</td>
										<td style="width:20%; text-align: left">⑦<b>母語 </b>Native Language<br><small class="req"><p>(Please refer to test guide) *</p></small></td>
										<td style="width:10%; text-align: left;padding:10px 0px 10px 0px;">
											<select id="nativelang" name="nativelang" type="text" class="form-control" ?="">"&gt;
												<option value="">Select</option>
												<option value="Assamese">Assamese</option> <!-- 101 -->
												<option value="Baluchi">Baluchi</option> <!-- 102 -->
												<option value="Bengali">Bengali</option> <!-- 103 -->
												<option value="Bihari">Bihari</option> <!-- 104 -->
												<option value="Cebuano">Cebuano</option> <!-- 106 -->
												<option value="Chinese">Chinese</option> <!-- 107 -->
												<option value="Dhivehi">Dhivehi</option> <!-- 143 -->
												<option value="Dzongkha">Dzongkha</option> <!-- 144 -->
												<option value="English">English</option> <!-- 408 -->
												<option value="French">French</option> <!-- 411 -->
												<option value="Gujarati">Gujarati</option> <!-- 108 -->
												<option value="Hindi">Hindi</option> <!-- 109 -->
												<option value="Ilocano">Ilocano</option> <!-- 110 -->  
												<option value="Indonesian">Indonesian</option> <!-- 111 -->
												<option value="Japanese">Japanese</option> <!-- 112 -->
												<option value="Javanese">Javanese</option> <!-- 113 -->
												<option value="Kannada Kanarese">Kannada（Kanarese）</option> <!-- 114 --> 
												<option value="Kashmiri">Kashmiri</option> <!-- 115 --> 
												<option value="Khmer Kampuchean">Khmer（Kampuchean）</option> <!-- 118 -->
												<option value="Korean">Korean</option> <!-- 119 --> 
												<option value="Kurdish">Kurdish</option> <!-- 120 -->
												<option value="Lao">Lao</option> <!-- 121 -->
												<option value="Malay">Malay</option> <!-- 122 -->
												<option value="Malayalam">Malayalam</option> <!-- 123 -->
												<option value="Marathi">Marathi</option> <!-- 124 -->
												<option value="Manipuri Meeteilol">Manipuri（Meeteilol）</option> <!-- 125 -->
												<option value="Mongolian">Mongolian</option> <!-- 117 -->
												<option value="Myanmar">Myanmar</option> <!-- 105 -->
												<option value="Nepali">Nepali</option> <!-- 126 -->
												<option value="Oriya">Oriya</option> <!-- 127 -->
												<option value="Pilipino">Pilipino</option> <!-- 128 -->
												<option value="Punjabi">Punjabi</option> <!-- 129 -->
												<option value="Pushtu">Pushtu</option> <!-- 130 -->
												<option value="Rajasthani">Rajasthani</option> <!-- 131 -->
												<option value="Sindhi">Sindhi</option>  <!-- 132 -->
												<option value="Sinhalese">Sinhalese</option> <!-- 133 -->
												<option value="Sundanese">Sundanese</option> <!-- 134 -->
												<option value="Tamil">Tamil</option> <!-- 135 -->
												<option value="Tatar">Tatar</option> <!-- 136 -->
												<option value="Telugu">Telugu</option> <!-- 137 -->
												<option value="Thai">Thai</option> <!-- 138 -->
												<option value="Tibetan">Tibetan</option>  <!-- 139 -->
												<option value="Uighur">Uighur</option> <!-- 140 -->
												<option value="Urdu">Urdu</option> <!-- 141 -->
												<option value="Vietnamese">Vietnamese</option> <!-- 142 -->
											</select>	
										</td>
									</tr>     
								</tbody>
							</table>
							<table style="width:100%">
								<tbody>
									<tr>
										<td rowspan="0" style=" text-align: center">⑧<b>住所<br><br></b>Address</td>                                                   
									</tr>
									<tr>
										<td height="30" style="padding:10px 0px 10px 0px;">
											<b>番地</b> Street/Suburb <small class="req"> *</small> 
											<input type="text" name="street" size="130" value="" >
											<span class="text-danger"></span>
										</td>                            
									</tr>
									<tr>
										<td height="30" style="padding:10px 0px 10px 0px;"><b>市・州</b> City/State <small class="req"> *</small> 
											<input type="text" name="city_state" size="40" value="">
											<span class="text-danger"></span>
										</td>                            
									</tr>
									<tr>
										<td style="padding:10px 0px 10px 0px;">
											<div class="row">
												<div class="col-md-7">
													<b>国・地域 </b>Country/Area <small class="req"> *</small>
													<input type="text" name="country" size="35" value="">
													<span class="text-danger"></span>
												</div>
												<div class="col-md-5">
													<b>郵便番号</b> Postal Code <small class="req"> *</small><input type="text" name="pin_code" value="">
													<span class="text-danger"></span>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td height="30" style="padding:10px 0px 10px 0px;">
											<b>電話番号</b> Telephone No. <small class="req"> *</small> 
											<input type="text" name="tele_no" maxlength="10" size="10" value="">
											<span class="text-danger"></span>
										</td>                            
									</tr>
									<tr>
										<td height="30" style="padding:10px 0px 10px 0px;"><b>電子メール</b> E-mail <small class="req"> *</small> 
											<input type="text" name="email" size="39" value="">
											<span class="text-danger"></span>
										</td>                            
									</tr>
								</tbody>
							</table>
							<table style="width:100%">
								<tbody>
									<tr>
										<td>⑨<b>日本語学習機関名</b> Institution where you are studying（or studied） Japanese-Language</td>
											<td style="width:73%;">
												<input type="text" name="inst_name" value="" size="113">
											</td>
									</tr>
								</tbody>
							</table>
							<table style="width:100%">
								<tbody>
									<tr>
									<td>⑩<b>日本語学習の場</b>（１～６から１つ選ぶ Place of learning Japanese（ Choose a number from 1 to 6）
										<p class="testguide">(Please refer to test guide) *</p>
										<!-- <div class="show"> 
											1. Learning Japanese at elementary school（primary education）<br>
											2. Learning Japanese at middle school or high school（secondary education）<br>
											3. Majoring in Japanese at university or graduate school（higher education）<br>
											4. Learning but not majoring in Japanese at university or graduate school（higher education）<br>
											5. Learning Japanese at some other educational institution（such as foreign language schools）<br>
											6. Not learning Japanese at the educational institutions listed in 1 through 5 above 
										</div> -->
										<select name="place">
											<option value="Learning Japanese at elementary school（primary education）">Learning Japanese at elementary school（primary education）</option>
											<option value="Learning Japanese at middle school or high school（secondary education）">Learning Japanese at middle school or high school（secondary education）</option>
											<option value="Majoring in Japanese at university or graduate school（higher education）">Majoring in Japanese at university or graduate school（higher education）</option>
											<option value="Learning but not majoring in Japanese at university or graduate school（higher education）">Learning but not majoring in Japanese at university or graduate school（higher education）</option>
											<option value="Learning Japanese at some other educational institution（such as foreign language schools）">Learning Japanese at some other educational institution（such as foreign language schools）</option>
											<option value="Not learning Japanese at the educational institutions listed in 1 through 5 above">Not learning Japanese at the educational institutions listed in 1 through 5 above</option>
										
										</select>
									</td>
									<!-- <td style="width:7%;text-align: center">
										
									</td> -->
									<td>⑪<b>受験目的</b>（１～８から１つ選ぶ）<br>
										Reason for taking this exam（Choose a number from 1 to 8）
										<p class="testguide">(Please refer to test guide) *</p>
										<!-- <div class="show"> 
										1. Necessary for admission into university or graduate school in own country<br>
										2. Necessary for admission into university or graduate school in Japan<br>
										3. Necessary for admission or as proof of proficiency for other educational institution in own country<br>
										4. Necessary for admission or as proof of proficiency for other educational institution in Japan<br>
										5. Useful for work or will be useful in order to attain employment, secure salary increase or promotion in own country<br>
										6. Useful for work or will be useful in order to attain employment, secure salary increase or promotion in Japan <br>
										7. To measure my own level of proficiency for reasons other than 1 through 6 above <br>
										8. Other
										</div> -->
										<select name="reason">
											<option></option>
											<option value="Necessary for admission into university or graduate school in own country">Necessary for admission into university or graduate school in own country</option>
											<option value="Necessary for admission into university or graduate school in Japan">Necessary for admission into university or graduate school in Japan</option>
											<option value="Necessary for admission or as proof of proficiency for other educational institution in own country">Necessary for admission or as proof of proficiency for other educational institution in own country</option>
											<option value="Necessary for admission or as proof of proficiency for other educational institution in Japan">Necessary for admission or as proof of proficiency for other educational institution in Japan</option>
											<option value="Useful for work or will be useful in order to attain employment, secure salary increase or promotion in own country">Useful for work or will be useful in order to attain employment, secure salary increase or promotion in own country</option>
											<option value="Useful for work or will be useful in order to attain employment, secure salary increase or promotion in Japan">Useful for work or will be useful in order to attain employment, secure salary increase or promotion in Japan </option>
											<option value="To measure my own level of proficiency for reasons other than 1 through 6 above ">To measure my own level of proficiency for reasons other than 1 through 6 above </option>
											<option value="Other">Other</option>
											
										</select>
									</td>   
									<!-- <td style="width:7%;text-align: center">
										
									</td> -->
								</tr>
							</tbody></table>
							<table style="width:100%">
								<tbody>
									<tr>
									<td style="padding-right:45px">⑫<b>職業</b>（１～６から１つ選ぶ）<br>
										Occupation（ Choose a number from 1 to 6）<p class="testguide">(Please refer to test guide) *</p>
											<!-- <div class="show"> 
												1. Elementary school student（primary education）<br>
												2. Middle school or high school student（secondary education）<br>
												3. University or graduate school student（higher education）<br>
												4. Student of some other educational institution（such as foreign language school）<br> 
												5. Employed（company employee, public servant, educator, self-employed, etc.）<br> 
												6. Other<br> -->
												<select name="occu">
													<option value="Elementary school student（primary education）">Elementary school student（primary education）</option>
													<option value="Middle school or high school student（secondary education）">Middle school or high school student（secondary education）</option>
													<option value="University or graduate school student（higher education）">University or graduate school student（higher education）</option>
													<option value="Student of some other educational institution（such as foreign language school）">Student of some other educational institution（such as foreign language school）</option>
													<option value="Employed（company employee, public servant, educator, self-employed, etc.）">Employed（company employee, public servant, educator, self-employed, etc.）</option>
													<option value="Other">Other</option>
												</select>
												(If you choose 1 to 3 &amp; Other= Go to question No.⑭)<br>
												(If you choose 4 or 5 = Go to question No.⑬)
											<!-- </div> -->
									</td>
									<!-- <td style="width:7%;text-align: center;">
										
									</td> -->
									<td>⑬<b>職業の種類</b>（１～６から１つ選ぶ）<br>
										Occupational details（ Choose a number from 1 to 6)
										<p class="testguide">(Please refer to test guide) *</p>
										<!-- <div class="show"> 
											1. Using Japanese while working as a Japanese-language teacher at an educational institution<br>
											2. Using Japanese while working as a public servant<br>
											3. Using Japanese while working as a company employee, such as in the manufacturing, building, or information and communication industries<br>
											4. Using Japanese while working as an employee in the service, tourism, or hospitality industries<br>
											5. Using Japanese at a job other than 1 through 4 above<br>
											6. Do not use Japanese while working
										</div> -->
										<select name="occu_details">
											<option value="Using Japanese while working as a Japanese-language teacher at an educational institution">Using Japanese while working as a Japanese-language teacher at an educational institution</option>
											<option value="Using Japanese while working as a public servant">Using Japanese while working as a public servant</option>
											<option value="Using Japanese while working as a company employee, such as in the manufacturing, building, or information and communication industries">Using Japanese while working as a company employee, such as in the manufacturing, building, or information and communication industries</option>
											<option value="Using Japanese while working as an employee in the service, tourism, or hospitality industries">Using Japanese while working as an employee in the service, tourism, or hospitality industries</option>
											<option value="Using Japanese at a job other than 1 through 4 above">Using Japanese at a job other than 1 through 4 above</option>
											<option value="Do not use Japanese while working">Do not use Japanese while working</option>
										</select>
									</td>                    
									<!-- <td style="width:7%;text-align: center">
										
									</td> -->
									</tr>
								</tbody>
							</table>
							<table style="width:100%">
								<tbody><tr>
									<td style="padding-right:40px">⑭<b>日本語との接触媒体</b><br>
										Media via which you come into contact with Japanese language<p class="testguide">(Please refer to test guide) *</p>
											<!-- <div class="show"> 
												1. TV news program and documentaries<br>
												2. Drama（excluding animation）<br>
												3. Animation<br>
												4. Newspapers and magazines（excluding manga）<br>
												5. Books（excluding textbooks）<br>
												6. Manga<br>
												7. Articles on websites<br>
												8. Other<br>
												9. Do not come into contact with the Japanese language outside of class
											</div>  -->
									<!-- </td> -->
									<td style="width:17.2%;text-align: center">
										<!-- <ol> -->
											<li>
												<input type="checkbox" id="media_1" name="media1" value="TV news program and documentaries">
												<label for="media_1">TV news program and documentaries</label>
											</li>
											<li>
												<input type="checkbox" id="media_2" name="media2" value="Drama（excluding animation）">
												<label for="media_2">Drama（excluding animation）</label>
											</li>
											<li>
												<input type="checkbox" id="media_3" name="media3" value="Animation">
												<label for="media_3">Animation</label>
											</li>
										<!-- </ul> -->
									<!-- </td> -->
									<!-- <td style="width:20%;text-align: center"> -->
										<!-- <ul> -->
											<li>
												<input type="checkbox" id="media_4" name="media4" value="Newspapers and magazines（excluding manga）">
												<label for="media_4">Newspapers and magazines（excluding manga）</label>
											</li>
											<li>
												<input type="checkbox" id="media_5" name="media5" value="Books（excluding textbooks）">
												<label for="media_5">Books（excluding textbooks）</label>
											</li>
											<li>
												<input type="checkbox" id="media_6" name="media6" value="Manga">
												<label for="media_6">Manga</label>
											</li>
										<!-- </ul> -->
									<!-- </td> -->
									<!-- <td style="width:20%;text-align: center"> -->
										<!-- <ul> -->
											<li>
												<input type="checkbox" id="media_7" name="media7" value="Articles on websites">
												<label for="media_7">Articles on websites</label>
											</li>
											<li>
												<input type="checkbox" id="media_8" name="media8" value="Other">
												<label for="media_8">Other</label>
											</li>
											<li>
												<input type="checkbox" id="media_9" name="media9"  value="Did not come into contact with the Japanese language outside of class">
												<label for="media_9">Did not come into contact with the Japanese language outside of class</label>
											</li>
										<!-- </ol> -->
										</td>
									</td>
								</tr>
							</tbody></table>
							<table style="width:100%">
								<tbody>
								<tr>
									<td style="width:35%;">                       
									</td>
									<td style="width:10%;text-align: center"><b>はなす</b><br>Speaking</td>
									<td style="width:10%;text-align: center"><b>きく</b><br>Listening</td>
									<td style="width:10%;text-align: center"><b>よむ</b><br>Reading</td>
									<td style="width:10%;text-align: center"><b>かく</b><br>Writing</td>
									<td style="width:10%;text-align: center"><b>あてはまらない</b><br>None of the above</td>
								</tr>                    
							</tbody></table>
							<table style="width:100%">
								<tbody><tr>
									<td rowspan="0" style=" text-align: center"><b>日本語を使用する相手</b><br>
										The person with whom you usually communicate in Japanese</td>                                                   
								</tr>
								<tr>
									<td height="10" style="width:20%;">⑮ <b>先生</b>with a teacher </td>                          
									<td style="width:11.7%;padding-left: 34px">
										<li>
											<input type="checkbox" id="check_10" name="t_speak" value="Speaking">
											<label for="check_10">1</label>
										</li>
									</td>                            
									<td style="padding-left: 34px;width:11.8%;">
										<li>
											<input type="checkbox" id="check_11" name="t_listen" value="Listening">
											<label for="check_11">2</label>
										</li>
									</td>                            
									<td style="width:11.8%;padding-left: 34px">
										<li>
											<input type="checkbox" id="check_12" name="t_read" value="Reading">
											<label for="check_12">3</label>
										</li>
									</td>                                                                          
									<td style="width:11.8%;padding-left: 34px">
										<li>
											<input type="checkbox" id="check_13" name="t_write" value="Writing">
											<label for="check_13">4</label>
										</li>
									</td>                            
									<td style="width:11.8%;padding-left: 34px">
										<li>
											<input type="checkbox" id="check_15" name="t_nota" value="NOTA">
											<label for="check_15">5</label>
										</li>
									</td>                                                                          
								</tr>
								<tr>
									<td height="30">⑯ <b>友人</b>with friends </td> 
									<td style="width:11.7%;padding-left: 34px">
										<li>
											<input type="checkbox" id="check_21" name="f_speak" value="Speaking">
											<label for="check_21">1</label>
										</li>
									</td>                            
									<td style="width:11.8%;padding-left: 34px">
										<li>
											<input type="checkbox" id="check_22" name="f_listen" value="Listening">
											<label for="check_22">2</label>
										</li>
									</td>                            
									<td style="width:11.8%;padding-left: 34px">
										<li>
											<input type="checkbox" id="check_23" name="f_read" value="Reading">
											<label for="check_23">3</label>
										</li>
									</td>                                                                          
									<td style="width:11.8%;padding-left: 34px">
										<li>
											<input type="checkbox" id="check_24" name="f_write" value="Writing">
											<label for="check_24">4</label>
										</li>
									</td>                            
									<td style="width:11.8%;padding-left: 34px">
										<li>
											<input type="checkbox" id="check_25" name="f_nota" value="NOTA">
											<label for="check_25">5</label>
										</li>
									</td>                                     
								</tr>
								<tr>
									<td height="30">⑰<b>家族</b>with family</td> 
									<td style="width:11.7%;padding-left: 34px">
										<li>
											<input type="checkbox" id="check_31" name="fa_speak" value="Speaking">
											<label for="check_31">1</label>
										</li>
									</td>                            
									<td style="width:11.8%;padding-left: 34px">
										<li>
											<input type="checkbox" id="check_32" name="fa_listen" value="Listening">
											<label for="check_32">2</label>
										</li>
									</td>                            
									<td style="width:11.8%;padding-left: 34px">
										<li>
											<input type="checkbox" id="check_33" name="fa_read" value="Reading">
											<label for="check_33">3</label>
										</li>
									</td>                                                                          
									<td style="width:11.8%;padding-left: 34px">
										<li>
											<input type="checkbox" id="check_34" name="fa_write" value="Writing">
											<label for="check_34">4</label>
										</li>
									</td>                            
									<td style="width:11.8%;padding-left: 34px">
										<li>
											<input type="checkbox" id="check_35" name="fa_nota" value="NOTA">
											
											<label for="check_35">5</label>
										</li>
									</td>                                     
								</tr>
								<tr>
									<td height="30">⑱<b>上司</b>with a supervisor</td> 
									<td style="width:11.7%;padding-left: 34px">
										<li>
											<input type="checkbox" id="check_41" name="sv_speak" value="Speaking">
											<label for="check_41">1</label>
										</li>
									</td>                            
									<td style="width:11.8%;padding-left: 34px">
										<li>
											<input type="checkbox" id="check_42" name="sv_listen" value="Listening">
											<label for="check_42">2</label>
										</li>
									</td>                            
									<td style="width:11.8%;padding-left: 34px">
										<li>
											<input type="checkbox" id="check_43" name="sv_read" value="Reading">
											<label for="check_43">3</label>
										</li>
									</td>                                                                          
									<td style="width:11.8%;padding-left: 34px">
										<li>
											<input type="checkbox" id="check_44" name="sv_write" value="Writing">
											<label for="check_44">4</label>
										</li>
									</td>                            
									<td style="width:11.8%;padding-left: 34px">
										<li>
											<input type="checkbox" id="check_45" name="sv_nota" value="NOTA">
											<label for="check_45">5</label>
										</li>
									</td>                                   
								</tr>
								<tr>
									<td height="30">⑲ <b>同僚</b> with colleagues</td> 
									<td style="width:11.7%;padding-left: 34px">
										<li>
											<input type="checkbox" id="check_51" name="co_speak" value="Speaking">
											<label for="check_51">1</label>
										</li>
									</td>                            
									<td style="width:11.8%;padding-left: 34px">
										<li>
											<input type="checkbox" id="check_52" name="co_listen" value="Listening">
											<label for="check_52">2</label>
										</li>
									</td>                            
									<td style="width:11.8%;padding-left: 34px">
										<li>
											<input type="checkbox" id="check_53" name="co_read" value="Reading">
											<label for="check_53">3</label>
										</li>
									</td>                                                                          
									<td style="width:11.8%;padding-left: 34px">
										<li>
											<input type="checkbox" id="check_54" name="co_write" value="Writing">
											<label for="check_54">4</label>
										</li>
									</td>                            
									<td style="width:11.8%;padding-left: 34px">
										<li>
											<input type="checkbox" id="check_55" name="co_nota" value="NOTA">
											<label for="check_55">5</label>
										</li>
									</td>                                      
								</tr>
								<tr>
									<td height="30">⑳ <b>顧客</b> with customers</td> 
									<td height="10" style="width:11.7%; padding-left: 33px">
										<li>
											<input type="checkbox" id="check_61" name="cu_speak" value="Speaking">
											<label for="check_61">1</label>
										</li>
									</td>                            
									<td height="10" style="width:11.7%; padding-left: 33px">
										<li>
											<input type="checkbox" id="check_62" name="cu_listen" value="Listening">
											<label for="check_62">2</label>
										</li>
									</td>                           
									<td height="10" style="width:11.7%; padding-left: 33px">
										<li>
											<input type="checkbox" id="check_63" name="cu_read" value="Reading">
											<label for="check_63">3</label>
										</li>
									</td>                           
									<td height="10" style="width:11.7%; padding-left: 33px">
										<li>
											<input type="checkbox" id="check_64" name="cu_write" value="Writing">
											<label for="check_64">4</label>
										</li>
									</td>                           
									<td height="10" style="width:11.7%; padding-left: 33px">
										<li>
											<input type="checkbox" id="check_65" name="cu_nota" value="NOTA">
								<label for="check_65">5</label>
										</li>
									</td>                           
								</tr>                    
							</tbody></table> 
							<table style="width:100%">
								<tbody><tr>
									<td style="width:35%;">                       
									</td>
									<td style="width:10%;text-align: center"><b>N1／旧1級</b><br>ex Level 1</td>
									<td style="width:10%;text-align: center"><b>N2／旧2級</b><br>ex Level 2</td>
									<td style="width:10%;text-align: center"><b>N3／旧3級</b><br>ex Level 3</td>
									<td style="width:10%;text-align: center"><b>N4／旧4級</b><br>ex Level 4</td>
									<td style="width:10%;text-align: center"><b>N5／旧5級</b><br>ex Level 5</td>
								</tr>     
								<tr>
									<td style="width:35%;"><b>過去受験回数</b><br>Times of taking JLPT</td>
									<td style="width:10%;text-align: center">㉑
										<select name="N1_atmt">
										<option></option> 
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
										</select>回 Times
									</td>
									<td style="width:10%;text-align: center">㉒ 
										<select name="N2_atmt">
										<option></option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
										</select>回 Times
									</td>
									<td style="width:10%;text-align: center">㉓
										<select name="N3_atmt">
										<option></option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
										</select> 回 Times
									</td>
									<td style="width:10%;text-align: center">㉔ 
										<select name="N4_atmt">
										<option></option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
										</select>回 Times
									</td>
									<td style="width:10%;text-align: center">㉕ 
										<select name="N5_atmt">
										<option></option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
										</select>回 Times
									</td>
								</tr>                 
							</tbody></table>
							<table style="width:100%">
								<tbody><tr>
									<td rowspan="0" style="width:41.3%;text-align: left"><b>最終の合否</b>Pass/Fail of the last time at each level</td>                               
								</tr>
								<tr>
									<td rowspan="0" style="width:5%;text-align: center">㉖                            
										<ul>
											<li>
												<input type="checkbox" id="check_01" name="N1_p_f" value="Pass">
												<label for="check_01">Pass</label>
											</li>
											<li>
												<input type="checkbox" id="check_04" name="N1_p_f" value="Fail">
												<!-- <input type="checkbox" id="check_04" name="N1_pass_fail"  value="2"> -->
												<label for="check_04">Fail</label>
											</li>
										</ul>
									</td>
									<td>合(Pass)</td>
									<td rowspan="0" style="width:5%;text-align: center">㉗
										<ul>
											<li>
												<input type="checkbox" id="check_03" name="N2_p_f" value="Fail">
												
												<label for="check_02">2</label>
											</li>
										</ul>
									</td>
									<td>合(Pass)</td>
									<td rowspan="0" style="width:5%;text-align: center">㉘
										<ul>
											<li>
												<input type="checkbox" id="check_05" name="N2_p_f" value="Pass">
												<!-- <input type="checkbox" id="check_05" name="N3_pass_fail"  value="1"> -->
												<label for="check_05">1</label>
											</li>
											<li>
												<input type="checkbox" id="check_06" name="N3_p_f" value="Fail">
												<!-- <input type="checkbox" id="check_06" name="N3_pass_fail"  value="2"> -->
												<label for="check_06">2</label>
											</li>
										</ul>
									</td>
									<td>合(Pass)</td>
									<td rowspan="0" style="width:5%;text-align: center">㉙
										<ul>
											<li>
												<input type="checkbox" id="check_07" name="N4_p_f" value="Pass">
												
												<label for="check_07">1</label>
											</li>
											<li>
												<input type="checkbox" id="check_08" name="N4_p_f" value="Fail">
												<!-- <input type="checkbox" id="check_08" name="N4_pass_fail"  value="2"> -->
												<label for="check_08">2</label>
											</li>
										</ul>
									</td>
									<td>合(Pass)</td>
									<td rowspan="0" style="width:5%;text-align: center">㉚
										<ul>
											<li>
												<input type="checkbox" id="check_71" name="N5_p_f" value="Pass">
												<!-- <input type="checkbox" id="check_71" name="N5_pass_fail"  value="1"> -->
												<label for="check_71">1</label>
											</li>
											<li>
												<input type="checkbox" id="check_72" name="N5_p_f" value="Fail">
												<!-- <input type="checkbox" id="check_72" name="N5_pass_fail"  value="2"> -->
												<label for="check_72">2</label>
											</li>
										</ul>
									</td>
									<td>合(Pass)</td>    
								</tr>
								<tr>
									<td>否(Fail)</td>
									<td>否(Fail)</td>
									<td>否(Fail)</td>
									<td>否(Fail)</td>
									<td>否(Fail)</td>
								</tr>                    
							</tbody></table> 
							<table style="width:100%">
                                <tbody><tr>
                                    <td>31.<b>写真</b> <br>Photo Upload(Dimension should be 3.5 cm (width) × 4.5 cm (height) only.)<small class="req"> *</small></td>
                                    <td style="width:50%; text-align: left;padding:10px 0px 10px 0px;">
								<div>
									<input class="form-control" type="file" name="photo" id="photo" accept="image/jpeg,image/jpg">
									<input type="hidden" name="prephoto" id="prephoto" value="">
								</div>
								<span class="text-danger"></span>
							</td>
                                    
                                </tr>     
                               
                            </tbody></table>
							<h4>32. <b>この受験案内に書いてあるすべてのことを理解し、同意した上で受験を申し込みます。</b><br>
							I, by submitting this form, understand and agree to all the conditions and contents of the Test Guide.</h4>
							<!-- <h4><b>署名/Signature</b> <span style="padding-left: 400px" > <b>日付/Date</b></span>  </h4>           -->
						</div>
					</div>
				
					<button type="submit"  class="btn btn-info pull-right" style="margin-right: 10px;" value="save" >Save</button>
				</form>
			</div>
			
		</section>
		

</body></html>