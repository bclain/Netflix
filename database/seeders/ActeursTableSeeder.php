<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActeursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        DB::table('acteurs')->insert([

            [
                'nom_complet' => 'Leonardo DiCaprio',
                'naissance' => "1974",
                'photo' => 'https://m.media-amazon.com/images/M/MV5BMjI0MTg3MzI0M15BMl5BanBnXkFtZTcwMzQyODU2Mw@@._V1_UY317_CR10,0,214,317_AL_.jpg',
                'description' => "Few actors in the world have had a career quite as diverse as Leonardo DiCaprio's. DiCaprio has gone from relatively humble beginnings, as a supporting cast member of the sitcom Quoi de neuf, docteur ? (1985) and low budget horror movies, such as Critters 3 (1991), to a major teenage heartthrob in the 1990s, as the hunky lead actor in movies such as Roméo + Juliette (1996) and Titanic (1997), to then become a leading man in Hollywood blockbusters, made by internationally renowned directors such as Martin Scorsese and Christopher Nolan.",
            ],
            [
                'nom_complet' => 'Tom Hanks',
                'naissance' => "1964",
                'photo' => 'https://m.media-amazon.com/images/M/MV5BMTQ2MjMwNDA3Nl5BMl5BanBnXkFtZTcwMTA2NDY3NQ@@._V1_UY317_CR2,0,214,317_AL_.jpg',
                'description' => "Thomas Jeffrey Hanks was born in Concord, California, to Janet Marylyn (Frager), a hospital worker, and Amos Mefford Hanks, an itinerant cook. His mother's family, originally surnamed Fraga, was entirely Portuguese, while his father was of mostly English ancestry. Tom grew up in what he has called a fractured family. He moved around a great deal after his parents' divorce, living with a succession of step-families. No problems, no alcoholism - just a confused childhood. He has no acting experience in college and credits the fact that he could not get cast in a college play with actually starting his career. He went downtown, and auditioned for a community theater play, was invited by the director of that play to go to Cleveland, and there his acting career started.
                ",
            ],
            [
                'nom_complet' => 'Keanu Reeves',
                'naissance' => "1956",
                'photo' => 'https://m.media-amazon.com/images/M/MV5BYTkzODI4MDMtNDNmZC00NDZlLWFmNTktNDRhOWE2YzhlZTQ2XkEyXkFqcGdeQXVyMTE1MTYxNDAw._V1_UY317_CR19,0,214,317_AL_.jpg',
                'description' => "Keanu Charles Reeves, whose first name means  cool breeze over the mountains in Hawaiian, was born September 2, 1964 in Beirut, Lebanon. He is the son of Patricia Taylor, a showgirl and costume designer, and Samuel Nowlin Reeves, a geologist. Keanu's father was born in Hawaii, of British, Portuguese, Native Hawaiian, and Chinese ancestry, and Keanu's mother is originally from England. After his parents' marriage dissolved, Keanu moved with his mother and younger sister, Kim Reeves, to New York City, then Toronto. Stepfather #1 was Paul Aaron, a stage and film director - he and Patricia divorced within a year, after which she went on to marry (and divorce) rock promoter Robert Miller and hair salon owner Jack Bond. Reeves never reconnected with his biological father. In high school, Reeves was lukewarm toward academics but took a keen interest in ice hockey (as team goalie, he earned the nickname The Wall) and drama. He eventually dropped out of school to pursue an acting career.
                ",
            ],
            [
                'nom_complet' => 'Brad Pitt',
                'naissance' => "1963",
                'photo' => 'https://m.media-amazon.com/images/M/MV5BMjA1MjE2MTQ2MV5BMl5BanBnXkFtZTcwMjE5MDY0Nw@@._V1_UX214_CR0,0,214,317_AL_.jpg',
                'description' => "An actor and producer known as much for his versatility as he is for his handsome face, Golden Globe-winner Brad Pitt's most widely recognized role may be Tyler Durden in Fight Club (1999). However, his portrayals of Billy Beane in Le stratège (2011), and Rusty Ryan in the remake of Ocean's Eleven (2001) and its sequels, also loom large in his filmography.
                ",
            ],
            [
                'nom_complet' => 'Al Pacino',
                'naissance' => "1940",
                'photo' => 'https://m.media-amazon.com/images/M/MV5BMTQzMzg1ODAyNl5BMl5BanBnXkFtZTYwMjAxODQ1._V1_UX214_CR0,0,214,317_AL_.jpg',
                'description' => "Alfredo James 'Al Pacino' established himself as a film actor during one of cinema's most vibrant decades, the 1970s, and has become an enduring and iconic figure in the world of American movies.
                ",
            ],
            [
                'nom_complet' => 'John Travolta',
                'naissance' => "1954",
                'photo' => 'https://m.media-amazon.com/images/M/MV5BMTMyMjZlYzgtZWRjMC00OTRmLTllZTktMmM1ODVmNjljMTQyXkEyXkFqcGdeQXVyMTExNzQ3MzAw._V1_UY317_CR21,0,214,317_AL_.jpg',
                'description' => "Il devient célèbre grâce aux films musicaux La Fièvre du samedi soir et Grease. Il retrouve la notoriété dans les années 1990 avec Allô maman, ici bébé ! (Look Who's Talking) et surtout Pulp Fiction (qui lui vaut une nomination à l'Oscar du meilleur acteur en 1995), puis enchaîne les succès tels que Get Shorty et Volte-face.
                ",
            ],
            [
                'nom_complet' => 'Jean Reno',
                'naissance' => "1948",
                'photo' => 'https://m.media-amazon.com/images/M/MV5BMTgzNjA1MjY2M15BMl5BanBnXkFtZTYwMjgzOTk0._V1_UX214_CR0,0,214,317_AL_.jpg',
                'description' => "Jean Reno was born Juan Moreno y Herrera-Jiménez in Casablanca, Morocco, to Spanish parents (from Andalucía) who moved to North Africa to seek work. His father was a linotypist. Reno settled in France at 17. He began studying drama and has credits in French television and theater as well as films. His first two marriages both ended in divorce, and he had two children with each of them. He keeps homes in Paris and Los Angeles.
                ",
            ],
            [
                'nom_complet' => 'Yeo-jeong Cho',
                'naissance' => "1981",
                'photo' => 'https://m.media-amazon.com/images/M/MV5BYzI3YWY1MjQtZDhmMC00MWFlLTk3NWYtMzU3MDYxNTcxZmUwXkEyXkFqcGdeQXVyNTI5NjIyMw@@._V1_UY317_CR20,0,214,317_AL_.jpg',
                'description' => "Yeo-jeong Cho was born on February 10, 1981 in South Korea. She is an actress, known for Parasite (2019), Bang-ja jeon (2010) and In-gan-jung-dok (2014).
                ",
            ],
            [
                'nom_complet' => 'Christian Bale',
                'naissance' => "1974",
                'photo' => 'https://m.media-amazon.com/images/M/MV5BMTkxMzk4MjQ4MF5BMl5BanBnXkFtZTcwMzExODQxOA@@._V1_UX214_CR0,0,214,317_AL_.jpg',
                'description' => "Christian Charles Philip Bale was born in Pembrokeshire, Wales, UK on January 30, 1974, to English parents Jennifer Jenny (James) and David Bale. His mother was a circus performer and his father, who was born in South Africa, was a commercial pilot. The family lived in different countries throughout Bale's childhood, including England, Portugal, and the United States. Bale acknowledges the constant change was one of the influences on his career choice.
                ",
            ],
            [
                'nom_complet' => 'Johnny Depp',
                'naissance' => "1963",
                'photo' => 'https://m.media-amazon.com/images/M/MV5BMTM0ODU5Nzk2OV5BMl5BanBnXkFtZTcwMzI2ODgyNQ@@._V1_UY317_CR4,0,214,317_AL_.jpg',
                'description' => "Depp was raised in Florida. He dropped out of school when he was 15, and fronted a series of music-garage bands, including one named 'The Kids'. When he married Lori Anne Allison (Lori A. Depp) he took a job as a ballpoint-pen salesman to support himself and his wife. A visit to Los Angeles, California, with his wife, however, happened to be a blessing in disguise, when he met up with actor Nicolas Cage, who advised him to turn to acting, which culminated in Depp's film debut in the low-budget horror film, Les Griffes de la nuit (1984), where he played a teenager who falls prey to dream-stalking demon Freddy Krueger.
                ",
            ],

        ]);
   }
  
}

