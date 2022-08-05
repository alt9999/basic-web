<?php

	session_start();
	
	if (!isset($_SESSION['zalogowany'])){
		header('Location: login.php');
		exit();
	}
	
?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <meta charset="UTF-8"> 
    <title>Home - Filmowo</title>
</head>




  


<body>


<a href="index.php"><div class="header"><img src="zdj/logo.png" >  <div class="dropdown"></a>
            <div class="dropbtn">Rodzaje filmów ▼</div>
            <div class="dropdown-content">
            <a href="#" class="category" onclick="category('anime')">Anime</a>
            <a href="#" class="category" onclick="category('dokumentalne')">Dokumentalne</a>
            <a href="#" class="category" onclick="category('fantasy')">Fantasy</a>
            <a href="#" class="category" onclick="category('horrory')">Horrory</a>
            <a href="#" class="category" onclick="category('kino_akcji')">Kino akcji</a>
            <a href="#" class="category" onclick="category('komedie')">Komedie</a>
            <a href="#" class="category" onclick="category('kryminalne')">Kryminalne</a>
            <a href="#" class="category" onclick="category('romantyczne')">Romantyczne</a>
            <a href="#" class="category" onclick="category('science_fiction')">Science fiction</a>
            </div>
          </div>
   <button class="prawo"><a href="logout.php">Wyloguj</a></button>
  
 </div><br>


<div class="film-plecy category-container">
<h1 class="tekst">Na czasie</h1>
  <div class="film" id="1"></div>
  <div class="film" id="2"></div>
  <div class="film" id="3"></div>
  <div class="film" id="4"></div>
  <div class="film" id="5"></div>
</div>
  <div class="tekst">
  

 
  </div>
  <div class="film-plecy category-container"> 
  <h1 class="tekst">Co nowego?</h1>
  <div class="film" id="6"></div>
  <div class="film" id="7"></div>
  <div class="film" id="8"></div>
  <div class="film" id="9"></div>
  </div>





<div class="category-container" category="dokumentalne">
<h1 class="tekst">Dokumentalne</h1>

<a class="film" href="film.php?zdj=zdj/Ikar.webp&tytul=Ikar&opis=Amerykański kolarz bada aferę dopingową, w którą uwikłany jest rosyjski naukowiec - demaskator numer jeden na celowniku Putina.&rezyser=Bryan Fogel&data_premiery= 20 stycznia 2017 (świat)"><img src="zdj/Ikar.webp" height="100%"></a>
<a class="film" href="film.php?zdj=zdj/Jackass_3D.webp&tytul=Jackass 3D&opis= 3 razy śmieszniej, 3 razy głupiej, 3 razy boleśniej. Chłopaki z Jackass wracają z najdzikszą dawką wariactw w historii! Pękniesz ze śmiechu patrząc jak Johnny Knoxville... &rezyser=Jeff Tremaine&data_premiery= 11 października 2010 (świat) "><img src="zdj/Jackass_3D.webp" height="100%"></a>
<a class="film" href="film.php?zdj=zdj/David_Attenborough:_Życie_na_naszej_planecie.webp&tytul=David Attenborough: Życie na naszej planecie&opis=Legendarny narrator wspomina swoje życie i opowiada o ewolucji życia na Ziemi, ubolewając nad zanikiem dzikiej przyrody i dzieląc się swoją wizją przyszłości.&rezyser=Alastair Fothergill&data_premiery= 28 września 2020 (świat) "><img src="zdj/David Attenborough_ Życie na naszej planecie.webp" height="100%"></a>
<a class="film" href="film.php?zdj=zdj/Dylemat_społeczny.webp&tytul=Dylemat społeczny&opis=Ukazanie groźnych skutków ludzkiego wpływu na sieci społecznościowe. Ten problem najlepiej zauważają ich twórcy — eksperci ds. technologii.&rezyser=Jeff Orlowski&data_premiery= 26 stycznia 2020 (świat) "><img src="zdj/Dylemat_społeczny.webp" height="100%"></a>
<a class="film" href="film.php?zdj=zdj/Czego_nauczyła_mnie_ośmiornica.webp&tytul=Czego nauczyła mnie ośmiornica&opis=Historia nietypowej przyjaźni pewnego filmowca i ośmiornicy zamieszkującej południowoafrykański las wodorostów, która zdradza mu tajemnice tego świata.&rezyser=Pippa Ehrlich&data_premiery= 4 września 2020 (świat) "><img src="zdj/Czego_nauczyła_mnie_ośmiornica.webp" height="100%"></a>
<a class="film" href="film.php?zdj=zdj/Oszust_z_Tindera.webp&tytul=Oszust z Tindera&opis=Podając się za bogatego potentata diamentów, uwodził kobiety w sieci, a następnie wyłudzał od nich miliony dolarów. Teraz niektóre ofiary planują zemstę. &rezyser=Felicity Morris&data_premiery= 2 lutego 2022 (świat) "><img src="zdj/Oszust_z_Tindera.webp" height="100%"></a>
<a class="film" href="film.php?zdj=zdj/Walka:_Życie_i_zaginiona_twórczość_Stanisława_Szukalskiego.webp&tytul=Walka: Życie i zaginiona twórczość Stanisława Szukalskiego&opis=Członkowie artystycznego podziemia Los Angeles odkrywają prace zapomnianego polskiego rzeźbiarza - szalonego geniusza, którego życie było serią niezwykłych zdarzeń.&rezyser=Ireneusz Dobrowolski&data_premiery= 21 grudnia 2018 (świat) "><img src="zdj/Walka_ Życie i zaginiona twórczość Stanisława Szukalskiego.webp" height="100%"></a>
<a class="film" href="film.php?zdj=zdj/Jurek.webp&tytul=Jurek&opis=Dokument przedstawia sylwetkę Jerzego Kukuczki, jednego z najwybitniejszych himalaistów XX wieku. &rezyser=Paweł Wysoczański&data_premiery= 8 października 2014 (świat) "><img src="zdj/Jurek.webp" height="100%"></a>
</div>

