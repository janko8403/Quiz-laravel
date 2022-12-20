<?php

use Illuminate\Database\Seeder;
use App\Language;

class LanguageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new Language();
        $admin->lng = 'pl';
        $admin->long_lng = 'Poland';
        $admin->field_1 = '<p>Drodzy <strong>PEPCOwicze,</strong> <br><br> Kolejny, operacyjny rok za nami, a kolejny sezon świąteczny przed nami, więc tradycji musi stać się zadość i jak co roku, spotkamy się na naszej <strong>konferencji!</strong></p>';
        $admin->field_2 = '29 WRZEŚNIA';
        $admin->field_3 = 'ONLINE / NA ŻYWO';
        $admin->field_4 = '<p class="text-justify">Tegoroczna konferencja zatytułowana jest, podobnie jak nasza firmowa strategia - <strong>GROWING OUR BUSINESS - GROWING OUR PEOPLE. </strong> Niezmiennie stawiamy na rozwój PEPCO i nas samych. Bo tylko dzięki Waszemu zaangażowaniu i sercu, jakie wkładacie w codzienną pracę, z każdym dniem zbliżamy się do osiągnięcia naszego celu, by stać się najlepszą, największą, najtańszą marką sklepów odzieżowo – przemysłowych w Europie.</p>
        <div class="spacer s3"></div>
        <p>Tegoroczna konferencja będzie składała się z trzech części:</p>';
        $admin->field_5 = 'Pierwszą z nich poprowadzi Trevor Masters, nasz Dyrektor Zarządzający, a jego gośćmi w studio będą dyrektorzy odpowiedzialni za poszczególne strategiczne obszary naszej działalności. W tej części dowiecie się, co z naszej wieloletniej strategii GROWING OUR BUSINESS - GROWING OUR PEOPLE udało nam się dotąd zrealizować i jakie mamy plany dla rozwoju poszczególnych obszarów na przyszłość.';
        $admin->field_6 = 'W drugiej zaś części spotkacie się z Ancą Radu i Alexem Cikaidze, naszymi Retail Directors of North and South Europe, którzy poruszą tematy operacyjne, a ich współpracownicy przekażą Wam informacje na temat projektów z zakresu między innymi finansów, IT, HR oraz marketingu.';
        $admin->field_7 = 'Natomiast ostatnią częścią naszej konferencji będą spotkania lokalne, podczas których połączycie się ze swoimi szefami operacyjnymi w podziale na rynki, omawiając tematy związane bezpośrednio z Waszym regionem.';
        $admin->field_8 = '<p class="text-justify">Wasze zdanie jest dla nas bardzo ważne. Dlatego <strong>chcemy Was zachęcić do wyrażania swoich opinii i zadawania pytań na czacie,</strong> który będzie dostępny przez cały czas trwania wydarzenia. Na koniec konferencji postaramy się na nie odpowiedzieć.</p>';
        $admin->field_9 = '<p class="text-justify"><strong> Udział w konferencji będzie możliwy poprzez zakładkę „Transmisja Live”, </strong> która umieszczona jest na tej stronie. Na kilka dni przed konferencją otrzymacie od nas maile z przypomnieniem o wydarzeniu oraz bezpośrednim linkiem do „Transmisji Live”. Dla Waszego komfortu przewidzieliśmy tłumaczenia symultaniczne dla każdego z języków.</p>';
        $admin->field_10 = '<p class="text-center">Przygotowaliśmy dla Was również kilka ciekawych konkursów z atrakcyjnymi nagrodami. Więcej szczegółów i zasady każdego z nich znajdziecie w dodatkowych zakładkach. Nie przegapcie tej okazji! Bawcie się z nami! Liczymy na wiele zgłoszeń</p>
        <div class="title-group-date">DO ZOBACZENIA 29 WRZEŚNIA!</div>';
        $admin->agenda = 'Agenda';
        $admin->agenda_txt = '    <div class="agenda-box">
        <div class="time"><span>11:00 - 12:15</span> &nbsp;&nbsp;&nbsp; Część I konferencji – główna</div>
        <div class="leader"><span>Prowadzący:</span> TREVOR MASTERS, MANAGING DIRECTOR</div>
        <div class="desc">
        Strategia / Wyniki / Xmas
        </div>
    </div>

    <div class="agenda-box mt-4">
        <div class="time"><span>12:15 - 13:00</span> &nbsp;&nbsp;&nbsp; Część II konferencji – operacyjna</div>
        <div class="leader"><span>Prowadzący:</span> Anca Radu & Aleksandr Čikaidze, Retail Directors at South & North Europe </div>
        <div class="desc">
        Wyniki i plany operacyjne / HR / Marketing 
        </div>
    </div>

    <div class="agenda-box mt-4">
        <div class="time"><span>13:00 - 13:20</span> &nbsp;&nbsp;&nbsp; Przerwa</div>
    </div>

    <div class="agenda-box mt-4">
        <div class="time"><span>13:20 - 14:00</span> &nbsp;&nbsp;&nbsp; Część III konferencji – lokalna </div>
        <div class="leader"><span>Prowadzący:</span> Regionalni OPS Managers  </div>
        <div class="desc">
        Pepco Champions
        </div>
    </div>';
        $admin->prelegenci = 'Prelegenci';
        $admin->competition = 'Konkurs';
        $admin->competition_1 = '<div class="title">LET THE SONG GROW</div>
        <div class="spacer s1"></div>
        <p>Muzyka łagodzi obyczaje, a wspólny śpiew łączy ludzi. „Śpiewać każdy może” jak mówi tytuł kultowej polskiej piosenki. Dlatego chcemy zaprosić Was do udziału w konkursie na stworzenie piosenki, w tekście której należy zawrzeć słowa „GROWING OUR BUSINESS – GROWING OUR PEOPLE”. Piosenka powinna wyrażać ducha wartości naszej firmy i planów na przyszłość, ale przede wszystkim ma być to dla Was dobra zabawa😊. Prosimy zapoznajcie się ze szczegółami konkursu, które znajdują się poniżej oraz z regulaminem konkursu, który znajduje się przy formularzu zgłoszeniowym.</p>
            
        <p>SZCZEGÓŁY KONKURSU: <br> 
        • Stwórzcie tekst piosenki, który będzie zawierał słowa „GROWING OUR BUSINESS – GROWING OUR PEOPLE”.<br>
        • Tekst może być dowolnej długości i w dowolnym języku. <br>
        • Piosenkę możecie wykonać dowolnym stylem muzycznym: a capella bądź z podkładem muzycznym. <br>
        • Możecie użyć przygotowanego przez nas podkładu muzycznego, który znajduje się poniżej. PODKŁAD MUZYCZNY DO POBRANIA Możecie również sami znaleźć dowolną ścieżkę dźwiękową w Internecie. Szukajcie muzycznych, darmowych stocków produkcyjnych. W każdym z krajów na pewno takie istnieją. Przykładem takiego stocku jest strona Free Music Archive https://freemusicarchive.org/home.<br>
        • Następnie nagrajcie dowolną techniką jak śpiewacie przygotowany utwór. Sugerujemy, aby użyć w tym celu telefonu.<br>
        • Pamiętajcie, że będziemy oceniali słowa piosenki i jej muzyczne wykonanie, a nie teledysk.<br>
        • Nagrany utwór zamieśćcie na MS OneDrive, z którego korzysta cała nasza firma. <br>
        • Wygenerujcie link do umieszczonego na MS OneDrive utworu i  wklejcie w formularzu zgłoszeniowym, który znajduje się obok. <br>
        • Koniecznie wypełnijcie wszystkie pola w formularzu zgłoszeniowym.<br>
        • Po wysłaniu do nas swojej pracy konkursowej otrzymacie maila z potwierdzeniem, że ją otrzymaliśmy.<br>
        • Na zgłoszenia czekamy do 15 września.<br>
        • Zwycięzców ogłosimy podczas naszej konferencji w dniu 29 września.<br>
        • Spośród nadesłanych zgłoszeń wybierzemy jednego zwycięzcę lub zwycięski team. Nagrodą główną jest zestaw do karaoke Vonyx SBS50L z mikrofonem, bluetooth i efektem świetlnym. Jeżeli zwycięży piosenka przygotowana przez team – każdy z członów zespołu otrzyma jeden zestaw.</p>

        <div class="row">
            <div class="col-md-5 col-xs-12">
                <p>Nagroda główna dla zespołu z najciekawszą piosenką to wspaniałe <strong>ZESTAWY KARAOKE</strong>, po jednym dla każdej osoby!</p>
                <img class="img-fluid competition-image hide-on-xs" src="/images/comp1.png">
                <img class="img-fluid show-on-xs" src="/images/comp1.png">
            </div>
            <div class="col-md-2 hide-on-xs">
                <div class="line-vertical"></div>
            </div>
            <div class="col-md-5 col-xs-12">
                <div class="spacer s2 show-on-xs"></div>
                <p>Przyznamy również 2 wyróżnienia - każda osoba z wyróżnionego zespołu otrzyma mały <strong>GŁOŚNIK JBL!</strong><br>&nbsp;</p>
                <img class="img-fluid competition-image hide-on-xs" src="/images/comp2.png" >
                <img class="img-fluid show-on-xs" src="/images/comp2.png" >
            </div>
        </div>';
        $admin->competition_2 = '<div class="title">LET’S DRESS CHARITY BEARS</div>
        <div class="spacer s1"></div>
        <p>Nasze charytatywne Misie, obecne w sklepach PEPCO przynoszą radość wszystkim dzieciom.  Tym, które je przytulają i tym, którym pomagają dzięki zyskom ze sprzedaży. Wszyscy uwielbiamy nasze PEPCOwe pluszaki, dlatego zapraszamy Was do wzięcia udziału w konkursie na zaprojektowanie ubranka dla Pana Misia i Pani Misiowej. Prosimy zapoznajcie się ze szczegółami konkursu, które znajdują się poniżej oraz z regulaminem konkursu, który znajduje się przy formularzu zgłoszeniowym.</p> 
            
        <p>SZCZEGÓŁY KONKURSU: <br> 
        • Zaprojektujcie strój dla Pana Misia i Pani Misiowej. <br>
        • Wykonajcie go dowolną techniką na kartce A4. Możecie narysować projekt lub go wykleić używając do tego kawałków materiałów i dodatków dekoracyjnych.  <br>
        • Następnie zeskanujcie swój projekt lub zróbcie mu zdjęcie.<br>
        • W kolejnym kroku wyślijcie nam swoje pracę konkursowe poprzez formularz zgłoszeniowy, który znajduje się obok.<br>
        • Koniecznie wypełnijcie wszystkie pola w formularzu zgłoszeniowym.<br>
        • Po wysłaniu do nas swojej pracy konkursowej otrzymacie maila z potwierdzeniem, że ją otrzymaliśmy.<br>
        • Na zgłoszenie konkursowe czekamy do 15 września.<br>
        • Zwycięzców ogłosimy podczas naszej konferencji w dniu 29 września.<br>
        • Spośród nadesłanych zgłoszeń wybierzemy trzy, które nagrodzimy tabletami Samsung Galaxy TAB A7.</p> 
        
        <div class="spacer s2"></div>
        <img class="img-fluid img-center hide-on-xs" style="width:50%" src="/images/comp1.png">
        <div class="spacer s2"></div>

        <p>Jesteśmy przekonani, że już rysują się Wam kreatywne projekty w głowach, a Wasza wyobraźnia sprawi, że będą one wyjątkowe.</p>

        <p>Powodzenia!</p>';
        $admin->competition_3 = '<div class="title">LOCAL DESIGN</div>
        <div class="spacer s1"></div>
        <p>W PEPCO łączy nas wiele. Mimo iż jesteśmy różni i mieszkamy w różnych miejscach w  Europie -  stanowimy TEAM. Jesteśmy wyjątkowi, ale również wyjątkowe są kraje, w których mieszkamy i pracujemy. Ponieważ bardzo chcemy poznać unikatowość Waszych regionów, zapraszamy Was do wzięcia udziału w konkursie na aranżację wybranej przestrzeni naszych sklepów w stylu lokalnym. Stylu, który jest charakterystyczny dla Waszego kraju. Przeobraźcie się na chwilę w designerów i stwórzcie przestrzeń, która mogłaby zwyciężyć w międzynarodowym konkursie dekoracji wnętrz😊. Liczymy, że będą to prace zespołowe. Prosimy zapoznajcie się ze szczegółami konkursu, które znajdują się poniżej oraz z regulaminem konkursu, który znajduje się przy formularzu zgłoszeniowym.</p> 
        
        <p>SZCZEGÓŁY KONKURSU: <br> 
        • Wybierzcie dowolną przestrzeń sklepu.<br>
        • Wykonajcie zdjęcie wybranej części sklepu przez rozpoczęciem aranżacji. <br>
        • Zaaranżujcie ją w regionalnym stylu kraju, w którym mieszkacie i pracujecie.<br>
        • Nie montujcie dekoracji do ścian i elementów wyposażenia sklepu.<br>
        • Pamiętajcie, że dekoracje nie mogą utrudniać naszym Klientom dostępu do towarów.<br>
        • Aranżację możecie wykonać dowolną techniką, z użyciem dowolnych materiałów i elementów. Najważniejsze jest to, aby te elementy oddawały lokalność, unikatowość Waszego kraju i były dla niego charakterystyczne. Mamy dla Was małą podpowiedź – zastanówcie się z czego słyną Wasze kraje na świecie i spróbujcie użyć ich w Waszych aranżacjach. Pamiętajcie również , że na pewno będziemy zwracali uwagę na rzeczy wykonane własnoręcznie przez Was.<br>
        • Następnie wykonajcie zdjęcie wykonanej przez Was aranżacji.<br>
        • W kolejnym kroku wyślijcie nam swoje pracę konkursową poprzez formularz zgłoszeniowy, który znajduje się obok.<br>
        • Pamiętajcie, aby Wasze zgłoszenie konkursowe składało się ze zdjęcia przed i po aranżacji.<br>
        • Koniecznie wypełnijcie wszystkie pola w formularzu zgłoszeniowym.<br>
        • Po wysłaniu do nas swojej pracy konkursowej otrzymacie maila z potwierdzeniem, że ją otrzymaliśmy.<br>
        • Na zgłoszenie konkursowe czekamy do 15 września.<br>
        • Zwycięzców ogłosimy podczas naszej konferencji w dniu 29 września.<br>
        • Spośród nadesłanych zgłoszeń wyłonimy jeden zwycięski team, który nagrodzimy aparatami INSTAX – po jednym dla każdego członka zespołu.</p> 
        
        <div class="spacer s2"></div>
        <img class="img-fluid img-center hide-on-xs" style="width:50%" src="/images/comp1.png">
        <div class="spacer s2"></div>

        <p>• Przyznamy również 3 wyróżnienia, a każda osoba z wyróżnionego zespołu otrzyma kosz wspaniałości regionalnych z innych krajów.</p>

        <p>Zachęcamy Was co celebrowania wyjątkowości Waszych regionów i podzielenia się nią z nami poprzez udział w konkursie. <br>Powodzenia!</p>';
        $admin->contact = 'Kontakt';
        $admin->contact_txt = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.';
        $admin->save();
    }
}
