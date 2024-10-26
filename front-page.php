<?php /* Template Name: Index
*/ ?>
<?php get_header(); ?>

<section id="prestation">

    <h3 class="titlePresta"> Prestations proposées</h3>
    <div class="container">
        <div class="square">
            <h4 class="titleh4">1. Accompagnement administratif personnalisé</h4>
            <p class="text1">Les démarches administratives peuvent être complexes et fastidieuses. Je vous accompagne dans toutes vos démarches, de la constitution de dossiers à la prise de rendez-vous, en passant par l'accompagnement physique à vos rendez-vous, notamment en Île-de-France.

            <p class="tache">&#10003; Aide à la déclaration et suivi des obligations fiscales.</p>
            <p class="tache">&#10003; Gestion et suivi de vos factures. </p>
            <p class="tache"> &#10003; Organisation de vos rendez-vous professionnels et personnels. </p>
            <p class="tache"> &#10003; Aide à la constitution de dossiers administratifs divers (travail, logement, prêt immobilier) </p>
            <p class="tache"> &#10003; Organisation de réservations (hôtels, transports, etc.). </p>
        </div>

        <div class="square">
            <h4 class="titleh4">2. Coaching professionnel</h4>
            <p class="text1">Besoin de conseils pour décrocher un emploi ou évoluer dans votre carrière ? Je vous propose un coaching personnalisé, du début de votre recherche d’emploi jusqu’à la préparation de vos entretiens d’embauche.</p>
            <p class="tache">&#10003; Création de CV et de lettres de motivation sur-mesure</p>
            <p class="tache">&#10003; Préparation aux entretiens d’embauche </p>
            <p class="tache"> &#10003; Suivi personnalisé pour vous aider à surmonter les obstacles dans votre parcours professionnel </p>
        </div>

        <div class="square">
            <h4 class="titleh4">3. Services de traduction et interprétation</h4>
            <p class="text1">Avec une maîtrise parfaite du Dari, Farsi, Persan et Anglais, je propose des services de traduction écrite et orale pour faciliter vos communications officielles ou personnelles.</p>
            <P class="tache">&#10003; Traduction de documents administratifs, professionnels ou personnels</P>
            <P class="tache">&#10003; Service d’interprétation pour vos rendez-vous professionnels</P>
        </div>

    </div>
</section>


<section id="pourqui">
    <h3 class="titlePourqui"> A qui s'adresse mes services ?</h3>


    <p class="text2">Mes services d'accompagnement administratif personnalisé sont conçus pour répondre aux besoins variés des particuliers et des professionnels.</p>
    <div class="containerGrey">
        <div class="squareGrey">
            <p class="textPourqui"> Que vous soyez en quête d'une aide pour vos démarches administratives, la gestion de vos finances, ou un accompagnement personnalisé pour vos projets, je suis là pour vous simplifier la vie. Je vous guide à chaque étape, que ce soit pour la constitution de dossiers, la préparation de vos rendez-vous, ou la gestion de votre correspondance.</p>
            <p class="textPourqui">En tant qu'entrepreneur ou dirigeant, vous savez combien il est crucial de vous concentrer sur votre cœur de métier. Je vous propose des services sur mesure pour optimiser votre gestion administrative. Qu'il s'agisse de la préparation de dossiers, de la gestion de votre facturation, ou de l'organisation de vos rendez-vous, je vous offre un soutien adapté pour vous permettre de gagner du temps et de l'efficacité.</p>
        </div>
    </div>


</section>




<section id="apropos">
    <h3 class="titleApropos"> Qui suis-je ?</h3>
    <div class="containerApropos">
        <div class="imagePropos">
            <img class="img" src="<?php echo get_template_directory_uri() . '/assets/img/apropos.jpg'; ?>" alt="a propos">
        </div>
        <div class="txtApropos">

            <p class="para"> Forte d'une expérience solide dans l'assistanat administratif depuis plus de 15 ans, je propose aujourd’hui mes services en tant que consultante en démarches administratives et coach. Passionnée par l’accompagnement des personnes, je me spécialise dans la gestion de dossiers complexes et les conseils personnalisés pour vous aider à surmonter les difficultés administratives ou professionnelles.

                J’interviens dans toute la France à distance, et je me déplace en Île-de-France pour des rendez-vous en personne. Mon objectif ? Vous offrir un service clé en main, afin que vous puissiez vous concentrer sur ce qui compte vraiment pour vous, en me laissant gérer les aspects complexes de vos démarches.
            </p>
        </div>
    </div>
</section>


<section id="contact">
    <h3 class="titleContact"> CONTACTEZ MOI </h3>
    <p class="textContact"> Prêt à simplifier vos démarches ou à bénéficier d'un coaching personnalisé ? Contactez-moi dès aujourd'hui pour discuter de vos besoins et obtenir un devis </p>
    <div class="form">
        <div class="containerCordonnée">
            <p class="mail"> <i class="fa-solid fa-envelope"></i> ssconsultingcontact@gmail.com</p>
            <p class="tel"> <i class="fa-solid fa-phone"></i> 0646684799</p>
        </div>
        <div class="contForm">
            <?php echo do_shortcode('[wpforms id="11" title="false"]'); ?>
        </div>
    </div>
</section>


<?php get_footer(); ?>