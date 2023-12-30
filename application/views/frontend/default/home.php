<section class="bg-general">
    <section class="home-banner-area" id="home-banner-area">
        <div class="container-xl">
            <div class="row">
                <div class=" position-relative">
                    <div class="">
                        <div class="d-flex flex-row columgap-principal">
                            <div class="d-flex flex-column mb-3 ">
                                <div class="p-2">
                                    <h2 class=" text-uppercase text-principal">
                                        BIM un futuro muy
                                        presente en el sector
                                        de la construcción
                                    </h2>
                                </div>
                                <div class="p-2">
                                    <p class="sub-text-principal">
                                        Dozer es la institución más importante en
                                        estudios e implementación BIM en todo el Perú.
                                        Somos centro autorizado de capacitación y
                                        certificación de Autodesk:</p>
                                </div>
                                <div class="p-2"><img class="img-convenios" src="uploads\system\convenios.png" alt="">
                                </div>


                            </div>



                            <div class="p-2 d-none d-md-block "><img class="width-35rem img-home-banner " src="<?= base_url() ?>uploads/system/home-banner.png" alt=""></div>

                        </div>



                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="">
        <div class="container-xl course-carousel-title titulo text-white text-center pt-5">
            <p class="fw-light titulo-uno m-0">Educación basada en proyectos reales,
                para un aprendizaje real
            </p>
            <p class="fw-light mb-5 titulo-dos">Desde 2020, hemos venido revolucionando la formación online para el sector
                de la construcción. Hemos logrado crear una innovadora oferta de educación continua
                para arquitectos, ingenieros y técnicos en construcción.</p>
            <img class="width-35rem img-home-banner py-4" src="<?= base_url() ?>uploads/system/reconocimientos_sn.png" alt="">

        </div>

        <div class="container-xl ">
            <p class="fw-light mb-5 titulo-dos text-center text-white">Conoce nuestros programas de formación profesional en BIM</p>

            <img class="w-100" src="<?= base_url() ?>uploads/system/seccioncurso.png" alt="">
        </div>

    </section>
</section>

<style>
    .wrapper {
        /* max-width: 700px;
                margin: 200px auto;
                padding: 25px 30px 30px 30px;
                border-radius: 5px;
                box-shadow: 0px 10px 15px rgba(0, 0, 0, 0.1);*/
        width: 100%;
    }



    .wrapper nav {
        position: relative;
        width: 100%;
        height: 50px;
        display: flex;
        align-items: center;
        overflow-x: scroll;
        overflow-y: hidden;
    }

    .wrapper nav label {
        display: block;
        height: 70%;
        width: 100%;
        text-align: center;
        line-height: 1.2;
        cursor: pointer;
        position: relative;
        z-index: 1;
        color: white;
        font-size: 13px;
        border-radius: 10px;
        margin: 0 5px;
        transition: all 0.3s ease;
        border: solid 1px;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 5px;
    }

    #home:checked~nav label.home,
    #blog:checked~nav label.blog,
    #code:checked~nav label.code,
    #help:checked~nav label.help,
    #about:checked~nav label.about,
    #about-uno:checked~nav label.about-uno,
    #about-dos:checked~nav label.about-dos {
        color: #131313;
        font-weight: 700;
    }

    nav label i {
        padding-right: 7px;
    }

    nav .slider {
        position: absolute;
        height: 70%;
        width: 95px;
        left: 5px;
        /*bottom: 0;*/
        z-index: 0;
        border-radius: 10px;
        background: white;
        transition: all 0.3s ease;
        color: #131313;
    }

    input[type="radio"] {
        display: none;
    }

    #blog:checked~nav .slider {
        left: 105px;
        width: 78px;
    }

    #code:checked~nav .slider {
        left: 190px;
    }

    #help:checked~nav .slider {
        left: 290px;
        width: 51px;
    }

    #about:checked~nav .slider {
        left: 350px;
        width: 110px;
    }

    #about-uno:checked~nav .slider {
        left: 465px;
        width: 113px;
    }

    #about-dos:checked~nav .slider {
        left: 581px;
        width: 60px;
    }

    section .content {
        display: none;

    }

    #home:checked~section .content-1,
    #blog:checked~section .content-2,
    #code:checked~section .content-3,
    #help:checked~section .content-4,
    #about:checked~section .content-5,
    #about-uno:checked~section .content-6,
    #about-dos:checked~section .content-7 {
        display: block;
    }

    section .content .title {
        font-size: 21px;
        font-weight: 500;
        margin: 30px 0 10px 0;
    }

    section .content p {
        text-align: justify;
    }

    @media (min-width: 576px) {
        .course-curso {
            padding: 8px 9px 5px 9px;

        }




        .nom-cur {
            font-size: 14px;
        }

        .nivel {
            font-size: 13px;
        }

        .certi {
            font-size: 13px;
        }

        .precio-desc {
            font-size: 23px;
        }

        .precio-total {}

        .descuento {}

        .btnbadge-prox {
            font-size: 10px;
            font-weight: 700;
        }


        .text-sub-cat {
            font-size: 15px;
        }

        .wrapper nav label {
            font-size: 10px;
            font-weight: 400;
            padding: 0 2px;
        }


        .wrapper nav .slider {
            width: 70px;

        }

        #blog:checked~nav .slider {
            left: 81px;
            width: 58px;
        }

        #code:checked~nav .slider {
            left: 150px;
            width: 69px;
        }

        #help:checked~nav .slider {
            left: 227px;
            width: 58px;
        }

        #about:checked~nav .slider {
            left: 292px;
            width: 82px;
        }

        #about-uno:checked~nav .slider {
            left: 379px;
            width: 83px;
        }

        #about-dos:checked~nav .slider {
            left: 472px;
            width: 58px;
        }



    }

    @media (min-width: 678px) {
        .course-curso {
            padding: 8px 9px 5px 9px;

        }

        .course-box-dos .course-details {
            padding: 8px 14px 6px 15px;

        }

        .nom-cur {
            font-size: 14px;
        }

        .nivel {
            font-size: 13px;
        }

        .certi {
            font-size: 13px;
        }

        .precio-desc {
            font-size: 23px;
        }

        .precio-total {}

        .descuento {}

        .btnbadge-prox {
            font-size: 9px;
            font-weight: 700;
        }


        .text-sub-cat {
            font-size: 15px;
        }

        .wrapper nav label {
            font-size: 12px;
            font-weight: 400;
            padding: 0 2px;
        }


        .wrapper nav .slider {
            width: 82px;

        }

        #blog:checked~nav .slider {
            left: 92px;
            width: 75px;
        }

        #code:checked~nav .slider {
            left: 177px;
            width: 83px;
        }

        #help:checked~nav .slider {
            left: 268px;
            width: 74px;
        }

        #about:checked~nav .slider {
            left: 348px;
            width: 97px;
        }

        #about-uno:checked~nav .slider {
            left: 449px;
            width: 99px;
        }

        #about-dos:checked~nav .slider {
            left: 558px;
            width: 74px;
        }



    }

    @media (min-width: 768px) {


        .wrapper nav label {
            font-size: 13px;
            font-weight: 400;
            padding: 0 2px;
        }


        .wrapper nav .slider {
            width: 91px;

        }

        #blog:checked~nav .slider {
            left: 109px;
            width: 89px;
        }

        #code:checked~nav .slider {
            left: 211px;
            width: 89px;
        }

        #help:checked~nav .slider {
            left: 312px;
            width: 90px;
        }

        #about:checked~nav .slider {
            left: 408px;
            width: 103px;
        }

        #about-uno:checked~nav .slider {
            left: 516px;
            width: 106px;
        }

        #about-dos:checked~nav .slider {
            left: 632px;
            width: 90px;
        }

        .precio-desc {
            font-size: 20px;
        }

        .precio-total {
            font-size: 15px;
            font-weight: 200;
        }

    }

    @media (min-width: 992px) {
        .wrapper nav .slider {
            width: 125px !important;

        }

        #blog:checked~nav .slider {
            left: 141px !important;
        }

        #code:checked~nav .slider {
            left: 277px !important;
        }

        #help:checked~nav .slider {
            left: 413px !important;
        }

        #about:checked~nav .slider {
            left: 550px !important;
            width: 124px !important;
        }

        #about-uno:checked~nav .slider {
            left: 686px !important;
            width: 124px !important;
        }

        #about-dos:checked~nav .slider {
            left: 822px !important;
        }
    }

    @media (min-width: 1024px) {
        .wrapper nav .slider {
            width: 129px !important;
        }

        #blog:checked~nav .slider {
            left: 146px !important;
        }

        #code:checked~nav .slider {
            left: 286px !important;
        }

        #help:checked~nav .slider {
            left: 428px !important;
        }

        #about:checked~nav .slider {
            left: 569px !important;
            width: 127px !important;
        }

        #about-uno:checked~nav .slider {
            left: 710px !important;
            width: 126px !important;
        }

        #about-dos:checked~nav .slider {
            left: 850px !important;
        }

        .wrapper nav {
            overflow-x: hidden;
            overflow-y: hidden;
        }
    }

    @media (min-width: 1200px) {
        .btnpa {
            font-size: 15pt !important;
        }

        .wrapper nav label {
            font-size: 15px !important;
        }

        .wrapper nav .slider {

            width: 145px !important;

        }

        #blog:checked~nav .slider {
            left: 163px !important;
        }

        #code:checked~nav .slider {
            left: 320px !important;
        }

        #help:checked~nav .slider {
            left: 476px !important;
        }

        #about:checked~nav .slider {
            left: 635px !important;
            width: 145px !important;
        }

        #about-uno:checked~nav .slider {
            left: 792px !important;
            width: 145px !important;
        }

        #about-dos:checked~nav .slider {
            left: 948px !important;
        }



    }

    @media (min-width: 1400px) {
        .wrapper nav .slider {
            width: 171px !important;

        }

        #blog:checked~nav .slider {
            left: 189px !important;
        }

        #code:checked~nav .slider {
            left: 373px !important;
        }

        #help:checked~nav .slider {
            left: 555px !important;
        }

        #about:checked~nav .slider {
            left: 738px !important;
            width: 170px !important;
        }

        #about-uno:checked~nav .slider {
            left: 920px !important;
            width: 170px !important;
        }

        #about-dos:checked~nav .slider {
            left: 1103px !important;
        }
    }

    @media (min-width: 1900px) {
        .wrapper nav label {
            font-size: 20px !important;
        }

        .wrapper nav .slider {
            width: 184px !important;
        }

        #blog:checked~nav .slider {
            left: 199px !important;
        }

        #code:checked~nav .slider {
            left: 395px !important;
        }

        #help:checked~nav .slider {
            left: 589px !important;
        }

        #about:checked~nav .slider {
            left: 785px !important;
            width: 179px !important;
        }

        #about-uno:checked~nav .slider {
            left: 980px !important;
            width: 180px !important;
        }

        #about-dos:checked~nav .slider {
            left: 1171px !important;
        }
    }

    @media (min-width: 2560px) {
        .wrapper nav label {
            font-size: 20px !important;
        }

        .wrapper nav .slider {
            width: 180px !important;
        }

        #blog:checked~nav .slider {
            left: 199px !important;
        }

        #code:checked~nav .slider {
            left: 395px !important;
        }

        #help:checked~nav .slider {
            left: 589px !important;
        }

        #about:checked~nav .slider {
            left: 785px !important;
            width: 179px !important;
        }

        #about-uno:checked~nav .slider {
            left: 980px !important;
            width: 180px !important;
        }

        #about-dos:checked~nav .slider {
            left: 1171px !important;
        }
    }
