<!DOCTYPE html>
<html>
    <head>
        <meta content="text/html"; charset="utf-8" http-equiv="content-type">
        <title> video games site </title>
    </head>
    <body>
        <h1>Game details</h1>
        <form action="save-game.php"method="post">
            <fieldset>
                <label for="name">Name:</label>
                <input name="name" id="name"/>
            </fieldset>
            <fieldset>
                <label for="age_limit">Age limit:</label>
                <input name="age_limit" id="age_limit"/>
            </fieldset>
            <fieldset>
                <label for="type">Type:</label>
                <input name="type"id="type"/>
            </fieldset>
            <button type="submit">Save</button>

        </form>
    </body>

</html>