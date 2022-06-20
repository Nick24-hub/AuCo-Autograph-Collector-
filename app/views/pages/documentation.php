<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <!-- <link rel="icon" href="../Poze/logo.png" type="image/x-icon" sizes="16x16"> -->
    <title><?php echo SITENAME ?></title>

</head>

<body>
    <article>
        <header>
            <h1><?php echo SITENAME ?> - Scholarly HTML Report</h1>
        </header>
        <div role=" contentinfo">
            <ol role="directory">
                <li>
                    <a href="#1">

                        Introduction
                    </a>
                </li>
                <li>
                    <a href="#2">

                        Overall Description
                    </a>
                </li>
                <li>
                    <a href="#3">

                        External Interface Requirements
                    </a>
                </li>
                <li>
                    <a href="#4">

                        System Features
                    </a>
                </li>
            </ol>
        </div>
        <div role="contentinfo" id="1">
            <section role="doc-introduction">
                <h2>1. Introduction</h2>
                <section>
                    <h3>1.1 Purpose</h3>
                    <p>Acest document a fost creat pentru a descrie proiectul <?php echo SITENAME ?> , din cadrul materiei Tehnologii Web.
                    </p>
                </section>
                <section>
                    <h3>1.2 Document Conventions</h3>
                    <p>Formatul acestui document este <a href="https://w3c.github.io/scholarly-html/">Scholarly
                            HTML</a>, construit conform specificatiilor precizate in macheta <a href="https://github.com/rick4470/IEEE-SRS-Tempate">IEEE System Requirements Specification
                            Template</a> .
                    <div></div>
                    <div></div>
                </section>
                <section>
                    <h3>1.3 Intended Audience and Reading Suggestions </h3>
                    <p>Audienta tinta a aplicatiei noastre este alcatuita , in principal , de persoanele care vor sa isi expuna si sa tranzactioneze autografe din propria colectie.</p>
                </section>
                <section>
                    <h3>1.4 Product Scope</h3>
                    <p>Scopul aplicatiei este de a oferi utilizatorului un inventar cu produse pe care le poate gestiona ,iar prin intermediul unui cont acesta poate vinde si achizitiona produsele altor utilizatori.

                    </p>
                </section>
                <section role="doc-bibliography">
                    <h3>1.5 References</h3>
                    <p>Pentru a construi aplicatia noastra , am folosit informatii din urmatoarea lista de pagini WEB : </p>
                    <ul>
                        <li><a href="https://css-tricks.com">https://css-tricks.com</a></li>
                        <li><a href="https://stackoverflow.com">https://stackoverflow.com</a></li>
                        <li><a href="https://www.w3schools.com">https://www.w3schools.com</a></li>
                        <li><a href="https://github.com/PHPMailer/PHPMailer">https://github.com/PHPMailer/PHPMailer</a></li>

                        <li><a href="https://www.youtube.com">https://www.youtube.com</a></li>
                        <li><a href="https://www.ebay.com/">https://www.ebay.com/</a></li>
                        <li>Google Image Search sau Amazon , pentru fiecare poza sau informatie despre produse din proiect.</li>
                    </ul>
                </section>
            </section>
            <section id="2">
                <h2>
                    2. Overall Description
                </h2>
                <section>
                    <h3>
                        2.1 Product perspective
                    </h3>
                    <p>
                        <!-- descriere a site-ului-->
                    </p>
                    <figure typeof="sa:image">
                        <img src="<?php echo URLROOT ?>\public\img\Application_Diagram.png" style="width: 1200px;">
                        <figcaption>Fig. 1 - Application Diagram</figcaption>
                    </figure>
                    <!-- diagramele-->
                </section>
                <section>
                    <h3>
                        2.2 Product functions
                    </h3>
                    <ul>
                        <li>
                            Register
                        </li>
                        <li>
                            Login
                        </li>
                        <li>View all items in gallery</li>
                        <li>See item's information</li>
                        <li>
                            Add to Cart
                        </li>
                        <li>Delete from Cart</li>
                        <li>Purchase in cart items</li>
                        <li>Add items to inventory</li>
                        <li>Edit items from inventory</li>
                        <li>Delete items from inventory</li>
                        <li>Sort using sorting categories</li>
                        <li>View items as RSS format</li>
                        <li>Download items as CSV</li>
                        <li>Edit account information</li>
                        <li>Change account password</li>
                        <li>Admin account to delete or edit user accounts</li>
                    </ul>
                </section>
                <section>
                    <h3>
                        2.3 User Classes and Characteristics
                    </h3>
                    <p>
                        <?php echo SITENAME ?> este o platforma care ofera utilizatorilor un inventar cu produse pe care le poate gestiona ,iar prin intermediul unui cont acesta poate vinde si achizitiona produsele altor utilizatori.
                    </p>
                </section>
                <section>
                    <h3>
                        2.4 Operating Environment
                    </h3>
                    <p>
                        Site-ul este functional pe toate tipurile de browserse Microsoft Internet Explorer, Mozilla Firefox, Google Chrome, Apple's Safari, and Opera, atat pe telefoane, tabletele si laptop-uri.
                    </p>
                </section>
                <section>
                    <h3>
                        2.5 Design and Implementation Constraints
                    </h3>
                    <p>
                        In momentul de fata nu avem o modalitate prin care utilizatorii pot lasa comentarii si review-uri produsel expuse.
                    </p>
                </section>
                <section>
                    <h3>
                        2.6 User Documentation
                    </h3>
                    <p> Instruirea utilizatorului se va face prin intermediului ghidului oferit de echipa <?php echo SITENAME ?>.</p>
                </section>
                <section>
                    <h3>
                        2.7 Assumptions and Dependencies
                    </h3>
                    <p>
                        Anumite poze, scripturi si baza de date folosite sunt stocate local.
                    </p>
                </section>
            </section>
            <section role="presentation" id="3">
                <h2>
                    3. External Interface Requirements
                </h2>
                <h3>
                    3.1 User Interfaces
                </h3>
                <p> In cele ce urmeaza, voi prezenta fiecare interfata a aplicatiei cu utilizatorul! </p>

                <h4> 3.1.1 Log in Page </h4>
                <p>
                    Pagina Log in reprezinta interfata de logare a utilizatorului pe platforma, cu scopul de a accesa anumite functionalitati aplicatiei.
                    Pe langa field-urile Username si Password (de tip text, respectiv password) mai exista si butonul de Sign Up, care va redirecta userul catre formularul de register!
                    In final, butonul de Submit, care va incerca logarea cu datele furnizate in field-uri!
                </p>

                <h4> 3.1.2 Sign Up Modal</h4>
                <p>
                    Modalul de Sign up reprezinta locul in care se poate crea un nou cont in baza de date a aplicatiei. Se cere furnizarea de catre utilizator a unui username, a unei parole, o adresa de e-mail, precum si un nume si un prenume.
                    Pentru a continua trebuie sa apese pe butonul de Register.
                    Daca acesta in schimb apasa pe butonul de Login, va fi redirectionat inapoi la Login.
                </p>
                <figure typeof="sa:image">
                    <img src="<?php echo URLROOT ?>\public\img\Screenshot (54).png" style="width: 650px;">
                    <figcaption>Fig. 1 - Register</figcaption>
                </figure>
                <br>
                <figure typeof="sa:image">
                    <img src="<?php echo URLROOT ?>\public\img\Screenshot (55).png" style="width: 650px;">
                    <figcaption>Fig. 2 - Login</figcaption>
                </figure>
                <br>

                <h4> 3.1.3 Home Page</h4>
                <p>
                    Aceasta pagina are rolul de a intampina orice utilizator.
                </p>
                <figure typeof="sa:image">
                    <img src="<?php echo URLROOT ?>\public\img\Screenshot (56).png" style="width: 650px;">
                    <figcaption>Fig. 1 - Home Page</figcaption>
                </figure>
                <br>
                <figure typeof="sa:image">
                    <img src="<?php echo URLROOT ?>\public\img\Screenshot (57).png" style="width: 650px;">
                    <figcaption>Fig. 2 - Home Page</figcaption>
                </figure>
                <br>
                <figure typeof="sa:image">
                    <img src="<?php echo URLROOT ?>\public\img\Screenshot (58).png" style="width: 650px;">
                    <figcaption>Fig. 3 - Home Page</figcaption>
                </figure>
                <br>
                <figure typeof="sa:image">
                    <img src="<?php echo URLROOT ?>\public\img\Screenshot (59).png" style="width: 650px;">
                    <figcaption>Fig. 4 - Home Page</figcaption>
                </figure>
                <br>
                <figure typeof="sa:image">
                    <img src="<?php echo URLROOT ?>\public\img\Screenshot (60).png" style="width: 650px;">
                    <figcaption>Fig. 5 - Home Page</figcaption>
                </figure>
                <br>
                <h4> 3.1.4 Gallery Page</h4>
                <p>Dupa cum se poate observa in Fig. 1, utilizatorul are la dispozitie mai multe filtre pentru a sorta produsele si butoanele pentru a se misca de pe o pagina pe alta.</p>
                <figure typeof="sa:image">
                    <img src="<?php echo URLROOT ?>\public\img\Screenshot (61).png" style="width: 650px;">
                    <figcaption>Fig. 1 - Gallery filters</figcaption>
                </figure>
                <br>
                <figure typeof="sa:image">
                    <img src="<?php echo URLROOT ?>\public\img\Screenshot (62).png" style="width: 650px;">
                    <figcaption>Fig. 2 - Gallery</figcaption>
                </figure>
                <br>
                <p>Dupa selectarea unui filtru.</p>
                <figure typeof="sa:image">
                    <img src="<?php echo URLROOT ?>\public\img\Screenshot (77).png" style="width: 650px;">
                    <figcaption>Fig. 3 - Filtered</figcaption>
                </figure>
                <br>
                <p>Pagina unui produs.
                    Butonul Add to Cart: Va insera in cart produsul respectiv cat si cantitatea selectata.</p>
                <figure typeof="sa:image">
                    <img src="<?php echo URLROOT ?>\public\img\Screenshot (72).png" style="width: 650px;">
                    <figcaption>Fig. 1 - Product</figcaption>
                </figure>
                <figure typeof="sa:image">
                    <img src="<?php echo URLROOT ?>\public\img\Screenshot (73).png" style="width: 650px;">
                    <figcaption>Fig. 2 - Product</figcaption>
                </figure>
                <h4> 3.1.5 Cart Page</h4>
                <p>
                    Putem observa functionalitatile cosului.
                </p>
                <figure typeof="sa:image">
                    <img src="<?php echo URLROOT ?>\public\img\Screenshot (74).png" style="width: 650px;">
                    <figcaption>Fig. 1 - Cart</figcaption>
                </figure>

                <h4> 3.1.6 Inventory page</h4>
                <p>
                    Aici utilizatorul isi poate gestiona colectia de autografe.
                </p>
                <figure typeof="sa:image">
                    <img src="<?php echo URLROOT ?>\public\img\Screenshot (69).png" style="width: 650px;">
                    <figcaption>Fig.1 - Inventory</figcaption>
                </figure>
                <h4> 3.1.7 Edit item page</h4>
                <p>
                    Aici utilizatorul poate modifica datele unui produs.
                </p>
                <figure typeof="sa:image">
                    <img src="<?php echo URLROOT ?>\public\img\Screenshot (70).png" style="width: 650px;">
                    <figcaption>Fig.1 - Edit item</figcaption>
                </figure>
                <figure typeof="sa:image">
                    <img src="<?php echo URLROOT ?>\public\img\Screenshot (71).png" style="width: 650px;">
                    <figcaption>Fig.2 - Edit item</figcaption>
                </figure>
                <h4> 3.1.8 Add item page</h4>
                <p>
                    Pagina pentru adaugare de produse in inventar.
                </p>
                <figure typeof="sa:image">
                    <img src="<?php echo URLROOT ?>\public\img\Screenshot (64).png" style="width: 650px;">
                    <figcaption>Fig.1 - Add item</figcaption>
                </figure>

                <figure typeof="sa:image">
                    <img src="<?php echo URLROOT ?>\public\img\Screenshot (65).png" style="width: 650px;">
                    <figcaption>Fig.2 - Add item</figcaption>
                </figure>

                <figure typeof="sa:image">
                    <img src="<?php echo URLROOT ?>\public\img\Screenshot (66).png" style="width: 650px;">
                    <figcaption>Fig.3 - Add item</figcaption>
                </figure>

                <h4> 3.1.9 My accout page</h4>
                <p>
                    Pagina pentru editarea informatiilor contului.
                </p>

                <figure typeof="sa:image">
                    <img src="<?php echo URLROOT ?>\public\img\Screenshot (75).png" style="width: 650px;">
                    <figcaption>Fig.1 - My account </figcaption>
                </figure>

                <h3>
                    3.2 Hardware Interfaces
                </h3>
                <h4>
                    3.2.1 Browser Interaction
                </h4>
                <p>
                    Interactiunea cu diferitele tipuri de browser este aceeasi in fiecare caz.
                    Versiunea cea mai stabila este Google Chrome (browser-ul folosit de noi pentru debug), insa continutul ar trebui sa fie afisat in aceeasi maniera pentru fiecare tip de browser!
                </p>
                <h4>
                    3.2.2 Devices Interaction
                </h4>
                <p>
                    Atunci cand am proiectat paginile, cu ajutorul optiunilor "Inspect Element" din browserul Chrome, am incercat pe cat posibil sa implementam elementele in asa fel incat sa se vada bine pe orice tip de device (fie smartphone, tableta, laptop, 4K)!<br> Iata cateva exemple, pentru pagina de Index, pe unele tipuri de display!
                </p>
                <h3>
                    3.3 Software Interfaces
                </h3>
                <a>Pentru implementarea Back-End a proiectului nostru, ne-am folosit de platforma XAMPP pentru a face legatura intre baza de date si aplicatie. Astfel am creat sase tabele pe care le voi enumera mai jos.</a>

                <h3>
                    3.4 Communications Interfaces
                </h3>
                <p>
                    Pentru a accesa si a utiliza datele, am folosit request-uri HTTP(GET si POST).Am folosit apeluri $_GET pentru a extrage diferite informatii din baza de date si le-am gestionat astfel incat sa fie afisate in modul dorit.
                </p>
            </section>
            <section role="doc-introduction" id="4">
                <h2>4. System Features</h2>
                <section>

                    <h3>4.1 Vacaru Stefan Robert's Contributions</h3>

                    <h5>Front-End</h5>
                    <dl>
                        <dt>- Account page</dt>
                        <dt>- Gallery page</dt>
                        <dt>- Contact page</dt>
                        <dt>- Cart page</dt>
                        <dt>- Admin edit accounts page</dt>
                    </dl>
                    <h5>Back-End</h5>
                    <dl>
                        <dt>-MVC core structure</dt>
                        <dd>-Register & login</dd>
                        <dt>-Filters</dt>
                        <dt>-Cart controller&model</dt>
                        <dt>-Delete from inventory</dt>
                        <dt>- Admin & edit accounts</dt>
                    </dl>

                    <h3>4.2 Alexandrescu Nicolae's Contributions</h3>

                    <h5>Front-End</h5>
                    <dl>
                        <dt>- Home page</dt>
                        <dt>- Product details page</dt>
                        <dt>-My inventory page</dt>
                        <dt>-Edit product page</dt>
                        <dt>-Add product page</dt>
                        <dt>-My account page</dt>
                        <dt>-View products as RSS page</dt>
                    </dl>
                    <h5>Back-End</h5>
                    <dl>
                        <dt>-Gallery page</dt>
                        <dt>-Product details</dt>
                        <dt>-My inventory page</dt>
                        <dt>-Edit product page</dt>
                        <dt>-Add product functionality</dt>
                        <dt>-Edit my account funtionality</dt>
                        <dt>-View products as RSS and CSV</dt>
                    </dl>


                </section>
            </section>
        </div>
    </article>
</body>

</html>