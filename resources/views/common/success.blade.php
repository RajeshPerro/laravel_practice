<?php
/**
 * Created by PhpStorm.
 * User: rajesh
 * Date: 11/11/15
 * Time: 3:09 PM
 */
?>

<div class="flash-message alert " role="alert">
    @foreach (['success'] as $msg)
        @if(Session::has('alert-' . $msg))

            <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </p>
        @endif
    @endforeach
</div>
