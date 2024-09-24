<?php
include 'DbConnect.php';
session_start();
$user_id=$_SESSION['id'];
$sql="SELECT * FROM event_register WHERE user_id='$user_id'";
$result=mysqli_query($con,$sql);
$user=mysqli_fetch_assoc($result);

?>
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
                    <h3 class="card-title text-center">Event Register</h3>
                        <?php if(isset($_GET['success'])){?>
                        <p class="success"><?php echo $_GET['success']; ?></p>
                        <?php }?>
                        <?php if(isset($_GET['error'])){?>
                        <p class="error"><?php echo $_GET['error']; ?></p>
                        <?php }?>
                        <form action="store.php" method="POST" class="validatedForm">
                        <fieldset>
                            <div class="mb-3">
                                <label for="formemail" class="form-label">First Name</label>
                                <input class="form-control" type="text" id="formemail" name="first_name" value="<?php  if(isset($user['first_name'])){ echo $user['first_name'];}?>" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="formemail1" class="form-label">Last Name</label>
                                <input class="form-control" type="text" id="formemail1" name="last_name" value="<?php  if(isset($user['last_name'])){ echo $user['last_name'];}?>" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="number" class="form-label">Phone Number</label>
                                <input class="form-control" type="text" id="number"name="number" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="formemail3" class="form-label">Date</label>
                                <input class="form-control" type="date" id="formemail3" name="event_date" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="formemail3" class="form-label">Pricing plan</label>
                               <select name="pricing_plan" id="formemail3" class="form-select">
                                <option value="free">Free</option>
                                <option value="10">10$</option>
                                <option value="20">20$</option>
                               </select>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> 
  
  </body>
</html>
