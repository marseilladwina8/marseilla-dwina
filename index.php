<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
</head>
<body>
    <section class="pb-4" >
            <h1 style="margin: 0 auto; text-align: center;" >Login</h1>
            <section class="w-100 p-4 d-flex justify-content-center align-items-center pb-4" >
                <form action="./backend/login.php" method="post" style="width: 22rem;" >
                    <div class="form-outline mb-4" >            
                        <input type="email" name="email" placeholder="masukkan email anda" class="form-control" >
                    </div>
                    <div class="form-outline mb-4" >
                        <input type="password" name="password" placeholder="masukkan password anda" class="form-control" >
                    </div>
                    <div class="form-outline mb-4" >
                        <input type="submit" value="login" name="submit" class="btn btn-primary" >
                    </div>
                </form>
            </section>
    </section>
</body>
</html>