<div class="category-container" category="fantasy">
<h1 class="tekst">Fantasy</h1>

<a class="film" href="film.php?zdj=zdj/Hobbit:_Niezwykła_podróż.webp&tytul=Hobbit: Niezwykła podróż&opis=Hobbit Bilbo Baggins, przy udziale czarodzieja Gandalfa, dołącza do kompanii krasnoludów pod dowództwem Thorina Dębowej Tarczy. Celem ich wyprawy jest wydarcie Samotnej Góry i jej bogactw spod władzy smoka Smauga. &rezyser=Peter Jackson&data_premiery= 28 listopada 2012 (świat) "><img src="zdj/Hobbit_ Niezwykła podróż.webp" height="100%"></a>
<a class="film" href="film.php?zdj=zdj/Charlie_i_fabryka_czekolady.webp&tytul=Charlie i fabryka czekolady&opis=Ubogi Charlie Bucket znajduje jeden z pięciu złotych biletów, który umożliwia mu zwiedzenie ogromnej fabryki czekolady.&rezyser=Tim Burton&data_premiery= 10 lipca 2005 (świat) "><img src="zdj/Charlie_i_fabryka_czekolady.webp" height="100%"></a>
<a class="film" href="film.php?zdj=zdj/Jak_wytresować_smoka.webp&tytul=Jak wytresować smoka&opis=Chuderlawy Wiking przewróci porządek w wiosce, kiedy zamiast zabić w ramach inicjacji jakiegoś smoka, zaprzyjaźni się z najgroźniejszym z nich.&rezyser=Dean DeBlois&data_premiery= 18 marca 2010 (świat) "><img src="zdj/Jak_wytresować_smoka.webp" height="100%"></a>
<a class="film" href="film.php?zdj=zdj/Constantine.webp&tytul=Constantine&opis=Adaptacja komiksu Hellblazer opowiadająca historię Johna Constantine'a - egzorcysty, który musi stanąć do walki o dusze wszystkich ludzi, by tym samym ocalić siebie od wiecznego potępienia. &rezyser=Francis Lawrence&data_premiery= 7 lutego 2005 (świat) "><img src="zdj/Constantine.webp" height="100%"></a>
<a class="film" href="film.php?zdj=zdj/Hobbit:_Bitwa_Pięciu_Armii.webp&tytul=Hobbit: Bitwa Pięciu Armii&opis=Podczas gdy Smok Smaug niszczy miasto Esgaroth, armie Śródziemia szykują się do wojny.&rezyser=Peter Jackson&data_premiery= 1 grudnia 2014 (świat) "><img src="zdj/Hobbit_ Bitwa Pięciu Armii.webp" height="100%"></a>
<a class="film" href="film.php?zdj=zdj/Hancock.webp&tytul=Hancock&opis=Ray, specjalista od PR, w dowód wdzięczności za uratowanie życia przez Hancocka, postanawia odbudować jego reputację. &rezyser=Peter Berg&data_premiery= 16 czerwca 2008 (świat) "><img src="zdj/Hancock.webp" height="100%"></a>
<a class="film" href="film.php?zdj=zdj/Jumanji.webp&tytul=Jumanji&opis=Dwunastoletni Alan wraz z koleżanką rozpoczyna zabawę w tajemniczą grę Jumanji, która wciąga go do dżungli. Po latach zostaje uwolniony przez dwójkę rodzeństwa, Judy i Petera.&rezyser=Joe Johnston&data_premiery= 15 grudnia 1995 (świat) "><img src="zdj/Jumanji.webp" height="100%"></a>
<a class="film" href="film.php?zdj=zdj/Jak_wytresować_smoka_2.webp&tytul=Jak wytresować smoka 2&opis=Pięć lat po zjednoczeniu rasy smoków oraz ludzi Czkawka i Szczerbatek stają do obrony wyspy Berk przed niebezpiecznymi dzikimi bestiami, a także tajemniczym Smoczym Jeźdźcem.&rezyser=Dean DeBlois&data_premiery= 16 maja 2014 (świat) "><img src="zdj/Jak_wytresować_smoka_2.webp" height="100%"></a>
</div>
<div class="category-container" category="kryminalne">
<h1 class="tekst" >Kryminalne</h1>

