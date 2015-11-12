<?php
/**
 * Created by PhpStorm.
 * User: rajesh
 * Date: 11/10/15
 * Time: 11:03 PM
 */
 ?>

@if (count($errors) > 0)
        <!-- Form Error List -->
<div class="alert alert-danger">
    <strong>Whoops! Something went wrong!</strong>

    <br><br>

    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