</style>
<section>
    <h3 class="course-carousel-title text-center mb-4 mt-5 text-cursos">
        <p class="text-titulo-cat"><?php echo site_phrase('CURSOS'); ?></p>
        <p class="text-sub-cat ">Accede a los cursos con certificaciones oficiales de Autodesk,
            <br>
            en cualquiera de las 7 categorias
        </p>
    </h3>
</section>
<section class="container-xl">
    <div class="wrapper">
        <input type="radio" name="slider" checked id="home">
        <input type="radio" name="slider" id="blog">
        <input type="radio" name="slider" id="code">
        <input type="radio" name="slider" id="help">
        <input type="radio" name="slider" id="about">
        <input type="radio" name="slider" id="about-uno">
        <input type="radio" name="slider" id="about-dos">
        <nav>
            <label for="home" class="home">Edificaciones</label>
            <label for="blog" class="blog">Estructura</label>
            <label for="code" class="code">Infraestructura</label>
            <label for="help" class="help">Getión</label>
            <label for="about-uno" class="about-uno">Automatización</label>
            <label for="about-dos" class="about-dos">Diseño CAD</label>
            <div class="slider"></div>
        </nav>
        <section>
            <div class="content content-1 ">
                <div class="container ">
                    <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
                        <div class="col-12 col-sm-6 col-md-4 col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', '<?= base_url() ?>home/course/revit-arquitectura/17');" href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="<?= base_url() ?>uploads/system/cursos/Cursos/revit-arquitectura/ra-basico.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="d-none d-sm-none d-md-none d-lg-none d-xl-block d-xxl-block">
                                            <div class="h-home">
                                                <h5 class="">Revit Arquitectura</h5>
                                                <div class="row ">
                                                    <div class="col-12">
                                                        <span class="">Nivel Basico</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white ">Certifican: Autodesk y
                                                            Dozer</span>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>

                                    </div>

                                    <div class="course-box-dos mt-1">
                                        <div class="w-100 d-flex text-dark  py-1 course-details">
                                            <div class="">
                                                <p class="price  text-white  text-right d-inline-block float-end">

                                                    <span class="precio-desc text-white">S/.79 soles</span>
                                                    <br>
                                                    <del class="text-white precio-total">S/.395 soles</del>
                                                </p> <br>
                                            </div>
                                            <div class="ms-auto">

                                                <span class="text-white fw-600 text-17px text-center descuento">80%
                                                    Dto.</span> <br>
                                                <p class="btnbadge-prox-home  ">PROXIMAMENTE</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', '<?= base_url() ?>home/course/revit-arquitectura/19');" href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="<?= base_url() ?>uploads/system/cursos/Cursos/revit-arquitectura/ra-avanzado.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="d-none d-sm-none d-md-none d-lg-none d-xl-block d-xxl-block">
                                            <div class="h-home">
                                                <h5 class="">Revit Arquitectura </h5>
                                                <div class="row ">
                                                    <div class="col-12">
                                                        <span class="">Nivel Avanzado</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white ">Certifican: Autodesk y
                                                            Dozer</span>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="course-box-dos mt-1">
                                        <div class="w-100 d-flex text-dark  py-1 course-details">
                                            <div class="">
                                                <p class="price  text-white  text-right d-inline-block float-end">

                                                    <span class="precio-desc text-white">S/.79 soles</span>
                                                    <br>
                                                    <del class="text-white precio-total ">S/.395 soles</del>
                                                </p> <br>
                                            </div>
                                            <div class="ms-auto">

                                                <span class="text-white fw-600 text-17px text-center">80%
                                                    Dto.</span> <br>
                                                <p class="btnbadge-prox-home  ">PROXIMAMENTE</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', '<?= base_url() ?>home/course/3ds-max/64');" href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="<?= base_url() ?>uploads/system/cursos/Cursos/revit-arquitectura/3DSma-basico.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="d-none d-sm-none d-md-none d-lg-none d-xl-block d-xxl-block">
                                            <div class="h-home">
                                                <h5 class="">3Ds Max</h5>
                                                <div class="row ">
                                                    <div class="col-12">
                                                        <span class="">Nivel Basico</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white ">Certifican: Autodesk y
                                                            Dozer</span>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="course-box-dos mt-1">
                                        <div class="w-100 d-flex text-dark  py-1 course-details">
                                            <div class="">
                                                <p class="price  text-white  text-right d-inline-block float-end">

                                                    <span class="precio-desc text-white">S/.79 soles</span>
                                                    <br>
                                                    <del class="text-white precio-total ">S/.395 soles</del>
                                                </p> <br>
                                            </div>
                                            <div class="ms-auto">

                                                <span class="text-white fw-600 text-17px text-center">80%
                                                    Dto.</span> <br>
                                                <p class="btnbadge-prox-home  ">PROXIMAMENTE</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', '<?= base_url() ?>home/course/3ds-max/66');" href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="<?= base_url() ?>uploads/thumbnails/course_thumbnails/course_thumbnail_default_66.jpg" alt="" class="img-fluid">
                                        </div>
                                        <div class="d-none d-sm-none d-md-none d-lg-none d-xl-block d-xxl-block">
                                            <div class="h-home">
                                                <h5 class="">3Ds Max</h5>
                                                <div class="row ">
                                                    <div class="col-12">
                                                        <span class="">Nivel Avanzado</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white ">Certifican: Autodesk y
                                                            Dozer</span>
                                                    </div>
                                                </div>
                                            </div>



                                        </div>
                                    </div>
                                    <div class="course-box-dos mt-1">
                                        <div class="w-100 d-flex text-dark  py-1 course-details">
                                            <div class="">
                                                <p class="price  text-white  text-right d-inline-block float-end">

                                                    <span class="precio-desc text-white">S/.79 soles</span>
                                                    <br>
                                                    <del class="text-white precio-total ">S/.395 soles</del>
                                                </p> <br>
                                            </div>
                                            <div class="ms-auto">

                                                <span class="text-white fw-600 text-17px text-center">80%
                                                    Dto.</span> <br>
                                                <p class="btnbadge-prox-home  ">PROXIMAMENTE</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="content content-2">
                <div class="container ">
                    <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">

                        <div class="col-12 col-sm-6 col-md-4 col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', '<?= base_url() ?>home/course/revit-estructura/21');" href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="<?= base_url() ?>uploads/system/cursos/Cursos/estructura/re-basico.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="d-none d-sm-none d-md-none d-lg-none d-xl-block d-xxl-block">
                                            <div class="h-home">
                                                <h5 class="">Revit Estructura </h5>
                                                <div class="row ">
                                                    <div class="col-12">
                                                        <span class="">Nivel Basico</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white ">Certifican: Autodesk y
                                                            Dozer</span>
                                                    </div>
                                                </div>
                                            </div>



                                        </div>
                                    </div>
                                    <div class="course-box-dos mt-1">
                                        <div class="w-100 d-flex text-dark  py-1 course-details">
                                            <div class="">
                                                <p class="price  text-white  text-right d-inline-block float-end">

                                                    <span class="precio-desc text-white">S/.79 soles</span>
                                                    <br>
                                                    <del class="text-white precio-total ">S/.395 soles</del>
                                                </p> <br>
                                            </div>
                                            <div class="ms-auto">

                                                <span class="text-white fw-600 text-17px text-center">80%
                                                    Dto.</span> <br>
                                                <p class="btnbadge-prox-home  ">PROXIMAMENTE</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', '<?= base_url() ?>home/course/revit-estructura/23');" href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="<?= base_url() ?>uploads/system/cursos/Cursos/estructura/re-avanzado.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="d-none d-sm-none d-md-none d-lg-none d-xl-block d-xxl-block">
                                            <div class="h-home">
                                                <h5 class="">Revit Estructura </h5>
                                                <div class="row ">
                                                    <div class="col-12">
                                                        <span class="">Nivel Avanzado</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white ">Certifican: Autodesk y
                                                            Dozer</span>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="course-box-dos mt-1">
                                        <div class="w-100 d-flex text-dark  py-1 course-details">
                                            <div class="">
                                                <p class="price  text-white  text-right d-inline-block float-end">

                                                    <span class="precio-desc text-white">S/.79 soles</span>
                                                    <br>
                                                    <del class="text-white precio-total ">S/.395 soles</del>
                                                </p> <br>
                                            </div>
                                            <div class="ms-auto">

                                                <span class="text-white fw-600 text-17px text-center">80%
                                                    Dto.</span> <br>
                                                <p class="btnbadge-prox-home  ">PROXIMAMENTE</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', '<?= base_url() ?>home/course/robot-structural-analysis/25');" href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="<?= base_url() ?>uploads/system/cursos/Cursos/estructura/rs-basico.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="d-none d-sm-none d-md-none d-lg-none d-xl-block d-xxl-block">
                                            <div class="h-home">
                                                <h5 class="">Robot Structural Analysis </h5>
                                                <div class="row ">
                                                    <div class="col-12">
                                                        <span class="">Nivel Basico</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white ">Certifican: Autodesk y
                                                            Dozer</span>
                                                    </div>
                                                </div>
                                            </div>



                                        </div>
                                    </div>
                                    <div class="course-box-dos mt-1">
                                        <div class="w-100 d-flex text-dark  py-1 course-details">
                                            <div class="">
                                                <p class="price  text-white  text-right d-inline-block float-end">

                                                    <span class="precio-desc text-white">S/.79 soles</span>
                                                    <br>
                                                    <del class="text-white precio-total">S/.395 soles</del>
                                                </p> <br>
                                            </div>
                                            <div class="ms-auto">

                                                <span class="text-white fw-600 text-17px text-center">80%
                                                    Dto.</span> <br>
                                                <p class="btnbadge-prox-home  ">PROXIMAMENTE</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', '<?= base_url() ?>home/course/robot-structural-analysis/27');" href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="<?= base_url() ?>uploads/system/cursos/Cursos/estructura/rs-Avanzado.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="d-none d-sm-none d-md-none d-lg-none d-xl-block d-xxl-block">
                                            <div class="h-home">
                                                <h5 class="">Robot Structural Analysis </h5>
                                                <div class="row ">
                                                    <div class="col-12">
                                                        <span class="">Nivel Avanzado</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white ">Certifican: Autodesk y
                                                            Dozer</span>
                                                    </div>
                                                </div>
                                            </div>



                                        </div>
                                    </div>
                                    <div class="course-box-dos mt-1">
                                        <div class="w-100 d-flex text-dark  py-1 course-details">
                                            <div class="">
                                                <p class="price  text-white  text-right d-inline-block float-end">

                                                    <span class="precio-desc text-white">S/.79 soles</span>
                                                    <br>
                                                    <del class="text-white precio-total">S/.395 soles</del>
                                                </p> <br>
                                            </div>
                                            <div class="ms-auto">

                                                <span class="text-white fw-600 text-17px text-center">80%
                                                    Dto.</span> <br>
                                                <p class="btnbadge-prox-home  ">PROXIMAMENTE</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', '<?= base_url() ?>home/course/advance-steel/28');" href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="<?= base_url() ?>uploads/system/cursos/Cursos/estructura/as-basico.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="d-none d-sm-none d-md-none d-lg-none d-xl-block d-xxl-block">
                                            <div class="h-home">
                                                <h5 class="">Advance Steel </h5>
                                                <div class="row ">
                                                    <div class="col-12">
                                                        <span class="">Nivel Basico</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white ">Certifican: Autodesk y
                                                            Dozer</span>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="course-box-dos mt-1">
                                        <div class="w-100 d-flex text-dark  py-1 course-details">
                                            <div class="">
                                                <p class="price  text-white  text-right d-inline-block float-end">

                                                    <span class="precio-desc text-white">S/.79 soles</span>
                                                    <br>
                                                    <del class="text-white precio-total">S/.395 soles</del>
                                                </p> <br>
                                            </div>
                                            <div class="ms-auto">

                                                <span class="text-white fw-600 text-17px text-center">80%
                                                    Dto.</span> <br>
                                                <p class="btnbadge-prox-home  ">PROXIMAMENTE</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', '<?= base_url() ?>home/course/advance-steel/30');" href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="<?= base_url() ?>uploads/system/cursos/Cursos/estructura/as-Avanzado.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="d-none d-sm-none d-md-none d-lg-none d-xl-block d-xxl-block">
                                            <div class="h-home">
                                                <h5 class="">Advance Steel </h5>
                                                <div class="row ">
                                                    <div class="col-12">
                                                        <span class="">Nivel Avanzado</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white ">Certifican: Autodesk y
                                                            Dozer</span>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="course-box-dos mt-1">
                                        <div class="w-100 d-flex text-dark  py-1 course-details">
                                            <div class="">
                                                <p class="price  text-white  text-right d-inline-block float-end">

                                                    <span class="precio-desc text-white">S/.79 soles</span>
                                                    <br>
                                                    <del class="text-white precio-total">S/.395 soles</del>
                                                </p> <br>
                                            </div>
                                            <div class="ms-auto">

                                                <span class="text-white fw-600 text-17px text-center">80%
                                                    Dto.</span> <br>
                                                <p class="btnbadge-prox-home  ">PROXIMAMENTE</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-4 col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', '<?= base_url() ?>home/course/inventor-professional/67');" href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="<?= base_url() ?>uploads/system/cursos/Cursos/estructura/ip-basico.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="d-none d-sm-none d-md-none d-lg-none d-xl-block d-xxl-block">
                                            <div class="h-home">
                                                <h5 class="">Inventor Professional </h5>
                                                <div class="row ">
                                                    <div class="col-12">
                                                        <span class="">Nivel Basico</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white ">Certifican: Autodesk y
                                                            Dozer</span>
                                                    </div>
                                                </div>
                                            </div>



                                        </div>
                                    </div>
                                    <div class="course-box-dos mt-1">
                                        <div class="w-100 d-flex text-dark  py-1 course-details">
                                            <div class="">
                                                <p class="price  text-white  text-right d-inline-block float-end">

                                                    <span class="precio-desc text-white">S/.79 soles</span>
                                                    <br>
                                                    <del class="text-white precio-total">S/.395 soles</del>
                                                </p> <br>
                                            </div>
                                            <div class="ms-auto">

                                                <span class="text-white fw-600 text-17px text-center">80%
                                                    Dto.</span> <br>
                                                <p class="btnbadge-prox-home  ">PROXIMAMENTE</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', '<?= base_url() ?>home/course/inventor-professional/69');" href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="<?= base_url() ?>uploads/system/cursos/Cursos/estructura/ip-avanzado.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="d-none d-sm-none d-md-none d-lg-none d-xl-block d-xxl-block">
                                            <div class="h-home">
                                                <h5 class="">Inventor Professional </h5>
                                                <div class="row ">
                                                    <div class="col-12">
                                                        <span class="">Nivel Avanzado</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white ">Certifican: Autodesk y
                                                            Dozer</span>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="course-box-dos mt-1">
                                        <div class="w-100 d-flex text-dark  py-1 course-details">
                                            <div class="">
                                                <p class="price  text-white  text-right d-inline-block float-end">

                                                    <span class="precio-desc text-white">S/.79 soles</span>
                                                    <br>
                                                    <del class="text-white precio-total">S/.395 soles</del>
                                                </p> <br>
                                            </div>
                                            <div class="ms-auto">

                                                <span class="text-white fw-600 text-17px text-center">80%
                                                    Dto.</span> <br>
                                                <p class="btnbadge-prox-home  ">PROXIMAMENTE</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', '<?= base_url() ?>home/course/autocad-plant-3d/70');" href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="<?= base_url() ?>uploads/system/cursos/Cursos/estructura/ap-basico.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="d-none d-sm-none d-md-none d-lg-none d-xl-block d-xxl-block">
                                            <div class="h-home">
                                                <h5 class="">AutoCAD Plant 3D</h5>
                                                <div class="row ">
                                                    <div class="col-12">
                                                        <span class="">Nivel Basico</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white ">Certifican: Autodesk y
                                                            Dozer</span>
                                                    </div>
                                                </div>
                                            </div>



                                        </div>
                                    </div>
                                    <div class="course-box-dos mt-1">
                                        <div class="w-100 d-flex text-dark  py-1 course-details">
                                            <div class="">
                                                <p class="price  text-white  text-right d-inline-block float-end">

                                                    <span class="precio-desc text-white">S/.79 soles</span>
                                                    <br>
                                                    <del class="text-white precio-total">S/.395 soles</del>
                                                </p> <br>
                                            </div>
                                            <div class="ms-auto">

                                                <span class="text-white fw-600 text-17px text-center">80%
                                                    Dto.</span> <br>
                                                <p class="btnbadge-prox-home  ">PROXIMAMENTE</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', '<?= base_url() ?>home/course/autocad-plant-3d/72');" href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="<?= base_url() ?>uploads/system/cursos/Cursos/estructura/ap-avanzado.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="d-none d-sm-none d-md-none d-lg-none d-xl-block d-xxl-block">
                                            <div class="h-home">
                                                <h5 class="">AutoCAD Plant 3D</h5>
                                                <div class="row ">
                                                    <div class="col-12">
                                                        <span class="">Nivel Avanzado</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white ">Certifican: Autodesk y
                                                            Dozer</span>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="course-box-dos mt-1">
                                        <div class="w-100 d-flex text-dark  py-1 course-details">
                                            <div class="">
                                                <p class="price  text-white  text-right d-inline-block float-end">

                                                    <span class="precio-desc text-white">S/.79 soles</span>
                                                    <br>
                                                    <del class="text-white precio-total">S/.395 soles</del>
                                                </p> <br>
                                            </div>
                                            <div class="ms-auto">

                                                <span class="text-white fw-600 text-17px text-center">80%
                                                    Dto.</span> <br>
                                                <p class="btnbadge-prox-home  ">PROXIMAMENTE</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content content-3">
                <div class="container ">
                    <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
                        <div class="col-12 col-sm-6 col-md-4 col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', '<?= base_url() ?>home/course/revit-mep/31');" href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="<?= base_url() ?>uploads/system/cursos/Cursos/instalaciones/rm-basico.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="d-none d-sm-none d-md-none d-lg-none d-xl-block d-xxl-block">
                                            <div class="h-home">
                                                <h5 class="">Revit MEP </h5>
                                                <div class="row ">
                                                    <div class="col-12">
                                                        <span class="">Nivel Basico</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white ">Certifican: Autodesk y
                                                            Dozer</span>
                                                    </div>
                                                </div>
                                            </div>



                                        </div>
                                    </div>
                                    <div class="course-box-dos mt-1">
                                        <div class="w-100 d-flex text-dark  py-1 course-details">
                                            <div class="">
                                                <p class="price  text-white  text-right d-inline-block float-end">

                                                    <span class="precio-desc text-white">S/.79 soles</span>
                                                    <br>
                                                    <del class="text-white precio-total">S/.395 soles</del>
                                                </p> <br>
                                            </div>
                                            <div class="ms-auto">

                                                <span class="text-white fw-600 text-17px text-center">80%
                                                    Dto.</span> <br>
                                                <p class="btnbadge-prox-home  ">PROXIMAMENTE</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', '<?= base_url() ?>home/course/revit-mep/33');" href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="<?= base_url() ?>uploads/system/cursos/Cursos/instalaciones/rm-avanzado.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="d-none d-sm-none d-md-none d-lg-none d-xl-block d-xxl-block">
                                            <div class="h-home">
                                                <h5 class="">Revit MEP </h5>
                                                <div class="row ">
                                                    <div class="col-12">
                                                        <span class="">Nivel Avanzado</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white ">Certifican: Autodesk y
                                                            Dozer</span>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="course-box-dos mt-1">
                                        <div class="w-100 d-flex text-dark  py-1 course-details">
                                            <div class="">
                                                <p class="price  text-white  text-right d-inline-block float-end">

                                                    <span class="precio-desc text-white">S/.79 soles</span>
                                                    <br>
                                                    <del class="text-white precio-total">S/.395 soles</del>
                                                </p> <br>
                                            </div>
                                            <div class="ms-auto">

                                                <span class="text-white fw-600 text-17px text-center">80%
                                                    Dto.</span> <br>
                                                <p class="btnbadge-prox-home  ">PROXIMAMENTE</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <div class="content content-4">
                <div class="container ">
                    <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
                        <div class="col-12 col-sm-6 col-md-4 col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', '<?= base_url() ?>home/course/autocad/35');" href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="<?= base_url() ?>uploads/system/cursos/Cursos/dibujos2D/a-basico.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="d-none d-sm-none d-md-none d-lg-none d-xl-block d-xxl-block">
                                            <div class="h-home">
                                                <h5 class="">AutoCAD </h5>
                                                <div class="row ">
                                                    <div class="col-12">
                                                        <span class="">Nivel Basico</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white ">Certifican: Autodesk y
                                                            Dozer</span>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="course-box-dos mt-1">
                                        <div class="w-100 d-flex text-dark  py-1 course-details">
                                            <div class="">
                                                <p class="price  text-white  text-right d-inline-block float-end">

                                                    <span class="precio-desc text-white">S/.79 soles</span>
                                                    <br>
                                                    <del class="text-white precio-total">S/.395 soles</del>
                                                </p> <br>
                                            </div>
                                            <div class="ms-auto">

                                                <span class="text-white fw-600 text-17px text-center">80%
                                                    Dto.</span> <br>
                                                <p class="btnbadge-prox-home  ">PROXIMAMENTE</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', '<?= base_url() ?>home/course/autocad/37');" href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="<?= base_url() ?>uploads/system/cursos/Cursos/dibujos2D/a-avanzado.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="d-none d-sm-none d-md-none d-lg-none d-xl-block d-xxl-block">
                                            <div class="h-home">
                                                <h5 class="">AutoCAD</h5>
                                                <div class="row ">
                                                    <div class="col-12">
                                                        <span class="">Nivel Avanzado</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white ">Certifican: Autodesk y
                                                            Dozer</span>
                                                    </div>
                                                </div>
                                            </div>



                                        </div>
                                    </div>
                                    <div class="course-box-dos mt-1">
                                        <div class="w-100 d-flex text-dark  py-1 course-details">
                                            <div class="">
                                                <p class="price  text-white  text-right d-inline-block float-end">

                                                    <span class="precio-desc text-white">S/.79 soles</span>
                                                    <br>
                                                    <del class="text-white precio-total">S/.395 soles</del>
                                                </p> <br>
                                            </div>
                                            <div class="ms-auto">

                                                <span class="text-white fw-600 text-17px text-center">80%
                                                    Dto.</span> <br>
                                                <p class="btnbadge-prox-home  ">PROXIMAMENTE</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content content-5">
                <div class="container ">
                    <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
                        <div class="col-12 col-sm-6 col-md-4  col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', '<?= base_url() ?>home/course/civil-3d/39');" href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="<?= base_url() ?>uploads/system/cursos/Cursos/infraestructura/c-basico.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="d-none d-sm-none d-md-none d-lg-none d-xl-block d-xxl-block">
                                            <div class="h-home">
                                                <h5 class="">Civil 3D </h5>
                                                <div class="row ">
                                                    <div class="col-12">
                                                        <span class="">Nivel Basico</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white ">Certifican: Autodesk y
                                                            Dozer</span>
                                                    </div>
                                                </div>
                                            </div>



                                        </div>
                                    </div>
                                    <div class="course-box-dos mt-1">
                                        <div class="w-100 d-flex text-dark  py-1 course-details">
                                            <div class="">
                                                <p class="price  text-white  text-right d-inline-block float-end">

                                                    <span class="precio-desc text-white">S/.79 soles</span>
                                                    <br>
                                                    <del class="text-white precio-total">S/.395 soles</del>
                                                </p> <br>
                                            </div>
                                            <div class="ms-auto">

                                                <span class="text-white fw-600 text-17px text-center">80%
                                                    Dto.</span> <br>
                                                <p class="btnbadge-prox-home  ">PROXIMAMENTE</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4  col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', '<?= base_url() ?>home/course/civil-3d/41');" href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="<?= base_url() ?>uploads/system/cursos/Cursos/infraestructura/c-avanzado.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="d-none d-sm-none d-md-none d-lg-none d-xl-block d-xxl-block">
                                            <div class="h-home">
                                                <h5 class="">Civil 3D </h5>
                                                <div class="row ">
                                                    <div class="col-12">
                                                        <span class="">Nivel Avanzado</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white ">Certifican: Autodesk y
                                                            Dozer</span>
                                                    </div>
                                                </div>
                                            </div>



                                        </div>
                                    </div>
                                    <div class="course-box-dos mt-1">
                                        <div class="w-100 d-flex text-dark  py-1 course-details">
                                            <div class="">
                                                <p class="price  text-white  text-right d-inline-block float-end">

                                                    <span class="precio-desc text-white">S/.79 soles</span>
                                                    <br>
                                                    <del class="text-white precio-total">S/.395 soles</del>
                                                </p> <br>
                                            </div>
                                            <div class="ms-auto">

                                                <span class="text-white fw-600 text-17px text-center">80%
                                                    Dto.</span> <br>
                                                <p class="btnbadge-prox-home  ">PROXIMAMENTE</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4  col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', '<?= base_url() ?>home/course/infraworks/43');" href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="<?= base_url() ?>uploads/system/cursos/Cursos/infraestructura/i-basico.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="d-none d-sm-none d-md-none d-lg-none d-xl-block d-xxl-block">
                                            <div class="h-home">
                                                <h5 class="">Infraworks</h5>
                                                <div class="row ">
                                                    <div class="col-12">
                                                        <span class="">Nivel Basico</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white ">Certifican: Autodesk y
                                                            Dozer</span>
                                                    </div>
                                                </div>
                                            </div>



                                        </div>
                                    </div>
                                    <div class="course-box-dos mt-1">
                                        <div class="w-100 d-flex text-dark  py-1 course-details">
                                            <div class="">
                                                <p class="price  text-white  text-right d-inline-block float-end">

                                                    <span class="precio-desc text-white">S/.79 soles</span>
                                                    <br>
                                                    <del class="text-white precio-total">S/.395 soles</del>
                                                </p> <br>
                                            </div>
                                            <div class="ms-auto">

                                                <span class="text-white fw-600 text-17px text-center">80%
                                                    Dto.</span> <br>
                                                <p class="btnbadge-prox-home  ">PROXIMAMENTE</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4  col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', '<?= base_url() ?>home/course/infraworks/45');" href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="<?= base_url() ?>uploads/system/cursos/Cursos/infraestructura/i-avanzado.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="d-none d-sm-none d-md-none d-lg-none d-xl-block d-xxl-block">
                                            <div class="h-home">
                                                <h5 class="">Infraworks </h5>
                                                <div class="row ">
                                                    <div class="col-12">
                                                        <span class="">Nivel Avanzado</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white ">Certifican: Autodesk y
                                                            Dozer</span>
                                                    </div>
                                                </div>
                                            </div>



                                        </div>
                                    </div>
                                    <div class="course-box-dos mt-1">
                                        <div class="w-100 d-flex text-dark  py-1 course-details">
                                            <div class="">
                                                <p class="price  text-white  text-right d-inline-block float-end">

                                                    <span class="precio-desc text-white">S/.79 soles</span>
                                                    <br>
                                                    <del class="text-white precio-total">S/.395 soles</del>
                                                </p> <br>
                                            </div>
                                            <div class="ms-auto">

                                                <span class="text-white fw-600 text-17px text-center">80%
                                                    Dto.</span> <br>
                                                <p class="btnbadge-prox-home  ">PROXIMAMENTE</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content content-6">
                <div class="container ">
                    <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
                        <div class="col-12 col-sm-6 col-md-4 col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', '<?= base_url() ?>home/course/dynamo-para-revit/46');" href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="<?= base_url() ?>uploads/system/cursos/Cursos/automatizacion/d-basico.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="d-none d-sm-none d-md-none d-lg-none d-xl-block d-xxl-block">
                                            <div class="h-home">
                                                <h5 class="">Dynamo para Revit </h5>
                                                <div class="row ">
                                                    <div class="col-12">
                                                        <span class="">Nivel Basico</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white ">Certifican: Autodesk y
                                                            Dozer</span>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="course-box-dos mt-1">
                                        <div class="w-100 d-flex text-dark  py-1 course-details">
                                            <div class="">
                                                <p class="price  text-white  text-right d-inline-block float-end">

                                                    <span class="precio-desc text-white">S/.79 soles</span>
                                                    <br>
                                                    <del class="text-white precio-total">S/.395 soles</del>
                                                </p> <br>
                                            </div>
                                            <div class="ms-auto">

                                                <span class="text-white fw-600 text-17px text-center">80%
                                                    Dto.</span> <br>
                                                <p class="btnbadge-prox-home  ">PROXIMAMENTE</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', '<?= base_url() ?>home/course/dynamo-para-revit/48');" href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="<?= base_url() ?>uploads/system/cursos/Cursos/automatizacion/d-avanzado.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="d-none d-sm-none d-md-none d-lg-none d-xl-block d-xxl-block">
                                            <div class="h-home">
                                                <h5 class="">Dynamo para Revit </h5>
                                                <div class="row ">
                                                    <div class="col-12">
                                                        <span class="">Nivel Avanzado</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white ">Certifican: Autodesk y
                                                            Dozer</span>
                                                    </div>
                                                </div>
                                            </div>



                                        </div>
                                    </div>
                                    <div class="course-box-dos mt-1">
                                        <div class="w-100 d-flex text-dark  py-1 course-details">
                                            <div class="">
                                                <p class="price  text-white  text-right d-inline-block float-end">

                                                    <span class="precio-desc text-white">S/.79 soles</span>
                                                    <br>
                                                    <del class="text-white precio-total">S/.395 soles</del>
                                                </p> <br>
                                            </div>
                                            <div class="ms-auto">

                                                <span class="text-white fw-600 text-17px text-center">80%
                                                    Dto.</span> <br>
                                                <p class="btnbadge-prox-home  ">PROXIMAMENTE</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content content-7">
                <div class="container ">
                    <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
                        <div class="col-12 col-sm-6 col-md-4 col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', '<?= base_url() ?>home/course/navisworks-manage/49');" href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="<?= base_url() ?>uploads/system/cursos/Cursos/gestion/nm-basico.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="d-none d-sm-none d-md-none d-lg-none d-xl-block d-xxl-block">
                                            <div class="h-home">
                                                <h5 class="">Navisworks Manage </h5>
                                                <div class="row ">
                                                    <div class="col-12">
                                                        <span class="">Nivel Basico</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white ">Certifican: Autodesk y
                                                            Dozer</span>
                                                    </div>
                                                </div>
                                            </div>



                                        </div>
                                    </div>
                                    <div class="course-box-dos mt-1">
                                        <div class="w-100 d-flex text-dark  py-1 course-details">
                                            <div class="">
                                                <p class="price  text-white  text-right d-inline-block float-end">

                                                    <span class="precio-desc text-white">S/.79 soles</span>
                                                    <br>
                                                    <del class="text-white precio-total">S/.395 soles</del>
                                                </p> <br>
                                            </div>
                                            <div class="ms-auto">

                                                <span class="text-white fw-600 text-17px text-center">80%
                                                    Dto.</span> <br>
                                                <p class="btnbadge-prox-home  ">PROXIMAMENTE</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', '<?= base_url() ?>home/course/navisworks-manage/51');" href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="<?= base_url() ?>uploads/system/cursos/Cursos/gestion/nm-avanzado.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="d-none d-sm-none d-md-none d-lg-none d-xl-block d-xxl-block">
                                            <div class="h-home">
                                                <h5 class="">Navisworks Manage </h5>
                                                <div class="row ">
                                                    <div class="col-12">
                                                        <span class="">Nivel Avanzado</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white ">Certifican: Autodesk y
                                                            Dozer</span>
                                                    </div>
                                                </div>
                                            </div>



                                        </div>
                                    </div>
                                    <div class="course-box-dos mt-1">
                                        <div class="w-100 d-flex text-dark  py-1 course-details">
                                            <div class="">
                                                <p class="price  text-white  text-right d-inline-block float-end">

                                                    <span class="precio-desc text-white">S/.79 soles</span>
                                                    <br>
                                                    <del class="text-white precio-total">S/.395 soles</del>
                                                </p> <br>
                                            </div>
                                            <div class="ms-auto">

                                                <span class="text-white fw-600 text-17px text-center">80%
                                                    Dto.</span> <br>
                                                <p class="btnbadge-prox-home  ">PROXIMAMENTE</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>

