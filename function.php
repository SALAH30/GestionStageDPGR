
<?php
    function data_base_connect ()
   {
     $dbh = new PDO("mysql:host=localhost;dbname=projet;charset=utf8", "root", "");
     
     $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     
     return ($dbh);
   } 
   
function Insert_query($db,$var,$fields,$table,$key) 
            {
               $placeholders = array('?');
            
               foreach ($fields as $field) 
                  {
                     // One placeholder per field
                     $placeholders[] = '?';
                     // Assume the data is coming from a form
                     $values[] = $_POST[$field];
                  }
               $st = $db->prepare("INSERT INTO $table (" . implode(',',$var) . ') VALUES ('.implode(',',$placeholders) .')');
               
               $values[] = $_POST[$key];
               
               $st->execute($values);
               
               return $st;
            }

/*** ////////////////////////////////////////// Recherche Simple ///////////////////////////////////////// ***/
            
function Select_query_Université($db,$var,$fields) 
            {           
               foreach ($fields as $field) 
                  {
                     // Assume the data is coming from a form
                     $values[] = $_POST[$field];
                  }
               $st = $db->prepare("SELECT * FROM Université WHERE (" . implode(' AND ',$var) . ") ");
                
               $st->execute($values);
               
               return $st;
            }
function Select_query_Laboratoire($db,$var,$fields) 
            {           
               foreach ($fields as $field) 
                  {
                     // Assume the data is coming from a form
                     $values[] = $_POST[$field];
                  }
               $st = $db->prepare("SELECT * FROM Laboratoire WHERE (" . implode(' AND ',$var) . ") ");
                
               $st->execute($values);
               
               return $st;
            }
function Select_query_Ens($db,$var,$fields,$table1,$table2) 
            {           
               foreach ($fields as $field) 
                  {
                     // Assume the data is coming from a form
                     $values[] = $_POST[$field];
                  }
               $st = $db->prepare("SELECT * FROM $table1 JOIN $table2 WHERE $table1.Code=$table2.Code_Enseignant AND (" . implode(' AND ',$var) . ') ');
                
               $st->execute($values);
               
               return $st;
            }
function Select_query_Doc($db,$var,$fields,$table1,$table2) 
            {           
               foreach ($fields as $field) 
                  {
                     // Assume the data is coming from a form
                     $values[] = $_POST[$field];
                  }
               $st = $db->prepare("SELECT * FROM $table1 JOIN $table2 WHERE $table1.Code=$table2.Code_Doctorant AND (" . implode(' AND ',$var) . ') ');
                
               $st->execute($values);
               
               return $st;
            }
function Select_query_Trv($db,$var,$fields,$table1) 
            {           
               foreach ($fields as $field) 
                  {
                     // Assume the data is coming from a form
                     $values[] = $_POST[$field];
                  }
               $st = $db->prepare("SELECT * FROM $table1 WHERE (" . implode(' AND ',$var) . ') ');
                
               $st->execute($values);
               
               return $st;
            }
function Select_query_Perfectionnement($db,$var,$fields,$table1,$table2) 
            {           
               foreach ($fields as $field) 
                  {
                     // Assume the data is coming from a form
                     $values[] = $_POST[$field];
                  }
               $st = $db->prepare("SELECT * FROM $table1 JOIN $table2 WHERE $table1.Code=$table2.Stage_Code AND (" . implode(' AND ',$var) . ') ');
                
               $st->execute($values);
               
               return $st;
            }
function Select_query_Manifestation($db,$var,$fields,$table1,$table2) 
            {           
               foreach ($fields as $field) 
                  {
                     // Assume the data is coming from a form
                     $values[] = $_POST[$field];
                  }
               $st = $db->prepare("SELECT * FROM $table1 JOIN $table2 WHERE $table1.Code=$table2.Stage_Code AND (" . implode(' AND ',$var) . ') ');
                
               $st->execute($values);
               
               return $st;
            }
function Select_query($db,$var,$fields,$table1) 
            {           
               foreach ($fields as $field) 
                  {
                     // Assume the data is coming from a form
                     $values[] = $_POST[$field];
                  }
               $st = $db->prepare("SELECT * FROM $table1 WHERE ( " . implode(' AND ',$var) . ' ) ');
                
               $st->execute($values);
               
               return $st;
            }

/*** ////////////////////////////////////////// Recherche Avancer ///////////////////////////////////////// ***/


