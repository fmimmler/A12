<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Importiert das Bootstrap css-File-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!--Importiert das css-File-->
    <link rel="stylesheet" href="style/styleRegister.css">

    <!--Importiert das Bootstrap script-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous" async></script>
    

    <title>Registrierung</title>
</head>
<body>
    <header>

    </header>
    <main>
        <fieldset class="col-lg-6 col-md-8 col-sm-10 col-xs-11 mx-auto mt-5 py-4 px-5 fieldsetStyle">
            <legend>Register</legend>
            <form name="form" action="php/process.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="benutzername" class="form-label">Benutzername</label>
                    <input type="text" class="form-control" id="benutzername" name="benutzername" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Passwort</label>
                    <input type="password" class="form-control" id="password" name="password" minlength="8" required>
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Register</button>
            </form>
        </fieldset>
    </main>

</body>
</html>