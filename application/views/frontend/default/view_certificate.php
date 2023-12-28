<section>
    <div class="container-lg">
        <div class="row">
            <div class="col-lg-12 col-md-6 mt-5">
                <h4 class="text-white" style="font-weight: 400 !important;">Certificado Otorgado a: <f style="color:yellow;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $certificate[0]->first_name . " " . $certificate[0]->last_name ?></f>
                </h4>
            </div>
            <div class="col-lg-6 col-md-6 d-flex align-items-center">
                <img class="bg-dark img-fluid" id="img-certificate" src="<?= base_url('uploads/certificates/' . $certificate[0]->link) ?>" alt="">
            </div>
            <div class="col-lg-6 col-md-6 my-2 d-flex align-items-center">
                <div class="course-carousel-title text-center mb-4 mt-3 text-cursos">
                    <!-- Alerta de Bootstrap oculta por defecto -->
                    <div class="alert alert-success alert-dismissible fade" id="miAlerta" role="alert">
                        ¡URL copiada!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <p class="text-titulo-cat">¡Muchas Felicidades!
                    </p> <br>
                    <p class="text-sub-cat">Comparte tus logros con tu familia, amigos, empleadores y la comunidad.
                    </p> <br>
                    <div class="d-flex flex-row align-items-center text-white">
                        <div class="p-2 col-lg-6"><strong>Compártelo</strong> </div>

                        <div class="p-2 ">
                            <a href="https://www.facebook.com/sharer.php?u=<?= base_url("certificado/" . $certificate[0]->code_certificate); ?>" class="btn-hover" target="_blank" rel="noopener noreferrer">
                                <svg xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <style>
                                        svg {
                                            fill: #ffffff
                                        }
                                    </style>
                                    <path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z" />
                                </svg>
                            </a>
                        </div>
                        <div class="p-2 ">
                            <a href="" id="twitter_btn" class="btn-hover">
                                <svg xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <style>
                                        svg {
                                            fill: #ffffff
                                        }
                                    </style>
                                    <path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z" />
                                </svg>
                            </a>

                        </div>
                        <div class="p-2 ">
                            <a href="" id="linkedinShare" class="btn-hover">
                                <svg xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <style>
                                        svg {
                                            fill: #ffffff
                                        }
                                    </style>
                                    <path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z" />
                                </svg>
                            </a>

                        </div>
                        <div class="p-2 ">
                            <a href="" id="whatsappShare" class="btn-hover">
                                <svg xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <style>
                                        svg {
                                            fill: #ffffff
                                        }
                                    </style>
                                    <path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
                                </svg>
                            </a>

                        </div>
                        <div class="p-2 ">
                            <a href="" class="btn-hover" id="clipboard">
                                <svg xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <style>
                                        svg {
                                            fill: #ffffff
                                        }
                                    </style>
                                    <path d="M160 0c-23.7 0-44.4 12.9-55.4 32H48C21.5 32 0 53.5 0 80V400c0 26.5 21.5 48 48 48H192V176c0-44.2 35.8-80 80-80h48V80c0-26.5-21.5-48-48-48H215.4C204.4 12.9 183.7 0 160 0zM272 128c-26.5 0-48 21.5-48 48V448v16c0 26.5 21.5 48 48 48H464c26.5 0 48-21.5 48-48V256H416c-17.7 0-32-14.3-32-32V128H320 272zM160 40a24 24 0 1 1 0 48 24 24 0 1 1 0-48zm256 88v96h96l-96-96z" />
                                </svg>
                            </a>

                        </div>
                    </div><br>
                    <div class="d-block mt-3">
                        <a href="javascript:void(0)" class=" btn-programa d-inline-block btn-hover py-1" id="generatePDF">Descargar Certificado <i class="fa fa-download" style="color: #000000;"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const generatePDFBtn = document.getElementById('generatePDF');

        // Función para copiar la URL al portapapeles
        function handleClick(event) {
            event.preventDefault();
            // Obtiene la URL actual
            var urlActual = window.location.href;

            // Crea un área de texto temporal para copiar el contenido
            var areaDeTextoTemporal = document.createElement("  ");
            areaDeTextoTemporal.value = urlActual;

            // Añade el área de texto temporal al DOM
            document.body.appendChild(areaDeTextoTemporal);

            // Selecciona y copia el contenido del área de texto
            areaDeTextoTemporal.select();
            document.execCommand("copy");

            // Elimina el área de texto temporal del DOM
            document.body.removeChild(areaDeTextoTemporal);

            // Puedes agregar mensajes o acciones adicionales después de copiar

            // Muestra la alerta de Bootstrap
            toastr.options = {
                closeButton: true,
                progressBar: true,
                positionClass: 'toast-bottom-center',
                preventDuplicates: true,
            };
            toastr.success('¡URL Copiado!');
        }



        function changeOGTags() {
            // Nuevos valores
            var newTitle = "<?= $certificate[0]->first_name . " " . $certificate[0]->last_name . " - " . $certificate[0]->title; ?>";
            var newImageURL = "<?= base_url("uploads/certificates/" . $certificate[0]->link); ?>";
            var newDescription = "<?= "¡Aprobé el Curso de " . $certificate[0]->title; ?>";

            // Seleccionar los meta tags y actualizar sus contenidos
            var ogTitleTag = document.querySelector('meta[property="og:title"]');
            var ogImageTag = document.querySelector('meta[property="og:image"]');
            var ogDescriptionTag = document.querySelector('meta[property="og:description"]');

            var twTitleTag = document.querySelector('meta[property="twitter:title"]');
            var twImageTag = document.querySelector('meta[property="twitter:image"]');
            var twDescriptionTag = document.querySelector('meta[property="twitter:description"]');

            ogTitleTag.setAttribute("content", newTitle);
            twTitleTag.setAttribute("content", newTitle);

            ogImageTag.setAttribute("content", newImageURL);
            twImageTag.setAttribute("content", newImageURL);

            ogDescriptionTag.setAttribute("content", newDescription);
            twDescriptionTag.setAttribute("content", newDescription);
        }

        async function delayedExecution() {
            // Esperar 1 segundo (puedes ajustar el tiempo según tus necesidades)
            await new Promise(resolve => setTimeout(resolve, 1000));

            // Llamar a la función changeOGTags después de la espera
            changeOGTags();
        }

        // Llamar a la función delayedExecution usando async/await
        async function runWithDelay() {
            try {
                await delayedExecution();
                console.log("La función changeOGTags se ejecutó después del tiempo de espera.");
            } catch (error) {
                console.error("Error al ejecutar la función changeOGTags:", error);
            }
        }

        // Llamar a la función principal
        runWithDelay();

        function twitterClick(event) {
            event.preventDefault();
            // Obtiene la URL actual
            var urlToShare = window.location.href;
            var newDescription = "<?= "¡Aprobé el Curso de " . $certificate[0]->title; ?>";

            var twitterShareUrl = 'https://twitter.com/intent/tweet?url=' + encodeURIComponent(urlToShare) + '&text=' + encodeURIComponent(newDescription);

            window.open(twitterShareUrl, '_blank');
        }

        function linkedIn(event) {
            var urlToShare = window.location.href;

            var linkedInShareUrl = 'https://www.linkedin.com/sharing/share-offsite/?url=' + encodeURIComponent(urlToShare);

            window.open(linkedInShareUrl, '_blank');
        }

        function whatsappClick(event) {
            event.preventDefault();
            // Obtiene la URL actual
            var urlToShare = window.location.href;
            var textToShare = "<?= "¡Aprobé el Curso de " . $certificate[0]->title; ?>";

            var whatsappShareUrl = 'https://api.whatsapp.com/send?text=' + encodeURIComponent(textToShare + ' ' + urlToShare);

            window.open(whatsappShareUrl, '_blank');
        }

        function generatePDF() {
            // Get the image
            const image = document.getElementById('img-certificate');
            const name_doc = "<?= "Certificado_" . $certificate[0]->code_certificate . ".pdf" ?>";

            // Calcula las dimensiones del PDF a partir de la relación de aspecto de la imagen
            const aspectRatio = image.width / image.height;
            const pdfWidth = 210; // Ancho del PDF en mm (puedes ajustarl"o según tus necesidades)
            const pdfHeight = pdfWidth / aspectRatio;

            // Crea una instancia de jsPDF con las dimensiones calculadas
            const pdf = new window.jspdf.jsPDF({
                orientation: "landscape",
                unit: 'mm',
                format: [pdfWidth, pdfHeight]
            });
            // Agrega la imagen al PDF
            pdf.addImage(image.src, 'JPEG', 0, 0, pdfWidth, pdfHeight);
            // Save the PDF as a downloadable file
            pdf.save(name_doc);
        }
        changeOGTags();
        // Agrega un evento de clic al enlace para activar la función de copia
        document.getElementById("clipboard").addEventListener("click", handleClick);
        document.getElementById("twitter_btn").addEventListener("click", twitterClick);
        document.getElementById('linkedinShare').addEventListener('click', linkedIn);
        document.getElementById('whatsappShare').addEventListener('click', whatsappClick);
        generatePDFBtn.addEventListener('click', generatePDF);
    });
</script>