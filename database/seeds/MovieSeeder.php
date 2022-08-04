<?php

use App\Movie;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movies = [
            [
                'title' => 'The wolf of wall street',
                'overview' => "",
                'thumb' => 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/hwg3pXw2m4HfRGbyRMIP8laf5Lf.jpg',
                'rating' => '8',
                'running_time' => '120',
                'release_date' => '2014/01/23',
                'language' => 'en'
            ],
            [
                'title' => 'Interstellar',
                'overview' => "In seguito alla scoperta di un cunicolo spazio-temporale, un gruppo di esploratori si avventura in una eroica missione per tentare di superare i limiti della conquista spaziale e oltrepassare le distanze che fino a quel momento avevano reso impraticabili i viaggi interstellari. L'obiettivo è quello di trovare nuovi luoghi dove coltivare il granoturco, l'unica coltivazione rimasta dopo un drastico cambiamento climatico che ha colpito soprattutto l'agricoltura.",
                'thumb' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/9PTvvflydmTnfvMWMAwMMkV7X2s.jpg',
                'rating' => '8',
                'running_time' => '169',
                'release_date' => '2014/06/11',
                'language' => 'en'
            ],
            [
                "title" => "The walking dead",
                "overview" => "",
                "thumb" => "https://www.themoviedb.org/t/p/w300_and_h450_bestv2/80GXjqT5OtRWxo2TWbFeywGUvUM.jpg",
                "rating" => "6",
                "running_time" => "107",
                "release_date" => "2012/05/01",
                "language" => "en"
            ],
            [
                "title" => "Legend",
                "overview" => "La vera storia dell'ascesa e della caduta dei famigerati gangster londinesi, i gemelli Kray, che insieme conquistarono la città di Londra. Non appena Ronnie esce di prigione, i due fratelli cercano di consolidare il proprio potere nell’ East End londinese, alleandosi con lo spietato gangster Charlie Richardson e la sua gang, e lavorando al fianco della mafia americana, desiderosa di trasferire la propria egemonia da L’Avana a Londra. Acclamati al pari di vere e proprie celebrità, i Kray sono corteggiati da personaggi ricchi e famosi, e il loro potere raggiunge i vertici dell’establishment inglese. Sono inarrestabili. Reggie si innamora di una ragazza del suo quartiere, Frances Shea, e la sposa. Promette di rigare dritto e diventa il proprietario di diversi nightclub...",
                "thumb" => "https://www.themoviedb.org/t/p/w300_and_h450_bestv2/oHCJA5XbQWxQcJtUJDWpPNY9am0.jpg",
                'rating' => '3',
                'running_time' => '204',
                "release_date" => "2015/05/10",
                "language" => "en"
            ],
            [
                "title" => "Transformers 4 - L'era dell'estinzione",
                "overview" => "Cinque anni dopo i disastrosi eventi che hanno devastato Chicago, trasformandola in un campo di battaglia, la CIA ha segretamente deciso di mettere fine alla presenza dei Transformers sul suolo terrestre. Persino il leader degli Autobot, Optimus Prime, è costretto a nascondersi, almeno finché Cade Yeager, un inventore temerario ma sfortunato, finisce per ritrovarlo accidentalmente.",
                "thumb" => "https://www.themoviedb.org/t/p/w300_and_h450_bestv2/At8uDiq4kiB01wPhlwdvKIs55qX.jpg",
                "rating" => "5",
                "running_time" => "165",
                "release_date" => "2014/07/16",
                "language" => "it",
            ],
            [
                'title' => 'Sing 2 - Sempre più forte',
                'overview' => "Buster e il suo cast hanno trasformato il New Moon Theater in un successo locale, ma Buster ha messo gli occhi su un premio più grande: Debuttare con un nuovo spettacolo al Crystal Tower Theater nell’affascinante Redshore City. Ma senza conoscenze, Buster e i suoi devono intrufolarsi negli uffici di fama mondiale Crystal Entertainment, gestiti da un lupo magnate e spietato di nome Jimmy Crystal. In un disperato tentativo di ottenere l’attenzione di Mr. Crystal, Gunter lancia spontaneamente un’idea che Buster accetta con facilità, promettendo che nel loro nuovo spettacolo ci sarà la leggenda del leone rock Clay Calloway. Il problema è che Buster non ha mai incontrato Clay, artista che si è allontanato dal mondo più di dieci anni fa e dopo la perdita di sua moglie. Mentre Gunter aiuta Buster a sognare un capolavoro teatrale, e la pressione (e le minacce sinistre) di Mr. Crystal Mount, Buster intraprende una ricerca per trovare Clay e convincerlo a tornare sul palco.",
                'thumb' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/tyuZo3ZgtNszmN0HTx8dLTQbs46.jpg',
                'rating' => '8',
                'running_time' => '110',
                'release_date' => '2021/12/23',
                'language' => 'en'
            ],
            [
                'title' => 'In Time',
                'overview' => "Will Salas ha venticinque anni da tre anni e la volontà di resistere in un mondo in cui il tempo che resta da vivere è denaro. Nel futuro di Will, uomini e donne sono geneticamente programmati per raggiungere i venticinque anni, età dopo la quale avranno diritto a un anno extra e a una vita affannata e consumata a guardare il proprio orologio biologico. Un timer digitale che segna ogni minuto, ora, giorno, mese, anno guadagnato lavorando o rubando. Figlio premuroso di una madre mai invecchiata, Will salva la vita a un uomo ricco di tempo che intuisce la sua nobiltà e lo ricambia con un secolo di vita. Un secolo che Will è deciso a investire, raggiungendo la Time Zone, dove i ricchi vivono blindati e a spese dei più miserabili, e sfidando l'ordine costituito. Lo aiuterà imprevedibilmente nell'impresa una ricca ereditiera dai grandi occhi e il grande cuore, pronta a ipotecare l'immortalità e a 'spendere' finalmente la propria vita.",
                'thumb' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/xrbO72pM0cX7PuhHyn5FMhrWAYF.jpg',
                'rating' => '7',
                'running_time' => '109',
                'release_date' => '2012/02/17',
                'language' => 'en'
            ],
            [
                'title' => 'Shark - Il primo squalo',
                'overview' => "Un sommergibile oceanico, parte di un programma internazionale di osservazione sottomarina, viene attaccato da un’imponente creatura che si riteneva estinta e che ora giace sul fondo della fossa più profonda del Pacifico… e il suo equipaggio è intrappolato all’interno. Il tempo stringe, l’esperto di salvataggi subacquei Jonas Taylor viene incaricato da un visionario oceanografo cinese, contro il volere della figlia Suyin, di salvare l’equipaggio. e l’oceano stesso. da questa inarrestabile minaccia: uno squalo preistorico di quasi 23 metri conosciuto come Megalodon. Quello che nessuno avrebbe potuto immaginare era che, anni prima, Taylor si era già trovato faccia a faccia con quella terrificante creatura. E ora, in squadra con Suyin, deve affrontare le sue paure e mettere a rischio la propria vita per salvare l’equipaggio intrappolato laggiù e ritrovarsi ancora una volta di fronte al più grande predatore di tutti i tempi.",
                'thumb' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/tHT3u11zqloxCKokYHhCEak2BVX.jpg',
                'rating' => '6',
                'running_time' => '112',
                'release_date' => '2018/08/09',
                'language' => 'en'
            ],
            [
                'title' => 'Amore & Altri Rimedi',
                'overview' => "Il donnaiolo Jamie Randall lavora come rappresentante di viagra per un'importante industria farmaceutica, Pfizer, il suo fascino e la sua parlantina lo rendono uno dei migliori nel suo campo. Durante una delle sue vendite conosce Maggie Murdock, una donna affetta dal morbo di Parkinson. I due si innamoreranno, vivendo un'intensa storia d'amore.",
                'thumb' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/7XhJxFupnnvaKrByg8fprm4Xlh3.jpg',
                'rating' => '7',
                'running_time' => '118',
                'release_date' => '2011/02/18',
                'language' => 'en'
            ],
        ];

        foreach ($movies as $movie) {

            $data = new Movie;

            $data->title = $movie["title"];
            $data->overview = $movie["overview"];
            $data->thumb = $movie["thumb"];
            $data->rating = $movie["rating"];
            $data->running_time = $movie["running_time"];
            $data->release_date = $movie["release_date"];
            $data->language = $movie["language"];

            $data->save();
        }
    }
}
