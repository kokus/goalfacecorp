<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome to GoalFace</title>
<link href="css/goal_face.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="goal_face.ico" type="image/x-icon" />
<script src="scripts/jquery-1.3.2.min.js" type="text/javascript"></script>
<script src="scripts/validate.js" type="text/javascript"></script>
<script src="scripts/common.js" type="text/javascript" ></script>
 <script type="text/javascript">
      
	  $(document).ready(function() {

		$("#email").keyup(function(){
		
			var email = $("#email").val();
		
			if(email != 0)
			{
				if(isValidEmailAddress(email))
				{
					$("#validEmail").css({
						"background-image": "url('images/validyes.png')"
					});
				} else {
					$("#validEmail").css({
						"background-image": "url('images/validno.png')"
					});
				}
			} else {
				$("#validEmail").css({
					"background-image": "none"
				});			
			}
		
		});
	
	});


	  
	  function isValidEmailAddress(emailAddress) {
 		var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
 		return pattern.test(emailAddress);
	}

	  
	  
  function registerUser(){

		var nm = document.getElementById('ErrorMessages');
		if(nm.className == 'ErrorMessagesDisplay'){
        	nm.className = 'ErrorMessages';
		}
      
		valid = validaNewForm('cform'); 
      
		if(!valid){
			return;
		}
      
		document.regform.action="registerForm.php"
		document.regform.submit();
      }

</script>
</head>