</section>


<!-- style especializaciones -->
<style>
    .wrapperr {
        /* max-width: 700px;
                margin: 200px auto;
                padding: 25px 30px 30px 30px;
                border-radius: 5px;
                box-shadow: 0px 10px 15px rgba(0, 0, 0, 0.1);*/
        width: 100%;
    }



    .wrapperr nav {
        position: relative;
        width: 100%;
        height: 50px;
        display: flex;
        align-items: center;
        /* justify-content: center; */
    }

    .wrapperr nav label {
        display: block;
        height: 90%;
        width: 250px;
        text-align: center;
        line-height: 1.2;
        cursor: pointer;
        position: relative;
        z-index: 1;
        color: white;
        font-size: 12px;
        border-radius: 10px;
        margin: 0 5px;
        transition: all 0.3s ease;
        border: solid 1px;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 10px;

    }



    #homee:checked~nav label.homee,
    #blogg:checked~nav label.blogg,
    #codee:checked~nav label.codee,
    #helpp:checked~nav label.helpp {
        color: #131313;
        font-weight: 700;
    }

    nav label i {
        padding-right: 7px;
    }

    nav .sliderr {
        position: absolute;
        height: 90%;
        width: 90px;
        left: 5px;
        z-index: 0;
        border-radius: 10px;
        background: white;
        transition: all 0.3s ease;
        color: #131313;
    }


    #blogg:checked~nav .sliderr {
        left: 102px;
        width: 68px;

    }

    #codee:checked~nav .sliderr {
        left: 179px;
        width: 92px;
    }




    section .contentt {
        display: none;

    }

    #homee:checked~section .content-uno,
    #blogg:checked~section .content-dos,
    #codee:checked~section .content-tres,
    #helpp:checked~section .content-cuatro {
        display: block;
    }

    section .contentt .title {
        font-size: 21px;
        font-weight: 500;
        margin: 30px 0 10px 0;
    }

    section .contentt p {
        text-align: justify;
    }



    @media (min-width: 375px) {



        nav .sliderr {
            width: 99px;
            left: 7px;

        }

        #blogg:checked~nav .sliderr {
            left: 118px;
            width: 99px;

        }

        #codee:checked~nav .sliderr {
            left: 230px;
            width: 99px;

        }


    }

    @media (min-width: 425px) {



        nav .sliderr {
            width: 115px;
            left: 7px;

        }

        #blogg:checked~nav .sliderr {
            left: 134px;
            width: 117px;

        }

        #codee:checked~nav .sliderr {
            left: 263px;
            width: 115px;

        }


    }

    @media (min-width: 576px) {

        .wrapperr nav label {
            font-size: 15px;
            font-weight: 400;
            padding: 0 2px;
        }


        .wrapperr nav .sliderr {
            width: 166px;

        }

        nav .sliderr {
            width: 223px;
            left: 7px;

        }

        #blogg:checked~nav .sliderr {
            left: 185px;
            width: 166px;

        }

        #codee:checked~nav .sliderr {
            left: 363px;
            width: 167px;

        }


    }

    @media (min-width: 678px) {

        .wrapperr nav label {
            font-size: 13px;
            font-weight: 400;
            padding: 0 2px;
        }


        .wrapperr nav .sliderr {
            width: 147px;
            left: 6px;

        }

        nav .sliderr {
            left: 15px;
            width: 156px;

        }

        #blogg:checked~nav .sliderr {
            left: 166px;
            width: 147px;

        }

        #codee:checked~nav .sliderr {
            left: 325px;
            width: 148px;

        }

        #helpp:checked~nav .sliderr {
            left: 485px;
            width: 147px;
        }
    }

    @media (min-width: 768px) {

        .wrapperr nav label {
            font-size: 15px;
            font-weight: 400;
            padding: 0 2px;
        }


        .wrapperr nav .sliderr {
            width: 231px;
            left: 6px;

        }

        nav .sliderr {
            left: 15px;
            width: 156px;

        }

        #blogg:checked~nav .sliderr {
            left: 250px;
            width: 229px;
        }

        #codee:checked~nav .sliderr {
            left: 492px;
            width: 229px;

        }


    }

    @media (min-width: 992px) {
        nav .sliderr {
            width: 248px !important;
            left: 92px !important;

        }

        #blogg:checked~nav .sliderr {
            left: 352px !important;
            width: 248px !important;

        }

        #codee:checked~nav .sliderr {
            left: 612px !important;
            width: 248px !important;

        }


    }

    @media (min-width: 1024px) {
        .wrapperr nav {

            justify-content: center !important;
        }

        nav .sliderr {
            width: 248px !important;
            left: 108px !important;
        }

        #blogg:checked~nav .sliderr {
            left: 368px !important;
            width: 248px !important;
        }

        #codee:checked~nav .sliderr {
            left: 629px !important;
            width: 248px !important;
        }
    }

    @media (min-width: 1200px) {
        nav .sliderr {
            width: 246px !important;
            left: 166px !important;

        }

        #blogg:checked~nav .sliderr {
            left: 426px !important;
            width: 248px !important;

        }

        #codee:checked~nav .sliderr {
            left: 685px !important;
            width: 250px !important;

        }



    }

    @media (min-width: 1400px) {
        nav .sliderr {
            width: 248px !important;
            left: 256px !important;

        }

        #blogg:checked~nav .sliderr {
            left: 515px !important;
            width: 250px !important;

        }

        #codee:checked~nav .sliderr {
            left: 775px !important;
            width: 250px !important;

        }


    }

    @media (min-width: 1900px) {
        nav .sliderr {
            width: 248px !important;
            left: 295px !important;

        }

        #blogg:checked~nav .sliderr {
            left: 555px !important;
            width: 250px !important;

        }

        #codee:checked~nav .sliderr {
            left: 820px !important;
            width: 240px !important;

        }


    }



    @media (min-width: 2560px) {
        .wrapperr nav label {
            font-size: 20px;

        }

        nav .sliderr {
            width: 248px !important;
            left: 295px !important;
        }

        #blogg:checked~nav .sliderr {
            left: 555px !important;
            width: 250px !important;
        }

        #codee:checked~nav .sliderr {
            left: 815px !important;
            width: 250px !important;
        }

    }