<a class="film" href="film.php?zdj=zdj/Dom_zły.webp&tytul=Dom zły&opis=Do domu Zdzisława i Bożeny Dziabasów trafia przypadkowy gość, Edward Środoń. Po kolacji zakrapianej alkoholem dochodzi do tragedii.&rezyser=Wojciech Smarzowski&data_premiery= 16 września 2009 (świat) "><img src="zdj/Dom_zły.webp" height="100%"></a>
<a class="film" href="film.php?zdj=zdj/Dziewiąte_wrota.webp&tytul=Dziewiąte wrota&opis=Nowojorski bibliofil dostaje zlecenie odnalezienia ściśle strzeżonych egzemplarzy satanicznej księgi pt. Dziewięć wrót Królestwa Cieni.&rezyser=Roman Polański&data_premiery= 25 sierpnia 1999 (świat) "><img src="zdj/Dziewiąte_wrota.webp" height="100%"></a>
<a class="film" href="film.php?zdj=zdj/Drogówka.webp&tytul=Drogówka&opis=Historia siedmiu policjantów, których poza pracą łączy przyjaźń, imprezy, samochody i interesy. Wszystko się zmienia, gdy ginie jeden z nich.&rezyser=Wojciech Smarzowski&data_premiery= 14 grudnia 2012 (świat) "><img src="zdj/Drogówka.webp" height="100%"></a>
<a class="film" href="film.php?zdj=zdj/Contratiempo._Niewidzialny_gość.webp&tytul=Contratiempo. Niewidzialny gość&opis=Po przebudzeniu się w pokoju hotelowym obok martwej kochanki młody biznesmen zatrudnia wybitną adwokat, aby ustalić, do czego tak naprawdę doszło.&rezyser=Oriol Paulo&data_premiery= 23 września 2016 (świat)"><img src="zdj/Contratiempo._Niewidzialny_gość.webp" height="100%"></a>
<a class="film" href="film.php?zdj=zdj/Twój_Vincent.webp&tytul=Twój Vincent&opis=Bohaterowie obrazów Vincenta van Gogha przedstawiają historię życia oraz tajemniczej śmierci artysty. &rezyser=Dorota Kobiela&data_premiery= 12 czerwca 2017 (świat) "><img src="zdj/Twój_Vincent.webp" height="100%"></a>
<a class="film" href="film.php?zdj=zdj/Dzień_próby.webp&tytul=Dzień próby&opis=Młody policjant trafia pod skrzydła doświadczonego detektywa z wydziału narkotykowego.&rezyser=Antoine Fuqua&data_premiery= 2 września 2001 (świat) "><img src="zdj/Dzień_próby.webp" height="100%"></a>
<a class="film" href="film.php?zdj=zdj/Utalentowany_pan_Ripley.webp&tytul=Utalentowany pan Ripley&opis=Tom Ripley zaprzyjaźnia się z bogatym Dickiem i nie zamierza wracać do szarego życia, które do tej pory prowadził. &rezyser=Anthony Minghella&data_premiery= 12 grudnia 1999 (świat) "><img src="zdj/Utalentowany_pan_Ripley.webp" height="100%"></a>
<a class="film" href="film.php?zdj=zdj/Tajemnice_Los_Angeles.webp&tytul=Tajemnice Los Angeles&opis=Los Angeles, rok 1953. Trzech działających niezależnie od siebie funkcjonariuszy policji próbuje rozwiązać sprawę wielokrotnego zabójstwa w nocnym barze. &rezyser=Curtis Hanson&data_premiery= 14 maja 1997 (świat) "><img src="zdj/Tajemnice_Los_Angeles.webp" height="100%"></a>
</div>
<div class="category-container" category="komedie">
<h1 class="tekst" category="komedie">Komedie</h1>

