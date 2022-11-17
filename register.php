   <html>

   <head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>sign in</title>
   </head>

   <body>

       <!-- header section starts  -->

       <header class="header">

           <a href="admin.php" class="logo">Fete n' Festa</a>

           <nav class="navbar">
               <a href="admin.php">home</a>
               <a href="login.php">Sign in</a>

           </nav>

           <div id="menu-bars" class="fas fa-bars"></div>

       </header>
       <!-- login section starts  -->
       <link href="css/style.css" rel="stylesheet">

       <div class="form">

           <h1>Registration Form</h1>

           <form class="register-form">
               <input type="text" placeholder="first Name" />
               <input type="text" placeholder="last Name" />
               <div class="nav">
                   <li><label for="radioBox1">Male</label>
                       <input id="radioBox1" type="radio" name="select" value="Male">
                   </li>
                   <li><label for="radioBox2">Female</label>
                       <input id="radioBox2" type="radio" name="select" value="Female">
                   </li>
                   <li><label for="radioBox3">Other</label>
                       <input id="radioBox3" type="radio" name="select" value="Other">
                   </li>
               </div>

               <div class="nav1">
                   <li><label for="Birthday">Birthday: </label>

                       <select name="Month">
                           <option value="Month">Month</option>
                           <option value="January">January</option>
                           <option value="February">February</option>
                           <option value="March">March</option>
                           <option value="April">April</option>
                           <option value="May">May</option>
                           <option value="June">June</option>
                           <option value="July">July</option>
                           <option value="August">August</option>
                           <option value="September">September</option>
                           <option value="October">October</option>
                           <option value="November">November</option>
                           <option value="December">December</option>
                       </select>
                   </li>
                   <li><select name="Day">
                           <option value="Day">Day</option>
                           <option value="1">1</option>
                           <option value="2">2</option>
                           <option value="3">3</option>
                           <option value="4">4</option>
                           <option value="5">5</option>
                           <option value="6">6</option>
                           <option value="7">7</option>
                           <option value="8">8</option>
                           <option value="9">9</option>
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
                       </select></li>

                   <li><select name="Year">
                           <option value="Year">Year</option>
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


                       </select>
                   </li>
               </div>

               <input type="number" placeholder="Mob. no." />
               <input type="email" placeholder="Email" />
               <input type="password" placeholder="Password" />
               <label class="box"> I agree to the terms and conditions<input type="checkbox" id="box" value="checked"></label><br><br>


               <button>create</button>
               <p class="message">Already registered? <a href="login.php"><b>Sign In</b></a></p>
           </form>
       </div>

   </body>

   </html>