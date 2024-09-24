<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Job PHP Task</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
  </head>
  <style>
    
  </style>
  <body>
    <section class="container">
        <div class="center mt-5">
            <div class="card" style="width:30rem">
                <div class="card-body">
                    <h3 class="card-title text-center">Login</h3>
                    <form action="login.php?login" method="post">
                      <?php if(isset($_GET['error'])){?>
                        <p class="error"><?php echo $_GET['error']; ?></p>
                        <?php }?>
                      <div class="mb-3">
                          <label for="formemail" class="form-label">Enter Your Email</label>
                          <input class="form-control" type="email" name="email" id="formemail">
                          <div class="valid-feedback">
                              Looks good!
                          </div>
                      </div>
                      <div class="text-center mt-4">
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>  
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

  </body>
</html>