<a class="film" href="film.php?zdj=zdj/Shrek.webp&tytul=Shrek&opis=By odzyskać swój dom, brzydki ogr z gadatliwym osłem wyruszają uwolnić piękną księżniczkę.&rezyser=Andrew Adamson&data_premiery= 22 kwietnia 2001 (świat) "><img src="zdj/Shrek.webp" height="100%"></a>
<a class="film" href="film.php?zdj=zdj/Kac_Vegas.webp&tytul=Kac Vegas&opis=Czterech przyjaciół spędza wieczór kawalerski w Las Vegas. Następnego dnia okazuje się, że zgubili pana młodego i nic nie pamiętają.&rezyser=Todd Phillips&data_premiery= 30 maja 2009 (świat) "><img src="zdj/Kac_Vegas.webp" height="100%"></a>
<a class="film" href="film.php?zdj=zdj/Poradnik_pozytywnego_myślenia.webp&tytul=Poradnik pozytywnego myślenia&opis=Pat Solitano, po tym jak stracił pracę, dom oraz żonę, spędził w szpitalu psychiatrycznym kilka miesięcy. Wrócić do społeczeństwa pomagają mu rodzice, przyjaciele i piękna dziewczyna. &rezyser=David O. Russell&data_premiery= 8 września 2012 (świat) "><img src="zdj/Poradnik_pozytywnego_myślenia.webp" height="100%"></a>
<a class="film" href="film.php?zdj=zdj/Kac_Vegas_w_Bangkoku.webp&tytul=Kac Vegas w Bangkoku&opis=Kontynuacja Kac Vegas. Czterech przyjaciół udaje się w podróż do egzotycznej Tajlandii na ślub jednego z nich. Spokojny wieczór kawalerski wymyka się spod kontroli.&rezyser=Todd Phillips&data_premiery= 19 maja 2011 (świat) "><img src="zdj/Kac_Vegas_w_Bangkoku.webp" height="100%"></a>
<a class="film" href="film.php?zdj=zdj/Czekolada.webp&tytul=Czekolada&opis=Matka i córka przyjeżdżają do małego miasteczka, gdzie otwierają sklep, w ofercie którego znaleźć można czekoladę pod każdą niemal postacią. Przedsięwzięcie spotyka się z dezaprobatą burmistrza.&rezyser=Lasse Hallström&data_premiery= 15 grudnia 2000 (świat) "><img src="zdj/Czekolada.webp" height="100%"></a>
<a class="film" href="film.php?zdj=zdj/Głupi_i_głupszy.webp&tytul=Głupi i głupszy&opis=Dwóch przyjaciół przemierza drogi i miasta Ameryki, by oddać zgubioną przez atrakcyjną kobietę walizkę.&rezyser=Bobby Farrelly&data_premiery= 6 grudnia 1994 (świat) "><img src="zdj/Głupi_i_głupszy.webp" height="100%"></a>
<a class="film" href="film.php?zdj=zdj/Ted.webp&tytul=Ted&opis=John ma 35 lat i chce się wreszcie ustatkować. Cały czas na złą drogę sprowadza go jednak jego pluszowy miś, który ożył dzięki wypowiedzianemu w dzieciństwie życzeniu.&rezyser=Seth MacFarlane&data_premiery= 29 czerwca 2012 (świat) "><img src="zdj/Ted.webp" height="100%"></a>
<a class="film" href="film.php?zdj=zdj/Shrek_2.webp&tytul=Shrek 2&opis=Shrek i Fiona postanawiają odwiedzić rodziców księżniczki, którzy nie wiedzą jednak, że poślubiła ona ogra, a sama zmieniła się w ogrzycę.&rezyser=Andrew Adamson&data_premiery= 8 maja 2004 (świat) "><img src="zdj/Shrek_2.webp" height="100%"></a>
</div>
<div class="category-container" category="kino_akcji">
<h1 class="tekst" category="kino_akcji">Kino akcji</h1>

