<?php
/* Template Name: Home */
$staffText = "Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.

At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea
takimata
sanctus
est Lorem ipsum dolor sit amet.";
get_header();
?>

<section class="hero">
    <img src="https://homepages.cae.wisc.edu/~ece533/images/airplane.png" alt="Resevoir Doctors">
    <div class='container'>
        <div class='row medium-unstack hero__row'>
            <div class="hero__content columns">
                <h1>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                    labore et dolore magna aliquyam erat, sed</h1>
            </div>
        </div> <!-- .row -->
    </div> <!-- .container -->
</section>
<section class="staff">
    <div class='container staff_container'>
        <div class="row">
            <div class="columns text-right staff__heading">Staff</div>
        </div>
        <div class="row staff__row">
            <div class="row staff__tabs_container">
                <div class="columns staff__tabs_title_container">
                    <ul class="vertical tabs staff__tabs_override" data-tabs id="example-tabs">
                        <li class="tabs-title is-active"><a href="#panel1v" aria-selected="true">
                                <div>Brad Sherman</div>
                                <div>Director</div>
                            </a></li>
                        <li class="tabs-title"><a href="#panel2v">
                                <div>Brad Sherman</div>
                                <div>Director</div>
                            </a></li>
                        <li class="tabs-title"><a href="#panel3v">
                                <div>Brad Sherman</div>
                                <div>Director</div>
                            </a></li>
                        <li class="tabs-title"><a href="#panel4v">
                                <div>Brad Sherman</div>
                                <div>Director</div>
                            </a></li>
                    </ul>
                </div>
                <div class="columns staff__tabs_content_container">
                    <div class="tabs-content staff__tabs_content_override" data-tabs-content="example-tabs">
                        <div class="tabs-panel is-active" id="panel1v">
                            <div class="row">
                                <p><?php echo $staffText ?></p>
                            </div>
                            <div class="row">
                                <div class="columns">
                                    <div class="row">
                                        <div class="staff__icon"></div>
                                        <div class="staff__icon"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tabs-panel" id="panel2v">
                            <div class="row">
                                <p><?php echo $staffText ?></p>
                            </div>
                            <div class="row">
                                <div class="columns">
                                    <div class="row">
                                        <div class="staff__icon"></div>
                                        <div class="staff__icon"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tabs-panel" id="panel3v">
                            <div class="row">
                                <p><?php echo $staffText ?></p>
                            </div>
                            <div class="row">
                                <div class="columns">
                                    <div class="row">
                                        <div class="staff__icon"></div>
                                        <div class="staff__icon"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tabs-panel" id="panel4v">
                            <div class="row">
                                <p><?php echo $staffText ?></p>
                            </div>
                            <div class="row">
                                <div class="columns">
                                    <div class="row">
                                        <div class="staff__icon"></div>
                                        <div class="staff__icon"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</section>


<?php
get_footer();