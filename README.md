# EatArt Webshop
EatArt is een project van NHL Stenden. Studenten Docent Beeldende Kunst en Vormgeving (DBKV) volgen in hun tweede jaar het vak Toegepaste Vormgeving. Hiervoor maken zij een serie van vier werkstukken die als cadeautjes verkocht kunnen worden, een soort 'kunst-snacks'. Deze cadeautjes worden nu alleen fysiek verkocht in een mooie kast in de reprowinkel (Documents Centre).

De EatArt Webshop brengt daar verandering in. Opa en oma uit Zeeland kunnen nu ook een EatArt-product van hun kleinzoon of -dochter bestellen en betalen via iDeal.

Een tweede functie van de website is om eerder gemaakte producten te presenteren in een museumdeel.

# Installatie
Om het project op een lokale machine te installeren zijn er flink wat stappen nodig. Geen zorgen, wij loodsen je erdoorheen!

1. Open je Terminal (of een andere shell afhankelijk van je OS en voorkeur) en ga naar de folder waar je de EatArt Webshop wilt installeren, bijvoorbeeld MySites.
2. Nu gaan we het project clonen. Type het volgende commando in: "git clone https://github.com/SwartBosProductions/eatartwebshop.git". (Je kunt dit adres vinden rechtsboven op onze GitHub-repo als je op de button 'Code' klikt onder het kopje 'Clone' tabje 'HTTPS'.) Het project wordt nu gecloned op je machine.
3. Type 'cd eatartwebshop'. Nu zit je in de project-folder. Als je 'ls' tikt zie je alle files. 
4. Nu moet je alle packages installeren. Dat doe je met de volgende commando's in Terminal:
    a. composer install
    b. npm install 
    c. npm run dev
5. De volgende stap is om een .env-file aan te maken. Dit bestand delen we niet op GitHub omdat het onder meer inloggegevens bevat. Open de file '.env-example' in je Code Editor, deze vind je in de root-folder. Sla dit bestand vervolgens op als '.env'. Hier zal de website zoeken naar de sleutels om toegang te krijgen tot allerlei zaken.
6. Nu moet je de database-connectie instellen, dat is het blokje waar de keys met 'DB' beginnen. Vooral je DB_USERNAME en DB_PASSWORD moet je hier invoeren, zodat je op je eigen machine een database aan kunt maken. Gebruik hiervoor je eigen mysql inloggegevens. Ben je hier niet mee bekend, dan kun je 'root' laten staan en het wachtwoord leeglaten, meestal werkt dat. Denk er wel om dat iedere gebruiker op jouw computer daar makkelijk toegang toe heeft.
7. Nu moeten we de APP_KEY genereren. In je terminal type je het volgende commando in: "php artisan key:generate".
8. Open nu je database-programma. Ik gebruik Sequel Ace op de Mac, een ander voorbeeld is phpMyAdmin of MySQL Workbench. Log in als de gebruiker die je in de .env-file hebt opgegeven. Maak een database aan (Add database) met de naam 'eatartwebshop'.
9. We zijn er bijna! Nu gaan we de database vullen door te migreren. Ga terug naar Terminal en type het volgende commando in: "php artisan migrate" of "php artisan migrate --seed" als je ook onze testdata wilt gebruiken.
10. Als je Laravel Valet gebruikt om te testen, dan moet je nog zorgen dat Valet toegang heeft tot de projectfolder. Vanuit 'eatartwebshop' in Terminal, of in de bovenliggende folder als je dat wilt, type je het commando 'valet park' in. Is de bovenliggende folder al 'geparkeerd' dan is deze stap niet nodig.
11. In je browser type je nu 'eatartwebshop.test' en je kunt gaan testen!
12. In plaats van Valet kun je ook localhost gebruiken, type dan in Terminal "php -S localhost:8080" en in je browser "localhost:8080" (of kies een ander poortnummer, als ze maar overeenkomen en werken).
13. Een derde optie is "php artisan serve" in Terminal en "localhost:8000" in de browser. Wil je een ander poortje, voeg dat dan is als optie "php artisan serve --port=8080" (of een ander poortnummer naar keuze).
14. Dertien stappen brengen ongeluk. Nog een tip voor als je testdata verandert in de seeders en opnieuw wilt seeden, type dan "php artisan migrate:fresh --seed" (anders krijg je een foutmelding over duplicatie).

Mocht je er niet uitkomen, neem dan contact met ons op via bosma.jorrit@gmail.com. 

ForestBlack Productions bestaat uit Folkert Swart en Jorrit Bosma.
Dit is ons eindproject voor CodeGorilla Groningen, een web developer bootcamp. Onze opdrachtgever is NHL Stenden Leeuwarden. Als alles goed gaat zullen we ons project deployen en zal het in het wild gebruikt gaan worden.

Feedback en verbeterpunten zijn daarom meer dan welkom, mail die ons gerust!