<a class="film" href="film.php?zdj=zdj/Igrzyska_śmierci:_W_pierścieniu_ognia.webp&tytul=Igrzyska śmierci: W pierścieniu ognia&opis=Po powrocie z obowiązkowego Tournée Zwycięzców Katniss Everdeen i Peeta Mellark wracają na arenę Głodowych Igrzysk, gdzie stawiają czoła mistrzom poprzednich edycji.&rezyser=Francis Lawrence&data_premiery= 11 listopada 2013 (świat) "><img src="zdj/Igrzyska śmierci_ W pierścieniu ognia.webp" height="100%"></a>
<a class="film" href="film.php?zdj=zdj/Transformers.webp&tytul=Transformers&opis=Wojna pomiędzy dwoma rasami robotów – Autobotami i Decepticonami przenosi się na Ziemię. W samym środku walki znajdzie się nastolatek Sam Witwicky.&rezyser=Michael Bay&data_premiery= 12 czerwca 2007 (świat) "><img src="zdj/Transformers.webp" height="100%"></a>
<a class="film" href="film.php?zdj=zdj/Terminator_2:_Dzień_sądu.webp&tytul=Terminator 2: Dzień sądu&opis=Terminator T-800 ma za zadanie uchronić od śmierci Johna Connora, który w przyszłości poprowadzi ludzi do walki przeciwko maszynom.&rezyser=James Cameron&data_premiery= 1 lipca 1991 (świat) "><img src="zdj/Terminator 2_ Dzień sądu.webp" height="100%"></a>
<a class="film" href="film.php?zdj=zdj/Hancock.webp&tytul=Hancock&opis=Ray, specjalista od PR, w dowód wdzięczności za uratowanie życia przez Hancocka, postanawia odbudować jego reputację. &rezyser=Peter Berg&data_premiery= 16 czerwca 2008 (świat) "><img src="zdj/Hancock.webp" height="100%"></a>
<a class="film" href="film.php?zdj=zdj/Wyścig_z_czasem.webp&tytul=Wyścig z czasem&opis=W społeczeństwie przyszłości walutą jest czas. Najbogatsi, czyli młodzi, zdrowi i piękni mogą żyć tysiące lat, podczas gdy biedota budzi się co rano, mając do dyspozycji kilkanaście godzin.&rezyser=Andrew Niccol&data_premiery= 20 października 2011 (świat) "><img src="zdj/Wyścig_z_czasem.webp" height="100%"></a>
<a class="film" href="film.php?zdj=zdj/Igrzyska_śmierci:_Kosogłos._Część_1.webp&tytul=Igrzyska śmierci: Kosogłos. Część 1&opis=Katniss Everdeen niechętnie staje się symbolem buntu ludności przeciwko władzy autokratycznego Kapitolu.&rezyser=Francis Lawrence&data_premiery= 10 listopada 2014 (świat) "><img src="zdj/Igrzyska śmierci_ Kosogłos. Część 1.webp" height="100%"></a>
<a class="film" href="film.php?zdj=zdj/Baby_Driver.webp&tytul=Baby Driver&opis=Chcący zerwać z kryminalną przeszłością młody chłopak, zmuszany do pracy dla bossa mafii, zostaje wrobiony w napad skazany na niepowodzenie.&rezyser=Edgar Wright&data_premiery= 11 marca 2017 (świat) "><img src="zdj/Baby_Driver.webp" height="100%"></a>
<a class="film" href="film.php?zdj=zdj/Na_skraju_jutra.webp&tytul=Na skraju jutra&opis=Walczący z agresywną rasą obcych żołnierz zostaje zamknięty w pętli czasu i skazany na ciągłe przeżywanie tego samego dnia. On i legendarna bohaterka wojenna łączą siły, aby powstrzymać agresorów. &rezyser=Doug Liman&data_premiery= 28 maja 2014 (świat) "><img src="zdj/Na_skraju_jutra.webp" height="100%"></a>

</div>
<div class="category-container" category="anime">
<h1 class="tekst" category="anime">Anime</h1>

