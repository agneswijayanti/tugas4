
    <h1>Sign Up Form</h1>
    <form action="/welcome" method="POST">
    {{ csrf_field() }}
        <label for="fname">First Name : </label>
        <br>
        <input type="text" name="fname">
        <br>
        <br>
        <label for="lname">Last Name : </label>
        <br>
        <input type="text" name="lname">

        <br>
        <br>
        <label for="gender">Gender</label>
        <br>
        <input type="radio" id="man" name="gender" value="man">
        <label for="male">Male</label><br>
        <input type="radio" id="women" name="gender" value="women">
        <label for="female">Female</label><br>
        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Other</label>

        <br>
        <br>
        <label for="negara">Nationalyy :</label>
        <select name="negara" id="negara">
            <option value="indonesia">Indonesia</option>
            <option value="vietname">vietname</option>
            <option value="myanmar">Myanmar</option>
            <option value="arab">Arab</option>
        </select>
        <br>
        <br>
        <label for="bahasa">Language Spoken</label>
        <br>
       
        <input type="checkbox" id="bahasaindonesia" name="bahasaindonesia" value="bahasaindonesia">
        <label for="bahasaindonesia"> bahasa indonesia</label><br>
        <input type="checkbox" id="english" name="english" value="english">
        <label for="english"> English</label><br>
        <input type="checkbox" id="arabic" name="arabic" value="arabic">
        <label for="arabic"> Arabic</label><br>
        <input type="checkbox" id="japanese" name="japanese" value="japanase">
        <label for="japanese"> Japanese</label><br><br>
        <br>
        <label for="box">Box: </label>
        <br>
        <textarea name="box" id="box" cols="30" rows="10"></textarea>
        <br>
        <br>
        <input type="submit" value="Submit">


    </form>
