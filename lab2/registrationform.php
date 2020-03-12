<html>
    <head> <title> A Simple Form </title> </head>
    <body>
        <form
            action="https://gmail.com/"
            method="post" >
            Click submit to start our initial PHP program.
            <br>
            Name: 
            <input type="text" size="15" maxlength="20" name="fname">
            <br>
            Password:
            <input type="password" size="15" maxlength="20" name="pass1">
            <br>
            <br>
            Text area
            <textarea rows="4" cols="50" name="Comments">Your comments here</textarea>
            <br>
            Radio
            <input type="radio" name="contact" value="Yes" checked>
            <input type="radio" name="contact" value="No">
            <br>
            Checkbox
            <input type="checkbox" name="walk" value="Yes" checked> Walker
            <input type="checkbox" name="Bicycle" value="Yes"> Bicycle
            <input type="checkbox" name="Car" value="Yes"> Car
            <input type="checkbox" name="Plane" value="Yes"> Plane
            <br>
            Checkbox under same name
            <input type="checkbox" name="travel" value="Car" checked> Car
            <input type="checkbox" name="travel" value="Bike"> Bicycle
            <input type="checkbox" name="travel" value="None"> None of the above
            <br>
            Selection Lists
            <select name="Accomodations" size="2" multiple>
                <option>A fine hotel</option>
                <option selected>A cheap motel</option>
                <option>A tent in the parking lot</option>
                <option>Just give me a sleeping bag checked</option>
            </select>
            <br>
            <br>
            <input type="submit" value="Click To Submit">
            <input type="reset" value="Erase and Restart">
        </form>
    </body> 
</html>