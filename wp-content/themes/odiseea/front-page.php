<?php get_header(); ?>

<div class="homeOptions">
    <div class="homeOptionsWrapper container">
        <?php
        // Define the items with corresponding SVGs and texts
        $items = array(
            array(
                'text' => "Centru de Educatie",
                'svg' => '<svg width="26px" height="26px" aria-hidden="true" class="e-font-icon-svg e-fas-child" viewBox="0 0 384 512" xmlns="http://www.w3.org/2000/svg">
                            <path d="M120 72c0-39.765 32.235-72 72-72s72 32.235 72 72c0 39.764-32.235 72-72 72s-72-32.236-72-72zm254.627 1.373c-12.496-12.497-32.758-12.497-45.254 0L242.745 160H141.254L54.627 73.373c-12.496-12.497-32.758-12.497-45.254 0-12.497 12.497-12.497 32.758 0 45.255L104 213.254V480c0 17.673 14.327 32 32 32h16c17.673 0 32-14.327 32-32V368h16v112c0 17.673 14.327 32 32 32h16c17.673 0 32-14.327 32-32V213.254l94.627-94.627c12.497-12.497 12.497-32.757 0-45.254z" fill="#284e95"></path>
                        </svg>'
            ),
            array(
                'text' => "Transport Optional",
                'svg' => '<svg width="26px" height="26px" aria-hidden="true" class="e-font-icon-svg e-fas-shuttle-van" viewBox="0 0 640 512" xmlns="http://www.w3.org/2000/svg">
                            <path d="M628.88 210.65L494.39 49.27A48.01 48.01 0 0 0 457.52 32H32C14.33 32 0 46.33 0 64v288c0 17.67 14.33 32 32 32h32c0 53.02 42.98 96 96 96s96-42.98 96-96h128c0 53.02 42.98 96 96 96s96-42.98 96-96h32c17.67 0 32-14.33 32-32V241.38c0-11.23-3.94-22.1-11.12-30.73zM64 192V96h96v96H64zm96 240c-26.51 0-48-21.49-48-48s21.49-48 48-48 48 21.49 48 48-21.49 48-48 48zm160-240h-96V96h96v96zm160 240c-26.51 0-48-21.49-48-48s21.49-48 48-48 48 21.49 48 48-21.49 48-48 48zm-96-240V96h66.02l80 96H384z" fill="#284e95"></path>
                        </svg>'
            ),
            array(
                'text' => "Activitati Optionale",
                'svg' => '<svg width="26px" height="26px" aria-hidden="true" class="e-font-icon-svg e-fas-robot" viewBox="0 0 640 512" xmlns="http://www.w3.org/2000/svg"><path d="M32,224H64V416H32A31.96166,31.96166,0,0,1,0,384V256A31.96166,31.96166,0,0,1,32,224Zm512-48V448a64.06328,64.06328,0,0,1-64,64H160a64.06328,64.06328,0,0,1-64-64V176a79.974,79.974,0,0,1,80-80H288V32a32,32,0,0,1,64,0V96H464A79.974,79.974,0,0,1,544,176ZM264,256a40,40,0,1,0-40,40A39.997,39.997,0,0,0,264,256Zm-8,128H192v32h64Zm96,0H288v32h64ZM456,256a40,40,0,1,0-40,40A39.997,39.997,0,0,0,456,256Zm-8,128H384v32h64ZM640,256V384a31.96166,31.96166,0,0,1-32,32H576V224h32A31.96166,31.96166,0,0,1,640,256Z" fill="#284e95"></path></svg>'
            ),
            array(
                'text' => "Cursuri de Engleza",
                'svg' => '<svg width="26px" height="26px" aria-hidden="true" class="e-font-icon-svg e-fas-book-open" viewBox="0 0 576 512" xmlns="http://www.w3.org/2000/svg"><path d="M542.22 32.05c-54.8 3.11-163.72 14.43-230.96 55.59-4.64 2.84-7.27 7.89-7.27 13.17v363.87c0 11.55 12.63 18.85 23.28 13.49 69.18-34.82 169.23-44.32 218.7-46.92 16.89-.89 30.02-14.43 30.02-30.66V62.75c.01-17.71-15.35-31.74-33.77-30.7zM264.73 87.64C197.5 46.48 88.58 35.17 33.78 32.05 15.36 31.01 0 45.04 0 62.75V400.6c0 16.24 13.13 29.78 30.02 30.66 49.49 2.6 149.59 12.11 218.77 46.95 10.62 5.35 23.21-1.94 23.21-13.46V100.63c0-5.29-2.62-10.14-7.27-12.99z" fill="#284e95"></path></svg>'
            ),
        );

        // Loop to generate each item with corresponding SVG and text
        foreach ($items as $item) : ?>
            <div class="homeOptionsWrapper_itemGroup">
                <div class="homeOptionsWrapper_itemGroup_itemImg">
                    <?php echo $item['svg']; ?>
                </div>
                <div class="homeOptionsWrapper_itemGroup_itemText">
                    <?php echo $item['text']; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<div class="homeAfterSchool">
    <div class="homeAfterSchoolWrapper container">
        <div class="homeAfterSchoolWrapper_title">
            Odiseea After-School
        </div>
        <div class="homeAfterSchoolWrapper_line"></div>
        <div class="homeAfterSchoolWrapper_contentGroup">
            <div class="homeAfterSchoolWrapper_contentGroup_left">
                <p>
                    Într-un ritm alert al vieții cotidiene, unde orele de muncă ale părinților se suprapun adesea peste orele de sfârșit de școală ale copiilor, rolul unui after-school devine extrem de important în susținerea și îndrumarea celor mici. La Odiseea After-School ne dedicăm construirii unui spațiu nu doar pentru învatare, ci și pentru dezvoltare și bucurie.
                </p>

                <ul>
                    <li>
                        <svg width="18px" height="18px" aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                            <path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z" fill="#284e95"></path>
                        </svg>
                        <div>
                            Susținere și îndrumare în rezolvarea temelor
                        </div>
                    </li>
                    <li>
                        <svg width="18px" height="18px" aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                            <path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z" fill="#284e95"></path>
                        </svg>
                        <div>
                            Oportunitatea de a învăța lucruri noi
                        </div>
                    </li>
                    <li>
                        <svg width="18px" height="18px" aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                            <path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z" fill="#284e95"></path>
                        </svg>
                        <div>
                            Activități de recreere într-un cadru familiar, prietenos, plin de afecțiune
                        </div>
                    </li>
                </ul>
            </div>

            <div class="homeAfterSchoolWrapper_contentGroup_right">
                <img width="530" height="560" loading="lazy" src='<?php echo get_template_directory_uri() ?>/assets/img/afterSchool.jpg'></img>
            </div>
        </div>
    </div>