function Select_query_cherch_labo($db,$var,$fields) 
            {           
               foreach ($fields as $field) 
                  {
                     // Assume the data is coming from a form
                     $values[] = $_POST[$field];
                  }
    
               $st = $db->prepare("SELECT * FROM Chercheur JOIN Laboratoire WHERE Chercheur.Laboratoire_Code=Laboratoire.Code AND 
               (" . implode(' AND ',$var) . ') ');
                
               $st->execute($values);
               
               return $st;
            }
function Select_query_Cher_univ($db,$var,$fields) 
            {           
               foreach ($fields as $field) 
                  {
                     // Assume the data is coming from a form
                     $values[] = $_POST[$field];
                  }
    
               $st = $db->prepare("SELECT * FROM Chercheur JOIN Enseignant JOIN Université WHERE Enseignant.Université_Code=Université.Code AND Chercheur.Code=Enseignant.Chercheur_Code AND (" . implode(' AND ',$var) . ') ');
                
               $st->execute($values);
               
               return $st;
            }
function Select_query_cherch_Stage($db,$var,$fields) 
            {           
               foreach ($fields as $field) 
                  {
                     // Assume the data is coming from a form
                     $values[] = $_POST[$field];
                  }
    
               $st = $db->prepare("SELECT * FROM Chercheur JOIN Stage WHERE Chercheur.Code=Stage.Chercheur_Code AND 
               (" . implode(' AND ',$var) . ') ');
                
               $st->execute($values);
               
               return $st;
            }

function Select_query_Univ_Labo($db,$var,$fields) 
            {           
               foreach ($fields as $field) 
                  {
                     // Assume the data is coming from a form
                     $values[] = $_POST[$field];
                  }
    
               $st = $db->prepare("SELECT * FROM Laboratoire JOIN Chercheur WHERE Laboratoire.Université_Code=Université.Code AND 
               (" . implode(' AND ',$var) . ') ');
                
               $st->execute($values);
               
               return $st;
            }
function Select_query_cherch_Ens_Stage($db,$var,$fields) 
            {           
               foreach ($fields as $field) 
                  {
                     // Assume the data is coming from a form
                     $values[] = $_POST[$field];
                  }
    
               $st = $db->prepare("SELECT * FROM Chercheur JOIN Enseignant JOIN Stage WHERE Chercheur.Code=Enseignant.Chercheur_Code AND Chercheur.Code=Stage.Chercheur_Code AND 
               (" . implode(' AND ',$var) . ') ');
                
               $st->execute($values);
               
               return $st;
            }
function Select_query_cherch_Doc_Stage($db,$var,$fields) 
            {           
               foreach ($fields as $field) 
                  {
                     // Assume the data is coming from a form
                     $values[] = $_POST[$field];
                  }
    
               $st = $db->prepare("SELECT * FROM Chercheur JOIN Doctorant JOIN Stage WHERE Chercheur.Code=Doctorant.Chercheur_Code AND Chercheur.Code=Stage.Chercheur_Code AND 
               (" . implode(' AND ',$var) . ') ');
                
               $st->execute($values);
               
               return $st;
            }
function Select_query_cherch_Stage_Man($db,$var,$fields) 
            {           
               foreach ($fields as $field) 
                  {
                     // Assume the data is coming from a form
                     $values[] = $_POST[$field];
                  }
    
               $st = $db->prepare("SELECT * FROM Chercheur JOIN Stage JOIN Manifestation WHERE Chercheur.Code=Stage.Chercheur_Code AND  Stage.Code=Manifestation.Stage_Code AND 
               (" . implode(' AND ',$var) . ') ');
                
               $st->execute($values);
               
               return $st;
            }
 function Update_query($db,$key_field,$fields,$vars,$table,$code) 
      
      {
            $values = array();
            
            if (! empty($_POST[$key_field])) {
            
            $update_fields = array();
            
            foreach ($fields as $field) 
                  {                           
                     $values[] = $_POST[$field];
                  }
            foreach($vars as $var)
               {
                $update_fields[] = "$var = ?";
               }
            
            $values[] = $_POST[$key_field];
            
            $st = $db->prepare("UPDATE $table SET " .
                                       implode(',', $update_fields) ." WHERE $code = ?");
                                       
            $st->execute($values);  
            
            return $st;            
      
      } 
   }         

?>