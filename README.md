# EatArt Webshop
EatArt is een project van NHL Stenden. Studenten Docent Beeldende Kunst en Vormgeving (DBKV) volgen in hun tweede jaar het vak Toegepaste Vormgeving. Hiervoor maken zij een serie van vier werkstukken die als cadeautjes verkocht kunnen worden, een soort 'kunst-snacks'. Deze cadeautjes worden nu alleen fysiek verkocht in een mooie kast in de reprowinkel (Docuemnts Centre).

De EatArt Webshop brengt daar verandering in. Opa en oma uit Zeeland kunnen nu ook een EatArt-product van hun kleinzoon of -dochter bestellen en betalen via iDeal.

Een tweede functie van de website is om eerder gemaakte producten te presenteren in een museumdeel.

# Installatie
Om het project op een lokale machine te installeren zijn er flink wat stappen nodig. Geen zorgen, wij loodsen je erdoorheen!

1. Open je Terminal (of een andere shell afhankelijk van je OS en voorkeur) en ga naar de folder waar je de EatArt Webshop wilt installeren, bijvoorbeeld MySites.
2. Nu gaan we het project clonen. Type het volgende commando in: "git clone https://github.com/SwartBosProductions/eatartwebshop.git". (Je kunt dit adres vinden rechtsboven op onze GitHub-repo als je op de button 'Code' klikt onder Clone.)
3. Type cd eatartwebshop. Nu zit je in de project-folder. Als je 'ls' tikt zie je alle files. Ook kun je het project desgewenst openen in een Code Editor, bijvoorbeeld VSCode.
4. Nu moet je alle packages installeren. Dat doe je met de volgende commando's:
    a. composer install
    b. npm install 
    c. npm run dev
5. De volgende stap is om een .env-file aan te maken. Open .env-example in je Code Editor. Sla dit bestand vervolgens op als '.env'.
6. Nu moet je de database-connectie instellen, dat is het blokje waar de keys met DB beginnen. Vooral je DB_USERNAME en DB_PASSWORD moet je hier invoeren, zodat je op je eigen machine een database aan kunt maken. Gebruik hiervoor je eigen mysql inloggegevens. Ben je hier niet mee bekend, dan kun je 'root' laten staan en het wachtwoord leeglaten, meestal werkt dat.
7. Nu moeten we de APP_KEY genereren. In je terminal type je het volgende commando in: "php artisan key:generate".
8. Open nu je database-programma. Ik gebruik Sequel Ace op de Mac, een ander voorbeeld is phpMyAdmin of MySQL Workbench. Log in als de gebruiker die je in de .env-file hebt opgegeven. Maak een database aan (Add database) met de naam 'eatartwebshop'.
9. We zijn er bijna! Nu gaan we de database vullen door te migreren. Ga terug naar Terminal en type het volgende commando in: "php artisan migrate".
10. Als je Laravel Valet gebruikt om te testen, dan moet je de folder van het project nog toevoegen. Vanuit 'eatartwebshop' in Terminal, of in de bovenliggende folder als je dat wilt, type je het commando 'valet park'.
11. In je browser type je nu 'eatartwebshop.test' en je kunt gaan testen.
12. In plaats van Valet kun je ook localhost gebruiken, type dan in Terminal "php -S localhost:8080" en in je browser "localhost:8080".
13. Een derde optie is "php artisan serve" in Terminal en "localhost:8000" in de browser.

Mocht je er niet uitkomen, neem dan contact op via bosma.jorrit@gmail.com. 

Feedback en verbeterpunten zijn altijd welkom, mail die ons gerust!
