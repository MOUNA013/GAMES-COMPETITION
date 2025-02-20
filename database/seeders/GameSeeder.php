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
        DB::table('games')->insert([
            [
                'name' => 'League of Legends',
                'description' => 'League of Legends (LoL) est un jeu de stratégie compétitif en temps réel qui oppose deux équipes de cinq joueurs. Chaque joueur contrôle un "champion" unique, doté de capacités spéciales et d un style de jeu distinct. L objectif principal est de travailler en équipe pour détruire la base adverse, appelée Nexus, tout en défendant la vôtre.

                            Le jeu se déroule sur une carte appelée Summoner s Rift, qui est divisée en trois voies principales (top, mid, bot) et une jungle remplie de monstres neutres. Les joueurs doivent gagner de l expérience, collecter de l or, et acheter des objets pour renforcer leurs champions tout en affrontant l équipe adverse.

                            Avec plus de 150 champions disponibles, chaque partie offre une expérience unique, combinant stratégie, coordination d équipe et compétences individuelles. League of Legends est l un des jeux les plus populaires au monde, avec une scène compétitive professionnelle très active.',
                'rules' => '-Deux équipes de 5 joueurs s affrontent.
                            -Chaque joueur choisit un champion unique au début de la partie.',
                'video_url' => 'https://cmsassets.rgpub.io/sanity/files/dsfx7636/news/8ab3e227121c53aacab0c9b9f7a48adbc65db520.webm',
                'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXxtJ4ZqFItGTHSqaU2Ifmry6eiCviOCLOUg&s',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'FIFA 24',
                'description' => 'FIFA 24 est la dernière version de la célèbre série de jeux de simulation de football développée par EA Sports. Ce jeu offre une expérience de football ultra-réaliste, avec des graphismes de pointe, des animations fluides et une intelligence artificielle améliorée.

                                    Jouez avec vos équipes préférées, que ce soit des clubs de ligues professionnelles ou des équipes nationales, et affrontez des adversaires du monde entier. FIFA 24 propose plusieurs modes de jeu, y compris le mode Carrière, le mode Ultimate Team, et les matchs en ligne multijoueurs.

                                    Avec une physique de balle réaliste, des mouvements de joueurs authentiques et des commentaires dynamiques, FIFA 24 vous plonge au cœur de l action footballistique. Que vous soyez un joueur occasionnel ou un compétiteur acharné, ce jeu offre une expérience immersive pour tous les fans de football.',
                'rules' => '-Marquez plus de buts que votre adversaire dans le temps imparti.
                            -Le match se déroule en deux mi-temps de 45 minutes chacune (durée réglable).',
                'video_url' => 'https://media.contentapi.ea.com/content/dam/ea/fc/fc-24/common/homepage/fc24-haaland-goal-1x1.mp4',
                'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTnjrM-tK16R8IBg08Tik3tIkNNFj98vdOZPg&s' ,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Call of Duty: Warzone',
                'description' => "Call of Duty: Warzone est un jeu de battle royale gratuit, intégré dans l'univers de Call of Duty. Il oppose jusqu'à 150 joueurs dans une immense carte appelée Verdansk (ou d'autres cartes selon les mises à jour). Le but est simple : être le dernier joueur ou la dernière équipe en vie.

                                Warzone combine des éléments de tir tactique, de stratégie et de survie. Les joueurs doivent rechercher des armes, des équipements et des ressources tout en évitant une zone de gaz toxique qui rétrécit progressivement, forçant les confrontations.

                                Avec des graphismes réalistes, une physique de tir précise et une variété de modes de jeu (solo, duo, trio, quatuor), Warzone offre une expérience de combat intense et immersive. Le jeu inclut également des mécaniques uniques comme le Gulag, où les joueurs éliminés ont une seconde chance pour revenir dans la partie.",
                'rules' => "-Tous les joueurs sautent en parachute depuis un avion et atterrissent sur la carte.

                            -Choisissez un point d'atterrissage stratégique pour trouver des armes et des équipements rapidement.
                            -Survivez jusqu’à la fin et éliminez vos adversaires.",
                'video_url' => 'https://www.pinterest.com/2a42742c-8853-4574-b242-547389e0714c', 
                'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQq3Ulcj20DlRcC_SS3cEWxTSS1B8YTjPSNNg&s',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Minecraft',
                'description' => "Minecraft est un jeu de construction et d'exploration en monde ouvert, où les joueurs peuvent laisser libre cours à leur créativité. Le jeu se déroule dans un univers composé de blocs en 3D, où chaque élément (terre, pierre, eau, etc.) peut être récolté, transformé et utilisé pour construire des structures, des outils ou des machines.",
                'rules' => 'Mode Survie : Survivez dans un monde hostile en gérant vos ressources et en combattant des créatures.

                        Mode Créatif : Ayez accès à des ressources illimitées pour construire sans limites.

                        Mode Aventure : Explorez des cartes personnalisées avec des objectifs spécifiques.

                        Mode Multijoueur : Jouez avec des amis pour construire ou explorer ensemble.

',
                'video_url' => 'https://cdn.pixabay.com/video/2022/04/04/112905-696336308_large.mp4', 
                'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRpeaVLLU2s5s2TKZgTIrn3J36g7a9E6eB5AQ&s',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Overwatch 2',
                'description' => 'Un jeu de tir en équipe avec des héros aux capacités uniques.',
                'rules' => 'Travaillez en équipe pour capturer des objectifs ou escorter une charge utile.',
                'video_url' => 'https://v1.pinimg.com/videos/mc/720p/eb/aa/28/ebaa2812b2905bf824ad1c6cd8ec888a.mp4',
                'image'=> 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRQPnNo3WAeLJW-b8TFFPGZp2cnOBXHn2UH6w&s',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Fortnite',
                'description' => "Fortnite est un jeu de battle royale qui combine des éléments de tir et de construction. Jusqu'à 100 joueurs s'affrontent sur une carte en constante évolution, avec pour objectif d'être le dernier survivant.

                Ce qui distingue Fortnite des autres jeux de battle royale, c'est sa mécanique de construction. Les joueurs peuvent récolter des ressources (bois, pierre, métal) pour construire des structures (murs, rampes, plates-formes) afin de se protéger, d'atteindre des endroits élevés ou de prendre un avantage tactique.

                Fortnite propose également des modes créatifs et des événements en temps réel, comme des concerts virtuels ou des collaborations avec des franchises populaires (Marvel, Star Wars, etc.). Avec ses graphismes colorés, son gameplay dynamique et ses mises à jour régulières, Fortnite est devenu un phénomène culturel mondial.",
                'rules' => "-Survivre jusqu'à la fin et être le dernier joueur ou la dernière équipe en vie.
                -Tous les joueurs sautent en parachute depuis un bus volant et atterrissent sur la carte.

                -Choisissez un point d'atterrissage stratégique pour trouver des armes, des ressources et des équipements.",
                'video_url' => 'https://www.shutterstock.com/shutterstock/videos/3530109903/preview/stock-footage-carrying-weapons-in-the-competitive-shooter-pc-game-attacking-the-enemy-team-positions-in-a.webm', 
                'image'=> 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRwitMQyY9DXyLc5e-FtIDGyaxdFQx8uxaxxg&s',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Valorant',
                'description' => 'Un jeu de tir tactique en équipe avec des personnages uniques.',
                'rules' => 'Remportez les manches en plaçant ou en désamorçant la bombe.',
                'video_url' => 'https://cmsassets.rgpub.io/sanity/files/dsfx7636/news/409ab2fc369ba5e1fe50bac10c6676d7d1365a9f.mp4',
                'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRqja3x4fIQ2DazY0iWBe_4SR3AdQFqNpTGbw&s',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Super Smash Bros. Ultimate',
                'description' => 'Un jeu de combat avec une variété de personnages emblématiques.',
                'rules' => 'Expulsez vos adversaires de l\'arène pour marquer des points.',
                'video_url' => 'videos/gamevideo.mp4',
                'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRozNS_8JTMq_zgRtZuuVkmg4gIcfxuyfLMYQ&s', 
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        
    }
}