</style>
<!-- Style especializaciones -->


<section>
    <h3 class="course-carousel-title text-center mb-4 mt-5 text-cursos">
        <p class="text-titulo-cat"><?php echo site_phrase('ESPECIALIZACIONES'); ?></p>
        <p class="text-sub-cat">Accede a las especializaciones con certificaciones oficiales por el
            Colegio <br>
            de Ingenieros del Perú y Autodesk, en cualquiera de las 3 categorias
        </p>
    </h3>
</section>
<section class="container-xl">
    <div class="wrapperr">
        <input type="radio" name="sliderr" checked id="homee">
        <input type="radio" name="sliderr" id="blogg">
        <input type="radio" name="sliderr" id="codee">


        <nav>
            <label for="homee" class="homee">Especialista BIM</label>
            <label for="blogg" class="blogg">Gestión BIM</label>
            <label for="codee" class="codee">Expedientes BIM</label>


            <div class="sliderr"></div>
        </nav>
        <section>
            <div class="contentt content-uno ">
                <div class="container ">
                    <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
                        <div class="col-12 col-sm-6 col-md-4 col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', '<?= base_url() ?>home/course/modelador-bim-aplicado-a-edificaciones/1');" href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="<?= base_url() ?>uploads/system/cursos/Especialidad/modelador-BIM/uno.png" alt="" class="img-fluid">
                                        </div>
                                        <div>
                                            <div class="h-home">
                                                <h5 class="nombr-espe">Modelador BIM aplicado a Edificaciones</h5>
                                                <div class="row ">

                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white "></span>
                                                    </div>
                                                </div>
                                            </div>



                                        </div>
                                    </div>
                                    <div class="course-box-dos mt-1">
                                        <div class="w-100 d-flex text-dark  py-1 course-details">
                                            <div class="">
                                                <p class="price  text-white  text-right d-inline-block float-end">

                                                    <span class="precio-desce text-white">S/.240 soles</span>
                                                    <br>
                                                    <del class="text-white precio-total">S/.800 soles</del>
                                                </p> <br>
                                            </div>
                                            <div class="ms-auto">

                                                <span class="text-white fw-600 text-17px text-center">80%
                                                    Dto.</span> <br>
                                                <p class="btnbadge-prox-home  ">PROXIMAMENTE</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', '<?= base_url() ?>home/course/modelador-bim-aplicado-a-obras-viales/2');" href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="<?= base_url() ?>uploads/system/cursos/Especialidad/modelador-BIM/dos.png" alt="" class="img-fluid">
                                        </div>
                                        <div>
                                            <div class="h-home">
                                                <h5 class="nombr-espe">Modelador BIM aplicado a Obras Viales</h5>
                                                <div class="row ">
                                                    <div class="col-12">

                                                    </div>
                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white "></span>
                                                    </div>
                                                </div>
                                            </div>



                                        </div>
                                    </div>
                                    <div class="course-box-dos mt-1">
                                        <div class="w-100 d-flex text-dark  py-1 course-details">
                                            <div class="">
                                                <p class="price  text-white  text-right d-inline-block float-end">

                                                    <span class="precio-desce text-white">S/.240 soles</span>
                                                    <br>
                                                    <del class="text-white precio-total">S/.800 soles</del>
                                                </p> <br>
                                            </div>
                                            <div class="ms-auto">

                                                <span class="text-white fw-600 text-17px text-center">80%
                                                    Dto.</span> <br>
                                                <p class="btnbadge-prox-home  ">PROXIMAMENTE</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', '<?= base_url() ?>home/course/modelador-bim-aplicado-a-obras-hidr%C3%A1ulicas/3');" href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="<?= base_url() ?>uploads/system/cursos/Especialidad/modelador-BIM/tres.png" alt="" class="img-fluid">
                                        </div>
                                        <div>
                                            <div class="h-home">
                                                <h5 class="nombr-espe">Modelador BIM aplicado a Obras Hidráulicas</h5>
                                                <div class="row ">

                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white "></span>
                                                    </div>
                                                </div>
                                            </div>



                                        </div>
                                    </div>
                                    <div class="course-box-dos mt-1">
                                        <div class="w-100 d-flex text-dark  py-1 course-details">
                                            <div class="">
                                                <p class="price  text-white  text-right d-inline-block float-end">

                                                    <span class="precio-desce text-white">S/.240 soles</span>
                                                    <br>
                                                    <del class="text-white precio-total">S/.800 soles</del>
                                                </p> <br>
                                            </div>
                                            <div class="ms-auto">

                                                <span class="text-white fw-600 text-17px text-center">80%
                                                    Dto.</span> <br>
                                                <p class="btnbadge-prox-home  ">PROXIMAMENTE</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', '<?= base_url() ?>home/course/modelador-bim-aplicado-a-estructuras-met%C3%A1licas/4');" href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="<?= base_url() ?>uploads/system/cursos/Especialidad/modelador-BIM/cuatro.png" alt="" class="img-fluid">
                                        </div>
                                        <div>
                                            <div class="h-home">
                                                <h5 class="nombr-espe">Modelador BIM aplicado a Estructuras Metálicas
                                                </h5>
                                                <div class="row ">

                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white "></span>
                                                    </div>
                                                </div>
                                            </div>



                                        </div>
                                    </div>
                                    <div class="course-box-dos mt-1">
                                        <div class="w-100 d-flex text-dark  py-1 course-details">
                                            <div class="">
                                                <p class="price  text-white  text-right d-inline-block float-end">

                                                    <span class="precio-desce text-white">S/.240 soles</span>
                                                    <br>
                                                    <del class="text-white precio-total">S/.800 soles</del>
                                                </p> <br>
                                            </div>
                                            <div class="ms-auto">

                                                <span class="text-white fw-600 text-17px text-center">80%
                                                    Dto.</span> <br>
                                                <p class="btnbadge-prox-home  ">PROXIMAMENTE</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', '<?= base_url() ?>home/course/modelador-bim-aplicado-a-proyectos-green/74');" href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="<?= base_url() ?>uploads/system/cursos/Especialidad/modelador-BIM/cinco.png" alt="" class="img-fluid">
                                        </div>
                                        <div>
                                            <div class="h-home">
                                                <h5 class="nombr-espe">Modelador BIM aplicado a Proyectos Green</h5>

                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white "></span>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="course-box-dos mt-1">
                                        <div class="w-100 d-flex text-dark  py-1 course-details">
                                            <div class="">
                                                <p class="price  text-white  text-right d-inline-block float-end">

                                                    <span class="precio-desce text-white">S/.240 soles</span>
                                                    <br>
                                                    <del class="text-white precio-total">S/.800 soles</del>
                                                </p> <br>
                                            </div>
                                            <div class="ms-auto">

                                                <span class="text-white fw-600 text-17px text-center">80%
                                                    Dto.</span> <br>
                                                <p class="btnbadge-prox-home  ">PROXIMAMENTE</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', '<?= base_url() ?>home/course/especialista-bim-en-habilitaciones-urbanas/88');" href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="<?= base_url() ?>uploads/system/cursos/Especialidad/modelador-BIM/seis.png" alt="" class="img-fluid">
                                        </div>
                                        <div>
                                            <div class="h-home">
                                                <h5 class="nombr-espe">Especialista BIM en Habilitaciones Urbanas</h5>
                                                <div class="row ">

                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white "></span>
                                                    </div>
                                                </div>
                                            </div>



                                        </div>
                                    </div>
                                    <div class="course-box-dos mt-1">
                                        <div class="w-100 d-flex text-dark  py-1 course-details">
                                            <div class="">
                                                <p class="price  text-white  text-right d-inline-block float-end">

                                                    <span class="precio-desce text-white">S/.240 soles</span>
                                                    <br>
                                                    <del class="text-white precio-total">S/.800 soles</del>
                                                </p> <br>
                                            </div>
                                            <div class="ms-auto">

                                                <span class="text-white fw-600 text-17px text-center">80%
                                                    Dto.</span> <br>
                                                <p class="btnbadge-prox-home  ">PROXIMAMENTE</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', '<?= base_url() ?>home/course/especialista-bim-en-automatizaci%C3%B3n-de-procesos/89');" href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="<?= base_url() ?>uploads/system/cursos/Especialidad/modelador-BIM/siete.png" alt="" class="img-fluid">
                                        </div>
                                        <div>
                                            <div class="h-home">
                                                <h5 class="nombr-espe">Especialista BIM en Automatización de Procesos
                                                </h5>
                                                <div class="row ">

                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white "></span>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="course-box-dos mt-1">
                                        <div class="w-100 d-flex text-dark  py-1 course-details">
                                            <div class="">
                                                <p class="price  text-white  text-right d-inline-block float-end">

                                                    <span class="precio-desce text-white">S/.240 soles</span>
                                                    <br>
                                                    <del class="text-white precio-total">S/.800 soles</del>
                                                </p> <br>
                                            </div>
                                            <div class="ms-auto">

                                                <span class="text-white fw-600 text-17px text-center">80%
                                                    Dto.</span> <br>
                                                <p class="btnbadge-prox-home  ">PROXIMAMENTE</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="contentt content-dos">
                <div class="container ">
                    <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">

                        <div class="col-12 col-sm-6 col-md-4 col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', '<?= base_url() ?>home/course/coordinador-de-proyectos-bim/7');" href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="<?= base_url() ?>uploads/system/cursos/Especialidad/GestiondeproyectosBIM/uno.png" alt="" class="img-fluid">
                                        </div>
                                        <div>
                                            <div class="h-home">
                                                <h5 class="nombr-espe">Coordinador de Proyectos BIM</h5>
                                                <div class="row ">

                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white "></span>
                                                    </div>
                                                </div>
                                            </div>



                                        </div>
                                    </div>
                                    <div class="course-box-dos mt-1">
                                        <div class="w-100 d-flex text-dark  py-1 course-details">
                                            <div class="">
                                                <p class="price  text-white  text-right d-inline-block float-end">

                                                    <span class="precio-desce text-white">S/.240 soles</span>
                                                    <br>
                                                    <del class="text-white precio-total">S/.800 soles</del>
                                                </p> <br>
                                            </div>
                                            <div class="ms-auto">

                                                <span class="text-white fw-600 text-17px text-center">80%
                                                    Dto.</span> <br>
                                                <p class="btnbadge-prox-home  ">PROXIMAMENTE</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', '<?= base_url() ?>home/course/supervisor-de-proyectos-bim/8');" href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="<?= base_url() ?>uploads/system/cursos/Especialidad/GestiondeproyectosBIM/dos.png" alt="" class="img-fluid">
                                        </div>
                                        <div>
                                            <div class="h-home p-cp">
                                                <h5 class="nombr-espe">Supervisor de Proyectos BIM</h5>
                                                <div class="row ">

                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white "></span>
                                                    </div>
                                                </div>
                                            </div>



                                        </div>
                                    </div>
                                    <div class="course-box-dos mt-1">
                                        <div class="w-100 d-flex text-dark  py-1 course-details">
                                            <div class="">
                                                <p class="price  text-white  text-right d-inline-block float-end">

                                                    <span class="precio-desce text-white">S/.240 soles</span>
                                                    <br>
                                                    <del class="text- precio-total">S/.800 soles</del>
                                                </p> <br>
                                            </div>
                                            <div class="ms-auto">

                                                <span class="text-white fw-600 text-17px text-center">80%
                                                    Dto.</span> <br>
                                                <p class="btnbadge-prox-home  ">PROXIMAMENTE</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', '<?= base_url() ?>home/course/gestor-de-proyectos-bim/9');" href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="<?= base_url() ?>uploads/system/cursos/Especialidad/GestiondeproyectosBIM/tres.png" alt="" class="img-fluid">
                                        </div>
                                        <div>
                                            <div class="h-home p-cp">
                                                <h5 class="nombr-espe">Gestor de Proyectos BIM</h5>
                                                <div class="row ">

                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white "></span>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="course-box-dos mt-1">
                                        <div class="w-100 d-flex text-dark  py-1 course-details">
                                            <div class="">
                                                <p class="price  text-white  text-right d-inline-block float-end">

                                                    <span class="precio-desce text-white">S/.240 soles</span>
                                                    <br>
                                                    <del class="text-white precio-total">S/.800 soles</del>
                                                </p> <br>
                                            </div>
                                            <div class="ms-auto">

                                                <span class="text-white fw-600 text-17px text-center">80%
                                                    Dto.</span> <br>
                                                <p class="btnbadge-prox-home  ">PROXIMAMENTE</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', '<?= base_url() ?>home/course/planificaci%C3%B3n-y-control-de-proyectos-bim/75');" href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="<?= base_url() ?>uploads/system/cursos/Especialidad/GestiondeproyectosBIM/cuatro.png" alt="" class="img-fluid">
                                        </div>
                                        <div>
                                            <div class="h-home">
                                                <h5 class="nombr-espe">Planificación y Control de Proyectos BIM</h5>
                                                <div class="row ">

                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white "></span>
                                                    </div>
                                                </div>
                                            </div>



                                        </div>
                                    </div>
                                    <div class="course-box-dos mt-1">
                                        <div class="w-100 d-flex text-dark  py-1 course-details">
                                            <div class="">
                                                <p class="price  text-white  text-right d-inline-block float-end">

                                                    <span class="precio-desce text-white">S/.240 soles</span>
                                                    <br>
                                                    <del class="text-white precio-total">S/.800 soles</del>
                                                </p> <br>
                                            </div>
                                            <div class="ms-auto">

                                                <span class="text-white fw-600 text-17px text-center">80%
                                                    Dto.</span> <br>
                                                <p class="btnbadge-prox-home  ">PROXIMAMENTE</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', '<?= base_url() ?>home/course/gesti%C3%B3n-bim-para-el-sector-p%C3%BAblico/76');" href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="<?= base_url() ?>uploads/system/cursos/Especialidad/GestiondeproyectosBIM/cinco.png" alt="" class="img-fluid">
                                        </div>
                                        <div>
                                            <div class="h-home">
                                                <h5 class="nombr-espe">Gestión BIM para el Sector Público</h5>
                                                <div class="row ">

                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white "></span>
                                                    </div>
                                                </div>
                                            </div>



                                        </div>
                                    </div>
                                    <div class="course-box-dos mt-1">
                                        <div class="w-100 d-flex text-dark  py-1 course-details">
                                            <div class="">
                                                <p class="price  text-white  text-right d-inline-block float-end">

                                                    <span class="precio-desce text-white">S/.240 soles</span>
                                                    <br>
                                                    <del class="text-white precio-total">S/.800 soles</del>
                                                </p> <br>
                                            </div>
                                            <div class="ms-auto">

                                                <span class="text-white fw-600 text-17px text-center">80%
                                                    Dto.</span> <br>
                                                <p class="btnbadge-prox-home  ">PROXIMAMENTE</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contentt content-tres">
                <div class="container ">
                    <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
                        <div class="col-12 col-sm-6 col-md-4 col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', '<?= base_url() ?>home/course/expedientes-t%C3%A9cnicos-bim-aplicado-a-proyectos-de-infraestructrura-educativa/11');" href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="<?= base_url() ?>uploads/system/cursos/Especialidad/Expedientes-BIM/uno.png" alt="" class="img-fluid">
                                        </div>
                                        <div>
                                            <div class="h-home p-cp">
                                                <h5 class="nombr-espe">Expedientes técnicos BIM aplicado a Proyectos de
                                                    Infraestructrura educativa</h5>
                                                <div class="row ">

                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white "></span>
                                                    </div>
                                                </div>
                                            </div>



                                        </div>
                                    </div>
                                    <div class="course-box-dos mt-1">
                                        <div class="w-100 d-flex text-dark  py-1 course-details">
                                            <div class="">
                                                <p class="price  text-white  text-right d-inline-block float-end">

                                                    <span class="precio-desce text-white">S/.240 soles</span>
                                                    <br>
                                                    <del class="text-white precio-total">S/.800 soles</del>
                                                </p> <br>
                                            </div>
                                            <div class="ms-auto">

                                                <span class="text-white fw-600 text-17px text-center">80%
                                                    Dto.</span> <br>
                                                <p class="btnbadge-prox-home  ">PROXIMAMENTE</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', '<?= base_url() ?>home/course/expedientes-t%C3%A9cnicos-bim-aplicado-a-proyectos-de-infraestructrura-hospitalaria/12');" href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="<?= base_url() ?>uploads/system/cursos/Especialidad/Expedientes-BIM/dos.png" alt="" class="img-fluid">
                                        </div>
                                        <div>
                                            <div class="h-home p-cp">
                                                <h5 class="nombr-espe">Expedientes técnicos BIM aplicado a Proyectos de
                                                    Infraestructrura Hospitalaria</h5>
                                                <div class="row ">

                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white "></span>
                                                    </div>
                                                </div>
                                            </div>



                                        </div>
                                    </div>
                                    <div class="course-box-dos mt-1">
                                        <div class="w-100 d-flex text-dark  py-1 course-details">
                                            <div class="">
                                                <p class="price  text-white  text-right d-inline-block float-end">

                                                    <span class="precio-desce text-white">S/.240 soles</span>
                                                    <br>
                                                    <del class="text-white precio-total">S/.800 soles</del>
                                                </p> <br>
                                            </div>
                                            <div class="ms-auto">

                                                <span class="text-white fw-600 text-17px text-center">80%
                                                    Dto.</span> <br>
                                                <p class="btnbadge-prox-home  ">PROXIMAMENTE</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', '<?= base_url() ?>home/course/expedientes-t%C3%A9cnicos-bim-aplicado-a-proyectos-de-infraestructura-vial/13');" href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="<?= base_url() ?>uploads/system/cursos/Especialidad/Expedientes-BIM/tres.png" alt="" class="img-fluid">
                                        </div>
                                        <div>
                                            <div class="h-home p-cp">
                                                <h5 class="nombr-espe">Expedientes técnicos BIM aplicado a Proyectos de
                                                    infraestructura Vial</h5>
                                                <div class="row ">

                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white "></span>
                                                    </div>
                                                </div>
                                            </div>



                                        </div>
                                    </div>
                                    <div class="course-box-dos mt-1">
                                        <div class="w-100 d-flex text-dark  py-1 course-details">
                                            <div class="">
                                                <p class="price  text-white  text-right d-inline-block float-end">

                                                    <span class="precio-desce text-white">S/.240 soles</span>
                                                    <br>
                                                    <del class="text-white precio-total">S/.800 soles</del>
                                                </p> <br>
                                            </div>
                                            <div class="ms-auto">

                                                <span class="text-white fw-600 text-17px text-center">80%
                                                    Dto.</span> <br>
                                                <p class="btnbadge-prox-home  ">PROXIMAMENTE</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', '<?= base_url() ?>home/course/expedientes-t%C3%A9cnicos-bim-aplicado-a-proyectos-de-pavimentaci%C3%B3n-urbano-y-rural/14');" href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="<?= base_url() ?>uploads/system/cursos/Especialidad/Expedientes-BIM/cuatro.png" alt="" class="img-fluid">
                                        </div>
                                        <div>
                                            <div class="h-home">
                                                <h5 class="nombr-espe">Expedientes Técnicos BIM aplicado a Proyectos de
                                                    Pavimentación Urbano y Rural</h5>
                                                <div class="row ">

                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white "></span>
                                                    </div>
                                                </div>
                                            </div>



                                        </div>
                                    </div>
                                    <div class="course-box-dos mt-1">
                                        <div class="w-100 d-flex text-dark  py-1 course-details">
                                            <div class="">
                                                <p class="price  text-white  text-right d-inline-block float-end">

                                                    <span class="precio-desce text-white">S/.240 soles</span>
                                                    <br>
                                                    <del class="text-white precio-total">S/.800 soles</del>
                                                </p> <br>
                                            </div>
                                            <div class="ms-auto">

                                                <span class="text-white fw-600 text-17px text-center">80%
                                                    Dto.</span> <br>
                                                <p class="btnbadge-prox-home  ">PROXIMAMENTE</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', '<?= base_url() ?>home/course/expedientes-t%C3%A9cnicos-bim-aplicado-a-proyectos-de-agua-y-saneamiento-rural/15');" href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="<?= base_url() ?>uploads/system/cursos/Especialidad/Expedientes-BIM/cinco.png" alt="" class="img-fluid">
                                        </div>
                                        <div>
                                            <div class="h-home">
                                                <h5 class="nombr-espe">Expedientes técnicos BIM aplicado a proyectos de
                                                    Agua
                                                    y saneamiento Rural</h5>
                                                <div class="row ">

                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white "></span>
                                                    </div>
                                                </div>
                                            </div>



                                        </div>
                                    </div>
                                    <div class="course-box-dos mt-1">
                                        <div class="w-100 d-flex text-dark  py-1 course-details">
                                            <div class="">
                                                <p class="price  text-white  text-right d-inline-block float-end">

                                                    <span class="precio-desce text-white">S/.240 soles</span>
                                                    <br>
                                                    <del class="text-white precio-total">S/.800 soles</del>
                                                </p> <br>
                                            </div>
                                            <div class="ms-auto">

                                                <span class="text-white fw-600 text-17px text-center">80%
                                                    Dto.</span> <br>
                                                <p class="btnbadge-prox-home  ">PROXIMAMENTE</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

        </section>
    </div>