<body id="home">
<!-- main wrapper start here -->
<div class="main_wrapper">
    <?php include "header.php";?>
    
    <!-- main body content wrapper start here -->
    <div class="main_body_content_wrapper">
		<!-- main body left wrapper start here -->
        <div class="main_body_left_part">
    			<h3>GoalFace is a place for the global football community to connect and celebrate their passion for the beautiful game.</h3>
          <h5><a href="http://www.goalface.com/user/register" target="_blank">Join today and follow the players, teams and leagues you care about most!</a></h5>
    			<div class="goal_face_services">
                	With GoalFace you can:
                    <ul>
                    	<li>Access 100,000+ profiles for professional players and teams across Europe, the Americas, Africa and Asia.</li>
                        <li>Customize the site and subscribe to team, player and match updates from your favorite professional leagues and tournaments around the world.</li>
                        <li>Create a personal profile and connect with friends and fans that share your  passion for the game.</li>
                    </ul>
            </div>
            
            <p style="margin-top: 15px;"><strong>You may well be GoalFace material If&ndash;</strong></p>
          
            <ul>
                <li>Your first waking thought is about "the big match."</li>
                <li>You know every year your team won the league championship.</li>
                <li>You often find yourself humming your team’s anthem.</li>
                <li>The first place you go when you log on to the Internet  is football news and scores.</li>
                <li>You’ve ever taken a half day or called in “sick” to watch your favorite team play.</li>                  
            </ul>

          <div style="width: 805px;" class="joining_today_line"><strong>GoalFace is fun, easy-to-use and 100% football. What are you waiting for? <a title="Join today" href="http://www.goalface.com/user/register" target="_blank">Register and join the fun today</a>! </strong>
                	</div>
        	</div>
        <!-- main body left wrapper end here -->
        
        <!-- main body right wrapper start here -->
        <div class="main_body_right_part">
        	<div class="homepage_quick_tour_button"><a title="Quick Tour" href="tour.php">
          <img alt="GoalFace Quick Tour" src="images/quick_tour_button.jpg"></a></div>
                   <div class="register_form_wrapper">
            	<div class="register_form_top_bottom"><img alt="" src="images/register_form_top.jpg"></div>
                <div class="register_form_middle">
                	<h5 style="color: rgb(83, 71, 65); font-size: 14px;">Pre-register for GoalFace today!</h5>
                    	<div style="width: 220px; margin-left: 5px;" class="ErrorMessages" id="ErrorMessages">                   		
                        <div style="font-size: 10px;" id="MainErrorMessage">All Fields marked with (*) are required.</div>
                    </div>
                  <form method="post" name="regform" id="cform">
                    <div class="register_input_main_row">
                    	<div class="register_input_title"><em>*</em>Email:</div>
                    	<div class="register_input_row">                   	
                        <input type="text" required="email" name="email" id="email">
                        <div class="ErrorMessageIndividual" id="emailerror">
                          <span style="font-size: 9px; padding-left: 0px;">You must enter an Email Address</span>
                        </div>
                        <!-- <span id="validEmail"></span>-->
                      </div>                    
                    </div>

                    <div class="register_input_main_row">
                    	<div class="register_input_title">Name:</div>
                    	<div class="register_input_row"><input type="text" name="name"></div>                    
                    </div>

                    <div class="register_input_main_row">
                    	<div class="register_input_title">Date of Birth:</div>
                    	<div class="register_input_row">
                      <select style="width: 62px;" name="birth_month" id="birth_month">
						            <option value="" selected="selected">Month:</option>
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

                      <select style="width: 47px;" id="birth_day" name="birth_day">										
                          <option value="" selected="selected">Day:</option> 					                    
                          <option value="01">01 </option>					                    
                          <option value="02">02</option> 					                    
                          <option value="03">03</option> 					                    
                          <option value="04">04</option>		                    
                          <option value="05">05</option> 					                    
                          <option value="06">06</option> 					                    
                          <option value="07">07</option> 					                    
                          <option value="08">08</option> 					                    
                          <option value="09">09</option> 					                    
                          <option value="10">10</option> 					                    
                          <option value="11">11</option> 					                    
                          <option value="12">12</option> 					                    
                          <option value="13">13</option> 					                    
                          <option value="14">14</option> 					                    
                          <option value="15">15</option> 					                    
                          <option value="16">16</option> 					                    
                          <option value="17">17</option> 					                    
                          <option value="18">18</option> 					                    
                          <option value="19">19</option> 					                    
                          <option value="20">20</option> 					                    
                          <option value="21">21</option> 					                    
                          <option value="22">22</option> 					                    
                          <option value="23">23</option> 					                    
                          <option value="24">24</option> 					                    
                          <option value="25">25</option> 					                    
                          <option value="26">26</option> 					                    
                          <option value="27">27</option> 					                    
                          <option value="28">28</option> 					                    
                          <option value="29">29</option> 					                    
                          <option value="30">30</option> 					                    
                          <option value="31">31</option>								
                        </select>

                      <select style="width: 52px;" id="birth_year" name="birth_year">                    
                          <option value="" selected="selected">Year:</option>                                      
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
                          <option value="1969">1969</option>                                       
                          <option value="1968">1968</option>                                       
                          <option value="1967">1967</option>                                       
                          <option value="1966">1966</option>                                       
                          <option value="1965">1965</option>                                       
                          <option value="1964">1964</option>                                       
                          <option value="1963">1963</option>                                       
                          <option value="1962">1962</option>                                       
                          <option value="1961">1961</option>                                       
                          <option value="1960">1960</option>                                       
                          <option value="1959">1959</option>                                       
                          <option value="1958">1958</option>                                       
                          <option value="1957">1957</option>                                       
                          <option value="1956">1956</option>                                       
                          <option value="1955">1955</option>                                       
                          <option value="1954">1954</option>                                       
                          <option value="1953">1953</option>                                       
                          <option value="1952">1952</option>                                       
                          <option value="1951">1951</option>                                       
                          <option value="1950">1950</option>                                       
                          <option value="1949">1949</option>                                       
                          <option value="1948">1948</option>                                       
                          <option value="1947">1947</option>                                       
                          <option value="1946">1946</option>                                       
                          <option value="1945">1945</option>                                       
                          <option value="1944">1944</option>                                       
                          <option value="1943">1943</option>                                       
                          <option value="1942">1942</option>                                       
                          <option value="1941">1941</option>                                       
                          <option value="1940">1940</option>                                       
                          <option value="1939">1939</option>                                       
                          <option value="1938">1938</option>                                       
                          <option value="1937">1937</option>                                       
                          <option value="1936">1936</option>                                       
                          <option value="1935">1935</option>                                       
                          <option value="1934">1934</option>                                       
                          <option value="1933">1933</option>                                       
                          <option value="1932">1932</option>                                       
                          <option value="1931">1931</option>                                       
                          <option value="1930">1930</option>                                       
                          <option value="1929">1929</option>                                       
                          <option value="1928">1928</option>                                       
                          <option value="1927">1927</option>                                       
                          <option value="1926">1926</option>                                       
                          <option value="1925">1925</option>                                       
                          <option value="1924">1924</option>                                       
                          <option value="1923">1923</option>                                       
                          <option value="1922">1922</option>                                       
                          <option value="1921">1921</option>                                       
                          <option value="1920">1920</option>                                       
                          <option value="1919">1919</option>                                       
                          <option value="1918">1918</option>                                       
                          <option value="1917">1917</option>                                       
                          <option value="1916">1916</option>                                       
                          <option value="1915">1915</option>                                       
                          <option value="1914">1914</option>                                       
                          <option value="1913">1913</option>                                       
                          <option value="1912">1912</option>                                       
                          <option value="1911">1911</option>                                       
                          <option value="1910">1910</option>                                       
                          <option value="1909">1909</option>                                       
                          <option value="1908">1908</option>                                     
                        </select>						
                      </div>                    
                    </div>

                    <div class="register_input_main_row">
                    	<div class="register_input_title">Country:</div>
                    	<div class="register_input_row">
                      	<select style="width: 168px;" name="country" id="country">
                          	<option value="" selected="selected">Select Country:</option>
                            <option value="8">  Afghanistan</option>
                            <option value="9">  Albania</option>
            
                            <option value="10">  Algeria</option>
                            <option value="11">  American Samoa</option>
                            <option value="12">  Andorra</option>
                            <option value="13">  Angola</option>
                            <option value="14">  Anguilla</option>
            
                            <option value="15">  Antigua and Barbuda</option>
                            <option value="16">  Argentina</option>
                            <option value="17">  Armenia</option>
                            <option value="18">  Aruba</option>
                            <option value="19">  Australia</option>
            
                            <option value="20">  Austria</option>
                            <option value="21">  Azerbaijan</option>
                            <option value="22">  Bahamas</option>
                            <option value="23">  Bahrain</option>
                            <option value="24">  Bangladesh</option>
            
                            <option value="25">  Barbados</option>
                            <option value="26">  Belarus</option>
                            <option value="27">  Belgium</option>
                            <option value="28">  Belize</option>
                            <option value="29">  Benin</option>
            
                            <option value="30">  Bermuda</option>
                            <option value="31">  Bhutan</option>
                            <option value="32">  Bolivia</option>
                            <option value="33">  Bosnia-Herzegovina</option>
                            <option value="34">  Botswana</option>
            
                            <option value="35">  Brazil</option>
                            <option value="36">  British Virgin Islands</option>
                            <option value="37">  Brunei Darussalam</option>
                            <option value="38">  Bulgaria</option>
                            <option value="39">  Burkina Faso</option>
            
                            <option value="40">  Burundi</option>
                            <option value="41">  Cambodia</option>
                            <option value="42">  Cameroon</option>
                            <option value="43">  Canada</option>
                            <option value="44">  Cape Verde Islands</option>
            
                            <option value="45">  Cayman Islands</option>
                            <option value="46">  Central African Republic</option>
                            <option value="47">  Chad</option>
                            <option value="48">  Chile</option>
                            <option value="49">  China PR</option>
            
                            <option value="50">  Chinese Taipei</option>
                            <option value="51">  Colombia</option>
                            <option value="52">  Congo</option>
                            <option value="53">  Congo DR</option>
                            <option value="54">  Cook Islands</option>
            
                            <option value="55">  Costa Rica</option>
                            <option value="56">  Croatia</option>
                            <option value="57">  Cuba</option>
                            <option value="58">  Cyprus</option>
                            <option value="59">  Czech Republic</option>
            
                            <option value="61">  Denmark</option>
                            <option value="62">  Djibouti</option>
                            <option value="63">  Dominica</option>
                            <option value="64">  Dominican Republic</option>
                            <option value="65">  Ecuador</option>
            
                            <option value="66">  Egypt</option>
                            <option value="67">  El Salvador</option>
                            <option value="68">  England</option>
                            <option value="69">  Equatorial Guinea</option>
                            <option value="70">  Eritrea</option>
            
                            <option value="71">  Estonia</option>
                            <option value="72">  Ethiopia</option>
                            <option value="73">  Faroe Islands</option>
                            <option value="74">  Fiji</option>
                            <option value="75">  Finland</option>
            
                            <option value="76">  France</option>
                            <option value="77">  Gabon</option>
                            <option value="78">  Gambia</option>
                            <option value="79">  Georgia</option>
                            <option value="80">  Germany</option>
            
                            <option value="81">  Ghana</option>
                            <option value="82">  Greece</option>
                            <option value="83">  Grenada</option>
                            <option value="84">  Guam</option>
                            <option value="85">  Guatemala</option>
            
                            <option value="86">  Guinea</option>
                            <option value="87">  Guinea-Bissau</option>
                            <option value="88">  Guyana</option>
                            <option value="89">  Haiti</option>
                            <option value="90">  Honduras</option>
            
                            <option value="91">  Hong Kong</option>
                            <option value="92">  Hungary</option>
                            <option value="93">  Iceland</option>
                            <option value="94">  India</option>
                            <option value="95">  Indonesia</option>
            
                            <option value="96">  Iran</option>
                            <option value="97">  Iraq</option>
                            <option value="99">  Israel</option>
                            <option value="100">  Italy</option>
                            <option value="60">  Ivory Coast</option>
            
                            <option value="101">  Jamaica</option>
                            <option value="102">  Japan</option>
                            <option value="103">  Jordan</option>
                            <option value="104">  Kazakhstan</option>
                            <option value="105">  Kenya</option>
            
                            <option value="106">  Korea DPR</option>
                            <option value="107">  Korea Republic</option>
                            <option value="108">  Kuwait</option>
                            <option value="109">  Kyrgyzstan</option>
                            <option value="110">  Laos</option>
            
                            <option value="111">  Latvia</option>
                            <option value="112">  Lebanon</option>
                            <option value="113">  Lesotho</option>
                            <option value="114">  Liberia</option>
                            <option value="115">  Libya</option>
            
                            <option value="116">  Liechtenstein</option>
                            <option value="117">  Lithuania</option>
                            <option value="118">  Luxembourg</option>
                            <option value="119">  Macao</option>
                            <option value="120">  Macedonia FYR</option>
            
                            <option value="121">  Madagascar</option>
                            <option value="122">  Malawi</option>
                            <option value="123">  Malaysia</option>
                            <option value="124">  Maldives</option>
                            <option value="125">  Mali</option>
            
                            <option value="126">  Malta</option>
                            <option value="127">  Mauritania</option>
                            <option value="128">  Mauritius</option>
                            <option value="129">  Mexico</option>
                            <option value="130">  Moldova</option>
            
                            <option value="131">  Mongolia</option>
                            <option value="225">  Montenegro</option>
                            <option value="132">  Montserrat</option>
                            <option value="133">  Morocco</option>
                            <option value="134">  Mozambique</option>
            
                            <option value="135">  Myanmar</option>
                            <option value="136">  Namibia</option>
                            <option value="137">  Nepal</option>
                            <option value="138">  Netherlands</option>
                            <option value="139">  Netherlands Antilles</option>
            
                            <option value="141">  New Zealand</option>
                            <option value="142">  Nicaragua</option>
                            <option value="143">  Niger</option>
                            <option value="144">  Nigeria</option>
                            <option value="145">  Northern Ireland</option>
            
                            <option value="146">  Norway</option>
                            <option value="147">  Oman</option>
                            <option value="148">  Pakistan</option>
                            <option value="149">  Palestine</option>
                            <option value="150">  Panama</option>
            
                            <option value="151">  Papua New Guinea</option>
                            <option value="152">  Paraguay</option>
                            <option value="153">  Peru</option>
                            <option value="154">  Philippines</option>
                            <option value="155">  Poland</option>
            
                            <option value="156">  Portugal</option>
                            <option value="157">  Puerto Rico</option>
                            <option value="158">  Qatar</option>
                            <option value="98">  Republic of Ireland</option>
                            <option value="159">  Romania</option>
            
                            <option value="160">  Russia</option>
                            <option value="161">  Rwanda</option>
                            <option value="162">  Samoa</option>
                            <option value="163">  San Marino</option>
                            <option value="187">  Sao Tome e Principe</option>
            
                            <option value="164">  Saudi Arabia</option>
                            <option value="165">  Scotland</option>
                            <option value="166">  Senegal</option>
                            <option value="224">  Serbia</option>
                            <option value="168">  Seychelles</option>
            
                            <option value="169">  Sierra Leone</option>
                            <option value="170">  Singapore</option>
                            <option value="171">  Slovakia</option>
                            <option value="172">  Slovenia</option>
                            <option value="173">  Solomon Islands</option>
            
                            <option value="174">  Somalia</option>
                            <option value="175">  South Africa</option>
                            <option value="176">  Spain</option>
                            <option value="177">  Sri Lanka</option>
                            <option value="178">  St. Kitts and Nevis</option>
            
                            <option value="179">  St. Lucia</option>
                            <option value="180">  St. Vincent and the Grenadines</option>
                            <option value="181">  Sudan</option>
                            <option value="182">  Surinam</option>
                            <option value="183">  Swaziland</option>
            
                            <option value="184">  Sweden</option>
                            <option value="185">  Switzerland</option>
                            <option value="186">  Syria</option>
                            <option value="188">  Tahiti</option>
                            <option value="189">  Tajikistan</option>
            
                            <option value="190">  Tanzania</option>
                            <option value="191">  Thailand</option>
                            <option value="192">  Togo</option>
                            <option value="193">  Tonga</option>
                            <option value="194">  Trinidad and Tobago</option>
            
                            <option value="195">  Tunisia</option>
                            <option value="196">  Turkey</option>
                            <option value="197">  Turkmenistan</option>
                            <option value="198">  Turks and Caicos Islands</option>
                            <option value="200">  Uganda</option>
            
                            <option value="201">  Ukraine</option>
                            <option value="202">  United Arab Emirates</option>
                            <option value="203">  United States</option>
                            <option value="204">  Uruguay</option>
                            <option value="199">  US Virgin Islands</option>
            
                            <option value="205">  Uzbekistan</option>
                            <option value="206">  Vanuatu</option>
                            <option value="207">  Venezuela</option>
                            <option value="208">  Vietnam</option>
                            <option value="209">  Wales</option>
            
                            <option value="210">  Yemen</option>
                            <option value="211">  Zambia</option>
                            <option value="212">  Zimbabwe</option>
                          </select>   
                      </div>                 
                    </div>

                    <div class="register_input_main_row">
                    	<div class="register_input_title">Language:</div>
                    	<div class="register_input_row">
                      	<select style="width: 168px;" name="language" id="language">
                            <option selected="selected" value="">Select Language:</option>
                            <option value="2">English</option>
                            <option value="4">Spanish</option>
                          </select> 
                       </div>                    
                    </div>

					         <div class="pre_register_button_div">
                    <input type="button" onclick="registerUser();" class="pre_register_button">
                  </div>
                  
                  </form>
                  
                  <div class="signInline">Already on GoalFace? <a href="http://www.goalface.com/login">Sign in</a> </div>
                </div>
                <div class="register_form_top_bottom">
                	<img style="vertical-align: top;" alt="" src="images/register_form_bottom.jpg">
                </div>
                
            </div>
        </div>
        <!-- main body right wrapper end here -->
    </div>
    
    <?php include "footer.php";?>

</div>
<!-- main wrapper end here -->

</body>
</html>