</div>

<div class="homeAboutUs">
    <div class="homeAboutUsWrapper container">
        <div class="homeAboutUsWrapper_title">
            Despre Noi
        </div>
        <div class="homeAboutUsWrapper_line"></div>
        <a class="homeAboutUsWrapper_link" href="<?php echo get_permalink(get_page_by_path('despre')) ?>">
            <button class="homeAboutUsWrapper_btn">
                Mai Departe...
            </button>
        </a>
        <div class="homeAboutUsWrapper_text">
            La Odiseea After School fiecare zi este un angajament față de binele și fericirea copilului dumneavoastră, un loc unde este nu doar bine îngrijit, ci și iubit, înțeles și susținut să își atingă potențialul maxim.
        </div>
    </div>
</div>

<div class="homeVideo">
    <div class="homeVideoWrapper container">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/XHOmBV4js_E?start=6" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</div>

<div class="homeWhyUs">
    <div class="homeWhyUsWrapper container">
        <div class="homeWhyUsWrapperCards">
            <div class="homeWhyUsWrapperCards_left">
                <div class="homeWhyUsWrapperCards_left_card">
                    <div class="homeWhyUsWrapperCards_left_card_title">
                        Parteneriatul care inspiră succesul la Afterschool-ul Odiseea
                    </div>
                    <div class="homeWhyUsWrapperCards_left_card_text">
                        La Odiseea, credem în forța unei comunități unite prin pasiune și dedicare. Echipa noastră este compusă din oameni remarcabili, pasionați de educație, dornici să își împărtășească experiența și plăcerea de a contribui la dezvoltarea tinerelor minți. Fiecare invatator, educator, cu dragoste și pasiune, se dedică sprijinirii copiilor în parcursul lor educațional.
                    </div>
                    <div class="homeWhyUsWrapperCards_left_card_img">
                        <img width="340" height="340" loading="lazy" src='<?php echo get_template_directory_uri() ?>/assets/img/whyUs.jpg'></img>
                    </div>
                </div>
            </div>

            <div class="homeWhyUsWrapperCards_center">
                <div class="homeWhyUsWrapperCards_center_card">
                    <div class="homeWhyUsWrapperCards_center_card_icon icon_blue_dark">
                        <svg width="26px" height="26px" aria-hidden="true" class="e-font-icon-svg e-fas-thumbs-up" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                            <path d="M104 224H24c-13.255 0-24 10.745-24 24v240c0 13.255 10.745 24 24 24h80c13.255 0 24-10.745 24-24V248c0-13.255-10.745-24-24-24zM64 472c-13.255 0-24-10.745-24-24s10.745-24 24-24 24 10.745 24 24-10.745 24-24 24zM384 81.452c0 42.416-25.97 66.208-33.277 94.548h101.723c33.397 0 59.397 27.746 59.553 58.098.084 17.938-7.546 37.249-19.439 49.197l-.11.11c9.836 23.337 8.237 56.037-9.308 79.469 8.681 25.895-.069 57.704-16.382 74.757 4.298 17.598 2.244 32.575-6.148 44.632C440.202 511.587 389.616 512 346.839 512l-2.845-.001c-48.287-.017-87.806-17.598-119.56-31.725-15.957-7.099-36.821-15.887-52.651-16.178-6.54-.12-11.783-5.457-11.783-11.998v-213.77c0-3.2 1.282-6.271 3.558-8.521 39.614-39.144 56.648-80.587 89.117-113.111 14.804-14.832 20.188-37.236 25.393-58.902C282.515 39.293 291.817 0 312 0c24 0 72 8 72 81.452z" fill="#FFFFFF"></path>
                        </svg>
                    </div>
                    <div class="homeWhyUsWrapperCards_center_card_title">
                        Specialiștii noștri
                    </div>
                    <div class="homeWhyUsWrapperCards_center_card_text">
                        <p>
                            Specialiștii noștri pun un accent deosebit pe învățarea remedială, abordând cu grijă și atenție acoperirea oricăror lacune în procesul de învățare formală.
                        </p>
                        <p>
                            Ne asigurăm că fiecare copil își construiește cunoștințele pe o bază solidă și durabilă, într-un mediu care încurajează curiozitatea și descoperirea.
                        </p>
                    </div>
                </div>

                <!-- <div class="homeWhyUsWrapperCards_center_card">
                    <div class="homeWhyUsWrapperCards_center_card_icon icon_blue_light">
                        <svg width="26px" height="26px" aria-hidden="true" class="e-font-icon-svg e-fas-tablet-alt" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                            <path d="M400 0H48C21.5 0 0 21.5 0 48v416c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V48c0-26.5-21.5-48-48-48zM224 480c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32zm176-108c0 6.6-5.4 12-12 12H60c-6.6 0-12-5.4-12-12V60c0-6.6 5.4-12 12-12h328c6.6 0 12 5.4 12 12v312z" fill="#FFFFFF"></path>
                        </svg>
                    </div>
                    <div class="homeWhyUsWrapperCards_center_card_title">
                        Suport Scoala OnLine
                    </div>
                    <div class="homeWhyUsWrapperCards_center_card_text">
                        Oferim suport pentru efectuarea orelor de curs in mediul OnLine.
                    </div>
                </div> -->
            </div>

            <div class="homeWhyUsWrapperCards_center">
                <div class="homeWhyUsWrapperCards_center_card">
                    <div class="homeWhyUsWrapperCards_center_card_icon icon_blue_light">
                        <svg width="26px" height="26px" aria-hidden="true" class="e-font-icon-svg e-fas-book-open" viewBox="0 0 576 512" xmlns="http://www.w3.org/2000/svg">
                            <path d="M542.22 32.05c-54.8 3.11-163.72 14.43-230.96 55.59-4.64 2.84-7.27 7.89-7.27 13.17v363.87c0 11.55 12.63 18.85 23.28 13.49 69.18-34.82 169.23-44.32 218.7-46.92 16.89-.89 30.02-14.43 30.02-30.66V62.75c.01-17.71-15.35-31.74-33.77-30.7zM264.73 87.64C197.5 46.48 88.58 35.17 33.78 32.05 15.36 31.01 0 45.04 0 62.75V400.6c0 16.24 13.13 29.78 30.02 30.66 49.49 2.6 149.59 12.11 218.77 46.95 10.62 5.35 23.21-1.94 23.21-13.46V100.63c0-5.29-2.62-10.14-7.27-12.99z" fill="#FFFFFF"></path>
                        </svg>
                    </div>
                    <div class="homeWhyUsWrapperCards_center_card_title">
                        Colaborarea cu părinții
                    </div>
                    <div class="homeWhyUsWrapperCards_center_card_text">
                        <p>
                            Colaborarea strânsă cu părinții este un pilon esențial al succesului nostru.
                        </p>
                        <p>
                            La sfârșitul fiecărei luni, cadrele didactice se întâlnesc cu părinții pentru a evalua progresele elevilor, sărbătorind fiecare realizare și planificând împreună pașii următori. Aceste întâlniri sunt momente-cheie, construind un parteneriat educațional solid între școală și familie.
                        </p>
                        <p>
                            La Afterschool-ul Odiseea, fiecare zi este o oportunitate de a învăța și de a crește împreună. Vă invităm să vă alăturați comunității noastre, unde educația se transformă într-o călătorie fascinantă și plină de realizări.
                        </p>
                    </div>
                </div>

                <!-- <div class="homeWhyUsWrapperCards_center_card">
                    <div class="homeWhyUsWrapperCards_center_card_icon icon_blue_dark">
                        <svg width="26px" height="26px" aria-hidden="true" class="e-font-icon-svg e-fas-shuttle-van" viewBox="0 0 640 512" xmlns="http://www.w3.org/2000/svg">
                            <path d="M628.88 210.65L494.39 49.27A48.01 48.01 0 0 0 457.52 32H32C14.33 32 0 46.33 0 64v288c0 17.67 14.33 32 32 32h32c0 53.02 42.98 96 96 96s96-42.98 96-96h128c0 53.02 42.98 96 96 96s96-42.98 96-96h32c17.67 0 32-14.33 32-32V241.38c0-11.23-3.94-22.1-11.12-30.73zM64 192V96h96v96H64zm96 240c-26.51 0-48-21.49-48-48s21.49-48 48-48 48 21.49 48 48-21.49 48-48 48zm160-240h-96V96h96v96zm160 240c-26.51 0-48-21.49-48-48s21.49-48 48-48 48 21.49 48 48-21.49 48-48 48zm-96-240V96h66.02l80 96H384z" fill="#FFFFFF"></path>
                        </svg>
                    </div>
                    <div class="homeWhyUsWrapperCards_center_card_title">
                        Transport Optional
                    </div>
                    <div class="homeWhyUsWrapperCards_center_card_text">
                        Transportul copiilor la școală sau de la școală este asigurat la cerere,prin intermediul autovehiculelor destinate acestui scop.
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</div>

