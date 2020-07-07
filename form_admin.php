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
		.container {
			box-shadow: 5px 10px 18px #888888;
			padding: 10px 20px;
		}
		p{
			/* display:inline-block; */
			margin: 10px !important;
		}

		.table{
			background-color: #E3E5CA;
		}

		table {
			border-collapse: collapse;
			border: solid 1px black;
			
		}
		td {
			border: solid 1px black;
		}
		li {
			list-style-type: none;
		}

		input{
			background-color: #BBC9E1;
		}

		input[type="checkbox"] {
			height: 30px;
			width: 30px;
		}

		input[type="radio"] {
			height: 30px;
			width: 30px;
			border-radius: 50px;
		}
	</style>
	<style id="fit-vids-style">
		.fluid-width-video-wrapper{
			width:100%;
			position:relative;
			padding:0;
		}
		.fluid-width-video-wrapper iframe,.fluid-width-video-wrapper object,.fluid-width-video-wrapper embed {
			position:absolute;
			top:0;
			left:0;
			width:100%;
			height:100%;
		}
	</style>
	</head>
<body class="stretched vsc-initialized device-sm" data-gr-c-s-loaded="true">
		<section id="content " class="about" style="padding: 10px 0px;">
			<div class="container">
				<form id="formentry" action="" method="post" enctype="multipart/form-data">
					
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
								<input type="checkbox" id="special_accommoda" name="special_accom" value="yes">
												<label for="special_accommoda">✓</label>
								</div>
								<div class="col-md-2">								
									<h4 class="right"><b>受験上の配慮を希望</b>
									Request Special <br>Testing <br> Accommodations</h4>                     
								</div> 
								<div>
									<h4>For Special Testing Accommodation please email/call Test Administration Committee and inform beforehand</h4>
								</div>  
							</div>
						<div>
							<h4><b>受験案内2ページにある「受験願書 記入例」を参考に、太枠内のみ正しく記入してください。</b>
							<br>Fill in the information required in the boxed areas as shown in the"Application Form Example" on the <a class="key_word" href="http://jaltra.org/uploads/JLPT_content/guide_2020A.pdf" name="guide" target="_blank"> <strong>Test Guide.</strong> </a> </h4>
						</div>
					<div class="table">
						<div>
							<table class="table1" style="width:100%">
								<tbody><tr>
									<td>① <b>受験レベル</b><br>Test Level</td>
									<td style="text-align: center"><h3><b>N<?php echo$level?></b></h3>
										<span class="text-danger"></span>
									</td>
									<td>②<b> 受験地</b><br>Test Site<small class="req"> *</small></td>
									<td style="text-align: center"><h3><b>CHENNAI</b></h3></td>
									<td style="width:60%; text-align: center"><b>受験番号</b> Examinee Registration Number<br><b><input type="text" name="reg_no" value="20A" disabled> <br>(Automatic Generation)</b></td>
								</tr>
							</tbody></table>
						</div>
						<div>
							<table style="width:100%">
								<tbody>
									<tr>							
										<td>③<b>名前</b> <br>Name <small class="req"> *</small></td>
										<td style="width:90%; text-align: left;padding:10px 0px 10px 0px;">
											<input type="text" name="name1" style="width:100%;" value="<?php echo $name1?>" disabled>
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
										<td style="width:29%; text-align: center" ><b>男</b>Male<input type="radio" name="gender" value="<?php echo $gender == "M"?>" disabled><span style="padding-left: 50px"><b>女</b>Female<input type="radio" name="gender" value="<?php echo $gender == "F"?>" disabled></span>
											<span class="text-danger"></span>
										</td>
									
										<td style="width:25%;text-align: center">⑤<b>生年月日</b><br>Date of Birth<small class="req"> *</small></td>
										<td style="text-align: center;padding:10px 0px 10px 0px;">
                                            <input type="date" name="date" id="" value="<?php echo $date?>" disabled>
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
											<input type="text" name="pscode" value="<?php echo $pscode?>" disabled>
											<span class="text-danger"></span>
										</td>
										<td style="width:20%; text-align: left">⑦<b>母語 </b>Native Language<br><small class="req"><p>(Please refer to test guide) *</p></small></td>
										<td style="width:10%; text-align: left;padding:10px 0px 10px 0px;">
											<input type="text" name="lang" value="<?php echo $nativelang?>" disabled>
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
											<input type="text" name="street" value="<?php echo $street?>" disabled>
											<span class="text-danger"></span>
										</td>                            
									</tr>
									<tr>
										<td height="30" style="padding:10px 0px 10px 0px;"><b>市・州</b> City/State <small class="req"> *</small> 
											<input type="text" name="city_state" value="<?php echo $city_state?>" disabled>
											<span class="text-danger"></span>
										</td>                            
									</tr>
									<tr>
										<td style="padding:10px 0px 10px 0px;">
											<div class="row">
												<div class="col-md-7">
													<b>国・地域 </b>Country/Area <small class="req"> *</small>
													<input type="text" name="country" size="35" value="<?php echo $country?>" disabled>
													<span class="text-danger"></span>
												</div>
												<div class="col-md-5">
													<b>郵便番号</b> Postal Code <small class="req"> *</small><input type="text" name="pin_code" value="<?php echo $pin_code?>" disabled>
													<span class="text-danger"></span>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td height="30" style="padding:10px 0px 10px 0px;">
											<b>電話番号</b> Telephone No. <small class="req"> *</small> 
											<input type="text" name="tele_no" value="<?php echo $tele_no?>" disabled>
											<span class="text-danger"></span>
										</td>                            
									</tr>
									<tr>
										<td height="30" style="padding:10px 0px 10px 0px;"><b>電子メール</b> E-mail <small class="req"> *</small> 
											<input type="text" name="email" value="<?php echo $email?>" disabled>
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
												<input type="text" name="inst_name" value="<?php echo $inst_name?>" disabled>
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
										 -->
                                            
                                        <!-- </div> -->
									</td>
									<td style="width:7%;text-align: center">
										<input name="place" value="<?php echo $place?>" disabled>
									</td>
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
										
									</td>   
									<td style="width:7%;text-align: center">
										<input name="reason" value="<?php echo $reason?>" disabled>
									</td>
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
												
												<!-- (If you choose 1 to 3 &amp; Other= Go to question No.⑭)<br>
												(If you choose 4 or 5 = Go to question No.⑬)
											</div> -->
									</td>
									<td style="width:7%;text-align: center;">
										<input name="occu" value="<?php echo $occu?>" disabled>
									</td>
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
										
									</td>                    
									<td style="width:7%;text-align: center">
										<input name="occu_details" value="<?php echo $occu_details?>" disabled>
									</td>
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
									</td>
									<td style="width:17.2%;text-align: center">
										<ul>
											<li>
												<input type="checkbox" id="media_1" name="media_1" value="<?php echo $media1 == "1"?>" disabled>
												<label for="media_1">1</label>
											</li>
											<li>
												<input type="checkbox" id="media_2" name="media_2" value="<?php echo $media2 == "2"?>" disabled>
												<label for="media_2">2</label>
											</li>
											<li>
												<input type="checkbox" id="media_3" name="media_3" value="<?php echo $media3 == "3"?>" disabled>
												<label for="media_3">3</label>
											</li>
										</ul>
									</td>
									<td style="width:20%;text-align: center">
										<ul>
											<li>
												<input type="checkbox" id="media_4" name="media_4" value="<?php echo $media4 == "4"?>" disabled>
												<label for="media_4">4</label>
											</li>
											<li>
												<input type="checkbox" id="media_5" name="media_5" value="<?php echo $media5 == "5"?>" disabled>
												<label for="media_5">5</label>
											</li>
											<li>
												<input type="checkbox" id="media_6" name="media_6" value="<?php echo $media6 == "6"?>" disabled>
												<label for="media_6">6</label>
											</li>
										</ul>
									</td>
									<td style="width:20%;text-align: center">
										<ul>
											<li>
												<input type="checkbox" id="media_7" name="media_7" value="<?php echo $media7 == "7"?>" disabled>
												<label for="media_7">7</label>
											</li>
											<li>
												<input type="checkbox" id="media_8" name="media_8" value="<?php echo $media8 == "8"?>" disabled>
												<label for="media_8">8</label>
											</li>
											<li>
												<input type="checkbox" id="media_9" name="media_9" value="<?php echo $media9 == "9"?>" disabled>
												<label for="media_9">9</label>
											</li>
										</ol>
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
								<tr id="teacher_media">
									<td height="10" style="width:20%;">⑮ <b>先生</b>with a teacher </td>                          
									<td style="width:11.7%;padding-left: 34px">
										
											<input type="checkbox" id="check_10" name="t_speak" value="<?php echo $teacher1 == "1"?>" disabled>
											<label for="check_10">1</label>
										
									</td>                            
									<td style="padding-left: 34px;width:11.8%;">
										
											<input type="checkbox" id="check_11" name="t_listen" value="<?php echo $teacher2 == "2"?>" disabled>
											<label for="check_11">2</label>
										
									</td>                            
									<td style="width:11.8%;padding-left: 34px">
										
											<input type="checkbox" id="check_12" name="t_read" value="<?php echo $teacher3 == "3"?>" disabled>
											<label for="check_12">3</label>
										
									</td>                                                                          
									<td style="width:11.8%;padding-left: 34px">
										
											<input type="checkbox" id="check_13" name="t_write" value="<?php echo $teacher4 == "4"?>" disabled>
											<label for="check_13">4</label>
										
									</td>                            
									<td style="width:11.8%;padding-left: 34px">
										
											<input type="checkbox" id="check_15" name="t_nota" value="<?php echo $teacher5 == "5"?>" disabled>
											<label for="check_15">5</label>
										
									</td>                                                                          
								</tr>
								<tr>
									<td height="30">⑯ <b>友人</b>with friends </td> 
									<td style="width:11.7%;padding-left: 34px">
										
											<input type="checkbox" id="check_21" name="f_speak" value="<?php echo $friends1 == "1"?>" disabled>
											<label for="check_21">1</label>
										
									</td>                            
									<td style="width:11.8%;padding-left: 34px">
										
											<input type="checkbox" id="check_22" name="f_listen" value="<?php echo $friends2 == "2"?>" disabled>
											<label for="check_22">2</label>
										
									</td>                            
									<td style="width:11.8%;padding-left: 34px">
										
											<input type="checkbox" id="check_23" name="f_read" value="<?php echo $friends3 == "3"?>" disabled>
											<label for="check_23">3</label>
										
									</td>                                                                          
									<td style="width:11.8%;padding-left: 34px">
										
											<input type="checkbox" id="check_24" name="f_write" value="<?php echo $friends4 == "4"?>" disabled>
											<label for="check_24">4</label>
										
									</td>                            
									<td style="width:11.8%;padding-left: 34px">
										
											<input type="checkbox" id="check_25" name="f_nota" value="<?php echo $friends5 == "5"?>" disabled>
											<label for="check_25">5</label>
										
									</td>                                     
								</tr>
								<tr>
									<td height="30">⑰<b>家族</b>with family</td> 
									<td style="width:11.7%;padding-left: 34px">
										
											<input type="checkbox" id="check_31" name="fa_speak" value="<?php echo $family1 == "1"?>" disabled>
											<label for="check_31">1</label>
										
									</td>                            
									<td style="width:11.8%;padding-left: 34px">
										
											<input type="checkbox" id="check_32" name="fa_listen" value="<?php echo $family2 == "2"?>" disabled>
											<label for="check_32">2</label>
										
									</td>                            
									<td style="width:11.8%;padding-left: 34px">
										
											<input type="checkbox" id="check_33" name="fa_read" value="<?php echo $family3 == "3"?>" disabled>
											<label for="check_33">3</label>
										
									</td>                                                                          
									<td style="width:11.8%;padding-left: 34px">
										
											<input type="checkbox" id="check_34" name="fa_write" value="<?php echo $family4 == "4"?>" disabled>
											<label for="check_34">4</label>
										
									</td>                            
									<td style="width:11.8%;padding-left: 34px">
										
											<input type="checkbox" id="check_35" name="fa_nota" value="<?php echo $family5 == "5"?>" disabled>
											
											<label for="check_35">5</label>
										
									</td>                                     
								</tr>
								<tr>
									<td height="30">⑱<b>上司</b>with a supervisor</td> 
									<td style="width:11.7%;padding-left: 34px">
										
											<input type="checkbox" id="check_41" name="sv_speak" value="<?php echo $supervisor1 == "1"?>" disabled>
											<label for="check_41">1</label>
										
									</td>                            
									<td style="width:11.8%;padding-left: 34px">
										
											<input type="checkbox" id="check_42" name="sv_listen" value="<?php echo $supervisor2 == "2"?>" disabled>
											<label for="check_42">2</label>
										
									</td>                            
									<td style="width:11.8%;padding-left: 34px">
										
											<input type="checkbox" id="check_43" name="sv_read" value="<?php echo $supervisor3 == "3"?>" disabled>
											<label for="check_43">3</label>
										
									</td>                                                                          
									<td style="width:11.8%;padding-left: 34px">
										
											<input type="checkbox" id="check_44" name="sv_write" value="<?php echo $supervisor4 == "4"?>" disabled>
											<label for="check_44">4</label>
										
									</td>                            
									<td style="width:11.8%;padding-left: 34px">
										
											<input type="checkbox" id="check_45" name="sv_nota" value="<?php echo $supervisor5 == "5"?>" disabled>
											<label for="check_45">5</label>
										
									</td>                                   
								</tr>
								<tr>
									<td height="30">⑲ <b>同僚</b> with colleagues</td> 
									<td style="width:11.7%;padding-left: 34px">
										
											<input type="checkbox" id="check_51" name="co_speak" value="<?php echo $colleagues1 == "1"?>" disabled>
											<label for="check_51">1</label>
										
									</td>                            
									<td style="width:11.8%;padding-left: 34px">
									
											<input type="checkbox" id="check_52" name="co_listen" value="<?php echo $colleagues2 == "2"?>" disabled>
											<label for="check_52">2</label>
										
									</td>                            
									<td style="width:11.8%;padding-left: 34px">
										
											<input type="checkbox" id="check_53" name="co_read" value="<?php echo $colleagues3 == "3"?>" disabled>
											<label for="check_53">3</label>
									
									</td>                                                                          
									<td style="width:11.8%;padding-left: 34px">
									
											<input type="checkbox" id="check_54" name="co_write" value="<?php echo $colleagues4 == "4"?>" disabled>
											<label for="check_54">4</label>
								
									</td>                            
									<td style="width:11.8%;padding-left: 34px">
									
											<input type="checkbox" id="check_55" name="co_nota" value="<?php echo $colleagues5 == "5"?>" disabled>
											<label for="check_55">5</label>
									
									</td>                                      
								</tr>
								<tr>
									<td height="30">⑳ <b>顧客</b> with customers</td> 
									<td height="10" style="width:11.7%; padding-left: 33px">
								
											<input type="checkbox" id="check_61" name="cu_speak" value="<?php echo $customers1 == "1"?>" disabled>
											<label for="check_61">1</label>
								
									</td>                            
									<td height="10" style="width:11.7%; padding-left: 33px">
									
											<input type="checkbox" id="check_62" name="cu_listen" value="<?php echo $customers2 == "2"?>" disabled>
											<label for="check_62">2</label>
									
									</td>                           
									<td height="10" style="width:11.7%; padding-left: 33px">
									
											<input type="checkbox" id="check_63" name="cu_read" value="<?php echo $customers3 == "3"?>" disabled>
											<label for="check_63">3</label>
									
									</td>                           
									<td height="10" style="width:11.7%; padding-left: 33px">
									
											<input type="checkbox" id="check_64" name="cu_write" value="<?php echo $customers4 == "4"?>" disabled>
											<label for="check_64">4</label>
								
									</td>                           
									<td height="10" style="width:11.7%; padding-left: 33px">
									
											<input type="checkbox" id="check_65" name="cu_nota" value="<?php echo $customers5 == "5"?>" disabled>
								<label for="check_65">5</label>
								
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
										<input name="N1_atmt" value="<?php echo $N1_atmt?>" disabled>
										回 Times
									</td>
									<td style="width:10%;text-align: center">㉒ 
									<input name="N2_atmt" value="<?php echo $N2_atmt?>" disabled>
										回 Times
									</td>
									<td style="width:10%;text-align: center">㉓
									<input name="N3_atmt" value="<?php echo $N3_atmt?>" disabled>
										回 Times
									</td>
									<td style="width:10%;text-align: center">㉔ 
									<input name="N4_atmt" value="<?php echo $N4_atmt?>" disabled>
										回 Times
									</td>
									<td style="width:10%;text-align: center">㉕ 
									<input name="N5_atmt" value="<?php echo $N5_atmt?>" disabled>
										回 Times
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
												<input type="radio" id="check_01" name="N1_p_f" value="<?php echo $N1_p_f == "1"?>" disabled>
												<label for="">1</label>
											</li>
											<li>
												<input type="radio" id="check_04" name="N1_p_f" value="<?php echo $N1_p_f == "2"?>" disabled>
												<label for="">2</label>
												<!-- <input type="checkbox" id="check_04" name="N1_pass_fail"  value="2"> -->
											</li>
										</ul>
									</td>
									<td>合(Pass)</td>
									<td rowspan="0" style="width:5%;text-align: center">㉗
										<ul>
											<li>
												<input type="radio" id="check_03" name="N2_p_f" value="<?php echo $N2_p_f == "1"?>" disabled>
												<label for="">1</label>
											</li>
											<li>
												<input type="radio" id="check_05" name="N2_p_f" value="<?php echo $N2_p_f == "2"?>" disabled>
												<!-- <input type="checkbox" id="check_05" name="N3_pass_fail"  value="1"> -->
												<label for="">2</label>
											</li>
										</ul>
									</td>
									<td>合(Pass)</td>
									<td rowspan="0" style="width:5%;text-align: center">㉘
										<ul>
											<li>
												<input type="radio" id="check_05" name="N3_p_f" value="<?php echo $N3_p_f == "1"?>" disabled>
												<!-- <input type="checkbox" id="check_05" name="N3_pass_fail"  value="1"> -->
												<label for="">1</label>

											</li>
											<li>
												<input type="radio" id="check_06" name="N3_p_f" value="<?php echo $N3_p_f == "2"?>" disabled>
												<!-- <input type="checkbox" id="check_06" name="N3_pass_fail"  value="2"> -->
												<label for="">2</label>

											</li>
										</ul>
									</td>
									<td>合(Pass)</td>
									<td rowspan="0" style="width:5%;text-align: center">㉙
										<ul>
											<li>
												<input type="radio" id="check_07" name="N4_p_f" value="<?php echo $N4_p_f == "1"?>" disabled>
												<label for="">1</label>
												
											</li>
											<li>
												<input type="radio" id="check_08" name="N4_p_f" value="<?php echo $N4_p_f == "2"?>" disabled>
												<!-- <input type="checkbox" id="check_08" name="N4_pass_fail"  value="2"> -->
												<label for="">2</label>

											</li>
										</ul>
									</td>
									<td>合(Pass)</td>
									<td rowspan="0" style="width:5%;text-align: center">㉚
										<ul>
											<li>
												<input type="radio" id="check_71" name="N5_p_f" value="<?php echo $N5_p_f == "1"?>" disabled>
												<!-- <input type="checkbox" id="check_71" name="N5_pass_fail"  value="1"> -->
												<label for="">1</label>

											</li>
											<li>
												<input type="radio" id="check_72" name="N5_p_f" value="<?php echo $N5_p_f == "2"?>" disabled>
												<!-- <input type="checkbox" id="check_72" name="N5_pass_fail"  value="2"> -->
												<label for="">2</label>

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
									<!-- photo -->
									<img src="" alt="">
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
				</form>
			</div>
			
		</section>
	</body>
	<script>
		
	</script>
</html>