<footer class="footer-area d-print-none mt-1 pt-1">
    <div class="container-xl pt-4">
        <div class="row mb-3">
            <div class="col-12 col-sm-6 col-lg-8 col-xl-9 col-xl-9 px-4">
                <span class="titulo-footer">Instituto Dozer</span>

                <p class="text-footer lh-sm">Es una organización privada con ruc: 20606389184, dedicada a
                    brindar servicios de capacitación y <br class="br-footer">
                    asesoria en implementación BIM en proyectos públicos y privados, con el objetivo de hacerlos más <br class="br-footer">
                    eficientes y productivos en sus actividades laborales, somos escuela oficial de:
                </p>
                <img class="d-none d-sm-block tamano" src="<?=base_url()?>uploads\system\autodesk-footer.svg" alt="">
            </div>
            <div class="col-12 col-sm-6 col-lg-4 col-xl-3 col-xl-3 px-2">
                <ul class="list-unstyled text-small">
                    <li class="mb-2 mt-1 fondo-footer"><a class="link-secondary footer-hover-link" href="#">
                            <div class="d-flex flex-row ">
                                <div class="p-2 "><img class="img-footer" src="<?=base_url()?>uploads\system\libro.svg" alt=""></div>
                                <div class="btn-footer p-2">LIBRO DE <br class="d-none d-sm-none d-md-none d-lg-block">
                                    RECLAMACIONES</div>
                            </div>
                        </a>
                    </li>
                    <li class="mb-2 mt-1 fondo-footer"><a class="link-secondary footer-hover-link" href="#">
                            <div class="d-flex flex-row ">
                                <div class="p-2 "><img class="img-footer" src="<?=base_url()?>uploads\system\certi.svg" alt=""></div>
                                <div class="btn-footer p-2 ">VERIFICADOR <br class="d-none d-sm-none d-md-none d-lg-block">
                                    DE CERTIFICADOS</div>
                            </div>
                        </a></a>
                    </li>


                    <?php $custom_page_menus = $this->crud_model->get_custom_pages('', 'footer'); ?>
                    <?php foreach($custom_page_menus->result_array() as $custom_page_menu): ?>
                    <li class="mb-2"><a class="link-secondary footer-hover-link"
                            href="<?php echo site_url('page/'.$custom_page_menu['page_url']); ?>"><?php echo $custom_page_menu['button_title']; ?></a>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>


        </div>
    </div>
    <hr>
    <section class="container-xl ">
        <div class="d-flex flex-column  flex-sm-row mb-3 justify-content-between">
            <div class=""><a class="botom-footer" href="#">Sobre Instituto Dozer</a></div>
            <div class=""><a class="botom-footer" href="#">Políticas de Privacidad</a></div>
            <div class=""><a class="botom-footer" href="#">Términos y Condiciones</a></div>
            <div class=""><a class="botom-footer" href="#">Reglamento Institucional</a></div>
            
            <?php if (get_settings('allow_instructor') == 1) : ?>
            <div class="">
                
                <?php if($this->session->userdata('user_id')): ?>
                <a class="botom-footer"
                    href="<?php echo site_url('user/become_an_instructor'); ?>">Trabaja con nosotros</a>
                <?php else: ?>
                <a class="botom-footer"
                    href="<?php echo site_url('sign_up'); ?>">Trabaja con nosotros</a>
                <?php endif; ?>
               
            </div>
            <?php endif; ?>
        </div>
    </section>
    <section class="" style="background:#131313;">
        <div class="container-xl">
            <div class="row d-flex justify-content-between align-items-center">

                <div class="col-md-6 ps-6 text-copy fs-15pt pt-2  ">Copyright &copy;
                    <?php echo get_settings('system_name'); ?> 2023,
                    <?php echo site_phrase('- Todos los derechos reservados.'); ?>
                    <br>
                    <?php if(get_settings('footer_text')): ?>
                    <a class="link-secondary footer-hover-link"
                        href="<?php echo get_settings('footer_link'); ?>"><?php echo site_phrase(get_settings('footer_text')); ?></a>
                    <?php endif; ?>
                </div>
                <div class="col-md-6 ps-6 ps-md-1 fs-19pt text-white">
                    <div>
                        <div class="d-flex flex-row justify-content-end align-items-center">
                            <div class="p-2 text-rs-footer ">Nuestras redes sociales:</div>
                            <div class="p-2 "><img src="<?=base_url()?>uploads\system\social\fb-white.svg" alt=""></div>
                            <div class="p-2 "><img src="<?=base_url()?>uploads\system\social\ig-white.svg" alt=""></div>
                            <div class="p-2 "><img src="<?=base_url()?>uploads\system\social\tk-white.svg" alt=""></div>
                            <div class="p-2 "><img src="<?=base_url()?>uploads\system\social\yt-white.svg" alt=""></div>
                            <div class="p-2 "><img src="<?=base_url()?>uploads\system\social\tl-white.svg" alt=""></div>
                            <div class="p-2 "><img src="<?=base_url()?>uploads\system\social\wssp-white.svg" alt=""></div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</footer>

