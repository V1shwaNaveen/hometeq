<?php
$pagename = "homteq: cloud controlled tech for your home";  // Set page name variable

echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; // Include stylesheet
echo "<title>" . $pagename . "</title>"; // Display page name in the browser tab
echo "<body>";

include("headfile.html"); // Include header file

echo "<h4>" . $pagename . "</h4>"; // Display page name on the webpage

echo " <p class='updateInfo'> homteq is a highly-specialised online retailer that offers a wide range of devices at the most competitive prices
to make your home and your life super SMART.</p>
<p class='updateInfo'><b>SMART SECURITY </b></p>
<p class='updateInfo'>
Smart-home monitoring products mean you can set up cameras to check on your home, even if you’re in another country.
You can either watch a live stream through your phone or tablet, or just get alerts when the motion sensor is
triggered.</p>
<p class='updateInfo'><b>SMART ENERGY</b></p>
<p class='updateInfo'>
Smart thermostat systems let you turn it off instantly from your phone – no matter where you are – or you can tell
them
when you’re heading home to switch it back on, so it’s warm when you get in.
They can figure out your routine and customise your heating and hot water so it’s on when you need it and off when
you don’t,
helping to reduce your energy bills.</p>
<p class='updateInfo'><b>SMART SPEAKERS</b></p>
<p class='updateInfo'>
We’ve all got too much to do.
Being able to command a virtual assistant to do something for you saves time, and it also means you can multitask
more effectively.
If your hands are covered in flour but you need a two-minute timer, you can set it by voice without even having to
stop kneading.
Because virtual assistants live in a speaker with a microphone, they’re present in your home whenever you need them.
Whatever smart tech you are after, homteq has it on offer!</p>"; // Placeholder text

include("footfile.html"); // Include footer file

echo "</body>";
