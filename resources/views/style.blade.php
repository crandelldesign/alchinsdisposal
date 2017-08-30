@extends('layouts.default')

@section('head')
@stop

@section('content')

    <div class="row">
        <div class="col-sm-6">
            <h1>Color Palette</h1>

            <div class="row">
                <div class="col-md-4">
                    <div class="color-swatch swatch1">
                        Alchin Green<br>
                        #005A3F
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="color-swatch swatch2">
                        Alchin Green Light<br>
                        #00A775
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="color-swatch swatch3">
                        Alchin Green Dark<br>
                        #000E09
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="color-swatch swatch4">
                        Alchin Purple<br>
                        #43045A
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="color-swatch swatch5">
                        Alchin Purple Light<br>
                        #7A07A3
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="color-swatch swatch6">
                        Alchin Purple Dark<br>
                        #0C0111
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="color-swatch swatch7">
                        Alchin Blue<br>
                        #072E59
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="color-swatch swatch8">
                        Alchin Blue Light<br>
                        #0D53A0
                    </div>
                </div>
            </div>
            <hr>
            <h1>Buttons</h1>

            <button class="btn btn-lg btn-green">This is a large button</button>&nbsp;

            <div class="visible-xs-block margin-bottom-10"></div>

            <button class="btn btn-black">This is another smaller button</button>

            <hr class="visible-xs-block">

        </div>
        <div class="col-sm-6">
            <h1>Typography</h1>

            <h1>Heading 1</h1>
            <p class="details">Font: Open Sans 700 / Alchin Blue</p>

            <hr>

            <h2>Heading 2</h2>
            <p class="details">Font: Open Sans 600 / Alchin Blue Dark</p>

            <hr>

            <h3>Heading 3</h3>
            <p class="details">Font: Open Sans 500 / Black #333333</p>

            <hr>

            <p>Body Text</p>
            <p>Lorem ipsum dolor sit amet, quis quam, fusce duis. Montes vestibulum esse, tristique dui lorem. Wisi cubilia. Nonummy justo, eros aliquet elit, nulla sollicitudin ut. Iaculis sit lacus, nisi orci nunc, pede convallis vestibulum.</p>
            <p>Sed tellus. Posuere est quis, lacus sit nec. Ultricies vehicula arcu, nunc nonummy id. Vivamus odio neque, faucibus duis. Non diam amet, elit nec semper.</p>

            <p><a href="#">This is a link</a> - <a href="#" class="hover">This is a hover link</a></p>

            <p class="details">Font: Open Sans Regular / Black #333333</p>
        </div>
    </div>

@stop