</section>

<style>
    .wrapperrr {
        /* max-width: 700px;
                margin: 200px auto;
                padding: 25px 30px 30px 30px;
                border-radius: 5px;
                box-shadow: 0px 10px 15px rgba(0, 0, 0, 0.1);*/
        width: 100%;
    }



    .wrapperrr nav {
        position: relative;
        width: 100%;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .wrapperrr nav label {
        display: block;
        height: 70%;
        width: 250px;
        text-align: center;
        line-height: 50px;
        cursor: pointer;
        position: relative;
        z-index: 1;
        color: white;
        font-size: 15px;
        border-radius: 10px;
        margin: 0 5px;
        transition: all 0.3s ease;
        border: solid 1px;
        display: flex;
        align-items: center;
        justify-content: center;
    }



    #hom:checked~nav label.hom,
    #blo:checked~nav label.blo {
        color: #131313;
        font-weight: 700;
    }

    nav label i {
        padding-right: 7px;
    }

    nav .slide {
        position: absolute;
        height: 70%;
        width: 128px;
        left: 6px;
        /* bottom: 0; */
        z-index: 0;
        border-radius: 10px;
        background: white;
        transition: all 0.3s ease;
        color: #131313;
    }


    #blo:checked~nav .slide {
        left: 147px;

    }





    section .conten {
        display: none;

    }

    #hom:checked~section .content-uno,
    #blo:checked~section .content-dos {
        display: block;
    }

    section .conten .title {
        font-size: 21px;
        font-weight: 500;
        margin: 30px 0 10px 0;
    }

    section .conten p {
        text-align: justify;
    }

    @media (min-width: 375px) {
        nav .slide {
            left: 5px !important;
            width: 157px;

        }

        #blo:checked~nav .slide {
            left: 174px !important;
            width: 155px;

        }
    }

    @media (min-width: 425px) {
        nav .slide {
            left: 5px !important;
            width: 181px;

        }

        #blo:checked~nav .slide {
            left: 174px !important;
            width: 155px;

        }
    }




    @media (min-width: 576px) {
        nav .slide {
            width: 247px;
            left: 15px;

        }

        #blo:checked~nav .slide {
            left: 275px;

        }
    }

    @media (min-width: 678px) {
        nav .slide {
            width: 247px;
            left: 65px;

        }

        #blo:checked~nav .slide {
            left: 326px;

        }
    }

    @media (min-width: 768px) {
        nav .slide {
            width: 247px;
            left: 110px !important;

        }

        #blo:checked~nav .slide {
            left: 370px !important;
            width: 248px !important;

        }
    }

    @media (min-width: 992px) {
        nav .slide {
            left: 222px !important;

        }

        #blo:checked~nav .slide {
            left: 482px !important;

        }
    }

    @media (min-width: 1024px) {
        nav .slide {
            left: 239px !important;
        }

        #blo:checked~nav .slide {
            left: 498px !important;
        }
    }

    @media (min-width: 1200px) {
        nav .slide {
            left: 295px !important;

        }

        #blo:checked~nav .slide {
            left: 555px !important;

        }
    }

    @media (min-width: 1400px) {
        nav .slide {
            left: 385px !important;
        }

        #blo:checked~nav .slide {
            left: 646px !important;

        }
    }

    @media (min-width: 1900px) {
        nav .slide {
            left: 425px !important;
        }

        #blo:checked~nav .slide {
            left: 686px !important;

        }
    }

    @media (min-width: 2560px) {
        .wrapperrr nav label {
            font-size: 20px;
        }

        nav .slide {
            left: 428px !important;
        }

        #blo:checked~nav .slide {
            left: 686px !important;
        }
    }