<script type="text/javascript">
function switch_language(language) {
    $.ajax({
        url: '<?php echo site_url('home/site_language'); ?>',
        type: 'post',
        data: {
            language: language
        },
        success: function(response) {
            setTimeout(function() {
                location.reload();
            }, 500);
        }
    });
}
</script>



<!-- PAYMENT MODAL -->
<!-- Modal -->
<?php
$paypal_info = json_decode(get_settings('paypal'), true);
$stripe_info = json_decode(get_settings('stripe_keys'), true);
if ($paypal_info[0]['active'] == 0) {
  $paypal_status = 'disabled';
}else {
  $paypal_status = '';
}
if ($stripe_info[0]['active'] == 0) {
  $stripe_status = 'disabled';
}else {
  $stripe_status = '';
}
?>

<!-- Modal -->
<div class="modal fade multi-step" id="EditRatingModal" tabindex="-1" role="dialog" aria-hidden="true"
    reset-on-close="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content edit-rating-modal">
            <div class="modal-header">
                <h5 class="modal-title step-1" data-step="1"><?php echo site_phrase('step').' 1'; ?></h5>
                <h5 class="modal-title step-2" data-step="2"><?php echo site_phrase('step').' 2'; ?></h5>
                <h5 class="m-progress-stats modal-title">
                    &nbsp;of&nbsp;<span class="m-progress-total"></span>
                </h5>

                <button type="button" class="close" data-bs-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="m-progress-bar-wrapper">
                <div class="m-progress-bar">
                </div>
            </div>
            <div class="modal-body step step-1">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="modal-rating-box">
                                <h4 class="rating-title">
                                    <?php echo site_phrase('how_would_you_rate_this_course_overall'); ?>?</h4>
                                <fieldset class="your-rating">

                                    <input type="radio" id="star5" name="rating" value="5" />
                                    <label class="full" for="star5"></label>

                                    <!-- <input type="radio" id="star4half" name="rating" value="4 and a half" />
                  <label class="half" for="star4half"></label> -->

                                    <input type="radio" id="star4" name="rating" value="4" />
                                    <label class="full" for="star4"></label>

                                    <!-- <input type="radio" id="star3half" name="rating" value="3 and a half" />
                  <label class="half" for="star3half"></label> -->

                                    <input type="radio" id="star3" name="rating" value="3" />
                                    <label class="full" for="star3"></label>

                                    <!-- <input type="radio" id="star2half" name="rating" value="2 and a half" />
                  <label class="half" for="star2half"></label> -->

                                    <input type="radio" id="star2" name="rating" value="2" />
                                    <label class="full" for="star2"></label>

                                    <!-- <input type="radio" id="star1half" name="rating" value="1 and a half" />
                  <label class="half" for="star1half"></label> -->

                                    <input type="radio" id="star1" name="rating" value="1" />
                                    <label class="full" for="star1"></label>

                                    <!-- <input type="radio" id="starhalf" name="rating" value="half" />
                  <label class="half" for="starhalf"></label> -->

                                </fieldset>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="modal-course-preview-box">
                                <div class="card">
                                    <img class="card-img-top img-fluid" id="course_thumbnail_1" alt="">
                                    <div class="card-body">
                                        <h5 class="card-title" class="course_title_for_rating" id="course_title_1"></h5>
                                        <p class="card-text" id="instructor_details">

                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-body step step-2">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="modal-rating-comment-box">
                                <h4 class="rating-title"><?php echo site_phrase('write_a_public_review'); ?></h4>
                                <textarea id="review_of_a_course" name="review_of_a_course"
                                    placeholder="<?php echo site_phrase('describe_your_experience_what_you_got_out_of_the_course_and_other_helpful_highlights').'. '.site_phrase('what_did_the_instructor_do_well_and_what_could_use_some_improvement') ?>?"
                                    maxlength="65000" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="modal-course-preview-box">
                                <div class="card">
                                    <img class="card-img-top img-fluid" id="course_thumbnail_2" alt="">
                                    <div class="card-body">
                                        <h5 class="card-title" class="course_title_for_rating" id="course_title_2"></h5>
                                        <p class="card-text">
                                            -
                                            <?php
                      $admin_details = $this->user_model->get_admin_details()->row_array();
                      echo $admin_details['first_name'].' '.$admin_details['last_name'];
                      ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <input type="hidden" name="course_id" id="course_id_for_rating" value="">
            <div class="modal-footer">
                <button type="button" class="btn btn-primary next step step-1" data-step="1"
                    onclick="sendEvent(2)"><?php echo site_phrase('next'); ?></button>
                <button type="button" class="btn btn-primary previous step step-2 mr-auto" data-step="2"
                    onclick="sendEvent(1)"><?php echo site_phrase('previous'); ?></button>
                <button type="button" class="btn btn-primary publish step step-2"
                    onclick="publishRating($('#course_id_for_rating').val())"
                    id=""><?php echo site_phrase('publish'); ?></button>
            </div>
        </div>
    </div>
</div><!-- Modal -->