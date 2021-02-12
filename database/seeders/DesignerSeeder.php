<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DesignerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('designers')->insert([
            [
                'user_id' => 1,
                'bio' => 'In 1981 zag ik het levenslicht, en uiteindelijk leidde alles daartussen tot het schrijven van deze lorem ipsum bio. Ik zeg: waarheid en gezond verstand, en hier blijf ik bij. Voor de Schrift maak ik natuurlijk een uitzondering. De fout begint al van Van Alphen af, en wel terstond bij de eerste regel over die lieve wichtjes. Wat drommel kon die oude heer bewegen, zich uit te geven voor een aanbidder van mijn zusje Truitje die zere ogen had, of van mijn broer Gerrit die altijd met zijn neus speelde? En toch, hij zegt: `dat hij die versjes zong, door liefde gedrongen.',
                'picture' => 'https://media.licdn.com/media/AAYQAQSOAAgAAQAAAAAAAB-zrMZEDXI2T62PSuT6kpB6qg.png',
            ],
            [
                'user_id' => 2,
                'bio' => 'Dat zijn ook makelaars in koffie, doch hun adres behoeft ge niet te weten. Ik pas er dus wel op, dat ik geen romans schrijf, of andere valse opgaven doe. Ik heb dan ook altijd opgemerkt dat mensen die zich met zoiets inlaten, gewoonlijk slecht wegkomen. Ik ben drieënveertig jaar oud, bezoek sedert twintig jaren de beurs, en kan dus voor de dag treden, als men iemand roept die ondervinding heeft. Ik heb al wat huizen zien vallen! En gewoonlijk, wanneer ik de oorzaken naging, kwam het me voor, dat die moesten gezocht worden in de verkeerde richting die aan de meesten gegeven was in hun jeugd.',
                'picture' => ''
            ],
            [
                'user_id' => 2,
                'bio' => '',
                'picture' => ''
            ],
            [
                'user_id' => 2,
                'bio' => '',
                'picture' => ''
            ],
            [
                'user_id' => 2,
                'bio' => '',
                'picture' => ''
            ],
            [
                'user_id' => 2,
                'bio' => '',
                'picture' => ''
            ],
            [
                'user_id' => 2,
                'bio' => '',
                'picture' => ''
            ],
            [
                'user_id' => 2,
                'bio' => '',
                'picture' => ''
            ],
            [
                'user_id' => 2,
                'bio' => '',
                'picture' => ''
            ],
            [
                'user_id' => 2,
                'bio' => '',
                'picture' => ''
            ],
            [
                'user_id' => 2,
                'bio' => '',
                'picture' => ''
            ],
        ]);
    }
}
