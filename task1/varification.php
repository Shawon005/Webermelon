<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Job PHP Task</title>
    <link href="style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head> 
  <style>
    .center {
        display: flex;
        justify-content: center;
        align-items: center;
        }
  </style>
  <body>
    <section class="container">
        <div class="center mt-5">
            <div class="card" style="width:30rem">
                <div class="card-body">
                    <h3 class="card-title text-center">Varification Code</h3>
                        <?php if(isset($_GET['error'])){?>
                        <p class="error"><?php echo $_GET['error']; ?></p>
                        <?php }?>
                      <div class="row g-3 align-items-center mt-3">
                        <div class="col-3">
                          <label for="inputPassword6" class="col-form-label">Varification</label>
                        </div>
                        <div class="col-9">
                          <input type="text" id="inputPassword6" class="form-control code" aria-describedby="passwordHelpInline">
                        </div>
                      </div>
                      <div class="text-center mt-4">
                        <button type="submit" id="submit" class="btn btn-primary">Submit</button>
                      </div> 
                      <p id="out"></p> 
                </div>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            $('#submit').click(function(){
               
                $.ajax({
                    type:"POST",
                    url:"login.php",
                    data:{
                        verification: $('.code').val(),
                    },
                    success: function(data){
                        window.location.href = data;
                        console.log(data)
                    }
                });
            });
        });
    </script>   

  </body>
</html>
<?php

?>