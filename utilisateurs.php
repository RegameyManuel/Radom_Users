<?php

//require 'data_tables.php';















$hostname = 'localhost';
$dbname = 'gestion_utilisateurs';
$username = 'admin';
$password = 'Afpa1234';
$numero_adherent = 7;
$nombre_clients = 50;

function generateUserData($numero_adherent) {




$noms = ["Martin","Bernard","Thomas","Petit","Robert","Richard","Dubois","Durand","Moreau","Laurent","Simon","Michel","Lefebvre","Leroy","David","Roux","Morel","Bertrand","Fournier","Girard","Fontaine","Lambert","Dupont","Bonnet","Rousseau","Vincent","Muller","Lefevre","Faure","Andre","Mercier","Guerin","Garcia","Boyer","Blanc","Garnier","Chevalier","Francois","Legrand","Gauthier","Perrin","Robin","Clement","Morin","Henry","Nicolas","Roussel","Gautier","Mathieu","Masson","Duval","Marchand","Denis","Lemaire","Dumont","Marie","Noel","Meyer","Dufour","Meunier","Martinez","Blanchard","Brun","Riviere","Lucas","Joly","Giraud","Brunet","Gaillard","Barbier","Gerard","Arnaud","Renard","Roche","Schmitt","Roy","Leroux","Caron","Colin","Vidal","Picard","Roger","Fabre","Aubert","Lemoine","Renaud","Dumas","Payet","Olivier","Lacroix","Philippe","Pierre","Bourgeois","Lopez","Benoit","Leclerc","Rey","Leclercq","Sanchez","Lecomte","Rolland","Guillaume","Jean","Hubert","Dupuy","Carpentier","Guillot","Berger","Perez","Dupuis","Louis","Moulin","Deschamps","Vasseur","Huet","Boucher","Fernandez","Fleury","Adam","Royer","Paris","Jacquet","Klein","Poirier","Charles","Aubry","Guyot","Carre","Renault","Menard","Maillard","Charpentier","Marty","Bertin","Baron","DaSilva","Bailly","Herve","Schneider","LeGall","Collet","Leger","Bouvier","Julien","Prevost","Millet","LeRoux","Daniel","Perrot","Cousin","Germain","Breton","Rodriguez","Langlois","Remy","Besson","Leveque","LeGoff","Pelletier","Leblanc","Barre","Lebrun","Grondin","Perrier","Marchal","Weber","Boulanger","Mallet","Hamon","Jacob","Monnier","Michaud","Guichard","Poulain","Etienne","Gillet","Hoarau","Tessier","Chevallier","Collin","Lemaitre","Benard","Chauvin","Bouchet","Marechal","Gay","Humbert","Gonzalez","Antoine","Perret","Reynaud","Cordier","Lejeune","Barthelemy","Delaunay","Carlier","Pichon","Pasquier","Lamy","Gilbert","Peeters","Janssens","Maes","Jacobs","Mertens","Willems","Claes","Goossens","Wouters","De Smet","Vermeulen","Pauwels","Dubois","Hermans","Aerts","Michiels","Lambert","Martens","De Vos","Garcia","Rodriguez","Gonzalez","Fernandez","Lopez","Martinez","Sanchez","Perez","Gomez","Martin","Jimenez","Ruiz","Hernandez","Diaz","Moreno","Muñoz","Alvarez","Romero","Alonso","Gutierrez","Silva","Santos","Ferreira","Pereira","Costa","Oliveira","Martins","Rodrigues","Sousa","Fernandes","Lopes","Gonçalves","Ribeiro","Gomes","Carvalho","Almeida","Pinto","Alves","Dias","Teixeira","Rossi","Russo","Ferrari","Esposito","Bianchi","Colombo","Romano","Ricci","Gallo","Dal","Bruno","Greco","Marino","Conti","Giordano","Rizzo","De luca","Costa","Mancini","Lombardi","Alaoui","Ait","Alami","Bennani","Mohamed","idrissi","Berrada","Hassan","Lahlou","Tazi","Aziz","El idrissi","Benjelloun","Amine","Ayoub","Saidi","Tahiri","El mostafa","Cherkaoui","Filali","Kone","Ouattara","Kouassi","Koffi","Kouadio","Kouame","Yao","Kouakou","Konan","N'guessa","Soro","Bamba","Toure","Fofana","Yeo","Diomande","Konate","Silue"];

$prenoms = ["Mariam","Océane","Emna","Lara","Léyna","Lilia","Stella","Fatoumata","Kiara","Aliya","Candice","Amina","Jasmine","Emilie","Hortense","Jannah","Charline","Liya","Ninon","Selma","Yüna","Calie","Coline","Ayline","Jana","Eden","Célestine","Billie","Lilya","Pauline","Naomi","Khadija","Maelya","Louison","Maeva","Cléa","Angelina","Dina","Lian","Laura","Neyla","Augustine","Izïa","Séréna","Mélissa","Enola","Janna","Louane","Aminata","Layana","Marie","Mélina","Emmy","Elina","Joséphine","Eline","Garance","Ellie","Lisa","Manël","Soline","Faustine","Nora","Elya","Suzanne","Anaé","Arya","Aria","Jennah","Elisa","Elsa","Hanna","Valentina","Tessa","Louisa","Aliyah","Maddy","Maryam","Cataléya","Camélia","Nélia","Eléa","Maïssa","Anaëlle","Hanaé","Judith","Ilyana","Sophia","Amira","Hana","Ana","Sara","Esmée","Fatima","Lison","Helena","Leïla","Elia","Naya","Jenna","Manon","Lya","Capucine","Ava","Elise","Théa","Alma","Clémence","Alya","Nélya","Ayan","Clara","Lyna","Gabrielle","Yasmine","Maëlys","Lily","Apolline","Livia","Amélia","Ella","Lana","Céleste","Assia","Zélie","Lila","Albane","Roxane","Lise","Maria","Maya","Joy","Mathilde","Alicia","Eléonore","Thaïs","Anaïs","Héloïse","Constance","Célia","Salomé","Valentine","Andréa","Lilou","Léana","Eloïse","Aïcha","Maëlle","Diane","Noémie","Jade","Louise","Emma","Ambre","Alice","Rose","Mia","Anna","Alba","Romy","Lina","Léna","Chloé","Julia","Lou","Léa","Inès","Agathe","Iris","Elena","Zoé","Eva","Nina","Inaya","Juliette","Léonie","Luna","Jeanne","Charlie","Mila","Adèle","Victoire","Olivia","Lola","Victoria","Lucie","Margaux","Romane","Giulia","Camille","Sofia","Noûr","Charlotte","Alix","Emy","Lyana","Margot","Sarah","Louna","Mya","Inaya","Aya","Fatoumata","Aminata","Malia","Asma","Malya","Awa","Mariama","Fanta","Oumou","Bintou","Ayana","Fatou","Aïssata","Aïssatou","Kadiatou","Assa","Coumba","Malaïka","Salimata","Ina","Imani","Rokia","Kadidiatou","Ramatoulaye","Safiatou","Nabintou","Jahia","Jalia","Lina","Inès","Inaya","Noûr","Louna","Alma","Alya","Nélya","Aya","Yasmine","Assia","Aïcha","Manël","Nora","Jennah","Maryam","Maïssa","Amira","Hana","Fatima","Leïla","Naya","Mariam","Emna","Lilia","Léyna","Fatoumata","Aliya","Amina","Jasmine","Maëlys","Maëlle","Anaëlle","Yüna","Louane","Naëlle","Enora","Maïna","Maïwenn","Maelie","Lilwenn","Eloane","Nolwenn","Aéla","Loane","Maëla","Alwena","Erell","Maïana","Madina","Rozenn","Gwenaëlle","Armelle","Katell","Soïzic","Yanna","Klervi","Soléna","Noëla","Sterenn","Jade","Alba","Inès","Eva","Nina","Luna","Mila","Lola","Célia","Salomé","Valentina","Cataléya","Angelina","Layana","Paola","Paloma","Esma","Amaya","Lucia","Camila","Castille","Dania","Rosa","Paula","Carmen","Catalina","Gloria","Gabriela","Adriana","Luana","Jade","Louise","Emma","Ambre","Alice","Rose","Anna","Lina","Léna","Chloé","Julia","Lou","Léa","Inès","Agathe","Iris","Zoé","Eva","Juliette","Léonie","Jeanne","Adèle","Victoire","Olivia","Victoria","Lucie","Margaux","Romane","Camille","Charlotte","Giulia","Clara","Livia","Maria","Aria","Valentina","Lara","Stella","Kiara","Dina","Séréna","Chiara","Amalia","Paola","Gabriella","Pia","Carla","Lucia","Sienna","Bianca","Alessia","Rita","Rosa","Giuliana","Milla","Tina","Dalia","Zola","Gina","Luana","Inès","Noûr","Aya","Yasmine","Assia","Aïcha","Nora","Maryam","Amira","Hana","Fatima","Mariam","Aliya","Amina","Selma","Khadija","Janna","Kenza","Safiya","Asma","Hafsa","Kamila","Alia","Sirine","Hawa","Salma","Meryem","Marwa","Sana","Malak","Nina","Victoria","Hanna","Jana","Kamila","Ania","Daria","Dana","Hania","Joanna","Marta","Danièla","Klara","Raïna","Natalia","Magdaléna","Térésa","Lidia","Roza","Maja","Ewa","Magda","Agata","Teodora","Alicja","Oliwia","Angelika","Aleksandra","Sabina","Halina","Livia","Amélia","Nélia","Helena","Talia","Carla","Juliana","Rita","Rosa","Paula","Gloria","Yara","Adriana","Luana","Joana","Délia","Antonia","Carolina","Zara","Magdaléna","Léandra","Andréia","Béatriz","Bruna","Ofelia","Lucinda","Catarina","Régina","Rosalina","Isaura","Olivia","Manon","Anaïs","Garance","Faustine","Angèle","Fanny","Laure","Naïs","Barbara","Lio","Alaïs","Norine","Magalie","Magali","Mireille","Abdoulaye","Aboubacari","Aboubacary","Aboubakari","Aboubakary","Adama","Adnan","Aksil","Alasane","Alioune","Alou","Amadi","Amadou","Assane","Atem","Azaan","Babacar","Bacari","Bacary","Bakari","Bakoutoubo","Bemba","Boubacar","Demba","Diango","Dini","Djibril","Fuad","Habib","Hadietou","Haidar","Harun","Hisham","Iba","Issa","Jalil","Jelani","Kani","Koffi","Kofi","Konan","Kouadio","Kouakou","Kouame","Kouassi","Lassana","M'Baye","M'Bemba","M'Paly","Madani","Mahdi","Mamadou","Mamoutou","Mardemoutou","Marimoutou","Mensah","Moussa","Moutoussamy","N'Dy","N'Faly","N'Famady","N'Guessan","Oumar","Ousmane","Pape","Rahman","Rashad","Sékou","Sekouba","Seydou","Soulayman","Souleymane","Tafari","Taha","Tidiane","Ali","Amine","Amir","Anas","Aylan","Ayoub","Ibrahim","Ilyan","Ilyès","Imrân","Ismaël","Issa","Kaïs","Kayden","Kenzo","Nahïl","Naïm","Noâm","Noham","Rayan","Soan","Sohan","Wassim","Younès","Youssef","Alan","Corentin","Elouan","Erwan","Ewen","Gaël","Kénan","Tilio","Yann","Loïc","Alejandro","Alonso","Ambrosio","Andrès","Bastian","Benicio","Bienvenido","Bonifacio","Carlos","Ceferino","Cesario","Ciro","Corto","Cristobal","Custodio","Damian","Desiderio","Diego","Eduardo","Elias","Elio","Emilio","Enrique","Esteban","Fabricio","Feliciano","Felipe","Fernando","Florencio","Florentino","Francisco","Gonzalo","Guillermo","Gustavo","Hugo","Ignacio","Ismaël","Javier","Joaquin","José","Juan","Juanito","Julio","Laureano","Lazaro","Léandro","Lisandro","Lorenzo","Luis","Mano","Manuel","Marciano","Mario","Matéo","Maximiliano","Miguel","Octavio","Orazio","Orion","Pablo","Paco","Paquito","Pascual","Pepito","Prudencio","Rafaël","Ramiro","Ramon","Raul","Ricardo","Rogelio","Romario","Ruben","Rufino","Sabatino","Abdon","Abel","Abelard","Abraham","Achille","Adalbert","Adam","Adelin","Adelphe","Adeodat","Adhemar","Adolphe","Adon","Adonis","Adrien","Agathon","Agenor","Agnan","Agnel","Aignan","Aimable","Aimé","Alain","Alban","Albéric","Albert","Albin","Alcee","Alcibiade","Alcide","Alcime","Aldebert","Alderic","Aldonce","Aldric","Alexandre","Alexis","Alfred","Alix","Alliaume","Almire","Aloïs","Alphée","Alphonse","Amadis","Amalric","Amandin","Amant","Amaury","Ambroise","Amédée","Amélien","Amiel","Amour","Anaël","Anastase","Anatole","Ancelin","Andéol","Andoche","André","Ange","Angel","Angelin","Anicet","Annibal","Ansbert","Anselme","Anthelme","Anthime","Anthoine","Anthony","Antide","Antoine","Antonin","Abel","Achille","Adrien","Alexandre","Alexis","Antoine","Antonin","Auguste","Augustin","Baptiste","Basile","Benjamin","Camille","Charles","Clément","Côme","David","Emile","Gaspard","Jean","Joseph","Léandre","Léonard","Lucien","Malo","Marin","Mathys","Maxence","Maxime","Nathanaël","Oscar","Roméo","Samuel","Simon","Thomas","Timothée","Valentin","William","Alban","Albin","Alix","Aloïs","Amaury","Ambroise","Anatole","Ange","Angel","Anthony","Armand","Arsène","Aubin","Aurèle","Aurélien","Bastien","Célestin","César","Clovis","Corentin","Daniel","Edgar","Edouard","Elie","Eloi","Emilien","Emmanuel","Ernest","Etienne","Félix","Gaël","Gaétan","Gaston","Gauthier","Georges","Gustave","Hector","Henri","Hippolyte","Jacques","Joachim","Johan","Jonas","Julien","Justin","Léopold","Lilian","Loïc","Louison","Loup","Lubin","Marc","Marcel","Mathias","Mathieu","Matthieu","Morgan","Nicolas","Octave","Paulin","Pierre","Quentin","Rémi","Romain","Siméon","Théodore","Thibault","Thibaut","Tim","Timothé","Tristan","Ulysse","Zacharie","Adam","Arthur","Axel","Gabin","Gabriel","Hugo","Jules","Léo","Léon","Louis","Lucas","Marceau","Marius","Martin","Mathis","Nathan","Noé","Paul","Raphaël","Victor","Alessio","Andréa","Diego","Ezio","Léandro","Livio","Lorenzo","Mattéo","Milo","Nino","Roméo","Alessandro","Angelo","Dario","Emilio","Fabio","Gianni","Giovanni","Giulian","Léonardo","Lilio","Lino","Lissandro","Loris","Luca","Mattia","Paolo","Pio","Tino","Ugo","Abdallah","Adel","Ahmed","Anis","Ayman","Bilal","Hamza","Haroun","Hassan","Idris","Imrâne","Ishaq","Ismaïl","Issam","Iyad","Kâmil","Karim","Khalil","Mahdi","Malik","Mehdi","Mohammed","Moussa","Nassim","Omar","Oumar","Qassim","Rayane","Riyad","Salim","Sami","Sofiane","Walid","Yahya","Yasser","Yassin","Yassine","Yazid","Youssouf","Zakaria","Zakariya","Ziyad","Aleksander","Aleksy","Andrzej","Antoni","Artur","August","Bartlomiej","Bartosz","Bogdan","Boguslaw","Boleslaw","Bronislaw","Brunon","Czeslaw","Dawid","Dominik","Donat","Edward","Eryk","Filip","Henryk","Igor","Iwan","Jacek","Jakub","Jan","Janek","Jaroslaw","Jerzy","Jozef","Kacper","Kâmil","Karol","Kasper","Kazimierz","Konrad","Krystian","Krzysztof","Kuba","Léon","Leszek","Ludwik","Lukasz","Maciej","Maksymilian","Marcin","Marek","Marian","Martin","Mateusz","Michal","Mieczyslaw","Mikolaj","Milosz","Miroslaw","Mumin","Paskal","Patryk","Pawel","Piotr","Rafal","Roman","Rudolf","Ryszard","Stanislaw","Szymon","Tadeusz","Teodor","Tomasz","Tymon","Waclaw","Wieslaw","Wiktor","Witold","Wladyslaw","Adamo","Adolfo","Afonso","Agostinho","Alberto","Aldo","Alfredo","Amaro","Aurélio","Bernardo","Caetano","Casimiro","Cristiano","Dario","Dino","Domingos","Donato","Edmundo","Elder","Ernesto","Fausto","Filipe","Gil","Giorgio","Guido","Guilherme","Henrique","Humberto","Inacio","Jacinto","Joâo","Joaquim","José","Justino","Léandro","Lissandro","Luciano","Luiz","Manoel","Martinho","Micaël","Miguel","Natalino","Nuno","Paulo","Pedro","Porfirio","Raimundo","Ricardo","Rico","Roberto","Rodolfo","Rodrigo","Ronaldo","Rosario","Sandro","Santiago","Silvano","Teodoro","Thiago","Tiago","Ubaldo","Vicente","Antoni","Aubin","Carle","César","Claudino","Clément","Elian","Emile","Estève","Fabian","Gaspard","Justin","Manuel","Marius","Matias","Milo"];

$typeRue1 = ["Allée","Avenue","Boulevard","Carrefour","Chaussée","Chemin","Cité","Clos","Côte","Cour","Cours","Descente","Escoussière","Esplanade","Grand-route","Impasse","Liaison","Montée","Passage","Place","Placette","Pont","Promenade","Quai","Résidence","Rampe","Route","Rue","Ruelle","Sente","Sentier","Square","Traboule","Traverse","Venelle","Villa","Voie"];

$nomRue1 = ["de l'Église","du Moulin","de la Mairie","du Château","de la Gare","des Tilleuls","des Écoles","du Stade","de la Fontaine","du Centre","de la République","des Roses","Victor Hugo","des Vignes","Pasteur","de la Paix","Jean Jaurès","des Jardins","de Bellevue","du Four","Louis Pasteur","Marie Curie","Albert Einstein","Isaac Newton","Léon Foucault","Blaise Pascal","René Descartes","André-Marie Ampère","Henri Poincaré","Jean-Baptiste Lamarck","Pierre-Simon Laplace","Paul Sabatier","Charles Darwin","Antoine Lavoisier","Henri Becquerel","Émile Roux","Georges Cuvier","Claude Bernard","Augustin Fresnel","Gustave Eiffel","d'Austerlitz","de Wagram","de Jena","de Verdun","des Pyramides","de Leipzig","de Marengo","de Waterloo","de la Marne","de Solferino","de Flandres","de Normandie","de Stalingrad","d'Arcole","de Trafalgar","des Dardanelles","de Rivoli","de la Somme","de Bir Hakeim","de Sébastopol","Victor Hugo","Molière","Jean-Baptiste Corot","Edouard Manet","Claude Monet","Paul Cézanne","Vincent van Gogh","Auguste Rodin","Henri Matisse","Paul Gauguin","Edgar Degas","Pierre-Auguste Renoir","Georges Bizet","Frédéric Chopin","Honoré de Balzac","Camille Saint-Saëns","Jean Cocteau","Marcel Proust","Gustave Flaubert","Eugène Delacroix","Marie Curie","George Sand","Jeanne d'Arc","Simone de Beauvoir","Colette","Camille Claudel","Edith Piaf","Olympe de Gouges","Simone Veil","Marguerite Duras","Sarah Bernhardt","Brigitte Bardot","Françoise Dolto","Joséphine Baker","Marguerite Yourcenar","Christine de Pizan","Elisabeth Vigée Le Brun","Louise Michel","Rosa Bonheur","Hélène Boucher","Madeleine Vionnet","Marguerite Perey","Françoise Giroud","Gisèle Halimi","Germaine Tillion","Cécile Chaminade","Sonia Delaunay","Éliane Radigue","Suzanne Valadon","Nadia Boulanger","Lucie Aubrac","Anne de Bretagne","Hélène Jégado","Julia Bartet","Sophie Germain","Charlotte Perriand","Violette Leduc","Françoise Sagan","Sylvie Guillem","Agnès Varda","du 4 Septembre","du 14 Juillet","du 18 Juin 1940","de la Révolution","de la Commune","de la Libération","des Martyrs","du 8 Mai 1945","du 11 Novembre","du Roi de Rome","de la Chute du Bastion","de la Paix","des Oliviers","de la Lavande","du Mistral","des Calanques","des Cyprès","des Baux","du Roussillon","du Petit Puy","des Alpilles","du Garlaban","des Mimosas","des Félibres","Frédéric Mistral","des Santons","des Lavandières","de la Farigoule","de la Fougasse","de la Tarasque","des Gorges","de la Sainte-Baume","des Ocres","Guillaume IX d'Aquitaine","Eleanor d'Aquitaine","Bernart de Ventadorn","Raimon de Miraval","Frédéric II de Hohenstaufen","Abbaye de Suger","Thomas d'Aquin","Béatrice de Savoie","Raimond VI de Toulouse","Catharina de Béziers","Pierre II d'Aragon","Pierre de Castelnau","Platon","Aristote","Socrate","Épicure","Confucius","Avicenne","Averroès","Thomas d'Aquin","Descartes","Spinoza","Leibniz","Kant","Hume","Rousseau","Voltaire","Hegel","Schopenhauer","Nietzsche","Sartre","Simone de Beauvoir","Camus","Foucault","Derrida","Arendt","Wittgenstein","des Roses","des Tulipes","des Pivoines","des Marguerites","des Iris","des Jonquilles","des Lys","des Orchidées","des Violettes","des Coquelicots","des Bleuets","des Mimosas","des Lavandes","des Dahlia","des Camélias","des Tournesols","des Azalées","des Jacinthes","des Renoncules","des Magnolias","des Géraniums","des Chrysanthèmes","des Hibiscus","des Asters","des Lilas"];

$typeRue2 = ["Appartement","Immeuble","Bâtiment","Résidence"];

$lettres = ['A', 'B', 'C', 'D', 'E', 'F'];

$suffixeMails = ["@gnail.com","@yavoo.fr","@hotnail.fr","@hotnail.com","@leave.fr","@leave.com","@outcook.fr","@outcook.com","@laporte.net","@violette.fr","@wanacloo.fr","@fsr.fr","@freu.fr","@bboc.fr","@club-interket.fr","@numerivable.fr","@aliceasdl.fr","@iclood.com","@mns.com","@alo.com","@mailfrance.fr","@porte-fr.fr","@scribe.fr","@mel.fr","@boitfr.fr","@envoi.fr","@corres-dance.fr","@lettre.fr","@communiquez.fr","@pris-mail.fr","@contactmeee.fr","@maildirect.fr","@francoposte.fr","@yopomail.fr","@hexagon.fr"];

$communes = [
    ['cp' => '75000', 'ville' => 'Paris'],
    ['cp' => '13000', 'ville' => 'Marseille'],
    ['cp' => '69000', 'ville' => 'Lyon'],
    ['cp' => '31000', 'ville' => 'Toulouse'],
    ['cp' => '06000', 'ville' => 'Nice'],
    ['cp' => '67000', 'ville' => 'Strasbourg'],
    ['cp' => '59000', 'ville' => 'Lille'],
    ['cp' => '44000', 'ville' => 'Nantes'],
    ['cp' => '34000', 'ville' => 'Montpellier'],
    ['cp' => '33000', 'ville' => 'Bordeaux'],
    ['cp' => '54000', 'ville' => 'Nancy'],
    ['cp' => '80000', 'ville' => 'Amiens'],
    ['cp' => '21000', 'ville' => 'Dijon'],
    ['cp' => '37000', 'ville' => 'Tours'],
    ['cp' => '35000', 'ville' => 'Rennes'],
    ['cp' => '17000', 'ville' => 'La Rochelle'],
    ['cp' => '49000', 'ville' => 'Angers'],
    ['cp' => '14000', 'ville' => 'Caen'],
    ['cp' => '29200', 'ville' => 'Brest'],
    ['cp' => '45000', 'ville' => 'Orléans'],
    ['cp' => '64000', 'ville' => 'Pau'],
    ['cp' => '26000', 'ville' => 'Valence'],
    ['cp' => '38000', 'ville' => 'Grenoble'],
    ['cp' => '72000', 'ville' => 'Le Mans'],
    ['cp' => '18000', 'ville' => 'Bourges'],
    ['cp' => '10000', 'ville' => 'Troyes'],
    ['cp' => '89000', 'ville' => 'Auxerre'],
    ['cp' => '28000', 'ville' => 'Chartres'],
    ['cp' => '90000', 'ville' => 'Belfort'],
    ['cp' => '73000', 'ville' => 'Chambéry'],
    ['cp' => '84000', 'ville' => 'Avignon'],
    ['cp' => '39000', 'ville' => 'Lons-le-Saunier'],
    ['cp' => '30000', 'ville' => 'Nîmes'],
    ['cp' => '74000', 'ville' => 'Annecy'],
    ['cp' => '79000', 'ville' => 'Niort'],
    ['cp' => '58000', 'ville' => 'Nevers'],
    ['cp' => '20000', 'ville' => 'Ajaccio'],
    ['cp' => '07000', 'ville' => 'Privas'],
    ['cp' => '11000', 'ville' => 'Carcassonne'],
    ['cp' => '40000', 'ville' => 'Mont-de-Marsan'],
    ['cp' => '81000', 'ville' => 'Albi'],
    ['cp' => '12000', 'ville' => 'Rodez'],
    ['cp' => '16000', 'ville' => 'Angoulême'],
    ['cp' => '47000', 'ville' => 'Agen'],
    ['cp' => '63000', 'ville' => 'Clermont-Ferrand'],
    ['cp' => '42000', 'ville' => 'Saint-Étienne'],
    ['cp' => '15000', 'ville' => 'Aurillac'],
    ['cp' => '62000', 'ville' => 'Arras'],
    ['cp' => '68000', 'ville' => 'Colmar'],
    ['cp' => '41000', 'ville' => 'Blois'],
    ['cp' => '29000', 'ville' => 'Quimper'],
    ['cp' => '22000', 'ville' => 'Saint-Brieuc'],
    ['cp' => '51000', 'ville' => 'Châlons-en-Champagne'],
    ['cp' => '24000', 'ville' => 'Périgueux'],
    ['cp' => '83000', 'ville' => 'Toulon'],
    ['cp' => '50000', 'ville' => 'Saint-Lô'],
    ['cp' => '27000', 'ville' => 'Évreux'],
    ['cp' => '23000', 'ville' => 'Guéret'],
    ['cp' => '82000', 'ville' => 'Montauban'],
];










    //génération du nom
    $nom = $noms[array_rand($noms)];

    //génération du prénom
    $prenom = $prenoms[array_rand($prenoms)];

    //génération de rue1
    $numero = rand(1, 499);

    $extension = (rand(1, 100) <= 25) ? (rand(0, 1) == 0 ? " bis" : " ter") : "";

    $numeroRue1 = $numero . $extension;

    $rue1 = $numeroRue1 ." ". $typeRue1[array_rand($typeRue1)] ." ". $nomRue1[array_rand($nomRue1)];

    //génération de rue2
    $chance = rand(1,5);
    if ($chance <= 1) {
        
        $chance = rand(1, 100);

        if ($chance <= 50) {
            $numeroRue2 = (string) rand(1, 30);
        } elseif ($chance <= 75) {
            $numeroRue2 = $lettres[array_rand($lettres)];
        } else {
            $numeroRue2 = (string) rand(1, 30) . $lettres[array_rand($lettres)]; 
        }
        $rue2 = $typeRue2[array_rand($typeRue2)] ." ". $numeroRue2;
    } else {
        $rue2 = "";  
    }

    //génération de telephone
    $prefix = rand(1, 7);
    $suffix = rand(10000000, 99999999);

    $telephone = sprintf('%02d%08d', $prefix, $suffix);

    //génération de mail
    $suffixeMail = $suffixeMails[array_rand($suffixeMails)];

    $chance = rand(1,2);
    if ($chance === 1) {
        $email = strtolower($nom.".".$prenom.$suffixeMail);
    } else {
        $email = strtolower($prenom.".".$nom.$suffixeMail); 
    }

    $email = htmlentities($email, ENT_NOQUOTES, 'utf-8');
    $email = preg_replace('#&([A-za-z])(?:uml|circ|tilde|acute|grave|cedil|ring);#', '\1', $email);
    $email = preg_replace('#&([A-za-z]{2})(?:lig);#', '\1', $email);
    $email = preg_replace('#&[^;]+;#', '', $email);
    $email = str_replace(" ", "", $email);

    //génération de cp et ville


    $index = array_rand($communes);

    $code_postal = $communes[$index]['cp'];
    $ville = $communes[$index]['ville'];

    $actif = rand(0,1);

    //génération de $date_creation
    $timestamp = time() - rand(0, 60 * 60 * 24 * 365); // Une date aléatoire dans l'année précédente.
    $date_creation = date("Y-m-d H:i:s", $timestamp);

    //génération de $date_modification
    $modificationSeconds = rand(1, 60 * 60 * 24); // Ajout de quelques secondes à quelques jours
    $date_modification = date("Y-m-d H:i:s", $timestamp + $modificationSeconds);

    //génération de $mdp
    $bytes = random_bytes(20); //générer 20 octets aléatoires
    $mdp = bin2hex($bytes); //convertir les octets en une chaîne hexadécimale

    // Renvoyer les données sous forme de tableau associatif
    return [
        'email' => $email,
        'mdp' => $mdp,
        'nom' => $nom,
        'prenom' => $prenom,
        'rue1' => $rue1,
        'rue2' => $rue2,
        'code_postal' => $code_postal,
        'ville' => $ville,
        'telephone' => $telephone,
        'actif' => $actif,
        'date_creation' => $date_creation,
        'date_modification' => $date_modification,
        'numero_adherent' => $numero_adherent
    ];
}

