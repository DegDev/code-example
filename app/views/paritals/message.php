<?php

use App\Core\Message;

// If we have no messages, then just do nothing

if( Message::isEmpty() ) {

    return;

}

?>

<div class="col-md-4 mx-auto alert  fade show p-0" role="alert">


    <div class="alert <?= Message::hasErrors() ? 'alert-danger': 'alert-success' ?> " style="padding-left:0;" >

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">  <span aria-hidden="true">&times;</span> </button>

        <ul class="mb-0" style="list-style: none;">


        <?php foreach ( Message::get() as $type => $text): ?>

                <li> <?= $text ?></li>

        <?php endforeach; ?>
                

        <?php unset($_SESSION['message']); ?>

        </ul>

    </div>


</div>

