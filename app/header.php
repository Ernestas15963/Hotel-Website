<header>
    <div class="site-header">
        <div class="container">
            <div class="navbar flex-container">
                <div class="logo">
                    <a href="#hero1"><h2>WINGS</h2></a>
                    <div id="MyClockDisplay" class="clock" onload="showTime()"></div>
                </div>
                <nav class="nav-list">
                    <ul class= "flex-container">
                        <li><a href="#hero1">Home</a></li>
                        <li><a href="#rooms1">Rooms</a></li>
                        <li><a href="#booknow">Book Now</a></li>
                        <li><a href="#about-us">About Us</a></li>
                    </ul>
                </nav>
            </div>
                
            <div class="mobile-menu">
                <nav id="myNav" class="overlay">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <ul class="overlay-content">
                        <li><a href="#hero1" onclick="closeNav()">Home</a></li>
                        <li><a href="#rooms1" onclick="closeNav()">Rooms</a></li>
                        <li><a href="#booknow" onclick="closeNav()">Book Now</a></li>
                        <li><a href="#about-us" onclick="closeNav()" >About Us</a></li>
                    </ul>
                </nav>
                <span class="open" onclick="openNav()">&#9776;</span>
            </div>
        </div>
    </div>
</header>