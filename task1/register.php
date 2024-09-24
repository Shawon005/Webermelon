<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Job PHP Task</title>
    <link href="style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>

  <body>
    <section class="container">
        <div class="center mt-5">
            <div class="card" style="width:30rem">
                <div class="card-body">
                    <h3 class="card-title text-center">Register</h3>
                    <?php if(isset($_GET['error'])){?>
                        <p class="error"><?php echo $_GET['error']; ?></p>
                        <?php }?>
                    <form action="store.php" method="POST" class="validatedForm" >
                        <fieldset>
                            <div class="mb-3">
                                <label for="formemail" class="form-label">User Name</label>
                                <input class="form-control" type="text" id="formemail" name="username" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input class="form-control" type="password" id="password"name="password" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="formemail3" class="form-label">Confirm password</label>
                                <input class="form-control" type="password" id="formemail3" name="confirm_password" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="text-center mt-4">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div> 
                        </fieldset> 
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> 
    <script>
        jQuery('.validatedForm').validate({
            
			rules : {
				password : {
					minlength : 5
				},
				confirm_password : {
					minlength : 5,
					equalTo : "#password",
				}
			}
		});

        $('button').click(function(){
            console.log($('.validatedForm').valid());
        });
    </script>
  </body>
</html>