</style>

<section>
    <h3 class="course-carousel-title mt-5 mb-4 text-center text-cursos">
        <p class="text-titulo-cat"><?php echo site_phrase('DIPLOMADOS'); ?></p>
        <p class="text-sub-cat">Accede a las especializaciones con certificaciones oficiales por
            el Colegio <br>
            de Ingenieros del Perú y Autodesk, en cualquiera de las 2 categorias
        </p>
        <span class="header-underline-2"><?php echo site_phrase('') . '  ' . site_phrase(''); ?>
        </span>
    </h3>
</section>
<section class="container-xl">
    <div class="wrapperrr">
        <input type="radio" name="slide" checked id="hom">
        <input type="radio" name="slide" id="blo">

        <nav>
            <label for="hom" class="hom">Especialista BIM</label>
            <label for="blo" class="blo">Gestión BIM</label>


            <div class="slide"></div>
        </nav>
        <section>
            <div class="contentt content-uno ">
                <div class="container ">
                    <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
                        <div class="col-12 col-sm-6 col-md-4 col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', '<?= base_url() ?>home/course/bim-management-en-proyectos-de-arquitectura/58');" href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="<?= base_url() ?>uploads/system/cursos/diplomados/bim/uno.png" alt="" class="img-fluid">
                                        </div>
                                        <div>

                                            <div class="h-home  p-cp">
                                                <h5 class="nombr-espe">BIM Management en Proyectos de Arquitectura</h5>
                                                <div class="row ">

                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white "></span>
                                                    </div>
                                                </div>
                                            </div>



                                        </div>
                                    </div>
                                    <div class="course-box-dos mt-1">
                                        <div class="w-100 d-flex text-dark  py-1 course-details">
                                            <div class="">
                                                <p class="price  text-white  text-right d-inline-block float-end">

                                                    <span class="precio-desce text-white">S/.240 soles</span>
                                                    <br>
                                                    <del class="text-white">S/.800 soles</del>
                                                </p> <br>
                                            </div>
                                            <div class="ms-auto">

                                                <span class="text-white fw-600 text-17px text-center">80%
                                                    Dto.</span> <br>
                                                <p class="btnbadge-prox-home  ">PROXIMAMENTE</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', '<?= base_url() ?>home/course/bim-management-en-proyectos-de-urbanismo-y-paisajismo/86');" href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="<?= base_url() ?>uploads/system/cursos/diplomados/bim/dos.png" alt="" class="img-fluid">
                                        </div>
                                        <div>
                                            <div class="h-home">
                                                <h5 class="nombr-espe">BIM Management en Proyectos de Urbanismo y
                                                    Paisajismo
                                                </h5>
                                                <div class="row ">

                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white "></span>
                                                    </div>
                                                </div>
                                            </div>



                                        </div>
                                    </div>
                                    <div class="course-box-dos mt-1">
                                        <div class="w-100 d-flex text-dark  py-1 course-details">
                                            <div class="">
                                                <p class="price  text-white  text-right d-inline-block float-end">

                                                    <span class="precio-desce text-white">S/.240 soles</span>
                                                    <br>
                                                    <del class="text-white">S/.800 soles</del>
                                                </p> <br>
                                            </div>
                                            <div class="ms-auto">

                                                <span class="text-white fw-600 text-17px text-center">80%
                                                    Dto.</span> <br>
                                                <p class="btnbadge-prox-home  ">PROXIMAMENTE</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', '<?= base_url() ?>home/course/bim-management-en-proyectos-de-ingenier%C3%ADa-civil-e-infraestructura/87');" href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="<?= base_url() ?>uploads/system/cursos/diplomados/bim/tres.png" alt="" class="img-fluid">
                                        </div>
                                        <div>
                                            <div class="h-home">
                                                <h5 class="nombr-espe">BIM Management en Proyectos de Ingeniería Civil e
                                                    Infraestructura</h5>
                                                <div class="row ">

                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white "></span>
                                                    </div>
                                                </div>
                                            </div>



                                        </div>
                                    </div>
                                    <div class="course-box-dos mt-1">
                                        <div class="w-100 d-flex text-dark  py-1 course-details">
                                            <div class="">
                                                <p class="price  text-white  text-right d-inline-block float-end">

                                                    <span class="precio-desce text-white">S/.240 soles</span>
                                                    <br>
                                                    <del class="text-white">S/.800 soles</del>
                                                </p> <br>
                                            </div>
                                            <div class="ms-auto">

                                                <span class="text-white fw-600 text-17px text-center">80%
                                                    Dto.</span> <br>
                                                <p class="btnbadge-prox-home  ">PROXIMAMENTE</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="contentt content-dos">
                <div class="container ">
                    <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">

                        <div class="col-12 col-sm-6 col-md-4 col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', '<?= base_url() ?>home/course/ingenier%C3%ADa-en-edificaciones-aplicado-al-dise%C3%B1o-supervisi%C3%B3n-construcci%C3%B3n-de-colegios-y-hospitales/83');" href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="<?= base_url() ?>uploads/system/cursos/diplomados/IC/uno.png" alt="" class="img-fluid">
                                        </div>
                                        <div>
                                            <div class="h-home">
                                                <h5 class="nombr-espe">Ingeniería en Edificaciones Aplicado al Diseño,
                                                    Supervisión, Construcción de Colegios y Hospitales</h5>
                                                <div class="row ">

                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white "></span>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="course-box-dos mt-1">
                                        <div class="w-100 d-flex text-dark  py-1 course-details">
                                            <div class="">
                                                <p class="price  text-white  text-right d-inline-block float-end">

                                                    <span class="precio-desce text-white">S/.240 soles</span>
                                                    <br>
                                                    <del class="text-white">S/.800 soles</del>
                                                </p> <br>
                                            </div>
                                            <div class="ms-auto">

                                                <span class="text-white fw-600 text-17px text-center">80%
                                                    Dto.</span> <br>
                                                <p class="btnbadge-prox-home  ">PROXIMAMENTE</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', '<?= base_url() ?>home/course/ingenier%C3%ADa-vial-aplicado-al-dise%C3%B1o-construcci%C3%B3n-supervisi%C3%B3n-de-carreteras-pavimentos-y-puentes/84');" href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="<?= base_url() ?>uploads/system/cursos/diplomados/IC/dos.png" alt="" class="img-fluid">
                                        </div>
                                        <div>
                                            <div class="h-home">
                                                <h5 class="nombr-espe">Ingeniería Vial Aplicado al Diseño, Construcción,
                                                    Supervisión de Carreteras, Pavimentos y Puentes</h5>
                                                <div class="row ">

                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white "></span>
                                                    </div>
                                                </div>
                                            </div>



                                        </div>
                                    </div>
                                    <div class="course-box-dos mt-1">
                                        <div class="w-100 d-flex text-dark  py-1 course-details">
                                            <div class="">
                                                <p class="price  text-white  text-right d-inline-block float-end">

                                                    <span class="precio-desce text-white">S/.240 soles</span>
                                                    <br>
                                                    <del class="text-white">S/.800 soles</del>
                                                </p> <br>
                                            </div>
                                            <div class="ms-auto">

                                                <span class="text-white fw-600 text-17px text-center">80%
                                                    Dto.</span> <br>
                                                <p class="btnbadge-prox-home  ">PROXIMAMENTE</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', '<?= base_url() ?>home/course/ingenier%C3%ADa-hidr%C3%A1ulica-aplicado-al-dise%C3%B1o-de-redes-de-abastecimiento-de-agua-potable-y-alcantarillado/85');" href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="<?= base_url() ?>uploads/system/cursos/diplomados/IC/trs.png" alt="" class="img-fluid">
                                        </div>
                                        <div>
                                            <div class="h-home">
                                                <h5 class="nombr-espe">Ingeniería Hidráulica aplicado al Diseño de Redes
                                                    de
                                                    Abastecimiento de Agua Potable y Alcantarillado</h5>
                                                <div class="row ">

                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white "></span>
                                                    </div>
                                                </div>
                                            </div>



                                        </div>
                                    </div>
                                    <div class="course-box-dos mt-1">
                                        <div class="w-100 d-flex text-dark  py-1 course-details">
                                            <div class="">
                                                <p class="price  text-white  text-right d-inline-block float-end">

                                                    <span class="precio-desce text-white">S/.240 soles</span>
                                                    <br>
                                                    <del class="text-white">S/.800 soles</del>
                                                </p> <br>
                                            </div>
                                            <div class="ms-auto">

                                                <span class="text-white fw-600 text-17px text-center">80%
                                                    Dto.</span> <br>
                                                <p class="btnbadge-prox-home  ">PROXIMAMENTE</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>

