
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JALTRA</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.5.0.js" integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/bd0303748e.js" crossorigin="anonymous"></script>

</head>
<body>
    <header id="head">

        <nav class="navbar navbar-expand-md navbar-dark sticky-top">
            <a class="navbar-brand">
                <img src="./img/jaltra-logo.jpeg" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapseThis">
                <i class="navbar-toggler-icon"></i>
            </button>

            <div class="collapse navbar-collapse" id="collapseThis">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="#home" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#about" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="#apply" class="nav-link">Apply</a>
                    </li>
                    <li class="nav-item">
                        <a href="#support" class="nav-link">Support</a>
                    </li>
                </ul>
            </div>


        </nav>
        
        <div id="home">
            <h1>Japanese Language Proficiency Test (JLPT) Online Application for Chennai Center</h1>
            <p>
                The JLPT is held worldwide twice every year to evaluate and certify proficiency in Japanese of non-native speakers
                <br>
                Please register/sign in for applying for JLPT in Chennai.
            </p>
            <!-- <button type="submit" onclick="open()" id="getin">Sign in or Sign up</button> -->
            <h4>Sign in or Sign up</h4>
            <div id="signin">
                <div class="signin">
                    <form action="login.php" method="post">
                        <input type="email" name="email" placeholder="Email" required> <br>
                        <input type="password" name="passwd" id="" placeholder="Password" required> <br>
                        <button type="submit" onclick="otp()">Sign in</button>
                    </form>
                </div>
                <div class="signup">
                    <form action="otp.php" method="post">
                        <input type="email" name="email" placeholder="Email" required> <br> 
                        <button type="submit">Sign up</button>
                    </form>
                </div>
            </div>
            <h3>Registeration ends by ... days</h3>
        </div>
       
    </header>
    <main>
        <!-- <svg class="divide" width="100vw" height="400" viewBox="0 0 100 100"  preserveAspectRatio="none" fill="rgb(234, 8, 90)" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <path d="M 100 600 V 10 L 8 100"/>
            <path d="M 30 78 L 100 18 V 10 Z"  fill="pink" stroke-width="0"/>
        </svg> -->
        <div id="about">
            <div class="jlpt">
                <div>
                    <h3>About Japanese Language Teacher's Association</h3>
                    <h5>The aims and objectives of the Japanese Language Teacher's Association - JALTRA shall be</h5>
                    <ul>
                        <li>To promote Japanese Language and culture in Tamilnadu</li>
                        <li>To conduct seminars, workshops and training programs for Teachers to share the best practises and latest trends in Japanese Language teaching</li>
                        <li>To conduct Japanese Language Proficiency Test (JLPT) and all other Standardized Tests to certify the Japanese Language Proficiency of the students in a fair and effective manner</li>
                        <li>To undertake & execute Japanese Language related projects like Translation, Interpretation etc.</li>
                        <li> To establish a professional code of conduct for the teachers and to ensure that it is followed by members</li>
                        <li>To secure rightful status for its members, individually and collectively — social and professional</li>
                        <li>To promote social and cultural contacts amongst its members and the Japanese Community</li>
                        <li>To invite delegates from Japan to promote the Japanese language and culture</li>
                        <li>To establish contact with other organisations with similar aims and objects and undertake and organise such activities as may be deemed necessary and proper for the attainment of the aforesaid aims and objects</li>
                    </ul>
                </div>
            </div>
            <div class="jaltra">
                <div>
                    <h3>About Japanese Language Proficiency Test</h3>
                    <p>The Japanese-Language Proficiency Test (日本語能力試験 Nihongo Nōryoku Shiken), or JLPT, is a standardized 
                        criterion-referenced test to evaluate and certify Japanese language proficiency for non-native speakers, 
                        The Japanese-Language Proficiency Test (JLPT) has been offered by the Japan Foundation and Japan Educational Exchanges 
                        and Services (formerly Association of International Education, Japan) since 1984 as a reliable means of evaluating and certifying 
                        the Japanese proficiency of non-native speakers and evolved to include employment screening and evaluation for 
                        promotions and pay raises as well as use as a form of qualification.</p>
    
                    <p>The test, consisting of 5 levels (N5 to N1 is ascending order), covers language knowledge, reading ability, and listening ability. 
                        The test is held twice a year in Japan and selected countries (on the first Sunday of July and December), and once a year in other 
                        regions (on either the first Sunday of July or December). 
                        The JLPT certificates do not expire or become invalid over time.</p>
                </div>
            </div>
        </div>
        
        <div class="process" id="apply">
            <h3>Application Process</h3>
            <div class="row">
                <span class="col">
                    <a href="form.html">
                        <i class="fab fa-wpforms fa-6x fa-fw"></i>
                        <h6>Fill the form</h6>
                    </a>
                </span>
                <span class="col">
                    <a href="pay.html">
                        <i class="fas fa-credit-card fa-6x fa-fw"></i>
                        <h6>Pay the fee</h6>
                    </a>
                </span>
                <span class="col">
                    <a href="halltkt.html">
                        <i class="fas fa-envelope-open-text fa-6x fa-fw"></i>
                        <h6>Get the hall ticket</h6>
                    </a> 
                </span>
            </div>
        </div>
    </main>

    <footer class="footer" id="support">
        <div id="contact">
            <h3>Contact Us</h3>
            <h4>Japanese Language Teacher's Association (JALTRA)</h4>
            <div class="row">
                <div class="col">
                    <h5>Address</h5>
                    <p>3rd Floor, Chateau D Ampa,<br>
                        New No. 37 Old No. 110 <br>
                        Nelson Manickam Road,<br>
                        Amjikarai, Chennai - 600029, India.</p>
                </div>
            
                <div class="col">
                    <h5>Phone</h5>
                    <p>044-2374 3575 / 0318</p>
                </div>
                <div class="col">
                    <h5>E-mail</h5>
                    <p>jlptchennaiind@gmail.com <br>
                        rangaots@gmail.com <br>
                        abkaots@gmail.com</p>
                </div>
            </div>
            
        </div>
    </footer>
</body>
<script>
    function signup() {
        document.getElementById("signin").className = "sign-container";
        // document.getElementById("signin").style.display = "inline";
        $("#getin").hide();
    }
</script>
</html>