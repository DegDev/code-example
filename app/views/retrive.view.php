<?php require 'paritals/header.php'; ?>


<main role="main" class="container mt-5" >

<?php require 'paritals/message.php'; ?>
    
<div class="col-md-4  mx-auto phone-card" >

    <h7 class="phone-card-h" > Retrieve your phone number </h7>


    <form class="form-horizontal mt-3" method="POST" action="retrive-phone">

        

        <div class="form-group">

            <h6> Option 2. Retrieve your phone number </h6>
            
        </div>

        <div class="form-group">

            <label for="email" class="col-md-10 control-label">Enter your E-mail:</label>

            <div class="col-md-10">

                <input  type="email" class="form-control" name="email" required>

            </div>

        </div>

        <div class="form-group">

            The phone number will be e-mailed to you.

        </div>

        <div class="form-group">

            <div class="col-md-10 col-md-offset-4">

                <button type="submit" class="btn btn-primary">

                    Submit

                </button>

            </div>

        </div>
        
    </form>


</div>
</main>
<?php require 'paritals/footer.php'; ?>