</section>



<?php $top_instructor_ids = $this->crud_model->get_top_instructor(10); ?>
<?php if (count($top_instructor_ids) > 0) : ?>

<?php endif; ?>


<?php $latest_blogs = $this->crud_model->get_latest_blogs(3); ?>
<?php if (get_frontend_settings('blog_visibility_on_the_home_page') && $latest_blogs->num_rows() > 0) : ?>

<?php endif; ?>

<!-- Programa Dozer -->

<!-- Programa Dozer -->

<!-- Docente Dozer -->

<!-- Docente Dozer -->

<!-- Certificate Dozer -->
<section>
    <div class="container-xl">
        <h3 class="course-carousel-title text-center mb-4 mt-5 ">
            <p class="text-section">Aprende de los expertos en el área BIM
            </p>
            <p class="text-sub-cat"> Nos tomamos muy enserio la calidad educativa en Instituto Dozer, por ello contamos
                con los mejores profesionales del sector construcción </p>

        </h3>

        <img class="w-100" src="<?= base_url() ?>uploads/system/docentes.png" alt="">
    </div>

</section>
<!-- Certificate Dozer -->

<!-- Verificador de Certificado Dozer -->
<section class=" home-banner-area mt-3">
    <div class="container-xl p-3 ">
        <h3 class="course-carousel-title text-center ">
            <p style="
    font-weight: 400;
