<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="form.css">
	<script src="https://kit.fontawesome.com/bd0303748e.js" crossorigin="anonymous"></script>
    <title>Application form</title>
</head>
<body>
    <div class="container"> 
        <!-- header -->
        <div class="jumbotron">
            <div class="row">
                <h2>2020年 第2回 日 本語能力試験 The Japanese-Language Proficiency Test in 2020（December）</h2>
            </div>
            <div class="row">
                <div class="col"> 
                    <h3>受 験 願 書 <br> Application Form</h3>
                </div>
            </div>
            <div class="row">
                <div class="col"> 
                    <h3>（基金返送用) <br> For the Japan Foundation</h3>
                </div>
                <div class="col">
                    <h3>
                        <input type="checkbox" name="special_accomodation" id="" class="checked">
                        受験上の配慮を希望 <br> Request Special Testing Accommodations
                    </h3>
                </div>
            </div>
        </div>
        <h3 class="text-info">For Special Testing Accommodation please email/call Test Administration Committee and inform beforehand</h3>
        <h5 class="text-primary">受験案内2ページにある「受験願書 記入例」を参考に、太枠内のみ正しく記入してください。Fill in the information required in the boxed areas as shown in the "Application Form Example" on the <a href="">Test Guide.</a></h5>
        <form action="apply.php" method="post">
            <!-- Table 1 -->
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">受験レベル <br> Test Level</th>
                        <th scope="col">受験地 <br> Test site</th>
                        <th scope="col">受験番号 <br> Examinee Registration Number</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>N <select name="level">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </td>
                        <td>Chennai</td>
                        <td><input type="hidden" name="reg_no" value="20A">(Automatic Generation)</td>
                    </tr>
                </tbody>
            </table>
            <label for="name">名前 Name</label>
            <input type="text" name="name" placeholder="Full name" class="form-control">
            <small>注：<b>英字26文字（活字体の大文字）のみ</b>を使ってください。名前はこの欄に書かれた通りに試験結果通知書等に記載されます。<br> Note : Print your name <b>only in 26 English capital letters.</b> Your name will be printed on the certificates as you write. </small>
            <!-- Table 2 -->
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">性別 <br> Gender</th>
                        <th scope="col">生年月日 <br> Date of birth</th>
                        <th scope="col">オンライン結果通知用暗証番号（8桁の数字のみ名前) <br> 8-digit passcode (numbers only) <br> for Online Test Results Announcement</th>
                        <th scope="col">母語 <br> Native Language</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <input type="radio" name="gender" value="Female"> Female
                            <input type="radio" name="gender" value="Male"> Male
                        </td>
                        <td>
                            <div id="dob" onchange = "validate()">
                                <select class="year" name="date_[year]">
                                    <option value="">Year</option>
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
                        </td>
                        <td>
                            <input type="text" maxlength="8" name="pscode" value="" class="form-control" placeholder="8 digit passcode">    
                        </td>
                        <td>
                            <select  name="lang" type="text" class="form-control" ?="">
                                <option value="">Select</option>
                                <option value="101 Assamese">Assamese</option> <!-- 101 -->
                                <option value="102 Baluchi">Baluchi</option> <!-- 102 -->
                                <option value="103 Bengali">Bengali</option> <!-- 103 -->
                                <option value="104 Bihari">Bihari</option> <!-- 104 -->
                                <option value="106 Cebuano">Cebuano</option> <!-- 106 -->
                                <option value="107 Chinese">Chinese</option> <!-- 107 -->
                                <option value="143 Dhivehi">Dhivehi</option> <!-- 143 -->
                                <option value="144 Dzongkha">Dzongkha</option> <!-- 144 -->
                                <option value="408 English">English</option> <!-- 408 -->
                                <option value="411 French">French</option> <!-- 411 -->
                                <option value="108 Gujarati">Gujarati</option> <!-- 108 -->
                                <option value="109 Hindi">Hindi</option> <!-- 109 -->
                                <option value="110 Ilocano">Ilocano</option> <!-- 110 -->  
                                <option value="111 Indonesian">Indonesian</option> <!-- 111 -->
                                <option value="112 Japanese">Japanese</option> <!-- 112 -->
                                <option value="113 Javanese">Javanese</option> <!-- 113 -->
                                <option value="114 Kannada Kanarese">Kannada（Kanarese）</option> <!-- 114 --> 
                                <option value="115 Kashmiri">Kashmiri</option> <!-- 115 --> 
                                <option value="118 Khmer Kampuchean">Khmer（Kampuchean）</option> <!-- 118 -->
                                <option value="119 Korean">Korean</option> <!-- 119 --> 
                                <option value="120 Kurdish">Kurdish</option> <!-- 120 -->
                                <option value="121 Lao">Lao</option> <!-- 121 -->
                                <option value="122 Malay">Malay</option> <!-- 122 -->
                                <option value="123 Malayalam">Malayalam</option> <!-- 123 -->
                                <option value="124 Marathi">Marathi</option> <!-- 124 -->
                                <option value="125 Manipuri Meeteilol">Manipuri（Meeteilol）</option> <!-- 125 -->
                                <option value="117 Mongolian">Mongolian</option> <!-- 117 -->
                                <option value="105 Myanmar">Myanmar</option> <!-- 105 -->
                                <option value="126 Nepali">Nepali</option> <!-- 126 -->
                                <option value="127 Oriya">Oriya</option> <!-- 127 -->
                                <option value="128 Pilipino">Pilipino</option> <!-- 128 -->
                                <option value="129 Punjabi">Punjabi</option> <!-- 129 -->
                                <option value="130 Pushtu">Pushtu</option> <!-- 130 -->
                                <option value="131 Rajasthani">Rajasthani</option> <!-- 131 -->
                                <option value="132 Sindhi">Sindhi</option>  <!-- 132 -->
                                <option value="133 Sinhalese">Sinhalese</option> <!-- 133 -->
                                <option value="134 Sundanese">Sundanese</option> <!-- 134 -->
                                <option value="135 Tamil">Tamil</option> <!-- 135 -->
                                <option value="136 Tatar">Tatar</option> <!-- 136 -->
                                <option value="137 Telugu">Telugu</option> <!-- 137 -->
                                <option value="138 Thai">Thai</option> <!-- 138 -->
                                <option value="139 Tibetan">Tibetan</option>  <!-- 139 -->
                                <option value="140 Uighur">Uighur</option> <!-- 140 -->
                                <option value="141 Urdu">Urdu</option> <!-- 141 -->
                                <option value="142 Vietnamese">Vietnamese</option> <!-- 142 -->
							</select>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- Table 3 -->
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col" colspan="4">住所 <br> Address</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <label for="street">番地 Street/Suburb</label>
                            <input type="text" name="street" id="" class="form-control" placeholder="Stree or Suburb">
                        </td>
                        <td>
                            <label for="city">市・州 City/State</label>
                            <input type="text" name="city_state" placeholder="City or State" class="form-control">
                        </td>
                        <td>
                            <label for="country">国・地域 Country/Area</label>
                            <input type="text" name="country" placeholder="Country or Area" class="form-control">
                        </td>
                        <td>
                            <label for="pincode">郵便番号 Postal Code</label>
                            <input type="text" placeholder="Postal Code" name="pin_code" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <label for="telephone">電話番号 Telephone No. </label>
                            <input type="tel" name="tele_no" id="" class="form-group" placeholder="Telephone number">
                        </td>
                        <td colspan="2">
                            <label for="email">電子メール E-mail </label>
                            <input type="email" name="email" id="" class="form-group" placeholder="E-mail">
                        </td>
                    </tr>
                </tbody>
            </table>
            <label for="instutionName">日本語学習機関名 Institution where you are studying（or studied）Japanese-Language</label>
            <input type="text" name="inst_name" id="" class="form-control" placeholder="Institution name">
            <!-- Table 4 -->
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">日本語学習の場 （１～６から１つ選ぶ <br> Place of learning Japanese（ Choose a number from 1 to 6）</th>
                        <th scope="col">受験目的 （１～８から１つ選ぶ）<br> Reason for taking this exam（Choose a number from 1 to 8）</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="td">
                            <ol>
                                <li><input type="radio" name="place" id="" value=""> Learning Japanese at elementary school（primary education）</li>
                                <li><input type="radio" name="place" id="" value=""> Learning Japanese at middle school or high school（secondary education）</li>
                                <li><input type="radio" name="place" id="" value=""> Majoring in Japanese at university or graduate school（higher education）</li>
                                <li><input type="radio" name="place" id="" value=""> Learning but not majoring in Japanese at university or graduate school（higher education）</li>
                                <li><input type="radio" name="place" id="" value=""> Learning Japanese at some other educational institution（such as foreign language schools）</li>
                                <li><input type="radio" name="place" id="" value=""> Not learning Japanese at the educational institutions listed in 1 through 5 above</li>
                            </ol>
                        </td>
                        <td class="td">
                            <ol>
                                <li><input type="radio" name="reason" id="" value=""> Necessary for admission into university or graduate school in own country</li>
                                <li><input type="radio" name="reason" id="" value=""> Necessary for admission into university or graduate school in Japan</li>
                                <li><input type="radio" name="reason" id="" value=""> Necessary for admission or as proof of proficiency for other educational institution in own country</li>
                                <li><input type="radio" name="reason" id="" value=""> Necessary for admission or as proof of proficiency for other educational institution in Japan</li>
                                <li><input type="radio" name="reason" id="" value=""> Useful for work or will be useful in order to attain employment, secure salary increase or promotion in own country</li>
                                <li><input type="radio" name="reason" id="" value=""> Useful for work or will be useful in order to attain employment, secure salary increase or promotion in Japan</li>
                                <li><input type="radio" name="reason" id="" value=""> To measure my own level of proficiency for reasons other than 1 through 6 above</li>
                            </ol>            
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- Table 5 -->
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">職業 １～６から１つ選ぶ）<br> Occupation（ Choose a number from 1 to 6）</th>
                        <th scope="col">職業の種類 （１～６から１つ選ぶ）<br> Occupational details（ Choose a number from 1 to 6)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="td">
                            <ol>
                                <li><input type="radio" name="occu" id=""> Elementary school student（primary education）</li>
                                <li><input type="radio" name="occu" id=""> University or graduate school student（higher education）</li>
                                <li><input type="radio" name="occu" id=""> Student of some other educational institution（such as foreign language school）</li>
                                <li><input type="radio" name="occu" id=""> Employed（company employee, public servant, educator, self-employed, etc.）</li>
                                <li><input type="radio" name="occu" id=""> Other</li>
                            </ol>
                        </td>
                        <td class="td">
                            <ol>
                                <li><input type="radio" name="occu_details" id=""> Using Japanese while working as a Japanese-language teacher at an educational institution</li>
                                <li><input type="radio" name="occu_details" id=""> Using Japanese while working as a public servant</li>
                                <li><input type="radio" name="occu_details" id=""> Using Japanese while working as a company employee, such as in the manufacturing, building, or information and communication industries</li>
                                <li><input type="radio" name="occu_details" id=""> Using Japanese while working as an employee in the service, tourism, or hospitality industries</li>
                                <li><input type="radio" name="occu_details" id=""> Using Japanese at a job other than 1 through 4 above</li>
                                <li><input type="radio" name="occu_details" id=""> Do not use Japanese while working</li>
                            </ol>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- Table 6 -->
            <table class="table">
                <thead class="thead-light" colspan="2">
                    <tr>
                        <th scope="col">日本語との接触媒体 <br> Media via which you come into contact with Japanese language</th>
                        <th scope="col">日本語を使用する相手 <br> The person with whom you usually communicate in Japanese</th>                        
                    </tr>
                </thead>
                <tbody colspan="2">
                    <tr>
                        <td class="td">
                            <ol>
                                <li><input type="checkbox" name="media_1" id=""> TV news program and documentaries</li>
                                <li><input type="checkbox" name="media_2" id=""> Drama（excluding animation）</li>
                                <li><input type="checkbox" name="media_3" id=""> Animation</li>
                                <li><input type="checkbox" name="media_4" id=""> Newspapers and magazines（excluding manga）</li>
                                <li><input type="checkbox" name="media_5" id=""> Books（excluding textbooks）</li>
                                <li><input type="checkbox" name="media_6" id=""> Articles on websites</li>
                                <li><input type="checkbox" name="media_7" id=""> Manga</li>
                                <li><input type="checkbox" name="media_8" id=""> Other</li>
                                <li><input type="checkbox" name="media_9" id=""> Did not come into contact with the Japanese language outside of class</li>                                
                            </ol>
                        </td>
                        <td>
                            <!-- Inner table -->
                            <table>
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col">はなす <br> Speaking</th>
                                        <th scope="col">きく <br> Listening</th>
                                        <th scope="col">よむ <br> Reading</th>
                                        <th scope="col">かく <br> Writing</th>
                                        <th scope="col">あてはまらない <br> None of the above</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">先生 <br> with a teacher</th>
                                        <td><input type="checkbox" id="check_10" name="t_speak" value="Speaking"></td>
                                        <td><input type="checkbox" id="check_10" name="t_listen" value="Listen"></td>
                                        <td><input type="checkbox" id="check_10" name="t_read" value="Reading"></td>
                                        <td><input type="checkbox" id="check_10" name="t_write" value="Writing"></td>
                                        <td><input type="checkbox" id="check_10" name="t_nota" value="NOTA"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">友人 <br> with friends</th>
                                        <td><input type="checkbox" id="check_10" name="f_speak" value="Speaking"></td>
                                        <td><input type="checkbox" id="check_10" name="f_listen" value="Listen"></td>
                                        <td><input type="checkbox" id="check_10" name="f_read" value="Reading"></td>
                                        <td><input type="checkbox" id="check_10" name="f_write" value="Writing"></td>
                                        <td><input type="checkbox" id="check_10" name="f_nota" value="NOTA"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">家族 <br> with family</th>
                                        <td><input type="checkbox" id="check_10" name="fa_speak" value="Speaking"></td>
                                        <td><input type="checkbox" id="check_10" name="fa_listen" value="Listen"></td>
                                        <td><input type="checkbox" id="check_10" name="fa_read" value="Reading"></td>
                                        <td><input type="checkbox" id="check_10" name="fa_write" value="Writing"></td>
                                        <td><input type="checkbox" id="check_10" name="fa_nota" value="NOTA"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">上司 <br> with a supervisor</th>
                                        <td><input type="checkbox" id="check_10" name="sv_speak" value="Speaking"></td>
                                        <td><input type="checkbox" id="check_10" name="sv_listen" value="Listen"></td>
                                        <td><input type="checkbox" id="check_10" name="sv_read" value="Reading"></td>
                                        <td><input type="checkbox" id="check_10" name="sv_write" value="Writing"></td>
                                        <td><input type="checkbox" id="check_10" name="sv_nota" value="NOTA"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">同僚 <br> with colleagues</th>
                                        <td><input type="checkbox" id="check_10" name="co_speak" value="Speaking"></td>
                                        <td><input type="checkbox" id="check_10" name="co_listen" value="Listen"></td>
                                        <td><input type="checkbox" id="check_10" name="co_read" value="Reading"></td>
                                        <td><input type="checkbox" id="check_10" name="co_write" value="Writing"></td>
                                        <td><input type="checkbox" id="check_10" name="co_nota" value="NOTA"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">顧客 <br> with customers</th>
                                        <td><input type="checkbox" id="check_10" name="cu_speak" value="Speaking"></td>
                                        <td><input type="checkbox" id="check_10" name="cu_listen" value="Listen"></td>
                                        <td><input type="checkbox" id="check_10" name="cu_read" value="Reading"></td>
                                        <td><input type="checkbox" id="check_10" name="cu_write" value="Writing"></td>
                                        <td><input type="checkbox" id="check_10" name="cu_nota" value="NOTA"></td>
                                    </tr> 
                                </tbody>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>       
            <!-- Table 7 -->
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">N1／旧1級 <br> ex Level 1</th>
                        <th scope="col">N2／旧2級 <br> ex Level 2</th>
                        <th scope="col">N3／旧3級 <br> ex Level 3</th>
                        <th scope="col">N4／旧4級 <br> ex Level 4</th>
                        <th scope="col">N5／旧5級 <br> ex Level 5</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">過去受験回数 <br> Times of taking JLPT</th>
                        <td>
                            <select name="N1_atmt" id="">
                                <option value="">0</option>
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                                <option value="">4</option>
                                <option value="">5</option>
                                <option value="">6</option>
                                <option value="">7</option>
                                <option value="">8</option>
                                <option value="">9</option>
                            </select>
                        </td>
                        <td>
                            <select name="N2_atmt" id="">
                                <option value="">0</option>
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                                <option value="">4</option>
                                <option value="">5</option>
                                <option value="">6</option>
                                <option value="">7</option>
                                <option value="">8</option>
                                <option value="">9</option>
                            </select>
                        </td>
                        <td>
                            <select name="N3_atmt" id="">
                                <option value="">0</option>
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                                <option value="">4</option>
                                <option value="">5</option>
                                <option value="">6</option>
                                <option value="">7</option>
                                <option value="">8</option>
                                <option value="">9</option>
                            </select>
                        </td>
                        <td>
                            <select name="N4_atmt" id="">
                                <option value="">0</option>
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                                <option value="">4</option>
                                <option value="">5</option>
                                <option value="">6</option>
                                <option value="">7</option>
                                <option value="">8</option>
                                <option value="">9</option>
                            </select>
                        </td>
                        <td>
                            <select name="N5_atmt" id="">
                                <option value="">0</option>
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                                <option value="">4</option>
                                <option value="">5</option>
                                <option value="">6</option>
                                <option value="">7</option>
                                <option value="">8</option>
                                <option value="">9</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">最終の合否 <br> Pass/Fail of the last time at each level</th>
                        <td>
                            <input type="radio" name="N1_p_f" id="" value="Pass"> Pass
                            <input type="radio" name="N1_p_f" id="" value="Fail"> Fail
                        </td>
                        <td>
                            <input type="radio" name="N2_p_f" id="" value="Pass"> Pass
                            <input type="radio" name="N2_p_f" id="" value="Fail"> Fail
                        </td>
                        <td>
                            <input type="radio" name="N3_p_f" id="" value="Pass"> Pass
                            <input type="radio" name="N3_p_f" id="" value="Fail"> Fail
                        </td
                        ><td>
                            <input type="radio" name="N4_p_f" id="" value="Pass"> Pass
                            <input type="radio" name="N4_p_f" id="" value="Fail"> Fail
                        </td>
                        <td>
                            <input type="radio" name="N5_p_f" id="" value="Pass"> Pass
                            <input type="radio" name="N5_p_f" id="" value="Fail"> Fail
                        </td>
                    </tr>
                </tbody>
            </table>
            <label for="photo">写真 <br> Photo Upload(Dimension should be 3.5 cm (width) × 4.5 cm (height) only).</label>
            <input type="file" name="photo" accept="image/*" class="form-control">
            <h4>この受験案内に書いてあるすべてのことを理解し、同意した上で受験を申し込みます。<br> I, by submitting this form, understand and agree to all the conditions and contents of the Test Guide.</h4>
            <button class="btn btn-dark btn-lg">Save</button>
        </form>
    </div>
</body>
</html>