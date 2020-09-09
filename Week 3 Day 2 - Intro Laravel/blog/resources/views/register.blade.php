<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Sign Up</title>
</head>

<h1>Buat Account Baru!</h1>
<h3>Sign Up Form</h3>
<form method="POST" action="/welcome">
    @csrf
    <label for="fname">First name:</label><br><br>
    <input type="text" id="fname" name="firstname" required><br><br>
    <label for="lname">Last name:</label><br><br>
    <input type="text" id="lname" name="lastname" required><br>

    <p>Gender:</p>
    <input type="radio" id="male" name="gender" value="male" required>
    <label for="male">Male</label><br>
    <input type="radio" id="female" name="gender" value="female" required>
    <label for="female">Female</label><br>
    <input type="radio" id="other" name="gender" value="other" required>
    <label for="other">Other</label>

    <br>

    <p>Nationality:</p>

    <select id="nationality" name="nationality">
        <option value="indonesian">Indonesian</option>
        <option value="singaporean">Singaporean</option>
        <option value="malaysian">Malaysian</option>
        <option value="australian">Australian</option>
    </select>

    <p>Languange Spoken:</p>

    <input type="checkbox" id="indonesia" name="indonesia" value="Bahasa Indonesia">
    <label for="indonesia">Bahasa Indonesia</label><br>
    <input type="checkbox" id="English" name="English" value="English">
    <label for="English">English</label><br>
    <input type="checkbox" id="Other" name="Other" value="Other">
    <label for="Other">Other</label><br>

    <p>Bio:</p>
    <textarea id="bio" name="bio" rows="10" cols="35"></textarea><br>
    <input type="submit" value="Sign Up">
</form>
</body>

</html>