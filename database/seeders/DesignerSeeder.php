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
                'user_id' => 4,
                'bio' => 'Ik zeg: waarheid en gezond verstand, en hier blijf ik bij. Voor de Schrift maak ik natuurlijk een uitzondering. De fout begint al van Van Alphen af, en wel terstond bij de eerste regel over die lieve wichtjes. Wat drommel kon die oude heer bewegen, zich uit te geven voor een aanbidder van mijn zusje Truitje die zere ogen had, of van mijn broer Gerrit die altijd met zijn neus speelde? En toch, hij zegt: `dat hij die versjes zong, door liefde gedrongen.',
                'picture' => 'https://images.unsplash.com/photo-1501999054620-be9719bd7e64?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=701&q=80',
                'created_by' => 1,
            ],
            [
                'user_id' => 5,
                'bio' => 'Dat zijn ook makelaars in koffie, doch hun adres behoeft ge niet te weten. Ik pas er dus wel op, dat ik geen romans schrijf, of andere valse opgaven doe. Ik heb dan ook altijd opgemerkt dat mensen die zich met zoiets inlaten, gewoonlijk slecht wegkomen. Ik ben drieënveertig jaar oud, bezoek sedert twintig jaren de beurs, en kan dus voor de dag treden, als men iemand roept die ondervinding heeft. Ik heb al wat huizen zien vallen! En gewoonlijk, wanneer ik de oorzaken naging, kwam het me voor, dat die moesten gezocht worden in de verkeerde richting die aan de meesten gegeven was in hun jeugd.',
                'picture' => 'https://images.unsplash.com/photo-1486413869840-a99ac0a4c031?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=671&q=80',
                'created_by' => 1,
            ],
        ]);
    }
}
