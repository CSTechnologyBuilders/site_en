<?php
namespace App\Http\Controllers;
   
use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use BotMan\BotMan\Messages\Incoming\Answer;
   
class BotManController extends Controller
{
    /**
     * Place your BotMan logic here.
     */
    public function handle()
    {
        $botman = app('botman');
   
        $botman->hears('{message}', function(BotMan $botman, $message) {

            $botman->typesAndWaits(2);

            if($message=='Bonjour' || 'Salut' || 'salut' || 'bonjour' || 'hi' || 'Hi' || 'morning' || 'good morning'){
                $botman->reply("Utilisez Hi pour converser avec moi...");

            }
   
            if ($message == 'Hi' || $message == 'hi') {
                $services = [
                    'Developpement Web 💻',
                    'Maintenance informatique 🪛',
                    'Developpement d application mobile 📱',
                    'Sécurité des reseaux 🌍',
                    'Graphique design '
                ];
                
                $message = 'Hello! bienvenu à cs technoligy builders, moi cest builderMan toujours apte à vous aider à construire vos projects 😉... Voici quelques de nos services :';
                
               /* for ($i = 0; $i < strlen($message); $i++) {
                    $caractere = $message[$i];
                    $botman->typesAndWaits(0.7); // Délai d'affichage de chaque caractère
                    */
                    $botman->reply($message);
                    $botman->typesAndWaits(2);

                    $botman->reply($services[0]);
                    $botman->typesAndWaits(2);

                    $botman->reply($services[1]);
                    $botman->typesAndWaits(1);

                    $botman->reply($services[2]);
                    $botman->typesAndWaits(1);

                    $botman->reply($services[3]);
                    $botman->typesAndWaits(1);

                    $botman->reply($services[4]);
                    $botman->typesAndWaits(1);



                //}
                

            }
            
            if($message=="OK"||$message=="merci"){
                $botman->reply("de rien le plaisir est partage 💓😊... ");
            }
            
            
   
        });
   
        $botman->listen();
    }
   
    /**
     * Place your BotMan logic here.
     */
    public function askName($botman)
    {
        $botman->ask('Hello! bienvenu à cs technoligy builders, moi cest builderMan toujours apte à vous aider à construire vos projects 😉....que désirez-vous 
          ', function(Answer $answer) {
   
            $name = $answer->getText();
   
            $this->say('Nice to meet you '.$name);
        });
    }

    public function answer($botman){

        $botman->hears('Hi', function (BotMan $bot) {
            listerServices($bot);
        });
    }

   
}