<a class="film" href="film.php?zdj=zdj/Księżniczka_Mononoke.webp&tytul=Księżniczka Mononoke&opis=Książę małej wioski zostaje przeklęty przez demona. Wyrusza w podróż, by poprosić legendarnego boga zwierząt o zdjęcie uroku. &rezyser=Hayao Miyazaki&data_premiery= 12 lipca 1997 (świat) "><img src="zdj/Księżniczka_Mononoke.webp" height="100%"></a>
<a class="film" href="film.php?zdj=zdj/Mój_sąsiad_Totoro.webp&tytul=Mój sąsiad Totoro&opis=Dwie dziewczynki wraz z ojcem przeprowadzają się na wieś. Poznają tam magiczne stworzenia zamieszkujące pobliski las. &rezyser=Hayao Miyazaki&data_premiery= 16 kwietnia 1988 (świat) "><img src="zdj/Mój_sąsiad_Totoro.webp" height="100%"></a>
<a class="film" href="film.php?zdj=zdj/Nausicaä_z_Doliny_Wiatru.webp&tytul=Nausicaä z Doliny Wiatru&opis=Księżniczka Nausicaä stara się ocalić swoje plemię przed zagładą, jaką niesie trujący las.&rezyser=Hayao Miyazaki&data_premiery= 11 marca 1984 (świat) "><img src="zdj/Nausicaä_z_Doliny_Wiatru.webp" height="100%"></a>
<a class="film" href="film.php?zdj=zdj/Zrywa_się_wiatr.webp&tytul=Zrywa się wiatr&opis=Historia Jirô Horikoshiego, który projektował japońskie myśliwce podczas II wojny światowej.&rezyser=Hayao Miyazaki&data_premiery= 20 lipca 2013 (świat) "><img src="zdj/Zrywa_się_wiatr.webp" height="100%"></a>
<a class="film" href="film.php?zdj=zdj/Laputa_–_podniebny_zamek.webp&tytul=Laputa – podniebny zamek&opis=Sheeta i Pazu wyruszają w niezwykłą podróż, aby odnaleźć legendarny latający zamek. &rezyser=Hayao Miyazaki&data_premiery= 2 sierpnia 1986 (świat) "><img src="zdj/Laputa_–_podniebny_zamek.webp" height="100%"></a>
<a class="film" href="film.php?zdj=zdj/Podniebna_poczta_Kiki.webp&tytul=Podniebna poczta Kiki&opis=Młoda czarownica szuka miasta, w którym mogłaby rozpocząć dorosłe życie. &rezyser=Hayao Miyazaki&data_premiery= 29 lipca 1989 (świat) "><img src="zdj/Podniebna_poczta_Kiki.webp" height="100%"></a>
<a class="film" href="film.php?zdj=zdj/Szept_serca.webp&tytul=Szept serca&opis=Monotonne życie czternastolatki zmienia się, kiedy dokonuje ona odkrycia w lokalnej bibliotece.&rezyser=Yoshifumi Kondo&data_premiery= 15 lipca 1995 (świat) "><img src="zdj/Szept_serca.webp" height="100%"></a>
<a class="film" href="film.php?zdj=zdj/Księżniczka_Kaguya.webp&tytul=Księżniczka Kaguya&opis=Gdy zbieracz bambusu odnajduje wśród roślin małą dziewczynkę, postanawia ją przygarnąć. Wiele lat później w jego córce zakochuje się sam cesarz.&rezyser=Isao Takahata&data_premiery= 23 listopada 2013 (świat) "><img src="zdj/Księżniczka_Kaguya.webp" height="100%"></a>
</div>
<div class="category-container" category="science_fiction">
<h1 class="tekst" category="science_fiction">Science fiction</h1>

<a class="film" href="film.php?zdj=zdj/Igrzyska_śmierci.webp&tytul=Igrzyska śmierci&opis=Nastoletnia Katniss Everdeen walczy na śmierć i życie w głodowych igrzyskach, aby ochronić siostrę. &rezyser=Gary Ross&data_premiery= 12 marca 2012 (świat) "><img src="zdj/Igrzyska_śmierci.webp" height="100%"></a>
<a class="film" href="film.php?zdj=zdj/Transformers.webp&tytul=Transformers&opis=Wojna pomiędzy dwoma rasami robotów – Autobotami i Decepticonami przenosi się na Ziemię. W samym środku walki znajdzie się nastolatek Sam Witwicky.&rezyser=Michael Bay&data_premiery= 12 czerwca 2007 (świat) "><img src="zdj/Transformers.webp" height="100%"></a>
<a class="film" href="film.php?zdj=zdj/Łowca_androidów.webp&tytul=Łowca androidów&opis=Rok 2019. Rick Deckard jako członek specjalnego oddziału policji tropi i eliminuje replikantów - istoty stworzone za pomocą biotechnologii do wykonywania niebezpiecznych zadań.&rezyser=Ridley Scott&data_premiery= 25 czerwca 1982 (świat) "><img src="zdj/Łowca_androidów.webp" height="100%"></a>
<a class="film" href="film.php?zdj=zdj/Wojna_światów.webp&tytul=Wojna światów&opis=Ray z dwójką dzieci stara się przeżyć w czasie inwazji kosmitów na Ziemię.&rezyser=Steven Spielberg&data_premiery= 13 czerwca 2005 (świat) "><img src="zdj/Wojna_światów.webp" height="100%"></a>
<a class="film" href="film.php?zdj=zdj/Ex_Machina.webp&tytul=Ex Machina&opis=Po wygraniu konkursu programista jednej z największych firm internetowych zostaje zaproszony do posiadłości swojego szefa. Na miejscu dowiaduje się, że jest częścią eksperymentu. &rezyser=Alex Garland&data_premiery= 21 stycznia 2015 (świat) "><img src="zdj/Ex_Machina.webp" height="100%"></a>
<a class="film" href="film.php?zdj=zdj/Lucy.webp&tytul=Lucy&opis=Podczas przemytu narkotyków w swoim organizmie Lucy przypadkowo zyskuje nadprzyrodzone zdolności.&rezyser=Luc Besson&data_premiery= 24 lipca 2014 (świat) "><img src="zdj/Lucy.webp" height="100%"></a>
<a class="film" href="film.php?zdj=zdj/Terminator_2:_Dzień_sądu.webp&tytul=Terminator 2: Dzień sądu&opis=Terminator T-800 ma za zadanie uchronić od śmierci Johna Connora, który w przyszłości poprowadzi ludzi do walki przeciwko maszynom.&rezyser=James Cameron&data_premiery= 1 lipca 1991 (świat) "><img src="zdj/Terminator 2_ Dzień sądu.webp" height="100%"></a>
<a class="film" href="film.php?zdj=zdj/Wyścig_z_czasem.webp&tytul=Wyścig z czasem&opis=W społeczeństwie przyszłości walutą jest czas. Najbogatsi, czyli młodzi, zdrowi i piękni mogą żyć tysiące lat, podczas gdy biedota budzi się co rano, mając do dyspozycji kilkanaście godzin.&rezyser=Andrew Niccol&data_premiery= 20 października 2011 (świat) "><img src="zdj/Wyścig_z_czasem.webp" height="100%"></a>
</div>
<div class="category-container" category="horrory">
<h1 class="tekst" category="horrory">Horrory</h1>

