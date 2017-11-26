<?php $home= ''; $fm= ''; $adv= ''; $abu= 'active'; $ptitle= 'Contac Us Salmon River'; include 'module/_header.php'; ?>
        <main>
            <!--main contend of the page-->
            <div class="middle">
                <!--left side-->
                <div class="side">
                    <!-- colocar novo conteudo lado esquerdo/ CONTATC PAGE-->
                    <div id="contact_form">
                        <fieldset>
                            <legend><span>Contact Us</span></legend>
                            <label><span>Full Name:</span><input name="fullname" type="text" value="" placeholder="Full Name" pattern="[a-zA-Z -._]{3,99}" required ></label>
                            <label><span>Email:</span><input name="email" type="email" value="" placeholder="john@gmail.com" required ></label>
                            <label><span>Phone:</span><input name="phone" type="tel" value="" placeholder="1231231234" pattern="[0-9]{10,20}" required ></label>
                            <label>
                                <span>Choose subject:</span>
                                <input type="text" name="sub" list="sub">
                                <datalist id="sub">
                                    <option value="Adventures"></option>
                                    <option value="Prices and Plans"></option>
                                    <option value="Guides"></option>
                                    <option value="Others"></option>
                                </datalist>
                            </label>
                            <label>
                                <span>Questions/Comments</span>
                                <textarea rows="4" cols="40">Enter text here...</textarea>
                            </label>
                        </fieldset>
                        <input type="submit" value="Send Request" class="submitBtn">
                    </div>
                </div>
                <!--right side-->
                <div class="side">
                    <div id="text_right">
                        <div id="temp">
                            <!-- colocar novo conteudo lado direito-->
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2800.4359566166154!2d-116.3179957842173!3d45.42071254436476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54a6c569b5b4cae5%3A0x3118ef58524f3a4!2s1000+Main+St%2C+Riggins%2C+ID+83549%2C+EUA!5e0!3m2!1spt-BR!2sbr!4v1491226944837" width="516" height="406" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </main>
<?php include 'module/_footer.php'; ?>
