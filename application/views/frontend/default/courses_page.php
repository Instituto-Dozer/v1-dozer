<?php
isset($layout) ? "" : $layout = "grid";
isset($selected_category_id) ? "" : $selected_category_id = "all";
isset($selected_level) ? "" : $selected_level = "all";
isset($selected_language) ? "" : $selected_language = "all";
isset($selected_rating) ? "" : $selected_rating = "all";
isset($selected_price) ? "" : $selected_price = "all";
isset($selected_availability) ? "" : $selected_availability = "";

// echo $selected_category_id.'-'.$selected_level.'-'.$selected_language.'-'.$selected_rating.'-'.$selected_price;
$number_of_visible_categoria = 10;
if (isset($sub_category_id)) {
    $sub_category_details = $this->crud_model->get_category_details_by_id($sub_category_id)->row_array();
    $category_details     = $this->crud_model->get_categoria($sub_category_details['parent'])->row_array();
    $category_name        = $category_details['name'];
    $sub_category_name    = $sub_category_details['name'];
}
?>




<section class="category-course-list-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 filter-area">
                <div class="d-flex me-5 position-relative flex-column border-0 radius-10 ">
                    <div id="collapseFilter" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body p-0 ">
                            <div class="   filter_type  ">
                                <h5 class="text-white px-3 py-2 fw-700 m-0 dondenomb_category" style="background: #373737;"><?php echo site_phrase('Categoría'); ?></h5>
                                <ul class="text-white p-3 subcategory_nomb" style="background: #272727;">

                                    <?php
                                    $counter = 1;
                                    $total_number_of_categoria = $this->db->get('category')->num_rows();
                                    if ($id_category == '20' || $id_category == '21' || $id_category == '22') {
                                        $categoria = $this->crud_model->get_categoria($id_category)->result_array();
                                    } else {
                                        $categoria = $this->crud_model->get_categoria($parent)->result_array();
                                    }

                                    foreach ($categoria as $category) : ?>
                                        <li class="">
                                            <div class="text-15px fw-700 <?php if ($counter > $number_of_visible_categoria) : ?> hidden-categoria hidden <?php else : ?> d-flex<?php endif; ?>">
                                                <input type="radio" id="category-<?php echo $category['id']; ?>" name="sub_category" class="categoria custom-radio" value="<?php echo $category['slug']; ?>" onclick="filter(this)" <?php if ($selected_category_id == $category['id']) echo 'checked'; ?>>
                                                <label class="text-white " for="category-<?php echo $category['id']; ?>"><?php echo $category['name']; ?></label>

                                            </div>
                                        </li>
                                        <?php foreach ($this->crud_model->get_sub_categoria($category['id']) as $sub_category) : ?>
                                            <li class="ms-3 ">
                                                <div class="<?php if ($counter > $number_of_visible_categoria) : ?> hidden-categoria hidden <?php else : ?> d-flex<?php endif; ?>">
                                                    <input type="radio" id="sub_category-<?php echo $sub_category['id']; ?>" name="sub_category" class="categoria custom-radio" value="<?php echo $sub_category['slug']; ?>" onclick="filter(this)" <?php if ($selected_category_id == $sub_category['id']) echo 'checked'; ?>>
                                                    <label class=" text-white m-0 fs-15px" for="sub_category-<?php echo $sub_category['id']; ?>"><?php echo $sub_category['name']; ?></label>

                                                </div>
                                            </li>
                                            <?php $counter++;  ?>
                                        <?php endforeach; ?>
                                        <?php $counter++;  ?>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                            <?php if ($id_category == '20' || $parent == '20') { ?>
                                <div class="filter_type ">
                                    <h5 class="text-white px-3 py-2 fw-700 m-0 dondenomb_category">
                                        <?php echo site_phrase('Nivel'); ?></h5>
                                    <ul class="text-white p-3 subcategory_nomb">
                                        <li>
                                            <div class="">
                                                <input type="radio" id="all" name="level" class="level custom-radio " value="all" onclick="filter(this)" <?php if ($selected_level == 'all') echo 'checked'; ?>>
                                                <label class="text-white  my-1 mx-3 fs-15px" for="all"><?php echo site_phrase('all'); ?></label>
                                            </div>
                                            <div class="">
                                                <input type="radio" id="beginner" name="level" class="level custom-radio" value="beginner" onclick="filter(this)" <?php if ($selected_level == 'beginner') echo 'checked'; ?>>
                                                <label class="text-white my-1 mx-3 fs-15px" for="beginner"><?php echo site_phrase('beginner'); ?></label>
                                            </div>
                                            <div class="">
                                                <input type="radio" id="advanced" name="level" class="level custom-radio" value="advanced" onclick="filter(this)" <?php if ($selected_level == 'advanced') echo 'checked'; ?>>
                                                <label class="text-white  my-1 mx-3 fs-15px" for="advanced"><?php echo site_phrase('advanced'); ?></label>
                                            </div>


                                        </li>
                                    </ul>
                                </div>


                                <br>
                            <?php } ?>
                            <div class="filter_type ">
                                <h5 class="text-white px-3 py-2 fw-700 m-0 dondenomb_category">
                                    <?php echo site_phrase('Disponibilidad'); ?></h5>
                                <ul class="text-white p-3 subcategory_nomb">
                                    <li>
                                        <div class="">
                                            <input type="radio" id="available" name="availability" class="availability custom-radio " value="available" onclick="filter(this)" <?php if ($selected_availability == 'available') echo 'checked'; ?>>
                                            <label class="text-white my-1 mx-3 fs-15px" for="available"><?php echo site_phrase('Disponible'); ?></label>
                                        </div>
                                        <div class="">
                                            <input type="radio" id="soon" name="availability" class="availability custom-radio" value="soon" onclick="filter(this)" <?php if ($selected_availability == 'soon') echo 'checked'; ?>>
                                            <label class="text-white my-1 mx-3 fs-15px" for="soon"><?php echo site_phrase('Proximamente'); ?></label>
                                        </div>
                                    </li>
                                </ul>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row category-filter-box mx-0  bg-img-cursos" style="
                    background-image: url(<?= $variable ?>);
                    
                ">
                    <div class="col-md-7 col-lg-9 position-relative">
                        <p class="fw-bold text-white px-3 pdd-textencabezado text-titutlo-cursos"><?= $text_banner ?></p>
                        <p class="px-3 pb-3 text-white text-subtitutlo-cursos"><?= $sub_text_banner ?></p>
                        <?php if ($variable_dos  != "") { ?>
                            <div class="px-3 my-4">
                                <a class="btn-premiun p-2 border-09" href="#">


                                    <?= $btn_banner; ?>
                                    <img style="padding-bottom: 5px;" src="<?= base_url() ?>uploads/system/icon-corona.png">&nbsp;
                                    <?= $btn_dos_banner ?>
                                </a>

                            </div>
                        <?php }
                        if ($variable_logo) { ?>
                            <p class="fw-bold text-white px-3"><?= $text_bannerr ?></p>
                            <p class="px-3 pb-3 text-white"><?= $sub_text_banner_especializacion ?></p>
                            <img class="img-logoespeciali" src="<?= $variable_logo ?>" alt="">
                        <?php } ?>
                    </div>
                    <div class="col-md-5 text-end filter-sort-by">

                    </div>
                </div>
                <div class="category-course-list">
                    <?php include 'category_wise_course_grid_layout.php'; ?>
                    <?php if (count($courses) == 0) : ?>
                        <?php echo site_phrase('no_result_found'); ?>
                    <?php endif; ?>
                </div>
                <nav>
                    <?php
                    // if ($selected_category_id == "all" && $selected_price == 0 && $selected_level == 'all' && $selected_language == 'all' && $selected_rating == 'all') {
                    echo $this->pagination->create_links();
                    //} 
                    ?>
                </nav>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
    function get_url() {
        var urlPrefix = '<?php echo site_url('home/courses?'); ?>'
        var urlSuffix = "";
        var slectedCategory = "";
        var selectedPrice = "";
        var selectedLevel = "";
        var selectedLanguage = "";
        var selectedAvailability = "";

        // Get selected category
        $('.categoria:checked').each(function() {
            slectedCategory = $(this).attr('value');
        });

        // Get selected price
        $('.prices:checked').each(function() {
            selectedPrice = $(this).attr('value');
        });

        // Get selected difficulty Level
        $('.level:checked').each(function() {
            selectedLevel = $(this).attr('value');
        });

        // Get selected difficulty Level
        $('.languages:checked').each(function() {
            selectedLanguage = $(this).attr('value');
        });

        // Get selected availability Level
        $('.availability:checked').each(function() {
            selectedAvailability = $(this).attr('value');
        });



        urlSuffix = "category=" + slectedCategory + "&&price=" + selectedPrice + "&&level=" + selectedLevel +
            "&&language=" + selectedLanguage + "&&availability=" + selectedAvailability;
        var url = urlPrefix + urlSuffix;
        return url;
    }

    function filter() {
        var url = get_url();
        window.location.replace(url);
        //console.log(url);
    }

    function toggleLayout(layout) {
        $.ajax({
            type: 'POST',
            url: '<?php echo site_url('home/set_layout_to_session'); ?>',
            data: {
                layout: "grid"
            },
            success: function(response) {
                location.reload();
            }
        });
    }

    function showToggle(elem, selector) {
        $('.' + selector).slideToggle(50);
        $('.' + selector).toggleClass("d-flex");
        if ($(elem).text() === "<?php echo site_phrase('show_more'); ?>") {
            $(elem).text('<?php echo site_phrase('show_less'); ?>');
        } else {
            $(elem).text('<?php echo site_phrase('show_more'); ?>');
        }
    }

    $('.course-compare').click(function(e) {
        e.preventDefault()
        var redirect_to = $(this).attr('redirect_to');
        window.location.replace(redirect_to);
    });
</script>