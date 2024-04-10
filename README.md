# Laravel BDoctors

Laravel BDoctors rappresenta la parte back-end di un sito web progettato per semplificare la gestione e la promozione delle attività mediche online. Il nostro team, composto da Nicolò, Dario, Nazariy, Christian e Luca, ha collaborato per creare questa piattaforma dedicata agli operatori sanitari, offrendo loro uno strumento intuitivo e sicuro per registrarsi, aggiornare il proprio profilo e interagire con i pazienti in modo efficiente.

## Caratteristiche Principali

- **Registrazione del Medico**: I medici possono registrarsi inserendo le loro informazioni personali, specializzazioni e prestazioni offerte.
- **Gestione delle Recensioni e dei Messaggi**: I medici iscritti possono visualizzare e gestire le recensioni e i messaggi inviati dai loro pazienti direttamente dal pannello di controllo, incluso l'opzione per eliminare i messaggi indesiderati.
- **Statistiche Dettagliate**: I medici hanno accesso a grafici dettagliati che mostrano il numero di messaggi, recensioni e la media dei voti ricevuti, suddivisi per mese, offrendo un'analisi completa delle attività e delle prestazioni nel tempo.
- **Sponsorizzazione**: I medici hanno la possibilità di aumentare la visibilità del loro profilo selezionando un piano di sponsorizzazione (base, avanzato o premium) che li posiziona in cima ai risultati di ricerca degli utenti.
- **Gestione del Profilo**: I medici possono modificare o eliminare il proprio profilo in qualsiasi momento per mantenere le informazioni aggiornate e accurate.
- **Responsive al 100%**: Il sito è completamente responsive e ottimizzato per essere visualizzato su dispositivi mobili, garantendo un'esperienza utente fluida su smartphone.

## Tecnologie Utilizzate

- **Front-end**: HTML, SCSS, Bootstrap.
- **Back-end**: PHP, Laravel.
- **Pagamenti**: Braintree.
- **Grafici**: Chart.js.

## Contatti

Ecco i profili GitHub di tutti i membri del gruppo:

- Nicolò: [GitHub](https://github.com/nicomanunta)
- Dario: [GitHub](https://github.com/DarioLoForti)
- Nazariy: [GitHub](https://github.com/Zariy7)
- Christian: [GitHub](https://github.com/Gresdian)
- Luca: [GitHub](https://github.com/LucaFormica17)

## Installazione

1. Clona il repository dal seguente link: [https://github.com/nicomanunta/laravel-bdoctors.git].
2. Esegui `composer install` per installare le dipendenze PHP.
3. Copia il file `.env.example` in un nuovo file chiamato `.env` e configura le variabili d'ambiente, inclusi i dettagli del database e le credenziali di Braintree.
4. Esegui `php artisan key:generate` per generare la chiave dell'applicazione.
5. Esegui `php artisan migrate` per eseguire le migrazioni del database.
6. Esegui `php artisan serve` per avviare il server locale.

