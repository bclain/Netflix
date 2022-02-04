<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('films')->insert([

            [
                'titre' => 'The Dark Knight : Le Chevalier noir',
                'rea' => 'Christopher Nolan',
                'description' => "Lorsqu'une menace mieux connue sous le nom du Joker émerge de son passé mystérieux et déclenche le chaos sur la ville de Gotham, Batman doit faire face au plus grand des défis psychologique et physique afin de combattre l'injustice.",
                'annee' => '2008',
                'duree' => '2h32',
                'img' => 'https://static.wikia.nocookie.net/listofdeaths/images/0/07/The_Dark_Knight_poster.jpg',
            ],
            [
                'titre' => 'Le Parrain',
                'rea' => 'Francis Ford Coppola',
                'description' => "Le patriarche vieillissant d'une dynastie de la mafia New Yorkaise passe le flambeau de son empire clandestin à son fils réticent.",
                'annee' => '1972',
                'duree' => '2h55',
                'img' => 'https://www.cinemaprincesse.com/wp-content/uploads/2017/08/18660716.jpg',
            ],
            [
                'titre' => 'Pulp Fiction',
                'rea' => 'Quentin Tarantino',
                'description' => "Les vies de deux hommes de main, d'un boxeur, de la femme d'un gangster et de deux braqueurs s'entremêlent dans quatre histoires de violence et de rédemption.",
                'annee' => '1994',
                'duree' => '2h34',
                'img' => 'https://m.media-amazon.com/images/M/MV5BNGNhMDIzZTUtNTBlZi00MTRlLWFjM2ItYzViMjE3YzI5MjljXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_.jpg',
            ],
            [
                'titre' => 'Fight Club',
                'rea' => 'David Fincher',
                'description' => "Un employé de bureau insomniaque et un fabriquant de savons forment un club de combat clandestin qui devient beaucoup plus que ça.",
                'annee' => '1999',
                'duree' => '2h19',
                'img' => 'https://m.media-amazon.com/images/M/MV5BMmEzNTkxYjQtZTc0MC00YTVjLTg5ZTEtZWMwOWVlYzY0NWIwXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_FMjpg_UX1000_.jpg',
            ],
            [
                'titre' => 'Inception',
                'rea' => 'Christopher Nolan',
                'description' => "Un voleur qui s'approprie des secrets d'entreprise à l'aide d'une technique de partage de rêves se voit contraint d'effectuer la tâche inverse : implanter une idée dans l'esprit d'un PDG, pour revoir ses enfants.",
                'annee' => '2010',
                'duree' => '2h28',
                'img' => 'https://flxt.tmsimg.com/assets/p7825626_p_v10_af.jpg',
            ],
            [
                'titre' => 'Forrest Gump',
                'rea' => 'Robert Zemeckis',
                'description' => "Les présidences de Kennedy et Johnson, le Vietnam, le Watergate et d'autres histoires se déroulent à travers la perspective d'un homme d'Alabama avec un QI de 75.",
                'annee' => '1994',
                'duree' => '2h22',
                'img' => 'https://m.media-amazon.com/images/I/91++WV6FP4L._AC_SY445_.jpg',
            ],
            [
                'titre' => 'Matrix',
                'rea' => 'Lana WachowskiLilly, Lilly Wachowski',
                'description' => "Un pirate informatique découvre par de mystérieux rebelles la véritable nature de sa réalité et son rôle dans la guerre contre ceux qui la contrôlent.",
                'annee' => '1999',
                'duree' => '2h16',
                'img' => 'https://m.media-amazon.com/images/M/MV5BNzQzOTk3OTAtNDQ0Zi00ZTVkLWI0MTEtMDllZjNkYzNjNTc4L2ltYWdlXkEyXkFqcGdeQXVyNjU0OTQ0OTY@._V1_.jpg',
            ],
            [
                'titre' => 'La ligne verte',
                'rea' => 'Frank Darabont',
                'description' => "La vie des gardes du couloir de la mort est touchée par l'un de leurs détenus: a homme noir accusé de meurtre et de viol d'enfants, doté d'un pouvoir mystérieux.",
                'annee' => '1999',
                'duree' => '3h09',
                'img' => 'https://m.media-amazon.com/images/I/41JM5z1sW9S._AC_SY445_.jpg',
            ],
            [
                'titre' => 'Parasite',
                'rea' => 'Bong Joon Ho',
                'description' => "Toute la famille de Ki-taek est au chômage, et s'intéresse fortement au train de vie de la richissime famille Park, jusqu'à ce qu'ils soient impliqués dans un incident inattendu.",
                'annee' => '2019',
                'duree' => '2h12',
                'img' => 'https://images-na.ssl-images-amazon.com/images/I/A1UTpJzoPBL._RI_.jpg',
            ],
            [
                'titre' => 'Léon',
                'rea' => 'Luc Besson',
                'description' => "Matilda, une fillette de 12 ans, est prise à contrecoeur sous l'aile de Léon, un assassin professionnel, après le meurtre de sa famille. Léon et Matilda forment une relation peu habituelle, elle devient sa protégée et apprend le métier d'assassin.",
                'annee' => '1994',
                'duree' => '1h50',
                'img' => 'https://static.wikia.nocookie.net/die-hard-scenario/images/4/49/DHS-_L%C3%A9on_The_Professional_movie_poster.jpg/revision/latest?cb=20150603083051',
            ],
         ]);
    }
   
}
