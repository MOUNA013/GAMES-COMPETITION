<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('game')->insert([
            [
                'name' => 'League of Legends',
                'description' => 'Un jeu de stratégie compétitif en temps réel avec des équipes de 5 joueurs.',
                'rules' => 'Les parties se jouent en 5v5. Détruisez le Nexus ennemi pour gagner.',
                'video_url' => 'https://cmsassets.rgpub.io/sanity/files/dsfx7636/news/8ab3e227121c53aacab0c9b9f7a48adbc65db520.webm',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'FIFA 24',
                'description' => 'Un jeu de simulation de football réaliste.',
                'rules' => 'Marquez plus de buts que votre adversaire dans le temps imparti.',
                'video_url' => 'https://media.contentapi.ea.com/content/dam/ea/fc/fc-24/common/homepage/fc24-haaland-goal-1x1.mp4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Call of Duty: Warzone',
                'description' => 'Un jeu de battle royale où le dernier joueur ou équipe en vie gagne.',
                'rules' => 'Survivez jusqu’à la fin et éliminez vos adversaires.',
                'video_url' => 'https://www.pinterest.com/2a42742c-8853-4574-b242-547389e0714c', 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Minecraft',
                'description' => 'Un jeu de construction et d\'exploration en monde ouvert.',
                'rules' => 'Construisez, survivez et créez selon les objectifs définis.',
                'video_url' => 'https://cdn.pixabay.com/video/2022/04/04/112905-696336308_large.mp4', // Exemple vidéo Minecraft
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Overwatch 2',
                'description' => 'Un jeu de tir en équipe avec des héros aux capacités uniques.',
                'rules' => 'Travaillez en équipe pour capturer des objectifs ou escorter une charge utile.',
                'video_url' => 'https://v1.pinimg.com/videos/mc/720p/eb/aa/28/ebaa2812b2905bf824ad1c6cd8ec888a.mp4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Fortnite',
                'description' => 'Un jeu de battle royale avec des éléments de construction.',
                'rules' => 'Soyez le dernier survivant en construisant des structures et en éliminant vos ennemis.',
                'video_url' => 'https://www.shutterstock.com/shutterstock/videos/3530109903/preview/stock-footage-carrying-weapons-in-the-competitive-shooter-pc-game-attacking-the-enemy-team-positions-in-a.webm', // Exemple vidéo Fortnite
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Valorant',
                'description' => 'Un jeu de tir tactique en équipe avec des personnages uniques.',
                'rules' => 'Remportez les manches en plaçant ou en désamorçant la bombe.',
                'video_url' => 'https://cmsassets.rgpub.io/sanity/files/dsfx7636/news/409ab2fc369ba5e1fe50bac10c6676d7d1365a9f.mp4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Super Smash Bros. Ultimate',
                'description' => 'Un jeu de combat avec une variété de personnages emblématiques.',
                'rules' => 'Expulsez vos adversaires de l\'arène pour marquer des points.',
                'video_url' => 'videos/gamevideo.mp4', 
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        
    }
}
