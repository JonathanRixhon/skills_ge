<?php

namespace Database\Seeders;

use App\Models\Knowledge;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KnowledgeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Knowledge::factory()->create([
            'job_id' => 1,
            'theme' => 'analyse',
            'definition' => '**J\'analyse les problèmes pour y trouver des solutions**' . PHP_EOL . PHP_EOL . 'Capacité de réfléchir et de faire montre de logique et de jugement face à des décisions, d\'évaluer des problèmes ou des situations en faisant les recherches nécessaires et en analysant les différentes composantes'
        ]);

        Knowledge::factory()->create([
            'job_id' => 1,
            'theme' => 'curiosity',
            'definition' => '**Je suis curieux intellectuellement pour ce qui touche à mon métier**' . PHP_EOL . PHP_EOL . 'Capacité d\'ouvrir son champ de connaissance, d\'avoir l\'esprit ouvert, d\'acquérir continuellement de nouvelles connaissances et d\'apprendre de ses expériences antérieures'
        ]);

        Knowledge::factory()->create([
            'job_id' => 1,
            'theme' => 'autonomy',
            'definition' => '**Je mène ma barque**' . PHP_EOL . PHP_EOL . 'Capacité de se prendre en charge, selon ses responsabilités, de façon à poser des actions au moment opportun dans un contexte déterminé'
        ]);

        Knowledge::factory()->create([
            'job_id' => 1,
            'theme' => 'review',
            'definition' => '**J\'accepte les commentaires dans le but d\'améliorer mon travail**' . PHP_EOL . PHP_EOL . 'Capacité de recevoir des commentaires et des remarques dans le but d\'améliorer son travail'
        ]);

        Knowledge::factory()->create([
            'job_id' => 1,
            'theme' => 'organisation',
            'definition' => '**Je planifie, prépare et organise mon travail pour respecter les échéances**' . PHP_EOL . PHP_EOL . 'Capacité de gérer efficacement et rationnellement son travail et de planifier les tâches à effectuer dans un délai prescrit'
        ]);

        Knowledge::factory()->create([
            'job_id' => 1,
            'theme' => 'motivation',
            'definition' => '**Je suis enthousiaste dans la réalisation de mes tâches**' . PHP_EOL . PHP_EOL . 'Capacité d\'avoir de l\'énergie et de la vitalité et à afficher intérêt et enthousiasme face à une tâche professionnelle'
        ]);
    }
}