try {
    $dbh = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Début de la transaction
    $dbh->beginTransaction();

    $stmt = $dbh->prepare("INSERT INTO utilisateur 
        (email, mdp, nom, prenom, rue1, rue2, code_postal, ville, telephone, actif, date_creation, date_modification, numero_adherent) 
        VALUES (:email, :mdp, :nom, :prenom, :rue1, :rue2, :code_postal, :ville, :telephone, :actif, :date_creation, :date_modification, :numero_adherent)");

    $emails = [];
    for ($i = 0; $i < $nombre_clients; $i++) {
        $user = generateUserData($numero_adherent);

        if (isset($emails[$user['email']])) {
            continue;
        }
        $emails[$user['email']] = true;

        $stmt->bindValue(':email', $user['email']);
        $stmt->bindValue(':mdp', $user['mdp']);
        $stmt->bindValue(':nom', $user['nom']);
        $stmt->bindValue(':prenom', $user['prenom']);
        $stmt->bindValue(':rue1', $user['rue1']);
        $stmt->bindValue(':rue2', $user['rue2']);
        $stmt->bindValue(':code_postal', $user['code_postal']);
        $stmt->bindValue(':ville', $user['ville']);
        $stmt->bindValue(':telephone', $user['telephone']);
        $stmt->bindValue(':actif', $user['actif'], PDO::PARAM_INT);
        $stmt->bindValue(':date_creation', $user['date_creation']);
        $stmt->bindValue(':date_modification', $user['date_modification']);
        $stmt->bindValue(':numero_adherent', $user['numero_adherent'], PDO::PARAM_INT);

        $stmt->execute();
    }

    $dbh->commit();

    echo "Les données des utilisateurs ont &eacute;t&eacute; insérées avec succès.\n";

} catch (PDOException $e) {
    $dbh->rollBack();
    echo "Erreur : " . $e->getMessage();
}