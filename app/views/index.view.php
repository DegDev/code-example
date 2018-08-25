<?php require 'paritals/header.php'; ?>

<main role="main" class="container mt-5">

    <?php require 'paritals/message.php'; ?>

    <div class="col-md-4 mx-auto phone-card" >

        <h6 class="phone-card-h"> Add your phone number </h6>



        <form class="form-horizontal mt-3" method="POST" action="add-phone">

            <div class="form-group">

                <h6> Option 1. Add your phone number </h6>

            </div>

            <div class="form-group">

                <label for="phone" class="col-md-10 control-label">Enter your PHONE</label>

                <div class="col-md-10">

                    <input type="tel" class="form-control" name="phone" pattern="[0-9-()]+"  placeholder="e.g. 123-456789"  minlength="8" required>

                </div>

            </div>

            <div class="form-group">

                <label for="email" class="col-md-10 control-label">Enter your e-mail:</label>

                <div class="col-md-10">

                    <input type="email" class="form-control" name="email" required>

                </div>

            </div>

            <div class="form-group">

                You will be able to retrieve your phone number later on using your e-mail. <a href='/retrive'> Retrieve </a> 

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
