<?php
if (@$_REQUEST[link]=="login"){include('pages/login.php');}

elseif (@$_REQUEST[link]=="user_login"){include('pages/users/login.php');}
elseif (@$_REQUEST[link]=="admin_login"){include('pages/workflow/login.php');}
elseif (@$_REQUEST[link]=="dashboard"){include('pages/dashboard.php');}
elseif (@$_REQUEST[link]=="new_demande"){include('pages/users/nouvelle_demande.php');}
elseif (@$_REQUEST[link]=="valide_demande"){include('pages/users/valid_nouvelle_demande.php');}
elseif (@$_REQUEST[link]=="liste_demandes"){include('pages/users/listes_demandes.php');}
elseif (@$_REQUEST[link]=="saisie_agents"){include('pages/workflow/enregistrer_agent.php');}
elseif (@$_REQUEST[link]=="listes_all"){include('pages/workflow/listes_toutes_demandes.php');}
elseif (@$_REQUEST[link]=="listes_a_imputer"){include('pages/workflow/demande_a_imputer.php');}
elseif (@$_REQUEST[link]=="voir_demande"){include('pages/workflow/voir_demande.php');}
elseif (@$_REQUEST[link]=="liste_a_traiter"){include('pages/workflow/dispatchings_traitements.php');}
elseif (@$_REQUEST[link]=="traiter_demande"){include('pages/workflow/traiter_demande.php');}

else{include('pages/login.php');}
?>
