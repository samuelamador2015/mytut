<?php 

require_once 'namespace.php';

//Home\Dir is like your full name while Dir is your nickname
use Home\Dir as Dir; 

$person = new Dir\Person;
echo $person->getName();


echo "<hr>";
/* OR ------------------------------------
 * If you don't need to put alias, you can 
 * use the name of class directly.
 */

require_once 'Database.php';

use Tutorials\NS\Database; //put here the name of the database

$person = new  Database;
echo $person->getDB();


/* OR --------------- you can put multiple classes 
*/
//use Home\Dir\{ Person, Database};
