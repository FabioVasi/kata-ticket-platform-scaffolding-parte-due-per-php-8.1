<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Operator;
use App\Models\Priority;
use App\Models\Status;
use App\Models\Ticket;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $ticketDatas =  array (
                0 => array (
                'titolo' => 'Problema di connessione Internet',
                'descrizione' => 'Il cliente sta riscontrando difficoltà nel connettersi a Internet. Potrebbe essere necessario verificare la connessione Wi-Fi o la configurazione del modem/router.',
                ),
                1 => array (
                'titolo' => 'Schermo del computer non si accende',
                'descrizione' => 'Il cliente segnala che lo schermo del suo computer non si accende. Potrebbe essere necessario controllare i cavi di alimentazione o verificare eventuali problemi hardware.',
                ),
                2 => array (
                'titolo' => 'Impossibile stampare documenti',
                'descrizione' => 'Il cliente ha riscontrato problemi nella stampa di documenti. Potrebbe essere necessario controllare lo stato della stampante o l\'inchiostro/cartucce.',
                ),
                3 => array (
                'titolo' => 'Richiesta di installazione software',
                'descrizione' => 'Il cliente richiede l\'installazione di un nuovo software sul suo computer. Assicurarsi di fornire istruzioni dettagliate per l\'installazione.',
                ),
                4 => array (
                'titolo' => 'Errore durante l\'accesso all\'account',
                'descrizione' => 'Il cliente non riesce ad accedere al suo account. Potrebbe essere necessario reimpostare la password o verificare eventuali problemi con l\'account stesso.',
                ),
                5 => array (
                'titolo' => 'Password dimenticata',
                'descrizione' => 'Il cliente ha dimenticato la sua password e richiede assistenza per il ripristino dell\'accesso al suo account.',
                ),
                6 => array (
                'titolo' => 'Lentezza del sistema',
                'descrizione' => 'Il cliente lamenta una notevole lentezza del sistema. Potrebbe essere necessario eseguire una pulizia del disco o verificare la presenza di malware.',
                ),
                7 => array (
                'titolo' => 'File corrotto o danneggiato',
                'descrizione' => 'Il cliente ha riscontrato errori durante l\'apertura di file specifici. Potrebbe essere necessario eseguire un controllo dell\'integrità del disco rigido.',
                ),
                8 => array (
                'titolo' => 'Rumori strani dal computer',
                'descrizione' => 'Il cliente sente rumori strani provenienti dal suo computer. Potrebbe essere necessario controllare la ventola o verificare la presenza di polvere all\'interno del case.',
                ),
                9 => array (
                'titolo' => 'Problema con la posta elettronica',
                'descrizione' => 'Il cliente ha problemi con la sua casella di posta elettronica. Potrebbe essere necessario controllare le impostazioni di configurazione o lo spazio disponibile.',
                ),
                10 => array (
                'titolo' => 'Aggiornamento del sistema operativo necessario',
                'descrizione' => 'Il cliente ha bisogno di aggiornare il sistema operativo del suo computer. Assicurarsi che il sistema sia compatibile con la nuova versione.',
                ),
                11 => array (
                'titolo' => 'Backup dei dati',
                'descrizione' => 'Il cliente richiede assistenza per eseguire il backup dei suoi dati. Fornire indicazioni su come eseguire un backup sicuro e affidabile.',
                ),
                12 => array (
                'titolo' => 'Errore durante il caricamento di pagine web',
                'descrizione' => 'Il cliente sta riscontrando errori durante il caricamento di alcune pagine web specifiche. Potrebbe essere necessario verificare la connessione Internet o il browser utilizzato.',
                ),
                13 => array (
                'titolo' => 'Problema di visualizzazione video',
                'descrizione' => 'Il cliente ha problemi di visualizzazione video sul suo computer. Potrebbe essere necessario aggiornare i driver della scheda video o controllare la risoluzione dello schermo.',
                ),
                14 => array (
                'titolo' => 'Problema di audio',
                'descrizione' => 'Il cliente ha problemi con l\'audio sul suo computer. Potrebbe essere necessario controllare le impostazioni dell\'audio o aggiornare i driver della scheda audio.',
                ),
                15 => array (
                'titolo' => 'Aggiornamento antivirus',
                'descrizione' => 'Il cliente richiede un aggiornamento dell\'antivirus sul suo computer. Assicurarsi che l\'antivirus sia aggiornato alle ultime definizioni di virus.',
                ),
                16 => array (
                'titolo' => 'Errore di sistema',
                'descrizione' => 'Il cliente ha riscontrato un errore di sistema durante l\'utilizzo del suo computer. Potrebbe essere necessario controllare i log di sistema per individuare la causa dell\'errore.',
                ),
                17 => array (
                'titolo' => 'Problema di compatibilità software',
                'descrizione' => 'Il cliente sta riscontrando problemi di compatibilità con un software specifico. Potrebbe essere necessario verificare i requisiti di sistema del software o eseguire l\'applicazione in modalità compatibilità.',
                ),
                18 => array (
                'titolo' => 'Modifica delle impostazioni di rete',
                'descrizione' => 'Il cliente richiede assistenza per modificare le impostazioni di rete sul suo computer. Fornire indicazioni su come configurare correttamente la connessione di rete.',
                ),
                19 => array (
                'titolo' => 'Risposta lenta del mouse o del touchpad',
                'descrizione' => 'Il cliente lamenta una risposta lenta del mouse o del touchpad sul suo computer. Potrebbe essere necessario pulire o sostituire il dispositivo di input.',
                ),
                20 => array (
                'titolo' => 'Recupero dati persi',
                'descrizione' => 'Il cliente ha bisogno di recuperare dati persi o eliminati accidentalmente dal suo computer. Potrebbe essere necessario utilizzare un software di recupero dati o contattare un professionista.',
                ),
                21 => array (
                'titolo' => 'Surriscaldamento del computer',
                'descrizione' => 'Il cliente segnala un surriscaldamento del suo computer. Potrebbe essere necessario verificare la ventilazione o pulire i dissipatori di calore.',
                ),
                22 => array (
                'titolo' => 'Problema di configurazione del router',
                'descrizione' => 'Il cliente ha problemi di configurazione del router di rete. Potrebbe essere necessario resettare il router o controllare le impostazioni di configurazione.',
                ),
                23 => array (
                'titolo' => 'Errore di stampa',
                'descrizione' => 'Il cliente ha riscontrato errori durante la stampa di documenti. Potrebbe essere necessario controllare la stampante o la configurazione di stampa.',
                ),
                24 => array (
                'titolo' => 'Dispositivo USB non riconosciuto',
                'descrizione' => 'Il cliente ha collegato un dispositivo USB al suo computer ma non viene riconosciuto. Potrebbe essere necessario verificare i driver del dispositivo o provare una porta USB diversa.',
                ),
                25 => array (
                'titolo' => 'Problema di sicurezza informatica',
                'descrizione' => 'Il cliente segnala un potenziale problema di sicurezza informatica sul suo computer. Potrebbe essere necessario eseguire una scansione antivirus completa o verificare eventuali accessi non autorizzati.',
                ),
                26 => array (
                'titolo' => 'Accesso negato a file o cartelle',
                'descrizione' => 'Il cliente ha difficoltà ad accedere a determinati file o cartelle sul suo computer. Potrebbe essere necessario controllare le autorizzazioni di accesso o reimpostare i permessi.',
                ),
                27 => array (
                'titolo' => 'Problema di hardware',
                'descrizione' => 'Il cliente ha riscontrato problemi hardware sul suo computer. Potrebbe essere necessario eseguire un controllo hardware o contattare un tecnico specializzato.',
                ),
                28 => array (
                'titolo' => 'Errore di installazione driver',
                'descrizione' => 'Il cliente ha riscontrato errori durante l\'installazione dei driver di periferica sul suo computer. Potrebbe essere necessario verificare la compatibilità dei driver o reinstallare i driver corretti.',
                ),
                29 => array (
                'titolo' => 'Errore di sincronizzazione dei file',
                'descrizione' => 'Il cliente sta avendo problemi di sincronizzazione dei file tra dispositivi. Potrebbe essere necessario verificare le impostazioni di sincronizzazione o utilizzare un software di sincronizzazione alternativo.',
                ),
                30 => array (
                'titolo' => 'Aggiornamento del sistema operativo necessario',
                'descrizione' => 'Il cliente ha bisogno di aggiornare il sistema operativo del suo computer. Assicurarsi che il sistema sia compatibile con la nuova versione.',
                ),
                33 => array (
                'titolo' => 'Backup dei dati',
                'descrizione' => 'Il cliente richiede assistenza per eseguire il backup dei suoi dati. Fornire indicazioni su come eseguire un backup sicuro e affidabile.',
                ),
                32 => array (
                'titolo' => 'Errore durante il caricamento di pagine web',
                'descrizione' => 'Il cliente sta riscontrando errori durante il caricamento di alcune pagine web specifiche. Potrebbe essere necessario verificare la connessione Internet o il browser utilizzato.',
                ),
                33 => array (
                'titolo' => 'Problema di visualizzazione video',
                'descrizione' => 'Il cliente ha problemi di visualizzazione video sul suo computer. Potrebbe essere necessario aggiornare i driver della scheda video o controllare la risoluzione dello schermo.',
                ),
                34 => array (
                'titolo' => 'Problema di audio',
                'descrizione' => 'Il cliente ha problemi con l\'audio sul suo computer. Potrebbe essere necessario controllare le impostazioni dell\'audio o aggiornare i driver della scheda audio.',
                ),
                35 => array (
                'titolo' => 'Aggiornamento antivirus',
                'descrizione' => 'Il cliente richiede un aggiornamento dell\'antivirus sul suo computer. Assicurarsi che l\'antivirus sia aggiornato alle ultime definizioni di virus.',
                ),
                36 => array (
                'titolo' => 'Errore di sistema',
                'descrizione' => 'Il cliente ha riscontrato un errore di sistema durante l\'utilizzo del suo computer. Potrebbe essere necessario controllare i log di sistema per individuare la causa dell\'errore.',
                ),
                37 => array (
                'titolo' => 'Problema di compatibilità software',
                'descrizione' => 'Il cliente sta riscontrando problemi di compatibilità con un software specifico. Potrebbe essere necessario verificare i requisiti di sistema del software o eseguire l\'applicazione in modalità compatibilità.',
                ),
                38 => array (
                'titolo' => 'Modifica delle impostazioni di rete',
                'descrizione' => 'Il cliente richiede assistenza per modificare le impostazioni di rete sul suo computer. Fornire indicazioni su come configurare correttamente la connessione di rete.',
                ),
                39 => array (
                'titolo' => 'Risposta lenta del mouse o del touchpad',
                'descrizione' => 'Il cliente lamenta una risposta lenta del mouse o del touchpad sul suo computer. Potrebbe essere necessario pulire o sostituire il dispositivo di input.',
                ),
                40 => array (
                'titolo' => 'Recupero dati persi',
                'descrizione' => 'Il cliente ha bisogno di recuperare dati persi o eliminati accidentalmente dal suo computer. Potrebbe essere necessario utilizzare un software di recupero dati o contattare un professionista.',
                ),
                41 => array (
                'titolo' => 'Surriscaldamento del computer',
                'descrizione' => 'Il cliente segnala un surriscaldamento del suo computer. Potrebbe essere necessario verificare la ventilazione o pulire i dissipatori di calore.',
                ),
                44 => array (
                'titolo' => 'Problema di configurazione del router',
                'descrizione' => 'Il cliente ha problemi di configurazione del router di rete. Potrebbe essere necessario resettare il router o controllare le impostazioni di configurazione.',
                ),
                43 => array (
                'titolo' => 'Errore di stampa',
                'descrizione' => 'Il cliente ha riscontrato errori durante la stampa di documenti. Potrebbe essere necessario controllare la stampante o la configurazione di stampa.',
                ),
                44 => array (
                'titolo' => 'Dispositivo USB non riconosciuto',
                'descrizione' => 'Il cliente ha collegato un dispositivo USB al suo computer ma non viene riconosciuto. Potrebbe essere necessario verificare i driver del dispositivo o provare una porta USB diversa.',
                ),
                45 => array (
                'titolo' => 'Problema di sicurezza informatica',
                'descrizione' => 'Il cliente segnala un potenziale problema di sicurezza informatica sul suo computer. Potrebbe essere necessario eseguire una scansione antivirus completa o verificare eventuali accessi non autorizzati.',
                ),
                46 => array (
                'titolo' => 'Accesso negato a file o cartelle',
                'descrizione' => 'Il cliente ha difficoltà ad accedere a determinati file o cartelle sul suo computer. Potrebbe essere necessario controllare le autorizzazioni di accesso o reimpostare i permessi.',
                ),
                47 => array (
                'titolo' => 'Problema di hardware',
                'descrizione' => 'Il cliente ha riscontrato problemi hardware sul suo computer. Potrebbe essere necessario eseguire un controllo hardware o contattare un tecnico specializzato.',
                ),
                48 => array (
                'titolo' => 'Errore di installazione driver',
                'descrizione' => 'Il cliente ha riscontrato errori durante l\'installazione dei driver di periferica sul suo computer. Potrebbe essere necessario verificare la compatibilità dei driver o reinstallare i driver corretti.',
                ),
                49 => array (
                'titolo' => 'Errore di sincronizzazione dei file',
                'descrizione' => 'Il cliente sta avendo problemi di sincronizzazione dei file tra dispositivi. Potrebbe essere necessario verificare le impostazioni di sincronizzazione o utilizzare un software di sincronizzazione alternativo.',
                ),
            );


            foreach ($ticketDatas as $ticketData){
                $ticket = new Ticket();
                $ticket->category_id = Category::inRandomOrder()->first()->id;
                $ticket->priority_id = Priority::inRandomOrder()->first()->id;
                $ticket->operator_id = Operator::inRandomOrder()->first()->id;
                $ticket->status_id  = Status::inRandomOrder()->first()->id;
                $ticket->title = $ticketData['titolo'];
                $ticket->description = $ticketData['descrizione'];
                $ticket->notes = fake()->realText();
                $ticket->date = fake()->dateTimeBetween('-4 days');
                $ticket->save();
            }

    }
}