<a class="film" href="film.php?zdj=zdj/Lśnienie.webp&tytul=Lśnienie&opis=Jack podejmuje pracę stróża odciętego od świata hotelu Overlook. Wkrótce idylla zamienia się w koszmar. &rezyser=Stanley Kubrick&data_premiery= 23 maja 1980 (świat) "><img src="zdj/Lśnienie.webp" height="100%"></a>
<a class="film" href="film.php?zdj=zdj/Zmierzch.webp&tytul=Zmierzch&opis=Adaptacja książki Stephenie Meyer. Nieśmiała i zagubiona nastolatka zakochuje się w wampirze.&rezyser=Catherine Hardwicke&data_premiery= 17 listopada 2008 (świat) "><img src="zdj/Zmierzch.webp" height="100%"></a>
<a class="film" href="film.php?zdj=zdj/Dziewiąte_wrota.webp&tytul=Dziewiąte wrota&opis=Nowojorski bibliofil dostaje zlecenie odnalezienia ściśle strzeżonych egzemplarzy satanicznej księgi pt. Dziewięć wrót Królestwa Cieni.&rezyser=Roman Polański&data_premiery= 25 sierpnia 1999 (świat) "><img src="zdj/Dziewiąte_wrota.webp" height="100%"></a>
<a class="film" href="film.php?zdj=zdj/Dracula.webp&tytul=Dracula&opis=Rumuński książę, a w rzeczywistości wampir Vlad Dracula wyjeżdża do Londynu, gdzie mieszka kobieta przypominająca mu jego tragicznie utraconą ukochaną. &rezyser=Francis Ford Coppola&data_premiery= 10 listopada 1992 (świat) "><img src="zdj/Dracula.webp" height="100%"></a>
<a class="film" href="film.php?zdj=zdj/World_War_Z.webp&tytul=World War Z&opis=Tajemnicza choroba zmienia ludzi w żądne krwi zombie. Chcący zapewnić swojej rodzinie bezpieczeństwo były pracownik ONZ, Gerry Lane, dołącza do zespołu mającego znaleźć przyczynę dziesiątkującej świat zarazy. &rezyser=Marc Forster&data_premiery= 2 czerwca 2013 (świat) "><img src="zdj/World_War_Z.webp" height="100%"></a>
<a class="film" href="film.php?zdj=zdj/Egzorcysta.jpg&tytul=Egzorcysta&opis=Kiedy córka aktorki zaczyna się dziwnie zachowywać, a lekarze orzekają, że jest zdrowa, kobieta wzywa egzorcystę.&rezyser=William Friedkin&data_premiery=19 czerwca 1973 (świat)"><img src="zdj/Egzorcysta.jpg" height="100%"></a>
<a class="film" href="film.php?zdj=zdj/to.jpg/&tytul=TO&opis=Opowieść o bestii karmiącej się dziecięcym strachem.&rezyser=Andy Muschietti&data_premiery=5 września 2017 (świat)"><img src="zdj/to.jpg" height="100%"></a>
<a class="film" href="film.php?zdj=zdj/obecnosc.jpg&tytul=OBECNOŚĆ&opis=Słynna para badaczy zjawisk paranormalnych zostaje poproszona o pomoc rodzinie, którą terroryzuje potężny demon.&rezyser=James Wan&data_premiery=27 czerwca 2013 (świat)"><img src="zdj/obecnosc.jpg" height="100%"></a>
</div>
<div class="category-container" category="romantyczne">
<h1 class="tekst" category="romantyczne">Romantyczne</h1>
<a class="film" href="film.php?zdj=zdj/Zmierzch.webp&tytul=Zmierzch&opis=Adaptacja książki Stephenie Meyer. Nieśmiała i zagubiona nastolatka zakochuje się w wampirze.&rezyser=Catherine Hardwicke&data_premiery= 17 listopada 2008 (świat) "><img src="zdj/Zmierzch.webp" height="100%"></a>
<a class="film" href="film.php?zdj=zdj/Czekolada.webp&tytul=Czekolada&opis=Matka i córka przyjeżdżają do małego miasteczka, gdzie otwierają sklep, w ofercie którego znaleźć można czekoladę pod każdą niemal postacią. Przedsięwzięcie spotyka się z dezaprobatą burmistrza.&rezyser=Lasse Hallström&data_premiery= 15 grudnia 2000 (świat) "><img src="zdj/Czekolada.webp" height="100%"></a>
<a class="film" href="film.php?zdj=zdj/Turysta.webp&tytul=Turysta&opis=Remake francuskiego thrillera pt. Anthony Zimmer. Amerykański turysta na wakacjach we Włoszech zostaje wplątany przez agentkę Interpolu w niebezpieczną intrygę.&rezyser=Florian Henckel von Donnersmarck&data_premiery= 6 grudnia 2010 (świat) "><img src="zdj/Turysta.webp" height="100%"></a>
<a class="film" href="film.php?zdj=zdj/Saga_Zmierzch:_Księżyc_w_nowiu.webp&tytul=Saga Zmierzch: Księżyc w nowiu&opis=Edward porzuca Bellę. Osamotniona dziewczyna szuka pocieszenia u  wilkołaka Jacoba.&rezyser=Chris Weitz&data_premiery= 16 listopada 2009 (świat) "><img src="zdj/Saga_Zmierzch_Księżyc_w_nowiu.webp" height="100%"></a>
<a class="film" href="film.php?zdj=zdj/Miłość_i_inne_używki.webp&tytul=Miłość i inne używki&opis=Cierpiąca na parkinsona kobieta postanawia nie wiązać się z nikim na stałe. Sytuacja ulega zmianie, gdy poznaje przedstawiciela farmaceutycznego. &rezyser=Edward Zwick&data_premiery= 4 listopada 2010 (świat) "><img src="zdj/Miłość_i_inne_używki.webp" height="100%"></a>
<a class="film" href="film.php?zdj=zdj/lepiej_b.jpg&tytul=LEPIEJ BYĆ NIE MOŻE&opis=Ekscentryczny Melvin zakochuje się w kelnerce z problemami.&rezyser=James L. Brooks&data_premiery=6 grudnia 1997 (świat)"><img src="zdj/lepiej_b.jpg" height="100%"></a>
<a class="film" href="film.php?zdj=zdj/artysta.jpg&tytul=Artysta&opis=George Valentin, gwiazda kina niemego, nie może się pogodzić z udźwiękowieniem filmów. Zakochana w nim Peppy robi wszystko, by przełamać jego uprzedzenia.&rezyser=Michel Hazanavicius&data_premiery=15 maja 2011 (świat)"><img src="zdj/artysta.jpg" height="100%"></a>
<a class="film" href="film.php?zdj=zdj/listy.jpg&tytul=Listy do Juli&opis=Młoda dziewczyna po przeczytaniu starego listu pragnie odszukać jego autorkę, by zainspirować ją do odnalezienia mężczyzny poznanego przed wieloma laty.&rezyser=Gary Winick&data_premiery=25 kwietnia 2010 (świat)"><img src="zdj/listy.jpg" height="100%"></a>
</div>
  <br> <br> <br> <br> <br>
  <div class="miejsce2"></div>
 <div class="footer-zawieracz">
        <div class ="footer">
          <div class = "footer-ez footer-1">
            <h2>Twórcy</h2>
            <a href="#">Filip Kamiński</a>
            <a href="#">Olgierd Laszuk</a>
          </div>
          <div class="footer-ez footer-2">
            <h2>Kontakt</h2>
            <a href="#">Tel: 111 222 333</a>
            <a href="#">E-mail: email@mail.com</a>
          </div>
</body>
<script type="text/javascript" src="js/index.js"></script>
</html>