" style="font-weight: 500 !important;" class="text-section">Acreditación Internacional que <br>
                aseguran una educación de calidad</p>
            <p class="text-sub-cat p-2"> Instituto Dozer dispone de un Sistema de Gestión de Calidad que ha sido evaluado y certificado de <br>
                acuerdo a la Norma ISO 9001:2015 y de un Sistema de Gestión para Organizaciones Educativas que ha sido evaluado <br>
                y certificado de acuerdo a la Norma ISO 21001:2018</p>
            

        </h3>
    </div>
</section>
<!-- Verificador de Certificado Dozer -->

<!-- Conoce mas de Dozer-->

<!-- Conoce mas de Dozer-->

<!-- Testimonios -->
<section>
    <div class="container-xl">

        <p style="
    font-weight: 400;
" class="text-section text-center pt-5 pb-2 ">¿Que dicen nuestros estudiantes? </p>

        <p class="text-sub-cat text-center  pb-2"> Hemos potenciado el talento de más de 9,000 estudiantes y profesionales <br>
de 15 países en toda latinoamerica

</p>

        <img class="w-100 pb-3" src="<?= base_url() ?>uploads/system/testimoniosss.png" alt="">
    </div>
   


</section>
<!-- Testimonios -->
<!-- Nunca Pares de Aprender-->

<!-- Nunca Pares de Aprender -->



<script type="text/javascript">
    function handleWishList(elem) {

        $.ajax({
            url: '<?php echo site_url('home/handleWishList'); ?>',
            type: 'POST',
            data: {
                course_id: elem.id
            },
            success: function(response) {
                if (!response) {
                    window.location.replace("<?php echo site_url('login'); ?>");
                } else {
                    if ($(elem).hasClass('active')) {
                        $(elem).removeClass('active')
                    } else {
                        $(elem).addClass('active')
                    }
                    $('#wishlist_items').html(response);
                }
            }
        });
    }

    function handleCartItems(elem) {
        url1 = '<?php echo site_url('home/handleCartItems'); ?>';
        url2 = '<?php echo site_url('home/refreshWishList'); ?>';
        $.ajax({
            url: url1,
            type: 'POST',
            data: {
                course_id: elem.id
            },
            success: function(response) {
                $('#cart_items').html(response);
                if ($(elem).hasClass('addedToCart')) {
                    $('.big-cart-button-' + elem.id).removeClass('addedToCart')
                    $('.big-cart-button-' + elem.id).text(
                        "<?php echo site_phrase('add_to_cart'); ?>");
                } else {
                    $('.big-cart-button-' + elem.id).addClass('addedToCart')
                    $('.big-cart-button-' + elem.id).text(
                        "<?php echo site_phrase('added_to_cart'); ?>");
                }
                $.ajax({
                    url: url2,
                    type: 'POST',
                    success: function(response) {
                        $('#wishlist_items').html(response);
                    }
                });
            }
        });
    }

    function handleEnrolledButton() {
        $.ajax({
            url: '<?php echo site_url('home/isLoggedIn'); ?>',
            success: function(response) {
                if (!response) {
                    window.location.replace("<?php echo site_url('login'); ?>");
                }
            }
        });
    }

    $(document).ready(function() {
        if (!/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(
                navigator
                .userAgent)) {
            if ($(window).width() >= 840) {
                $('a.has-popover').webuiPopover({
                    trigger: 'hover',
                    animation: 'pop',
                    placement: 'horizontal',
                    delay: {
                        show: 500,
                        hide: null
                    },
                    width: 330
                });
            } else {
                $('a.has-popover').webuiPopover({
                    trigger: 'hover',
                    animation: 'pop',
                    placement: 'vertical',
                    delay: {
                        show: 100,
                        hide: null
                    },
                    width: 335
                });
            }
        }

        if ($(".course-carousel")[0]) {
            $(".course-carousel").slick({
                dots: false,
                infinite: false,
                speed: 300,
                slidesToShow: 4,
                slidesToScroll: 4,
                swipe: false,
                touchMove: false,
                responsive: [{
                        breakpoint: 840,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                        },
                    },
                    {
                        breakpoint: 620,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2,
                        },
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                        },
                    },
                ],
            });
        }

        if ($(".top-istructor-slick")[0]) {
            $(".top-istructor-slick").slick({
                dots: false
            });
        }
    });
</script>