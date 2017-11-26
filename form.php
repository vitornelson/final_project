<?php $home= ''; $fm= 'active'; $abu= ''; $adv= ''; $ptitle= 'Form Registration'; include 'module/_header.php'; ?>
<main>
    <!--main contend of the page-->
<div >
    <h2 class="temp"><u>Registration Form</u></h2>
    <form  method="post" enctype="multipart/form-data" name="attend" id="advent">
    <div class="middle" id="bord" >
        <!--left side-->
        <div class="side">
            <div class="text_left">
                <fieldset>
                    <legend><span>Personal Information</span></legend>
                    <label><span>Full Name:</span><input name="fullname" type="text" value="" placeholder="Full Name" pattern="[a-zA-Z -._]{3,99}" required ></label>
                    <label><span>Email:</span><input name="email" type="email" value="" placeholder="john@gmail.com" required ></label>
                    <label><span>Phone:</span><input name="phone" type="tel" value="" placeholder="1231231234" pattern="[0-9]{10,20}" required ></label>
                </fieldset>
            </div>
        </div>
        <!--right side-->
        <div class="side">
            <div class="text_left">
                <fieldset>
                    <legend><span>Adventure</span></legend>
                    <label>
                        <span>Choose the adventure:</span>
                        <input type="text" name="adventures" list="activities">
                        <datalist id="activities">
                            <option value="Whitewater"> </option>
                            <option value="Hiking"> </option>
                            <option value="Mountain Bike"> </option>
                        </datalist>
                    </label>
                    <label><span>Start Date:</span><input name="date" type="date"></label>
                    <label>
                        <span>Questions/Comments</span>
                        <textarea rows="4" cols="50">Enter text here...</textarea>
                    </label>
                </fieldset>

            </div>
        </div>
    </div>
        <input type="submit" value="BOOK ME NOW!" class="submitBtn">

        <input name="redirect" type="hidden" value="thanks.html">
    </form>
</div>
</main>
<?php include 'module/_footer.php'; ?>
