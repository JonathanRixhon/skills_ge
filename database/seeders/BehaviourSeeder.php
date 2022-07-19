<?php

namespace Database\Seeders;

use App\Models\Behaviour;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BehaviourSeeder extends Seeder
{
    public $data = [
        [
            'Je me fie à mon instinct et je commence à travailler sans réflexion',
            'Je consulte le web à la recherche d\'une solution toute faite. Je fais appel à quelqu\'un pour m\'aider.',
            'Je décompose un problème en sous-éléments en utilisant un schéma. Je consulte différentes ressources & documentations pour parvenir à une solution.',
            'J\'anticipe les évolutions futures et organise les problèmes. J\'évalue de manière réaliste mes limites et le temps nécessaire.'
        ],
        [
            'J\'évite d\'utiliser des choses inconnues et je reste sur mes acquis.',
            'Je découvre des nouveautés lorsqu\'elles se présentent à moi. Je pose des questions à mes pairs en fonction des besoins.',
            'Je me tiens au courant des dernières nouveautés dans mon domaine. Je fais preuve de sens critique, j\'établis des liens.',
            'Je fais des recherches et me lance des défis en dehors de mon temps de travail "officiel" (hackathons, challenges…)',
        ],
        [
            'Je ne m\'implique pas face à l\'énoncé d\'un problème ou je n\'ose pas poser de questions et m\'enferme dans mon coin.',
            'Je me repose énormément sur les autres. Je perturbe ou ralenti constamment le groupe.',
            'Je me débrouille par moi-même mais j\'ai besoin que l\'on valide mes choix et me donne des directives bien ciblées.',
            'Je me documente et avance dans mon travail en toute autonomie. Je gère mon temps et trouve ma position dans l\'équipe.',
        ],
        [
            'Je considère mon travail avec suffisance. Je n\'accepte pas la critique. Je fais preuve de susceptibilité.',
            'Je ne prends pas les critiques personnellement et questionne mes pairs, mais je suis persuadé que ma solution est la meilleure.',
            'J\'écoute les critiques avec réserve. Je reconnais que j\'ai à apprendre des autres et je modifie mon travail en fonction.',
            'Je participe à des "revues de codes" et suis à l\'écoute de toute suggestion pour m\'améliorer. Je sais aussi défendre mes propositions.',
        ],
        [
            'J\'organise mes ressources avec pragmatisme au fur et à mesure de mon travail.',
            'Je commente mon code et j\'organise mes fichiers de manière cohérente et standard.',
            'Je priorise les tâches, je décompose et établis un planning réaliste. J\'utilise des méthodes de travail collaboratif (Agile..)',
            'J\'utilise des outils de versioning de manière collaborative. Je documente mon travail.',
        ],
        [
            'Je ne prends pas de plaisir dans mon travail. Je rechigne à la tâche et m\'absente volontiers.',
            'Je mets de l\'énergie à la tâche mais je n\'éprouve pas de réel plaisir.',
            'J\'approche le travail avec positivité et j\'éprouve du plaisir à la réalisation de projets.',
            'Je suis passionné, je partage mes connaissances avec d\'autres et j\'aide volontiers.',
        ],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->data as $knowledgeId => $knowlege) {
            foreach ($knowlege as $key => $sentense) {
                Behaviour::factory()->create([
                    'text' => $sentense,
                    'level' =>  $key + 1,
                    'knowledge_id' => $knowledgeId + 1
                ]);
            }
        }
    }
}
