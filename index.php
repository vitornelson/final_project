<?php $home= 'active'; $fm= ''; $abu= ''; $adv= ''; $ptitle= 'Salmon River Adventures'; include 'module/_header.php'; ?>
        <main>
            <!--main contend of the page-->
            <div class="middle">
                <!--left side-->
                <div class="side">
                    <div class="flexslider">
                        <ul class="slides">
                            <li>
                                <img src="slider_support/sliders/raft_640.jpg" alt="raftimage" />
                            </li>
                            <li>
                                <img src="slider_support/sliders/adve_mount_640.jpg" alt="mountain" />
                            </li>
                            <li>
                                <img src="slider_support/sliders/rafting_640.jpg" alt="rafting" />
                            </li>
                            <li>
                                <img src="slider_support/sliders/bike_640.jpg" alt="rafting" />
                            </li>
                            <li>
                                <img src="slider_support/sliders/bicycling_640.jpg" alt="rafting" />
                            </li>
                        </ul>
                    </div>
                </div>
                <!--right side-->
                <div class="side">
                    <div id="text_right">
                        <div class="temp">
                            <h2>Weather Conditions for <span id="place"> City, State</span></h2>
                            <p> Current Temperature</p>
                            <img id="w_icon" src="" alt="current weather"><p><span id="currentTemp">90</span>&deg;F</p>
                        </div>
                        <br><br>
                        <div>
                            <h2 class="temp">Looking for an adventure?</h2>
                            <p> You have come to the right place. Here you can find amazing trips and adventures that you, friends or family can do in your holydays, vacation or free time.</p>
                            <br><br><a href="form.php" id="btn">Book Now!</a>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </main>
<?php include 'module/_footer.php'; ?>
