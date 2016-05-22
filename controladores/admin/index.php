<?php
require_once  '../../configs/session.php';


if(admin_autenticado()) {

    

if(isset($_GET['type']))
{
    $data=(object)$_GET;
    
    switch ($_GET['type'])
    {


        case 'form':

            
            $form = new FormBuild($data,$db);
            $smarty->assign('form',$form=$form->FormBuild());    

        break;


        case 'list':
            
           $listener = new Listeners($data,$db);
            switch ($_GET['action'])
             {
                
                case 'apps':  
                   $smarty->assign('table',$table=$listener->listenerApps()); 
                break; 
            
                case 'adsList':
                   $smarty->assign('table',$table=$listener->adsCodes()); 
                break;
            
                case 'downloads':
                    $smarty->assign('table',$table=$listener->listenerDownloads()); 
                break;
            
                
                  
                 

                case 'members':
                    $smarty->assign('table',$table=$listener->listener()); 
                break;
            
                case 'subCat':
                    $smarty->assign('table',$table=$listener->listenerSubCat()); 
                break;
            
                case 'patner':
                   $smarty->assign('table',$table=$listener->listener());  
                break;
            
                case 'producer':
                     $smarty->assign('table',$table=$listener->listener()); 
                break;
            
                case 'ads':
                     $smarty->assign('table',$table=$listener->listenerAds()); 
                break;
            
                case 'appsUser':
                    $smarty->assign('table',$table=$listener->listenerUserApps()); 
                break;
            
                case 'files':
                    $smarty->assign('table',$table=$listener->listenerFiles()); 
                break;
            
            
                case 'stats':
                    $table=$listener->listenerStats();
                    
                    $smarty->assign('table',$table=$table); 
                break;
                  
      
            }
            
            
            break; 
   
            
            
            
          case 'delete':
              
              
            $listener = new Listeners($data,$db); 
            if(!$result=$listener->delete($data->action))
                return false;
            header('location:index.php?type=list&action='.$result);
                
            
          break;
      
         case 'deleteId':
            $listener = new Listeners($data,$db); 
              if(!$result=$listener->deleteId($data->action))
                return false;
            header('location:index.php?type=list&action='.$result);  
         break;
         
           case 'deleteUser':
                 $listener = new Listeners($data,$db); 
              if(!$result=$listener->deleteUser())
                return false;
            header('location:index.php?type=list&action=members');     
                    
          break; 
        
            case 'deleteApp':
                 $listener = new Listeners($data,$db); 
              if(!$result=$listener->deleteApp())
                return false;
            header('location:index.php?type=list&action=apps');    
                
            break;
     
     
     
            case 'view':
                    
                  $listener = new Listeners($data,$db);    
                   
                  switch ($_GET['action'])
                  {
                       
                   
                      case 'file':
                           $smarty->assign('view',$view=$listener->viewFile());
                      break;
                  }
             break; 
         
         
            case 'download':
                
                $listener = new Listeners($data, $db);
                
                switch ($_GET['action'])
                {
                    case 'QR':
                        
                    if(!$result=$listener->download())
                            return false;
                            header('Location:../../files/imgApp/downloadPage.php?name='.$result);
                    break;
                }
                          
            break;
            
            
           
                         
            
                          
                         
                          
                        
                    
                      
                
                    
                    
              
            
            
            
            
                case 'logout':
                          
                          logOut();
                    header('location:../../../index.php');
                      break;
      
      
        }             
                    
                    
           
                       
              
    
        
            
            
       
            
       
        



    }    
    



if(isset($_POST['submit']))
    {
   
   
        $data=(object)$_POST;
        $sql= new Contenedor($data,$db);
        
        
        
        
           if(!$result=$sql->generateForm())
               
               $smarty->assign('error',$error=true);
               $smarty->assign('table',$table=$result); 
                   
                   
               
        
        
    }



$smarty->display('admin/index.tpl');

}