<div class="homeParents">
    <div class="homeParentsWrapper container">
        <div class="homeParentsWrapper_title">
            Ce spun Parintii despre Sunshine Kids
        </div>

        <div class="homeParentsWrapper_line"></div>

        <div class="homeParentsWrapper_cards">
            <?php
            // Array cu testimonialele părinților
            $testimonials = array(
                array(
                    'text' => 'Un loc potrivit pentru petrecerea timpului după terminarea orelor de curs. Fetița noastră este foarte încântată de atmosfera de aici, și-a făcut prieteni, participă cu entuziasm la activitățile propuse...',
                    'name' => 'Dana Amza',
                    'image' => get_template_directory_uri() . '/assets/img/profile.png'
                ),
                array(
                    'text' => 'Pozitiv: Calitate, Comunicare, Profesionalism, Valoare Aici găsești Oameni cărora le poți încredința cele mai prețioase persoane din viata noastră',
                    'name' => 'Georgiana Serban',
                    'image' => get_template_directory_uri() . '/assets/img/profile.png'
                ),
                array(
                    'text' => 'Personal calificat, serios, implicat și entuziast. Disponibilitate pentru desfășurarea cursurilor școlare online. Activități variate și educative ... totul super! Recomand cu drag!',
                    'name' => 'Corina Ghita',
                    'image' => get_template_directory_uri() . '/assets/img/profile.png'
                )
            );

            // Afișează testimonialele
            foreach ($testimonials as $testimonial) {
                echo '<div class="homeParentsWrapper_cards_card">';
                echo '<div class="homeParentsWrapper_cards_card_text">' . $testimonial['text'] . '</div>';
                echo '<div class="homeParentsWrapper_cards_card_icon">';
                echo '<img width="60" height="60" loading="lazy" src="' . $testimonial['image'] . '"></img>';
                echo '</div>';
                echo '<div class="homeParentsWrapper_cards_card_name">' . $testimonial['name'] . '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </div>
</div>

<div class="homeCallNow">
    <div class="homeCallNowWrapper container">

        <div class="homeCallNowWrapper_left">
            <div class="homeCallNowWrapper_left_title">
                Crezi ca se potriveste nevoilor tale?
            </div>
            <div class="homeCallNowWrapper_left_subtitle">
                <strong>Suna Acum. </strong>sau foloseste formularul de contact
            </div>
        </div>

        <div class="homeCallNowWrapper_right">
            <div class="homeCallNowWrapper_right_phone">
                <a class="homeCallNowWrapper_right_phone_link" href="tel:0726347332">
                    <span>0726347332</span>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="homeMaps">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d91114.81029161593!2d26.074935306163447!3d44.4672477274051!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sro!2sro!4v1724545367292!5m2!1sro!2sro" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>